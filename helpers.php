<?php

function quickRandom($length = 16)
{
    $pool = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
}

function str2arr($str, $sep_arr = '||', $sep_elm = ':')
{
    $arrs = explode($sep_arr,$str);
    $out = [];
    foreach($arrs as $arr){
        $t = explode($sep_elm,$arr,2);
        if (isset($out[$t[0]]))
            if (is_array($out[$t[0]]))
                array_push($out[$t[0]],trim($t[1]));
            else $out[$t[0]] = [$out[$t[0]]];
        else $out[$t[0]] = trim($t[1]);
    }
    return $out;
}

function protein_makeup($str,$pop_lab = '',$pop_color = 'info')
{
    // Fomulation
    $str = preg_replace('/\((\d+)\)/', "<sub>$1</sub>", $str);
    $str = preg_replace('/\(([\d]*\+)\)/', "<sup>$1</sup>", $str);
    $str = preg_replace('/(->)/', " → ", $str);

    preg_match_all("/{([^;]+)}/", $str, $pops);
    if (count($pops)>0){
        foreach ($pops[1] as $pop) {
            $arrs = preg_split('/, */',$pop);
            $pep = ' <span class="label label-'.$pop_color.'" data-toggle="popover" data-placement="right" data-html="true" data-content="<ul class=\'list-unstyled\'>';
            for ($i=0; $i < count($arrs); $i++) {
                $pep .= "<li>$arrs[$i]</li>";
            }
            $pep .= '</ul>" style="cursor:pointer"><span class="glyphicon glyphicon-tags" style="padding-right:5px"></span> '.count($arrs).' '.$pop_lab.'</span>';
            $str = str_replace('{'.$pop.'}', $pep, $str);
        }
    }

    $str = preg_replace('/PubMed:(\d+)/', "PubMed:<a href='http://www.uniprot.org/citations/$1'>$1</a>", $str);
    $str = preg_replace('/UniProtKB:(\w+)/', "UniProtKB:<a href='http://www.uniprot.org/uniprot/$1/'>$1</a>", $str);


    return $str;
}

function protein_sort_pos($arrs,$seq_len,$name = ''){
  $out = [];
  if (!is_array($arrs)) $arrs = [$arrs];
  foreach($arrs as $arr){
      $t = preg_split('/\s{2,}/',$arr);
      $start = $t[0]=='?' ? 0 : intval($t[0]);
      $end = $t[1]=='?' ? 0 : intval($t[1]);
      $pos_len = $end - $start + 1;
      $left = round($start*100/$seq_len);
      $width = max(round($pos_len*100/$seq_len),1);
      $out[$t[0]] = [$name,$start,$end,$t[2],$pos_len,$left,$width];
  }
  return $out;
}
