<?php
        $serveur = "localhost";
        $dbname = "limited";
        $user = "root";
        $pass = "root";
        
		$identifiant = $_POST["identifiant"];
		$mdp = $_POST["mdp"];
		$nom = $_POST["nom"]; 
		$prenom = $_POST["prenom"];
		$email = $_POST["email"];
		$telephone = $_POST["telephone"];
			
		
        
        try{
            //On se connecte à la BDD
            $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            //On insère les données reçues
            $sth = $dbco->prepare("
             INSERT INTO client(identifiant,mdp,nom,prenom,email,telephone)
                VALUES(:identifiant, :mdp, :nom, :prenom, :email, :telephone)");
			$sth->bindParam(':identifiant',$identifiant);
			$sth->bindParam(':mdp',$mdp);
            $sth->bindParam(':nom',$nom);
            $sth->bindParam(':prenom',$prenom);
			$sth->bindParam(':email',$email );
			$sth->bindParam(':telephone',$telephone);
            $sth->execute();
            // on la démarre :)
            session_start ();
            // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
            $_SESSION['login'] = $_POST['identifiant'];
            $_SESSION['pwd'] = $_POST['mdp'];
            
            //On renvoie l'utilisateur vers la page de remerciement
            header("Location:Connexion_Check.php");
        }
        catch(PDOException $e){
            echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
        }
    ?>