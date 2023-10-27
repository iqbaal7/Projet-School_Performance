<!Doctype html>

<html lang="fr">

<head>

<!-- Lien CSS -->
<link type="text/css" href="./studentprojet.css" rel="stylesheet">

<!-- Lien JS -->
<script src="../javascript/scriptstudent.js"> </script>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Titre de la Page html -->
<title> Liste etudiants </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
            <li><a href="./Dashboard.php">Accueil</a></li>
            <br>
            <li><a href="./Liste etudiants.php">liste des étudiants</a></li>
            <br>
            <li><a href="./Liste Professeurs.php">liste des professeurs</a></li>
            </ul> 
        </div>
    </div>

    <!-- listes des etudiants-->
    <h2 class="liststudent"> Liste des étudiants</h2>

    <!-- Photo de profil-->
    <div class="img1">
        <img src="./profil.png">
    </div>
    
    <!-- BOUTON ADD -->
<div class="ajouter">
  <input type="search" id="site-search" name="q" />
<button  data-toggle="modal" data-target="#exampleModal" >ADD</button>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">  Ajouter un(e) élève</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--formulaire-->
        <form action ='./addStudent.php' method='POST'>
          <label for="lname">Nom</label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name..">
            <br><br>
            
            <!-- Prenom-->
          <label for="fname">Prenom</label>
          <input type="text" id="fname" name="firstname" placeholder="Your name..">
          <br><br>
    
           <!-- Telephone-->
           <label for="telephone">Telephone</label>
           <input type="text" id="telephone" name="phone" placeholder="Telephone">
           <br><br>
    
            <!--Adress-->
          <label for="fname">Address</label>
          <input type="text"  name="address" placeholder="Address">
          <br><br>
    
            <!-- Mail-->
          <label for="email">Email</label>
          <input type="email" id="mail" name='email' placeholder="Votre adresse Email">
          <br><br>
    
          <!--classe-->
          <label for="etude">Classe</label>
          <select id="etude" name="classe">
            <option value="CM1">CM1</option>
            <option value="CM2">CM2</option>
          </select>
          <br><br>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        <button type="submit" class="btn btn-primary">Ajouter</button>


      </div>
    </form>
    </div>
  </div>
</div>
<br><br>

    <!--PHP liste-->
    <ul>
    <?php
		$mysql = new mysqli("localhost", "root", "", "school_performance");
		$mysql->set_charset("utf8");
		$requete = "SELECT * FROM personne";
		$resultat = $mysql->query($requete);
		while ($ligne = $resultat->fetch_assoc()) {

			echo  $ligne['nomPersonne']. ' ' . $ligne['prenomPersonne'] . ' ' . $ligne['classePersonne'] .
            '<br>';
		}
		$mysql->close();
		?>
        </ul>
       
<script>

var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>