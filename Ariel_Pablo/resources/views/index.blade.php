@extends('layouts.master-materialize')
@section('index')
  <div class="parallax-container valign-wrapper center-align">
    <div class="container ">
      <div class="row white-text ">
        <h2>Patiperras</h2>
        <h4>Frase de la organización(?)</h4>
        <i class="fas fa-chevron-down"></i>
      </div>
      <div class="row">

      </div>

    </div>
    <div class="parallax">
      <img class="imagen-parallax"src="https://pre00.deviantart.net/4ac1/th/pre/i/2008/210/b/c/ornate_wallpaper_2_by_insurrectionx.jpg">
    </div>
  </div>
  <div class="section ">
    <div class="row container blue">
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

    $(document).ready(function(){
    $('.scrollspy').scrollSpy();
  });
  </script>
@endsection
