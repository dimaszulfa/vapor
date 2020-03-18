<?php 

//koneksi ke dbms
require 'functions.php';
//ambil datadi URL

$id = $_GET["id"];
//queyr data mahasiswa berdasarkan id
$orders = query("SELECT * FROM orders WHERE id = '$id'")[0];

	if(isset($_POST["submit"])){
		if ( ubah($_POST) > 0){
			echo "
			<script>
			alert('data berhasil diubah!');
			document.location.href = 'data.php';
			</script>
			";
		} else {
			echo "
			<script>
			alert('data gagal diubah!');
			document.location.href = 'data.php';
			</script>
			";
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
<style>
#dialogoverlay{
    display: none;
    opacity: .8;
    position: fixed;
    top: 0px;
    left: 0px;
    background: #FFF;
    width: 100%;
    z-index: 10;
}
#dialogbox{
    display: none;
    position: fixed;
    background: #000;
    border-radius:7px; 
    width:550px;
    z-index: 10;
}
#dialogbox > div{ background:#FFF; margin:8px; }
#dialogbox > div > #dialogboxhead{ background: #666; font-size:19px; padding:10px; color:#CCC; }
#dialogbox > div > #dialogboxbody{ background:#333; padding:20px; color:#FFF; }
#dialogbox > div > #dialogboxfoot{ background: #666; padding:10px; text-align:right; }
</style>
	<title>Ubah Data</title>
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
</head>
<body>
                <li>
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content tm-page-pad" data-page-no="5">
                            <div class="tm-contact-page">                                
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tm-flex tm-contact-container">                                
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                                <h2 class="tm-contact-info">Update Data</h2>
                                                   
                                                
                                                <!-- contact form -->
                                                <form action="" method="post" class="tm-contact-form" enctype="multipart/form-data">
                                                    <div class="form-group">
													<input type="hidden" name="id" value="<?= $orders["id"];  ?>"/>

                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" id="name" name="name" class="form-control"  required value="<?= $orders["name"]; ?>"/>
                                                    </div>
                                        
                                                    <div class="form-group">                                                        
                                                        <input type="email" id="email" name="email" class="form-control"   required value="<?= $orders["email"]; ?>"/>
                                                    </div>                                                        

                                                    <div class="form-group">
                                                        <input type="text" id="product" name="product" class="form-control"   required value="<?= $orders["product"]; ?>"/>
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" id="message" name="message" class="form-control"   required value="<?= $orders["message"]; ?>">
                                                    </div> 
                                                    <button type="submit" name="submit" class="pull-xs-right tm-submit-btn">Submit</button>  
                                                
                                                </form>  


                                    </div>

                                </div>

                            </div>    

                        </div>
                        
                    </div> <!-- .cd-full-width -->
                </li>

</body>
</html>