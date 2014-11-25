<?php
$serv = 'localhost';
$user = 'root';
$pwd = 'audrey';
$data = 'taoupats';
$mysqli = new mysqli($serv, $user, $pwd, $data);
if ($mysqli->connect_errno) {
    $error = "Echec lors de la connexion a MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
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
    <!-- Remove this Robots Meta Tag, to allow indexing of site -->

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

    <link href="scripts/carousel/style.css" rel="stylesheet" type="text/css"/>
    <link href="scripts/camera/css/camera.css" rel="stylesheet" type="text/css"/>

    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">
    <style>
        td {
            text-align: center !important;
        }
    </style>

    <link href="styles/custom.css" rel="stylesheet" type="text/css"/>
</head>
<body id="pageBody">

<div class="contentArea">
    <div class="divPanel notop page-content">
        <div class="row-fluid">
            <h3>Interleague Saison 2</h3>
            <!--Edit Main Content Area here-->
            <div class="span8" id="divMain">
                <table class="table table-bordered table-striped table-condensed table-hover">
                    <thead>
                    <tr style="background-color: #FFC001; font-weight: bold;">
                        <td>N°</td>
                        <td style="width: 20%">DIVISION 1</td>
                        <td>PSN</td>
                        <td>ATT</td>
                        <td>MIL</td>
                        <td>DEF</td>
                        <td>MOYENNE</td>
                        <td>ETOILE</td>
                        <td>OBJECTIF</td>
                       <!-- <td>ATTEINT?</td>-->
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        $test = "select * from division1 order by id;";
                        $sql = $mysqli->query($test);
                        while ($row = $sql->fetch_array()) {
                            $rows[] = $row;
                        }
                        foreach ($rows as $ligne) {
                            echo "<tr>";
                            echo "<td style='background-color: #C5D9F1'>";
                            echo $ligne[0];
                            echo "</td>";
                            echo "<td style='background-color: #C5D9F1; text-align: left !important;'><img style='width: 25px;' src='tournoi/images/$ligne[9].png'/>&nbsp;&nbsp;&nbsp;";
                            echo $ligne[1];
                            echo "</td>";
                            echo "<td style='background-color: #C5D9F1'>";
                            echo $ligne[2];
                            echo "</td>";
                            echo "<td style='background-color: #C5D9F1'>";
                            echo $ligne[3];
                            echo "</td>";
                            echo "<td style='background-color: #C5D9F1'>";
                            echo $ligne[4];
                            echo "</td>";
                            echo "<td style='background-color: #C5D9F1'>";
                            echo $ligne[5];
                            echo "</td>";
                            echo "<td style='background-color: #C5D9F1'>";
                            echo $ligne[6];
                            echo "</td>";
                            echo "<td style='background-color: #C5D9F1'>";
                            echo $ligne[7];
                            echo "</td>";
                            echo "<td style='background-color: #C5D9F1'>";
                            echo $ligne[8];
                            echo "</td>";
                            /*echo "<td style='background-color: #C5D9F1'>";
                            echo $ligne[10];
                            echo "</td>";*/
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>

                <table class="table table-bordered table-striped table-condensed table-hover">
                    <thead>
                    <tr style="background-color: #FFC001; font-weight: bold;">
                        <td>N°</td>
                        <td style="width: 20%">DIVISION 2</td>
                        <td>PSN</td>
                        <td>ATT</td>
                        <td>MIL</td>
                        <td>DEF</td>
                        <td>MOYENNE</td>
                        <td>ETOILE</td>
                        <td>OBJECTIF</td>
                     <!--   <td>ATTEINT?</td>-->
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $test2 = "select * from division2 order by id;";
                    $sql2 = $mysqli->query($test2);
                    while ($row2 = $sql2->fetch_array()) {
                        $rows2[] = $row2;
                    }
                    foreach ($rows2 as $ligne) {
                        echo "<tr>";
                        echo "<td style='background-color: #F2DCDB'>";
                        echo $ligne[0];
                        echo "</td>";
                        echo "<td style='background-color: #F2DCDB; text-align: left !important;'><img style='width: 25px;' src='tournoi/images/$ligne[9].png'/>&nbsp;&nbsp;&nbsp;";
                        echo $ligne[1];
                        echo "</td>";
                        echo "<td style='background-color: #F2DCDB'>";
                        echo $ligne[2];
                        echo "</td>";
                        echo "<td style='background-color: #F2DCDB'>";
                        echo $ligne[3];
                        echo "</td>";
                        echo "<td style='background-color: #F2DCDB'>";
                        echo $ligne[4];
                        echo "</td>";
                        echo "<td style='background-color: #F2DCDB'>";
                        echo $ligne[5];
                        echo "</td>";
                        echo "<td style='background-color: #F2DCDB'>";
                        echo $ligne[6];
                        echo "</td>";
                        echo "<td style='background-color: #F2DCDB'>";
                        echo $ligne[7];
                        echo "</td>";
                        echo "<td style='background-color: #F2DCDB'>";
                        echo $ligne[8];
                        echo "</td>";
                        /*echo "<td style='background-color: #F2DCDB'>";
                        echo $ligne[10];
                        echo "</td>";*/
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>

                <table class="table table-bordered table-striped table-condensed table-hover">
                    <thead>
                    <tr style="background-color: #FFC001; font-weight: bold;">
                        <td>N°</td>
                        <td style="width: 20%">DIVISION 3</td>
                        <td>PSN</td>
                        <td>ATT</td>
                        <td>MIL</td>
                        <td>DEF</td>
                        <td>MOYENNE</td>
                        <td>ETOILE</td>
                        <td>OBJECTIF</td>
                        <!--<td>ATTEINT?</td>-->
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $test3 = "select * from division3 order by id;";
                    $sql3 = $mysqli->query($test3);
                    while ($row3 = $sql3->fetch_array()) {
                        $rows3[] = $row3;
                    }
                    foreach ($rows3 as $ligne) {
                        echo "<tr>";
                        echo "<td style='background-color: #C4D79B'>";
                        echo $ligne[0];
                        echo "</td>";
                        echo "<td style='background-color: #C4D79B; text-align: left !important;'><img style='width: 25px;' src='tournoi/images/$ligne[9].png'/>&nbsp;&nbsp;&nbsp;";
                        echo $ligne[1];
                        echo "</td>";
                        echo "<td style='background-color: #C4D79B'>";
                        echo $ligne[2];
                        echo "</td>";
                        echo "<td style='background-color: #C4D79B'>";
                        echo $ligne[3];
                        echo "</td>";
                        echo "<td style='background-color: #C4D79B'>";
                        echo $ligne[4];
                        echo "</td>";
                        echo "<td style='background-color: #C4D79B'>";
                        echo $ligne[5];
                        echo "</td>";
                        echo "<td style='background-color: #C4D79B'>";
                        echo $ligne[6];
                        echo "</td>";
                        echo "<td style='background-color: #C4D79B'>";
                        echo $ligne[7];
                        echo "</td>";
                        echo "<td style='background-color: #C4D79B'>";
                        echo $ligne[8];
                        echo "</td>";
                       /* echo "<td style='background-color: #C4D79B'>";
                        echo $ligne[10];
                        echo "</td>";*/
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>

                <table class="table table-bordered table-striped table-condensed table-hover">
                    <thead>
                    <tr style="background-color: #FFC001; font-weight: bold;">
                        <td>N°</td>
                        <td style="width: 20%">DIVISION 4</td>
                        <td>PSN</td>
                        <td>ATT</td>
                        <td>MIL</td>
                        <td>DEF</td>
                        <td>MOYENNE</td>
                        <td>ETOILE</td>
                        <td>OBJECTIF</td>
                        <!--<td>ATTEINT?</td>-->
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $test12 = "select * from division4 order by id;";
                    $sql12 = $mysqli->query($test12);
                    while ($row12 = $sql12->fetch_array()) {
                        $rows12[] = $row12;
                    }
                    foreach ($rows12 as $ligne) {
                        echo "<tr>";
                        echo "<td style='background-color: #BCA9F5'>";
                        echo $ligne[0];
                        echo "</td>";
                        echo "<td style='background-color: #BCA9F5; text-align: left !important;'><img style='width: 25px;' src='tournoi/images/$ligne[9].png'/>&nbsp;&nbsp;&nbsp;";
                        echo $ligne[1];
                        echo "</td>";
                        echo "<td style='background-color: #BCA9F5'>";
                        echo $ligne[2];
                        echo "</td>";
                        echo "<td style='background-color: #BCA9F5'>";
                        echo $ligne[3];
                        echo "</td>";
                        echo "<td style='background-color: #BCA9F5'>";
                        echo $ligne[4];
                        echo "</td>";
                        echo "<td style='background-color: #BCA9F5'>";
                        echo $ligne[5];
                        echo "</td>";
                        echo "<td style='background-color: #BCA9F5'>";
                        echo $ligne[6];
                        echo "</td>";
                        echo "<td style='background-color: #BCA9F5'>";
                        echo $ligne[7];
                        echo "</td>";
                        echo "<td style='background-color: #BCA9F5'>";
                        echo $ligne[8];
                        echo "</td>";
                        /* echo "<td style='background-color: #C4D79B'>";
                         echo $ligne[10];
                         echo "</td>";*/
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>

                <table class="table table-bordered table-striped table-condensed table-hover">
                    <thead>
                    <tr style="background-color: #FFC001; font-weight: bold;">
                        <td>N°</td>
                        <td style="width: 20%">POULE A</td>
                        <td>PSN</td>
                        <td>ATT</td>
                        <td>MIL</td>
                        <td>DEF</td>
                        <td>MOYENNE</td>
                        <td>ETOILE</td>
                        <td>OBJECTIF</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $test4 = "select * from poulea order by id;";
                    $sql4 = $mysqli->query($test4);
                    while ($row4 = $sql4->fetch_array()) {
                        $rows4[] = $row4;
                    }
                    foreach ($rows4 as $ligne) {
                        echo "<tr>";
                        echo "<td style='background-color: #F5A9A9'>";
                        echo $ligne[0];
                        echo "</td>";
                        echo "<td style='background-color: #F5A9A9; text-align: left !important;'><img style='width: 25px;' src='tournoi/images/$ligne[9].png'/>&nbsp;&nbsp;&nbsp;";
                        echo $ligne[1];
                        echo "</td>";
                        echo "<td style='background-color: #F5A9A9'>";
                        echo $ligne[2];
                        echo "</td>";
                        echo "<td style='background-color: #F5A9A9'>";
                        echo $ligne[3];
                        echo "</td>";
                        echo "<td style='background-color: #F5A9A9'>";
                        echo $ligne[4];
                        echo "</td>";
                        echo "<td style='background-color: #F5A9A9'>";
                        echo $ligne[5];
                        echo "</td>";
                        echo "<td style='background-color: #F5A9A9'>";
                        echo $ligne[6];
                        echo "</td>";
                        echo "<td style='background-color: #F5A9A9'>";
                        echo $ligne[7];
                        echo "</td>";
                        echo "<td style='background-color: #F5A9A9'>";
                        echo $ligne[8];
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>

                <table class="table table-bordered table-striped table-condensed table-hover">
                    <thead>
                    <tr style="background-color: #FFC001; font-weight: bold;">
                        <td>N°</td>
                        <td style="width: 20%">POULE B</td>
                        <td>PSN</td>
                        <td>ATT</td>
                        <td>MIL</td>
                        <td>DEF</td>
                        <td>MOYENNE</td>
                        <td>ETOILE</td>
                        <td>OBJECTIF</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $test5 = "select * from pouleb order by id;";
                    $sql5 = $mysqli->query($test5);
                    while ($row5 = $sql5->fetch_array()) {
                        $rows5[] = $row5;
                    }
                    foreach ($rows5 as $ligne) {
                        echo "<tr>";
                        echo "<td style='background-color: #F5D0A9'>";
                        echo $ligne[0];
                        echo "</td>";
                        echo "<td style='background-color: #F5D0A9; text-align: left !important;'><img style='width: 25px;' src='tournoi/images/$ligne[9].png'/>&nbsp;&nbsp;&nbsp;";
                        echo $ligne[1];
                        echo "</td>";
                        echo "<td style='background-color: #F5D0A9'>";
                        echo $ligne[2];
                        echo "</td>";
                        echo "<td style='background-color: #F5D0A9'>";
                        echo $ligne[3];
                        echo "</td>";
                        echo "<td style='background-color: #F5D0A9'>";
                        echo $ligne[4];
                        echo "</td>";
                        echo "<td style='background-color: #F5D0A9'>";
                        echo $ligne[5];
                        echo "</td>";
                        echo "<td style='background-color: #F5D0A9'>";
                        echo $ligne[6];
                        echo "</td>";
                        echo "<td style='background-color: #F5D0A9'>";
                        echo $ligne[7];
                        echo "</td>";
                        echo "<td style='background-color: #F5D0A9'>";
                        echo $ligne[8];
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>

                <table class="table table-bordered table-striped table-condensed table-hover">
                    <thead>
                    <tr style="background-color: #FFC001; font-weight: bold;">
                        <td>N°</td>
                        <td style="width: 20%">POULE C</td>
                        <td>PSN</td>
                        <td>ATT</td>
                        <td>MIL</td>
                        <td>DEF</td>
                        <td>MOYENNE</td>
                        <td>ETOILE</td>
                        <td>OBJECTIF</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $test6 = "select * from poulec order by id;";
                    $sql6 = $mysqli->query($test6);
                    while ($row6 = $sql6->fetch_array()) {
                        $rows6[] = $row6;
                    }
                    foreach ($rows6 as $ligne) {
                        echo "<tr>";
                        echo "<td style='background-color: #F2F5A9'>";
                        echo $ligne[0];
                        echo "</td>";
                        echo "<td style='background-color: #F2F5A9; text-align: left !important;'><img style='width: 25px;' src='tournoi/images/$ligne[9].png'/>&nbsp;&nbsp;&nbsp;";
                        echo $ligne[1];
                        echo "</td>";
                        echo "<td style='background-color: #F2F5A9'>";
                        echo $ligne[2];
                        echo "</td>";
                        echo "<td style='background-color: #F2F5A9'>";
                        echo $ligne[3];
                        echo "</td>";
                        echo "<td style='background-color: #F2F5A9'>";
                        echo $ligne[4];
                        echo "</td>";
                        echo "<td style='background-color: #F2F5A9'>";
                        echo $ligne[5];
                        echo "</td>";
                        echo "<td style='background-color: #F2F5A9'>";
                        echo $ligne[6];
                        echo "</td>";
                        echo "<td style='background-color: #F2F5A9'>";
                        echo $ligne[7];
                        echo "</td>";
                        echo "<td style='background-color: #F2F5A9'>";
                        echo $ligne[8];
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>

                <table class="table table-bordered table-striped table-condensed table-hover">
                    <thead>
                    <tr style="background-color: #FFC001; font-weight: bold;">
                        <td>N°</td>
                        <td style="width: 20%">POULE D</td>
                        <td>PSN</td>
                        <td>ATT</td>
                        <td>MIL</td>
                        <td>DEF</td>
                        <td>MOYENNE</td>
                        <td>ETOILE</td>
                        <td>OBJECTIF</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $test7 = "select * from pouled order by id;";
                    $sql7 = $mysqli->query($test7);
                    while ($row7 = $sql7->fetch_array()) {
                        $rows7[] = $row7;
                    }
                    foreach ($rows7 as $ligne) {
                        echo "<tr>";
                        echo "<td style='background-color: #D0F5A9'>";
                        echo $ligne[0];
                        echo "</td>";
                        echo "<td style='background-color: #D0F5A9; text-align: left !important;'><img style='width: 25px;' src='tournoi/images/$ligne[9].png'/>&nbsp;&nbsp;&nbsp;";
                        echo $ligne[1];
                        echo "</td>";
                        echo "<td style='background-color: #D0F5A9'>";
                        echo $ligne[2];
                        echo "</td>";
                        echo "<td style='background-color: #D0F5A9'>";
                        echo $ligne[3];
                        echo "</td>";
                        echo "<td style='background-color: #D0F5A9'>";
                        echo $ligne[4];
                        echo "</td>";
                        echo "<td style='background-color: #D0F5A9'>";
                        echo $ligne[5];
                        echo "</td>";
                        echo "<td style='background-color: #D0F5A9'>";
                        echo $ligne[6];
                        echo "</td>";
                        echo "<td style='background-color: #D0F5A9'>";
                        echo $ligne[7];
                        echo "</td>";
                        echo "<td style='background-color: #D0F5A9'>";
                        echo $ligne[8];
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>

                <table class="table table-bordered table-striped table-condensed table-hover">
                    <thead>
                    <tr style="background-color: #FFC001; font-weight: bold;">
                        <td>N°</td>
                        <td style="width: 20%">POULE E</td>
                        <td>PSN</td>
                        <td>ATT</td>
                        <td>MIL</td>
                        <td>DEF</td>
                        <td>MOYENNE</td>
                        <td>ETOILE</td>
                        <td>OBJECTIF</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $test8 = "select * from poulee order by id;";
                    $sql8 = $mysqli->query($test8);
                    while ($row8 = $sql8->fetch_array()) {
                        $rows8[] = $row8;
                    }
                    foreach ($rows8 as $ligne) {
                        echo "<tr>";
                        echo "<td style='background-color: #A9F5BC'>";
                        echo $ligne[0];
                        echo "</td>";
                        echo "<td style='background-color: #A9F5BC; text-align: left !important;'><img style='width: 25px;' src='tournoi/images/$ligne[9].png'/>&nbsp;&nbsp;&nbsp;";
                        echo $ligne[1];
                        echo "</td>";
                        echo "<td style='background-color: #A9F5BC'>";
                        echo $ligne[2];
                        echo "</td>";
                        echo "<td style='background-color: #A9F5BC'>";
                        echo $ligne[3];
                        echo "</td>";
                        echo "<td style='background-color: #A9F5BC'>";
                        echo $ligne[4];
                        echo "</td>";
                        echo "<td style='background-color: #A9F5BC'>";
                        echo $ligne[5];
                        echo "</td>";
                        echo "<td style='background-color: #A9F5BC'>";
                        echo $ligne[6];
                        echo "</td>";
                        echo "<td style='background-color: #A9F5BC'>";
                        echo $ligne[7];
                        echo "</td>";
                        echo "<td style='background-color: #A9F5BC'>";
                        echo $ligne[8];
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>

                <table class="table table-bordered table-striped table-condensed table-hover">
                    <thead>
                    <tr style="background-color: #FFC001; font-weight: bold;">
                        <td>N°</td>
                        <td style="width: 20%">POULE F</td>
                        <td>PSN</td>
                        <td>ATT</td>
                        <td>MIL</td>
                        <td>DEF</td>
                        <td>MOYENNE</td>
                        <td>ETOILE</td>
                        <td>OBJECTIF</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $test9 = "select * from poulef order by id;";
                    $sql9 = $mysqli->query($test9);
                    while ($row9= $sql9->fetch_array()) {
                        $rows9[] = $row9;
                    }
                    foreach ($rows9 as $ligne) {
                        echo "<tr>";
                        echo "<td style='background-color: #A9E2F3'>";
                        echo $ligne[0];
                        echo "</td>";
                        echo "<td style='background-color: #A9E2F3; text-align: left !important;'><img style='width: 25px;' src='tournoi/images/$ligne[9].png'/>&nbsp;&nbsp;&nbsp;";
                        echo $ligne[1];
                        echo "</td>";
                        echo "<td style='background-color: #A9E2F3'>";
                        echo $ligne[2];
                        echo "</td>";
                        echo "<td style='background-color: #A9E2F3'>";
                        echo $ligne[3];
                        echo "</td>";
                        echo "<td style='background-color: #A9E2F3'>";
                        echo $ligne[4];
                        echo "</td>";
                        echo "<td style='background-color: #A9E2F3'>";
                        echo $ligne[5];
                        echo "</td>";
                        echo "<td style='background-color: #A9E2F3'>";
                        echo $ligne[6];
                        echo "</td>";
                        echo "<td style='background-color: #A9E2F3'>";
                        echo $ligne[7];
                        echo "</td>";
                        echo "<td style='background-color: #A9E2F3'>";
                        echo $ligne[8];
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>

                <table class="table table-bordered table-striped table-condensed table-hover">
                    <thead>
                    <tr style="background-color: #FFC001; font-weight: bold;">
                        <td>N°</td>
                        <td style="width: 20%">POULE G</td>
                        <td>PSN</td>
                        <td>ATT</td>
                        <td>MIL</td>
                        <td>DEF</td>
                        <td>MOYENNE</td>
                        <td>ETOILE</td>
                        <td>OBJECTIF</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $test10 = "select * from pouleg order by id;";
                    $sql10 = $mysqli->query($test10);
                    while ($row10 = $sql10->fetch_array()) {
                        $rows10[] = $row10;
                    }
                    foreach ($rows10 as $ligne) {
                        echo "<tr>";
                        echo "<td style='background-color: #BCA9F5'>";
                        echo $ligne[0];
                        echo "</td>";
                        echo "<td style='background-color: #BCA9F5; text-align: left !important;'><img style='width: 25px;' src='tournoi/images/$ligne[9].png'/>&nbsp;&nbsp;&nbsp;";
                        echo $ligne[1];
                        echo "</td>";
                        echo "<td style='background-color: #BCA9F5'>";
                        echo $ligne[2];
                        echo "</td>";
                        echo "<td style='background-color: #BCA9F5'>";
                        echo $ligne[3];
                        echo "</td>";
                        echo "<td style='background-color: #BCA9F5'>";
                        echo $ligne[4];
                        echo "</td>";
                        echo "<td style='background-color: #BCA9F5'>";
                        echo $ligne[5];
                        echo "</td>";
                        echo "<td style='background-color: #BCA9F5'>";
                        echo $ligne[6];
                        echo "</td>";
                        echo "<td style='background-color: #BCA9F5'>";
                        echo $ligne[7];
                        echo "</td>";
                        echo "<td style='background-color: #BCA9F5'>";
                        echo $ligne[8];
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>

                <table class="table table-bordered table-striped table-condensed table-hover">
                    <thead>
                    <tr style="background-color: #FFC001; font-weight: bold;">
                        <td>N°</td>
                        <td style="width: 20%">POULE H</td>
                        <td>PSN</td>
                        <td>ATT</td>
                        <td>MIL</td>
                        <td>DEF</td>
                        <td>MOYENNE</td>
                        <td>ETOILE</td>
                        <td>OBJECTIF</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $test11 = "select * from pouleh order by id;";
                    $sql11 = $mysqli->query($test11);
                    while ($row11 = $sql11->fetch_array()) {
                        $rows11[] = $row11;
                    }
                    foreach ($rows11 as $ligne) {
                        echo "<tr>";
                        echo "<td style='background-color: #F5A9E1'>";
                        echo $ligne[0];
                        echo "</td>";
                        echo "<td style='background-color: #F5A9E1; text-align: left !important;'><img style='width: 25px;' src='tournoi/images/$ligne[9].png'/>&nbsp;&nbsp;&nbsp;";
                        echo $ligne[1];
                        echo "</td>";
                        echo "<td style='background-color: #F5A9E1'>";
                        echo $ligne[2];
                        echo "</td>";
                        echo "<td style='background-color: #F5A9E1'>";
                        echo $ligne[3];
                        echo "</td>";
                        echo "<td style='background-color: #F5A9E1'>";
                        echo $ligne[4];
                        echo "</td>";
                        echo "<td style='background-color: #F5A9E1'>";
                        echo $ligne[5];
                        echo "</td>";
                        echo "<td style='background-color: #F5A9E1'>";
                        echo $ligne[6];
                        echo "</td>";
                        echo "<td style='background-color: #F5A9E1'>";
                        echo $ligne[7];
                        echo "</td>";
                        echo "<td style='background-color: #F5A9E1'>";
                        echo $ligne[8];
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="scripts/jquery.min.js" type="text/javascript"></script>
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>
<script src="scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
<script type="text/javascript">$('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320, visible: {min: 2, max: 6}} });</script>
<script src="scripts/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="scripts/easing/jquery.easing.1.3.js" type="text/javascript"></script>

</body>
</html>