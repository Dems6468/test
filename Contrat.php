        <?php
        $serveur = "localhost";
        $dbname = "limited";
        $user = "root";
        $pass = "root";
        
        $nom = $_POST["nom"]; 
		$prenom = $_POST["prenom"];
		$telephone = $_POST["telephone"];
		$contrat = $_POST["contrat"];		
		$email = $_POST["email"];
		$message = $_POST["message"];
		$voiture = $_POST["voiture"];
		
       
        
        try{
            //On se connecte à la BDD
            $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            //On insère les données reçues
            $sth = $dbco->prepare("
                INSERT INTO contrat(nom,prenom,telephone,contrat,email,message,voiture)
                VALUES(:nom, :prenom, :telephone, :contrat, :email, :message, :voiture)");
            $sth->bindParam(':nom',$nom);
            $sth->bindParam(':prenom',$prenom);
			$sth->bindParam(':telephone',$telephone);
            $sth->bindParam(':contrat',$contrat);
			$sth->bindParam(':email',$email );
			$sth->bindParam(':message',$message);
			$sth->bindParam(':voiture',$voiture);
            $sth->execute();
            
            //On renvoie l'utilisateur vers la page de remerciement
            header("Location:Contrat_Eff.html");
        }
        catch(PDOException $e){
            echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
        }
    ?>
    