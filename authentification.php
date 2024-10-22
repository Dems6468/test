<?php
include("connexion.php");
// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
			$login =$_POST["identifiant"];
            $pass = $_POST["mdp"];
			$query = "SELECT * FROM client WHERE identifiant='$login' AND mdp='$pass'";
			$result = $connexion->query($query);
			$result->setFetchMode(PDO::FETCH_OBJ);
			$row = $result->fetch();
			if ($row){
                // dans ce cas, tout est ok, on peut démarrer notre session

                // on la démarre :)
                session_start ();
                // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
                $_SESSION['login'] = $_POST['identifiant'];
                $_SESSION['pwd'] = $_POST['mdp'];

                // on redirige notre visiteur vers une page de notre section membre
                header("Location:Connexion_Check.php");
                  
			}
            else{
                // Le visiteur n'a pas été reconnu comme étant membre administrateur.
                header("Location:echec_co.html");
            }
           
			$result->closeCursor();

		?>
