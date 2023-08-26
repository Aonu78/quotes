<!DOCTYPE html> 
<html class="no-js ng-scope" ng-app=thoughtsApp ng-controller=Meta>
    <head fbs-track=comscore,ga class=ng-isolate-scope>
        <meta charset=utf-8>
        <title meta-title class=ng-binding>If you don’t take it for granted that... William Feather - Forbes Quotes</title>
        <link rel="stylesheet" href={{asset('styles.css')}}>
        <meta name=referrer content=origin>
        <meta name=description content="If you don’t take it for granted that the other man will do his job, you’re not an executive.">
        <meta name=keywords content="quotes, best quotes, daily quotes, famous quotes, great quotes, inspirational quotes, inspiring quotes, life quotes, motivational quotes, positive quotes, quotes about life">
        <link rel=canonical href=#>
        <meta name=viewport content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name=fragment content=!>
        <meta property=fb:app_id content=123694841080850>
        <meta property=og:type content=article>
        <meta property=og:url content=#>
        <meta property=og:title content="If you don’t take it for granted that... William Feather - Forbes Quotes">
        <meta property=og:description content="If you don’t take it for granted that the other man will do his job, you’re not an executive.">
        <meta property=og:image content="image URL here">
        <meta name=twitter:card content=summary_large_image>
        <meta name=twitter:site content=@forbes>
        <meta name=twitter:title content="If you don’t take it for granted that... William Feather - Forbes Quotes">
        <meta name=twitter:description content="If you don’t take it for granted that the other man will do his job, you’re not an executive.">
        <meta name=twitter:image:src content="image URL here">
        <meta http-equiv=origin-trial content="">
        <link type=image/x-icon rel="shortcut icon" href={{ asset('images/f.ico') }}>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}

        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"> --}}
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
                    <div class="left-section scroll ng-scope" ng-controller=Sidebar ng-include src='#'>
                        <nav id=menu class="thoughts-menu ng-scope">
                            <ul>
                                <li>
                                    <h3>Quotes by Topic</h3>
                                    <ul class="two-cols clearfix">
                                        @foreach($category as $item)
                                            <li ng-repeat="item in sidebar_data.contentPositions" class=ng-scope><a class='ng-binding' onclick="mynavfunc()" href="/filter/{{$item->name}}">{{$item->name}}</a>  {{--  --}}
                                        @endforeach
                                    </ul>
                            </ul>
                        </nav>
                    </div>
                    <div id="mynav" class="right-section anim">
                        <header ng-controller=Header ng-include src=template_path class=ng-scope>
                            {{-- <i class="fa-solid fa-bars"></i> --}}
                            <i class="fa-solid fa-bars icn quotes-menu ng-scope" onclick="mynavfunc()"></i>
                            <h1 class="h h1 ng-scope"><a href=# class="a a2"><em class="icn quotes-forbes"></em> <strong>Quotes</strong></a> <span class=header-subtitle>
								<!-- Thoughts On The Business Of Life -->
							</span></h1>
                            <div class=search do-search>
                                <div class=section_contain>
                                    <form class="large_input ng-pristine ng-invalid ng-invalid-required" action="/search" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class=input_holder><input type=text name=search ng-model=search_val placeholder=Search required class="ng-pristine ng-untouched ng-invalid ng-invalid-required" value></div>
                                        <button type=submit class=btn-submit>
                                            <i class="fa-solid fa-magnifying-glass icn quotes-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <a href=# class="home-lnk ng-scope">
                                {{-- <i class="fa-solid fa-house"></i> --}}
                                <em class="fa-solid fa-house icn quotes-home"></em><span class="home-title sf-hidden"></span></a>
                        </header>
                      