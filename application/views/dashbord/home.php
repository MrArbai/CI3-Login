<!DOCTYPE html>
<!--[if IE 8]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
	<!--- basic page needs
   ================================================== -->
	<meta charset="utf-8" />
	<title>My Portfolio</title>
	<meta name="description" content="" />
	<meta name="author" content="" />

	<!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- CSS
   ================================================== -->
	<link rel="stylesheet" href="<?= base_url('assets') ?>/css/base.css" />
	<link rel="stylesheet" href="<?= base_url('assets') ?>/css/main.css" />
	<link rel="stylesheet" href="<?= base_url('assets') ?>/css/vendor.css" />

	<!-- script
   ================================================== -->
	<script src="<?= base_url('assets') ?>/js/modernizr.js"></script>
	<script src="<?= base_url('assets') ?>/js/pace.min.js"></script>

	<!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="<?= base_url('assets') ?>/favicon.png" />
</head>

<body id="top">
	<!-- header 
   ================================================== -->
	<header>
		<?php $user = $this->session->userdata('user'); ?>

		<div class="row">
			<div class="top-bar">
				<a class="menu-toggle" href="#"><span>Menu</span></a>

				<div class="logo">
					<a href="<?= base_url('/') ?>">Arbai</a>
				</div>

				<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll" href="#intro" title="">Home</a></li>
						<li><a class="smoothscroll" href="#about" title="">About</a></li>
						<li><a class="smoothscroll" href="#resume" title="">Resume</a></li>
						<li><a class="smoothscroll" href="#portfolio" title="">Portfolio</a></li>
						<li><a class="smoothscroll" href="#services" title="">Services</a></li>
						<li><a class="smoothscroll" href="#contact" title="">Contact</a></li>
						<li><a href="<?= base_url('auth/logout') ?>" title="">Log Out</a></li>
					</ul>
				</nav>
			</div>
			<!-- /top-bar -->
		</div>
		<!-- /row -->
	</header>
	<!-- /header -->

	<!-- intro section
   ================================================== -->
	<section id="intro">
		<div class="intro-overlay"></div>

		<div class="intro-content">
			<div class="row">
				<div class="col-twelve">
					<h5>Hello</h5>
					<h1>I'm <?= $user['name'] ?></h1>

					<p class="intro-position">
						<span>.Net Developer</span>
						<span>PHP Developer</span>
					</p>

					<a class="button stroke smoothscroll" href="#about" title="">More About Me</a>
				</div>
			</div>
		</div>
		<!-- /intro-content -->

		<ul class="intro-social">
			<li>
				<a href="https://www.facebook.com/bai.buaendel.7" target="_blank"><i class="fa fa-facebook"></i></a>
			</li>
			<li>
				<a href="https://github.com/MrArbai" target="_blank"><i class="fa fa-github"></i></a>
			</li>
			<li>
				<a href="https://twitter.com/bai_buaendel" target="_blank"><i class="fa fa-twitter"></i></a>
			</li>
			<li>
				<a href="https://www.instagram.com/mr_arbai/?hl=id" target="_blank"><i class="fa fa-instagram"></i></a>
			</li>
		</ul>
		<!-- /intro-social -->
	</section>
	<!-- /intro -->

	<!-- about section
   ================================================== -->
	<section id="about">
		<div class="row section-intro">
			<div class="col-twelve">
				<h5>About</h5>
				<h1>Let me introduce myself.</h1>

				<div class="intro-info">
					<img src="<?= base_url('assets/img/' . $user['image']) ?>" alt="Profile Picture" />

					<p class="lead">
						As a desktop programmer, I am proficient in C# and VB programming languages, as well as
						desktop application development. In addition, I also have in-depth skills in system analysis and
						design, and understand software development methodologies
					</p>
				</div>
			</div>
		</div>
		<!-- /section-intro -->

		<div class="row about-content">
			<div class="col-six tab-full">
				<h3>Profile</h3>

				<ul class="info-list">
					<li>
						<strong>Fullname:</strong>
						<span><?= $user['name'] ?></span>
					</li>
					<li>
						<strong>Birth Date:</strong>
						<span>August 03, 1994</span>
					</li>
					<li>
						<strong>Job:</strong>
						<span>.Net Developer, PHP Developer</span>
					</li>
					<li>
						<strong>Email:</strong>
						<span><?= $user['email'] ?></span>
					</li>
				</ul>
				<!-- /info-list -->
			</div>

			<div class="col-six tab-full">
				<h3>Skills</h3>

				<ul class="skill-bars">
					<li>
						<div class="progress percent50"><span>50%</span></div>
						<strong>HTML5</strong>
					</li>
					<li>
						<div class="progress percent50"><span>50%</span></div>
						<strong>CSS3</strong>
					</li>
					<li>
						<div class="progress percent70"><span>70%</span></div>
						<strong>VB</strong>
					</li>
					<li>
						<div class="progress percent50"><span>50%</span></div>
						<strong>PHP</strong>
					</li>
					<li>
						<div class="progress percent50"><span>50%</span></div>
						<strong>C#</strong>
					</li>
					<li>
						<div class="progress percent75"><span>75%</span></div>
						<strong>SQL#</strong>
					</li>
				</ul>
				<!-- /skill-bars -->
			</div>
		</div>

		<div class="row button-section">
			<div class="col-twelve">
				<a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
				<a href="<?= base_url('assets') ?>/img/CV/cv.pdf" target="_blank" title="Download CV" class="button button-primary">Download CV</a>
			</div>
		</div>
	</section>
	<!-- /process-->

	<!-- resume Section
   ================================================== -->
	<section id="resume" class="grey-section">
		<div class="row section-intro">
			<div class="col-twelve">
				<h5>Resume</h5>
				<h1>More of my credentials.</h1>
			</div>
		</div>
		<!-- /section-intro-->

		<div class="row resume-timeline">
			<div class="col-twelve resume-header">
				<h2>Work Experience</h2>
			</div>
			<!-- /resume-header -->

			<div class="col-twelve">
				<div class="timeline-wrap">
					<div class="timeline-block">
						<div class="timeline-ico">
							<i class="fa fa-graduation-cap"></i>
						</div>

						<div class="timeline-header">
							<h3>Dekstop Developer</h3>
							<p>2020 - Present</p>
						</div>

						<div class="timeline-content">
							<h4>Awesome Studio</h4>
							<p>
								Create new features or menus, maintain existing systems, for company production and
								inventory
							</p>
						</div>
					</div>
					<!-- /timeline-block -->

					<div class="timeline-block">
						<div class="timeline-ico">
							<i class="fa fa-graduation-cap"></i>
						</div>

						<div class="timeline-header">
							<h3>VB Developer</h3>
							<p>October 2019 - May 2022</p>
						</div>

						<div class="timeline-content">
							<h4>CV. Bagus Tona</h4>
							<p>
								Create new features or menus, maintain existing systems, for company production and
								inventory
							</p>
						</div>
					</div>
					<!-- /timeline-block -->

					<div class="timeline-block">
						<div class="timeline-ico">
							<i class="fa fa-graduation-cap"></i>
						</div>

						<div class="timeline-header">
							<h3>Helper</h3>
							<p>February 2014 - June 2015</p>
						</div>

						<div class="timeline-content">
							<h4>PT. Multi Teknik mandiri</h4>
							<p>

							</p>
						</div>
					</div>
					<!-- /timeline-block -->
				</div>
				<!-- /timeline-wrap -->
			</div>
			<!-- /col-twelve -->
		</div>
		<!-- /resume-timeline -->

		<div class="row resume-timeline">
			<div class="col-twelve resume-header">
				<h2>Education</h2>
			</div>
			<!-- /resume-header -->

			<div class="col-twelve">
				<div class="timeline-wrap">
					<div class="timeline-block">
						<div class="timeline-ico">
							<i class="fa fa-briefcase"></i>
						</div>

						<div class="timeline-header">
							<h3>Bachelor Degree</h3>
							<p>July 2022 - Present</p>
						</div>

						<div class="timeline-content">
							<h4>University AKI Semarang</h4>
							<p>
								I am currently studying S1 Informatics Engineering in the Afternoon Employee Class
							</p>
						</div>
					</div>
					<!-- /timeline-block -->

					<div class="timeline-block">
						<div class="timeline-ico">
							<i class="fa fa-briefcase"></i>
						</div>

						<div class="timeline-header">
							<h3>FullSuck Developer</h3>
							<p>July 2022 - Present</p>
						</div>

						<div class="timeline-content">
							<h4>CodePolitan</h4>
							<p>
								I'm still studying to become a full-stuck developer at Codepolitan
							</p>
						</div>
					</div>
					<!-- /timeline-block -->

					<div class="timeline-block">
						<div class="timeline-ico">
							<i class="fa fa-briefcase"></i>
						</div>

						<div class="timeline-header">
							<h3>Vocational School</h3>
							<p>July 2010 - Mey 2013</p>
						</div>

						<div class="timeline-content">
							<h4>Survey and Mapping</h4>
							<p>

							</p>
						</div>
					</div>
					<!-- /timeline-block -->
				</div>
				<!-- /timeline-wrap -->
			</div>
			<!-- /col-twelve -->
		</div>
		<!-- /resume-timeline -->
	</section>
	<!-- /features -->

	<!-- Portfolio Section
   ================================================== -->
	<section id="portfolio">
		<div class="row section-intro">
			<div class="col-twelve">
				<h5>Portfolio</h5>
				<h1>Check Out Some of My Works.</h1>

				<p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi
					aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>
			</div>
		</div>
		<!-- /section-intro-->

		<div class="row portfolio-content">
			<div class="col-twelve">
				<!-- portfolio-wrapper -->
				<div id="folio-wrapper" class="block-1-2 block-mob-full stack">
					<div class="bgrid folio-item">
						<div class="item-wrap">
							<img src="<?= base_url('assets') ?>/img/portfolio/liberty.jpg" alt="Liberty" />
							<a href="#modal-01" class="overlay">
								<div class="folio-item-table">
									<div class="folio-item-cell">
										<h3 class="folio-title">Liberty</h3>
										<span class="folio-types"> Graphic Design </span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<!-- /folio-item -->

					<div class="bgrid folio-item">
						<div class="item-wrap">
							<img src="<?= base_url('assets') ?>/img/portfolio/shutterbug.jpg" alt="Shutterbug" />
							<a href="#modal-02" class="overlay">
								<div class="folio-item-table">
									<div class="folio-item-cell">
										<h3 class="folio-title">Shutterbug</h3>
										<span class="folio-types"> Web Design </span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<!-- /folio-item -->

					<div class="bgrid folio-item">
						<div class="item-wrap">
							<img src="<?= base_url('assets') ?>/img/portfolio/clouds.jpg" alt="Clouds" />
							<a href="#modal-03" class="overlay">
								<div class="folio-item-table">
									<div class="folio-item-cell">
										<h3 class="folio-title">Clouds</h3>
										<span class="folio-types"> Web Design </span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<!-- /folio-item -->

					<div class="bgrid folio-item">
						<div class="item-wrap">
							<img src="<?= base_url('assets') ?>/img/portfolio/beetle.jpg" alt="Beetle" />
							<a href="#modal-04" class="overlay">
								<div class="folio-item-table">
									<div class="folio-item-cell">
										<h3 class="folio-title">Beetle</h3>
										<span class="folio-types"> Branding </span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<!-- /folio-item -->

					<div class="bgrid folio-item">
						<div class="item-wrap">
							<img src="<?= base_url('assets') ?>/img/portfolio/lighthouse.jpg" alt="Lighthouse" />
							<a href="#modal-05" class="overlay">
								<div class="folio-item-table">
									<div class="folio-item-cell">
										<h3 class="folio-title">Lighthouse</h3>
										<span class="folio-types"> Web Development </span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<!-- /folio-item -->

					<div class="bgrid folio-item">
						<div class="item-wrap">
							<img src="<?= base_url('assets') ?>/img/portfolio/salad.jpg" alt="Salad" />
							<a href="#modal-06" class="overlay">
								<div class="folio-item-table">
									<div class="folio-item-cell">
										<h3 class="folio-title">Salad</h3>
										<span class="folio-types"> Branding </span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<!-- /folio-item -->

					<!-- modal popups - begin
	            ============================================================= -->
					<div id="modal-01" class="popup-modal slider mfp-hide">
						<div class="media">
							<img src="<?= base_url('assets') ?>/img/portfolio/modals/m-liberty.jpg" alt="" />
						</div>

						<div class="description-box">
							<h4>Liberty</h4>
							<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit
								consequat ipsum, nec sagittis sem nibh id elit.</p>

							<div class="categories">Web Development</div>
						</div>

						<div class="link-box">
							<a href="#">Details</a>
							<a href="#" class="popup-modal-dismiss">Close</a>
						</div>
					</div>
					<!-- /modal-01 -->

					<div id="modal-02" class="popup-modal slider mfp-hide">
						<div class="media">
							<img src="<?= base_url('assets') ?>/img/portfolio/modals/m-shutterbug.jpg" alt="" />
						</div>

						<div class="description-box">
							<h4>Shutterbug</h4>
							<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit
								consequat ipsum, nec sagittis sem nibh id elit.</p>

							<div class="categories">Web Design</div>
						</div>

						<div class="link-box">
							<a href="#">Details</a>
							<a href="#" class="popup-modal-dismiss">Close</a>
						</div>
					</div>
					<!-- /modal-02 -->

					<div id="modal-03" class="popup-modal slider mfp-hide">
						<div class="media">
							<img src="<?= base_url('assets') ?>/img/portfolio/modals/m-clouds.jpg" alt="" />
						</div>

						<div class="description-box">
							<h4>Clouds</h4>
							<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit
								consequat ipsum, nec sagittis sem nibh id elit.</p>

							<div class="categories">Web Design</div>
						</div>

						<div class="link-box">
							<a href="#">Details</a>
							<a href="#" class="popup-modal-dismiss">Close</a>
						</div>
					</div>
					<!-- /modal-03 -->

					<div id="modal-04" class="popup-modal slider mfp-hide">
						<div class="media">
							<img src="<?= base_url('assets') ?>/img/portfolio/modals/m-beetle.jpg" alt="" />
						</div>

						<div class="description-box">
							<h4>Beetle</h4>
							<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit
								consequat ipsum, nec sagittis sem nibh id elit.</p>

							<div class="categories">Branding</div>
						</div>

						<div class="link-box">
							<a href="#">Details</a>
							<a href="#" class="popup-modal-dismiss">Close</a>
						</div>
					</div>
					<!-- /modal-04 -->

					<div id="modal-05" class="popup-modal slider mfp-hide">
						<div class="media">
							<img src="<?= base_url('assets') ?>/img/portfolio/modals/m-lighthouse.jpg" alt="" />
						</div>

						<div class="description-box">
							<h4>Lighthouse</h4>
							<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit
								consequat ipsum, nec sagittis sem nibh id elit.</p>

							<div class="categories">Web Development</div>
						</div>

						<div class="link-box">
							<a href="#">Details</a>
							<a href="#" class="popup-modal-dismiss">Close</a>
						</div>
					</div>
					<!-- /modal-05 -->

					<div id="modal-06" class="popup-modal slider mfp-hide">
						<div class="media">
							<img src="<?= base_url('assets') ?>/img/portfolio/modals/m-salad.jpg" alt="" />
						</div>

						<div class="description-box">
							<h4>Salad</h4>
							<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit
								consequat ipsum, nec sagittis sem nibh id elit.</p>

							<div class="categories">Branding</div>
						</div>

						<div class="link-box">
							<a href="#">Details</a>
							<a href="#" class="popup-modal-dismiss">Close</a>
						</div>
					</div>
					<!-- /modal-06 -->

					<!-- modal popups - end
	            ============================================================= -->
				</div>
				<!-- /portfolio-wrapper -->
			</div>
			<!-- /twelve -->
		</div>
		<!-- /portfolio-content -->
	</section>
	<!-- /portfolio -->

	<!-- services Section
   ================================================== -->
	<section id="services">
		<div class="overlay"></div>

		<div class="row section-intro">
			<div class="col-twelve">
				<h5>Services</h5>
				<h1>What Can I Do For You?</h1>

				<p class="lead">As a programmer, I have deep skills</p>
			</div>
		</div>
		<!-- /section-intro -->

		<div class="row services-content">
			<div id="owl-slider" class="owl-carousel services-list">
				<div class="service">
					<span class="icon"><i class="icon-earth"></i></span>

					<div class="service-content">
						<h3>App Depelovment</h3>

						<p class="desc">
							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
							rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
							explicabo. Nemo
							enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
						</p>
					</div>
				</div>
				<!-- /service -->

				<div class="service">
					<span class="icon"><i class="icon-window"></i></span>

					<div class="service-content">
						<h3>Web Development</h3>

						<p class="desc">
							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
							rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
							explicabo. Nemo
							enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
						</p>
					</div>
				</div>
				<!-- /service -->

				<div class="service">
					<span class="icon"><i class="icon-paint-brush"></i></span>

					<div class="service-content">
						<h3>Branding</h3>

						<p class="desc">
							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
							rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
							explicabo. Nemo
							enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
						</p>
					</div>
				</div>
				<!-- /service -->

				<div class="service">
					<span class="icon"><i class="icon-toggles"></i></span>

					<div class="service-content">
						<h3>UI/UX Design</h3>

						<p class="desc">
							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
							rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
							explicabo. Nemo
							enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
						</p>
					</div>
				</div>
				<!-- /service -->

				<div class="service">
					<span class="icon"><i class="icon-image"></i></span>

					<div class="service-content">
						<h3>Graphics Design</h3>

						<p class="desc">
							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
							rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
							explicabo. Nemo
							enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
						</p>
					</div>
				</div>
				<!-- /service -->

				<div class="service">
					<span class="icon"><i class="icon-chat"></i></span>

					<div class="service-content">
						<h3>Consultancy</h3>

						<p class="desc">
							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
							rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
							explicabo. Nemo
							enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
						</p>
					</div>
				</div>
				<!-- /service -->
			</div>
			<!-- /services-list -->
		</div>
		<!-- /services-content -->
	</section>
	<!-- /services -->

	<!-- stats Section
   ================================================== -->
	<section id="stats" class="count-up">
		<div class="row">
			<div class="col-twelve">
				<div class="block-1-6 block-s-1-3 block-tab-1-2 block-mob-full stats-list">
					<div class="bgrid stat">
						<div class="icon-part">
							<i class="icon-pencil-ruler"></i>
						</div>

						<h3 class="stat-count">1500</h3>

						<h5 class="stat-title">Projects Completed</h5>
					</div>
					<!-- /stat -->

					<div class="bgrid stat">
						<div class="icon-part">
							<i class="icon-users"></i>
						</div>

						<h3 class="stat-count">900</h3>

						<h5 class="stat-title">Happy Clients</h5>
					</div>
					<!-- /stat -->

					<div class="bgrid stat">
						<div class="icon-part">
							<i class="icon-badge"></i>
						</div>

						<h3 class="stat-count">200</h3>

						<h5 class="stat-title">Awards Received</h5>
					</div>
					<!-- /stat -->

					<div class="bgrid stat">
						<div class="icon-part">
							<i class="icon-light-bulb"></i>
						</div>

						<h3 class="stat-count">120</h3>

						<h5 class="stat-title">Crazy Ideas</h5>
					</div>
					<!-- /stat -->

					<div class="bgrid stat">
						<div class="icon-part">
							<i class="icon-cup"></i>
						</div>

						<h3 class="stat-count">1500</h3>

						<h5 class="stat-title">Coffee Cups</h5>
					</div>
					<!-- /stat -->

					<div class="bgrid stat">
						<div class="icon-part">
							<i class="icon-clock"></i>
						</div>

						<h3 class="stat-count">7200</h3>

						<h5 class="stat-title">Hours</h5>
					</div>
					<!-- /stat -->
				</div>
				<!-- /stats-list -->
			</div>
			<!-- /twelve -->
		</div>
		<!-- /row -->
	</section>
	<!-- /stats -->

	<!-- contact
   ================================================== -->
	<section id="contact">
		<div class="row section-intro">
			<div class="col-twelve">
				<h5>Contact</h5>
				<h1>I'd Love To Hear From You.</h1>

			</div>
		</div>
		<!-- /section-intro -->

		<div class="row contact-form">
			<div class="col-twelve">
				<!-- form -->
				<form name="contactForm" id="contactForm" method="post" action="">
					<fieldset>
						<div class="form-field">
							<input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="" />
						</div>
						<div class="form-field">
							<input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="" />
						</div>
						<div class="form-field">
							<input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="" />
						</div>
						<div class="form-field">
							<textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
						</div>
						<div class="form-field">
							<button class="submitform">Submit</button>
							<div id="submit-loader">
								<div class="text-loader">Sending...</div>
								<div class="s-loader">
									<div class="bounce1"></div>
									<div class="bounce2"></div>
									<div class="bounce3"></div>
								</div>
							</div>
						</div>
					</fieldset>
				</form>
				<!-- Form End -->

				<!-- contact-warning -->
				<div id="message-warning"></div>
				<!-- contact-success -->
				<div id="message-success"><i class="fa fa-check"></i>Your message was sent, thank you!<br /></div>
			</div>
			<!-- /col-twelve -->
		</div>
		<!-- /contact-form -->

		<div class="row contact-info">
			<div class="col-four tab-full">
				<div class="icon">
					<i class="icon-pin"></i>
				</div>

				<h5>Where to find me</h5>

				<p>
					Jl. Dalang I, RT.002/RW.004, <br />
					Bojong Rawalumbu,<br />
					Bekasi City, West Java
				</p>
			</div>

			<div class="col-four tab-full collapse">
				<div class="icon">
					<i class="icon-mail"></i>
				</div>

				<h5>Email Me At</h5>

				<p><?= $user['email'] ?></p>
			</div>

			<div class="col-four tab-full">
				<div class="icon">
					<i class="icon-phone"></i>
				</div>

				<h5>Call Me At</h5>

				<p>Mobile: (+62) 812 684 106 54</p>
			</div>
		</div>
		<!-- /contact-info -->
	</section>
	<!-- /contact -->

	<!-- footer
   ================================================== -->

	<footer>
		<div class="row">
			<div class="col-six tab-full pull-right social">
				<ul class="footer-social">
					<li>
						<a href="https://www.facebook.com/bai.buaendel.7" target="_blank"><i class="fa fa-facebook"></i></a>
					</li>
					<li>
						<a href="https://github.com/MrArbai" target="_blank"><i class="fa fa-github"></i></a>
					</li>
					<li>
						<a href="https://twitter.com/bai_buaendel" target="_blank"><i class="fa fa-twitter"></i></a>
					</li>
					<li>
						<a href="https://www.instagram.com/mr_arbai/?hl=id" target="_blank"><i class="fa fa-instagram"></i></a>
					</li>
				</ul>
			</div>

			<div class="col-six tab-full">
				<div class="copyright">
					<span>© Copyright 2022.</span>
					<span>Design by <a href="https://github.com/MrArbai" target="_blank">Arbai</a></span>
				</div>
			</div>

			<div id="go-top">
				<a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
			</div>
		</div>
		<!-- /row -->
	</footer>

	<div id="preloader">
		<div id="loader"></div>
	</div>
	<!-- Java Script
   ================================================== -->
	<script src="<?= base_url('assets') ?>/js/jquery-2.1.3.min.js"></script>
	<script src="<?= base_url('assets') ?>/js/plugins.js"></script>
	<script src="<?= base_url('assets') ?>/js/main.js"></script>
</body>

</html>
