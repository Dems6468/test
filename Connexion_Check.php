<?php
session_start ();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Demande_Eff.css">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title></title>
	
<body>
<header>
    <a href="index.html" class="logo"><span>Limit</span>ed</a>
    <div class="menuToggle" onclick="toggleMenu();"></div>
    <ul class="navbar">
        <li><a href="index.html" onclick="toggleMenu();">Accueil</a></li>
		 <li><a href="#banniere" onclick="toggleMenu();">Retourner en haut de la page </a></li>
       
        <a href="#" class="btn-reserve" onclick="window.location.href = 'deconnexion.php'"> Déconnexion</a>
    </ul>
</header>
<section class="banniere" id="banniere">
    <div class="contenu">
        <h2> Bonjour
            <?php
                echo  ''.$_SESSION['login'].'';
            ?></h2>
        <p> L'accès aux News de la semaine ! </p>
        
	<div class="contactform">
        
         <div class="inputboite">
             <a href="#justedessous"> <input type="submit" value="Juste en dessous"><a/>
         </div>
		
            
        
     </div>
    </div>
</section>

<div class="Forme_formulaire">
                <center>
                    <table  style="background-color:#000;"  width ="100%" border="0" cellspacing="35" > 
						<tr style="vertical-align: top;">
                            <td>
                                <p <style color="white" Reste>     
								</p>
                            </td>
                        </tr>
                        <tr style="vertical-align: top; ">
                            <td id="justedessous">
								
                                <video controls width ="600" height="500">
									<source src="video/video1.mp4"/>
									</video>
                            </td>
							<td>
							
                                <video controls width ="600" height="500">
									<source src="video/video2.mp4"/>
									</video>
                            </td>
                           <td>
							
                                <video controls width ="600" height="500">
									<source src="video/video3.mp4"/>
									</video>
                            </td>

                        <tr style="vertical-align: top;">
                            <td colspan="4" >
                                <iframe  width="100%" height="1500px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  sandbox="allow-forms allow-scripts allow-same-origin" src="https://journalduluxe.fr/fr/lifestyle/automobile" allowfullscreen></iframe>     
                            </td>
                        </tr>

                    </table>
                </center>
            </div>
 

 <div class="copyright">
     <p>©Copyright 2007 <a href="#">LIMITED </a> Vente de voiture. Tous droits reservés </p>
 </div>
 <script type="text/javascript">
     window.addEventListener('scroll', function(){
         const header =document.querySelector('header');
         header.classList.toggle("sticky", window.scrollY > 0 );
     });

     function toggleMenu(){
         const tmenuToggle = document.querySelector('.menuToggle');
         const navbar = document.querySelector('.navbar');
         navbar.classList.toggle('active');
         menuToggle.classList.toggle('active');
     }
 </script>
</body>
</html>