<html>
    <head>
        <style>
            row{
                padding: 0px;
                margin: 0px;
            }.demo{ background: #002333; }
.pricingTable{
    /*padding: 40px 0;*/
    margin: 50px 40px 30px 20px;
    background: #fff;
    text-align: center;
    z-index: 1;
    position: relative;
}
.pricingTable:before{
    content: "";
    border-right: 20px solid #9e534d;
    border-top: 20px solid transparent;
    border-left: 20px solid transparent;
    position: absolute;
    top: -20px;
    left: -40px;
}
.pricingTable:after{
    content: "";
    width: 100%;
    height: 100%;
    background: #fff;
    position: absolute;
    bottom: 0;
    left: 0;
    transform: skew(0deg, 7deg);
    transform-origin: left bottom 0;
    z-index: -1;
}
.pricingTable .title{
    padding: 20px 0;
    margin: 0 40px 20px 0;
    background: #d46c6d;
    font-size: 22px;
    font-weight: bold;
    color: #fff;
    letter-spacing: 1px;
    text-transform: uppercase;
    z-index: 1;
    position: relative;
}
.pricingTable .title:before{
    content: "";
    width: 100%;
    height: 100%;
    background: #d46c6d;
    position: absolute;
    top: 0;
    left: 0;
    transform: skew(17deg, 0deg);
    transform-origin: left bottom 0;
    z-index: -1
}
.pricingTable .title:after{
    content: "";
    border-top: 64px solid #d46c6d;
    border-right: 200px solid #ce0009;
    position: absolute;
    top: 0;
    right: 0;
    z-index: -1;
}
.pricingTable .pricing-content{
    list-style: none;
    padding: 20px 0;
    margin-bottom: 20px;
    font-size: 17px;
    font-weight: 600;
    letter-spacing: 1px;
    line-height: 35px;
    color: #ce0009;
    border-top: 1px solid #d46c6d;
    border-bottom:  1px solid #d46c6d;
    position: relative;
}
.pricingTable .pricing-content:before,
.pricingTable .pricing-content:after{
    content: "";
    width: 50%;
    height: 2px;
    background: #ce0009;
    position: absolute;
    top: -2px;
    left: 0;
    transition: all 0.3s ease 0s;
}
.pricingTable .pricing-content:after{
    top: auto;
    left: auto;
    bottom: -2px;
    right: 0;
}
.pricingTable:hover .pricing-content:before,
.pricingTable:hover .pricing-content:after{ width: 100%; }
.pricingTable a{ text-decoration: none}
.pricingTable .pricingTable-signup{
    display: inline-block;
    padding: 10px 30px;
    font-size: 17px;
    font-weight: 600;
    color: #ce0009;
    border: 2px solid #ce0009;
    transition: all 0.5s ease 0s;
}
.pricingTable:hover .pricingTable-signup{
    background: #ce0009;
    color: #fff;
}
.pricingTable.green:before{ border-right-color: #798b59; }
.pricingTable.green .title,
.pricingTable.green .title:before{ background: #a7c572; }
.pricingTable.green .title:after{
    border-top-color: #a7c572;
    border-right-color: #4d6236;
}
.pricingTable.green .pricing-content{
    color: #4d6236;
    border-top-color: #a7c572;
    border-bottom-color: #a7c572;
}
.pricingTable.green .pricing-content:before,
.pricingTable.green .pricing-content:after{ background: #4d6236; }
.pricingTable.green .pricingTable-signup{
    border-color: #4d6236;
    color: #4d6236;
}
.pricingTable.green:hover .pricingTable-signup{
    background: #4d6236;
    color: #fff;
}
.pricingTable.blue:before{ border-right-color: #7295a8; }
.pricingTable.blue .title,
.pricingTable.blue .title:before{ background: #3da5d9; }
.pricingTable.blue .title:after{
    border-top-color: #3da5d9;
    border-right-color: #25739d;
}
.pricingTable.blue .pricing-content{
    color: #25739d;
    border-top-color: #3da5d9;
    border-bottom-color: #3da5d9;
}
.pricingTable.blue .pricing-content:before,
.pricingTable.blue .pricing-content:after{ background: #25739d; }
.pricingTable.blue .pricingTable-signup{
    border-color: #25739d;
    color: #25739d;
}
.pricingTable.blue:hover .pricingTable-signup{
    background: #25739d;
    color: #fff;
}
@media only screen and (max-width: 990px){
    .pricingTable{ margin-bottom: 50px; }
}
@media only screen and (max-width: 767px){
    .pricingTable{ margin-bottom: 80px; }
    .pricingTable:after{
        transform: skew(0deg, 3deg);
        transform-origin: left bottom 0;
    }
    
}
        </style>
    </head>
    <body style="background: white">

<?php

if(filter_has_var(INPUT_POST, "course"))
        { ?>
        <div class="container" style="box-shadow: 3px 3px 5px 4px #f2dede">
    <div class="row">
        <span style="
    display: block;
    font-size: 40px;
    color: #0968c1;
    text-align: center;
    text-shadow: 4px 4px 0 #fff, 7px 7px 0 rgba(0, 0, 0, 0.2);
    position: relative;
    padding:2px 0 15px ">Upcoming Courses</span>
    <div class="col-md-4 col-sm-6 col-md-offset-1 col-sm-offset-1" >
        <div class="col-md-12 col-md-offset-1" style="border:1px solid #002333">
            <div class="pricingTable" >
                <h3 class="title">I-MRCP</h3>
                <ul class="pricing-content">
                    <li>2 Day Course</li>
                    <li>Saturday and Sunday </li>
                    <li>27-28 May 2017</li>
                    <li>Fortis Hospital Bangalore</li>
                </ul>
                <a href="img/courses/MRCPUKcourseMay2017.pdf" class="pricingTable-signup"> Course Agenda</a>
            </div></div>
        </div></div>
    <div class="row">
        <span style="
    display: block;
    font-size: 40px;
    color: #0968c1;
    text-align: center;
    text-shadow: 4px 4px 0 #fff, 7px 7px 0 rgba(0, 0, 0, 0.2);
    position: relative;
    padding:20px 0 15px">Past Courses</span>
        <div class="col-md-4 col-sm-6 col-md-offset-1 col-sm-offset-1" >
        <div class="col-md-12 col-md-offset-1" style="border:1px solid #002333">
            <div class="pricingTable" >
                <h3 class="title">SEMINAR-BLR</h3>
                <ul class="pricing-content">
                    <li>MRCP Seminar</li>
                    <li>Sunday, 8th January </li>
                    <li>3:00 PM – 06:00 PM</li>
                    <li>Bangalore</li>
                </ul>
                <a href="img/courses/MRCPpacesSeminarProgram.pdf" class="pricingTable-signup"> Seminar Agenda</a>
            </div></div>
        </div>
        <div class="col-md-4 col-sm-6 col-md-offset-1 col-sm-offset-1" >
        <div class="col-md-12 col-md-offset-1" style="border:1px solid #002333">
            <div class="pricingTable" >
                <h3 class="title">COURSE</h3>
                <ul class="pricing-content">
                    <li>2 Day Course</li>
                    <li>Friday and Saturday</li>
                    <li>13th - 14th January 2017</li>
                    <li>Vijayapur</li>
                </ul>
                <a href="img/courses/MRCPpacesSeminarProgram.pdf" class="pricingTable-signup">PACES Course Agenda</a>
            </div></div>
        </div></div><br>
        </div><br>
<?php }