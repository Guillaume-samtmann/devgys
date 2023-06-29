<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Tabat</title>
</head>
<body>
<header>
<nav class="navbar " role="navigation">
        <div class="navbar__logo">
            <ul>
                <li>
                    <a class="logo" href="index.php"><img src="img/logo.png" alt=""></a>
                </li>
            </ul>
        </div>
        <ul class="navbar__links">
            <li class="navbar__link first"><a href="index.php">Accueil</a></li>
            <li class="navbar__link second"><a href="#lesactivites">Nos activitées</a></li>
            <li class="navbar__link third"><a href="#valeurs">Nos valeurs</a></li>
            <li class="navbar__link four"><a href="#articles">Nos articles</a></li>
        </ul>
        <button class="burger">
            <span class="bar"></span>
    
        </button>
    </nav>
    <script src="js.js"></script>
</header>
<main>
    <div class="intro">
        <p>Parce que chaque projet mérite une construction d'exception, confiez-nous vos rêves architecturaux et laissez-nous bâtir 
            avec précision et dévouement pour façonner un avenir durable, où la qualité et l'innovation s'unissent pour ériger des édifices 
            qui racontent votre succès et inspirent les générations à venir.
        </p>
    </div>
    <div class="descriptiontabat">
        <h1>Qui sommes nous ?</h1>
        <p>Tabat est une entreprise de bâtiment à Strasbourg et dans le Grand Est spécialisée dans 5 domaines : <br>
        <br>
         - le gros oeuvre <br>
         - le sciage <br>
         - le carottage <br> 
         - la démolition <br> 
         - le curage <br>
         <br>
         Nous avons une équipe d’ouvriers pluridisciplinaires et vous accompagnons de l’élaboration du projet à sa réalisation.
         Avec notre savoir-faire unique, tabat et leurs équipes seront à la hauteur de vos attentes. <br>
         Les entreprises du bâtiment recensent différents corps de métier, tels que des maçons, des terrassiers… qui réalisent les travaux 
         de gros-œuvre. Les entreprises du bâtiment construisent des édifices industriels, commerciaux ou des habitations. Une grande part
        des tâches qui incombent aux métiers du bâtiment sont la réparation, la restauration, la réhabilitation et la construction.
        </p>
        <button><a class="lebutton" href="#lesactivites">En savoir plus !</a></button>
    </div>
    <div id="lesactivites">
        <div class="gros-oeuvre">
            <h2>Gros oeuvre</h2>
              <p>Les travaux de gros-œuvre désignent la construction de l’ossature de l’ouvrage</p>          
        </div>
        <div class="sciage">
            <h2>Sciage</h2>
            <p>Le sciage béton est une technique de découpe permettant tous types de réalisations murales et sols</p>
        </div>
        <div class="carottage">
            <h2>Carottage</h2>
            <p>Le carottage permet d’effectuer des perçages verticaux et horizontaux de différents diamètres</p>
        </div>
        <div class="demolition">
            <h2>Démolition</h2>  
            <p>Les travaux de démolition consistent à détruire un ouvrage (béton, bois, métallique)</p>
        </div>
        <div class="curage">
            <h2>Curage</h2>  
             <p>Le curage consiste en la démolition partielle d’un bâtiment dans le but de réaliser des travaux de rénovation ou de préparer une démolition</p>           
        </div>
    </div>
    <div id="valeurs">
        <h1>Nos valeurs</h1>
        <div class="experience">
            <h2>Expérience</h2>
            <p> Avec plus de 15 ans d'expérience dans le secteur du BTP, nous avons acquis une expertise solide et diversifiée dans tous les aspects 
                de ce domaine dynamique. Pendant cette période, j'ai travaillé sur de nombreux projets de construction, allant des petites rénovations
                 aux grands chantiers d'infrastructure.</p>

        </div>
        <div class="rigueur">
            <h2>Rigueur</h2>
            <p>Notre équipe met tout son cœur à l'ouvrage afin de terminer vos travaux dans les délais impartis. 
                Nous comprenons à quel point il est important pour nos clients de respecter les échéances convenues, et nous nous 
                engageons pleinement à fournir des résultats rapides et de haute qualité.</p>

        </div>
        <div class="reactivite">
            <h2>Réactivité</h2>
            <p>Nous accordons une grande importance à l'écoute de vos besoins et nous sommes proactifs en matière de communication. 
                Nous comprenons que chaque projet est unique et nécessite une compréhension approfondie de vos attentes et exigences 
                spécifiques.</p>

        </div>
    </div>
    <div id="articles">
        <h1>Nos articles :</h1>
        <?php
            $conn = new PDO('mysql:host=localhost;dbname=articlebase;charset=UTF8;', 'admin', '14AZbd487');
            $conn->query('SET NAMES utf8;');
            $totalarticleReq = "SELECT COUNT(*) as total FROM article";
            $totalarticleResult = $conn->query($totalarticleReq);
            $totalarticleRow = $totalarticleResult->fetch(PDO::FETCH_ASSOC);
            $totalarticle = $totalarticleRow['total'];

            // Nombre de DVD à afficher par page
            $articlePerPage = 2;

            // Calcul du nombre total de pages
            $totalPages = ceil($totalarticle / $articlePerPage);

            // Récupération du numéro de page courant à partir du paramètre GET
            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

            // Calcul de l'offset pour la requête SQL
            $offset = ($currentPage - 1) * $articlePerPage;

            // Requête SQL avec la pagination
            $req = "SELECT * FROM article LIMIT $offset, $articlePerPage";
            $resultat = $conn->query($req);

            
            foreach ($resultat as $value){
                echo '<div class="lesarticles">';
                    echo '<p class="titreacticle">'.$value['titrearticle']. '</p> <br>';
                    echo '<p class="contenuartilce">'.$value['contenuarticle']. '</p>';
                echo '</div>';
            }
            
            // Affichage de la pagination
        echo '<div id="pagination">';
        if ($totalPages > 1) {
        for ($i = 1; $i <= $totalPages; $i++) {
            $activeClass = ($i == $currentPage) ? 'active' : '';
            echo '<a href="?page='.$i.'" class="'.$activeClass.'">'.$i.'</a>';
        }
    }
    echo '</div>';
        
        ?>
    </div>
    <footer>
        <p>&copy; guillaume samtmann</p>
        <div class="lesreseaux">
            <a class="reseaux" href="https://www.facebook.com/devguys.fr/"><img src="img/facebook.png" alt=""></a>
            <a class="reseaux" href="https://www.linkedin.com/company/devguys/"><img src="img/linkedin.png" alt=""></a>
        </div>
    </footer>
</main>
    
    
</body>
</html>
