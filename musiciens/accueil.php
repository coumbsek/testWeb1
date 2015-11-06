<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="accueil.css" />
	</head>
	
    <head> 
		<title>@men.toi - Accueil</title> 
	</head>
    
	<body>
        <div id="bloc_page">
            <header>
                <div id="titre_principal">
                    <img src="images/logos/logoAum.png" alt="Logo de l'aumonerie" id="logo" />
                    <h1>@Men.toi</h1>
                    <h2>Page d'accueil</h2>
                </div>
                
                <?php include("includes/navBar.php"); ?>
				
            </header>
            
            <?php include("includes/banniere.php"); ?>
            
            <section>
                <article>
                    <h1><img src="images/bulles/notes.png" alt="Catégorie Information" class="ico_categorie" />Confirmation</h1>
                    <p>Bientôt la confirmation, étape importante dans leur foi pour les jeunes de troisième, nous devons donnner notre maximum ce jour là pour qu'il reste gravé dans leur mémoir comme un jour merveilleux.</p>
                    <p>Vous retrouverez les partitions à travailler dans l'onglet associé</p>
                    <p>Phasellus ligula massa, congue ac vulputate non, dignissim at augue. Sed auctor fringilla quam quis porttitor. Praesent vitae dignissim magna. Pellentesque quis sem purus, vel elementum mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas consectetur euismod urna. In hac habitasse platea dictumst. Quisque tincidunt porttitor vestibulum. Ut iaculis, lacus at molestie lacinia, ipsum mi adipiscing ligula, vel mollis sem risus eu lectus. Nunc elit quam, rutrum ut dignissim sit amet, egestas at sem.</p>
                </article>
                <aside>
                    <h1>À propos de nous</h1>
                    <img src="images/bulle.png" alt="" id="fleche_bulle" />
                    <p id="logoMusique"><img src="images/musique.jpg" alt="Logo Musique" /></p>
                    <p>Laisse-nous le temps de nous présenter :</p>
                    <p>Depuis quelques années désormais les messes de l'aumonerie des saintes Marguerite sont animées par notre groupe.
					Nos jeunes musiciens sont issus de l'aumonerie et de la cathéchèse, ils s'engagent volontairement pour nous permettre de faire vivre leur foi d'une manière plus conviviale aux paroissiens.</p>
                    <p>
						<a href = "https://www.facebook.com/aumonerie.saintesmarguerite?fref=ts"><img src="images/logos/facebook.png" alt="Facebook" border="0"/></a>
						<img src="images/logos/twitter.png" alt="Twitter" />
						<img src="images/logos/vimeo.png" alt="Vimeo" />
						<img src="images/logos/flickr.png" alt="Flickr" />
						<img src="images/rss.png" alt="RSS" />
					</p>
                </aside>
            </section>
            
            <?php include("includes/piedDePage.php"); ?>
			
        </div>
    </body>
</html>
