<?php 
$burger_price =200 ;
$fries_price =100;
$sandwich_price = 150;
$Total_price =0 ;
$burger_Qunatity =$sandwich_Qunatity=$fries_Qunatity=0;
if($_SERVER['REQUEST_METHOD'] == "POST"){
  if(!empty($_POST['burger_Qunatity'])){
    $burger_Qunatity = $_POST['burger_Qunatity'];
  }
  if(!empty($_POST['sandwich_Qunatity'])){
    $sandwich_Qunatity = $_POST['sandwich_Qunatity'];
  }
  if(!empty($_POST['fries_Qunatity'])){
    $fries_Qunatity = $_POST['fries_Qunatity'];
  }

  $Total_price =$burger_Qunatity*$burger_price+$fries_Qunatity*$fries_price+$sandwich_Qunatity*$sandwich_price;
  if($burger_Qunatity =="2" || $sandwich_Qunatity=="4"){
    $Total_price =$Total_price -($Total_price * 0.2); 
  }
}
?>
<html>
  <head>
    <title>food order</title>
  </head>
  <body>
    <h1 align="center">ORDER YOUR FOOD</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
      <table align="center">
        <tr>
          <td>Name :</td>
          <td><input type="text" name="name" required></td>
        </tr>
        <tr>
        <td>Phone Number :</td>
          <td><input type="number" name="number" required></td>
        </tr>
        <tr>
        <td>Date of Delivery  :</td>
          <td><input type="date" name="date" required></td>
        </tr>
        <tr>
        <td>Email :</td>
          <td><input type="email" name="email" required></td>
        </tr>
        <tr>
          <td>Type of food</td>
          <td>
            <select name="burger_Qunatity">
				        <option  disabled selected > Burger </option>
                <option value="0" > none </option>
                <option  value="1" <?php if((isset($_POST['burger_Qunatity'])) && ($_POST['burger_Qunatity']=="1")) echo "selected" ?>> 1 </option>
                <option  value="2" <?php if((isset($_POST['burger_Qunatity'])) && ($_POST['burger_Qunatity']=="2")) echo "selected" ?>> 2 </option>
		 	      </select>
          </td>
          <td>
            <select name="sandwich_Qunatity">
				        <option value="0" disabled selected > Sandwich </option>
                <option value="0" > none </option>
                <option  value="1" <?php if((isset($_POST['sandwich_Qunatity'])) && ($_POST['sandwich_Qunatity']=="1")) echo "selected" ?>> 1 </option>
                <option  value="2" <?php if((isset($_POST['sandwich_Qunatity'])) && ($_POST['sandwich_Qunatity']=="2")) echo "selected" ?>> 2 </option>
                <option  value="3" <?php if((isset($_POST['sandwich_Qunatity'])) && ($_POST['sandwich_Qunatity']=="3")) echo "selected" ?>> 3 </option>
                <option  value="4" <?php if((isset($_POST['sandwich_Qunatity'])) && ($_POST['sandwich_Qunatity']=="4")) echo "selected" ?>> 4 </option>
		 	      </select>
          </td>
          <td>
            <select name="fries_Qunatity">
				        <option  disabled selected > Fries </option>
                <option value="0" > none </option>
                <option  value="1" <?php if((isset($_POST['fries_Qunatity'])) && ($_POST['fries_Qunatity']=="1")) echo "selected" ?>> 1 </option>
                <option  value="2" <?php if((isset($_POST['fries_Qunatity'])) && ($_POST['fries_Qunatity']=="2")) echo "selected" ?>> 2 </option>
		 	      </select>
          </td>

        </tr>	
        <tr>
          <td></td>
          <td><button type="submit">SUBMIT</button></td>
        </tr>
      </table>
    </form>
    
    <label>Total Price: <?php echo $Total_price; ?></label><br>

  </body>
</html>
