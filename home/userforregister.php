<?php
	//Start session
	// session_start();
	include("../config.php");
	
	//Unset the variables stored in session
	
	
	?>

     
		 <table align="center">
		 <?php
if(isset($_POST['Register'])){
$u = $_POST['a'];
$p = $_POST['b'];
$n = 'customer';

$YR = date('Y');
$MT = date('F');

$query = "SELECT * FROM accounts WHERE username='$u' AND password='$p' ";

$res = mysqli_query($link,$query);


if(mysqli_num_rows($res) == 1){

$member = mysqli_fetch_assoc($res);
$sr = $member['sr'];

$query2 = "SELECT * FROM rationcard WHERE sr='$sr'";

$res2 = mysqli_query($link,$query2);

$member2 = mysqli_fetch_assoc($res2);
$id = $member2['id'];

$query3 = "SELECT * FROM purchase WHERE id='$id' AND year='$YR' AND month='$MT'";
$res3 = mysqli_query($link,$query3);


if(mysqli_num_rows($res3) == 0){
	echo 'hello';
    $_SESSION['USER'] = $u;
    $_SESSION['PW'] = $p;
    $_SESSION['ID'] = $id;
    header("Location: regfood.php");
}

}else if($res == False){
    echo "Customer not registered";
}else{
    print "Sorry you have already bought the ration";
}
}

?>
<form method="Post">
<legend style="background-color:purple; width:800px; color:white; border-radius: 10px;">Register ration here!</legend>

		<tr>
          <td><label>Username:<label></td>
          <td ><input type="text" autocomplete="off" name="a" tabindex="2" required /></td>
        </tr>
		<tr>
          <td><label>Password:<label></td>
          <td ><input type="password" autocomplete="off" name="b" tabindex="2" required /></td>
        </tr>
		<!-- <tr>
          <td><label>Role:<label></td>
                   <td ><select type="text" name="d" tabindex="2" required />
				   <option>---selectroles-</option>
				   <option>admin</option>
				   <option>field officer</option>
				   <option>   </option>
				   
				   
				   </td>

        </tr> -->
		<tr>
          <td></td>
          <td><input type="submit" name="Register" value="Submit"/></td>
        </tr>
</fieldset>
	
				
</table>
					</center>
					</form> 
				</td>
			</tr>
		</table>	
	</center>
		</table>
	</center>
					
</form>
