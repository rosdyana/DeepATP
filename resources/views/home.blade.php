@extends('layout') 
@section('content')

<div class="page-header page-header-small" style="max-height: 440px;">
  <div class="page-header-image" data-parallax="true" style="background-image: url('assets/img/bg.png');">
  </div>
  <div class="container">
    <div class="content-center">
      <h1 class="title">Welcome to DeepATP,</h1>
      <h2 class="title">a webserver to predict ATP Binding Sites in Membrane Proteins Using 2D Convolutional Neural Network .</h2>
      <div class="text-center">
        <a href="{{ url('submission') }}" class="btn btn-info btn-round btn-lg"><i>Submit your proteins</i></a>
      </div>
    </div>
  </div>
</div>
<div class="section section-home">
  <div class="container">
    <div class="section-story-overview">
      <div class="row">
        <h3>Motivation</h3>
        <p align="justify">Membrane proteins are the most important drug target accounting for around 30% proteins in genomes of living organisms.
          One of the important roles of this protein type is to bind with adenosine triphosphate (ATP). This facilitates
          some crucial biological processes such as metabolism and cell signalling. Many researchers have paid significant
          attention to elucidating the localization of ATP-binding sites with much progress. However, such researchs on membrane
          proteins were limited. We are one of the pioneers in using deep learning approach for identifying ATP-binding sites.
          Our predictor, DeepATP, conbined evolutionary information in the form of Position-Specific Scoring Matrix and 2D
          Convolutional Neural Network to predict these interacting sites in membrane proteins. Random over-sampling was
          used to solved the imbalanced data learning problem.
        </p>
        <h3>Results</h3>
        <p align="justify">On the independent test, DeepATP can obtain a MCC of 0.79 and an AUC of 93%. Compared to some existing sequence-based
          predictors and some traditional machine learning algorithms, our approach can improve the performance significantly.
          We suggest this method as a reliable tools for biologists in predicting these binding site in membrane proteins.
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