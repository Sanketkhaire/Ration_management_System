<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Public Distribution System</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Koulen&family=Lato:wght@100;300;400;700;900&family=Noto+Sans:wght@500;600&family=Raleway:ital,wght@0,900;1,700&family=Roboto:wght@500&family=Source+Sans+Pro:wght@200;400;600;700;900&display=swap" rel="stylesheet">
<link href="styles/layout1.css" rel="stylesheet" type="text/css" />
<link href="styles/forms.css" rel="stylesheet" type="text/css" />
</head>
<body >
<div id="header"> 
<h1><strong>Public Distribution System</strong></h1>

</div>

<div id="wrap">

    <form method="post" action="login.php"   autocomplete="off">
    
    	<div class="cont_details">

                  <fieldset>
				  <table align="center">
                <legend style="background-color:#2F8F9D; width:800px;height:20px; color:white; border-radius: 10px;padding-left:10px;padding-top:5px;font-family:'Source Sans Pro', sans-serif;">Please login here!</legend>
				
				<tr>
          <td><label>Username<label></td>
          <td ><input type="text" autocomplete="off" name="user" tabindex="2" autocomplete="off" required/></td>
        </tr>
			 <tr>
          <td ><label>Password</label></td>
          <td width="195"><input type="password" name="pass" tabindex="2" autocomplete="off" required/>
              <br />

              <font color="red" size="1">
              <?php if(isset($_SESSION['error'])){echo $_SESSION['error'];} unset($_SESSION['error']);?>
            </font> 

			  </td>
        </tr>	
		 <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" style="background-color:#242F9B; height:30px;width: 260px; color:white; border-radius: 10px;" name="Submit" value="Login" tabindex="2" id="Submit" /></td>
        </tr>
				
				</table>
				</form>
           <legend>

</div>
</div>
<div id="footer"> 
<p>Copy right! <?php echo date('d-m-Y');?></p>
</div>
</body>
</html>
