	<!DOCTYPE html>
    <?php
        session_start();
    ?>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Cvrce</title>
		<script lang="javascript" src="md5.js"></script>
        <script lang="javascript" src="base64.js"></script>
        <script>
            function invalid(){
                alert("invalid username or password");
            }
            
            function convert(){
                                password=document.getElementById("pwd").value;
                                password=md5(password);
                                //password=Base64.encode(password);
                                document.getElementById("pwd").value=password;
                                }
             function convert1(){
                password=document.getElementById("pwd1").value;
                rpassword=document.getElementById("rpwd").value;
                if(password==rpassword){
                password=md5(password);
                rpassword=md5(rpassword);
                document.getElementById("pwd1").value=password;
                document.getElementById("rpwd").value=rpassword;
                return true;
                }else{
                    alert("password and repeat password does not match");
                    document.getElementById("pwd1").value=null;
                    document.getElementById("rpwd").value=null;
                    return false;
                }
            }
        </script>
        
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">			
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
		  <header id="header" id="home">
	  		<div class="header-top">
	  			<div class="container">
			  		<div class="row">
			  			<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
			  				<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
			  				</ul>			
			  			</div>
			  			<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
			  				<a href="tel:+953 012 3654 896"><span class="lnr lnr-phone-handset"></span> <span class="text">+953 012 3654 896</span></a>
			  				<a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text">support@colorlib.com</span></a>
                            <?php
                                if(isset($_SESSION['cname'])){
                                    echo $_SESSION['cname'];
                                }
                            
                            ?>
			  			</div>
			  		</div>			  					
	  			</div>
			</div>
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="home.php">Home</a></li>
			          <li><a href="about.html">About</a></li>
			          <li><a href="gallery.html">Gallery</a></li>          					          		          
					  <li><a href="contact.html">Contact</a></li>
                        <?php if(isset($_SESSION['cname']) == null){ ?>
					  <li><a href="#" data-toggle="modal" data-target="#myModal1">login</a></li>
					  <li><a href="#" data-toggle="modal" data-target="#myModal2">signup</a></li>
                        <?php  }else{  ?>
                      <li><a href="logout.php">Logout</a></li>
                        <?php } ?>

			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">
								We Ensure better placement <br>
								in best trading IT sectors			
							</h1>
							<p class="pt-10 pb-10">
