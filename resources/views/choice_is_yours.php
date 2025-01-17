<?php include('Layout/header.php') ?>

    <header class="header-innerpages">
        <?php include('Layout/navbar.php') ?>

<div class="clearfix"></div>

<div class="headertxttwocol cpuinnerheaderbg choiceinnerheader">
        <div class="container">
            <div class="section leanfra-pro">
                <div class="container">
                    <div class="head-subhead">
                        <h3>The choice is yours!
                            </h3>
                        <p>We understand that servers often contain highly sensitive information and so we offer our
                            customers as much flexibility to keep that information safe.
                            </p>
                    </div>
    
                    <div class="net-cpu-stroage">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="icon_net200give">
                                    <img src="assets/img/object-datacentres.png" class="img-responsive" alt="Image">
                                    <h4>ON-PREMISE</h4>
                                    <p>USE OUR POD IN YOUR PREMISES</p>

                                    <ul class="listcircle">
                                        <li>We will ship our Pod to your premise. 
                                        </li>
                                        <li>We will install and configure <br> from A to Z. 
                                        </li>
                                        <li>We will remotely maintain, monitor and
                                            support the entire Pod.</li>
                                    </ul>
        
                                    <h6>GET STARTED <i class="fa fa-long-arrow-right" aria-hidden="true"></i></h6>
                                </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="icon_net200give">
                                        <img src="assets/img/object-cloud.png" class="img-responsive" alt="Image">
                                        <h4>LEANFRA’S CLOUD</h4>
                                        <p>TIER 3 DATACENTRE</p>
                                                <ul class="listcircle">
                                                    <li>Concurrently maintainable infrastructure 
                                                    </li>
                                                    <li>Guaranteeing reliable service - 100%
                                                        uptime </li>
                                                    <li>Designed and built to provide best in
                                                        class security. </li>
                                                    <li>24/7 monitoring by onsite security and
                                                        Network Operations Centre personnel. </li>
                                                        <li>Up to 10Gb/s WAN</li>
                                                </ul>
            
                                        <h6 class="bgcolorthree">GET STARTED <i class="fa fa-long-arrow-right" aria-hidden="true"></i></h6>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="icon_net200give">
                                            <img src="assets/img/object-datacentres-si.png" class="img-responsive" alt="Image">
                                            <h4>YOUR APPROVED DATACENTER</h4>
                                            <p>USE OUR POD IN A DATACENTER  
                                                    </p>
                                                    <ul class="listcircle">
                                                        <li>We will ship our entire stack to your
                                                            datacenter </li>
                                                        <li>We will install and configure from A to Z. 
                                                        </li>
                                                        <li>We will remotely maintain, monitor and
                                                            support the entire stack.</li>
                                                    </ul>
                
                                            <h6>GET STARTED <i class="fa fa-long-arrow-right" aria-hidden="true"></i></h6>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header>

    <main class="content_section">
        <div class="container">
            <!-- <div class="pageheadparaall">
                    <h2>GPU Servers</h2>
                    <p>Tiers to suit your every need</p>
            </div> -->
        </div>
    </main>

    <footer>
       <div class="middle-footer">
    <div class="container">
            <div class="row">
                    <div class="col-md-3">
                        <img src="assets/img/200px-png-white-bg.png" class="img-responsive" alt="Image">
                        <div class="socailmedia">
                            <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                            <a href="#"></a><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                            <a href="#"></a><i class="fa fa-envelope" aria-hidden="true"></i></a>
                            <a href="#"></a><i class="fa fa-github" aria-hidden="true"></i></a>
                            <a href="#"></a><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h3>Our Environment</h3>
                        <p><a href="#">Servers</a></p>
                        <p><a href="#">Network</a></p>
                        <p><a href="#">Storage</a></p>
                        <p><a href="#">Locations</a></p>
                    </div>
                    <div class="col-md-3">
                        <h3>Company
                            </h3>
                        <p><a href="#">Professional Services</a></p>
                        <p><a href="#">Pricing</a></p>
                        <p><a href="#">Contact Us</a></p>
                        <p><a href="#">About Us</a></p>
                        <p><a href="#">Career</a></p>
                        <p><a href="#">Privacy Policy</a></p>
                    </div>
                    <div class="col-md-3">
                        <h3>Datacentre Location</h3>
                        <p><a href="#">Location #1</a></p>
                        <p><a href="#">Location #2</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
                <div class="container">
                    <p>Leanfra Inc. © 2019. All rights reserved</p>
                </div>
            </div>
    </footer>

</body>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        // Main Header nav
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll > 70) {
                $("#main_header").css({
                    "background": "rgba(0,0,0,0.8)"
                });
                $("#main_header li a").css({
                    "color": "#fff"
                });
                $("a.navbar-brand.websitelogo-home").css({ "padding-top": "8px" });
    
            } 
            else {
                $("#main_header").css("background", "none");
                $("#main_header li a").css({"color": "#fff"});
            }
        });
    
        
    
    });
    </script>
</html>