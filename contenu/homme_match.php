<?php
include 'param.php';
// on se connecte � MySQL et a la base
$mysqli = new mysqli($serv, $login, $pwd, $data);
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion � MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//variables
$ip = $_SERVER['REMOTE_ADDR'];
$isVoted = 0;
$arrayResult = array();
$total = 0;
if (isset($_GET['user'])) {
    $login_user = $_GET['user'];
} else {
    $login_user = '';
}


if ($login_user == '') {
    // on envoie la requ�te
    $res = $mysqli->query("select ip from sondage where nom_sondage = '$match'");
    while ($row = $res->fetch_assoc()) {
        if ($row['ip'] == $ip) {
            $isVoted = 1;
        }
    }
} else {
    // on envoie la requ�te
    $res = $mysqli->query("select ip, login from sondage where nom_sondage = '$match'");
    while ($row = $res->fetch_assoc()) {
        if ($row['login'] == $login_user || $row['ip'] == $ip) {
            $isVoted = 1;
        }
    }
}

for ($i = 0; $i < $nbJoueurs; $i++) {
    $sqlcount = "select count(choix) from sondage where nom_sondage = '$match' and choix='$array[$i]';";
    $requete = $mysqli->query($sqlcount) or die('Erreur SQL !<br>' . $sqlcount . '<br>' . mysql_error());
    $row = $requete->fetch_array();
    $total = $total + $row[0];
    $arrayResult[$i] = $row[0];
}

