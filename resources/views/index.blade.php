@extends('main')
@section('quotesofday')
<script>
    function CopyFunction(x,y) {
      var copyText = document.getElementById(x);
      navigator.clipboard.writeText(copyText.innerHTML);
      document.getElementById(y).innerHTML = "Copyed";
    }
</script>
@if($quoteid)
@section('title') {{'Quotes & Caption | By '.$quoteid->artist}} @endsection
@section('description') {{$quoteid->quote}} @endsection
<section class="primary-single-thought clearfix anim ">
    <div class="leaderboard-ad homepage  ng-isolate-scope">
        <div style="border:0pt none;width:728px;height:0px"></div>
    </div>
    <section class="thoughts-stream thoughts ">
        <div class="section-contain">
            <blockquote class="fa-solid fa-quote-left bubble">
                <p class="" id="navid">{{$quoteid->quote}}
                <footer>
                    <a class="author bubble-trail" href="/author/{{$quoteid->artist}}"> 
                        
                        @foreach ($artists as $art)
                    @if($art->name==$quoteid->artist)
                        @if($art->image==null)
                            <img src='\images\avatar.jpeg' class= style="background-blend-mode:normal!important;background-clip:content-box!important;background-position:50% 50%!important;background-color:rgba(0,0,0,0)!important;background-image:var()!important;background-size:100% 100%!important;background-origin:content-box!important;background-repeat:no-repeat!important"> <cite class=>{{$quoteid->artist}}</cite></a>

                        @else
                            <img src='\artists\{{$art->image}}' class= style="background-blend-mode:normal!important;background-clip:content-box!important;background-position:50% 50%!important;background-color:rgba(0,0,0,0)!important;background-image:var()!important;background-size:100% 100%!important;background-origin:content-box!important;background-repeat:no-repeat!important"> <cite class=>{{$quoteid->artist}}</cite></a>

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
@section('title') {{'execelent Quotes and Caption for every point of Life.'}} @endsection
@section('description') {{'YourQuotes.Pro give you execelent Quotes and Caption for every point of Life.'}} @endsection
<section class="related-theme thoughts-stream thoughts clearfix">
    <h2 class="h h2 mb-5"><a href=#>More Quotes on <span
                class="author ">{{ $feature ?? 'Genral Category' }}</span></a></h2>

    <div class="row">
        @foreach($quotes as $item)
        @if($loop->index == 5)
        @break
        @endif
        <div  class="column masonry-brick item thought  loaded" style="position:relative;left:0px;top:0px;">
            <blockquote class="bubble ">
                <a href="/filter/{{$feature}}/{{$item->id}}">
                    <p class="" id="quote-{{$loop->index}}">{{$item->quote}}</p>
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
                <footer><a class="author bubble-trail" href="/author/{{$item->artist}}">
                    @foreach ($artists as $art)
                          
                        @if($art->name==$item->artist)
                        @if($art->image==null)
                        <img class="" src="/images/avatar.jpeg"
                            style="background-blend-mode:normal!important;background-clip:content-box!important;background-position:50% 50%!important;background-color:rgba(0,0,0,0)!important;background-image:url('/images/avatar.jpeg')!important;background-size:100% 100%!important;background-origin:content-box!important;background-repeat:no-repeat!important">
                            @else
                            <img class="" src="\artists\{{$art->image}}"
                            style="background-blend-mode:normal!important;background-clip:content-box!important;background-position:50% 50%!important;background-color:rgba(0,0,0,0)!important;background-image:url('/artists/{{$art->image}}')!important;background-size:100% 100%!important;background-origin:content-box!important;background-repeat:no-repeat!important">
                            @endif
                            @endif
                            @endforeach
                            <cite class=>{{$item->artist}}</cite></a></footer>
            </blockquote>
        </div>
        
        @endforeach
    </div>

</section>



<section class="thought-of-day-category thought-of-day clearfix ">
    <h2 class="h h2 ">
        YOUR Quote Of The Day
        <p>DAILY BROUGHT WISDOM TO YOU BY YourQuotes.Com</p>
    </h2>
    <blockquote class="bubble ">
        <a href=# class=clearfix>
            <p class="p p2 " id="mn-cq-p">{{$mainquote->quote}}</p>
        </a>
        <div class=socialize gigya-sharing data-showprefix=true>
            <div class=social-icons>
                <button class="button-3 share" role="button" id="btn-mc" onclick="CopyFunction('mn-cq-p','btn-mc')" style="background-color: #2a2b2c">Copy</button>
                <span class="share">Share</span> 
                <a href="http://www.facebook.com/sharer.php?u={{url('')}}/filter/{{$feature}}/{{$mainquote->id}}&p[title]={{$mainquote->quote}}"><i class="fa-brands fa-facebook icn" style="color: white;"></i></a>                            
                <a href="http://twitter.com/share?text={{$mainquote->quote}}&url={{url('')}}/filter/{{$feature}}/{{$mainquote->id}}"><i class="icon-advanced-white icn" style="color: white;fill: white;"></i></a> 
                <a href="https://www.instagram.com/shareArticle/?mini=true&url={{url('')}}/filter/{{$feature}}/{{$mainquote->id}}&title={{$mainquote->quote}}"><i class="fa-brands fa-instagram icn" style="color: white;"></i></a> 
                <a href="https://api.whatsapp.com/send?text={{$mainquote->quote}}"><i class="fa-brands fa-whatsapp icn" style="color: white;"></i></a>
                <a href="https://vk.com/share.php?url={{url('')}}/filter/{{$feature}}/{{$mainquote->id}}&title={{$mainquote->quote}}"><i class="fa-brands fa-vk icn" style="color: white;"></i></a>
                
            </div>
        </div>
        <footer><a class="author bubble-trail" href=#>
                @foreach ($artists as $art)
                    @if($art->name==$mainquote->artist)
                        @if($art->image==null)
                            <img src="\images\avatar.jpeg"> 
                        @else
                            <img src="\artists\{{$art->image}}">
                        @endif
                    @endif
                @endforeach
            <cite class=>{{$mainquote->artist}}</cite>
        </a></footer>
    </blockquote>
</section>
    
@endsection