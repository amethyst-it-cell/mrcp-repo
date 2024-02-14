$(document).ready(function(){
   $("#courses").click(function(){
       var data={"course":1};
       $.ajax({
           url:"ajax/courses.php",
           type:"POST",
           data:data,
           success:function(dat){
               $("#slider-div").fadeOut();
               $(".iicc-desc").fadeOut();
               $(".our-pgrm").fadeOut();
               $("#faculty").fadeOut();
               $("#disp").html(dat);
           },
           error:function(er){
               console.log(er);
           }
       });
   });
   $("#fclty").click(function (){
       
               $("#slider-div").fadeIn();
               $(".iicc-desc").fadeIn();
               $(".our-pgrm").fadeIn();
               $("#faculty").fadeIn();
               $("#disp").html('');
   });
   $("#research").click(function(){
      var data={"resrch":1};
      $.ajax({
          url:"ajax/research.php",
          type:"POST",
          data:data,
          success:function(dat){
              $("#slider-div").fadeOut();
              $(".iicc-desc").fadeOut();
              $(".our-pgrm").fadeOut();
              $("#faculty").fadeOut();
              $("#disp").html(dat);
          },
          error:function(er){
              console.log(er);
          }
      });
  });
  $("#mrcp-vid").click(function(){
     var data={"mrcpvid":1}; 
     $.ajax({
        url:"ajax/mrcp_vid.php",
        type:"POST",
        data:data,
        success:function(dat){
              $("#slider-div").fadeOut();
              $(".iicc-desc").fadeOut();
              $(".our-pgrm").fadeOut();
              $("#faculty").fadeOut();
              $("#disp").html(dat);
          },
          error:function(er){
              console.log(er);
          }
     });
  });
  $("#exchng-pgrm").click(function(){
     var data={"mrcpvid":1}; 
     $.ajax({
        url:"ajax/excng_pgrm.php",
        type:"POST",
        data:data,
        success:function(dat){
              $("#slider-div").fadeOut();
              $(".iicc-desc").fadeOut();
              $(".our-pgrm").fadeOut();
              $("#faculty").fadeOut();
              $("#disp").html(dat);
          },
          error:function(er){
              console.log(er);
          }
     });
  });
});
