<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>TourGuider</title>
  <meta name="description" content="Tourguider">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="แพ็คเกจทัวร์ท่องเที่ยว">
  <meta name="author" content="ID Drives">

    @include('layouts.simple.css')
    @yield('style')
</head>

 <!-- Start preloader -->
 <div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                <span data-text-preloader="L" class="letters-loading">
                    L
                </span>
                
                <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
                
                <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
                
                <span data-text-preloader="D" class="letters-loading">
                    D
                </span>
                
                <span data-text-preloader="I" class="letters-loading">
                    I
                </span>
                
                <span data-text-preloader="N" class="letters-loading">
                    N
                </span>
                
                <span data-text-preloader="G" class="letters-loading">
                    G
                </span>
            </div>
        </div>	

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
</div>
<!-- End preloader -->
<body>
@include('layouts.simple.header')

<main class="main__content_wrapper">
@include('layouts.simple.banner')  

      <!-- Container-fluid starts-->
      @yield('content')
      <!-- Container-fluid Ends-->

 <!-- footer start-->
 @include('layouts.simple.footer') 

 @include('layouts.simple.script')  
 <!-- Plugin used-->
</body>
</html>