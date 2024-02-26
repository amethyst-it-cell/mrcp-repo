<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>iicc</title>
<!--Changed by samiullah !-->
        <!-- Bootstrap -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-2.2.4.js" crossorigin="anonymous"></script>
        <script src="js/homepage.js" type="text/javascript"></script>

        <!--<link href="bts/css/bootstrap.css" rel="stylesheet" type="text/css"/>-->
        <link rel="stylesheet" href="css/animate.css">
        <link href="css/stylesheet.css" rel="stylesheet" type="text/css"/>
        <!--<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>-->
        <!--<script src="js/bootstrap.js" type="text/javascript"></script>-->
        <link href="fa 4.0/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <style>
            .copyright {
  min-height: 40px;
  background-color: #141d29;
}

.copyright p {
  text-align: center;
  color: white;
  padding: 10px 0;
  margin-bottom: 0px;
}
        </style>

    </head>
    <body>
        <header id="myHeader" class="header" style="z-index:2 ">		
            <nav style="" class="navbar navbar-default" role="navigation">
                <div class="navigation">
                    <div class="container">					
                        <div class="navbar-header">
                            <button onclick="mytoggle1()" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-brand">
                                <span><a href="index.html"><h1 style="font-size:35px;word-spacing:5 ;font-weight: 600" ><span>ii-</span>cc</h1></a></span>
                            </div>
                        </div>

                        <div class="navbar-collapse collapse" id="myNavbar">							
                            <div class="menu">
                                <ul class="nav navbar-nav" role="tablist">
                                    <li role="presentation"><a href="index.php" class="active">Home</a></li>
                                    <li role="presentation" onclick="mytoggle()"><a id="courses" href="#">Courses</a></li>
                                    <li role="presentation" onclick="mytoggle()"><a id="fclty" href="#faculty">Faculty</a></li>
                                    <li role="presentation" onClick="mytoggle()"><a id="mrcp-vid" href="#">MRCP-Videos</a></li>
                                    <li role="presentation" onclick="mytoggle()"><a id="research" href="#">Research</a></li>
                                    <li role="presentation"><a href="#">Exchange Programme</a></li>
                                    <li role="presentation"><a href="#">About Us</a></li>						
                                </ul>
                            </div>
                        </div>						
                    </div>
                </div>	
            </nav>		
        </header>
    
        <div id="slider-div" class="row" style="margin: 0px;">
            <div class="col-md-8" >

             <!--<section class="section-white">-->

                <div style="" id="slidimg" class="carousel slide" data-ride="carousel">
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
<!--        <div style="padding:5px ">
            <marquee onmouseover="this.stop()" onmouseout="this.start()">
                <span style="background-color: #CE0009;float:left;margin-right: 10px;border-radius: 8px;">
                    <i style="font-family: 'Droid Serif', Georgia, Times, serif;color: whitesmoke;margin-right:5px;margin-left:5px;font-weight: bold"> News</i>
                </span>
                <span style="font-family: 'Droid Serif', Georgia, Times, serif;font-weight: bold"><a id="exchng-pgrm" style="text-decoration: none;color: black;
    text-shadow: 4px 4px 0 #fff, 7px 7px 0 rgba(0, 0, 0, 0.2);" href="#">MRCP Programme With Dr Sujha Punekar</a></span>
            </marquee>
        </div> -->
        <div id="disp">
            
        </div>
        <div class="iicc-desc">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!--<div id="iicc-desc-div1-slider" class="owl-carousel">-->
                        <div class="iicc-desc-div1 wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
                            <h3 class="iicc-desc-title wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">II-CC</h3>
                            <p class="description wow bounceInDown" data-wow-offset="0" data-wow-delay="0.8s">
                                II-CC IS A HEALTHCARE NETWORK OF DOCTORS, NURSES, MEDICAL STUDENTS, RESEARCHERS, PATIENT REPRESENTATIVES WHO WORK TO SUPPORT IT’S VISION.
                            </p>
                        </div>
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-sm-12 our-pgrm">
            <div class=" " style="background-color: rgba(152, 152, 152,0.75);">
                <span class="pgrm wow bounceInLeft" data-wow-offset="0" data-wow-delay="0.3s">Our Programme</span>
                <div class="row" style="padding: 0px;margin: 0px">
                    <div class="col-md-3 col-sm-6">
                        <div class="pgrmBox wow bounceInLeft" data-wow-offset="10" data-wow-delay="0.6s">
                            <div class="pgrm-icon">
                                <i class="fa fa-stethoscope"></i>
                            </div>
                            <h3 class="title">Medical Education</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pgrmBox blue wow bounceInLeft" data-wow-offset="10" data-wow-delay="0.7s">
                            <div class="pgrm-icon">
                                <i class="fa fa-flask"></i>
                            </div>
                            <h3 class="title">Research</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pgrmBox darkblue wow bounceInLeft" data-wow-offset="10" data-wow-delay="0.8s">
                            <div class="pgrm-icon">
                                <i class="fa fa-rocket"></i>
                            </div>
                            <h3 class="title">Exchange</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pgrmBox purple wow bounceInLeft" data-wow-offset="10" data-wow-delay="0.9s" >
                            <div class="pgrm-icon">
                                <i class="fa fa-hospital-o"></i>
                            </div>
                            <h3 class="title">Clinical</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container-fluid" id="faculty">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 style1" data-wow-offset="0" data-wow-delay="0.3s">
                    <span class="fstyle wow bounceInRight" data-wow-offset="0" data-wow-delay="0.6s">Our Faculty</span>
                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/Dr-Abhinaya-Shekhar200x200.jpg">
                            </div>
                            <h3 class="title">Dr Abhinaya Shekhar</h3>
                            <span class="post">Trainee Physician</span>
                            <span class="post">United Kingdom</span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/Dr-Akash-Awasthy-200x200.jpg">
                            </div>
                            <h3 class="title">Dr Akash Awasthy</h3>
                            <span class="post">Consultant Physician Acute Medicine</span>
                            <span class="post">United Kingdom</span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/Dr-Anis-Ahmed200x200.jpg">
                            </div>
                            <h3 class="title">Dr. Anis Ahmed</h3>
                            <span class="post">Consultant Physician</span>
                            <span class="post">United Kingdom</span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/Dr-Sameira-Suhail200x200.jpg">
                            </div>
                            <h3 class="title">Dr Sameira Suhail</h3>
                            <span class="post">Trainee Physician</span>
                            <span class="post">United Kingdom</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/DrAmrithBhatta200x200.jpg">
                            </div>
                            <h3 class="title">Dr Amrith Bhatta</h3>
                            <span class="post">Consultant Respiratory Physician</span>
                            <span class="post">United Kingdom</span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/DrArvindPonnusamy200x200.jpg">
                            </div>
                            <h3 class="title">Dr Arvind Ponnusamy</h3>
                            <span class="post">MRCP (UK), FASN, PhD</span>
                            <span class="post">United Kingdom</span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/DrHaribhaskarKemparaju200x200.jpg">
                            </div>
                            <h3 class="title">Dr Haribhaskar K.</h3>
                            <span class="post">Consultant Physician</span>
                            <span class="post">United Kingdom</span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/DrHemantSonwalkar200x200.jpg">
                            </div>
                            <h3 class="title">Dr Hemant Sonwalkar</h3>
                            <span class="post">Consultant Neuroradiologist</span>
                            <span class="post">United Kingdom</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/DrKalyanPeddada200x200.jpg">
                            </div>
                            <h3 class="title">Dr Kalyan Peddada</h3>
                            <span class="post">MRCP(UK) Trainee Physician</span>
                            <span class="post">United Kingdom</span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/DrMuthuSivaConsultantClinicalOncologistUK200x200.jpg">
                            </div>
                            <h3 class="title">Dr Muthu Siva</h3>
                            <span class="post">Consultant Clinical Oncologist</span>
                            <span class="post">United Kingdom</span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/DrSaumitraBaksi200x200.jpg">
                            </div>
                            <h3 class="title">Dr Saumitra Baksi</h3>
                            <span class="post">Consultant Physician</span>
                            <span class="post">United Kingdom</span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/DrVivekGoodoory200x200.jpg">
                            </div>
                            <h3 class="title">Dr Vivek Goodoory</h3>
                            <span class="post">Trainee Physician</span>
                            <span class="post">United Kingdom</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/ProfessorNihalGurusingheConsultantNeurosurgeonUK200x200.jpg">
                            </div>
                            <h3 class="title">Prof. Nihal Gurusinghe</h3>
                            <span class="post">Consultant Neurosurgeon</span>
                            <span class="post">United Kingdom</span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/drarunsingh200x200.jpg">
                            </div>
                            <h3 class="title">Dr Arun Singh</h3>
                            <span class="post">Consultant Physician</span>
                            <span class="post">United Kingdom</span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/drilyaskhan200x200.jpg">
                            </div>
                            <h3 class="title">Dr. Ilyas Khan</h3>
                            <span class="post">Trainee Physician</span>
                            <span class="post">United Kingdom</span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/drjohnmccann200x200.jpg">
                            </div>
                            <h3 class="title">Dr. John McCann</h3>
                            <span class="post">Consultant Physician</span>
                            <span class="post">United Kingdom</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/drmiqbal200x200.jpg">
                            </div>
                            <h3 class="title">Dr. M Iqbal</h3>
                            <span class="post">Consultant Pediatrics</span>
                            <span class="post">Canada</span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/drmunishbatra200x200.jpg">
                            </div>
                            <h3 class="title">Dr. Munish Batra</h3>
                            <span class="post">Consultant Physician</span>
                            <span class="post">United Kingdom</span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/drnattar200x200.jpg">
                            </div>
                            <h3 class="title">Dr N. Attar</h3>
                            <span class="post">Consultant Interventional Cardiologist</span>
                            <span class="post">United Kingdom</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/drshujapunekar200x200.jpg">
                            </div>
                            <h3 class="title">Dr. Shuja Punekar</h3>
                            <span class="post">Executive Chairman</span>
                            <span class="post">United Kingdom</span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/drsubbaganjam200x200.jpg">
                            </div>
                            <h3 class="title">Dr. Subba Ganjam</h3>
                            <span class="post">Specialist Trainee</span>
                            <span class="post">United Kingdom</span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/default-male.jpg">
                            </div>
                            <h3 class="title">Dr. Hamsraj Shetty</h3>
                            <span class="post">Stroke Physician</span>
                            <span class="post">United Kingdom</span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/defult-fe.jpg">
                            </div>
                            <h3 class="title">Dr. Michelle Kidd</h3>
                            <span class="post">Consultant Physician</span>
                            <span class="post">United Kingdom</span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="img/faculty/drshajilchalil200x200.jpg">
                            </div>
                            <h3 class="title">Dr Shajil Chalil</h3>
                            <span class="post">Consultant Cardiologist & Electrophysiologist</span>
                            <span class="post">United Kingdom</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="copyright">
    <div class="container">
        <div class="col-md-12 col-sm-12">
            <p>© 2017 - All Rights with <a style="text-decoration: none;color:#ED502E;font-weight: bold " href="#">II-CC</a></p>
        </div>
    </div>
</div>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/wow.min.js"></script>
        <script>
//            $('#yourElement').addClass('animated bounceOutLeft');
            wow = new WOW(
                    {

                    })
                    .init();

        </script>
        <script>
            window.onscroll = function () {
                myFunction();
            };

            var header = document.getElementById("myHeader");
            var sticky = header.offsetTop;

            function myFunction() {
                if (window.pageYOffset >= sticky) {
                    header.classList.add("sticky");
                } else {
                    header.classList.remove("sticky");
                }
            }

            function mytoggle() {
                var x = document.getElementById("myNavbar");
                x.style.display = "none";

            }
            function mytoggle1() {
                var x = document.getElementById("myNavbar");

                if (x.style.display === "block") {
                    x.style.display = "none";
                } else {
                    x.style.display = "block";
                }
            }
        </script>
    </body>
</html>