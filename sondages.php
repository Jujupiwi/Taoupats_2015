﻿<?php
include 'contenu/param.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Taoupats De Daux</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Site du club de foot des taoupats de daux">
    <meta name="keywords" content="Foot,Daux,Taoupats">
    <meta name="author" content="Julien Guerrin">
    <link rel="shortcut icon" href="favicon.ico">

    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet"
          type="text/css"/>
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet"
          type="text/css"/>
    <!--[if lt IE 8]>
    <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet"
          type="text/css"/>
    <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet"
          type="text/css"/>
    <![endif]-->
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="scripts/wookmark/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="scripts/yoxview/yoxview.css" rel="stylesheet" type="text/css"/>
    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">

    <link href="styles/custom.css" rel="stylesheet" type="text/css"/>
    <script src="email/validation.js" type="text/javascript"></script>
</head>
<body id="pageBody">

<div id="divBoxed" class="container">

    <div class="transparent-bg"
         style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
        <div class="row-fluid">
            <div class="span12">

                <div id="divLogo" class="pull-left">
                    <a href="index.html" id="divSiteTitle">TAOUPATS</a><br/>
                    <a href="index.html" id="divTagLine">Club de foot de Daux</a>
                </div>

                <div id="divMenuRight" class="pull-right">
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-inverse"
                                data-toggle="collapse"
                                data-target=".nav-collapse">
                            MENU <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                                <li><a href="index.html">Accueil</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle">Saison 2014-2015 <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="calendrier.html">Calendrier</a></li>
                                        <li><a href="classement.html">Classement</a></li>
                                        <li><a href="stats.php">Stats</a></li>
                                    <li><a href="matchs.html">Dernier match</a></li>
                                    <li><a href="interviews.html">Interviews</a></li>
                                        <li><a href="trombi.html">Trombi</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle">Archives <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="archivesondages.html">Sondages</a></li>
                                        <li><a href="interviews.php">Interviews</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle">Saison 2012-2013&nbsp;&raquo;</a>
                                            <ul class="dropdown-menu sub-menu">
                                                <li><a href="sondages2012.html">Sondages</a></li>
                                                <li><a href="calendrier2012.html">Calendrier</a></li>
                                                <li><a href="classement2012.html">Classement</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle">Saison 2013-2014&nbsp;&raquo;</a>
                                            <ul class="dropdown-menu sub-menu">
                                                <li><a href="sondages2013.html">Sondages</a></li>
                                                <li><a href="calendrier2013.html">Calendrier</a></li>
                                                <li><a href="classement2013.html">Classement</a></li>
                                                <li><a href="stats2013.html">Stats</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="active"><a href="#">Sondages</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle">Photos<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="saison2015.html">Saison 2014-2015</a></li>
                                    <li><a href="photos.html">D'aujourd'hui</a></li>
                                        <li><a href="photoshier.html">D'hier</a></li>
                                        <li><a href="photos40ans.html">Les 40 ans</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="contentArea">

        <div class="divPanel notop page-content">

            <div class="row-fluid">
                <!--Edit Main Content Area here-->
                <div class="span12" id="divMain">
                    <h3>Sondage de la semaine : <?php echo $opposition;?></h3>

                    <?php include 'contenu/homme_match.php'; ?>

                </div>
                <!--End Main Content-->
            </div>

            <div id="footerInnerSeparator"></div>
        </div>
    </div>

    <div id="footerOuterSeparator"></div>

    <div id="divFooter" class="footerArea">

        <div class="divPanel">

            <div class="row-fluid">
                <div class="span3" id="footerArea1">

                    <h3>TAOUPATS DE DAUX</h3>

                    <p>Le site vous permet de consulter :</p>

                    <p>
                        <a href="classement.html" title="Classement">Le classement</a><br/>
                        <a href="calendrier.html" title="Calendrier">Le calendrier</a><br/>
                        <a href="stats.php" title="Statistiques">Les statistiques</a><br/>
                        <a href="interviews.php" title="Interviews">Les interviews</a><br/>
                        <a href="#" title="Sondages">Les sondages</a><br/>
                        <a href="photos.html" title="Photos">Les photos</a>
                    </p>

                </div>
                <div class="span6" id="footerArea2">

                    <h3>LE FIL DE NEWS</h3>
                    <p>
                        11/08 : Reprise de l'entrainement Lundi 18 Aout.<br/>
                    </p>
                    <p>
                        11/08 : Le tirage au sort des poules a été effectué par nos amis du district. Des derbys et très
                        peu de déplacements.<br/>
                    </p>
                    <p>
                        11/08 : Meilleur passeur 2013-2014 : Enzo (8 passes)<br/>
                    </p>
                    <p>
                        11/08 : Meilleur buteur 2013-2014 : Baptiste (12 buts)<br/>
                    </p>
                    <p>
                        11/08 : Les chiffres de la saison 2013-2014 : 4ème place, 25 matchs joués, 11 victoires, 3 nuls,
                        11 défaites, 49 buts marqués, 44 encaissés ...<br/>
                    </p>

                </div>
                <div class="span3" id="footerArea4">

                    <h3>Contact</h3>

                    <ul id="contact-info">
                        <li>
                            <i class="general foundicon-phone icon"></i>
                            <span class="field">Tel:</span>
                            <br/>
                            06 12 52 70 04
                        </li>
                        <li>
                            <i class="general foundicon-mail icon"></i>
                            <span class="field">Email:</span>
                            <br/>
                            <a href="mailto:josephbenedet@yahoo.fr" title="Email">josephbenedet@yahoo.fr</a>
                        </li>
                        <li>
                            <i class="general foundicon-home icon" style="margin-bottom:50px"></i>
                            <span class="field">Addresse:</span>
                            <br/>
                            46 A RUE LUCIEN BABONNEAU<br>
                            31700 DAUX
                        </li>
                    </ul>

                </div>
            </div>
            <div class="row-fluid">
                <div class="span10">
                    <p class="social_bookmarks">
                        <a href="#"><i class="social foundicon-facebook"></i> Facebook</a>
                        <a href=""><i class="social foundicon-twitter"></i> Twitter</a>
                        <a href=""><i class="social foundicon-google-plus"></i> Google Plus</a>
                    </p>
                </div>
                <div class="span2">
                    <p class="copyright">
                        @Jujupiwi.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
