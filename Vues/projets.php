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
    <section class="gallery" id="close2">
        <div class="section-container">
            <p class="section-title" style="margin-bottom: 20px;">Mes projets </p>
            <p class="section-sub-title" style="padding: 0 50px; margin-bottom: 20px;"> Cette galerie filtrable vous
                présente tous les projets que j'ai mené, terminés ou non, en cours ou non.</p>
            <div class="container">
                <div class="row">
                    <div class="gallery-filter">
                        <span class="filter-item active" data-filter="all">Tous</span>
                        <span class="filter-item" data-filter="StagePremiereAnnee">Stage Premiere Annee
                            (Allographique)</span>
                        <span class="filter-item" data-filter="StageDeuxiemeAnnee">Stage Deuxieme Annee</span>
                        <span class="filter-item" data-filter="ProjetPersonnel">Projet Personnel</span>
                        <span class="filter-item" data-filter="ProjetEtude">Projet D'étude</span>
                    </div>
                </div>
                <div class="container2">
                    <div class="row">
                        <div class="gallery-item StagePremiereAnnee">
                            <div class="gallery-div">
                                <a class="gallery-box">
                                    <div class="gallery-item2">
                                        <div class="informations">
                                            <span class="gallery-title"> Stage Première Année </span>
                                            <h4 class="galery-subtitle"> DbConsult - Site Internet </h4>
                                            <span class="see-more" onclick="Recuperermodal('myModalDbconsult');"> En savoir plus !</span>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="Src\img\mockup\dbconsult.webp" style="height: 250px; width: 330px;" alt="Portfolio-title">
                                            <div class="mask"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php if (file_exists('Vues/Projets/projetDbConsult.html')) {
                                include('Vues/Projets/projetDbConsult.html');
                            } ?>
                        </div>
                    </div>
                    <div class="gallery-item StagePremiereAnnee">
                        <div class="gallery-div">
                            <a class="gallery-box">
                                <div class="gallery-item2">
                                    <div class="informations">
                                        <span class="gallery-title"> Stage Première Année </span>
                                        <h4 class="galery-subtitle"> KinésioCarine - Site Internet </h4>
                                        <span class="see-more" onclick="Recuperermodal('myModalKinesioCarine');"> En savoir plus !</span>
                                    </div>
                                    <div class="gallery-image">
                                        <img src="Src\img\mockup\kinesiocarine.webp" style="height: 250px; width: 330px;" alt="Portfolio-title">
                                        <div class="mask"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php if (file_exists('Vues/Projets/projetKinesioCarine.html')) {
                            include('Vues/Projets/projetKinesioCarine.html');
                        } ?>
                    </div>
                    <div class="gallery-item StagePremiereAnnee">
                        <div class="gallery-div">
                            <a class="gallery-box">
                                <div class="gallery-item2">
                                    <div class="informations">
                                        <span class="gallery-title"> Stage Première Année </span>
                                        <h4 class="galery-subtitle"> Dominique Roisin LeChauve - Site Internet </h4>
                                        <span class="see-more" onclick="Recuperermodal('myModalDominiqueRoisin');"> En savoir plus !</span>
                                    </div>
                                    <div class="gallery-image">
                                        <img src="Src\img\mockup\dominiqueroisinlechauve.webp" style="height: 250px; width: 330px;" alt="Portfolio-title">
                                        <div class="mask"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php if (file_exists('Vues/Projets/projetDominiqueRoisin.html')) {
                            include('Vues/Projets/projetDominiqueRoisin.html');
                        } ?>
                    </div>
                    <div class="gallery-item StagePremiereAnnee">
                        <div class="gallery-div">
                            <a class="gallery-box">
                                <div class="gallery-item2">
                                    <div class="informations">
                                        <span class="gallery-title"> Stage Première Année </span>
                                        <h4 class="galery-subtitle"> electricienLaCroix - Site Internet </h4>
                                        <span class="see-more" onclick="Recuperermodal('myModalElectricienLaCroix');"> En savoir plus !</span>
                                    </div>
                                    <div class="gallery-image">
                                        <img src="Src\img\mockup\electricienlacroix.webp" style="height: 250px; width: 330px;" alt="Portfolio-title">
                                        <div class="mask"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php if (file_exists('Vues/Projets/projetElectricienLaCroix.html')) {
                            include('Vues/Projets/projetElectricienLaCroix.html');
                        } ?>
                    </div>
                    <div class="gallery-item StagePremiereAnnee">
                        <div class="gallery-div">
                            <a class="gallery-box">
                                <div class="gallery-item2">
                                    <div class="informations">
                                        <span class="gallery-title"> Stage Première Année </span>
                                        <h4 class="galery-subtitle"> tmsTerrassement - Site Internet </h4>
                                        <span class="see-more" onclick="Recuperermodal('myModaltmsTerrassement');"> En savoir plus !</span>
                                    </div>
                                    <div class="gallery-image">
                                        <img src="Src\img\mockup\tmsTerrassement.webp" style="height: 250px; width: 330px;" alt="Portfolio-title">
                                        <div class="mask"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php if (file_exists('Vues/Projets/projetTmsTerrassement.html')) {
                            include('Vues/Projets/projetTmsTerrassement.html');
                        } ?>
                    </div>
                    <div class="gallery-item StagePremiereAnnee">
                        <div class="gallery-div">
                            <a class="gallery-box">
                                <div class="gallery-item2">
                                    <div class="informations">
                                        <span class="gallery-title"> Stage Première Année </span>
                                        <h4 class="galery-subtitle"> cdaAvocats - Site Internet </h4>
                                        <span class="see-more" onclick="Recuperermodal('myModalcdaAvocats');"> En savoir plus !</span>
                                    </div>
                                    <div class="gallery-image">
                                        <img src="Src\img\mockup\photo-pc.webp" style="height: 250px; width: 330px;" alt="Portfolio-title">
                                        <div class="mask"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php if (file_exists('Vues/Projets/projetCDA.html')) {
                            include('Vues/Projets/projetCDA.html');
                        } ?>
                    </div>
                    <div class="gallery-item ProjetPersonnel">
                        <div class="gallery-div">
                            <a class="gallery-box">
                                <div class="gallery-item2">
                                    <div class="informations">
                                        <span class="gallery-title"> Projet Personnel </span>
                                        <h4 class="galery-subtitle"> Clone Instagram - Application Web </h4>
                                        <span class="see-more" onclick="Recuperermodal('myModalInstagram');"> En savoir plus !</span>
                                    </div>
                                    <div class="gallery-image">
                                        <img src="Src\img\mockup\instagram.webp" style="height: 250px; width: 330px;" alt="Instagram application web illustration">
                                        <div class="mask"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php if (file_exists('Vues\Projets\projetInstagram.html')) {
                            include('Vues\Projets\projetInstagram.html');
                        } ?>
                    </div>
                    <div class="gallery-item StageDeuxiemeAnnee">
                        <div class="gallery-div">
                            <a class="gallery-box">
                                <div class="gallery-item2">
                                    <div class="informations">
                                        <span class="gallery-title"> Stage Deuxième Année </span>
                                        <h4 class="galery-subtitle"> Les Petites Graines Pro - Site Internet </h4>
                                        <span class="see-more" onclick="Recuperermodal('myModalLPG');"> En savoir plus !</span>
                                    </div>
                                    <div class="gallery-image">
                                        <img src="Src\img\mockup\photo-LPG.webp" style="height: 250px; width: 330px;" alt="Portfolio-title">
                                        <div class="mask"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php if (file_exists('Vues/Projets/projetLPGPRO.html')) {
                            include('Vues/Projets/projetLPGPRO.html');
                        } ?>
                    </div>
                    <div class="gallery-item StageDeuxiemeAnnee">
                        <div class="gallery-div">
                            <a class="gallery-box">
                                <div class="gallery-item2">
                                    <div class="informations">
                                        <span class="gallery-title"> Stage Deuxième Année </span>
                                        <h4 class="galery-subtitle"> Les Petites Graines Particuliers - Site Internet </h4>
                                        <span class="see-more" onclick="Recuperermodal('myModalLPGParticulier');"> En savoir plus !</span>
                                    </div>
                                    <div class="gallery-image">
                                        <img src="Src\img\mockup\lespetitesgraines.webp" style="height: 250px; width: 330px;" alt="Portfolio-title">
                                        <div class="mask"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php if (file_exists('Vues/Projets/projetLPG.html')) {
                            include('Vues/Projets/projetLPG.html');
                        } ?>
                    </div>
                    <div class="gallery-item StageDeuxiemeAnnee">
                        <div class="gallery-div">
                            <a class="gallery-box">
                                <div class="gallery-item2">
                                    <div class="informations">
                                        <span class="gallery-title"> Stage Deuxième Année </span>
                                        <h4 class="galery-subtitle"> AssainiConcept - Site Internet </h4>
                                        <span class="see-more" onclick="Recuperermodal('myModalAssainiConcept');"> En savoir plus !</span>
                                    </div>
                                    <div class="gallery-image">
                                        <img src="Src\img\mockup\AssainiConcept.webp" style="height: 250px; width: 330px;" alt="Portfolio-title">
                                        <div class="mask"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php if (file_exists('Vues/Projets/projetAssainiConcept.html')) {
                            include('Vues/Projets/projetAssainiConcept.html');
                        } ?>
                    </div>
                    <div class="gallery-item StageDeuxiemeAnnee">
                        <div class="gallery-div">
                            <a class="gallery-box">
                                <div class="gallery-item2">
                                    <div class="informations">
                                        <span class="gallery-title"> Stage Deuxième Année </span>
                                        <h4 class="galery-subtitle"> AssainiPiècesServices - Site Internet </h4>
                                        <span class="see-more" onclick="Recuperermodal('myModalAssainiPieces');"> En savoir plus !</span>
                                    </div>
                                    <div class="gallery-image">
                                        <img src="Src\img\mockup\AssainiPiecesService.webp" style="height: 250px; width: 330px;" alt="Portfolio-title">
                                        <div class="mask"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php if (file_exists('Vues/Projets/projetAssainiPieces.html')) {
                            include('Vues/Projets/projetAssainiPieces.html');
                        } ?>
                    </div>
                    <div class="gallery-item StageDeuxiemeAnnee">
                        <div class="gallery-div">
                            <a class="gallery-box">
                                <div class="gallery-item2">
                                    <div class="informations">
                                        <span class="gallery-title"> Stage Deuxième Année </span>
                                        <h4 class="galery-subtitle"> Nicolas Bioret - Site Internet </h4>
                                        <span class="see-more" onclick="Recuperermodal('myModalNicolasBioret');"> En savoir plus !</span>
                                    </div>
                                    <div class="gallery-image">
                                        <img src="Src\img\mockup\siteNicolasBioret.webp" style="height: 250px; width: 330px;" alt="Portfolio-title">
                                        <div class="mask"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php if (file_exists('Vues/Projets/projetNicolasBioret.html')) {
                            include('Vues/Projets/projetNicolasBioret.html');
                        } ?>
                    </div>
                    <div class="gallery-item StageDeuxiemeAnnee">
                        <div class="gallery-div">
                            <a class="gallery-box">
                                <div class="gallery-item2">
                                    <div class="informations">
                                        <span class="gallery-title"> Stage Deuxième Année </span>
                                        <h4 class="galery-subtitle"> Diggit All - Site Internet </h4>
                                        <span class="see-more" onclick="Recuperermodal('myModalDiggitAll');"> En savoir plus !</span>
                                    </div>
                                    <div class="gallery-image">
                                        <img src="Src\img\mockup\diggitall.webp" style="height: 250px; width: 330px;" alt="Portfolio-title">
                                        <div class="mask"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php if (file_exists('Vues/Projets/projetDiggitAll.html')) {
                            include('Vues/Projets/projetDiggitAll.html');
                        } ?>
                    </div>
                    <div class="gallery-item ProjetEtude">
                        <div class="gallery-div">
                            <a class="gallery-box">
                                <div class="gallery-item2">
                                    <div class="informations">
                                        <span class="gallery-title"> Projet d'étude </span>
                                        <h4 class="galery-subtitle"> GSB extranet - Application web </h4>
                                        <span class="see-more" onclick="Recuperermodal('myModalGSBextranet');"> En savoir plus !</span>
                                    </div>
                                    <div class="gallery-image">
                                        <img src="Src\img\mockup\photo-gsb.webp" style="height: 250px; width: 330px;" alt="Portfolio-title">
                                        <div class="mask"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php if (file_exists('Vues/Projets/projetGSBWeb.html')) {
                            include('Vues/Projets/projetGSBWeb.html');
                        } ?>
                    </div>
                    <div class="gallery-item ProjetEtude">
                        <div class="gallery-div">
                            <a class="gallery-box">
                                <div class="gallery-item2">
                                    <div class="informations">
                                        <span class="gallery-title"> Projet d'étude </span>
                                        <h4 class="galery-subtitle"> GSB Mobile - Application Mobile </h4>
                                        <span class="see-more" onclick="Recuperermodal('myModalGSB');"> En savoir plus !</span>
                                    </div>
                                    <div class="gallery-image">
                                        <img src="Src\img\mockup\gsbmobile.png" style="height: 250px; width: 330px;" alt="Portfolio-title">
                                        <div class="mask"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php if (file_exists('Vues/Projets/projetGSBMobile.html')) {
                            include('Vues/Projets/projetGSBMobile.html');
                        } ?>
                    </div>
                    <div class="gallery-item ProjetEtude">
                        <div class="gallery-div">
                            <a class="gallery-box">
                                <div class="gallery-item2">
                                    <div class="informations">
                                        <span class="gallery-title"> Projet d'étude </span>
                                        <h4 class="galery-subtitle"> GSB Lourd - Client Lourd </h4>
                                        <span class="see-more" onclick="Recuperermodal('myModalGSBLourd');"> En savoir plus !</span>
                                    </div>
                                    <div class="gallery-image">
                                        <img src="Src\img\mockup\GSBLourd.webp" style="height: 250px; width: 330px;" alt="Portfolio-title">
                                        <div class="mask"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php if (file_exists('Vues/Projets/projetGSBLourd.html')) {
                            include('Vues/Projets/projetGSBLourd.html');
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="Src\js\Custom.js"></script>
    <script src="Src/js/particles.min.js"></script>
    <script src="Src/js/app.js"></script>
    <script type="text/javascript" src="https://unpkg.com/default-passive-events"></script>
    <script>
        const filterContainer = document.querySelector(".gallery-filter"),
            galleryItems = document.querySelectorAll(".gallery-item");

        filterContainer.addEventListener("click", (event) => {
            if (event.target.classList.contains("filter-item")) {
                // deactivate existing active 'filter-item'
                filterContainer.querySelector(".active").classList.remove("active");
                // activate new 'filter-item'
                event.target.classList.add("active");
                const filterValue = event.target.getAttribute("data-filter");
                galleryItems.forEach((item) => {
                    if (item.classList.contains(filterValue) || filterValue === 'all') {
                        item.classList.remove("hide");
                        item.classList.add("show");
                    } else {
                        item.classList.remove("show");
                        item.classList.add("hide");
                    }
                });
            }
        });
    </script>
</body>

</html>