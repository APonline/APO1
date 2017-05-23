<?php
require_once('Connections/db.php');
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta property="og:title" content="Drone Wolf"/>
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://www.dronewolfpack.com">
	<meta property="og:image" content="http://www.dronewolfpack.com/css/images/fbBanner.jpg">
	<meta property="og:description" content="Check out the Self Titled LP - Drone Wolf - In all online digital outlets! Available now!">
	<link rel="image_src" href="http://www.dronewolfpack.com/css/images/fbBanner.jpg" / ><!--formatted-->
	
	<meta content="width=300, user-scalable=yes" name="viewport">
	<meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="Drone Wolf is an up and coming artist in the alternative progressive rock genre"/>
	<meta name="keywords" content="web,music,alternative,rock,prog,drone,drones,kayne,bieber,drake,the6,toronto,facebook,twitter,concert,free,experimental">
	<meta http-equiv="Cache-Control" content="no-cache" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />	
	<meta charset="UTF-8">

	<title>Andrew Phillips - Multimedia Designer</title>
	<link rel="icon" href="css/images/icon.png" sizes="32x32" >	
	<link rel="stylesheet" type="text/css" href="<?php echo $lvl; ?>/css/main.css" />
	<script type="text/javascript" src="<?php echo $lvl; ?>/js/jQuery.js"></script>
	<link rel="stylesheet" type="text/css" href="http://dronewolfpack.com/SITE/v1/includes/style/font-awesome/css/font-awesome.css" />	
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!--FOOTER-->
	<script type="text/javascript" src="<?php echo $lvl; ?>/js/main.js"></script>
</head>
<body>	
<videoheader id="top" class="header fade-in-video NOblur">
	<div class="videoContainer DESKTOP">
	  <video autoplay muted loop>
		<source src="<?php echo $lvl; ?>/videos/sun1.webm" type="video/webm"> 
	  </video>
	</div>
