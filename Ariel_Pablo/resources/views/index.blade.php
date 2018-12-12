@extends('layouts.master-materialize')
@section('index')
  <div class="parallax-container">
    <div class="container">
      <div class="row">
        <h2>Titulo sin imaginación</h2>
        <p>Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling</p>
      </div>
    </div>
    <div class="parallax">
      <img src="https://mdbootstrap.com/img/Photos/Others/city13.jpg">
    </div>
  </div>
  <div class="section white">
    <div class="row container">
      <h2 class="header">Parallax</h2>
      <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="http://mdbootstrap.com/img/Photos/Others/nature4.jpg"></div>
  </div>
@endsection

@section('script')
  <script>
    $(document).ready(function(){
    $('.parallax').parallax();
    });
  </script>
@endsection
