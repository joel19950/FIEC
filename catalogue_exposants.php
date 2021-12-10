<?php
$infrastructure_btp = isset($_GET["infrastructure_btp"]) ? $_GET["infrastructure_btp"] : '';
$institutions_et_administration = isset($_GET["institutions_et_administration"]) ? $_GET["institutions_et_administration"] : '';
$logistique_et_transports = isset($_GET["logistique_et_transports"]) ? $_GET["logistique_et_transports"] : '';
$agriculture_et_agroindustrie = isset($_GET["agriculture_et_agroindustrie"]) ? $_GET["agriculture_et_agroindustrie"] : '';
$art_design_et_metier_manuels = isset($_GET["art_design_et_metier_manuels"]) ? $_GET["art_design_et_metier_manuels"] : '';
$commerce = isset($_GET["commerce"]) ? $_GET["commerce"] : '';
$eau_et_energie = isset($_GET["eau_et_energie"]) ? $_GET["eau_et_energie"] : '';
$education_et_formation = isset($_GET["education_et_formation"]) ? $_GET["education_et_formation"] : '';
$equipement_et_immobilier = isset($_GET["equipement_et_immobilier"]) ? $_GET["equipement_et_immobilier"] : '';
$mode_et_habillement = isset($_GET["mode_et_habillement"]) ? $_GET["mode_et_habillement"] : '';
$pavillons_pays = isset($_GET["pavillons_pays"]) ? $_GET["pavillons_pays"] : '';
$sante_et_cosmetique = isset($_GET["sante_et_cosmetique"]) ? $_GET["sante_et_cosmetique"] : '';
$finance_banques_et_assurances = isset($_GET["finance_banques_et_assurances"]) ? $_GET["finance_banques_et_assurances"] : '';
$foret_et_bois = isset($_GET["foret_et_bois"]) ? $_GET["foret_et_bois"] : '';
$industries_et_mines = isset($_GET["industries_et_mines"]) ? $_GET["industries_et_mines"] : '';
$tic_et_telecommunication = isset($_GET["tic_et_telecommunication"]) ? $_GET["tic_et_telecommunication"] : '';
$touristes_et_loisirs = isset($_GET["touristes_et_loisirs"]) ? $_GET["touristes_et_loisirs"] : '';
$communication_et_media = isset($_GET["communication_et_media"]) ? $_GET["communication_et_media"] : '';
?>


<!doctype html>
<html class=no-js>

<head>
  <meta charset=utf-8>
  <meta name=description>
  <meta name=viewport content="width=device-width, initial-scale=1">
  <title>fiec</title>
  <link rel=stylesheet href=styles/vendor.css>
  <link rel=stylesheet href=styles/main.css>
  <script src=scripts/vendor/modernizr.js></script>
</head>

