<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
        html {
            height: 100%;
        }

        body {
            height: 100%;
            margin: 0px;
            background: transparent url('img/poster.jpg') fixed no-repeat center center;
            background-size: cover;
        }

        #bg {
            position: fixed;
            left: 0px;
            top: 0px;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            overflow: hidden;
            z-index: 1;
        }
        </style>
</head>
<body>
<video id="bg" autoplay="autoplay" loop="loop">
            <source src="filmik.mp4" type="video/mp4"/>
        </video>
		<a href="model.html" class="btn">Strona główna</a>
            <a href="index.php" class="btn">Logowanie</a>
            <a href="index1.php" class="btn">Kontakt</a>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>User Name</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>