// ***************************************************************************************************************************
if ($sondage == 'O') {
    if ($isVoted == 1) {
        echo "<h4>Villeneuve</h4>";
        if ($login_user == '') {
            echo "<p>Vous avez déjà répondu au sondage</p>";
        } else {
            echo "<p>Vous avez déjà répondu au sondage : $login_user</p>";
        }
        ?>
        <p>Voici les resultats</p>
        <br>
        <div class="span12 visible-desktop">
            <table
                class="table">
                <thead>
                <tr>
                    <th>Equipe</th>
                    <th width="55%">Progression</th>
                    <th>%</th>
                    <th>Nb Votes : <?php echo $total; ?>
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php for ($i = 0; $i < $nbJoueurs; $i++) { ?>
                    <tr>
                        <td><?php echo $array[$i]; ?></td>
                        <td>
                            <div class="progress progress-striped active">
                                <?php if ($arrayResult[$i] > 3) { ?>
                                    <div class="bar bar-success"
                                         style="width: <?php echo $arrayResult[$i] * 100 / $total; ?>%;"></div>
                                <?php } else if ($arrayResult[$i] == 3) { ?>
                                    <div class="bar bar-info"
                                         style="width: <?php echo $arrayResult[$i] * 100 / $total; ?>%;"></div>
                                <?php } else if ($arrayResult[$i] == 2) { ?>
                                    <div class="bar bar-warning"
                                         style="width: <?php echo $arrayResult[$i] * 100 / $total; ?>%;"></div>
                                <?php } else { ?>
                                    <div class="bar bar-danger"
                                         style="width: <?php echo $arrayResult[$i] * 100 / $total; ?>%;"></div>
                                <?php } ?>
                            </div>
                        </td>
                        <td><?php echo round($arrayResult[$i] * 100 / $total); ?> %</td>
                        <td><?php
                            echo $arrayResult[$i];
                            if ($arrayResult[$i] == 1 || $arrayResult[$i] == 0) {
                                echo " vote";
                            } else {
                                echo " votes";
                            }
                            ?>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="span12 hidden-desktop">
            <table
                class="table">
                <thead>
                <tr>
                    <th>Equipe</th>
                    <th>Progression</th>
                </tr>
                </thead>
                <tbody>
                <?php for ($i = 0; $i < $nbJoueurs; $i++) { ?>
                    <tr>
                        <td><?php echo $array[$i]; ?></td>
                        <td>
                            <div class="progress progress-striped active">
                                <?php if ($arrayResult[$i] > 3) { ?>
                                    <div class="bar bar-success"
                                         style="width: <?php echo $arrayResult[$i] * 100 / $total; ?>%;"></div>
                                <?php } else if ($arrayResult[$i] == 3) { ?>
                                    <div class="bar bar-info"
                                         style="width: <?php echo $arrayResult[$i] * 100 / $total; ?>%;"></div>
                                <?php } else if ($arrayResult[$i] == 2) { ?>
                                    <div class="bar bar-warning"
                                         style="width: <?php echo $arrayResult[$i] * 100 / $total; ?>%;"></div>
                                <?php } else { ?>
                                    <div class="bar bar-danger"
                                         style="width: <?php echo $arrayResult[$i] * 100 / $total; ?>%;"></div>
                                <?php } ?>
                            </div>
                        </td>
                        <td><?php  echo $arrayResult[$i]; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    <?php } else { ?>
        <form class="form-horizontal well" action="contenu/insert.php"
              method="post">
        <div class="row-fluid">
            <div class="offset5 span7">
                <div class="visible-desktop">
                    <img alt="90x150" data-src="bootstrap/js/bootstrap.js/90x150"
                         style="width: 90px; height: 150px;"
                         src="images/team/<?php echo $joueur1; ?>.jpg">

                </div>
                <div class="" id="name_sondage">
                    <label class="radio">
                        <input type="radio" name="optionsRadios" id="optionsRadios1"
                               value="<?php echo $joueur1; ?>" checked> <?php echo $joueur1; ?>
                    </label>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span3">
                <div class="visible-desktop">
                    <img alt="90x150" data-src="bootstrap/js/bootstrap.js/90x150"
                         style="width: 90px; height: 150px;"
                         src="images/team/<?php echo $joueur2; ?>.jpg">

                </div>
                <div class="" id="name_sondage">
                    <label class="radio">
                        <input type="radio" name="optionsRadios" id="optionsRadios1"
                               value="<?php echo $joueur2; ?>" checked> <?php echo $joueur2; ?>
                    </label>
                </div>
            </div>
            <div class="span3">
                <div class="visible-desktop">
                    <img alt="90x150" data-src="bootstrap/js/bootstrap.js/90x150"
                         style="width: 90px; height: 150px;"
                         src="images/team/<?php echo $joueur4; ?>.jpg">

                </div>
                <div class="" id="name_sondage">
                    <label class="radio">
                        <input type="radio" name="optionsRadios" id="optionsRadios1"
                               value="<?php echo $joueur4; ?>" checked> <?php echo $joueur4; ?>
                    </label>
                </div>
            </div>
            <div class="span3">
                <div class="visible-desktop">
                    <img alt="90x150" data-src="bootstrap/js/bootstrap.js/90x150"
                         style="width: 90px; height: 150px;"
                         src="images/team/<?php echo $joueur5; ?>.jpg">

                </div>
                <div class="" id="name_sondage">
                    <label class="radio">
                        <input type="radio" name="optionsRadios" id="optionsRadios1"
                               value="<?php echo $joueur5; ?>" checked> <?php echo $joueur5; ?>
                    </label>
                </div>
            </div>
            <div class="span3">
                <div class="visible-desktop">
                    <img alt="90x150" data-src="bootstrap/js/bootstrap.js/90x150"
                         style="width: 90px; height: 150px;"
                         src="images/team/<?php echo $joueur3; ?>.jpg">

                </div>
                <div class="" id="name_sondage">
                    <label class="radio">
                        <input type="radio" name="optionsRadios" id="optionsRadios1"
                               value="<?php echo $joueur3; ?>" checked> <?php echo $joueur3; ?>
                    </label>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="offset1 span3">
                <div class="visible-desktop">
                    <img alt="90x150" data-src="bootstrap/js/bootstrap.js/90x150"
                         style="width: 90px; height: 150px;"
                         src="images/team/<?php echo $joueur6; ?>.jpg">

                </div>
                <div class="" id="name_sondage">
                    <label class="radio">
                        <input type="radio" name="optionsRadios" id="optionsRadios1"
                               value="<?php echo $joueur6; ?>" checked> <?php echo $joueur6; ?>
                    </label>
                </div>
            </div>
            <div class="span3">
                <div class="visible-desktop">
                    <img alt="90x150" data-src="bootstrap/js/bootstrap.js/90x150"
                         style="width: 90px; height: 150px;"
                         src="images/team/<?php echo $joueur8; ?>.jpg">

                </div>
                <div class="" id="name_sondage">
                    <label class="radio">
                        <input type="radio" name="optionsRadios" id="optionsRadios1"
                               value="<?php echo $joueur8; ?>" checked> <?php echo $joueur8; ?>
                    </label>
                </div>
            </div>
            <div class="span4">
                <div class="visible-desktop">
                    <img alt="90x150" data-src="bootstrap/js/bootstrap.js/90x150"
                         style="width: 90px; height: 150px;"
                         src="images/team/<?php echo $joueur10; ?>.jpg">

                </div>
                <div class="" id="name_sondage">
                    <label class="radio">
                        <input type="radio" name="optionsRadios" id="optionsRadios1"
                               value="<?php echo $joueur10; ?>" checked> <?php echo $joueur10; ?>
                    </label>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="offset1 span3">
                <div class="visible-desktop">
                    <img alt="90x150" data-src="bootstrap/js/bootstrap.js/90x150"
                         style="width: 90px; height: 150px;"
                         src="images/team/<?php echo $joueur11; ?>.jpg">

                </div>
                <div class="" id="name_sondage">
                    <label class="radio">
                        <input type="radio" name="optionsRadios" id="optionsRadios1"
                               value="<?php echo $joueur11; ?>" checked> <?php echo $joueur11; ?>
                    </label>
                </div>
            </div>
            <div class="span3">
                <div class="visible-desktop">
                    <img alt="90x150" data-src="bootstrap/js/bootstrap.js/90x150"
                         style="width: 90px; height: 150px;"
                         src="images/team/<?php echo $joueur9; ?>.jpg">

                </div>
                <div class="" id="name_sondage">
                    <label class="radio">
                        <input type="radio" name="optionsRadios" id="optionsRadios1"
                               value="<?php echo $joueur9; ?>" checked> <?php echo $joueur9; ?>
                    </label>
                </div>
            </div>
            <div class="span4">
                <div class="visible-desktop">
                    <img alt="90x150" data-src="bootstrap/js/bootstrap.js/90x150"
                         style="width: 90px; height: 150px;"
                         src="images/team/<?php echo $joueur7; ?>.jpg">

                </div>
                <div class="" id="name_sondage">
                    <label class="radio">
                        <input type="radio" name="optionsRadios" id="optionsRadios1"
                               value="<?php echo $joueur7; ?>" checked> <?php echo $joueur7; ?>
                    </label>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row-fluid">
            <div class="span2">
                <div class="visible-desktop">
                    <img alt="90x150" data-src="bootstrap/js/bootstrap.js/90x150"
                         style="width: 90px; height: 150px;"
                         src="images/team/<?php echo $joueur12; ?>.jpg">

                </div>
                <div class="" id="name_sondage">
                    <label class="radio">
                        <input type="radio" name="optionsRadios" id="optionsRadios1"
                               value="<?php echo $joueur12; ?>" checked> <?php echo $joueur12; ?>
                    </label>
                </div>
            </div>
            <div class="span2">
                <div class="visible-desktop">
                    <img alt="90x150" data-src="bootstrap/js/bootstrap.js/90x150"
                         style="width: 90px; height: 150px;"
                         src="images/team/<?php echo $joueur13; ?>.jpg">

                </div>
                <div class="" id="name_sondage">
                    <label class="radio">
                        <input type="radio" name="optionsRadios" id="optionsRadios1"
                               value="<?php echo $joueur13; ?>" checked> <?php echo $joueur13; ?>
                    </label>
                </div>
            </div>
            <div class="span2">
                <div class="visible-desktop">
                    <img alt="90x150" data-src="bootstrap/js/bootstrap.js/90x150"
                         style="width: 90px; height: 150px;"
                         src="images/team/<?php echo $joueur14; ?>.jpg">

                </div>
                <div class="" id="name_sondage">
                    <label class="radio">
                        <input type="radio" name="optionsRadios" id="optionsRadios1"
                               value="<?php echo $joueur14; ?>" checked> <?php echo $joueur14; ?>
                    </label>
                </div>
            </div>
        </div>
        <br>
        <center>
            <?php
            if ($login_user != '') {
                echo "<input type='hidden' name='login' value='$login_user'/>";
            }
            ?>
            <input type="submit" name="valider" value="Envoyer"
                   class="btn btn-inverse"/>
        </center>
        </form>
    <?php
    }
} else {
    echo "<h5 style='margin-bottom: 200px;'>A venir ...</h5>";
} ?>