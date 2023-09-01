<!DOCTYPE html> 
<html>
    <head>
        <meta charset=utf-8>
        <title>YourQuotes.Pro |@yield('title')</title>
        <link rel="stylesheet" href={{asset('styles.css')}}>
        <meta name=referrer content=origin>
        <meta name=description content=@yield('description')>
        <meta name=keywords content="quotes, best quotes, daily quotes, famous quotes, great quotes, inspirational quotes, inspiring quotes, life quotes, motivational quotes, positive quotes, quotes about life">
        <link rel=canonical href=https://yourquotes.pro/>
        <meta name=viewport content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name=fragment content=!>
        <meta http-equiv=origin-trial content="">
        <link type=image/x-icon rel="shortcut icon" href={{ asset('favicon.ico') }}>

        <link rel="apple-touch-startup-image" href={{ asset('/apple-touch-icon.png')}}>
        <link rel="icon" type="image/png" href={{ asset('/favicon-16x16.png')}} sizes="16x16">
        <link rel="icon" type="image/png" href={{ asset('/favicon-32x32.png')}} sizes="32x32">
        <link rel="icon" type="image/png" href={{ asset('/android-chrome-192x192.png')}} sizes="192x192">
        <link rel="icon" type="image/png" href={{ asset('/android-chrome-512x512.png')}} sizes="512x512">
        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  
    <body>
        <div id=ga-track></div>
        <div id=comscore></div>
		<script>
			function mynavfunc() {
			   var element = document.getElementById("mynav");
			   element.classList.toggle("expanded");
			}
			</script>
        <div class=page-content fbs-breakpoint-monitor>
            <div class="page-container clearfix">
                <div class="layout clearfix">
                    <div class="left-section scroll ">
                        <nav id=menu class="thoughts-menu ">
                            <ul>
                                <li>
                                    <h3>Quotes by Topic</h3>
                                    <ul class="two-cols clearfix">
                                        @foreach($category as $item)
                                            <li class=><a class='' onclick="mynavfunc()" href="/filter/{{$item->name}}">{{$item->name}}</a>  {{--  --}}
                                        @endforeach
                                    </ul>
                            </ul>
                        </nav>
                    </div>
                    <div id="mynav" class="right-section anim">
                        <header class=>
                            {{-- <i class="fa-solid fa-bars"></i> --}}
                            <i class="fa-solid fa-bars icn quotes-menu " onclick="mynavfunc()"></i>
                            <h1 class="h h1  headername"><a href=# class="a a2">
                                {{-- <i class="fa-solid fa-y"></i> --}}
                                <em class="fa-solid fa-y fa-o icn "></em><em class="fa-solid fa-o icn "></em> 
                                <em class="fa-solid fa-u icn "></em><em class="fa-solid fa-r icn "></em> 
                                <strong>Quotes</strong></a> <span class=header-subtitle>
								<!-- Thoughts On The Business Of Life -->
							</span></h1>
                            <div class="search">
                                <div class=section_contain>
                                    <form class="large_input ng-pristine ng-invalid ng-invalid-required" action="/search" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class=input_holder><input type=text name="search"  placeholder=Search required class="ng-pristine ng-untouched ng-invalid ng-invalid-required" value></div>
                                        <button type=submit class=btn-submit>
                                            <i class="fa-solid fa-magnifying-glass icn quotes-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <style>
                                a > span { visibility: visible; opacity: 1;}
a:hover > span { visibility: visible; opacity: 0.7;transition: visibility 0s, opacity 0.5s linear;}
                            </style>
                            <a href="/" class="home-lnk ">                                
                                <em class="fa-solid fa-house icn quotes-home"></em><span class="home-title sf-hidden">Home.com</span></a>
                        </header>
                        