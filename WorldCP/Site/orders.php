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
  <link href="form.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
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
		  <li class="scroll"><a href="orders.html">Request A Quote!</a></li>
        </ul>
      </div>
    </div>
    <!--/.container-->
  </nav>
  <!--/nav-->
</header>
<!--/header-->
<div>
  <h4></h4>
</div>

<div class="container">
<div class="orderinfo">
<h3><?php include "mail_order.php"?></h3>
  <h2 style="color:red;">Request a Quote</h2>
  <p>Please start by filling in the form below, providing as much information as you can, such as the quantity, the type of material, nad any other important information you think we will need to know. Items marked with an * are required. If you are unsure which process should be used to build your parts, let us know the intended use so that we can help you select the apropriate process. If you have .jpgs, .bitmaps, or .pdfs that would help us understan your needs please include them as well.</p>
  <h3>
    <span style="font-size:12pt;">
      <em>
	<strong>
	  ** We have been experiencing issues with uploads via Internet Explorer. We recommend using a different browser if possible (e.g. Google Chrome, Mozilla Firefox, Opera, etc.) until the issue is resolved. We apologize for any inconvenience, and hope to have the issue resolved as soon as possible. Thank you. **
	<strong>
      </em>
    </span>
  </h3>
<h3>
    <span style="font-size:16pt;"><font color="blue">
      <em>
	<strong>
	   <center>**If you are experiencing problems with the form, please contact us at (616)355-0200 to discuss your project.**</center>
	   <strong>
      </em>
    </span></font>
  </h3>
  <center><p><strong>After uploading, you will see a message that your file submission was successful.</strong></p></center>
  <br><br>
</div><!--end of body text-->


<div class="col-md-6">
<form id="sfUploadForm" enctype="multipart/form-data" method="post" action="#">
  <div id="uploadFormContainer">
    <div class="userinput">
      <dl>
	<dt>
	  <label>
	    Email: 
	    <span class="red">*</span>
	    </label>
	  </dt>
	<dd>
	  <input type="text" name="email">
	  </dd>
	</dl>
      </dl>
<dl>
  <dt>
    <label>
      Company Name: 
      <span class="red">*</span>
      </label>
    </dt>
  <dd>
    <input type="text" name="companyName">
    </dd>
  </dl>
<dl>
  <dt>
    <label>
      Contact Name: 
      <span class="red">*</span>
      </label>
    </dt>
  <dd>
    <input type="text" name="contactName">
    </dd>
  </dl>
<dl>
  <dt>
    <label>
      Phone: 
      <span class="red">*</span>
      </label>
    </dt>
  <dd>
    <input type="text" name="phone">
    </dd>
  </dl>

<div class="ccms_form_element cfdiv_custom" id="style_container_div">
<label>Process: </label><select size="1" id="Rank" class=" validate['required']" title="" type="select" name="Rank" value="-Select Your Rank-">
    <optgroup label="-Select Process-">
    <option value="rapid">Rapid Prototypes</option>
    <option value="casting">Rapids Casting</option>
    <option value="rotational">Rotational Modeling</option>
    <option value="vacuum">Vacuum Forming</option>
    <option value="fiber">Fiber Reinforced Composites</option>
    <option value="nests">Production Nests and Fixtures</option>
    <option value="injection">Injection Molding</option>
    <option value="cnc">CNC Machining</option>
    <option value="model">Modeling</option>
    <option value="other">Unsure-please recommend</option>
 </optgroup>
</select><div class="clear"></div><div id="error-message-style"></div></div>

