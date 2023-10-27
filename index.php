<!Doctype  html>

<html>

<head>
  
     <!-- Lien CSS -->
  <link type="text/css" href="./loginprojet.css" rel="stylesheet">

     <!-- Titre de la Page html -->
    <title> Login </title>
      
</head>

<body>

 <div class="center">
    <!-- Titre -->
    <h1 class="titre">LOGIN</h1>
    <form method="post" action="auth.php">

     <!--Email-->
     <div class="email1">
        <span></span>
        <input type="mail" id="mail" name='email' placeholder="Votre adresse Email">
      </div>   
    <br>
  <!--password-->
      <div class="password1">
        <span></span>
        <input type="password" name="password"  maxlength="10" required placeholder="(code à 10)">
      </div> 

      <div class="connect">
      <input type="submit" value="SUBMIT">
      </div> 
    </form>
    </div>

    <!--PHP-->

   

    
</body>

</html>