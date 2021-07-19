@extends('layouts.app')

@section('content')
		<!-- #masthead -->
		<div id="content" class="site-content">
			<div id="primary" class="content-area front-page-content-area">
				<main id="main" class="site-main">
					<section id="hero" class="section hero-section" data-eltype="frontpagesection">
						<div class="section-inner">
							<div class="section-deco" style="background-image:url(images/hero.jpg);"></div>
							<div class="section-content">
								<div class="section-body">
									<div class="container">
										<div class="section-header">
											<h2 class="section-title">Get involved <br/>Make True connections, <br/>express creativity</h2>
										</div>
										<div class="section-actions">
											<ul class="action-links">
												<li><a class="hero-link" href="{{ route('register') }}">Get started</a></li>
												
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="hero-boxed-container">
							<div class="container">
								<div class="boxed-content">
									<div class="section-header">
										<h3 class="section-title">Expand your knowledge <br/> By Reading different Books</h3>
									</div>
									<div class="section-actions">
										<ul class="row items">
											<li class="li-item col-md-4 col-xl-4">
												<div class="item">
													<div class="promotion-box-thumbnail"><img width="86" height="86" src="images/icon1.png" class="attachment-full size-full" alt="" /></div>
													<h4 class="title">Main Purpose</h4>
													<div class="desc">
														<p>The purpose of Software Requirements Specification (SRS) for Library Management System document is to describe the external behavior of the Library System. </p>
													</div>
												</div>
											</li>
											<li class="li-item col-md-4 col-xl-4">
												<div class="item">
													<div class="promotion-box-thumbnail"><img width="87" height="86" src="images/icon2.png" class="attachment-full size-full" alt="" /></div>
													<h4 class="title">Benefits</h4>
													<div class="desc">
														<p>The LMS developed benefits greatly members and the Librarian . The system provides books catalog and information to members and helps them decide the availability of books in  library.</p>
													</div>
												</div>
											</li>
											<li class="li-item col-md-4 col-xl-4">
												<div class="item">
													<div class="promotion-box-thumbnail"><img width="86" height="86" src="images/icon3.png" class="attachment-full size-full" alt="" /></div>
													<h4 class="title">Personally</h4>
													<div class="desc">
														<p>The proper user interface, users manual, the guide to install and maintain the system must be sufficient to educate the users on how to use the system without any problems.</p>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section id="about" class="section about-section" data-eltype="frontpagesection">
						<div class="container wide-container section-inner">
							<div class="row">
								<div class="section-desc col-md-6">
									<h2>About the Library</h2>
									<p>Library Management System is intended to help Librarian to manage well the Library, since all information about, books, borrowed books, available books and the location of the books will be accessed through the system.</p>
									<p>The purpose of Software Requirements Specification (SRS) for Library Management System document is to describe the external behavior of the Library System. Requirements Specification defines and describes the operations, interfaces, performance, and quality assurance requirements of the Library System. </p>
									<h2>Who can Borrow a Book</h2>
									<p>The users of the system are members, librarian of the university and the administrators who maintain the system. </p>
									<p>The administrators of the system to have more knowledge of the internals of the system and is able to rectify the small problems that may arise due to disk crashes, power failures and other catastrophes to maintain the system.</p>
									
								</div>
								<div class="section-video col-md-6">
									<div class="section-video-content">
										<div class="play-button"></div>
										<div class="img">
											<img src="images/about.jpg" alt="" />
										</div>
										<iframe id="about-video" src="https://www.youtube.com/watch?v=_WCfaGarc4U" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>
					</section>
				
					<section id="cta" class="section cta-section" style="background-image:url()" data-eltype="frontpagesection">
						<div class="container wide-container section-inner">
							<div class="cta-box row">
								<div class="cta-box-info col-md-8 col-xs-12">
									<div class="cta-box-info-body">
										<h2 class="cta-box-title">Interested? Borrow Your Books Now</h2>
										<div class="cta-box-desc">
											<p>The Online Library System provides online real time information about the books available in the Library and the user information related</p>
										</div>
									</div>
								</div>
								<div class="cta-box-actions col-md-4 col-xs-12"><a href="{{ route('register') }}" class="button cta-box-action-link" target="_self">Borrow Book Now</a></div>
							</div>
						</div>
					</section>

<section id="articles" class="section articles-section" style="background-image:url()" data-eltype="frontpagesection">
	<div class="container section-inner">
		<div class="section-header">
			<h2 class="section-title">Latest Books to read</h2>
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
				
					
 @endsection