we echance your coding and placement skills to improve your placement <br> knowlwdge and for better placement in best companies							</p>
							<a href="#" class="primary-btn text-uppercase" data-toggle="modal" data-target="#myModal1">Get Started</a>
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start feature Area -->
			<section class="feature-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="single-feature">
								<div class="title">
									<h4>learn by domain</h4>
								</div>
								<div class="desc-wrap">
									<p>
										this is the learning track where you learn from basic coding skills to advanced placement knowledge in all rounds of placement training by domain wise
										for example in doamin wise you learn through domains like C , C++ , JAVA , resonning , Aptitude , Communcation Skills for all company as a whole. 
									</p>
									<a href="#" data-toggle="modal" data-target="#myModal1">Login to proceed</a>									
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="single-feature">
								<div class="title">
									<h4>learn by company</h4>
								</div>
								<div class="desc-wrap">
									<p>
										this is the learning track where you learn from basic coding skills to advanced placement knowledge in all rounds of placement training by company wise
										for example in company wise you learn through different rounds like HR round , PI round , GD round , Coding round  of various company like infosys , wipro , tcs , cognigent etc.
									</p>
									
									<a href="#" data-toggle="modal" data-target="#myModal1">Login to proceed</a>									
								</div>
							</div>
						</div>
															
					</div>
				</div>	
			</section>
			<!-- End feature Area -->
					
		
			
			<!-- Start upcoming-event Area -->
			<section class="upcoming-event-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Upcoming Events</h1>
								<p>These are the list of upcoming events in our plcement development program</p>
							</div>
						</div>
					</div>								
					<div class="row">
						<div class="active-upcoming-event-carusel">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e1.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2019</p>
									<a href="#"><h4>Event heading</h4></a>
									<p>
										event description
									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e2.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2019</p>
									<a href="#"><h4>Event heading</h4></a>
									<p>event description									</p>
								</div>
							</div>	
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e1.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2019</p>
									<a href="#"><h4>Event heading</h4></a>
									<p>event description									</p>
								</div>
							</div>	
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e1.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2019</p>
									<a href="#"><h4>Event heading</h4></a>
									<p>event description									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e2.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2019</p>
									<a href="#"><h4>Event heading</h4></a>
									<p>event description									</p>
								</div>
							</div>	
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e1.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2019</p>
									<a href="#"><h4>Event heading</h4></a>
									<p>event description									</p>
								</div>
							</div>																						
						</div>
					</div>
				</div>	
			</section>
			<!-- End upcoming-event Area -->
						
			<!-- Start review Area -->
			<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Notice and Information</h1>
								<p>These are  updated notice info in our plcement development program</p>
							</div>
						</div>
					</div>		
			<section class="review-area section-gap relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row">
						<div class="active-review-carusel">
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Notice heading</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Notice description
								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Notice heading</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>Notice description								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Notice heading</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>Notice description								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Notice heading</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>Notice description								</p>
							</div>	
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Notice heading</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>Notice description								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Notice heading</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>Notice description								</p>
							</div>
							<div class="single-review item">
								<img src="img/r1.png" alt="">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Notice heading</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>Notice description								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Notice heading</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>Notice description								</p>
							</div>																												
						</div>
					</div>
				</div>	
			</section>
			<!-- End review Area -->	

			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Latest posts from our Blog</h1>
								<p>Updated reviews regarding placement development site from students </p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/e1.jpg" alt="">								
							</div>
							<p class="meta">25 April, 2019  |  By <a href="#">student name</a></p>
							<a href="blog-single.html">
								<h5>reviews headings</h5>
							</a>
							<p>
								review description
							</p>
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/rsz_s-bg.jpg" alt="">								
							</div>
							<p class="meta">25 April, 2019  |  By <a href="#">student name</a></p>
							<a href="blog-single.html">
								<h5>reviews headings</h5>
							</a>
							<p>
								review description 
							</p>
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
							<img class="img-fluid" src="img/e2.jpg" alt="">							
							</div>
							<p class="meta">25 April, 2019  |  By <a href="#">student name</a></p>
							<a href="blog-single.html">
								<h5>reviews headings</h5>
							</a>
							<p>
                            review description							</p>
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/video-bg.jpg" alt="">								
							</div>
							<p class="meta">25 April, 2019  |  By <a href="#">student name</a></p>
							<a href="blog-single.html">
								<h5>reviews headings</h5>
							</a>
							<p>
								review description
							</p>
						</div>							
					</div>
				</div>	
			</section>
			<!-- End blog Area -->			
			

			<!-- Start cta-two Area -->
			<!-- End cta-two Area -->
						
			<!-- start footer Area -->		
			 <!-- Footer -->
			 <footer class="page-footer font-small" style="background-color:black;">

				<!-- Copyright -->
				<div class="footer-copyright text-center py-3">© 2019 Copyright:
				  <a href="https://collegedunia.com/college/13147-cv-raman-college-of-engineering-cvrce-bhubaneswar" target="blank"> cvrce.edu.in</a>
				</div>
				<!-- Copyright -->
	  
			  </footer>
			  <!-- Footer -->
			<!-- End footer Area -->	

            
            
            
            
            
            
               <div class="modal fade" id="myModal1">
                    <div class="modal-dialog modal-dialog-centered modal-sm">
                      <div class="modal-content">
                        <form action="login.php" method="POST" onsubmit="return convert()">        
						<!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Login</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <!-- Modal body -->
                         <div class="modal-body">
                          <div class="input-group mb-3">
                                        <input type="number" class="form-control" placeholder="registration number" name="regno" required>
                                      </div>
                         
                         
                          <div class="input-group mb-3">
                                    <input type="password" id="pwd" class="form-control" placeholder="password" name="pwd" required>
                                  </div>
                                  
                                 
                                   
                        </div>
                        
                        <!-- Modal footer -->
                        <div class="modal-footer">
                                <input type="submit" class="btn btn-primary"  style=" font-family: Arial" value="login">
                        </div>
                          </form>
                        
                      </div>
                    </div>
                    </div>
            

                    
                    
                      <div class="modal fade" id="myModal2">
                    <div class="modal-dialog modal-dialog-centered modal-sm">
                      <div class="modal-content">
                         <form action="register.php" method="post" onsubmit="return convert1()" enctype="multipart/form-data">
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Signup</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <!-- Modal body -->
                         <div class="modal-body">
                          <div class="input-group mb-3">
                                <input type="file" class="form-control" name="photo" required/>
                            </div>     
                             <div class="input-group mb-3">
                                        <input type="number" class="form-control" placeholder="enter Registration Number" name="regno" required>
                                      </div>
                        <div class="input-group mb-3">
                                        <input type="password" class="form-control" placeholder="enter password" name="password" id="pwd1" required>
                         </div>
                         
                          <div class="input-group mb-3">
                                    <input type="password" class="form-control" placeholder="enter password again" name="repeatpassword" id="rpwd" required>
                                  </div>
                                  
                                 
                                   
                        </div>
                        
                        <!-- Modal footer -->
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-primary"  style=" font-family: Arial">signup</button>
                        </div>
                          </form>
                        
                      </div>
                    </div>
                    </div>
            
                      <script>
                            </script>
      
            
            
            
            
            
            
					<?php if(isset($_GET['msg'])) 
					{ ?> <script> invalid(); </script><?php
						}?>
						
			
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>