</videoheader>
<div class="screen"></div>


	<!--NAV-->
	<div class="nav">
		<img src="<?php echo $lvl; ?>/css/images/logo.svg" alt="Andrew Phillips logo" style="margin: 10px;position: absolute;left: 0px;width: 50px;" />
		<img src="<?php echo $lvl; ?>/css/images/logoName.svg" alt="Andrew Phillips logo" style="margin: 22px 10px 16px 10px;position: absolute;right: 0px;height: auto;max-width: 200px;" /> 
		<ul>
			<li class="navBTN" data-id="pg1" data-name="reel">REEL</li>
			<li class="navBTN" data-id="pg2" data-name="work">WORK</li>
			<li class="navBTN" data-id="pg3" data-name="info">INFO</li>
			<li class="navBTN" data-id="pg4" data-name="cv">CV</li>
			<li class="navBTN" data-id="pg5" data-name="contact">CONTACT</li>
		</ul>
	</div>
	<!--NAV--> 

	<!--PAGES-->
		<!--REEL-->
		<div class="pg pg1" data-id="pg1">			
			<div class="reel-content button-box">
				<div class="top-gradient-line top-gradient-text">Designer / Developer</div>
				DEMO REEL
				<div class="bottom-gradient-line bottom-gradient-text">Multimedia</div>
			</div>
		</div>
		<!--REEL-->
		<!--WORK-->
		<div id="work" class="page pg2" data-id="pg2">
			<div class="cont">
				<ul id="Imagelistings">
					<li class="listingItem color1" data-type="gallery" style="background: linear-gradient(to top, rgba(0, 0, 0, 0.298039) 0%, rgba(0, 0, 0, 1) 100%), url('http://wizard-portal.com/portfolio/img/portfolio-1.jpg') 50% 50% / 155% 115% no-repeat;">
						<div class="listingTitle">
							<h3>Vikings</h3>
							<div class="divider"></div>
							<p>
							Front end NFL team Season Ticket Holder Renewal
							</p>
						</div>
						
						<div class="listingItemTitle">Enlarge</div>
					</li>
					<li class="listingItem" data-type="gallery" style="background: linear-gradient(to top, rgba(0, 0, 0, 0.298039) 0%, rgba(0, 0, 0, 1) 100%), url('http://wizard-portal.com/portfolio/img/portfolio-2.jpg') 50% 50% / 155% 115% no-repeat;">
						<div class="listingTitle">
							<h3>New Mosaic Stadium</h3>
							<div class="divider"></div>
							<p>
							Custom built booking calendar with time slot manager
							</p>
						</div>
						
						<div class="listingItemTitle">Enlarge</div>
					</li>
					<li class="listingItem" data-type="gallery" style="background: linear-gradient(to top, rgba(0, 0, 0, 0.298039) 0%, rgba(0, 0, 0, 1) 100%), url('http://wizard-portal.com/portfolio/img/portfolio-3.jpg') 50% 50% / 155% 115% no-repeat;">
						<div class="listingTitle">
							<h3>Braves</h3>
							<div class="divider"></div>
							<p>
							Award winning Front end MLB Season Ticket Renewal Site
							</p>
						</div>
						
						<div class="listingItemTitle">Enlarge</div>
					</li>
					<li class="listingItem color2" data-type="gallery" style="background: linear-gradient(to top, rgba(0, 0, 0, 0.298039) 0%, rgba(0, 0, 0, 1) 100%), url('http://wizard-portal.com/portfolio/img/portfolio-4.jpg') 50% 50% / 155% 115% no-repeat;">
						<div class="listingTitle">
							<h3>Broncos</h3>
							<div class="divider"></div>
							<p>
							Season Ticket Holder Renewal campaign
							</p>
						</div>
						
						<div class="listingItemTitle">Enlarge</div>
					</li>
					<li class="listingItem" data-type="gallery" style="background: linear-gradient(to top, rgba(0, 0, 0, 0.298039) 0%, rgba(0, 0, 0, 1) 100%), url('http://wizard-portal.com/portfolio/img/portfolio-5.jpg') 50% 50% / 155% 115% no-repeat;">
						<div class="listingTitle">
							<h3>Conspiracy Theorist</h3>
							<div class="divider"></div>
							<p>
							Mock-up Tv programm Intro reel based on a round of unified topics
							</p>
						</div>
						
						<div class="listingItemTitle">Enlarge</div>
					</li>
					<li class="listingItem" data-type="gallery" style="background: linear-gradient(to top, rgba(0, 0, 0, 0.298039) 0%, rgba(0, 0, 0, 1) 100%), url('http://wizard-portal.com/portfolio/img/portfolio-6.jpg') 50% 50% / 155% 115% no-repeat;">
						<div class="listingTitle">
							<h3>The Innocent Devil</h3>
							<div class="divider"></div>
							<p>
							College made 10 min cartoon short, first attempt at bringing a concept to cartoon
							</p>
						</div>
						
						<div class="listingItemTitle">Enlarge</div>
					</li>
					<li class="listingItem color1" data-type="gallery" style="background: linear-gradient(to top, rgba(0, 0, 0, 0.298039) 0%, rgba(0, 0, 0, 1) 100%), url('http://wizard-portal.com/portfolio/img/portfolio-7.jpg') 50% 50% / 155% 115% no-repeat;">
						<div class="listingTitle">
							<h3>Misc Green screen</h3>
							<div class="divider"></div>
							<p>
							Green screened looped scenes for presentation centres marketing new stadiums
							</p>
						</div>
						
						<div class="listingItemTitle">Enlarge</div>
					</li>
					<li class="listingItem" data-type="gallery" style="background: linear-gradient(to top, rgba(0, 0, 0, 0.298039) 0%, rgba(0, 0, 0, 1) 100%), url('http://wizard-portal.com/portfolio/img/portfolio-8.jpg') 50% 50% / 135% 115% no-repeat;">
						<div class="listingTitle">
							<h3>PTMS Monitoring</h3>
							<div class="divider"></div>
							<p>
							Motion infographic on the grape growing cycle
							</p>
						</div>
						
						<div class="listingItemTitle">Enlarge</div>
					</li>
					<li class="listingItem" data-type="gallery" style="background: linear-gradient(to top, rgba(0, 0, 0, 0.298039) 0%, rgba(0, 0, 0, 1) 100%), url('http://wizard-portal.com/portfolio/img/portfolio-9.jpg') 50% 50% / 155% 115% no-repeat;">
						<div class="listingTitle">
							<h3>Tell u Temp</h3>
							<div class="divider"></div>
							<p>
							Cloud based data logging RF full stack system and web user interface with CMS
							</p>
						</div>
						
						<div class="listingItemTitle">Enlarge</div>
					</li>
					<li class="listingItem color2" data-type="gallery" style="background: linear-gradient(to top, rgba(0, 0, 0, 0.298039) 0%, rgba(0, 0, 0, 1) 100%), url('http://wizard-portal.com/portfolio/img/portfolio-10.jpg') 50% 50% / 155% 115% no-repeat;">
						<div class="listingTitle">
							<h3>DEMORA.VISION</h3>
							<div class="divider"></div>
							<p>
							A unique tool designed to turn an archive of files into an interactive programmed experience
							</p>
						</div>
						
						<div class="listingItemTitle">Enlarge</div>
					</li>
					<li class="listingItem" data-type="gallery" style="background: linear-gradient(to top, rgba(0, 0, 0, 0.298039) 0%, rgba(0, 0, 0, 1) 100%), url('http://wizard-portal.com/portfolio/img/portfolio-11.jpg') 50% 50% / 155% 115% no-repeat;">
						<div class="listingTitle">
							<h3>Drone Wolf</h3>
							<div class="divider"></div>
							<p>
							The Progressive alt Rock bands custom site with CMS
							</p>
						</div>
						
						<div class="listingItemTitle">Enlarge</div>
					</li>
					<li class="listingItem color1" data-type="gallery" style="background: linear-gradient(to top, rgba(0, 0, 0, 0.298039) 0%, rgba(0, 0, 0, 1) 100%), url('http://wizard-portal.com/portfolio/img/portfolio-12.jpg') 50% 50% / 155% 115% no-repeat;">
						<div class="listingTitle">
							<h3>WEEDR</h3>
							<div class="divider"></div>
							<p>
							Web app to track strain usage for medical marijuana research 
							</p>
						</div>
						
						<div class="listingItemTitle">Enlarge</div>
					</li>
				</ul>
			</div>
		</div>
		<!--WORK-->
		
		<!--SLIDER-->
		<div class="page pg3" data-id="pg3">
			<div class="cont">
				<div class="slider">
					<div class="sliderItem activeSlide" data-id="1" >
						<p class="sidepromoHead" style="text-align: left;font-size: 63px;font-family: roboto-CB;">
						SERVICES</p><br>
						<div class="promoimg">
							<div class="promoimgHover videoListing" data-content="videos/promo.webm">
								<i class=" fa fa-caret-square-o-right" aria-hidden="true" style="font-size: 50px;margin: 20px auto;display: block;position: relative;height: 100%;display: table-cell;vertical-align: middle;"></i>
							</div>
						</div>
						<p class="sidepromoSub" style="text-align: center;font-size:26px;font-family: roboto-CB;">
						- WATCH THE PROMO -
						</p>
					</div>
				</div>
			</div>
		</div>
		<!--SLIDER-->
		
		<div class="page pg4" data-id="pg4">
			<div class="container">
				CV
				
				<div class="section">
				CAREER
  					<hr />
					<div class="section-cont company">
						<img class="worklogo" src="<?php echo $lvl; ?>/css/images/company1_alt.png" alt="" />
						<p class="section-cont-head">eOutsource Solutions</p>
						<div class="section-cont-body" style="line-height: 20px;">
							Full Stack<br>
							<span class="company-date">2012 (jul-aug)</span><br>
						</div>
					
						<div class="section-cont-foot">
						- Contract
						</div>
						<div class="clear"></div>
					</div>
					<div class="section-cont company">
						<img class="worklogo" src="<?php echo $lvl; ?>/css/images/company2_alt.png" alt="" />
						<p class="section-cont-head">Channel 1 Media Solutions</p>
						<div class="section-cont-body" style="line-height: 20px;">
							Developer<br>
							<span class="company-date">2013 - 2016</span><br>
						</div>
					
						<div class="section-cont-foot">
						- Fulltime
						</div>
						<div class="clear"></div>
					</div>
					<div class="section-cont company">
						<img class="worklogo" src="<?php echo $lvl; ?>/css/images/company3_alt.png" alt="" />
						<p class="section-cont-head">St.Joseph Communications</p>
						<div class="section-cont-body" style="line-height: 20px;">
							Full Stack<br>
							<span class="company-date">2016 (apr - aug)</span><br>
						</div>
					
						<div class="section-cont-foot">
						- Contract
						</div>
						<div class="clear"></div>
					</div>
					<div class="section-cont company">
						<img class="worklogo" src="<?php echo $lvl; ?>/css/images/company4_alt.png" alt="" />
						<p class="section-cont-head">Be A Part OF</p>
						<div class="section-cont-body" style="line-height: 20px;">
							Full Stack<br>
							<span class="company-date">2016 - Curr</span><br>
						</div>
					
						<div class="section-cont-foot">
						- Fulltime
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="section">
				SKILLS
  					<hr />
  					<div class="slider">
						<div class="section-cont slide">
						<p class="section-cont-head">Development</p>
						<div class="section-cont-body skill">
							Front End:<br>
							<ul>
								<li>HTML5</li>
								<li>CSS3</li>
								<li>JS</li>
								<li>JQUERY</li>
								<li>AJAX</li>
								<li>JSON</li>
							</ul>
						</div>
						<div class="section-cont-body skill">
							Back End:<br>
							<ul>
								<li>PHP</li>
								<li>MYSQL/MYSQLI</li>
								<li>SHELL</li>
							</ul>
						</div>
						<div class="section-cont-body skill">
							Frameworks:<br>
							<ul>
								<li>EMBER JS</li>
								<li>ANGULAR JS</li>
								<li>REACT JS</li>
								<li>BOOTSTRAP</li>
								<li>WP</li>
							</ul>
						</div>
						<br />
						<div class="section-cont-foot">
							- MAC/LINUX
						</div>
						<div class="clear"></div>
					</div>
						<div class="section-cont slide">
							<p class="section-cont-head">VIDEO</p>
							<div class="section-cont-body skill">
								Production:<br>
								<ul>
									<li>HTML5</li>
									<li>CSS3</li>
									<li>JS</li>
									<li>JQUERY</li>
									<li>AJAX</li>
									<li>JSON</li>
								</ul>
							</div>
							<div class="section-cont-body skill">
								Editing:<br>
								<ul>
									<li>PHP</li>
									<li>MYSQL/MYSQLI</li>
									<li>SHELL</li>
								</ul>
							</div>
							<div class="section-cont-body skill">
								VFX:<br>
								<ul>
									<li>EMBER JS</li>
									<li>ANGULAR JS</li>
									<li>REACT JS</li>
									<li>BOOTSTRAP</li>
									<li>WP</li>
								</ul>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="section">
				EDUCATION
  					<hr />
					<div class="section-cont">
						<p class="section-cont-head">Durham College</p>
						<div class="section-cont-body" style="line-height: 20px;">
							Multimedia Design<br>
							Associates Degree<br>
							<span class="company-date">2013</span><br>
						</div><br>
					
						<div class="section-cont-foot">
						- Interactive Design Committee
						</foot>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
			<img src="<?php echo $lvl; ?>/css/images/logoW.svg" alt="Andrew Phillips logo" style="margin: 30px auto;position: relative;display:block;left: 0px;width: 30px;" />
		</div>
		
		
		<div class="page pg5" data-id="pg5">
			<div class="container">
				CONTACT
				
				<div class="">
					<form action="#">
						<div>
							<input type="type" name="name" placeholder="Name" value="" /><br />
							
							<input type="type" name="email" placeholder="Email Address" value="" /><br />
							
							<input type="type" name="subject" placeholder="Subject" value="" /><br />
							
							<textarea type="type" name="body" placeholder="Your message" value="" style="resize: none;"></textarea>
							<button type="submit">Send</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	<!--PAGES-->
	
</body>
</html>


