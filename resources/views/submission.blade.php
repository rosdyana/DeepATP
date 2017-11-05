@extends('layouts.app')
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
    <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/bg.png');">
    </div>
  </div>
  <div class="section section-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h5 class="description"> <strong>Please cite!</strong>
    If you use Deep-Efflux for research, please cite the following paper: xxxx".
    The preprint is available on <a href="/">xxxx</a>.
    If you have any comments, corrections or questions contact <a href="mailto:tajusemmy@yahoo.com?Subject=[ASK][DeepEfflux]" target="_top">Nguyen-Trinh Trung-Duong</a>.</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Submission</h3>
              <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of the world,
                it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds of natural reasons, there’s huge variety of the state of the ice.
              </p>
              <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of the world,
                it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds of natural reasons, there’s huge variety of the state of the ice.
              </p>
            </div>
            <div class="panel-body">
              @if (session('error'))
              <div class="error">
                {{ session('error') }}
              </div>
              @endif
              <form class="frm-submit" role="form" method="POST" action="{{ url('submit') }}" enctype="multipart/form-data">
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
                <button type="submit" class="btn btn-info btn-round btn-lg">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection