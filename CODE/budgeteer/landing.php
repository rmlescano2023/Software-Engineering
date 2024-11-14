<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600&display=swap" rel="stylesheet">
	<style>
		body {
            font-family: 'Poppins', sans-serif;
			background-image: url('images/pig.jpg');
			background-size: 180%;
            background-position-x: 55%;
			background-position-y: 30%;
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		.navbar {
			background-color: white;
			color: #fff;
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 10px;
		}

		.logo {
			height: 122px;
			width: 122px;
			background-color: #34A0A4;
			border-radius: 5%;
            position: absolute; /* Add this line to set the position of the logo to absolute */
			top: -35px; /* Adjust this value to position the logo vertically */
			left: 10px; /* Adjust this value to position the logo horizontally */
		
		}
        .logo::before {
            content: "";
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -30%);
            height: 60px;
            width: 60px;
            background-image: url('images/Logo.png');
            background-size: cover;
            z-index: 1;
        }

		.website-name {
            font-family: 'Poppins', sans-serif;
			font-size: 24px;
			font-weight: bold;
            color: #34A0A4;
			margin: 0;
            text-align: center;
			display: inline-block;
            flex-grow: 1;
			text-align: center;
		}

		.login-btn {
			background-color: #34A0A4;
			border: none;
			color: #fff;
			padding: 10px 20px;
			border-radius: 5px;
            font-family: 'Poppins', sans-serif;
			font-size: 16px;
			text-decoration:none;
			cursor: pointer;
		}

        .welcome-text {
			text-align: left;
            padding-left: 135px;
            word-spacing: 10px;
            max-width: 550px;
		}

		
        .slogan1 {
            font-family: 'Poppins', sans-serif;
            font-size: 80px;
            font-weight: bold;
            display: block; /* add this line to make it a block-level element */
            margin-bottom: 0%;
        }

        .slogan2 {
            font-family: 'Poppins', sans-serif;
            font-weight: light;
            font-size: 30px;
            color: #fff;
            display: block; /* add this line to make it a block-level element */
            margin-top:0%;
        }

		.signup-btn {
			background-color: #34A0A4;
			border: none;
			color: #fff;
			padding: 10px 20px;
			border-radius: 5px;
            font-family: 'Poppins', sans-serif;
			font-size: 20px;
			text-decoration:none;
			cursor: pointer;
			/*display: block;*/
		}
	</style>
</head>
<body>
<nav class="navbar">
		<div class="logo"></div>
		<h1 href = "landing.php" class="website-name">Budgeteer.io</h1>
		<a href="login.php" class="login-btn">Log in</a>
	</nav>

	<div class="welcome-text">
		<p class="slogan1">Take control of your finances.</p>
        <p class="slogan2">Say goodbye to money stress.</p>
		<a class="signup-btn" href="register.php">Start Now</a>
	</div>
</body>
</html>
