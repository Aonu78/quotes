@include('header')
<div class="main-content scroll clearfix " scroll-detection bindonce>

    @yield('quotesofday')

    <section class="related-theme thoughts-stream thoughts clearfix">
        @if (count($quotes) > 5)
        <h2 class="h h2 mb-5">
            <a href=#>Other Quotes on <span
                    class="author ">{{ $feature ?? 'Genral Category' }}</span></a></h2>
        @endif
        <div class="row">
            @foreach($quotes as $item)
            @if($loop->index < 5)
        @continue
        @endif
            <div class="column masonry-brick item thought  loaded"
                style=position:relative;left:0px;top:0px>
                <blockquote class="bubble ">
                    <a href="/category/{{$feature}}/{{$item->id}}">
                        <p class="" id="quote-{{$loop->index}}">{{$item->quote}}</p>
                    </a>
                    <div class="socialize">
                        <div class="social-icons">
<button class="button-3 share" role="button" id="btn-{{$loop->index}}" onclick="CopyFunction('quote-{{$loop->index}}','btn-{{$loop->index}}')">Copy</button>
                            <span class="share">Share </span> 
                            <a href="http://www.facebook.com/sharer.php?u={{url('')}}/category/{{$feature}}/{{$item->id}}&p[title]={{$item->quote}}"><i class="fa-brands fa-facebook icn" style="color: #1e3150;"></i></a>                            
                            <a href="http://twitter.com/share?text={{$item->quote}}&url={{url('')}}/category/{{$feature}}/{{$item->id}}"><i class="icon-advanced icn" style=""></i></a> 
                            <a href="https://www.instagram.com/shareArticle/?mini=true&url={{url('')}}/category/{{$feature}}/{{$item->id}}&title={{$item->quote}}"><i class="fa-brands fa-instagram icn" style="color: #24385c;"></i></a> 
                            <a href="https://api.whatsapp.com/send?text={{$item->quote}}"><i class="fa-brands fa-whatsapp icn" style="color: #24385c;"></i></a>
                            <a href="https://vk.com/share.php?url={{url('')}}/category/{{$feature}}/{{$item->id}}&title={{$item->quote}}"><i class="fa-brands fa-vk icn" style="color: #24385c;"></i></a>
                                                    </div>
                    </div>
                    <footer><a class="author bubble-trail" href=#>
                        @foreach ($artists as $art)
                              
                            @if($art->name==$item->artist)
                            @if($art->image==null)
                            <img class=""
                                src="/images/avatar.jpeg"
                                style="background-blend-mode:normal!important;background-clip:content-box!important;background-position:50% 50%!important;background-color:rgba(0,0,0,0)!important;background-image:url('/images/avatar.jpeg')!important;background-size:100% 100%!important;background-origin:content-box!important;background-repeat:no-repeat!important">
                                @else
                                <img class=""
                                src="\artists\{{$art->image}}"
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

    @include('footer')