<div id="rapid"  class="style-sub-1"  style="display: none;" name="stylesub1" onchange="ChangeDropdowns(this.value)">
  <label>Material: </label>
    <select id="Rapid Prototypes" name="Rapid Prototypes">
      <option value="">-Choose A Material-</option>
      <option value="Basic Ore Miner - Level 1a">Rapid Prototypes 1</option>
      <option value="Basic Ore Miner - Level 2a">Rapid Prototypes 2</option>
      <option value="Basic Ore Miner - Level 3a">Rapid Prototypes 3</option>
      <option value="Basic Ore Miner - Level 4a">Rapid Prototypes 4</option>
      <option value="Basic Ore Miner - Level 5a">Rapid Prototypes 5</option>
        </select>
  </div>

  <div id="casting"  class="style-sub-1"  style="display: none;" name="stylesub1" onchange="ChangeDropdowns(this.value)">
    <label>Material: </label>
      <select id="Rapids Casting" name="Rapids Casting">
        <option value="">-Choose A Material</option>
        <option value="Basic Ore Miner - Level 1a">Rapids Casting 1</option>
        <option value="Basic Ore Miner - Level 2a">Rapids Casting 2</option>
        <option value="Basic Ore Miner - Level 3a">Rapids Casting 3</option>
        <option value="Basic Ore Miner - Level 4a">Rapids Casting 4</option>
        <option value="Basic Ore Miner - Level 5a">Rapids Casting 5</option>
	  </select>
    </div>

  <div id="rotational"  class="style-sub-1"  style="display: none;" name="stylesub1" onchange="ChangeDropdowns(this.value)">
      <label>Material: </label>
          <select id="Rotational Modeling" name="Rotational Modeling">
	          <option value="">-Choose A Material</option>
		        <option value="Basic Ore Miner - Level 1a">Rotational Modeling 1</option>
			      <option value="Basic Ore Miner - Level 2a">Rotational Modeling 2</option>
			            <option value="Basic Ore Miner - Level 3a">Rotational Modeling 3</option>
				          <option value="Basic Ore Miner - Level 4a">Rotational Modeling 4</option>
					        <option value="Basic Ore Miner - Level 5a">Rotational Modeling 5</option>
						  </select>
	    </div>

    <div id="vacuum"  class="style-sub-1"  style="display: none;" name="stylesub1" onchange="ChangeDropdowns(this.value)">
          <label>Material: </label>
	        <select id="Vacuum Forming" name="Vacuum Forming">
		          <option value="">-Choose A Material</option>
			          <option value="Basic Ore Miner - Level 1a">Vacuum Forming 1</option>
				          <option value="Basic Ore Miner - Level 2a">Vacuum Forming 2</option>
					          <option value="Basic Ore Miner - Level 3a">Vacuum Forming 3</option>
						          <option value="Basic Ore Miner - Level 4a">Vacuum Forming 4</option>
							          <option value="Basic Ore Miner - Level 5a">Vacuum Forming 5</option>
								    </select>
		    </div>

    <div id="fiber"  class="style-sub-1"  style="display: none;" name="stylesub1" onchange="ChangeDropdowns(this.value)">
        <label>Material: </label>
	    <select id="Fiber Reinforced Composites" name="Fiber Reinforced Composites">
	            <option value="">-Choose A Material</option>
		          <option value="Basic Ore Miner - Level 1a">Fiber Reinforced Composites 1</option>
			        <option value="Basic Ore Miner - Level 2a">Fiber Reinforced Composites 2</option>
				      <option value="Basic Ore Miner - Level 3a">Fiber Reinforced Composites 3</option>
				            <option value="Basic Ore Miner - Level 4a">Fiber Reinforced Composites 4</option>
					          <option value="Basic Ore Miner - Level 5a">Fiber Reinforced Composites 5</option>
						    </select>
	      </div>

      <div id="nests"  class="style-sub-1"  style="display: none;" name="stylesub1" onchange="ChangeDropdowns(this.value)">
	    <label>Material: </label>
	          <select id="Production Nests and Fixtures" name="Production Nests and Fixtures">
		            <option value="">-Choose A Material</option>
			            <option value="Basic Ore Miner - Level 1a">Production Nests and Fixtures 1</option>
				            <option value="Basic Ore Miner - Level 2a">Production Nests and Fixtures 2</option>
					            <option value="Basic Ore Miner - Level 3a">Production Nests and Fixtures 3</option>
						            <option value="Basic Ore Miner - Level 4a">Production Nests and Fixtures 4</option>
							            <option value="Basic Ore Miner - Level 5a">Production Nests and Fixtures 5</option>
								      </select>
		      </div>

      <div id="injection"  class="style-sub-1"  style="display: none;" name="stylesub1" onchange="ChangeDropdowns(this.value)">
	  <label>Material: </label>
	      <select id="Injection Molding" name="Injection Molding">
		      <option value="">-Choose A Material</option>
		            <option value="Basic Ore Miner - Level 1a">Injection Molding 1</option>
			          <option value="Basic Ore Miner - Level 2a">Injection Molding 2</option>
				        <option value="Basic Ore Miner - Level 3a">Injection Molding 3</option>
					      <option value="Basic Ore Miner - Level 4a">Injection Molding 4</option>
					            <option value="Basic Ore Miner - Level 5a">Injection Molding 5</option>
						      </select>
	        </div>

        <div id="cnc"  class="style-sub-1"  style="display: none;" name="stylesub1" onchange="ChangeDropdowns(this.value)">
	      <label>Material: </label>
	            <select id="CNC Machining" name="CNC Machining">
		              <option value="">-Choose A Material</option>
			              <option value="Basic Ore Miner - Level 1a">CNC Machining 1</option>
				              <option value="Basic Ore Miner - Level 2a">CNC Machining 2</option>
					              <option value="Basic Ore Miner - Level 3a">CNC Machining 3</option>
						              <option value="Basic Ore Miner - Level 4a">CNC Machining 4</option>
							              <option value="Basic Ore Miner - Level 5a">CNC Machining 5</option>
								        </select>
		        </div>

	<div id="model"  class="style-sub-1"  style="display: none;" name="stylesub1" onchange="ChangeDropdowns(this.value)">
	    <label>Material: </label>
	        <select id="Modeling" name="Modeling">
		        <option value="">-Choose A Material</option>
			      <option value="Basic Ore Miner - Level 1a">Modeling 1</option>
			            <option value="Basic Ore Miner - Level 2a">Modeling 2</option>
				          <option value="Basic Ore Miner - Level 3a">Modeling 3</option>
					        <option value="Basic Ore Miner - Level 4a">Modeling 4</option>
						      <option value="Basic Ore Miner - Level 5a">Modeling 5</option>
						        </select>
		  </div>
        <div class="clear"></div><div id="error-message-style-sub-1"></div>



