@extends('layout') @push('css')
<style media="screen">
</style>

@endpush @push('js') 
@endpush 
@section('content')
<div class="wrapper">
    <div class="page-header page-header-small" style="max-height: 80px;">
        <div class="page-header-image" data-parallax="true" style="background-image: url('assets/img/bg.png');">
        </div>
    </div>
    @if (session('error'))
    <div class="notification is-danger">
        <button class="delete"></button> {{ session('error') }}
    </div>
    @endif @if (session('done'))
    <div class="notification is-success">
        <button class="delete"></button> {{ session('error') }}
    </div>
    @endif

    <div class="section section-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h5>Feel free to shout us by feeling the contact form.
                        <br>We appreciate your comments to make our website more complete in the future.</h5>
                </div>
            </div>

            <div class="contact-primary">

                <h3 class="h6">Send Us A Message</h3>

                <form class="frm-submit" method="POST" action="{{ url('contact') }}" role="form" enctype="multipart/form-data" novalidate="novalidate">
                    <fieldset>
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
                            <input type="email" class="form-control" id="email" name="email" placeholder="Input your email">
                        </div>
                        <div class="input-group">
                            <textarea class="form-control" name="message" id="message" placeholder="Here can be your nice message" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-round"><i class="fa fa-envelope"></i> Ask Us</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection