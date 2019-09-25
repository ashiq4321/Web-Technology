<?php
$u_name="";
$u_name_err="";
if($_SERVER['Request_Method']=="POST"){
    if(empty($_POST["u_name"])){
        $u_name_err="Name can not be empty";
    }
    else{
        $u_name=$_POST["u_name"];  
    }
}
$_POST ["u_name"]
$_POST ["u_pass"]
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="linker page" content="link from another page">
        <title>linker page</title>
    </head>
    <body>
        <header>
                <section align="center">
                <h1>Login Page</h1>
                <img src="Desktop\metrorail-dhaka-design-train-" alt="Rail logo">
        </header>
        <main>
            <section align="center"> 
                <table> 
                        <form action="Web tech 01.html"method="POST">
                        <label>username:</label>
                        <input type="text"name ="u_name" value="<?php echo $u_name;?>">
                        <br>
                        <label>password:</label>
                        <input type="password" name="u_pass">
                        <br>
                        <button>Login</button>        
                </form> </table>                    
         <!--  </section>
          <section align="center">
              <textarea rows="10" cols="50" name="address"></textarea>
          </section>
          <section>
              <input type="radio"name="education" value="Ssc">Ssc<br>
              <input type="radio"name="education"value="Hsc">Hsc<br>
          </section>
         <section>
              <select size ="2">
                  <option name ="m">male </option>
                  <option name ="f">female </option>
                  <option name ="o">Others </option>
              </select>
          </section>-->

        </main>
        <br>
        <footer> 
            <a href="Web Tech 01.html">web tech01.html link</a>
        </footer>
    </body>
</html>