<dl>
  <dt>
    <label>
      Quantity per Part <br> (File Name)
      </label>
    </dt>
  <dd>
    <b>
      <input type="text" name="quantity"><br>
      </b>
    <span>
      Please specify below if the quantities of" <br> "each part are different.
      </span>
    </dd>
  </dl>
<dl>
  <dt>
    <label>Finish Level: </label>
    </dt>
  <dd>
    <input list="level" name="finishLevel">
    <datalist id="level">
      <option value="level 1">
	<option value="level 2">
	  <option value="level 3">
	    <option value="level 4">
	      </datalist>
    </dd>
  </dl>
<dl>
  <dt>
    <label>Additional Information: </label>
    </dt>
  <dd>
    <textarea id="additionalInfo" name="additionalInfo" cols="50" rows="5"></textarea>
    </dd>
  </dl>
<br><br><br><br>

    </div> <!--userinput-->
<div class="info-box"> Files cannot exceed 2 GB<br></div>
<div id="fileupload">
  <label>File1:</label>
  <input type="file" name="attachFile">
  <br>
   <label>File2:</label>
  <input type="file" name="attachFile2">
  <br>
 <label>File3:</label>
  <input type="file" name="attachFile3">
  <br>
 <label>File4:</label>
  <input type="file" name="attachFile4">
  <br>
 <label>File5:</label>
  <input type="file" name="attachFile5">
  <br>

  <input type="submit" name="submit" value="Upload files">
  </div> <!--fileupload-->


  </div><br>
</form>

</div><!--col 1 form-->

<div class="col-md-6">
  <div id="textCol2">
    <h2>Preferred file formats:</h2>
    <p><em>.stl  .sldprt  iges(.igs)  .step(.stp)</em></p>
    <h2>STL Viewers</h2>
    <p>We recommend viewing your .stl file before sending it to us for a quote. MiniMagics and Solid View Lite are both programs that can be downloaded free to enable you to do so.
    </p>
    <h2>SLA Materials</h2>
    <p>
      <strong>Accura®</strong><strong> 25</strong>: durable, off-white, PP-like<br>
      <strong>Accura®</strong><strong> 25</strong>: durable, off-white, PP-like<br>
      <strong>Accura®</strong><strong> 25</strong>: durable, off-white, PP-like<br>
      <strong>Accura®</strong><strong> 25</strong>: durable, off-white, PP-like<br>
    </p>
    <h2>SLS Materials</h2>
    <p>
      <strong>Polyamide--PA</strong>: low moistre absorption, white, nylon<br>
      <strong>Glass Filled--GF</strong>: tempertaure resistance, grey, 30% glass- filled nylon<br>
      <strong>Alulon</strong>: machinable, metallic grey, PA & al<br>
    </p>
    <h2>CLIP Materials</h2>
    <p>
      <strong>Cyanate Ester | CE 220</strong>: A strong resin that provides excellent thermal stablilty<br>
      <strong>Elastomeric Polyurethane | EPU 40</strong>: a general purpose stretchable resin that is elastic over a wide temperature range<br>
      <strong>Prototyping Resin | PR 25</strong>: a rapid production resin used to quickly try out designs and make parts with remarkable detail<br>
    </p>
    <h2>Contact Us</h2>
    <p><em>If you have a question, call or email us, to get the answer you need and keep your project moving forward.</em><br></p>

   
  </div><!--testCol2-->
</div><!--column--->
</div> <!--container-->

<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        © 2015 World Class Prototypes.
      </div>
      <div class="col-sm-6">
        <ul class="social-icons">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          <li><a href="#"><i class="fa fa-github"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<!--/#footer-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mousescroll.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom-scripts.js"></script>

</body>
</html>
