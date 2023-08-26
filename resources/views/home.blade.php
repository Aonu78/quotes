@extends('main')
@section('quotesofday')
@if($quoteid)
<section class="primary-single-thought clearfix anim ng-scope" ng-controller=SingleThought ng-include src=template_path>
    <div id=leaderboard-singlethought ad-unit=top class="leaderboard-ad homepage ng-scope ng-isolate-scope">
        <div id=google_ads_iframe_/7175/fdc.forbes/thoughts_4__container__ style="border:0pt none;width:728px;height:0px"></div>
    </div>
    <section class="thoughts-stream thoughts ng-scope">
        <div class=section-contain>
            <blockquote class=bubble>
                <p class=ng-binding>{{$quoteid->quote}}
                <footer>
                    <a ng-href=author/william-feather class="author bubble-trail" href="/author/{{$quoteid->artist}}"> 
                        
                        @foreach ($artists as $art)
                    @if($art->name==$quoteid->artist)
                        @if($art->image==null)
                            <img src='\images\avatar.jpeg' class=ng-scope style="background-blend-mode:normal!important;background-clip:content-box!important;background-position:50% 50%!important;background-color:rgba(0,0,0,0)!important;background-image:var()!important;background-size:100% 100%!important;background-origin:content-box!important;background-repeat:no-repeat!important"> <cite class=ng-binding>{{$quoteid->artist}}</cite></a>

                        @else
                            <img src='\artists\{{$art->image}}' class=ng-scope style="background-blend-mode:normal!important;background-clip:content-box!important;background-position:50% 50%!important;background-color:rgba(0,0,0,0)!important;background-image:var()!important;background-size:100% 100%!important;background-origin:content-box!important;background-repeat:no-repeat!important"> <cite class=ng-binding>{{$quoteid->artist}}</cite></a>

                        @endif
                    @endif
                @endforeach

                        
                        <div class=socialize gigya-sharing show-prefix=true>
                        <div class=social-icons>
                            {{-- <button class="share paddingclass">Copy</button> --}}
                            {{-- <i class="fa-solid fa-copy "></i> --}}
                            {{-- <i class="fa-regular fa-copy share" style="font-size: 30px"></i>
                            <i class="fa-solid fa-share share" style="font-size: 30px"></i>--}}
                            {{-- <h4 class="share">Share</h4>  --}}
                            <!-- HTML !-->
<button class="button-3 share" role="button">Copy</button>
                            <p class="share paddingclass" style="font-size: 12px">Share To</p>
                            <span class="share">.</span> 
                            <a><i class="fa-brands fa-facebook icn" style="color: #24385c;"></i></a> 
                            <a><i class="fa-brands fa-twitter icn" style="color: #24385c;"></i></a> 
                            <a><i class="fa-brands fa-instagram icn" style="color: #24385c;"></i></a> 
                            <a><i class="fa-brands fa-linkedin icn" style="color: #24385c;"></i></a>
                        </div>
                    </div>
                </footer>
            </blockquote>
        </div>
    </section>
</section>
@endif

<section class="related-theme thoughts-stream thoughts clearfix" ng-controller=RelatedTheme>
    <h2 class="h h2 mb-5"><a ng-href=theme/executives href=#>More Quotes on <span
                class="author ng-binding">{{ $feature ?? 'Genral Category' }}</span></a></h2>

    <div class="row">
        @foreach($quotes as $item)
        @if($loop->index == 5)
        @break
        @endif
        <div ng-repeat="thought in reated_theme_thoughts" class="column masonry-brick item thought ng-scope loaded"
            ng-switch=thought.type style=position:relative;left:0px;top:0px>
            <blockquote class="bubble ng-scope" ng-switch-default>
                <a ng-href=6314 href="/filter/{{$feature}}/{{$item->id}}">
                    <p class=ng-binding>{{$item->quote}}</p>
                </a>
                <div class=socialize gigya-sharing>
                    <div class=social-icons>
                        <span class="share">Share </span> 
                        <a><i class="fa-brands fa-facebook icn" style="color: #24385c;"></i></a> 
                        <a><i class="fa-brands fa-twitter icn" style="color: #24385c;"></i></a> 
                        <a><i class="fa-brands fa-instagram icn" style="color: #24385c;"></i></a> 
                        <a><i class="fa-brands fa-linkedin icn" style="color: #24385c;"></i></a> 
                    </div>
                </div>
                <footer><a ng-href=author/malcolm-forbes class="author bubble-trail" href="/author/{{$item->artist}}">
                    @foreach ($artists as $art)
                          
                        @if($art->name==$item->artist)
                        @if($art->image==null)
                        <img ng-if=thought.thoughtAuthor.image ng-src="/images/avatar.jpeg" class=ng-scope
                            src="/images/avatar.jpeg"
                            style="background-blend-mode:normal!important;background-clip:content-box!important;background-position:50% 50%!important;background-color:rgba(0,0,0,0)!important;background-image:url('/images/avatar.jpeg')!important;background-size:100% 100%!important;background-origin:content-box!important;background-repeat:no-repeat!important">
                            @else
                            <img ng-if=thought.thoughtAuthor.image ng-src="\artists\{{$art->image}}" class=ng-scope
                            src="\artists\{{$art->image}}"
                            style="background-blend-mode:normal!important;background-clip:content-box!important;background-position:50% 50%!important;background-color:rgba(0,0,0,0)!important;background-image:url('/artists/{{$art->image}}')!important;background-size:100% 100%!important;background-origin:content-box!important;background-repeat:no-repeat!important">
                            @endif
                            @endif
                            @endforeach
                            <cite class=ng-binding>{{$item->artist}}</cite></a></footer>
            </blockquote>
        </div>
        
        @endforeach
    </div>

</section>



<section class="thought-of-day-category thought-of-day clearfix ng-scope" ng-controller=ThoughtOfDay ng-include src=template_path>
    <h2 class="h h2 ng-scope">
        Forbes Quote Of The Day
        <p>DAILY WISDOM BROUGHT TO YOU BY FORBES</p>
    </h2>
    <blockquote class="bubble ng-scope">
        <a href=# class=clearfix>
            <p class="p p2 ng-binding">{{$mainquote->quote}}</p>
        </a>
        <div class=socialize gigya-sharing data-showprefix=true>
            <div class=social-icons>
                <span class="share">Share</span> 
                <a><i class="fa-brands fa-facebook icn" style="color: white;"></i></a> 
                <a><i class="fa-brands fa-twitter icn" style="color: white;"></i></a> 
                <a><i class="fa-brands fa-instagram icn" style="color: white;"></i></a> 
                <a><i class="fa-brands fa-linkedin icn" style="color: white;"></i></a>
            </div>
        </div>
        <footer><a ng-href=author/sir-walter-scott class="author bubble-trail" href=#>
                @foreach ($artists as $art)
                    @if($art->name==$mainquote->artist)
                        @if($art->image==null)
                            <img src="\images\avatar.jpeg"> 
                        @else
                            <img src="\artists\{{$art->image}}">
                        @endif
                    @endif
                @endforeach
            <cite class=ng-binding>{{$mainquote->artist}}</cite>
        </a></footer>
    </blockquote>
</section>
    
@endsection