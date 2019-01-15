@extends('layouts.app')

@section('content')
	@include('layouts.main-banner')

	<div style="background-color: hsl(0, 0%, 98%);">
		<div class="container pt-64 pb-64">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<h2 class="text-center" style="color: #D7B056;">Are you ready to be a next level coach? Are you ready to start your professional speaking business?</h2>
					<hr />
					<p class="text-center">Join Dr. Sonja Stribling at a location near you for this 4-hour mastermind on how to launch, build, and expand your coaching and speaking business.</p>
					<p class="text-center">There is no better time to be a woman in business, specifically in the coaching and speaking world. Your message, story, life experiences and knowledge are wanted and needed by many; it doesn’t matter if you are in the launching, building, expansion stage...<b>its time for your voice to heard!</b></p>
				</div>
			</div>
		</div>
	</div>

	<div class="container pt-64 pb-64">
		<div class="row justify-content-center">
			<div class="col-12">
				<h3 class="text-center">It doesn’t matter what stage you’re in…</h3>
				<hr class="mt-32 mb-32" />
			</div>

			<div class="col-lg-4 col-md-4 col-sm-8 col-12 mb-32-mobile">
				<div class="icon-box">
					<i class="fas fa-rocket"></i>
					<h6>Launch Stage</h6>
					<hr />
					<p>Feel like you have a message to share, are made for more, and want to lead others through the past you have experienced, but don’t know <i>where</i> to start? Having trouble packaging your message so that it can be received by thousands? Are you questioning what kind of products or services you can or should be selling?</p>
					<p>Welcome to the launching stage!</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-8 col-12">
				<div class="icon-box">
					<i class="fas fa-wrench"></i>
					<h6>Build Stage</h6>
					<hr />
					<p>Have you been coaching or speaking, but have never gotten paid for it? Or have you gotten paid, but nowhere near the amount you deserve? It’s time to learn how to get paid what you are worth.</p>
					<p>Welcome to the building stage!</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-8 col-12 mt-32-mobile">
				<div class="icon-box">
					<i class="fas fa-signal"></i>
					<h6>Expansion Stage</h6>
					<hr />
					<p>Maybe you’re at the 6-figure level, but you’re working long hours and still feel unappreciated, undervalued, and want to learn how to work less and make more money. This is where you learn to scale your business to a high 7-figure business <b>without</b> putting in more work!</p>
					<p>Welcome to the expansion stage!</p>
				</div>
			</div>
		</div>
	</div>

	{{-- <div style="background-color: hsl(0, 0%, 98%);">
		<div class="container pt-64 pb-64">
			<div class="row justify-content-center">
				<div class="col-12">
					<h2 class="text-center" style="color: #D7B056;">Here is what you will experience at the Build Your Empire Tour:</h2>
					<hr />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-12">
					<div class="image-box">
						<div class="image-box-image set-bg" data-setbg="https://een-resources-production.s3.eu-west-2.amazonaws.com/styles/new_image_crop_style/s3/2017-09/Untitled%20design%20%2824%29.jpg?itok=TwJdkmFz"></div>
						<div class="image-box-info">
							<h6 class="mb-0">ACCELERATE Your Business</h6>
							<hr />
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-12">
					<div class="image-box">
						<div class="image-box-image set-bg" data-setbg="https://www.maighan.com/en/wp-content/uploads/2015/08/Photo-de-Presse-21-Conf%C3%A9rencier-Stephan-Maighan2.jpg"></div>
						<div class="image-box-info">
							<h6 class="mb-0">CUTTING EDGE Content</h6>
							<hr />
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-12">
					<div class="image-box">
						<div class="image-box-image set-bg" data-setbg="http://motivatorsreview.com/wp-content/uploads/2018/05/2076714B-A5A9-406A-871F-347C9DC5D5DC.jpeg"></div>
						<div class="image-box-info">
							<h6 class="mb-0">MAXIMIZE Your Potential</h6>
							<hr />
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-12">
					<div class="image-box">
						<div class="image-box-image set-bg" data-setbg="https://cdn.lynda.com/course/434737/434737-636142733533929472-16x9.jpg"></div>
						<div class="image-box-info">
							<h6 class="mb-0">GET THE TOOLS You Need</h6>
							<hr />
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-12">
					<div class="image-box">
						<div class="image-box-image set-bg" data-setbg="https://www.sciencemag.org/sites/default/files/styles/article_main_large/public/images/winning-cover-letter-1280.jpg?itok=livi8PwX"></div>
						<div class="image-box-info">
							<h6 class="mb-0">DOMINATE Your Niche</h6>
							<hr />
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-12">
					<div class="image-box">
						<div class="image-box-image set-bg" data-setbg="https://tkographix.com/wp-content/uploads/2015/08/everything-you-ever-wanted-to-know-about-networking.jpg"></div>
						<div class="image-box-info">
							<h6 class="mb-0">NETWORK With Others</h6>
							<hr />
							<p>Network with other speakers, coaches, and influencers in your community to leverage the power of the group and take your business to new heights.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

	{{-- <div class="container pt-64 pb-64">
		<div class="row justify-content-center">
			<div class="col-12">
				<h2 class="text-center mb-32">What's <span style="color: #D7B056;">NEW</span> this year?</h2>
				<hr />
			</div>
		</div>

		<div class="row mt-32 justify-content-center">
			<div class="col-lg-8 col-md-8 col-sm-10 col-12">
				<div class="row mb-16">
					<div class="col-lg-1">
						<h2 style="color: #EC297B; font-size: 56px; text-align: center;">1</h2>
					</div>
					<div class="col-lg-11">
						<h5 class="text-center-mobile">Lorem ipsum dolor sit amet</h5>
						<p class="text-center-mobile">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>

				<div class="row mb-16">
					<div class="col-lg-1">
						<h2 style="color: #EC297B; font-size: 56px; text-align: center;">2</h2>
					</div>
					<div class="col-lg-11">
						<h5 class="text-center-mobile">Lorem ipsum dolor sit amet</h5>
						<p class="text-center-mobile">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>

				<div class="row mb-16">
					<div class="col-lg-1">
						<h2 style="color: #EC297B; font-size: 56px; text-align: center;">3</h2>
					</div>
					<div class="col-lg-11">
						<h5 class="text-center-mobile">Lorem ipsum dolor sit amet</h5>
						<p class="text-center-mobile">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>

				<div class="row mb-16">
					<div class="col-lg-1">
						<h2 style="color: #EC297B; font-size: 56px; text-align: center;">4</h2>
					</div>
					<div class="col-lg-11">
						<h5 class="text-center-mobile">Lorem ipsum dolor sit amet</h5>
						<p class="text-center-mobile">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>

				<div class="row mb-16">
					<div class="col-lg-1">
						<h2 style="color: #EC297B; font-size: 56px; text-align: center;">5</h2>
					</div>
					<div class="col-lg-11">
						<h5 class="text-center-mobile">Lorem ipsum dolor sit amet</h5>
						<p class="text-center-mobile">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<div class="centered">
					<a class="btn btn-secondary btn-xl js-scroll-trigger mt-32" style="display: block; margin-left: 0px; width: fit-content;" href="#events">Don't Miss Out <i class="fas fa-arrow-circle-right ml-2"></i></a>
				</div>
			</div>
		</div>
	</div> --}}

	<div style="background-color: #EC297B !important;">
		<div class="container pt-64 pb-64">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-8 col-sm-10 col-12">
					<h3 class="text-white text-center mb-4">Who is this Masterclass for?</h3>
					<p class="text-white text-left"><i class="fas fa-check-circle mr-2"></i> You don’t know where to start, but you know you have a message you are dying to share!</p>
					<p class="text-white text-left"><i class="fas fa-check-circle mr-2"></i> You want to create a 6-7 figure speaking and coaching business!</p>
					<p class="text-white text-left"><i class="fas fa-check-circle mr-2"></i> You’re an influencer and want to create an additional 6-7 figures from sharing your experiences and stories!</p>
					<p class="text-white text-left"><i class="fas fa-check-circle mr-2"></i> You want to monetize your experiences and knowledge through coaching and speaking!</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container pt-64 pb-64" id="events">
		<div class="row">
			<div class="col-12">
				<h2 class="text-center" style="color: #D7B056; margin-bottom: 16px;">Build Your Coaching & Speaking Empire Tour 2019</h2>
				<p class="text-center" style="line-height: 1.15em;"><small>Tickets are non-refundable. However, they are transferrable, which means that you can sell or gift your seat to someone else.</small></p>
				<p class="text-center" style="line-height: 1.15em;"><small>We will gladly change the name on the seat for you if we are notified at least 3 days before the event. If you would like to transfer your ticket, please email support@DrSonja.com at least 3 days prior to the event to update the registration.</small>
				<hr />
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="floating-pink-box">
					<img src="https://i.ytimg.com/vi/9hiT6Lsw01c/maxresdefault.jpg" class="regular-image">
					<h3>Los Angeles</h3>
					<h4>California</h4>
					<h5>January 26th, 2019</h5>
					<p class="time">1PM to 5PM</p>
					<p>Specific location will be provided after registration.</p>
					<h4 class="price">$67<small>/<small>ticket</small></small></h4>
					<a href="https://labuildyourempiretour.securechkout.com/" class="btn btn-primary mt-16">Purchase Ticket <i class="fas fa-arrow-circle-right ml-2"></i></a>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="floating-pink-box">
					<img src="https://www.dts.edu/wp-content/uploads/sites/6/2018/05/Houston-Header.jpg" class="regular-image">
					<h3>Houston</h3>
					<h4>Texas</h4>
					<h5>February 9th, 2019</h5>
					<p class="time">1PM to 5PM</p>
					<p>Specific location will be provided after registration.</p>
					<h4 class="price">$47<small>/<small>ticket</small></small></h4>
					<a href="https://houstonbuildyourempire.securechkout.com/" class="btn btn-primary mt-16">Purchase Ticket <i class="fas fa-arrow-circle-right ml-2"></i></a>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="floating-pink-box">
					<img src="https://www.economist.com/sites/default/files/images/print-edition/20170708_FNP002_0.jpg" class="regular-image">
					<h3>London</h3>
					<h4>England</h4>
					<h5>February 17th, 2019</h5>
					<p class="time">1PM to 5PM</p>
					<p>Specific location will be provided after registration.</p>
					<h4 class="price">$67<small>/<small>ticket</small></small></h4>
					<a href="https://londonbuildyourempire.securechkout.com/" class="btn btn-primary mt-16">Purchase Ticket <i class="fas fa-arrow-circle-right ml-2"></i></a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="floating-pink-box">
					<img src="https://inassets1-internationsgmbh.netdna-ssl.com/image/static_1280_720/static/bundles/internationsseo/frontend/images/localcommunityHero/89.jpg" class="regular-image">
					<h3>Atlanta</h3>
					<h4>Georgia</h4>
					<h5>February 23rd, 2019</h5>
					<p class="time">1PM to 5PM</p>
					<p>Specific location will be provided after registration.</p>
					<h4 class="price">$47<small>/<small>ticket</small></small></h4>
					<a href="https://atlantabuildyourempire.securechkout.com/" class="btn btn-primary mt-16">Purchase Ticket <i class="fas fa-arrow-circle-right ml-2"></i></a>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="floating-pink-box">
					<img src="https://inassets1-internationsgmbh.netdna-ssl.com/image/static_1280_720/static/bundles/internationsseo/frontend/images/localcommunityHero/78.jpg" class="regular-image">
					<h3>Washington</h3>
					<h4>District of Columbia</h4>
					<h5>March 2nd, 2019</h5>
					<p class="time">1PM to 5PM</p>
					<p>Specific location will be provided after registration.</p>
					<h4 class="price">$67<small>/<small>ticket</small></small></h4>
					<a href="https://dcbuildyourempire.securechkout.com/" class="btn btn-primary mt-16">Purchase Ticket <i class="fas fa-arrow-circle-right ml-2"></i></a>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="floating-pink-box">
					<img src="https://28nwgk2wx3p52fe6o9419sg5-wpengine.netdna-ssl.com/wp-content/uploads/2017/12/190-Union-Street-Elizabeth-new-rendering.jpg" class="regular-image">
					<h3>Elizabeth</h3>
					<h4>New Jersey</h4>
					<h5>March 9th, 2019</h5>
					<p class="time">1PM to 5PM</p>
					<p>Specific location will be provided after registration.</p>
					<h4 class="price">$67<small>/<small>ticket</small></small></h4>
					<a href="https://njbuildyourempire.securechkout.com/" class="btn btn-primary mt-16">Purchase Ticket <i class="fas fa-arrow-circle-right ml-2"></i></a>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="floating-pink-box">
					<img src="https://mms.businesswire.com/media/20171003005728/en/616177/5/fl1280highres.jpg" class="regular-image">
					<h3>Fort Lauderdale</h3>
					<h4>Florida</h4>
					<h5>March 16th, 2019</h5>
					<p class="time">1PM to 5PM</p>
					<p>Specific location will be provided after registration.</p>
					<h4 class="price">$47<small>/<small>ticket</small></small></h4>
					<a href="https://fortlauderdalebuildyourempire.securechkout.com/" class="btn btn-primary mt-16">Purchase Ticket <i class="fas fa-arrow-circle-right ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>

	<div style="background: hsl(0, 0%, 95%);">
		<div class="container pt-64 pb-64">
			<div class="row">
				<div class="col-12">
					<h3 class="text-center mb-0">Are you tired of standing on the sideline and playing too small?</h3>
					<h3 class="text-center mb-64">Will you join us?</h3>
				</div>
			</div>

			<div class="row" style="display: flex;">
				<div class="col-lg-6 col-md-6 col-sm-8 col-12" style="margin: auto;">
					<img src="{{ URL::asset('img/Who-is.jpg') }}" class="regular-image">
				</div>

				<div class="col-lg-6 col-md-6 col-sm-8 col-12" style="margin: auto;">
					<h3>Who is Dr. Sonja?</h3>
					<hr />
					<p>Dr. Sonja Stribling is globally known for her work in transforming women, in creating influence for those who are looking to gain recognition, and for being a Best-Selling Author of <i>“The Divorce That Saved My Life.”</i> As a retired Army Major and <b>TV personality for Bravo Network</b>, Dr. Stribling has moved into helping those who are looking to improve their business and career. As the Chairwoman of the <b>Born to Be Powerful® Academy</b> and Founder of <b>Women Speak and Grow Rich® Mastermind</b>, Dr. Stribling has put together a complete set of courses, events, and result-based coaching programs that equip and establish influencers, entrepreneurs, and really any individual looking to improve their business and financial position.</p>
				</div>
			</div>

			<hr />

			<div class="row justify-content-center mt-32">
				<div class="col-lg-8 col-md-10 col-sm-12 col-12">
					<p>To help those in business, Dr. Stribling’s approach is quite different than many others. Instead of creating something from scratch, she helps individuals use their past experiences and current knowledge to build a business. She is proof that it is possible to close a <b>$250K</b> deal in a single day, grow a <b>$1M</b> business in one year, and generate over <b>$100K</b> monthly as a speaker and coach. Impressive, right? Even more impressive, Dr. Stribling has been able to have all of this business success by using her own story and nothing else! All of the answers that we need to succeed are right within ourselves… so, <span style="color: #EC297B;"><b>WHY NOT YOU?</b></span></p>
					<p>No matter what you have gone through, there is nothing that can stop you from being in that same position. Dr. Stribling, who is a mother of three boys, experienced many triumphs and failures; in fact, she has gone through a 3-year divorce after 18 years of marriage, has had her first child at 15 years old, was raped and left for death at 17 years old, experienced the struggles in the military, lost all of her real estate and assets, and was even clinically depressed for quite a long time. If anyone knows what it is like to want more but have no idea how to get it… it is Dr. Stribling. These experiences now add to her empathetic approach in helping others turn their life around and gain the power that they lost back the way she did.</p>
					<p><b>So ask yourself...WHY NOT YOU?</b></p>
				</div>
			</div>
		</div>
	</div>
@endsection