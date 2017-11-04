@extends('layouts.app') @section('content')
<div class="wrapper">
  <div class="page-header page-header-small">
    <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/bg6.jpg');">
    </div>
    <div class="container">
      <div class="content-center">
        <h1 class="title">Welcome to NAD Binder,</h1>
        <h2 class="title">a webserver to identify nad binding site in protein sequence.</h2>
        <div class="text-center">
                  <a href="{{ url('/submission') }}" class="btn btn-info btn-round btn-lg"><i>Submit your proteins</i></a>
        </div>
      </div>
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
      <div class="separator separator-primary"></div>
      <div class="section-story-overview">
        <div class="row">
            <h3>Introduction</h3>
            <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of the world,
              it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds of natural reasons, there’s huge variety of the state of the ice.
            </p>
            <h3>Method</h3>
            <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of the world,
              it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds of natural reasons, there’s huge variety of the state of the ice.
            </p>
            <h3>Dataset</h3>
            <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of the world,
              it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds of natural reasons, there’s huge variety of the state of the ice.
            </p>
      </div>
    </div>
  </div>
  <div class="section section-team text-center">
    <div class="container">
      <h2 class="title">Here is our team</h2>
      <div class="team">
        <div class="row">
          <div class="col-md-6">
            <div class="team-player">
              <img src="../assets/img/avatar.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
              <h4 class="title">Romina Hadid</h4>
              <p class="category text-primary">Model</p>
              <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                <a href="#">links</a> for people to be able to follow them outside the site.</p>
              <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-twitter"></i></a>
              <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-instagram"></i></a>
              <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-facebook-square"></i></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-player">
              <img src="../assets/img/ryan.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
              <h4 class="title">Ryan Tompson</h4>
              <p class="category text-primary">Designer</p>
              <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                <a href="#">links</a> for people to be able to follow them outside the site.</p>
              <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-twitter"></i></a>
              <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-player">
              <img src="../assets/img/eva.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
              <h4 class="title">Eva Jenner</h4>
              <p class="category text-primary">Fashion</p>
              <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                <a href="#">links</a> for people to be able to follow them outside the site.</p>
              <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-google-plus"></i></a>
              <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-youtube-play"></i></a>
              <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-twitter"></i></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-player">
              <img src="../assets/img/eva.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
              <h4 class="title">Eva Jenner</h4>
              <p class="category text-primary">Fashion</p>
              <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                <a href="#">links</a> for people to be able to follow them outside the site.</p>
              <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-google-plus"></i></a>
              <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-youtube-play"></i></a>
              <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
