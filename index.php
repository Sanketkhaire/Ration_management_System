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
<link href="styles/layout1.css" rel="stylesheet" type="text/css" />
<link href="styles/forms.css" rel="stylesheet" type="text/css" />
</head>
<body >
<div id="header"> 
<p></p>
<h1><strong>Public Distribution System</strong></h1>

</div>

<div id="wrap">

    <form method="post" action="login.php"   autocomplete="off">
    
    	<div class="cont_details">

                  <fieldset>
				  <table align="center">
                <legend style="background-color:purple; width:800px; color:white; border-radius: 10px;">Please login here!</legend>
				
				
				<tr>
          <td><label>Username:<label></td>
          <td ><input type="text" autocomplete="off" name="user" tabindex="2" required /></td>
        </tr>
			 <tr>
          <td ><label>Password:</label></td>
          <td width="195"><input type="password" name="pass" tabindex="2" required />
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
          <td><input type="submit" style="background-color:green; width: 260px; color:white; border-radius: 10px;" name="Submit" value="Login" tabindex="2" id="Submit" /></td>
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
</header>
