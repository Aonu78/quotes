@extends('main')
@section('quotesofday')
<script>
    function CopyFunction(x,y) {
      // Get the text field
      var copyText = document.getElementById(x);
    
      // Select the text field
    //   copyText.innerHTML;
    //   copyText.setSelectionRange(0, 99999); // For mobile devices
    
      // Copy the text inside the text field
      navigator.clipboard.writeText(copyText.innerHTML);
      
      // Alert the copied text
    //   alert("Copied the text: " + copyText.innerHTML);
      document.getElementById(y).innerHTML = "Copyed";
    }
    </script>
@if($quoteid)
<section class="primary-single-thought clearfix anim ng-scope">
    <div class="leaderboard-ad homepage ng-scope ng-isolate-scope">
        <div style="border:0pt none;width:728px;height:0px"></div>
    </div>
    <section class="thoughts-stream thoughts ng-scope">
        <div class="section-contain">
            <blockquote class="fa-solid fa-quote-left bubble">
                <p class="ng-binding" id="navid">{{$quoteid->quote}}
                <footer>
                    <a class="author bubble-trail" href="/author/{{$quoteid->artist}}"> 
                        
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
<button class="button-3 share" role="button" id="navidbtn" onclick="CopyFunction('navid','navidbtn')">Copy</button>
                            <p class="share paddingclass" style="font-size: 12px; color: #FD890B;">Share</p>
                            <span class="share">.</span> 
<a href="http://www.facebook.com/sharer.php?u={{ url()->current() }}&p[title]={{$quoteid->quote}}"><i class="fa-brands fa-facebook icn" style="color: #1e3150;"></i></a>                            
<a href="http://twitter.com/share?text={{$quoteid->quote}}&url={{ url()->current() }}"><i class="icon-advanced icn" style=""></i></a> 
<a href="https://www.instagram.com/shareArticle/?mini=true&url={{ url()->current() }}&title={{$quoteid->quote}}"><i class="fa-brands fa-instagram icn" style="color: #24385c;"></i></a> 
<a href="https://api.whatsapp.com/send?text={{ url()->current() }}"><i class="fa-brands fa-whatsapp icn" style="color: #24385c;"></i></a>
<a href="https://vk.com/share.php?url={{ url()->current() }}&" title="{{$quoteid->quote}}"><i class="fa-brands fa-vk icn" style="color: #24385c;"></i></a>
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
        @if($loop->index == 2)
        @break
        @endif
        <div ng-repeat="thought in reated_theme_thoughts" class="column masonry-brick item thought ng-scope loaded"
            ng-switch=thought.type style=position:relative;left:0px;top:0px>
            <blockquote class="bubble ng-scope" ng-switch-default>
                <a href="/filter/{{$feature}}/{{$item->id}}">
                    <p class="ng-binding" id="quote-{{$loop->index}}">{{$item->quote}}</p>
                </a>
                <div class="socialize" gigya-sharing>
                    <div class="social-icons">
                        <button class="button-3 share" role="button" id="btn-{{$loop->index}}" onclick="CopyFunction('quote-{{$loop->index}}','btn-{{$loop->index}}')">Copy</button>
                        <span class="share">Share </span> 

                        <a href="http://www.facebook.com/sharer.php?u={{url('')}}/filter/{{$feature}}/{{$item->id}}&p[title]={{$item->quote}}"><i class="fa-brands fa-facebook icn" style="color: #1e3150;"></i></a>                            
                        <a href="http://twitter.com/share?text={{$item->quote}}&url={{url('')}}/filter/{{$feature}}/{{$item->id}}"><i class="icon-advanced icn" style=""></i></a> 
                        <a href="https://www.instagram.com/shareArticle/?mini=true&url={{url('')}}/filter/{{$feature}}/{{$item->id}}&title={{$item->quote}}"><i class="fa-brands fa-instagram icn" style="color: #24385c;"></i></a> 
                        <a href="https://api.whatsapp.com/send?text={{$item->quote}}"><i class="fa-brands fa-whatsapp icn" style="color: #24385c;"></i></a>
                        <a href="https://vk.com/share.php?url={{url('')}}/filter/{{$feature}}/{{$item->id}}&title={{$item->quote}}"><i class="fa-brands fa-vk icn" style="color: #24385c;"></i></a>
                        
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
                <a href="http://www.facebook.com/sharer.php?u={{url('')}}/filter/{{$feature}}/{{$item->id}}&p[title]={{$item->quote}}"><i class="fa-brands fa-facebook icn" style="color: white;"></i></a>                            
                <a href="http://twitter.com/share?text={{$item->quote}}&url={{url('')}}/filter/{{$feature}}/{{$item->id}}"><i class="icon-advanced-white icn" style="color: white;fill: white;"></i></a> 
                <a href="https://www.instagram.com/shareArticle/?mini=true&url={{url('')}}/filter/{{$feature}}/{{$item->id}}&title={{$item->quote}}"><i class="fa-brands fa-instagram icn" style="color: white;"></i></a> 
                <a href="https://api.whatsapp.com/send?text={{$item->quote}}"><i class="fa-brands fa-whatsapp icn" style="color: white;"></i></a>
                <a href="https://vk.com/share.php?url={{url('')}}/filter/{{$feature}}/{{$item->id}}&title={{$item->quote}}"><i class="fa-brands fa-vk icn" style="color: white;"></i></a>
                
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