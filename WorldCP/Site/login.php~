<?php
$msg = "";
session_start();


if (isset($_POST['submit'])){
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$path = "files/info.txt";
	$success = false;

	   $file = explode(PHP_EOL, file_get_contents($path) );
	   foreach($file as $line){
	   	list($username,$password) = array_pad(explode(",",$line,2), -2, null);
		if($_POST['username'] == $username && $_POST['password'] == $password){
			$success = true;
			break;
		}
	    }
	    if($success){
		$_SESSION['login_user'] = $username;
		header("Location: admin.php");
		exit;		
	    }
	    else{
		$msg = "Username or password is wrong";
	    }


}
?>

<html>
        <title>Login Page</title>
<style>

input[type=text], input[type=password] {
   
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    float: right;
}

button:hover {
    opacity: 0.8;
}

.container {
    position: fixed;
            width: 340px;
            height: 180px;
            top: 50%;
            left: 50%;
            margin-top: -140px;
            margin-left: -170px;
            background: #fff;
            border-radius: 3px;
            border: 1px solid #ccc;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}


</style>
<body>

  <div class="container">
<form name="loginForm" method="post">

    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="submit">Login</button>
    
<?php echo $msg; ?>

  
</form>
  </div>

</body>
</html>
