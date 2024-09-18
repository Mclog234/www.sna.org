
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Resgistration for Organisation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="images/snalogo.png">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 text-right fh5co-social">
						<a href="#" class="grow"><i class="icon-facebook2"></i></a>
						<a href="#" class="grow"><i class="icon-twitter2"></i></a>
						<a href="#" class="grow"><i class="icon-instagram2"></i></a>
					</div>
				</div>
			</div>
		</div>
		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><img src="images/snalogo.png" width="100%"></a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="blog.html">News</a></li>
							<li class="active"><a href="contact.html">Contact Us</a></li>
                            <li>
								<a href="#" class="fh5co-sub-ddown">Login</a>
								<ul class="fh5co-sub-menu">
									<li><a href="login_org">As Organisation</a></li>
									<li><a href="login_art">As Artists</a></li>
								</ul>
							</li>
							<li><a href="Resgistration_art">Register as Artists</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
		

		<style>
			.password-wrapper {
				position: relative;
			}

			.eye-icon {
				position: absolute;
				right: 10px;
				top: 50%;
				transform: translateY(-50%);
				cursor: pointer;
				color: #999;
			}

			.custom-file-upload {
				border: 1px solid #ccc;
				display: inline-block;
				padding: 6px 12px;
				cursor: pointer;
				border-radius: 4px;
				background-color: #f8f9fa;
				color: #007bff;
			}

			.custom-file-upload i {
				margin-right: 5px;
			}

			.file-input {
				display: none; /* Hide default file input */
			}
		</style>
		<div id="fh5co-contact" class="animate-box">
        <div class="container">
            <form action="classes/registerOrganisation.php" id="registerForm" method="POST" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-md-6">
                        <h3 class="section-title">Register your organisation</h3>
                        <ul class="contact-info">
                        </ul>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="fileInput" class="custom-file-upload">
                                        <i class="fas fa-upload"></i> Choose File
                                    </label>
                                    <input type="file" id="fileInput" name="file" class="file-input" hidden>
                                    <div id="thumbnailContainer" style="display: none;">
                                        <img id="thumbnail" src="" alt="Image Thumbnail" style="max-width: 100%; margin-top: 10px; height:100px">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                            
                            <div class="col-md-7">
                                <div class="form-group">
                                    <?php include 'classes/states.php'; ?>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="form-group">
                                    <select class="form-control" name="lga" id="lga">
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-7">
                                <div class="form-group">
                                    <div class="password-wrapper">
                                        <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                                        <span class="eye-icon" id="togglePassword">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <div class="password-wrapper">
                                        <input type="password" class="form-control" placeholder="Confirm Password" id="confirmPassword" name="confirmPassword">
                                        <span class="eye-icon" id="toggleConfirmPassword">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                    <div id="passwordError" style="color: red; display: none;">Passwords do not match</div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
			<script>
				function getLocalGovernment() {
					var selectedState = $("#state").val();

					// Make an AJAX request to fetch hospitals based on the selected state
					$.ajax({
						url: "classes/getlocalgovernment.php",
						type: "POST",
						data: {state: selectedState},
						success: function(response) {
							// Update the hospital dropdown with the fetched data
							$("#lga").html(response);
						}
					})
					
				}
			</script>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.getElementById('togglePassword');
            const password = document.getElementById('password');
            const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
            const confirmPassword = document.getElementById('confirmPassword');
            const passwordError = document.getElementById('passwordError');

            togglePassword.addEventListener('click', function () {
                const type = password.type === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                this.querySelector('i').classList.toggle('fa-eye-slash');
            });

            toggleConfirmPassword.addEventListener('click', function () {
                const type = confirmPassword.type === 'password' ? 'text' : 'password';
                confirmPassword.setAttribute('type', type);
                this.querySelector('i').classList.toggle('fa-eye-slash');
            });

            document.getElementById('registerForm').addEventListener('submit', function (e) {
                if (password.value !== confirmPassword.value) {
                    e.preventDefault(); // Prevent form submission
                    passwordError.style.display = 'block'; // Show error message
                } else {
                    passwordError.style.display = 'none'; // Hide error message
                }
            });
        });

        const fileInput = document.getElementById('fileInput');
        const thumbnailContainer = document.getElementById('thumbnailContainer');
        const thumbnail = document.getElementById('thumbnail');

        fileInput.addEventListener('change', function() {
            const file = fileInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    thumbnail.src = e.target.result;
                    thumbnailContainer.style.display = 'block';
                }
                reader.readAsDataURL(file);
            } else {
                thumbnailContainer.style.display = 'none';
            }
        });
    </script>
		<br><br><br><br><br><br><br><br><br><br><br><br><br>
		
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2024. All Rights Reserved. Power by SawTrax Limited.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

