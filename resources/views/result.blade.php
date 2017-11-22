@extends('layouts.app')
@section('js')
<script>
    $(function(){
        $("#export").click(function(){
            $("#export_table").tableToCSV();
        });
    });
</script>
@endsection
@section('content')
<div class="wrapper">
  <div class="page-header page-header-small" style="max-height: 80px;">
    <div class="page-header-image" data-parallax="true" style="background-image: url('{{ asset('assets/img/bg.png') }}');">
    </div>
  </div>
  <div class="section section-about-us">
<meta http-equiv="refresh" content="180">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Result - {{ $task->id }}</h1>
        <h4>Submitter : {{ $task->name }}</h4>
        <h4>Date : {{ $task->submit_time }}</h4>
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">Proteins</h3>
          </div>
          <div class="panel-body">
            <table id="export_table" class="table table-striped">
    <tr>
      <td>#</td>
      <td><b>Protein Name</b></td>
      <td><b>Length</b></td>
      <td><b><span class="label label-primary">Predicted</span></b></td>
      <td><b><span class="label label-success">Probability</span></b></td>
    </tr>
    @foreach ($proteins as $emt)
    <tr>
      <td>{{ $loop->index+1 }}</td>
      <td>{{ $emt->name }}</td>
      <td>{{ strlen($emt->data) }}</td>
      <td>@if ($emt->predicted=='')<span class="label label-default">In Process</span>@else{{$emt->predicted}}@endif</td>
      <td>@if ($emt->probability=='')<span class="label label-default">In Process</span>@else{{$emt->probability}} %@endif</td>>
    </tr>
    @endforeach
</table>
            <button id="export" data-export="export">Export as CSV</button>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
</div>
@endsection
