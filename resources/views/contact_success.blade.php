@extends('layout')

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
    <h3 class="subhead">Thank you for your comment.<br>We will respose to you as soon as possible.</h3>
    <a href="{{ url('home') }}" class="btn btn-primary btn-round"><i class="fa fa-home"></i> Back to Home</a>
</div>
</div>
</div>
</div>
</div>
@endsection
