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
        <style>
            .img-responsive,
.thumbnail > img,
.thumbnail a > img,
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: block;
  width: 100%;
  /*height: auto;*/
}
          .carousel-inner {
  border-radius: 15px;
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
  padding: 0 25px 25px 0;
  text-align: right;
}

.carousel-control.left,
.carousel-control.right {
  background-image: none;
}


/* ------------------- Section Styling - Not needed for carousel styling ------------------- */

.section-white {
   /*padding: 10px 0;*/
}

.section-white {
/*  background-color: #fff;
  color: #555;*/
}
/********************************/
/*          Media Queries       */
/********************************/

@media screen and (min-width: 768px) {

  
}


        </style>
  </head>
  <body>
	<header>		
            <nav class="navbar navbar-default " role="navigation">
			<div class="navigation" >
				<div class="container" >					
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
   <section class="section-white">
  <div class="container" >

    <div id="slidimg" class="carousel slide" data-ride="carousel">
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
            <h2>Heading</h2>
          </div>
        </div>
        <div class="item">
            <img src="img/MRCPPACESSeminarBlackpoolUK.jpg" alt="..." class="img-responsive">
          <div class="carousel-caption">
            <h2>Heading</h2>
          </div>
        </div>
        <div class="item">
            <img src="img/alameen_classroom.jpg" alt="..." class="img-responsive">
          <div class="carousel-caption">
            <h2>Heading</h2>
          </div>
        </div>
        <div class="item">
            <img src="img/alameen_course.jpg" alt="..." class="img-responsive">
          <div class="carousel-caption">
            <h2>Heading</h2>
          </div>
        </div>
        <div class="item">
            <img src="img/alameen_group.jpg" alt="..." class="img-responsive">
          <div class="carousel-caption">
            <h2>Heading</h2>
          </div>
        </div>
        <div class="item">
            <img src="img/fortis_group.jpg" alt="..." class="img-responsive">
          <div class="carousel-caption">
            <h2>Heading</h2>
          </div>
        </div>
        <div class="item">
            <img src="img/fortis_lecture.jpg" alt="..." class="img-responsive">
          <div class="carousel-caption">
            <h2>Heading</h2>
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

  </div>
</section>
	
	   
	
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