@extends('layout') 
@section('js')
<script type="text/javascript">
  $('.frm-submit').submit(function(event) {
    if ($('.frm-submit #data').val() == '' && $('.frm-submit #file').val() == '') {
      alert('Please paste or upload the amino acid sequence in FASTA format');
      $('.frm-submit #data').focus();
      event.preventDefault();
    }
  });

</script>
@endsection
 
@section('content')
<div class="wrapper">
  <div class="page-header page-header-small" style="max-height: 80px;">
    <div class="page-header-image" data-parallax="true" style="background-image: url('assets/img/bg.png');">
    </div>
  </div>
  <div class="section section-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h5 class="description"> <strong>Please cite!</strong> If you use DeepNAD-binder for research, please cite the following paper: xxxx". The
            preprint is available on <a href="/">xxxx</a>. If you have any comments, corrections or questions please
            <a href="{{ url('contact') }}">contact us</a>.</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Submission</h3>
              <p>This server allows the submission of sequence in fasta format (we also give you the fasta file example).
                <br>The user can choose two options to submit, including paste the sequence into text area or upload sequences
                file
                <br>The user can submit one single fasta file or multiple fasta file
              </p>
            </div>
            @if (session('error'))
            <div class="alert alert-danger" role="alert">
              <div class="container">
                <div class="alert-icon">
                  <i class="now-ui-icons objects_support-17"></i>
                </div>
                <strong>Oh snap!</strong> {{ session('error') }}.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                        </span>
                    </button>
              </div>
            </div>
            @endif
            <form class="frm-submit" role="form" method="POST" action="{{ url('submission') }}" enctype="multipart/form-data">
              {!! csrf_field() !!}
              <div class="input-group">
                <span class="input-group-addon">
                      <i class="fa fa-user-circle"></i>
                  </span>
                <input type="text" class="form-control" id="name" name="name" placeholder="Input your name">
              </div>
              <div class="input-group">
                <span class="input-group-addon">
                      <i class="fa fa-envelope"></i>
                  </span>
                <input type="email" class="form-control" id="email" name="email" placeholder="Input your e-mail" required>
              </div>
              <div class="input-group">
                <textarea class="form-control" name="data" id="data" rows="10" placeholder="Input your protein sequences"></textarea>
              </div>
              <div class="form-group">
                <label for="file">Sequence File</label>
                <input type="file" id="file" name="file" />
                <p class="help-block">
                  File in FASTA format with maximum size 2,048KiB.
                </p>
              </div>
              <button type="submit" class="btn btn-info btn-round">Submit</button>
            </form>
            <br>
            <p><b>Sample fasta Sequence(s)</b></p>
            <pre>
<b>&gt;sp|P51149|RAB7A_HUMAN Ras-related protein Rab-7a OS=Homo sapiens GN=RAB7A PE=1 SV=1
MTSRKKVLLKVIILGDSGVGKTSLMNQYVNKKFSNQYKATIGADFLTKEVMVDDRLVTMQ
IWDTAGQERFQSLGVAFYRGADCCVLVFDVTAPNTFKTLDSWRDEFLIQASPRDPENFPF
VVLGNKIDLENRQVATKRAQAWCYSKNNIPYFETSAKEAINVEQAFQTIARNALKQETEV
ELYNEFPEPIKLDKNDRAKASAESCSC
<b>&gt;sp|P62491|RB11A_HUMAN Ras-related protein Rab-11A OS=Homo sapiens GN=RAB11A PE=1 SV=3
MGTRDDEYDYLFKVVLIGDSGVGKSNLLSRFTRNEFNLESKSTIGVEFATRSIQVDGKTI
KAQIWDTAGQERYRAITSAYYRGAVGALLVYDIAKHLTYENVERWLKELRDHADSNIVIM
LVGNKSDLRHLRAVPTDEARAFAEKNGLSFIETSALDSTNVEAAFQTILTEIYRIVSQKQ
MSDRRENDMSPSNNVVPIHVPPTTENKPKVQCCQNI
</pre>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection