<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="Src/style/css.css">
    <link rel="stylesheet" href="Src/style/modalProjet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://themes.audemedia.com/html/goodgrowth/css/owl.theme.default.min.css">
    <script src="https://kit.fontawesome.com/fda357da01.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        #particles-js {
            width: 100%;
            height: 100%;
        }
    </style>
    <title>Portfolio Segond Nicolas</title>
</head>

<body>
    <!-- A propos de moi section -->
    <section id="ap" style="padding-top: 40px;">
        <div class="section-container">
            <h2 class="section-title" style="margin-bottom: 60px;">
                A propos
            </h2>
            <div class="about-row">
                <div class="about-col-1" style="text-align: center;">
                    <img src="Src/img/photo1.webp" style="width:max-content; height:max-content;" alt="">
                </div>
                <div class="about-col-2">
                    <div class="about-box">
                        <div class="about-row">
                            <div class="about-box-col-1">
                                <p>
                                    Je m'appelle <strong> Nicolas Segond </strong> et j'ai 20 ans. Je suis actuellement en deuxième année de BTS Services
                                    Informatiques aux Organisations au Lycée Andrée Malraux à Béthune. Mon intérêt pour le développement
                                    informatique remonte à mes années de lycée où j'ai acquis une solide connaissance de l'informatique en
                                    général. Ce BTS est la suite logique de ma passion pour ce domaine
                                </p>
                            </div>
                            <div class="about-box-col-2">
                                <ul class="list_progress">
                                    <li class="progress_bar">
                                        <div class="label_progress">
                                            <span> Html / Css / Php </span>
                                            <span class="span"> 90% </span>
                                        </div>
                                        <div class="progress">
                                            <div style="width: 90%; background-color: #B6CDE8; height: inherit;"></div>
                                        </div>
                                    </li>
                                    <li class="progress_bar">
                                        <div class="label_progress">
                                            <span> Framework back-end (Symfony) </span>
                                            <span class="span"> 60% </span>
                                        </div>
                                        <div class="progress">
                                            <div style="width: 60%; background-color: #8caeec; height: inherit;"></div>
                                        </div>
                                    </li>
                                    <li class="progress_bar">
                                        <div class="label_progress">
                                            <span> Framework front-end (VueJS - ReactJS) </span>
                                            <span class="span"> 20% </span>
                                        </div>
                                        <div class="progress">
                                            <div style="width: 20%; background-color: #B6CDE8; height: inherit;"></div>
                                        </div>
                                    </li>
                                    <li class="progress_bar">
                                        <div class="label_progress">
                                            <span> Wordpress </span>
                                            <span class="span"> 90% </span>
                                        </div>
                                        <div class="progress">
                                            <div style="width: 90%; background-color: #556C96; height: inherit;"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="about-box-btn">
                            <a href="Src\pdf\CV.pdf" class="about-btn"> Télécharger mon CV </a>
                            <a class="about-btn" onclick="Recuperermodal('myModal');"> En savoir plus sur moi ! </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="myModal" class="modal">
            <span class="close" onclick="fermerModal()">&times;</span>
            <div class="modal-content">
                <p class="section-sub-title">Mon parcours professionnelles et mes expériences</p>
                <div class="containerTimeLine">
                    <div class="timeline-block timeline-block-right">
                        <div class="marker"></div>
                        <div class="timeline-content">
                            <h3 style="color: white; font-weight: 600; font-size: 24px;">2018 - 2021</h3>
                            <span style="color: white; font-weight: 500; font-size: 18px;">Baccalauréat Générale au
                                lycée Albert Chatelet</span>
                            <p style="color: grey; font-weight: 300; font-size: 14px;">Spécialité Numérique et
                                Science de l'Informatique (NSI), Mathématiques et Physique-Chimie </p>
                        </div>
                    </div>

                    <div class="timeline-block timeline-block-left">
                        <div class="marker"></div>
                        <div class="timeline-content">
                            <h3 style="color: white; font-weight: 600; font-size: 24px;">2021</h3>
                            <span style="color: white; font-weight: 500; font-size: 18px;">Acquisition du
                                Baccalauréat Générale mention bien</span>
                            <p style="color: grey; font-weight: 300; font-size: 14px;">Spécialité Numérique et
                                Science de l'Informatique (NSI), Mathématiques et Physique-Chimie</p>
                        </div>
                    </div>

                    <div class="timeline-block timeline-block-right">
                        <div class="marker"></div>
                        <div class="timeline-content">
                            <h3 style="color: white; font-weight: 600; font-size: 24px;">2021</h3>
                            <span style="color: white; font-weight: 500; font-size: 18px;">1ère année de Brevet
                                Technicien Supérieur Services Informatiques aux Organisations</span>
                            <p style="color: grey; font-weight: 300; font-size: 14px;">Avec l'option Solutions
                                logiciels Appliqués Métiers (SLAM)</p>
                        </div>
                    </div>

                    <div class="timeline-block timeline-block-left">
                        <div class="marker"></div>
                        <div class="timeline-content">
                            <h3 style="color: white; font-weight: 600; font-size: 24px;">25/06/2021 - 30/05/2021
                            </h3>
                            <span style="color: white; font-weight: 500; font-size: 18px;"> Stage de 4 semaines au
                                sein de l'entreprise Allographique à Divion </span>
                            <p style="color: grey; font-weight: 300; font-size: 14px;"> Découverte,
                                approfondissement, et conception du design web à l'aide du CMS Wordpress plus précisément sous élémentor et de Css à
                                partir d'un cahier des charges prédéfini avec le client, ainsi qu'une maquette
                                préalablement préparée/rechercher </p>
                        </div>
                    </div>

                    <div class="timeline-block timeline-block-right">
                        <div class="marker"></div>
                        <div class="timeline-content">
                            <h3 style="color: white; font-weight: 600; font-size: 24px;">2022</h3>
                            <span style="color: white; font-weight: 500; font-size: 18px;"> 2ème année de Brevet
                                Technicien Supérieur Services Informatiques aux Organisations</span>
                            <p v>Avec l'option Solutions logiciels Appliqués Métiers (SLAM)</p>
                        </div>
                    </div>

                    <div class="timeline-block timeline-block-left">
                        <div class="marker"></div>
                        <div class="timeline-content">
                            <h3 style="color: white; font-weight: 600; font-size: 24px;"> 17/02/2023 - 03/01/2023
                            </h3>
                            <span style="color: white; font-weight: 500; font-size: 18px;"> Stage de 7 semaines au
                                sein de l'entreprise Diggit-All à Lens </span>
                            <p style="color: grey; font-weight: 300; font-size: 14px;"> Découverte,
                                approfondissement, et conception du design web et ce qui l'entoure à l'aide du CMS Wordpress plus précisément avec Divi et de Css,
                                conception de plaquette pour des dépliants 3 volets ainsi qu'une carte de visite </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Fin A propos de moi section -->

    <!-- BTS SIO Section -->
    <section class="BTSSIO" id="BTS" style="padding-top: 40px;">
        <div class="section-container">
            <p class="section-title" style="margin-bottom: 20px;">Qu'est ce que le BTS SIO ?</p>
            <p class="section-sub-title" style="padding: 0 50px;">
                Le BTS Services informatiques aux Organisations est un diplôme de niveau Bac+2 reconnu par l'État. Il a remplacé le BTS
                informatique de Gestion en 2011 pour répondre aux besoins de la profession en matière de qualification. Ce programme a été
                actualisé en fonction de l'importance des TIC et propose deux spécialités distinctes :
            </p>
            <div class="BTSPresentation">
                <div class='parent'>
                    <div class='child'>
                        <span style="font-size: 32px; font-weight: 600;">SISR (Solutions d'Infrastructure, Systèmes et
                            réseaux)</span>
                        <br><br><span style="font-size: 17px; font-weight: 400;">
                            Un titulaire d'un BTS SIO spécialisé en SISR peut installer, administrer et entretenir les équipements et les
                            réseaux informatiques. Il est également compétent pour configurer, surveiller, intégrer, sécuriser et optimiser
                            les serveurs, les postes clients et les équipements de connexion.
                        </span>
                        <br><br><a href="https://www.orientation.com/diplomes/bts-services-informatiques-aux-organisations-option-a-solutions-dinfrastructure-systemes-et-reseaux"><button class="btnBTS"> En savoir plus ! </button></a>
                    </div>
                </div>
                <div class='parent'>
                    <div class='child'>
                        <span style="font-size: 32px; font-weight: 600;">SLAM (Solutions Logicielles et Applications
                            Métiers) (La mienne)</span>
                        <br><br><span style="font-size: 17px; font-weight: 400;">
                            Le titulaire d'un BTS SIO spécialisé en SLAM peut développer des logiciels et des sites web, écrire de la
                            documentation sur les solutions applicatives, former des utilisateurs et effectuer de la
                            maintenance applicative.
                        </span>
                        <br><br><br><a href="https://www.orientation.com/diplomes/bts-services-informatiques-aux-organisations-option-b-solutions-logicielles-et-applications-metiers"><button class="btnBTS"> En savoir plus ! </button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin BTS SIO Section -->

    <!-- Mes certifications complémentaires -->
    <section class="certif" id="certif" style="padding-top: 40px;">
        <div class="section-container">
            <p class="section-title" style="margin-bottom: 20px;">Mes certifications </p>
            <div class="row-testimonials">
                <div class="col-sm-12">
                    <div id="customers-testimonials" class="owl-carousel">
                        <div class="item-testimonials">
                            <div class="shadow-effect">
                                <img class="img-responsive" src="Src\img\AméliorerSaCapaciteDecoute.webp" style="width:100%; height:min-content;" alt="">
                                <div class="item-details">
                                    <h5>Certification LinkedIn améliorer sa capacité d'écoute</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item-testimonials">
                            <div class="shadow-effect">
                                <img class="img-responsive" src="Src\img\AmeliorerSaMemoire.webp" style="width:100%; height:min-content;" alt="">
                                <div class="item-details">
                                    <h5>Certification LinkedIn Améliorer sa mémoire </h5>
                                </div>
                            </div>
                        </div>
                        <div class="item-testimonials">
                            <div class="shadow-effect">
                                <img class="img-responsive" src="Src\img\Fondement Graphisme.webp" style="width:100%; height:min-content;" alt="">
                                <div class="item-details">
                                    <h5>Certification LinkedIn Fondement du graphisme </h5>
                                </div>
                            </div>
                        </div>
                        <div class="item-testimonials">
                            <div class="shadow-effect">
                                <img class="img-responsive" src="Src\img\Html5 Certif.webp" style="width:100%; height:min-content;" alt="">
                                <div class="item-details">
                                    <h5>Certification LinkedIn HTML 5 </h5>
                                </div>
                            </div>
                        </div>
                        <div class="item-testimonials">
                            <div class="shadow-effect">
                                <img class="img-responsive" src="Src\img\phpMySql Certif.webp" style="width:100%; height:min-content;" alt="">
                                <div class="item-details">
                                    <h5>Certification LinkedIn PHP et MySQL</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin certification complémentaires -->

    <!-- Gallery mes projets section -->
    <section id="gallery">
        <div class="section-container">
            <div style="display:flex; justify-content: space-between; align-items: center;">
                <p class="section-title" style="margin-bottom: 20px;"> Mes projets </p>
                <a class="about-btn" href="https://nicolassegond.fr/index.php?uc=pageProjet" style="height: min-content;">Voir plus de projets</a>
            </div>
            <div class="gallery-container">
                <div class="gallery-div">
                    <a class="gallery-box">
                        <div class="gallery-item2">
                            <div class="informations">
                                <span class="gallery-title">Stage de première année</span>
                                <h4 class="galery-subtitle"> CDA Avocat - Site vitrine avocat</h4>
                                <span class="see-more" onclick="Recuperermodal('myModalcdaAvocats');"> En savoir plus !</span>
                            </div>
                            <div class="gallery-image">
                                <img src="Src/img/mockup/photo-pc.webp" style="height: 250px; width: 330px;" alt="Portfolio-title">
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>

                    <?php if (file_exists('Vues/Projets/projetCDA.html')) {
                        include('Vues/Projets/projetCDA.html');
                    } ?>

                </div>
                <div class="gallery-div">
                    <a class="gallery-box">
                        <div class="gallery-item2">
                            <div class="informations">
                                <span class="gallery-title">Stage de deuxième année</span>
                                <h4 class="galery-subtitle"> Les Petites Graines Pro - Site vitrine </h4>
                                <span class="see-more" onclick="Recuperermodal('myModalLPG');"> En savoir plus !</span>
                            </div>
                            <div class="gallery-image">
                                <img src="Src\img\mockup\photo-LPG.webp" style="height: 250px; width: 330px;" alt="Portfolio-title">
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                    <?php if (file_exists('Vues/Projets/projetLPGPRO.html')) {
                        include('Vues/Projets/projetLPGPRO.html');
                    } ?>
                </div>
                <div class="gallery-div">
                    <a class="gallery-box">
                        <div class="gallery-item2">
                            <div class="informations">
                                <span class="gallery-title">Projet d'étude</span>
                                <h4 class="galery-subtitle"> GSB extranet - Site Médecin</h4>
                                <span class="see-more" onclick="Recuperermodal('myModalGSBextranet');"> En savoir plus !</span>
                            </div>
                            <div class="gallery-image">
                                <img src="Src\img\mockup\photo-gsb.webp" style="height: 250px; width: 330px;" alt="Portfolio-title">
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                    <?php if (file_exists('Vues/Projets/projetGSBWeb.html')) {
                        include('Vues/Projets/projetGSBWeb.html');
                    } ?>

                </div>
                <div class="gallery-div">
                    <a class="gallery-box">
                        <div class="gallery-item2">
                            <div class="informations">
                                <span class="gallery-title">Projet d'étude</span>
                                <h4 class="galery-subtitle"> GSB Mobiles - Application Mobile</h4>
                                <span class="see-more" onclick="Recuperermodal('myModalGSB');"> En savoir plus !</span>
                            </div>
                            <div class="gallery-image">
                                <img src="Src\img\mockup\gsbmobile.png" style="height: 250px; width: 330px;" alt="Portfolio-title">
                                <div class="mask"></div>
                            </div>
                        </div>
                    </a>
                    <?php if (file_exists('Vues/Projets/projetGSBMobile.html')) {
                        include('Vues/Projets/projetGSBMobile.html');
                    } ?>
                </div>

            </div>
        </div>
    </section>
    <!-- Fin Gallery mes projets section -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="Src/js/Custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="Src/js/particles.min.js"></script>
    <script src="Src/js/app.js"></script>
</body>

</html>