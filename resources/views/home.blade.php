@extends('layouts.app')

@section('content')
<div class="container site-content">
    <section id="articles" class="section articles-section" style="background-image:url()" data-eltype="frontpagesection">
        <div class="container section-inner">
            <div class="section-header">
                <h2 class="section-title">Books Store</h2>
            </div>
    
            <div class="section-content">
                <div class="articles-grid articles-slider owl-carousel">
                    @foreach ($books as $item)
                    <div class="article-grid-col">
                        <article class="grid-hentry post-381 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
                            <div class="post-thumbnail">
                                <a href=""><img width="80" height="50" src="/img/{{$item->img_src }}" class="attachment-medium size-medium wp-post-image" alt="" /></a>
                            </div>
                            <div class="entry-body">
                                <header class="entry-header">
                                    <span class="month-year">Title:{{ $item->title }}</span>
                                   
                                    <h3 class="entry-title">{{ $item->description }}</h3>
                                </header>
                                <div class="entry-meta">
                                    <span class="month-year">04 May 2019</span><span class="byline"> by <span class="author vcard"><a class="url fn n" href="">{{ $item->author }}</a></span></span>
                                </div>
                                <footer class="entry-footer">
                                    <a class="button btn entry-rmore-link" href="">Continue Reading</a>
                                </footer>
                            </div>
                        </article>
                    </div>
                        
                    @endforeach
                
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