<br/><br/><br/>

<script src="scripts/jquery.min.js" type="text/javascript"></script>
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-39140201-1']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>
<script src="scripts/wookmark/js/jquery.wookmark.js" type="text/javascript"></script>
<script type="text/javascript">$(window).load(function () {
        var options = {autoResize: true, container: $('#gridArea'), offset: 10};
        var handler = $('#tiles li');
        handler.wookmark(options);
        $('#tiles li').each(function () {
            var imgm = 0;
            if ($(this).find('img').length > 0)imgm = parseInt($(this).find('img').not('p img').css('margin-bottom'));
            var newHeight = $(this).find('img').height() + imgm + $(this).find('div').height() + $(this).find('h4').height() + $(this).find('p').not('blockquote p').height() + $(this).find('iframe').height() + $(this).find('blockquote').height() + 5;
            if ($(this).find('iframe').height()) newHeight = newHeight + 15;
            $(this).css('height', newHeight + 'px');
        });
        handler.wookmark(options);
        handler.wookmark(options);
    });</script>
<script src="scripts/yoxview/yox.js" type="text/javascript"></script>
<script src="scripts/yoxview/jquery.yoxview-2.21.js" type="text/javascript"></script>
<script type="text/javascript">$(document).ready(function () {
        $('.yoxview').yoxview({autoHideInfo: false, renderInfoPin: false, backgroundColor: '#ffffff', backgroundOpacity: 0.8, infoBackColor: '#000000', infoBackOpacity: 1});
        $('.yoxview a img').hover(function () {
            $(this).animate({opacity: 0.7}, 300)
        }, function () {
            $(this).animate({opacity: 1}, 300)
        });
    });</script>


</body>
</html>