<?php 
require './asset/config/init.php';
?>
    <?php include "header.php";?>
<main>
    <?php include "nav.php";?>
    <div class="scroll-watcher" id="start"></div>
            <!-- Je m'appelle Noah et je suis... -->
            <section id="bigContainer">
                <div class="scroll-right">
                    <div id="name">
                        <div>
                            <h2 id="fakeH1" aria-label="Je m'appelle Noah et je suis développeur Web" class="identity" >Je m'appelle Noah et je suis</h2>
                        </div>
                        <div>
                            <h2 id="realH2" aria-label="My name is Noah and i'm Web Developper" class="identity" >My name is Noah, and I am a</h2>
                        </div>
                        <div>
                            <h3 class="identity">Meu nome é Noah e sou</h3>
                        </div>
                        <div>
                            <h4 class="identity">Me llamo Noah y soy</h4>
                        </div>
                        <div>
                            <h5 class="identity">Mi chiamo Noah e sono</h5>
                        </div>
                        <div>
                            <h6 class="identity">私の名前はノア、私は</h6>
                        </div>
                    </div>        
                    <div id="WebD">
                        <h1 id="h1Portfolio">Developpeur <br> Web</h1>
                    </div>
                </div>
                <div id="maPersonne" data-aos="flip-up" 
                                    data-aos-duration="1000"
                                    data-aos-anchor-placement="top-bottom">
                    <p class="quiJeSuis">Etudiant à </p>
                        <a href="https://www.google.com/search?gs_ssp=eJzj4tFP1zc0KiuuMDHJSDZgtFI1qDAxTzUzSzVOMjBPNDE1MzC2MqgwN0tNSk5OM00zszRPM0tL9BJJyUzPLEnMUUhOzC0oLVYoSCzKLAYALgEXFQ&q=digital+campus+paris&rlz=1C1YTUH_frFR1061FR1061&oq=digital+campus+Paris&gs_lcrp=EgZjaHJvbWUqEAgAEC4YrwEYxwEYgAQYjgUyEAgAEC4YrwEYxwEYgAQYjgUyDAgBEEUYORjjAhiABDIHCAIQABiABDIHCAMQABiABDIHCAQQABiABDIHCAUQABiABDIHCAYQABiABDIICAcQABgWGB4yCAgIEAAYFhgeMggICRAAGBYYHtIBCDY0MjRqMGo3qAIAsAIA&sourceid=chrome&ie=UTF-8" target="_blank" class="quiJeSuis" id="DCP"> Digital Campus Paris </a>
                    <p class="quiJeSuis">je suis passioné de programmation. <br> Dans mon Portfolio, vous découvrirez mes compétences dans cette discipline mais également en Design, par le biais de Projets réalisés tout au long de cette année. <br></p>
                    <div class="wrapper">
                        <a aria-label="Télécharger mon cv" id="cvNM" href="./asset/cv/noah-mathey-cv.pdf" target="_blank" rel="nofollow">Télécharger mon cv</a>
                    </div>
                </div>
            </section> 
