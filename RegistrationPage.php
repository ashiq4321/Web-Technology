<?php
$u_fname = $h_ack= $h_address= $h_city= $h_name= $h_zip = $u_months = $u_Credit= $Recurring = $u_company =$u_phone = $amount =$u_lname=$u_dob  = $u_add1 = $u_city = $state  = $u_zip = $u_country = $email = $donation  = "";

$u_fname_err = $u_lname_err  = $u_add1_err = $u_city_err = $state_err  = $u_zip_err = $u_country_err  = $email_err = $donation_err = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
	if(empty($_POST['u_fname'])){
		$u_fname_err = "First Name cannot be empty!";
	}
	else{
		$u_fname = $_POST['u_fname'];
	}
	
	if(empty($_POST['u_lname'])){
		$u_lname_err = "Last Name cannot be empty!";
	}
	else{
		$u_lname = $_POST['u_lname'];
	}
	
	if(empty($_POST['u_add1'])){
		$u_add1_err = "E-mail cannot be empty!";
	}
	else{
		$u_add1 = $_POST['u_add1'];
	}
	
	if(empty($_POST['u_city'])){
		$u_city_err = "Password cannot be empty!";
	}
	else{
		$u_city = $_POST['u_city'];
	}
	
	if(empty($_POST['state'])){
		$state_err = "Password Confirmation cannot be empty!";
	}
	else{
		$state = $_POST['state'];
	}
	
	if(!empty($_POST['u_zip'])){
		$u_zip_err = "Password Confirmation cannot be empty!";
	}
	else{
		$u_zip = $_POST['u_zip'];
	}
		if(!empty($_POST['u_country'])){
		$u_country_err = "country cannot be empty!";
	}
	else{
		$u_country = $_POST['u_country'];
	}
	
		if(!empty($_POST['email'])){
		$email_err = "Password Confirmation cannot be empty!";
	}
	else{
		$email = $_POST['email'];
	}
	
		if(!empty($_POST['donation'])){
		$donation_err = "Password Confirmation cannot be empty!";
	}
	else{
		$donation = $_POST['donation'];
	}
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="RegistrationPageDesign" content="this page is used for registration purpose">
        <title>Registration page</title>
    </head>
    <body>
        <header>
                <label>*-Denotes Requirred Information</label><br>
                <label><b>>1 Donation </b></label>
                <label>>2 Confirmation</label>
                <label>>Thank You!</label>
        </header>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <main>
            <h1>Donor Information</h1>
            <section align=center > 
                <table align=center> 
                        <tr>
                        <td  align="right"><label><b>First Name*</b></label></td>
                        <td align="left"><input type="text"name ="u_fname" value="<?php echo $u_fname; ?>"></td>
						<td style="color:red"> <?php echo $u_fname_err; ?> </td>
                        </tr>
                        <tr>
                        <td  align="right"><label><b>Last Name*</b></label></td>
                        <td align="left"><input type="text"name ="u_lname" value="<?php echo $u_lname; ?>"></td>
						<td style="color:red"> <?php echo $u_lname_err; ?> </td>
                        </tr>
                        <tr>
                        <td  align="right"><b>Date of Birth</b></td>
                        <td align="left"><input type="text"name ="u_dob" value="<?php echo $u_fname; ?>"></td>
                        </tr>
                        <tr>
                        <td  align="right"><b>Company</b></td>
                        <td align="left"><input type="text"name ="u_company" value="<?php echo $u_fname; ?>"></td>
                        </tr>
                        <tr>
                        <td  align="right"><b>Address 1*</b></td>
                        <td align="left"><input type="text"name ="u_add1" value="<?php echo $u_add1; ?>"></td>
						<td style="color:red"> <?php echo $u_add1_err; ?> </td>
                        </tr>
                        <tr>
                        <td  align="right"><b>Address 2</b></td>
                        <td align="left"><input type="text"name ="u_add2" value="<?php echo $u_add2; ?>"></td>
                        </tr>
                        <tr>
                        <td  align="right"><b>City*</b></td>
                        <td align="left"><input type="text"name ="u_city" value="<?php echo $u_city; ?>"></td>
						<td style="color:red"> <?php echo $u_city_err; ?> </td>
                        </tr>
                        <tr>
                        <td  align="right"><b>Sate*</b></td>
                        <td align="left" ><select size ="1">
                        <option name ="d">Dhaka </option>
                        <option name ="c">Chittagong </option>
                        <option name ="k">Khulna</option>
                        </select></td>
                        </tr>
                        </tr>
                        <tr>
                        <td  align="right"><b>Zip Code*</b></td>
                        <td align="left"><input type="text"name ="u_zip" value="<?php echo $u_zip; ?>"></td>
						<td style="color:red"> <?php echo $u_zip_err; ?> </td>
                        </tr>
                        <tr>
                        <td  align="right"><b>Country*<b></td>
                        <td align=left><select size ="1">
                        <option name ="b">Bangladesh </option>
                        <option name ="i">India </option>
                        <option name ="p">Pakistan</option>
                        </select></td>
                        </tr>
                        <tr>
                        <td  align="right"><b>Phone</b></td>
                        <td align="left"><input type="text"name ="u_phone" value="<?php echo $u_phone; ?>"></td>
                        </tr>
                        <tr>
                        <td  align="right"><b>Fax</b></td>
                        <td align="left"><input type="text"name ="u_fax" value="<?php echo $u_fax; ?>"></td>
                        </tr>
                        <tr>
                        <td  align="right"><b>Email*</b></td>
                        <td align="left"><input type="text"name ="email" value="<?php echo $email; ?>"></td>
						<td style="color:red"> <?php echo $email_err; ?> </td>
                        </tr>
                        <tr>
                        <td align="right" ><b>Donation Amount*</b></td>
                        <td align="left"><input type ="radio"name="donation" value="none">none
                        <input type="radio"name="donation"value="$50">$50
                        <input type="radio"name="donation"value="$75">$75
                        <input type="radio"name="donation"value="$100">$100
                        <input type="radio"name="donation"value="$250">$250
                        <input type="radio"name="donation"value="other">other 
                        </td>
                        </tr> 
                        <tr>
                            <td align="right">(check a button or type in your <br>amount)</label></td>
                            <td align="left"><input type="text"name ="amount" value="<?php echo $amount; ?>"></td>
                        </tr> 
                        <tr>
                            <td align="right"><b>Recurring Donation </b></td>
                            <td align="left"><input type="checkbox" name="Recurring"value="<?php echo $Recurring; ?>>I am interested in giving on a regular basis</td>
                        </tr> 
                        <tr>
                            <td align="right">(Check if yes)</td>
                            <td align="left">Monthly Credit Card $ <input type="text" size="4" name="u_Credit" value="<?php echo $u_Credit; ?>> For <input type="text" size="4" name="u_months" value="<?php echo $u_months; ?>> Months </td>
                        </tr>
                        </table>                    
          </section>
          <h1>Honorarium and Memorial Donation Information</h1>
          <section align="center">
              
              <table align="center">
                  <tr>
                      <td align="right"><b>I would like to make this <br> donation </b></td>
                      <td align="left"><input type="radio"name="d_info" value="<?php echo $d_info; ?>> To Honor<br><input type="radio"name="d_info" value="<?php echo $d_info; ?>> In Memory of</td>
                  </tr>
                  <tr>
                        <td  align="right"><b>Name</b></td>
                        <td align="left"><input type="text"name ="h_name" value="<?php echo $h_name; ?>></td>
                        </tr>
                        <tr>
                        <td  align="right"><b>Acknowledge Donation to </b></td>
                        <td align="left"><input type="text"name ="h_ack" value="<?php echo $h_ack; ?>></td>
                        </tr>
                        <tr>
                        <td  align="right"><b>Address</b></td>
                        <td align="left"><input type="text"name ="h_address" value="<?php echo $h_address; ?>></td>
                        </tr>
                        <tr>
                        <td  align="right"><b>City </b></td>
                        <td align="left"><input type="text"name ="h_city" value="<?php echo $h_city; ?>></td>
                        </tr>
                        <tr>
                        <td  align="right"><b>Sate</b></td>
                        <td align="left" ><select size ="1">
                        <option name ="d">Dhaka </option>
                        <option name ="c">Chittagong </option>
                        <option name ="k">Khulna</option>
                        </select></td>
                        </tr>
                        <tr>
                             <td  align="right"><b>Zip </b></td>
                             <td align="left"><input type="text"name ="h_zip" value="<?php echo $h_zip; ?>></td>
                         </tr>

              </table>
          </section>
          <section>
              <h1 ><b>Additional Information</b></h1>
              <label>please enter your name,company or organization as you would it to appear in our publications:<label>
                  <table align="center">
                      <td align="right"><b>Name</b></td>
                      <td><input type="text" name="Additional_name"></td>
                  </table>
                  <input type="checkbox" name="add_1"> I would like my gift to remain anonymous <br>
                  <input type="checkbox" name="add_2"> My employer offers a matching gift program. I will mail the matching gift from.<br>
                  <input type="checkbox" name="add_3"> Please save the cost of acknowledging this gift by not mailing a thank you latter.<br>
                  <table align="center">
                      <tr>
                          <td align="right"><b>Comments</b><br>(please type any questions or feedback<br>here)</td>
                          <td align="left"><textarea rows="5" cols="50" name="address"></textarea></td>
                        </tr>
                        <tr>
                            <td align="right"><b>How may we contact you?</b></td>
                            <td><input type="checkbox" name="contact_email"> E-mail<br>
                            <input type="checkbox" name="contact_pmail"> Postal Mail<br>
                            <input type="checkbox" name="contact_telephone"> Telephone<br>
                            <input type="checkbox" name="contact_fax"> Fax<br></td>
                        </tr>
                  </table>
                  <label> I would like to receive newsletters and information about special events by : </label>
                 <br>
                 <table align="center">
                      <tr>
                          <td></td>
                          <td align="left"><input type="checkbox" name="receive_email"> E-mail</td>
                      </tr>
                      <tr>
                            <td></td>
                            <td align="left"><input type="checkbox" name="receive_pemail"> Postal Mail</td>
                        </tr>
                  </table>
                  <input type="checkbox" name="volunteer" > I would like informing about volunteering with the <input type="text" name="volunteer_text">
                <table align="center">
                    <tr>
                        <td align="right"><button>Reset</button></td>
                        <td align="left"><button type="submit">Continue</button></td>
                    </tr>
                </table>
          </section>	              
        </form>
		<label>Donate online with confidence. You are on a secure server.</label> <br>
            <label>If you have any problems or questions, please contact </label><a href="abc.php" target="_blank">support</a>
        
		<br><br>
		
		<h2><u>Your Information: </u></h2><br>
		
		<label>First Name: <?php echo $u_fname; ?></label><br>
        </main>
        <br>
        
		<footer> 
		</footer>
		
		
    </body>
</html>