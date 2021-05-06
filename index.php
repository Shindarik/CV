<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="./images/logoCV.svg" type="image/x-icon">
    <meta name="description" content="Voici le CV intéractif de Suslu Matéo">
    <title>CV - Suslu Matéo</title>
</head>

<body>

    <nav>
        <div class="panel">
            <span style="--i:0;"></span>
            <span style="--i:1;"></span>
            <span style="--i:2;"></span>
            <span style="--i:3;"></span>
            <span style="--i:4;"></span>
        </div>

        <ul class="link">
            <li><a href="#top">Accueil</a></li>
            <li><a href="#s1">Qui suis-je ?</a></li>
            <li><a href="#s2">Compétences</a></li>
            <li><a href="#s3">Parcours</a></li>
            <li><a href="#s4">Contact</a></li>
        </ul>
    </nav>

    <div class="burger">
        <div class="burgerBtn"></div>
    </div>

    <header>
        <h1>Suslu Matéo</h1>
        <div class="cross1">
            <svg width="90%" height="90%" viewBox="0 0 473 603" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="113" height="368" fill="white" />
                <circle cx="204.5" cy="485.5" r="117.5" fill="white" />
                <rect x="440" y="108" width="37" height="300" transform="rotate(30 440 108)" fill="white" />
            </svg>
        </div>
        <div class="cross2"></div>
        <div class="cross2 dis1"></div>
        <div class="cross2 dis2"></div>
        <a href="#s1">
            <svg height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.83 16.42l9.17 9.17 9.17-9.17 2.83 2.83-12 12-12-12z" />
                <path d="M0-.75h48v48h-48z" fill="none" /></svg>
        </a>
        <h2 class="textMouse">Découvrez-moi-Découvrez - moi-</h2>
    </header>
    <div class="container">
        <section id="s1">
            <h1>Qui suis-je ?</h1>
            <p class="description">Bonjour ! Je m’appelle <span>Matéo Suslu</span> et je suis actuellement en première
                année d'un <span>DUT Métiers du Multimédia et de l’Internet</span> à l’IUT de Champs-sur-Marne. Je suis
                passionné à la fois par le <span>développement web</span> et par l'<span>audiovisuel</span>. À travers
                ce CV intéractif, j’espère vous convaincre de mes diverses capacités que ce soit dans l'aspect créatif
                et développement. Si vous voulez en apprendre plus n'hésitez pas à découvrir le reste de la page !</p>
            <div class="moiPrincipal">
                <div class="cvText">
                    <p>" Mon <span>CV</span> est disponible en format <span>PDF</span> en bas du site ! "</p>
                </div>
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#08BDBA"
                        d="M35.4,-54.8C47.5,-47.3,60,-40.2,69.3,-29C78.6,-17.7,84.6,-2.4,80.5,10.1C76.4,22.6,62.2,32.1,50.9,42.9C39.6,53.6,31.2,65.6,19.2,72.1C7.3,78.6,-8.2,79.7,-21.3,74.8C-34.3,69.9,-44.9,59,-52.4,47.2C-59.9,35.4,-64.1,22.6,-66.4,9.3C-68.6,-3.9,-68.8,-17.7,-64.6,-30.7C-60.5,-43.6,-52.1,-55.8,-40.6,-63.5C-29.1,-71.3,-14.5,-74.8,-1.5,-72.5C11.6,-70.3,23.3,-62.3,35.4,-54.8Z"
                        transform="translate(100 100)" />
                </svg>
                <img src="./images/moiPrincipal.png" alt="Matéo Suslu Debout">
            </div>
            <div class="moiSecondaire">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#1264BA"
                        d="M35.4,-54.8C47.5,-47.3,60,-40.2,69.3,-29C78.6,-17.7,84.6,-2.4,80.5,10.1C76.4,22.6,62.2,32.1,50.9,42.9C39.6,53.6,31.2,65.6,19.2,72.1C7.3,78.6,-8.2,79.7,-21.3,74.8C-34.3,69.9,-44.9,59,-52.4,47.2C-59.9,35.4,-64.1,22.6,-66.4,9.3C-68.6,-3.9,-68.8,-17.7,-64.6,-30.7C-60.5,-43.6,-52.1,-55.8,-40.6,-63.5C-29.1,-71.3,-14.5,-74.8,-1.5,-72.5C11.6,-70.3,23.3,-62.3,35.4,-54.8Z"
                        transform="translate(100 100)" />
                </svg>
                <img src="./images/moiSecondaire.png" alt="Matéo Suslu de coté">
            </div>
            <div class="moiTertiaire">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#12906A"
                        d="M35.4,-54.8C47.5,-47.3,60,-40.2,69.3,-29C78.6,-17.7,84.6,-2.4,80.5,10.1C76.4,22.6,62.2,32.1,50.9,42.9C39.6,53.6,31.2,65.6,19.2,72.1C7.3,78.6,-8.2,79.7,-21.3,74.8C-34.3,69.9,-44.9,59,-52.4,47.2C-59.9,35.4,-64.1,22.6,-66.4,9.3C-68.6,-3.9,-68.8,-17.7,-64.6,-30.7C-60.5,-43.6,-52.1,-55.8,-40.6,-63.5C-29.1,-71.3,-14.5,-74.8,-1.5,-72.5C11.6,-70.3,23.3,-62.3,35.4,-54.8Z"
                        transform="translate(100 100)" />
                </svg>
                <img src="./images/moiTertiaire.png" alt="Matéo Suslu de coté">

            </div>
            <div class="moiSecondaire double">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#1264BA"
                        d="M35.4,-54.8C47.5,-47.3,60,-40.2,69.3,-29C78.6,-17.7,84.6,-2.4,80.5,10.1C76.4,22.6,62.2,32.1,50.9,42.9C39.6,53.6,31.2,65.6,19.2,72.1C7.3,78.6,-8.2,79.7,-21.3,74.8C-34.3,69.9,-44.9,59,-52.4,47.2C-59.9,35.4,-64.1,22.6,-66.4,9.3C-68.6,-3.9,-68.8,-17.7,-64.6,-30.7C-60.5,-43.6,-52.1,-55.8,-40.6,-63.5C-29.1,-71.3,-14.5,-74.8,-1.5,-72.5C11.6,-70.3,23.3,-62.3,35.4,-54.8Z"
                        transform="translate(100 100)" />
                </svg>
                <img src="./images/moiSecondaire.png" alt="Matéo Suslu de coté">
            </div>
            <div class="moiTertiaire triple">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#12906A"
                        d="M35.4,-54.8C47.5,-47.3,60,-40.2,69.3,-29C78.6,-17.7,84.6,-2.4,80.5,10.1C76.4,22.6,62.2,32.1,50.9,42.9C39.6,53.6,31.2,65.6,19.2,72.1C7.3,78.6,-8.2,79.7,-21.3,74.8C-34.3,69.9,-44.9,59,-52.4,47.2C-59.9,35.4,-64.1,22.6,-66.4,9.3C-68.6,-3.9,-68.8,-17.7,-64.6,-30.7C-60.5,-43.6,-52.1,-55.8,-40.6,-63.5C-29.1,-71.3,-14.5,-74.8,-1.5,-72.5C11.6,-70.3,23.3,-62.3,35.4,-54.8Z"
                        transform="translate(100 100)" />
                </svg>
                <img src="./images/moiTertiaire.png" alt="Matéo Suslu de coté">

            </div>
            <div class="hobbies">
                <h3>Mes Hobbies</h3>
                <div class="iconeHobbie">
                    <div class="hobbie">
                        <img src="./images/iconeFilm.svg" alt="Icone de film">
                        <span>Cinéma</span>
                        <p>ex : <a href="https://www.allocine.fr/film/fichefilm_gen_cfilm=229490.html"
                                target="_blank">La La Land</a> de Damien Chazelle</p>
                    </div>
                    <div class="hobbie">
                        <img src="./images/iconeJeu.svg" alt="Icone de jeu vidéo">
                        <span>Jeu vidéo</span>
                        <p>ex : <a href="https://undertale.com/" target="_blank">UNDERTALE</a> de Toby Fox</p>
                    </div>
                    <div class="hobbie">
                        <img src="./images/iconeComics.svg" alt="Icone de comics">
                        <span>Comics</span>
                        <p>ex : <a href="https://fr.wikipedia.org/wiki/Invincible_(comics)"
                                target="_blank">Invincible</a> de Robert Kirkman</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container">
        <section id="s2">
            <h1>Mes Compétences</h1>
            <div class="comp logiciels">
                <h2>Logiciels</h2>
                <div class="element" style="--color: #001833">
                    <img src="./images/iconePhotoshop.png" alt="Icone de Photoshop">
                    <div class="bar" style="--level: 90%">
                        <div class="progress"></div>
                    </div>
                    <p>90%</p>
                </div>
                <div class="element" style="--color: #A358FF">
                    <img src="./images/iconeFigma.png" alt="Icone de Figma">
                    <div class="bar" style="--level: 80%">
                        <div class="progress"></div>
                    </div>
                    <p>80%</p>
                </div>
                <div class="element" style="--color: #40AEF2">
                    <img src="./images/iconeVscode.png" alt="Icone de Visual Studio Code">
                    <div class="bar" style="--level: 75%">
                        <div class="progress"></div>
                    </div>
                    <p>75%</p>
                </div>
                <div class="element" style="--color: #00005B">
                    <img src="./images/iconePremiere.png" alt="Icone d'Adobe Première Pro">
                    <div class="bar" style="--level: 55%">
                        <div class="progress"></div>
                    </div>
                    <p>55%</p>
                </div>
            </div>
            <div class="comp langages">
                <h2>Langages</h2>
                <div class="element" style="--color: #E54C21">
                    <img src="./images/iconeHTML.png" alt="Icone d'HTML 5">
                    <div class="bar" style="--level: 95%">
                        <div class="progress"></div>
                    </div>
                    <p>95%</p>
                </div>
                <div class="element" style="--color: #2965F1">
                    <img src="./images/iconeCSS.png" alt="Icone du CSS 3">
                    <div class="bar" style="--level: 85%">
                        <div class="progress"></div>
                    </div>
                    <p>85%</p>
                </div>
                <div class="element" style="--color: #F7E018">
                    <img src="./images/iconeJS.png" alt="Icone de Javascript">
                    <div class="bar" style="--level: 70%">
                        <div class="progress"></div>
                    </div>
                    <p>70%</p>
                </div>
                <div class="element" style="--color: #797DB4">
                    <img src="./images/iconePHP.png" alt="Icone du PHP">
                    <div class="bar" style="--level: 40%">
                        <div class="progress"></div>
                    </div>
                    <p>40%</p>
                </div>
            </div>

            <div class="wave1">
                <?xml version="1.0" standalone="no"?><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#fff" fill-opacity="1"
                        d="M0,256L80,256C160,256,320,256,480,218.7C640,181,800,107,960,106.7C1120,107,1280,181,1360,218.7L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                    </path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#fff" fill-opacity="1"
                        d="M0,256L80,256C160,256,320,256,480,218.7C640,181,800,107,960,106.7C1120,107,1280,181,1360,218.7L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                    </path>
                </svg>
            </div>

            <div class="wave2">
                <?xml version="1.0" standalone="no"?><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#fff" fill-opacity="0.5"
                        d="M0,256L80,256C160,256,320,256,480,218.7C640,181,800,107,960,106.7C1120,107,1280,181,1360,218.7L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                    </path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#fff" fill-opacity="0.5"
                        d="M0,256L80,256C160,256,320,256,480,218.7C640,181,800,107,960,106.7C1120,107,1280,181,1360,218.7L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                    </path>
                </svg>
            </div>

            <div class="wave3">
                <?xml version="1.0" standalone="no"?><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#fff" fill-opacity="0.3"
                        d="M0,256L80,256C160,256,320,256,480,218.7C640,181,800,107,960,106.7C1120,107,1280,181,1360,218.7L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                    </path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#fff" fill-opacity="0.3"
                        d="M0,256L80,256C160,256,320,256,480,218.7C640,181,800,107,960,106.7C1120,107,1280,181,1360,218.7L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                    </path>
                </svg>
            </div>

        </section>
    </div>
    <div class="container">
        <section id="s3">
            <h1>Mon Parcours</h1>
            <div class="formations">
                <div class="bgSplit1"></div>
                <div class="bgSplit2"></div>
                <div class="op split2">
                    <div class="parcour" data-split="2">
                        <h3>Chef de projet / Développeur Full-stack</h3>
                        <i>HelpMMI</i>
                        <span>2020</span>
                        <p>Durant ma première année de MMI j'ai pu participer à un <b>projet tutoré</b> avec une équipe
                            d'autres étudiants. Étant à la fois <b>Chef de projet</b> et <b>Développeur Full-Stack</b>
                            j'ai pu porter différentes casquettes durant la réalisation de ce projet, ce qui m'a permis
                            d'apprendre à gérer le travail de groupe au travers d'un projet commun.
                        </p>
                    </div>
                    <img src="./images/logoHelpMMI.svg" alt="Logo de HelpMMI" style="--i:1;" id="logoHelpMMI">
                </div>
                <div class="op split1">
                    <div class="parcour" data-split="1">
                        <h3>DUT MMI à Champs-sur-marne</h3>
                        <i>IUT de Champs-sur-Marne</i>
                        <span>2020/2022</span>
                        <p>Je suis actuellement en première année d'un DUT <b>Métiers du Multimédia et de l'Internet</b>
                            à Champs-sur-Marne. D'une durée de 2 ans cette formation me permet d'acquérir des
                            compétences toutes <b>très polyvalentes</b>, du développement à l'audiovisuel.</p>
                    </div>
                    <img src="./images/logoMMI.png" alt="Logo du DUT MMI" style="--i:1;">
                </div>
                <div class="op split2">
                    <div class="parcour" data-split="2">
                        <h3>Auxiliaire au Service Immatricualtions Étrangères</h3>
                        <i>Centre des impôts de Noisy-le-Grand</i>
                        <span>2020</span>
                        <p>C'est durant les grandes vacances suivant mon BAC que j'ai pu travailler <b>1 mois</b> au
                            Centre des Impôts de Noisy-le-Grand en tant qu'auxiliaire. J'ai travaillé dans le <b>service
                                d'immatriculation des entreprises étrangères</b> où j'ai justement pu aider à la
                            création de dossier pour les entreprises étrangères ayant une activité commerciale en France
                            afin d'obtenir une immatriculation.</p>
                    </div>
                    <img src="./images/impots.png" alt="Centre des Impôts de Noisy-le-Grand" style="--i:1.5;">
                </div>
                <div class="op split1">
                    <div class="parcour" data-split="1">
                        <h3>BAC STI2D à Bussy-saint-georges</h3>
                        <i>Lycée Martin Luther King</i>
                        <span>2017/2020</span>
                        <p>J'ai effectué un BAC STI2D (Science de l'Industrie et du Développement Durable) au <b>lycée
                                Martin Luther King</b>. J'ai pris l'option Science d'Information et Numérique (SIN) ce
                            qui m'as permis d'approfondir ma passion pour l'informatique. J'ai donc eu le BAC
                            <b>mention très bien</b></p>
                    </div>
                    <img src="./images/mlk.jpg" alt="Lycée Martin Luther King" style="--i:2;">
                </div>
                <div class="op split2">
                    <div class="parcour" data-split="2">
                        <h3>Stage découverte d'un métier</h3>
                        <i>Toyota Material Handling France</i>
                        <span>2016</span>
                        <p>Pour mon année de <b>3ème</b> au collège j'ai du faire un stage de découverte d'une durée
                            d'une semaine. Pour cela j'ai été pris en tant que stagiaire dans le <b>pôle
                                informatique</b> de Toyota Material Handling France (sous branche de Toyota spécialisé
                            dans les chariots élévateurs). J'ai pu effectuer des tâches de maintenance réparties sur les
                            dievrs pôles.</p>
                    </div>
                    <img src="./images/logoToyota.jpg" alt="Logo de Toyota Material Handling France" style="--i:2.5;">
                </div>
                <div class="op split1">
                    <div class="parcour" data-split="1">
                        <h3>Brevet à Bussy-saint-georges</h3>
                        <i>Collège Claude Monet</i>
                        <span>2016/2017</span>
                        <p>J'ai eu mon brevet <b>mention bien</b> au collège Claude Monet. Déjà à ce moment je savais
                            que l'informatique serait le domaine dans lequel je voudrais évoluer.</p>
                    </div>
                    <img src="./images/claudeMonet.jpg" alt="Collège Claude Monet" style="--i:3;">
                </div>
            </div>
        </section>
    </div>
    <div class="container">
        <section id="s4">
            <h1>Contact</h1>
            <form method="post">
                <div class="check">
                    <input type="email" name="mail" id="mail" required placeholder=" ">
                    <label for="mail">Email</label>
                </div>
                <div class="check">
                    <input type="text" name="nom" id="nom" required placeholder=" ">
                    <label for="nom">Nom</label>
                </div>
                <div class="texte">
                    <textarea name="message" id="message" cols="30" rows="8" required placeholder=" "></textarea>
                    <label for="message">Message</label>
                </div>

                <input type="submit" value="Envoyer" id="submit">
            </form>

            <?php

                if (isset($_POST['mail']) && isset($_POST['nom']) && isset($_POST['message'])) {

                    $retour = mail('mateosuslu.pro@gmail.com', 'CV Contact : '.$_POST['nom'], $_POST['message'], 'From: '.$_POST['mail']);

                    if($retour){
                        echo '<script>alert("Message Envoyé !")</script>';
                    }else{
                        echo '<script>alert("Une erreur est survenue :(")</script>';
                    }
                }
            ?>

            <div class="shape1">
                <img src="./images/enveloppe.svg" alt="Icone d'une enveloppe" width="40%">
            </div>
            <div class="shape2"></div>
        </section>
    </div>
    <footer>
        <div>
            <a href="#top" id="logoCV">
                <svg width="100%" height="100%" viewBox="0 0 473 603" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="113" height="368" fill="white" />
                    <circle cx="204.5" cy="485.5" r="117.5" fill="white" />
                    <rect x="440" y="108" width="37" height="300" transform="rotate(30 440 108)" fill="white" />
                </svg>
            </a>
        </div>

        <div class="mailFoot">
            <img src="./images/enveloppe.svg" alt="Icone d'une enveloppe">
            <p> : mateosuslu.pro@gmail.com</p>
        </div>

        <div>
            <a href="./documents/CV SUSLU Matéo.pdf" id="cvPDF" download>
                <svg id="Layer_1" enable-background="new 0 0 496.016 496.016" height="100%"
                    viewBox="0 0 496.016 496.016" width="100%" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#FFF"
                        d="m173.028 366h-98c-14.011 0-21.531 17.086-11.31 27.31l98 98c10.08 10.077 27.31 2.887 27.31-11.31v-98c0-8.84-7.16-16-16-16zm216-366h-282c-26.51 0-48 21.49-48 48v288.47c0 8.86 7.2 16.03 16.07 16 14.72-.06 44.83.03 108.1.03 10.68 0 19.33 8.65 19.33 19.33 0 63.28.09 93.38.03 108.1-.03 8.87 7.14 16.07 16 16.07h170.47c26.51 0 48-21.49 48-48v-400c0-26.51-21.49-48-48-48zm-141.66 50.37c29.7 0 53.86 24.16 53.86 53.86 0 29.69-24.16 53.85-53.86 53.85-29.69 0-53.85-24.16-53.85-53.85 0-29.7 24.16-53.86 53.85-53.86zm-81.01 164.14c0-13.83 8.16-26.42 20.79-32.06 27.895-12.453 27.474-12.72 31.9-12.72h56.28c4.503 0 4.318.402 31.9 12.72 12.64 5.64 20.8 18.23 20.8 32.06v21.94c0 8.84-7.16 16-16 16h-129.67c-8.84 0-16-7.16-16-16zm171.67 206.49h-93c-8.84 0-16-7.16-16-16s7.16-16 16-16h93c8.84 0 16 7.16 16 16s-7.16 16-16 16zm0-92h-181c-8.84 0-16-7.16-16-16s7.16-16 16-16h181c8.84 0 16 7.16 16 16s-7.16 16-16 16z" />
                </svg>
            </a>
        </div>

    </footer>


    <script src="./assets/main.js"></script>
</body>

</html>