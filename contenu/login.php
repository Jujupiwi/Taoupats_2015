<?php
include 'param.php';
// on se connecte � MySQL et a la base
$mysqli = new mysqli($serv, $login, $pwd, $data);
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion � MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="description" content="Club de Foot des Taoupats de Daux"/>
    <meta name="keywords" content="taoupats, Taoupats, daux, Daux, foot, Foot, Club, club"/>
    <title>Taoupats de Daux</title>
    <!-- Styles +++++++++++++ -->
    <link href="../scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="../scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet"
          type="text/css"/>
    <link href="../scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet"
          type="text/css"/>
    <!--[if lt IE 8]>
    <link href="../scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet"
          type="text/css"/>
    <link href="../scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet"
          type="text/css"/>
    <![endif]-->
    <link rel="stylesheet" href="../scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
    <link rel="stylesheet" href="../scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="../scripts/wookmark/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="../scripts/yoxview/yoxview.css" rel="stylesheet" type="text/css"/>
    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">

    <link href="../styles/custom.css" rel="stylesheet" type="text/css"/>
    <script src="../email/validation.js" type="text/javascript"></script>
</head>
<body style="margin-top: 200px;">
<?php
// on cr�e la requ�te SQL
$sql = "select login, auto, prenom, password from user where login = '$_POST[user]'";

$requete = $mysqli->query($sql) or die('Erreur SQL !<br>' . $sql . '<br>' . mysql_error());
$row = $requete->fetch_assoc();

if ($row['password'] != $_POST['password'] || $row['login'] != $_POST['user']) {
    ?>
    <div class="container">
        <div class="row-fluid">
            <div class="offset3 span6">
                <center>
                    <div class="text-error">
                        <h4>
                            <strong><span id="stylee">Erreur</span> : Mauvais Login ou Mot de passe!!</strong>
                            <strong>Vous allez etre redirige dans 3 secondes ...</strong>
                        </h4>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <?php
    header("Refresh: 3;URL=../sondage-mobile.php");
} else {
    if ($login == 'root') {
    } else {
        $sujet = 'Login par : ';
        $sujet .= $row['prenom'];
        $message = 'Connexion aux sondages de ce user';
        $destinataire = 'julien_guerrin@yahoo.fr';
        $headers = "Content-Type: text/html; charset=\"iso-8859-1\"";
        if (mail($destinataire, $sujet, $message, $headers)) {
        } else {
            echo "Une erreur c'est produite lors de l'envois de l'email.";
        }
    }
    if ($row['auto'] != 'O') {
        ?>
        <div class="container">
            <div class="row-fluid">
                <div class="offset3 span6">
                    <center>
                        <div class="text-success">
                            <h4>
                                <strong>Vous n'avez pas recu la confirmation par mail!! Veuillez patienter... </strong>
                                <br> <br> <strong>Vous allez etre redirige dans 5 secondes ...</strong>
                            </h4>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <?php
        header("Refresh: 5;URL=../sondage-mobile.php");
    } else {
        ?>
        <div class="container">
            <div class="row-fluid">
                <div class="offset3 span6">
                    <center>
                        <div class="text-success">
                            <h4>
                                <strong>Bienvenue </strong><span id="stylee"><?php echo $row['prenom']; ?></span>.
                                <br> <br> <strong>Vous allez etre redirige dans 3 secondes ...</strong>
                            </h4>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <?php
        header("Refresh: 3;URL=../sondages.php?user=$_POST[user]");
    }
}
?>
</body>
</html>
