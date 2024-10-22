        <?php
        $serveur = "localhost";
        $dbname = "limited";
        $user = "root";
        $pass = "root";
        
        $nom = $_POST["nom"]; 
		$email = $_POST["email"];
        $telephone = $_POST["telephone"];
        $message = $_POST["message"];
        
        try{
            //On se connecte à la BDD
            $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            //On insère les données reçues
            $sth = $dbco->prepare("
                INSERT INTO contact(nom, email, telephone, message)
                VALUES(:nom, :email, :telephone, :message)");
            $sth->bindParam(':nom',$nom);
            $sth->bindParam(':email',$email);
			$sth->bindParam(':telephone',$telephone);
            $sth->bindParam(':message',$message);
            $sth->execute();
            
            //On renvoie l'utilisateur vers la page de remerciement
            header("Location:Demande_Eff.html");
        }
        catch(PDOException $e){
            echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
        }
    ?>
    