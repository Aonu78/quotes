@extends('main')
@section('quotesofday')
<section class="thought-of-day-category thought-of-day clearfix ng-scope" ng-controller=ThoughtOfDay ng-include src=template_path>
    <h2 class="h h2 ng-scope">
        Forbes Quote Of The Day
        <p>DAILY WISDOM BROUGHT TO YOU BY FORBES</p>
    </h2>
    <blockquote class="bubble ng-scope">
        <a href=# class=clearfix>
            <p class="p p2 ng-binding">Teach self-denial and make its practice pleasure, and you can create for the world a destiny more sublime that ever issued from the brain of the wildest dreamer.</p>
        </a>
        <div class=socialize gigya-sharing data-showprefix=true>
            <div class=social-icons><span class=share>Share <i class="icn forbesicon-share"></i></span> <a ng-click=postFacebook() class="icn forbesicon-facebook">F</a> <a ng-click=postTwitter() class="icn forbesicon-twitter"></a> <a ng-click=postLinkedin() class="icn forbesicon-linkedin"></a></div>
        </div>
        <footer><a ng-href=author/sir-walter-scott class="author bubble-trail" href=#><img ng-src=http://i.forbesimg.com/media/lists/quotebank/sir-walter-scott_100x100.jpg src="files/w2.jpeg"> <cite class=ng-binding>Sir Walter Scott</cite></a></footer>
    </blockquote>
</section>
    
@endsection