<body>
  <!--[if lt IE 10]>
 <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
 <![endif]-->
  <div class=page_overlay>
    <div class="loader-inner ball-scale-multiple">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <div class=wrapper-body>
    <header class=s-header>
      <div class=header-top>
        <div class=container>
          <div class=row>
            <div class=header-top-left> <a href=#><i class="fa fa-facebook"></i></a> <a href=#><i class="fa fa-twitter"></i></a> <a href=#><i class="fa fa-vine"></i></a> <a href=#><i class="fa fa-behance"></i></a> </div>

          </div>
        </div>
      </div>
      <div class=menu>
        <div class=container>
          <div class=row>
            <div class=header-top-left> <a href=index.php class=logo> <img src=images/logo.png alt=image> </a> </div>
            <div class=header-top-right>
              <nav class=navbar>
                <div class=nav-wrapper>
                  <div class=navbar-header> <button type=button class=navbar-toggle> <span class=sr-only>Toggle navigation</span> <span class=icon-bar></span>
                      <span class=icon-bar></span> <span class=icon-bar></span> </button> </div>
                  <div class=overlay></div>
                  <div class=nav-menu> <a href=# class=close> <i class="fa fa-times"></i> </a>
                    <ul class="nav navbar-nav menu-bar">
                      <li class=dropdown> <a href=index.php>Accueil</a>

                      </li>
                      <li><a href=aboutus.php class=active>A propos</a></li>
                      <li><a href=sermons.php>Catalogue</a></li>
                      <li class=dropdown> <a href=gallery.php>Actualités</a>
                        <ul class=submenu>
                          <li> <a href=event02.php class=active>Covid19</a></li>
                        </ul>
                      </li>
                      <li class=dropdown><a href=blog.php>Partenaires</a>
                        <ul class=submenu>
                          <li><a href=event.php>Devenez partenaire</a></li>
                        </ul>
                      </li>
                      <li><a href=contact_us.php>Contact</a></li>
                      

                    </ul>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class=button-wrapper>
        <div class=container>
          <div class=row> <a href=# class=btn-content>Catalogues des exposants fiec <br> Décembre 2021 </a></div>

          <div class="row">
            <h4>
              <?php if ($infrastructure_btp) { ?>
                <b> Infrastructure et BTP</b>
              <?php } else if ($institutions_et_administration) { ?>
                <b> Institutions et administration</b>
              <?php } else if ($logistique_et_transports) { ?>
                <b> Logistique et transports</b>
              <?php } else if ($agriculture_et_agroindustrie) { ?>
                <b> Agriculture et agroindustrie</b>
              <?php } else if ($art_design_et_metier_manuels) { ?>
                <b> Art design et metier manuel</b>
              <?php } else if ($commerce) { ?>
                <b> commerce</b>
              <?php } else if ($eau_et_energie) { ?>
                <b> Eau et Energie</b>
              <?php } else if ($education_et_formation) { ?>
                <b> Education et formation</b>
              <?php } else if ($equipement_et_immobilier) { ?>
                <b> Equipement et immobilier</b>
              <?php } else if ($mode_et_habillement) { ?>
                <b> Mode et habillement</b>
              <?php } else if ($pavillons_pays) { ?>
                <b> Pavillons pays</b>
              <?php } else if ($sante_et_cosmetique) { ?>
                <b> Santé et cosmetique</b>
              <?php } else if ($finance_banques_et_assurances) { ?>
                <b> Finance banque et assurances</b>
              <?php } else if ($foret_et_bois) { ?>
                <b> Foret et bois</b>
              <?php } else if ($industries_et_mines) { ?>
                <b> Industries et mines </b>
              <?php } else if ($tic_et_telecommunication) { ?>
                <b> Tic et Télécommunication</b>
              <?php } else if ($touristes_et_loisirs) { ?>
                Touristes et loisirs
              <?php } else if ($communication_et_media) { ?>
                Communication et média
              <?php } ?>

            </h4>
          </div>


        </div>
      </div>
    </header>
    <section class="store event-new">
      <div class=container>
        <div class=row>
          <div class="wrapper clearfix">
            <aside class=content>

              <div class=event_tab>

                <div class="tab-content event_montlydetails">
                  <div role=tabpanel class="event_slide event_list tab-pane active" id=listed_event>


                    <?php if ($infrastructure_btp) { ?>




                      <div class=wrap-list-slider>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-cross-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">


                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>

                            </ul>

                          </div>
                        </div>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-cross-blog2.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>


                      </div>

































                    <?php } else if ($institutions_et_administration) { ?>































                      <div class=wrap-list-slider>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-cross-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">


                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>

                            </ul>

                          </div>
                        </div>

                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-big-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>







                    <?php } else if ($logistique_et_transports) { ?>














                      <div class=wrap-list-slider>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-cross-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">


                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>

                            </ul>

                          </div>
                        </div>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-cross-blog2.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>


                      </div>

                    <?php } else if ($agriculture_et_agroindustrie) { ?>



















                      <div class=wrap-list-slider>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-cross-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">


                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>

                            </ul>

                          </div>
                        </div>


                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-big-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>


                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-big-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    <?php } else if ($art_design_et_metier_manuels) { ?>



















                      <div class=wrap-list-slider>


                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-big-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    <?php } else if ($commerce) { ?>















                      <div class=wrap-list-slider>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-cross-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">


                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>

                            </ul>

                          </div>
                        </div>

                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-big-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>

                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-big-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    <?php } else if ($eau_et_energie) { ?>













                      <div class=wrap-list-slider>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-cross-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">


                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>

                            </ul>

                          </div>
                        </div>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-cross-blog2.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>

                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-big-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    <?php } else if ($education_et_formation) { ?>











                      <div class=wrap-list-slider>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-cross-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">


                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>

                            </ul>

                          </div>
                        </div>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-cross-blog2.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>


                      </div>

                    <?php } else if ($equipement_et_immobilier) { ?>













                      <div class=wrap-list-slider>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-cross-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">


                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>

                            </ul>

                          </div>
                        </div>


                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-big-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>

                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-big-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    <?php } else if ($mode_et_habillement) { ?>









                      <div class=wrap-list-slider>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-cross-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">


                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>

                            </ul>

                          </div>
                        </div>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-cross-blog2.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>


                      </div>

                    <?php } else if ($pavillons_pays) { ?>

                      <div class=wrap-list-slider>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-cross-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">


                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>

                            </ul>

                          </div>
                        </div>

                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-big-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    <?php } else if ($sante_et_cosmetique) { ?>








                      <div class=wrap-list-slider>

                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-cross-blog2.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>

                      </div>

                    <?php } else if ($finance_banques_et_assurances) { ?>











                      <div class=wrap-list-slider>


                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-big-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>


                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-big-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    <?php } else if ($foret_et_bois) { ?>












                      <div class=wrap-list-slider>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-cross-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">


                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>

                            </ul>

                          </div>
                        </div>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-cross-blog2.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>


                      </div>

                    <?php } else if ($tic_et_telecommunication) { ?>










                      <div class=wrap-list-slider>


                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-big-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>

                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-big-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    <?php } else if ($touristes_et_loisirs) { ?>









                      <div class=wrap-list-slider>


                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-big-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>


                      </div>

                    <?php } else if ($communication_et_media) { ?>





                      <div class=wrap-list-slider>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-cross-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">


                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>

                            </ul>

                          </div>
                        </div>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-cross-blog2.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>

                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-cross-blog2.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>


                      </div>

                    <?php } else { ?>





                      <div class=wrap-list-slider>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-cross-blog.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">


                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>

                            </ul>

                          </div>
                        </div>
                        <div class="item-holder clearfix">
                          <div class=item-image> <img src=images/content/jesus-cross-blog2.jpg alt=image> </div>
                          <div class=item-container>
                            <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard.</p>
                            <ul class="wrapper-comment clearfix">
                              <li><a href="https://www.youtube.com/watch?v=ibewqQvfQk4" class=zoom title=video><i class="fa fa-play"></i></a></li>

                              <li><a href=pdf/own.pdf target=_blank>Cliqué ici pour télécharger &nbsp; <i class="fa fa-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>


                      </div>


                    <?php } ?>



















                  </div>
                  <div role=tabpanel class="event_month tab-pane" id=montly_event>
                    <div class=calender_markup>
                      <div class=header-calender>
                        <div class=current-year> <span id=current_month></span> , <span id=current_yr></span> </div>
                      </div>
                      <div id=calendar class=fc-calendar-container></div>
                    </div>
                    <div class=calender_info>
                      <div class=calender-header>
                        <h6>Actualités</h6>
                      </div>
                      <div class=event-name-wrap>
                        <ul class="Actualités-name scrollbar dynamic-event">
                          <li><a href=#>HIKING WITH HANK</a></li>` <li><a href=#>mum's bday</a></li>
                          <li><a href=#>ul/ux meeting</a></li>
                          <li><a href=#>lorem ipsum</a></li>
                        </ul>
                      </div>
                      <div class=calender_footer> <a class=prev_calender id=prev_yr><i class="fa fa-angle-left"></i>
                        </a> <a class=next_calender id=next_yr><i class="fa fa-angle-right"></i> </a> </div>
                    </div>
                  </div>
                  <div role=tabpanel class="event_day tab-pane" id=perdays_event>
                    <div class="item-holder clearfix">
                      <div class=item-image> <img src=images/content/jesus-blog.jpg alt=image>
                        <div class="ribbon-red-square clearfix"> <span>19</span> <span>Aug</span> </div>
                      </div>
                      <div class=item-container>
                        <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard.</p>
                        <ul class="wrapper-comment clearfix">
                          <li> <a href=#><i class="fa fa-map-marker"></i> <span> State Route H, Saint Louis, MO, USA
                              </span></a> </li>
                          <li> <a href=#><i class="fa fa-clock-o"></i> <span>10:00 am </span></a> </li>
                        </ul>
                      </div>
                    </div>
                    <div class="item-holder clearfix">
                      <div class=item-image> <img src=images/content/jesus-big-blog.jpg alt=image>
                        <div class="ribbon-red-square clearfix"> <span>19</span> <span>Aug</span> </div>
                      </div>
                      <div class=item-container>
                        <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard.</p>
                        <ul class="wrapper-comment clearfix">
                          <li> <a href=#><i class="fa fa-map-marker"></i> <span> State Route H, Saint Louis, MO, USA
                              </span></a> </li>
                          <li> <a href=#><i class="fa fa-clock-o"></i> <span>08:00 am </span></a> </li>
                        </ul>
                      </div>
                    </div>
                    <div class="item-holder clearfix">
                      <div class=item-image> <img src=images/content/jesus-cross-blog.jpg alt=image>
                        <div class="ribbon-red-square clearfix"> <span>19</span> <span>Aug</span> </div>
                      </div>
                      <div class=item-container>
                        <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard.</p>
                        <ul class="wrapper-comment clearfix">
                          <li> <a href=#><i class="fa fa-map-marker"></i> <span> State Route H, Saint Louis, MO, USA
                              </span></a> </li>
                          <li> <a href=#><i class="fa fa-clock-o"></i> <span>10:00 am </span></a> </li>
                        </ul>
                      </div>
                    </div>
                    <div class="item-holder clearfix">
                      <div class=item-image> <img src=images/content/jesus-cross-blog2.jpg alt=image>
                        <div class="ribbon-red-square clearfix"> <span>19</span> <span>Aug</span> </div>
                      </div>
                      <div class=item-container>
                        <h4><a href=# class=headline-lato>Love the God. Because he loves us</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard.</p>
                        <ul class="wrapper-comment clearfix">
                          <li> <a href=#><i class="fa fa-map-marker"></i> <span> State Route H, Saint Louis, MO, USA
                              </span></a> </li>
                          <li> <a href=#><i class="fa fa-clock-o"></i> <span>10:00 am </span></a> </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div role=tabpanel class="event_map tab-pane" id=mapping_event>
                    <div class=map-container id=map-wrapper> </div>
                    <div class="event_sorting clearfix">
                      <div class=figure>
                        <div class="item clearfix"> <a class=item-img href=event_details.php> <img src=images/gallery/galleryP1.jpg alt=image> </a>
                          <div class=item-content>
                            <h4 class=headline-lato>Water Baptism</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="item-footer clearfix">
                              <div class=footer-content>
                                <div class="wrap clearfix"> <i class="fa fa-clock-o"></i> <span>April 1, 2021 at 10:00
                                    am </span> </div>
                                <div class="wrap clearfix"> <i class="fa fa-map-marker"></i> <span>State Route H, Saint
                                    Louis, MO, USA </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=figure>
                        <div class="item clearfix"> <a class=item-img href=event_details.php> <img src=images/gallery/galleryP2.jpg alt=image> </a>
                          <div class=item-content>
                            <h4 class=headline-lato>Water Baptism</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="item-footer clearfix">
                              <div class=footer-content>
                                <div class="wrap clearfix"> <i class="fa fa-clock-o"></i> <span>April 1, 2021 at 10:00
                                    am </span> </div>
                                <div class="wrap clearfix"> <i class="fa fa-map-marker"></i> <span>State Route H, Saint
                                    Louis, MO, USA </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=figure>
                        <div class="item clearfix"> <a class=item-img href=event_details.php> <img src=images/gallery/galleryP3.jpg alt=image> </a>
                          <div class=item-content>
                            <h4 class=headline-lato>Water Baptism</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="item-footer clearfix">
                              <div class=footer-content>
                                <div class="wrap clearfix"> <i class="fa fa-clock-o"></i> <span>April 1, 2021 at 10:00
                                    am </span> </div>
                                <div class="wrap clearfix"> <i class="fa fa-map-marker"></i> <span>State Route H, Saint
                                    Louis, MO, USA </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
            <aside class=sidebar>
              <div class=item-menu>
                <div class=search_box> <input type=text placeholder=search class=searchinput> <a href=# class=search-btn><i class="fa fa-search"></i></a> </div>
              </div>
              <div class=item-menu>
                <div class=item-menu-wrap>
                  <h5>Evénements</h5>
                  <ul class=catagory>
                    <li><a>Enfants</a></li>
                    <li><a>Classes</a></li>
                    <li><a>Communauté</a></li>
                    <li><a>Santé</a></li>
                    <li><a>Plus</a></li>
                  </ul>
                </div>
              </div>
              
              <div class=item-menu>
                <div class=item-menu-wrap>
                  <h5>photo</h5>
                  <ul class="item-photo clearfix">
                    <li><a><img src=images/photo/footer-img2.jpg alt=image></a></li>
                    <li><a><img src=images/photo/footer-img1.jpg alt=image></a></li>
                    <li><a><img src=images/photo/jesus.jpg alt=image></a></li>
                    <li><a><img src=images/photo/jesus1.jpg alt=image></a></li>
                    <li><a><img src=images/photo/content3.jpg alt=image></a></li>
                    <li><a><img src=images/photo/jesus2.jpg alt=image></a></li>
                    <li><a><img src=images/photo/jesus3.jpg alt=image></a></li>
                    <li><a><img src=images/photo/jesus.jpg alt=image></a></li>
                    <li><a><img src=images/photo/footer-img2.jpg alt=image></a></li>
                  </ul>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
    <section class=quotation>
            <div class=container>
                <div class=row>
                    <h5>Le projet l'association des batisseurs et entrepreneurs chrétiens pour le dévéloppement social, est une initiative de:</h5>
                    <p>Mr. TAKALA TINGUEU Martial Roméo</p>
                </div>
            </div>
        </section>
    <footer>
      <div class=container>
        <div class=row>
          <div class="row left">
            <div class=why>
              <h4>Edition 1ère</h4>
              <p>Foire internationale de l'entrepreneuriat chretien</p>
              <p> Esplanade de la maison du parti de Bonanjo</p>
              <a href=contact_us.php class="btn trans-btn">Contact</a>
            </div>
            <div class=pages>
              <h4>Pages</h4>
              <ul>
                <li><a href=index.php>Accueil</a></li>
                <li><a href=aboutus.php>A propos</a></li>
                <li><a href=sermons.php>Catalogue</a></li>
                <li><a href=event.php>Actualités</a></li>
                <li><a href=blog.php>Partenaires</a></li>
                <li><a href=contact_us.php>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="row right">
            <div class=contact>
              <h4>Contact</h4>
              <p>Espalanade de la maison,<br>du parti de Bonanjo,<br>Douala - Cameroun</p>
              <p>Téléphone: +237 675 40 72 40<br>Mail: fiec237@yahoo.com</p>
            </div>
            <div class=recent>
            <h4>
                                ABECDES
                            </h4>
                            <div class="figure row">
                                <div> <a href="abecdes.php">
                                        <img src=images/logoassociation.png alt=image>

                                    </a> </div>
                                <div class=figcaption>

                                    <p>
                                        <a href="abecdes.php">
                                            <strong> Association des Batisseurs <br> et Entrepreneurs Chretiens pour le Dévéloppement <br> Sociale</strong>
                                        </a>

                                    </p>
                                </div>
                            </div>
              <div class="figure row">
                <div> <img src=images/footer-img2.jpg height=73 width=83> </div>
                <div class=figcaption>
                  <h5 class=heading><a href=#>Jésus est la vigne pure</a></h5>
                  <h5 class=date>April 10, 2021 </h5>
                  <p>Lorem Ipsum is simply dummy</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h6>&copy; CopyRight 2021 FIEC Site <a href=www.fiec.cm><span>www.fiec.cm</span></a></h6>
      </div>
    </footer>
  </div>
  <script src=scripts/vendor.js></script>
  <script src=scripts/plugins.js></script>
  <script src=scripts/main.js></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
  <script>
    var map;

    function initialize() {
      var mapOptions = {
        zoom: 12,
        scrollwheel: false,
        center: new google.maps.LatLng(37.4538889, -122.1811111),
        panControl: false,
        zoomControl: false,
        styles: [{
            'stylers': [{
              'hue': '#dd0d0d'
            }, {
              saturation: -100
            }]
          },
          {
            'featureType': 'road.arterial',
            'elementType': 'labels',
            'stylers': [{
              'visibility': 'off'
            }]
          },
          {
            'featureType': 'poi.business',
            'elementType': 'geometry',
            'stylers': [{
                'lightness': 100
              },
              {
                'visibility': 'simplified'
              }
            ]
          }
        ]
      };
      var contentString = '<div id="content-mapss">' +
        '<div id="siteNotice">' +
        '</div>' +
        '<h1 class="headline-fouri">cross</h1>' +
        '<div id="bodyContent">' +
        '<p>' + '<i class="fa fa-map-marker map-icon">' + '</i>' + '<span>' + 'Opposite Croma Street, Block 36, Jubilee Hills, San Diego  804538' + '</span>' +
        '</p>' +
        '<p>' + '<i class="fa fa-phone map-icon">' + '</i>' + '<span>' + '888-2354-8885' + '</span>' +
        '</p>' +
        '<p>' + '<i class="fa fa-envelope map-icon">' + '</i>' + '<span>' + '888-2354-8885' + '</span>' +
        '</p>'


      '</div>' +
      '</div>';

      map = new google.maps.Map(document.getElementById('map-wrapper'), mapOptions);
      var image = '../images/mapIcon.png';
      var myLatLng = new google.maps.LatLng(37.4538889, -122.1811111);
      var beachMarker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image
      });

      var infowindow = new google.maps.InfoWindow({
        content: contentString
      });

      google.maps.event.addListener(beachMarker, 'click', function() {
        infowindow.open(map, beachMarker);
      });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
</body>

</html>