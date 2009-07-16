<?php

$typ = $_POST['typ_input_reg'];
$vname = $_POST['vname_input_reg'];
$nname =  $_POST['nname_input_reg'];
$nick = $_POST['nick_input_reg'];
$day = $_POST['tag_input_reg'];
$month = $_POST['monat_input_reg'];
$year = $_POST['jahr_input_reg'];
$mail = $_POST['mail_input_reg'];
$pw1 = $_POST['pw1_input_reg'];
$pw2 = $_POST['pw2_input_reg'];
$pwcomplete = '';

//Korrekte Zusammensetzung des Geburtsdatums

$bday = $day . '.' . $month . '.' . $year;

//Überprüfung ob alles eingegeben wurde.

if($typ && $vname && $nname && $nick && $day && $month && $year && $mail && $pw1 && $pw2 == '') {

    //Fehlermeldung wenn nicht alle Felder ausgefüllt wurden.
    echo "<h4 style='color:red;'>Sie haben nicht alle Felder ausgef&uuml;llt!</h4>";
    echo "<meta http-equiv='refresh' content='5; register_user.php'>";
    echo "<h4>Sie werden in wenigen Sekunden weitergeleitet. Wenn nicht klicken Sie bitte auf <a href='register_user.php'>weiter</a>!</h4>";

}

else {

    //Prüfung ob PW 2x gleich eingegeben wurde
    if ($pw1 == $pw2) {

        $pwcomplete = $pw1;

        //Test
        echo $typ; echo "<br>";
        echo $vname; echo "<br>";
        echo $nname; echo "<br>";
        echo $nick; echo "<br>";
        echo $bday; echo "<br>";
        echo $mail; echo "<br>";
        echo $pwcomplete; echo "<br>";


    }
    //Fehlermeldung wenn nicht zwei gleiche PW's eingegeben wurden.
    else {

        echo "<h4 style='color:red;'>Sie haben nicht zweimal das selbe Passwort eingegeben!</h4>";
        echo "<meta http-equiv='refresh' content='5; register_user.php'>";
        echo "<h4>Sie werden in wenigen Sekunden weitergeleitet. Wenn nicht klicken Sie bitte auf <a href='register_user.php'>weiter</a>!</h4>";
    }

}

?>
