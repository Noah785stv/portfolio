<?php 
require './asset/config/init.php';
?>
<main>
    <?php include "header.php";?>
                <!-- Je m'appelle Noah et je suis... -->
                <div class="scroll-watcher"></div>
            <section id="bigContainer" >
                <div id="name">
                    <div class="scroll-right">
                            <div>
                                <h2 id="fakeH1">Je m'appelle Noah et je suis</h2>
                            </div>
                            <div>
                                <h2 id="realH2">My name is Noah, and I am a</h2>
                            </div>
                            <div>
                                <h3>Meu nome é Noah e sou</h3>
                            </div>
                            <div>
                                <h4>Me llamo Noah y soy</h4>
                            </div>
                            <div>
                                <h5>Mi chiamo Noah e sono</h5>
                            </div>
                            <div>
                                <h6>私の名前はノア、私は</h6>
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
                        <p class="quiJeSuis">je suis passioné de programation. <br> Dans mon Portfolio, vous découvrirez mes compétences dans cette discipline mais également en Design, par le biais de Projets réalisés tout au long de cette année. <br></p>
                        <div class="wrapper">
                            <a id="cvNM" href="./asset/cv/noah-mathey-cv.pdf" target="_blank">Télécharger mon cv</a>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
            </section> 
            <!-- Compétences -->
            <section id="containerSkill">
                <h2 id="skill"
                data-aos="fade-up"
                data-aos-anchor-placement="top-bottom"
                data-aos-duration="1000"
                >Compétences</h2>
                <div id="btn">
                    <button class="btnOnglets active" id="btnOnglet1" onclick="openTab(0)">Développement Web</button>
                    <button class="btnOnglets" id="btnOnglet2" onclick="openTab(1)">Design</button>
                </div>  
                <div id="containerContent">
                    <!-- Mon container: -->
                    <div class="tabContent" id="content1" style="display:block" data-aos="fade-right">
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
                    <div class="tabContent" id="content2" data-aos="zoom-out-down">
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
                <div id="projects">
                    <p id="myPrjcts">Mes Projets</p>
                    <div id="prjct1" class="prjcts" data-aos="fade-left"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="1000">
                        <p class="titreProjet">Projet 1</p>
                        <div class="Aperçu">
                            <img src="asset/img/unnamed.png" alt="aperçu">
                            <button>Voir l'aperçu</button>
                        </div>
                        <div class="descriptionContainer">
                            <p class="titreDescription">Restaurant</p>
                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium laudantium facilis maxime officiis ratione, veritatis alias soluta voluptatum ?</p>
                        </div>
                        <div class="skillsRequisContainer">
                            <p class="skillsRequis">Langages utilisés :</p>
                            <div class="langages">
                                <div class="html">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                    <path fill="#E65100" d="M41,5H7l3,34l14,4l14-4L41,5L41,5z"></path><path fill="#FF6D00" d="M24 8L24 39.9 35.2 36.7 37.7 8z"></path><path fill="#FFF" d="M24,25v-4h8.6l-0.7,11.5L24,35.1v-4.2l4.1-1.4l0.3-4.5H24z M32.9,17l0.3-4H24v4H32.9z"></path><path fill="#EEE" d="M24,30.9v4.2l-7.9-2.6L15.7,27h4l0.2,2.5L24,30.9z M19.1,17H24v-4h-9.1l0.7,12H24v-4h-4.6L19.1,17z"></path>
                                    </svg>
                                </div>
                                <div class="css">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                    <path fill="#0277BD" d="M41,5H7l3,34l14,4l14-4L41,5L41,5z"></path><path fill="#039BE5" d="M24 8L24 39.9 35.2 36.7 37.7 8z"></path><path fill="#FFF" d="M33.1 13L24 13 24 17 28.9 17 28.6 21 24 21 24 25 28.4 25 28.1 29.5 24 30.9 24 35.1 31.9 32.5 32.6 21 32.6 21z"></path><path fill="#EEE" d="M24,13v4h-8.9l-0.3-4H24z M19.4,21l0.2,4H24v-4H19.4z M19.8,27h-4l0.3,5.5l7.9,2.6v-4.2l-4.1-1.4L19.8,27z"></path>
                                    </svg>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div id="prjct2" class="prjcts" data-aos="fade-up"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="1000">
                        <p class="titreProjet">Projet 2</p>
                        <div class="Aperçu">
                            <img src="asset/img/unnamed.png" alt="aperçu">
                            <button>Voir l'aperçu</button>
                        </div>
                        <div class="descriptionContainer">
                            <p class="titreDescription">Restaurant</p>
                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium laudantium facilis maxime officiis ratione, veritatis alias soluta voluptatum? Iusto fugit ipsa quibusdam.</p>
                        </div>
                        <div class="skillsRequisContainer">
                            <p class="skillsRequis">Langages utilisés :</p>
                            <div class="langages">
                                <div class="html"> <!-- Les icones on étés pris sur https://icons8.com/icons -->
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                    <path fill="#E65100" d="M41,5H7l3,34l14,4l14-4L41,5L41,5z"></path><path fill="#FF6D00" d="M24 8L24 39.9 35.2 36.7 37.7 8z"></path><path fill="#FFF" d="M24,25v-4h8.6l-0.7,11.5L24,35.1v-4.2l4.1-1.4l0.3-4.5H24z M32.9,17l0.3-4H24v4H32.9z"></path><path fill="#EEE" d="M24,30.9v4.2l-7.9-2.6L15.7,27h4l0.2,2.5L24,30.9z M19.1,17H24v-4h-9.1l0.7,12H24v-4h-4.6L19.1,17z"></path>
                                    </svg>
                                </div>
                                <div class="css">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                    <path fill="#0277BD" d="M41,5H7l3,34l14,4l14-4L41,5L41,5z"></path><path fill="#039BE5" d="M24 8L24 39.9 35.2 36.7 37.7 8z"></path><path fill="#FFF" d="M33.1 13L24 13 24 17 28.9 17 28.6 21 24 21 24 25 28.4 25 28.1 29.5 24 30.9 24 35.1 31.9 32.5 32.6 21 32.6 21z"></path><path fill="#EEE" d="M24,13v4h-8.9l-0.3-4H24z M19.4,21l0.2,4H24v-4H19.4z M19.8,27h-4l0.3,5.5l7.9,2.6v-4.2l-4.1-1.4L19.8,27z"></path>
                                    </svg>
                                </div>
                                <div class="php">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 80 80">
                                        <path fill="#dcd5f2" d="M40,61.5C18.22,61.5,0.5,51.855,0.5,40S18.22,18.5,40,18.5S79.5,28.145,79.5,40S61.78,61.5,40,61.5z"></path><path fill="#8b75a1" d="M40,19c21.505,0,39,9.421,39,21S61.505,61,40,61S1,51.579,1,40S18.495,19,40,19 M40,18 C17.909,18,0,27.85,0,40s17.909,22,40,22s40-9.85,40-22S62.091,18,40,18L40,18z"></path><path fill="#36404d" d="M25.112 34c1.725 0 3.214.622 4.084 1.706.749.934.981 2.171.668 3.577C29.023 43.074 27.395 44 21.57 44h-4.14l1.75-10H25.112M25.112 32H17.5L14 52h2l1.056-6h4.515c5.863 0 9.053-.905 10.246-6.284C32.842 35.096 29.436 32 25.112 32L25.112 32zM61.112 34c1.725 0 3.214.622 4.084 1.706.749.934.981 2.171.668 3.577C65.023 43.074 63.395 44 57.57 44h-4.14l1.75-10H61.112M61.112 32H53.5L50 52h2l1.056-6h4.515c5.863 0 9.053-.905 10.246-6.284C68.842 35.096 65.436 32 61.112 32L61.112 32z"></path><g><path fill="#36404d" d="M49.072,33.212C48.193,32.348,46.644,32,44.334,32h-5.538L40,26h-2.1L34,46h1.99l2.388-12h0.419 h5.538c2.338,0,3.094,0.4,3.335,0.637c0.343,0.338,0.424,1.226,0.217,2.363l-1.767,9h2.106l1.626-8.63 C50.199,35.462,49.936,34.062,49.072,33.212z"></path></g>
                                        </svg>
                                </div>
                                <div class="javascript">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                        <path fill="#ffd600" d="M6,42V6h36v36H6z"></path><path fill="#000001" d="M29.538 32.947c.692 1.124 1.444 2.201 3.037 2.201 1.338 0 2.04-.665 2.04-1.585 0-1.101-.726-1.492-2.198-2.133l-.807-.344c-2.329-.988-3.878-2.226-3.878-4.841 0-2.41 1.845-4.244 4.728-4.244 2.053 0 3.528.711 4.592 2.573l-2.514 1.607c-.553-.988-1.151-1.377-2.078-1.377-.946 0-1.545.597-1.545 1.377 0 .964.6 1.354 1.985 1.951l.807.344C36.452 29.645 38 30.839 38 33.523 38 36.415 35.716 38 32.65 38c-2.999 0-4.702-1.505-5.65-3.368L29.538 32.947zM17.952 33.029c.506.906 1.275 1.603 2.381 1.603 1.058 0 1.667-.418 1.667-2.043V22h3.333v11.101c0 3.367-1.953 4.899-4.805 4.899-2.577 0-4.437-1.746-5.195-3.368L17.952 33.029z"></path>
                                        </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="prjct3" class="prjcts" data-aos="fade-down"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="1000">
                        <p class="titreProjet">Projet 3</p>
                        <div class="Aperçu">
                            <img src="asset/img/unnamed.png" alt="aperçu">
                            <button>Voir l'aperçu</button>
                        </div>
                        <div class="descriptionContainer">
                            <p class="titreDescription">Restaurant</p>
                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium laudantium facilis maxime officiis ratione, veritatis alias soluta voluptatum? Iusto fugit ipsa quibusdam, vel assumenda.</p>
                        </div>
                        <div class="skillsRequisContainer">
                            <p class="skillsRequis">Langages utilisés :</p>
                            <div class="langages">
                                <div class="html"> <!-- Les icones on étés pris sur https://icons8.com/icons -->
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                <path fill="#E65100" d="M41,5H7l3,34l14,4l14-4L41,5L41,5z"></path><path fill="#FF6D00" d="M24 8L24 39.9 35.2 36.7 37.7 8z"></path><path fill="#FFF" d="M24,25v-4h8.6l-0.7,11.5L24,35.1v-4.2l4.1-1.4l0.3-4.5H24z M32.9,17l0.3-4H24v4H32.9z"></path><path fill="#EEE" d="M24,30.9v4.2l-7.9-2.6L15.7,27h4l0.2,2.5L24,30.9z M19.1,17H24v-4h-9.1l0.7,12H24v-4h-4.6L19.1,17z"></path>
                                </svg>
                            </div>
                            <div class="css">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                <path fill="#0277BD" d="M41,5H7l3,34l14,4l14-4L41,5L41,5z"></path><path fill="#039BE5" d="M24 8L24 39.9 35.2 36.7 37.7 8z"></path><path fill="#FFF" d="M33.1 13L24 13 24 17 28.9 17 28.6 21 24 21 24 25 28.4 25 28.1 29.5 24 30.9 24 35.1 31.9 32.5 32.6 21 32.6 21z"></path><path fill="#EEE" d="M24,13v4h-8.9l-0.3-4H24z M19.4,21l0.2,4H24v-4H19.4z M19.8,27h-4l0.3,5.5l7.9,2.6v-4.2l-4.1-1.4L19.8,27z"></path>
                                </svg>
                            </div>
                            <div class="php">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 80 80">
                                    <path fill="#dcd5f2" d="M40,61.5C18.22,61.5,0.5,51.855,0.5,40S18.22,18.5,40,18.5S79.5,28.145,79.5,40S61.78,61.5,40,61.5z"></path><path fill="#8b75a1" d="M40,19c21.505,0,39,9.421,39,21S61.505,61,40,61S1,51.579,1,40S18.495,19,40,19 M40,18 C17.909,18,0,27.85,0,40s17.909,22,40,22s40-9.85,40-22S62.091,18,40,18L40,18z"></path><path fill="#36404d" d="M25.112 34c1.725 0 3.214.622 4.084 1.706.749.934.981 2.171.668 3.577C29.023 43.074 27.395 44 21.57 44h-4.14l1.75-10H25.112M25.112 32H17.5L14 52h2l1.056-6h4.515c5.863 0 9.053-.905 10.246-6.284C32.842 35.096 29.436 32 25.112 32L25.112 32zM61.112 34c1.725 0 3.214.622 4.084 1.706.749.934.981 2.171.668 3.577C65.023 43.074 63.395 44 57.57 44h-4.14l1.75-10H61.112M61.112 32H53.5L50 52h2l1.056-6h4.515c5.863 0 9.053-.905 10.246-6.284C68.842 35.096 65.436 32 61.112 32L61.112 32z"></path><g><path fill="#36404d" d="M49.072,33.212C48.193,32.348,46.644,32,44.334,32h-5.538L40,26h-2.1L34,46h1.99l2.388-12h0.419 h5.538c2.338,0,3.094,0.4,3.335,0.637c0.343,0.338,0.424,1.226,0.217,2.363l-1.767,9h2.106l1.626-8.63 C50.199,35.462,49.936,34.062,49.072,33.212z"></path></g>
                                    </svg>
                            </div>
                            <div class="javascript">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                    <path fill="#ffd600" d="M6,42V6h36v36H6z"></path><path fill="#000001" d="M29.538 32.947c.692 1.124 1.444 2.201 3.037 2.201 1.338 0 2.04-.665 2.04-1.585 0-1.101-.726-1.492-2.198-2.133l-.807-.344c-2.329-.988-3.878-2.226-3.878-4.841 0-2.41 1.845-4.244 4.728-4.244 2.053 0 3.528.711 4.592 2.573l-2.514 1.607c-.553-.988-1.151-1.377-2.078-1.377-.946 0-1.545.597-1.545 1.377 0 .964.6 1.354 1.985 1.951l.807.344C36.452 29.645 38 30.839 38 33.523 38 36.415 35.716 38 32.65 38c-2.999 0-4.702-1.505-5.65-3.368L29.538 32.947zM17.952 33.029c.506.906 1.275 1.603 2.381 1.603 1.058 0 1.667-.418 1.667-2.043V22h3.333v11.101c0 3.367-1.953 4.899-4.805 4.899-2.577 0-4.437-1.746-5.195-3.368L17.952 33.029z"></path>
                                    </svg>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div id="prjct4" class="prjcts" data-aos="fade-right"
                                                    data-aos-anchor-placement="top-bottom"
                                                    data-aos-duration="1000">
                        <p class="titreProjet">Projet 4</p>
                        <div class="Aperçu">
                            <img src="asset/img/unnamed.png" alt="aperçu">
                            <button>Voir l'aperçu</button>
                        </div>
                        <div class="descriptionContainer">
                            <p class="titreDescription">Restaurant</p>
                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium laudantium facilis maxime officiis ratione, veritatis alias soluta voluptatum? Iusto fugit ipsa quibusdam, vel assumenda maxime eius reprehenderit et.</p>
                        </div>
                        <div class="skillsRequisContainer">
                            <p class="skillsRequis">Langages utilisés :</p>
                            <div class="langages">
                                <div class="html"> <!-- Les icones on étés pris sur https://icons8.com/icons -->
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                <path fill="#E65100" d="M41,5H7l3,34l14,4l14-4L41,5L41,5z"></path><path fill="#FF6D00" d="M24 8L24 39.9 35.2 36.7 37.7 8z"></path><path fill="#FFF" d="M24,25v-4h8.6l-0.7,11.5L24,35.1v-4.2l4.1-1.4l0.3-4.5H24z M32.9,17l0.3-4H24v4H32.9z"></path><path fill="#EEE" d="M24,30.9v4.2l-7.9-2.6L15.7,27h4l0.2,2.5L24,30.9z M19.1,17H24v-4h-9.1l0.7,12H24v-4h-4.6L19.1,17z"></path>
                                </svg>
                            </div>
                            <div class="css">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                <path fill="#0277BD" d="M41,5H7l3,34l14,4l14-4L41,5L41,5z"></path><path fill="#039BE5" d="M24 8L24 39.9 35.2 36.7 37.7 8z"></path><path fill="#FFF" d="M33.1 13L24 13 24 17 28.9 17 28.6 21 24 21 24 25 28.4 25 28.1 29.5 24 30.9 24 35.1 31.9 32.5 32.6 21 32.6 21z"></path><path fill="#EEE" d="M24,13v4h-8.9l-0.3-4H24z M19.4,21l0.2,4H24v-4H19.4z M19.8,27h-4l0.3,5.5l7.9,2.6v-4.2l-4.1-1.4L19.8,27z"></path>
                                </svg>
                            </div>
                            <div class="php">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 80 80">
                                    <path fill="#dcd5f2" d="M40,61.5C18.22,61.5,0.5,51.855,0.5,40S18.22,18.5,40,18.5S79.5,28.145,79.5,40S61.78,61.5,40,61.5z"></path><path fill="#8b75a1" d="M40,19c21.505,0,39,9.421,39,21S61.505,61,40,61S1,51.579,1,40S18.495,19,40,19 M40,18 C17.909,18,0,27.85,0,40s17.909,22,40,22s40-9.85,40-22S62.091,18,40,18L40,18z"></path><path fill="#36404d" d="M25.112 34c1.725 0 3.214.622 4.084 1.706.749.934.981 2.171.668 3.577C29.023 43.074 27.395 44 21.57 44h-4.14l1.75-10H25.112M25.112 32H17.5L14 52h2l1.056-6h4.515c5.863 0 9.053-.905 10.246-6.284C32.842 35.096 29.436 32 25.112 32L25.112 32zM61.112 34c1.725 0 3.214.622 4.084 1.706.749.934.981 2.171.668 3.577C65.023 43.074 63.395 44 57.57 44h-4.14l1.75-10H61.112M61.112 32H53.5L50 52h2l1.056-6h4.515c5.863 0 9.053-.905 10.246-6.284C68.842 35.096 65.436 32 61.112 32L61.112 32z"></path><g><path fill="#36404d" d="M49.072,33.212C48.193,32.348,46.644,32,44.334,32h-5.538L40,26h-2.1L34,46h1.99l2.388-12h0.419 h5.538c2.338,0,3.094,0.4,3.335,0.637c0.343,0.338,0.424,1.226,0.217,2.363l-1.767,9h2.106l1.626-8.63 C50.199,35.462,49.936,34.062,49.072,33.212z"></path></g>
                                    </svg>
                            </div>
                            <div class="javascript">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                    <path fill="#ffd600" d="M6,42V6h36v36H6z"></path><path fill="#000001" d="M29.538 32.947c.692 1.124 1.444 2.201 3.037 2.201 1.338 0 2.04-.665 2.04-1.585 0-1.101-.726-1.492-2.198-2.133l-.807-.344c-2.329-.988-3.878-2.226-3.878-4.841 0-2.41 1.845-4.244 4.728-4.244 2.053 0 3.528.711 4.592 2.573l-2.514 1.607c-.553-.988-1.151-1.377-2.078-1.377-.946 0-1.545.597-1.545 1.377 0 .964.6 1.354 1.985 1.951l.807.344C36.452 29.645 38 30.839 38 33.523 38 36.415 35.716 38 32.65 38c-2.999 0-4.702-1.505-5.65-3.368L29.538 32.947zM17.952 33.029c.506.906 1.275 1.603 2.381 1.603 1.058 0 1.667-.418 1.667-2.043V22h3.333v11.101c0 3.367-1.953 4.899-4.805 4.899-2.577 0-4.437-1.746-5.195-3.368L17.952 33.029z"></path>
                                    </svg>
                            </div>
                            <div class="bootstrap">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                    <path fill="#6c19ff" d="M6.391,10.671c-0.085-2.448,1.822-4.706,4.401-4.706h26.42c2.578,0,4.486,2.258,4.401,4.706	c-0.082,2.352,0.024,5.398,0.791,7.882c0.769,2.492,2.066,4.067,4.19,4.269v2.295c-2.124,0.202-3.421,1.777-4.19,4.269	c-0.767,2.484-0.873,5.53-0.791,7.882c0.085,2.448-1.822,4.706-4.401,4.706h-26.42c-2.578,0-4.486-2.258-4.4-4.706	c0.082-2.352-0.025-5.398-0.791-7.882c-0.769-2.492-2.069-4.067-4.194-4.269v-2.295c2.124-0.202,3.425-1.777,4.194-4.269	C6.367,16.07,6.473,13.023,6.391,10.671z"></path><linearGradient id="Is-EGaxKcc0Cic9QMqyzGa_EzPCiQUqWWEa_gr1" x1="17.846" x2="27.078" y1="-147.541" y2="-163.153" gradientTransform="matrix(1 0 0 -1 0 -132)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"></stop><stop offset="1" stop-color="#f1e5fc"></stop></linearGradient><path fill="url(#Is-EGaxKcc0Cic9QMqyzGa_EzPCiQUqWWEa_gr1)" d="M25.042,34.016c4.366,0,6.997-2.138,6.997-5.664c0-2.665-1.877-4.595-4.665-4.9v-0.111	c2.048-0.333,3.655-2.235,3.655-4.359c0-3.026-2.389-4.997-6.03-4.997h-8.192v20.031H25.042z M19.994,16.525h4.238	c2.304,0,3.612,1.027,3.612,2.887c0,1.985-1.522,3.096-4.281,3.096h-3.57V16.525z M19.994,31.475v-6.594h4.21	c3.015,0,4.579,1.11,4.579,3.276c0,2.165-1.522,3.318-4.394,3.318H19.994z"></path>
                                    </svg>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page contact -->
            <section id="goContactContainer">
                <div class="transition"></div>
                <?php include "contact.php"; ?>
                <!--<section id="bodyForm1" data-aos="zoom-out">
                <div class="boxForm">
                    <span class="borderLine"></span>
                    <form action="mailSubmit.php" method="post" >
                        <h2 id="contact" style="color:white">Contact</h2>
                        <div class="inputBox" id="emailForm">
                            <input type="text" required>
                            <span>Votre Email</span>
                            <i></i>
                        </div>
                        <div class="inputBox" id="inputBoxMsg">
                            <textarea type="text" placeholder="Cliquer ici pour écrire votre message" id="textareaForm" required></textarea>
                            <i></i>
                        </div>
                        <input type="submit" value="Envoyer le message">
                    </form>
                </div> -->
            </section>
</main>
    <?php include "footer.php"; ?>
