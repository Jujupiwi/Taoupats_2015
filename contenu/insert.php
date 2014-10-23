<?php
include 'param.php';
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="description" content="Club de Foot des Taoupats de Daux"/>
    <meta name="keywords"
          content="taoupats, Taoupats, daux, Daux, foot, Foot, Club, club"/>
    <title>Taoupats de Daux</title>
    <!-- Styles
        +++++++++++++ -->
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
    <style>
        #stylee {
            color: red;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 120%;
        }
    </style>
</head>
<body>
<?php
$mysqli = new mysqli($serv, $login, $pwd, $data);
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion � MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
if (isset($_POST['login'])) {
    $login_user = $_POST['login'];
} else {
    $login_user = '';
}

// on cr�e la requ�te SQL
if ($login_user == '') {
    $sql = "INSERT INTO sondage (nom_sondage, choix, ip) VALUES ('$match','$_POST[optionsRadios]','$_SERVER[REMOTE_ADDR]');";
} else {
    $sql = "INSERT INTO sondage (nom_sondage, choix, ip, login) VALUES ('$match','$_POST[optionsRadios]','$_SERVER[REMOTE_ADDR]', '$login_user');";
}


// on envoie la requête
$result = $mysqli->query($sql) or die('Erreur SQL !<br>' . $sql . '<br>' . mysql_error());
if ($login == 'root') {
} else {
    $sujet = 'Vote effectue par : ';
    $sujet .= $_SERVER['REMOTE_ADDR'];
    $message = 'Vote effectue pour : ';
    $message .= $_POST['optionsRadios'];
    $destinataire = 'julien_guerrin@yahoo.fr';
    $headers = "Content-Type: text/html; charset=\"iso-8859-1\"";
    if (mail($destinataire, $sujet, $message, $headers)) {
    } else {
        echo "Une erreur c'est produite lors de l'envois de l'email.";
    }
}
?>
<br>
<br>
<br>
<br>

<div class="row-fluid">
    <center>
        <div class="text-success">
            <h4>
                <strong>Votre vote est pris en compte!</strong> Merci d'avoir vote
                pour <span id="stylee"><?php echo $_POST['optionsRadios']; ?> </span>.
                <br> <br> <strong>Vous allez etre redirige dans 3 secondes ...</strong>
            </h4>
        </div>
    </center>
</div>
<br> <br>

<div id="progress4" class="centrage"></div>
<?php
if ($login_user == '') {
    header("Refresh: 3;URL=../sondages.php");
} else {
    header("Refresh: 3;URL=../sondages.php?user=$login_user");
}
?>
</body>
</html>
