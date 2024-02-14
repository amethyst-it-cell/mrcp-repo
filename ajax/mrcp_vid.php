<?php
if (filter_has_var(INPUT_POST, "mrcpvid")) {
    ?>
    <div class="container gallery-container">
        <h1>MRCP Videos</h1>
        <div class="tz-gallery">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <center><a class="" href="#">
                            <iframe src='https://www.youtube.com/embed/DPv3jxlMpno?feature=oembed?&t'> </iframe>
                        </a></center>
                        <div class="caption">
                            <h3>MRCP Paces</h3>
                            <p>Station 1, Neurology section (Upper Limbs).</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <center><a class="" href="#">
                            <iframe src='https://www.youtube.com/embed/KzTtNJTK6Yk?feature=oembed'> </iframe>
                        </a></center>
                        <div class="caption">
                            <h3>MRCP Paces History</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <center><a class="" href="#">
                            <iframe src='https://www.youtube.com/embed/w8Jo2xdxLXo?feature=oembed'> </iframe>
                        </a></center>
                        <div class="caption">
                            <h3>MRCP Paces</h3>
                            <p>Station 3 - Abdominal</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <center><a class="" href="#">
                            <iframe src='https://www.youtube.com/embed/ZUsroppoX9E?feature=oembed'> </iframe>
                        </a></center>
                        <div class="caption">
                            <h3>MRCP</h3>
                            <p>Demonstration of Lower Limb Examination</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <center><a class="" href="#">
                            <iframe src='https://www.youtube.com/embed/EQBkwn0ilaA?feature=oembed'> </iframe>
                        </a></center>
                        <div class="caption">
                            <h3>MRCP Paces</h3>
                            <p>Station 4: Communication and Ethics</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <center><a class="" href="#">
                            <iframe src='https://www.youtube.com/embed/BdSSlrkGeGo?feature=oembed'> </iframe>
                        </a></center>
                        <div class="caption">
                            <h3>MRCP Paces</h3>
                            <p>Station one: Neurology v2.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <center><a class="" href="#">
                            <iframe src='https://www.youtube.com/embed/Evod5EZsR0I?feature=oembed'> </iframe>
                        </a></center>
                        <div class="caption">
                            <h3>MRCP Paces</h3>
                            <p>Station one, Cardiology (with examination summary)</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <center><a class="" href="#">
                            <iframe src='https://www.youtube.com/embed/aUgcyVrMG_E?feature=oembed'> </iframe>
                        </a></center>
                        <div class="caption">
                            <h3>MRCP Paces</h3>
                            <p>Station one: Neurology v3</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <center><a class="" href="#">
                            <iframe src='https://www.youtube.com/embed/57C-AuS7k28?feature=oembed'> </iframe>
                        </a></center>
                        <div class="caption">
                            <h3>MRCP Paces</h3>
                            <p>Station one Cardiology - Demonstration of Taking a Collapsing Pulse</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <center><a class="" href="#">
                            <iframe src='https://www.youtube.com/embed/mgYcagLJ67s?feature=oembed'> </iframe>
                        </a></center>
                        <div class="caption">
                            <h3>MRCP Paces</h3>
                            <p>PACES Scenarios - Group Discussion</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>
<!-- ./Footer -->
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

    // Created by Avaz Bokiev @samarkandiy  
    baguetteBox.run('.tz-gallery');
</script>

<!--    </body>
</html>-->
