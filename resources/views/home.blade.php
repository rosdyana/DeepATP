@extends('layout') 
@section('content')

<div class="page-header page-header-small" style="max-height: 440px;">
  <div class="page-header-image" data-parallax="true" style="background-image: url('assets/img/bg.png');">
  </div>
  <div class="container">
    <div class="content-center">
      <h1 class="title">Welcome to DeepNAD-Binder,</h1>
      <h2 class="title">a webserver to predict NAD binding sites in electron transport porteins using 2D CNN and PSSM.</h2>
      <div class="text-center">
        <a href="{{ url('submission') }}" class="btn btn-info btn-round btn-lg"><i>Submit your proteins</i></a>
      </div>
    </div>
  </div>
</div>
<div class="section section-home">
  <div class="container">
    <div class="separator separator-info"></div>
    <div class="section-story-overview">
      <div class="row">
        <h3>Introduction</h3>
        <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue
          whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of
          the world, it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds
          of natural reasons, there’s huge variety of the state of the ice.
        </p>
        <h3>Method</h3>
        <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue
          whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of
          the world, it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds
          of natural reasons, there’s huge variety of the state of the ice.
        </p>
        <h3>Dataset</h3>
        <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue
          whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of
          the world, it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds
          of natural reasons, there’s huge variety of the state of the ice.
        </p>
      </div>
    </div>
  </div>
  <div class="section section-team text-center">
    <div class="container">
      <h2 class="title">Team Members</h2>
      <div class="team">
        <div class="row">
          <div class="col-md-6">
            <div class="team-player">
              <img src="assets/img/ou.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
              <h4 class="title">Yu-Yen Ou</h4>
              <p class="category text-info">Assistant Professor</p>
              <p class="description">Department of Computer Science and Engineering.</br>Yuan Ze University</br>135 Yuan-Tung Road, Chung-Li, Taiwan
                32003, R.O.C.</p>
              <a href="mailto:yienou@gmail.com " class="btn btn-info btn-icon btn-round"><i class="fa fa-envelope"></i></a>
              <a href="http://fb.com/yienou" class="btn btn-info btn-icon btn-round"><i class="fa fa-facebook-square"></i></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-player">
              <img src="assets/img/duong.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
              <h4 class="title">Nguyen-Trinh Trung-Duong</h4>
              <p class="category text-info">Research Assistant</p>
              <p class="description">Department of Computer Science and Engineering.</br>Yuan Ze University</br>135 Yuan-Tung Road, Chung-Li, Taiwan
                32003, R.O.C.</p>
              <a href="mailto:khucnam@yahoo.com" class="btn btn-info btn-icon btn-round"><i class="fa fa-envelope"></i></a>
              <a href="http://fb.com/nguyentrinh.duong" class="btn btn-info btn-icon btn-round"><i class="fa fa-facebook-square"></i></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-player">
              <img src="assets/img/khanh.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
              <h4 class="title">Nguyen-Quoc-Khanh Le</h4>
              <p class="category text-info">Research Assistant</p>
              <p class="description">Department of Computer Science and Engineering.</br>Yuan Ze University</br>135 Yuan-Tung Road, Chung-Li, Taiwan
                32003, R.O.C.</p>
              <a href="mailto:khanhlee87@gmail.com" class="btn btn-info btn-icon btn-round"><i class="fa fa-envelope"></i></a>
              <a href="http://fb.com/khanhleedl" class="btn btn-info btn-icon btn-round"><i class="fa fa-facebook-square"></i></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-player">
              <img src="assets/img/ros.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
              <h4 class="title">Rosdyana Mangir Irawan Kusuma</h4>
              <p class="category text-info">Research Assistant</p>
              <p class="description">Department of Computer Science and Engineering.</br>Yuan Ze University</br>135 Yuan-Tung Road, Chung-Li, Taiwan
                32003, R.O.C.</p>
              <a href="mailto:rosdyana.kusuma@gmail.com" class="btn btn-info btn-icon btn-round"><i class="fa fa-envelope"></i></a>
              <a href="https://www.linkedin.com/in/rosdyanakusuma/" class="btn btn-info btn-icon btn-round"><i class="fa fa-linkedin"></i></a>
              <a href="http://github.com/rosdyana/" class="btn btn-info btn-icon btn-round"><i class="fa fa-github"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection