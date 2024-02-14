<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ii-cc</title>

    <!-- Bootstrap -->
        <link href="bts/css/bootstrap.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="css/animate.css">
        <link href="css/stylesheet.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <link href="fa 4.0/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <style>
            .img-responsive,
.thumbnail > img,
.thumbnail a > img,
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: block;
  width: 100%;
  height: auto;
}
          .carousel-inner {
  /*border-radius: 10px;*/
  box-shadow: 3px 3px 5px green;
}

.carousel-caption {
  background-color: rgba(0,0,0,.5);
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 10;
  padding: 0 0 10px 25px;
  color: #fff;
  text-align: left;
}

.carousel-indicators {
  position: absolute;
  bottom: 0;
  right: 0;
  left: 0;
  width: 100%;
  z-index: 15;
  margin: 0;
  padding: 25px 15px 5px 0px;
  text-align: right;
}

.carousel-control.left,
.carousel-control.right {
  background-image: none;
}


/* ------------------- Section Styling - Not needed for carousel styling ------------------- */

section{
    padding: 0px;
    margin: 0px
}

.section-white {
  background-color: #fff;
  color: #555;
}
.sld-tit{
    font-weight:600;
    font-size:53px;
    /*font-family: Open Sans;*/
    margin-top:30%; 
    text-align: center;
}
.sld-desc{
    font-size:20px;
    font-weight:100;
    font-family: Open Sans;
    margin-top:15%; 
    text-align: center;
}
/********************************/
/*          Media Queries       */
/********************************/

@media screen and (max-width: 768px) {
.sld-tit{
    font-size:30px;
    margin-top:10%; 
}
.sld-desc{
    font-size:15px; 
}
}
/********************************/
/*          Testimonial       */
/********************************/
.testimonial{
    padding: 20px 0 0;
    text-align:center;
    position: relative;
    margin: 0 15px;
}
.testimonial:before{
    content: '\f10d';
    /*font-family: "Font Awesome 5 Free"; font-weight: 900;*/
    font-family: FontAwesome;
    position: absolute;
    top: -5px;
    left:48.5%;
    font-size: 40px;
    color:#e74c3c;
}
.testimonial .content{
    padding: 45px 35px;
    font-weight: bold;
    text-transform:uppercase;
    color: #fff;
    position: relative;
    border: 3px solid #fff;
    border-top: 0px none;
}
.testimonial .content:before{
    content: "";
    border-top: 3px solid #fff;
    position: absolute;
    top: 0;
    left: 0;
    width: 45%;
}
.testimonial .content:after{
    content: "";
    border-top: 3px solid #fff;
    position: absolute;
    top: 0;
    right: 0;
    width: 45%;
}

.testimonial .description{
    font-size: 25px;
}
.owl-theme .owl-controls .owl-page.active span, .owl-theme .owl-controls.clickable .owl-page:hover span{
    background: #e74c3c;
}
.owl-theme .owl-controls .owl-page span{
    background: #fff;
    opacity: 1;
}
@media only screen and (max-width: 990px) {
    .testimonial .content:before,
    .testimonial .content:after {
        width:43%;
    }
}
@media only screen and (max-width: 640px) {
    .testimonial:before{
        left:46%;
    }
    .testimonial .content{
        padding: 30px 35px;
    }
    .testimonial .description{
        font-size: 14px;
    }
}
@media only screen and (max-width: 480px) {
    .testimonial:before{
        font-size: 30px;
        top: 0;
    }
}

        </style>
        
  </head>
  <body>
	<header>		
		<nav style="padding: 0px;margin: 0px" class="navbar navbar-default " role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.html"><h1><span>II-</span>CC</h1></a>
						</div>
					</div>
					
                                    <div class="navbar-collapse collapse" id="myNavbar">							
						<div class="menu">
							<ul class="nav navbar-nav" role="tablist">
								<li role="presentation"><a href="#" class="active">Home</a></li>
								<li role="presentation"><a href="#">Services</a></li>
								<li role="presentation"><a href="#">Blog</a></li>
								<li role="presentation"><a href="#">Portfolio</a></li>
								<li role="presentation"><a href="#">Contact</a></li>						
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
      <div class="row" style="margin: 0px;">
          <div class="col-md-8">
 
              <!--<section class="section-white">-->

              <div style="padding-top: 5px" id="slidimg" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#slidimg" data-slide-to="0" class="active"></li>
        <li data-target="#slidimg" data-slide-to="1"></li>
        <li data-target="#slidimg" data-slide-to="2"></li>
        <li data-target="#slidimg" data-slide-to="3"></li>
        <li data-target="#slidimg" data-slide-to="4"></li>
        <li data-target="#slidimg" data-slide-to="5"></li>
        <li data-target="#slidimg" data-slide-to="6"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
            <img src="img/ProfJaneDacre.jpg" alt="..." class="img-responsive">
          <div class="carousel-caption">
            <h5>Dr Shuja Punekar with the President of the Royal College of Physicians of London, Prof Jane Dacre 
&#8211; 24th April 2017, Liverpool</h5>
          </div>
        </div>
        <div class="item">
            <img src="img/MRCPPACESSeminarBlackpoolUK.jpg" alt="..." class="img-responsive">
          <div class="carousel-caption">
            <h5>MRCP PACES Seminar Blackpool UK</h5>
          </div>
        </div>
        <div class="item">
            <img src="img/alameen_classroom.jpg" alt="..." class="img-responsive">
          <div class="carousel-caption">
            <h5>MRCP Course &#8211; Al-Ameen College Vijayapura</h5>
          </div>
        </div>
        <div class="item">
            <img src="img/alameen_course.jpg" alt="..." class="img-responsive">
          <div class="carousel-caption">
            <h5>MRCP Course &#8211; Al-Ameen College Vijayapura</h5>
          </div>
        </div>
        <div class="item">
            <img src="img/alameen_group.jpg" alt="..." class="img-responsive">
          <div class="carousel-caption">
            <h5>MRCP Course &#8211; Al-Ameen College Vijayapura</h5>
          </div>
        </div>
        <div class="item">
            <img src="img/fortis_group.jpg" alt="..." class="img-responsive">
          <div class="carousel-caption">
            <h5>MRCP Seminar &#8211; Fortis Hospital Bangalore</h5>
          </div>
        </div>
        <div class="item">
            <img src="img/fortis_lecture.jpg" alt="..." class="img-responsive">
          <div class="carousel-caption">
            <h5>MRCP Seminar &#8211; Fortis Hospital Bangalore</h5>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#slidimg" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#slidimg" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>

  <!--</section>-->
          </div>
          <div class="col-md-4" >
              <div class="sld-tit">India Clinical Collaborative</div>
              <div class="sld-desc">Healthcare Network Promoting and Supporting Educational, Research and Clinical-Care Projects</div>
          </div>
      </div>
          
   
	
      <!--<div class="" >-->
    <div class="row" style="background: #34495E;padding: 0px 0px 10px 0px;margin: 5px 0px 0px 0px">
        <div class="col-md-12">
            <div id="testimonial-slider" class="owl-carousel">
                <div class="testimonial wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
                    <div class="content wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
                        <p class="description wow bounceInDown" data-wow-offset="0" data-wow-delay="0.8s">
                            ii-cc is a healthcare network of doctors, nurses, 
medical students, researchers, patient representatives 
who work to support it’s vision.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--</div>-->
	
		
   
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/wow.min.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	
        </script>
  </body>
</html>