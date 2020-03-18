<?php 
//koneksi ke dbms
require 'functions.php';
$conn = mysqli_connect("localhost","root","","vapor");
    if(isset($_POST["submit"])){
        if ( tambah($_POST) > 0){
            echo "
            <script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'index.php';
            </script>
            ";
        } else {
            echo "data gagal ditambahkan";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Empire Vape</title>
<!--
Fluid Gallery Template
http://www.templatemo.com/tm-500-fluid-gallery
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">  
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="Font-Awesome-4.7/css/font-awesome.min.css">                
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/hero-slider-style.css">                              
    <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="css/magnific-popup.css">                                 
    <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="css/templatemo-style.css">                                   

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->

        <!-- These two JS are loaded at the top for gray scale including the loader. -->

        <script src="js/jquery-1.11.3.min.js"></script>
        <!-- jQuery (https://jquery.com/download/) -->

        <script>
		
            var tm_gray_site = false;
            
            if(tm_gray_site) {
                $('html').addClass('gray');
            }
            else {
                $('html').removeClass('gray');   
            }
        </script>
</head>

    <body>
        
        <!-- Content -->
        <div class="cd-hero">

            <!-- Navigation -->        
            <div class="cd-slider-nav">
                <nav class="navbar">
                    <div class="tm-navbar-bg">
                        
                        <a class="navbar-brand text-uppercase" href="#"><i class="">                                       <img src="img/7.png" alt="Image" height="100px" width="100px"></i>Empire Vape</a>

                        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        <div class="collapse navbar-toggleable-md text-xs-center text-uppercase tm-navbar" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item active selected">
                                    <a class="nav-link" href="#0" data-no="1">MOD <span class="sr-only">(current)</span></a>
                                </li>                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#0" data-no="2">POD</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#0" data-no="3">LIQUID</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#0" data-no="4">ABOUT US</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#0" data-no="5">ORDER</a>
                                </li>

                            </ul>
                        </div>                        
                    </div>

                </nav>
            </div> 

            <ul class="cd-hero-slider">

                <!-- Page 1 Gallery One -->
                <li class="selected">                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="1" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-one">
                                <!-- Gallery One pop up connected with JS code below -->
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/mod/drugafoxy.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Druga  <span><strong>Foxy</strong></span></h2>
                                                <p class="tm-figure-description">Rp. 700.000</p>
                                                <a href="img/mod/drugafoxy.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/mod/aegis.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Aegis <span><strong>X</strong></span></h2>
                                                <p class="tm-figure-description">Rp. 640.000</p>
                                                <a href="img/mod/aegis.jpg">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/mod/drag2.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Voopoo <span><strong>Drag 2</strong></span></h2>
                                                <p class="tm-figure-description">Rp. 700.000</p>
                                                <a href="img/mod/drag2.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/mod/gen.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Vaporesso <span><strong>GEN</strong></span></h2>
                                                <p class="tm-figure-description">RP. 520.000</p>
                                                <a href="img/mod/gen.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>  
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/mod/hexohm.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Hexohm <span><strong></strong></span></h2>
                                                <p class="tm-figure-description">Rp. 3.000.000</p>
                                                <a href="img/mod/hexohm.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/mod/smoant.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Smoant <span><strong>Naboo</strong></span></h2>
                                                <p class="tm-figure-description">Rp. 542.000</p>
                                                <a href="img/mod/smoant.jpg">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/mod/rincoepro.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Rincoe Manto <span><strong>PRO</strong></span></h2>
                                                <p class="tm-figure-description">Rp. 375.000</p>
                                                <a href="img/mod/rincoepro.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/mod/hotcig.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Hotcig R <span><strong>AIO</strong></span></h2>
                                                <p class="tm-figure-description">Rp. 590.000</p>
                                                <a href="img/mod/hotcig.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>                                                                        
                                </div>                                 
                            </div>
                        </div>                                                    
                    </div>                    
                </li>

                <!-- Page 2 Gallery Two -->
                <li>                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="2" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-two">
                                <!-- Gallery Two pop up connected with JS code below -->
                                    
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/pod/aegisboost.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Aegist <span><strong>Boost</strong></span></h2>
                                                <p class="tm-figure-description">Rp. 400.000</p>
                                                <a href="img/pod/aegisboost.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/pod/druganarada.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Druga <span><strong>Narada</strong></span></h2>
                                                <p class="tm-figure-description">Rp. 400.000</p>
                                                <a href="img/pod/druganarada.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/pod/exceedgrip.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Exceed <span><strong>Grip</strong></span></h2>
                                                <p class="tm-figure-description">Rp. 275.000</p>
                                                <a href="img/pod/exceedgrip.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/pod/kuy.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Kuy <span><strong></strong></span></h2>
                                                <p class="tm-figure-description">Rp. 180.000</p>
                                                <a href="img/pod/kuy.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/pod/pm80.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Vaporesso <span><strong>Target PM 80</strong></span></h2>
                                                <p class="tm-figure-description">Rp. 400.000</p>
                                                <a href="img/pod/pm80.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/pod/smokrpm40.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">SMOK <span><strong>RPM40</strong></span></h2>
                                                <p class="tm-figure-description">Rp. 350.000</p>
                                                <a href="img/pod/smokrpm40.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>  
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/pod/smokrpm80.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Smok <span><strong>RPM80</strong></span></h2>
                                                <p class="tm-figure-description">Rp. 400.000</p>
                                                <a href="img/pod/smokrpm80.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>  
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/pod/vincix.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Vinci <span><strong>X</strong></span></h2>
                                                <p class="tm-figure-description">Rp. 500.000</p>
                                                <a href="img/pod/vincix.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>   
                                </div>                                 
                            </div>
                        </div>                      
                    </div>
                </li>

                <!-- Page 3 Gallery Three -->
                <li>
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="3" data-page-type="gallery">                        
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-three">
                                <!-- Gallery Two pop up connected with JS code below -->
                                    
                                     <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/liquid/athena.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Athena <span><strong>by Vaperstuff</strong></span></h2>
                                                <p class="tm-figure-description">Rp. 135.000</p>
                                                <a href="img/liquid/athena.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/liquid/bananalicious.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Banana Licious <span><strong>by Emkay Brewer</strong></span></h2>
                                                <p class="tm-figure-description">Rp. 120.000</p>
                                                <a href="img/liquid/bananalicious.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/liquid/bluemonkey.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Blue Monkey <span><strong>by 9nagadistribution</strong></span></h2>
                                                <p class="tm-figure-description">Rp. 120.000</p>
                                                <a href="img/liquid/bluemonkey.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/liquid/coffeemel.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Coffeemel <span><strong>by Emkay Creamy</strong></span></h2>
                                                <p class="tm-figure-description">Rp. 120.000</p>
                                                <a href="img/liquid/coffeemel.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/liquid/darkluna.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">DarkLuna <span><strong>by Emkay Brewer</strong></span></h2>
                                                <p class="tm-figure-description">Rp. 130.000</p>
                                                <a href="img/liquid/darkluna.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/liquid/hookla.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Hookla <span><strong>by Red Queen</strong></span></h2>
                                                <p class="tm-figure-description">Rp. 120.000</p>
                                                <a href="img/tm-img-14.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/liquid/iceberg.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Mango Salsa <span><strong>by Hex Distribution</strong></span></h2>
                                                <p class="tm-figure-description">Rp. 120.000</p>
                                                <a href="img/liquid/iceberg.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/liquid/oatdrips.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Oat Drips <span><strong>by Steamqueen X JVS</strong></span></h2>
                                                <p class="tm-figure-description">Rp. 200.000</p>
                                                <a href="img/liquid/oatdrips.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>                                                                                              
                                </div>                                 
                            </div> <!-- .tm-img-gallery-container -->
                        </div>         
                    </div>  
                </li>

                <!-- Page 4 About -->
                <li>
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content tm-page-width tm-pad-b" data-page-no="4">

                            <div class="tm-about-page">
                            
                            	<div class="row tm-white-box-margin-b">
                                    <div class="col-xs-12">
                                        <div class="tm-flex">
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                 <center><img src="img/icons/address.png" height="50px" width="30px"><h2 class="tm-text-title">Address Store</h2></center>
                                                <p class="tm-text">Jl. Karapitan No.116, Cikawao , Kec.Lengkong , Kota Bandung , Jawa Barat 40261</p>
                                            </div>
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                <center><img src="img/icons/contact.png" height="50px" width="50px"><h2 class="tm-text-title">Contact</h2></center>
                <img src="img/icons/instagram.png" height="20px" width="20px">  empire_vape</img>
                                                    <br>
                <img src="img/icons/facebook.png" height="20px" width="20px">  empire.vape<img>
                                                    <br>
                <img src="img/icons/mail.png" height="20px" width="20px">  empirevape@gmail.com</p>     
                                            </div>
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                <center><img src="img/icons/alerts.png" height="50px" width="50px"><h2 class="tm-text-title">Allerts</h2></center>
                                                <p class="tm-text"> This product contains Nicotine.Nicotine can cause addiction. it is forbidden to sell this product to minors, pregnant women and breastfeeding.</p>     
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                
                                <div class="row tm-white-box-margin-b">
                                    <div class="col-xs-12">
                                        <div class="tm-flex">
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                <center><img src="img/icons/dedicated.png" height="50px" width="50px"><h2 class="tm-text-title">Dedicated</h2></center>
                                                <p class="tm-text">Empirevape ini ditujukan untuk memenuhi tugas uas Praktikum Pemrograman Web .</p>
                                            </div>
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                <center><img src="img/icons/developer.png" height="50px" width="50px"><h2 class="tm-text-title">Developer</h2></center>
                                                <p class="tm-text">Dimas zulfa S<br> Andri Oktav<br>Affan FirousyRA<br>Madani GeusanR</p>     
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                                
                                

                                
                            </div>
                                                   
                        </div>              
                    </div> <!-- .cd-full-width -->

                </li>

                <!-- Page 5 Contact Us -->
                <li>
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content tm-page-pad" data-page-no="5">
                            <div class="tm-contact-page">                                
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tm-flex tm-contact-container">                                
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                                <h2 class="tm-contact-info">Hi Vapers!</h2>
                                                <p class="tm-text">If you want to buy products in our store, you must fill in the data below.</p>                                                
                                                
                                                <!-- contact form -->
                                                <form action="" method="post" class="tm-contact-form" enctype="multipart/form-data">

                                                    <div class="form-group">
                                                        <input type="text" id="name" name="name" class="form-control" placeholder="Name"  required/>
                                                    </div>
                                        
                                                    <div class="form-group">                                                        
                                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email"  required/>
                                                    </div>                                                        

                                                    <div class="form-group">
                                                        <input type="text" id="product" name="product" class="form-control" placeholder="Product"  required/>
                                                    </div>

                                                    <div class="form-group">
                                                        <textarea id="message" name="message" class="form-control" rows="5" placeholder="Message" required></textarea>
                                                    </div> 

                                                    <button type="submit" name="submit" class="pull-xs-right tm-submit-btn">Submit</button>  
                                                
                                                </form>  


                                    </div>

                                </div>

                            </div>    

                        </div>
                        
                    </div> <!-- .cd-full-width -->
                </li>
            </ul> <!-- .cd-hero-slider -->
            
            <footer class="tm-footer">
            
                <div class="tm-social-icons-container text-xs-center">
                    <a href="#" class="tm-social-link"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-behance"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-linkedin"></i></a>
              </div>
                
                <p class="tm-copyright-text">Copyright &copy; <span class="tm-copyright-year">current year</span> Your Company 
                
                 | Design: <a href="www.templatemo.com" target="_parent">Template Mo</a></p>

            </footer>
                    
        </div> <!-- .cd-hero -->
        

        <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
        <div id="loader-wrapper">
            
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>
        
        <!-- load JS files -->
        
        <script src="js/tether.min.js"></script> <!-- Tether (http://tether.io/)  --> 
        <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
        <script src="js/hero-slider-main.js"></script>          <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
        <script src="js/jquery.magnific-popup.min.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->
        
        <script>

            function adjustHeightOfPage(pageNo) {

                var pageContentHeight = 0;

                var pageType = $('div[data-page-no="' + pageNo + '"]').data("page-type");

                if( pageType != undefined && pageType == "gallery") {
                    pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .tm-img-gallery-container").height();
                }
                else {
                    pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height() + 20;
                }
               
                // Get the page height
                var totalPageHeight = $('.cd-slider-nav').height()
                                        + pageContentHeight
                                        + $('.tm-footer').outerHeight();

                // Adjust layout based on page height and window height
                if(totalPageHeight > $(window).height()) 
                {
                    $('.cd-hero-slider').addClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
                }
                else 
                {
                    $('.cd-hero-slider').removeClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
                }
            }

            /*
                Everything is loaded including images.
            */
            $(window).load(function(){

                adjustHeightOfPage(1); // Adjust page height

                /* Gallery One pop up
                -----------------------------------------*/
                $('.gallery-one').magnificPopup({
                    delegate: 'a', // child items selector, by clicking on it popup will open
                    type: 'image',
                    gallery:{enabled:true}                
                });
				
				/* Gallery Two pop up
                -----------------------------------------*/
				$('.gallery-two').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery:{enabled:true}                
                });

                /* Gallery Three pop up
                -----------------------------------------*/
                $('.gallery-three').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery:{enabled:true}                
                });

                /* Collapse menu after click 
                -----------------------------------------*/
                $('#tmNavbar a').click(function(){
                    $('#tmNavbar').collapse('hide');

                    adjustHeightOfPage($(this).data("no")); // Adjust page height       
                });

                /* Browser resized 
                -----------------------------------------*/
                $( window ).resize(function() {
                    var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");
                    
                    // wait 3 seconds
                    setTimeout(function() {
                        adjustHeightOfPage( currentPageNo );
                    }, 1000);
                    
                });
        
                // Remove preloader (https://ihatetomatoes.net/create-custom-preloading-screen/)
                $('body').addClass('loaded');

                // Write current year in copyright text.
                $(".tm-copyright-year").text(new Date().getFullYear());
                           
            });

            /* Google map
            ------------------------------------------------*/
            var map = '';
            var center;

            function initialize() {
                var mapOptions = {
                    zoom: 13,
                    center: new google.maps.LatLng(37.779724, -122.452152),
                    scrollwheel: false
                };
            
                map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

                google.maps.event.addDomListener(map, 'idle', function() {
                  calculateCenter();
                });
            
                google.maps.event.addDomListener(window, 'resize', function() {
                  map.setCenter(center);
                });
            }

            function calculateCenter() {
                center = map.getCenter();
            }

            function loadGoogleMap(){
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
                document.body.appendChild(script);
            }
        
            // DOM is ready
            $(function() {   
                loadGoogleMap(); // Google Map
            });

        </script>            

</body>
</html>