<!-- Main Header  -->
<?php
// *****************CONFIG variables *********************

$CSSPATH="css";

function site_header() {
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rohan | Master's,Bioinformatics</title>
    <meta charset="UTF-8">
    
    <meta name="description" content="Master's,Bioinformatics">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <?php   //get_path();			?> 
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css/style.css"> 
    <link rel="canonical" href="#">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
</head>

<body>
	
<?php   show_menu();?> 
	
<?php
function show_menu()
{
?>
	<!-- This is a navbar start -->
	
	<div class="wrap-1">
		<header class="container">
            <div class="row">
				<div class="col-3 col-t-5 col-m-6 col-p-9">
					<h1><a href="Rohan.php">Rohan Ghosh</a></h1>
				</div>
				<div>
					<nav class="col-9 col-t-9">
                        <ul>
                            <li><a href="Rohan.php">About</a></li>
                            <li><a href="Publication.php">Publication</a></li>
                            <li><a href="Academics.php">Academics</a></li>
                            <li><a href="RWorkshop.php">Associates</a></li>
                        </ul>
                    </nav>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </header>
  </div>
  
<?php }  ?>
<!-- navbar end -->



<!--- About of Rohan Ghosh --->
    
<div class="wrap-2">
	<div class="row">
		<div class="container">
			<div class="portfolio">
				<div class="port1 col-4 col-t-5 col-m-12 ">
					<img src="img/Rohan_p.jpg" alt="Rohn Profile image">
					<h2>Rohan Ghosh</h2>
					<p>Master's,Bioinformatics
					 Pondicherry Central University</p>
                </div>
                <div class="port2 col-6 col-t-5 col-m-12 col-p-12">
					<p class="describe">Born in 1999 at Kolkata, West Bengal. Did my schooling in St. Claret School (ICSE) and  Kalyani Public School (CBSE) for Secondary and Higher-secondary levels, respectively.</p>
					<br>
					<p class="describe">"Driving through the wet cytoplasm now into the dry nucleus". Completing my bachelors in Microbiology and gaining interest in Bioinformatics, now persuading Masters on it.</p>
					<br>
					<p class="describe">My aim is focused towards protein structure development, drug designing and sequencing techniques (primely NGS).Being devoted to learn from roots and work for a new finding has always been my passion.</p>
                </div>
                <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
<!-- end about -->

<!-- Middle  part -->
 
<div class="wrap-3">
	<div class="container">
		<div class="row">
			<div class="col-4 col-t-6 col-p-12"></div>
			<div class="col-12 col-t-12">
				<div class="row">
					<div class="col-4 col-t-4 col-p-12">
						<div class="feature">
							<div class="circle">
								<span class="fas fa-book-open"></span>
							</div>
							<h3>Research</h3>
							<p class="thin">My Contribution in Science</p>
							</div>
							</div>
<!--
							<div class="col-4 col-t-4 col-p-12 ">
								<div class="feature">
									<div class="circle">
										<span class="far fa-handshake"></span>
									</div>
							 <h3>Outreach</h3>
							 <p class="thin">Towards a Better Society</p>
                          </div>
                      </div>
                        <div class="col-4 col-t-4 col-p-12">
                            <div class="feature">
                                <div class="circle">
                                    <span class="fas fa-pen-nib"></span>
                                </div>
                                <h3>Poetry</h3>
                                <p class="thin">Speaking the Inside Out</p>
                            </div>
                        </div>                        
-->
                    </div>
                </div>
            </div>
        </div>
    </div>
 
 
 <?php footer(); ?>

<?php
function footer()
 {  
 ?>
<!--- Social media --->
 
<div class="wrap-4 col-12 col-m-12 col-p-12">
	<div class="container5">
		<div class="row">
			<div class="social">
				<div class="col-1 col-m-1 col-p-4"><a href="https://www.linkedin.com/in/rohan-ghosh-8a53a0155" target="_blank"><i class="fab fa-linkedin"></i></a></div>
				<div class="col-1 col-m-1 col-p-4"><a href="https://www.researchgate.net/profile/Rohan-Ghosh-6" target="_blank"><i class="fab fa-researchgate"></i></a></div>
				<div class="col-1 col-m-1 col-p-4"><a href="https://twitter.com/RohanG_26" target="_blank"><i class="fab fa-twitter"></i></a></div>
				<div class="col-1 col-m-1 col-p-4"><a href="https://www.facebook.com/rohan.ghosh.520900" target="_blank"><i class="fab fa-facebook"></i></a></div>
            </div>
        </div>
	</div>
</div>
    



<!-- social media end -->


<!-- script link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<?php }  ?>
</body>
</html>

