<?php
session_start();

$user = $_SESSION['login_user'];
if (!(isset($user))) {
        header ("Location: login.php");
}


if (isset($_POST['logout'])){
	session_unset();
	session_destroy();
	header("Location: index.html");
}
?>


<head>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {

                $('#loadButton').click(function() {
            var file = document.getElementsByName("pages")[0].value;
                    $.ajax({
                        type: 'POST',
                        url: 'php_file.php',
                        data: 'req=load&fileName=' +file,
                        success: function(result) {
                            //alert(result);
                            $('textarea').val(result);
                        }
                    });
                });

                $('#saveButton').click(function() {
       var file = document.getElementsByName("pages")[0].value;
                    var stuff = $('textarea').val();
                    alert(stuff);
                    $.ajax({
                        type: 'POST',
                        url: 'php_file.php',
                        data: 'req=save&changes=' +stuff + '&fileName=' + file,
	   
                        success: function(result) {
                            alert(result);
                            //$('textarea').val(result);
                        }
                    });
                });

            }); //END $(document).ready()

        </script>
    </head>


<!DOCTYPE html>
<html lang="en" class="csstransforms csstransforms3d csstransitions">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="webthemez">
  <title>World Class Prototypes</title>
  <!-- core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <link rel="shortcut icon" href="">
</head>

<body id="home">

<header id="header">
  <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span> 
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><span style="font-size: 35px;color: #FFF;line-height: 1em;font-weight: bold;">World Class Prototypes</span></a>
      </div>

      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li class="scroll"><a href="index.html">Home</a></li>
          <li class="scroll"><a href="about.html">About</a></li>
          <li class="scroll"><a href="services.html">Services</a></li>
          <li class="scroll"><a href="gallery.html">Gallery</a></li>
          <li class="scroll"><a href="contact.php">Contact Us</a></li>
		  <li class="scroll"><a href="orders.php">Request A Quote!</a></li>
        </ul>
      </div>
    </div>
    <!--/.container-->
  </nav>
  <!--/nav-->
</header>
<!--/header-->

    <div class="container">
<form method="post">
<input type="submit" name="logout" class="button" value="Log Out" style="float: right;">
</form>
      <div class="row">
        <div class="col-sm-6">


			<h2>Change content on different Pages</h2>
			<select name="pages">
				<option value="files/blank.xml"></option>
				<option value="files/about.xml">About</option>
				<option value="files/services.xml">Services</option>
				<option value="files/gallery.xml">Gallery</option>
				<option value="files/contact.xml">Contact</option>
				<option value="files/order.xml">Order</option>
			</select>
			<input type="button" value="Load Page" id="loadButton">
			<input type="button" value="Save Changes" id="saveButton"/><br>
			<textarea id='myText'  rows="30" cols="120" value="<?php echo $xml; ?>">
        </div>
      </div>
    </div>

</body>
</html>
