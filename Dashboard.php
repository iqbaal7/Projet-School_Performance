<?php
    session_start();
?>

<!Doctype html>

<html>

<head>

<!-- Lien CSS -->
<link type="text/css" href="./dashboardprojet.css" rel="stylesheet">

<!-- Lien JS -->
<script src="c:\Users\PC-16\Desktop\PROJET PHP\javascript\scriptdash.js"> </script>

<!-- Titre de la Page html -->
<title> Dashboard </title>

</head>

<body>
<!-- Navbar vertical-->
    <div class="wrapper">
        <div class="sidebar">
            <ul>
            <div class="deconnect">
                <li><a href="./index.php" onclick="logout()"> Deconnexion</a></li>
            </div>
            <br>
            <br>
            <br>
            <br>
            <li><a href="./Dashboard.php">Accueil</a></li>
            <br>
            <li><a href="./Liste etudiants.php">liste des étudiants</a></li>
            <br>
            <li><a href="./Liste Professeurs.php">liste des professeurs</a></li>
            </ul> 
        </div>
    </div>

    <!-- PHP mail bienvenue-->
    <h5 class="adressmail"> 
    <?php
       echo $_SESSION['emailPersonne'];
       echo "<br>";
    ?>
    </h5>


    <div class="cm1">

        <!-- Nombre d'eleve CM1-->
      <?php
      require('config.php');

      $sql = "SELECT COUNT(*) FROM personne WHERE classePersonne='CM1'";
      $result = $conn->query($sql);
      $cm1 = $result-> fetch(); ?>
      
      <h2> Nombre d'élève niveau CM1: <?php echo  $cm1[0]; ?> </h2>

      <!-- Nombre d'eleve CM2-->
      <?php
      require('config.php');

      $sql = "SELECT COUNT(*) FROM personne WHERE classePersonne='CM2'";
      $result = $conn->query($sql);
      $cm2 = $result-> fetch(); ?>
      
      <h2 class="neleve2"> Nombre d'élève niveau CM2: <?php echo  $cm2[0]; ?> </h2>

    <div>
     <div>
    
    
    <h3 class="calendrier"> Calendrier d'evenement </h3>
    
    <!-- Photo de profil-->
    <div class="img1">
        <img src="./profil.png">
    </div>

    <!--Calendrier-->
    <div class="calendar">
    <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Europe%2FParis&src=dGVzdHByb2pldDk0QGdtYWlsLmNvbQ&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZnIuZnJlbmNoI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%23039BE5&color=%2333B679&color=%230B8043" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div>
    
    
</body>

</html>