</main>     

            <!-- Compétences -->
            <section id="containerSkill">
                <h2 id="skill"
                data-aos="fade-up"
                data-aos-anchor-placement="top-bottom"
                data-aos-duration="1000"
                >Compétences</h2>
                <div id="btn">
                    <button aria-label="Voir mes compétences Dev" class="btnOnglets active" id="btnOnglet1" onclick="openTab(0)">Développement Web</button>
                    <button aria-label="Voir mes compétences Wev" class="btnOnglets" id="btnOnglet2" onclick="openTab(1)">Design</button>
                </div>  
                <div id="containerContent">
                    <!-- Mon container: -->
                    <div aria-label="Voici mes compétence Dev" class="tabContent" id="content1" style="display:block" data-aos="fade-right">
                        <div class="scroller" data-speed="fast">
                            <ul class="tag-list scroller__inner">
                                <?php 
                                    $skillDev = $pdo->prepare('SELECT * FROM skill');
                                    $skillDev->execute();
                                    $keys = $skillDev->fetchAll();
                                    foreach ($keys as $key) {
                                        echo '<li>'.$key['content'].'</li>';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                        <!-- Mon deuxième container -->
                    <div aria-label="Voici mes compétence Web" class="tabContent" id="content2" data-aos="zoom-out-down">
                        <div class="scroller" data-speed="fast">
                            <ul class="tag-list scroller__inner">
                                <?php 
                                    $skillsWeb = $pdo->prepare('SELECT * FROM skillsweb');
                                    $skillsWeb->execute();
                                    $keysWeb = $skillsWeb->fetchAll();
                                    foreach ($keysWeb as $keyWeb) {
                                        echo '<li>'.$keyWeb['contentWeb'].'</li>';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Projects -->
            <section id="projectContainer">
                <div class="transition"></div>
                <div class="backgroundRotateRed"></div>
                <p id="myPrjcts">Réalisations</p>
                <div id="projects">
                    <div id="prjct1" class="prjcts" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                        <div class="titre">
                            <p class="titreProjet">Horloge</p>
                        </div>
                        <div class="Aperçu">
                            <div class="photoProjet">
                                <img src="asset/projets/horloge/img/horloge.webp" alt="aperçu" width="235" height="">
                                <a href="./asset/projets/horloge/index.html" target="_blank">Voir l'aperçu</a>
                                <div class="skillsRequisContainer">
                                    <p class="skillsRequis">Compétences utilisées:</p>
                                    
                                </div>
                                <div class="langages">
                                    <div class="html skillRequired">
                                        <i class="fa-brands fa-html5 fa-2xl"></i>
                                    </div>
                                    <div class="css skillRequired">
                                        <i class="fa-brands fa-css3-alt fa-2xl"></i>
                                    </div>
                                    <div class="js skillRequired">
                                        <i class="fa-brands fa-square-js fa-2xl"></i>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="descriptionContainer">
                                <p class="description">Ce projet met en valeure la réalisation d'une horloge qui monter l'heure en temps réelle. Réalisée avec du HTML, CSS, et Javascript</p>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div id="prjct2" class="prjcts" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                        <div class="titre">
                            <p class="titreProjet">Boutons fous</p>
                        </div>
                        <div class="Aperçu">
                            <div class="photoProjet">
                                <img src="asset/projets/crazyButton/img/crazyButton.webp" alt="aperçu" width="235" height="">
                                <a href="./asset/projets/crazyButton/index.html" target="_blank">Voir l'aperçu</a>
                                <div class="skillsRequisContainer">
                                    <p class="skillsRequis">Compétences utilisées :</p>
                                    
                                </div>
                                <div class="langages">
                                    <div class="html skillRequired">
                                        <i class="fa-brands fa-html5 fa-2xl"></i>
                                    </div>

                                    <div class="js skillRequired">
                                        <i class="fa-brands fa-square-js fa-2xl"></i>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="descriptionContainer">
                                <p class="description">Dans ce projet, j'ai rendu impossible l'utilisation de boutons, n'essayez pas de cliquez dessus, vous pourriez devenir fou. Requiert l'utilisation de HTML et de JavaScript</p>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div id="prjct3" class="prjcts" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                        <div class="titre">
                            <p class="titreProjet">Projet d'identité visuelle</p>
                        </div>
                        <div class="Aperçu">
                            <div class="photoProjet">
                                <img src="asset/img/projets/LogoCouleurBaseline.webp" alt="aperçu" class="imgApercu" width="235" height="">
                                <a href="./asset/projets/piv/PIV-NoahMathey.pdf" target="_blank">Voir l'aperçu</a>
                                <div class="skillsRequisContainer">
                                    <p class="skillsRequis">Compétences utilisées :</p>
                                    
                                </div>
                                <div class="langages">
                                    <div class="html skillRequired">
                                        <i class="fa-brands fa-html5 fa-2xl"></i>
                                    </div>
                                    <div class="css skillRequired">
                                        <i class="fa-brands fa-css3-alt fa-2xl"></i>
                                    </div>
                                    <div class="js skillRequired">
                                        <i class="fa-brands fa-square-js fa-2xl"></i>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="descriptionContainer">
                                <p class="description">Découvrez le cheminement qui m'a permis d'accéder à ce logo. Dans ce projet, vous découvrirez le choix des formes des couleurs mais aussi de la baseline de mon logo.</p>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
            </section>
            <!-- Page contact -->
            <section id="goContactContainer">
                <div class="transition"></div>
                
                <?php include "contact.php"; ?>
                
            </section>
            
    <?php include "footer.php"; ?>
