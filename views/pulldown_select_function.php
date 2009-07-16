<?php
	
    /*Eine Funktion um Dropdown auszugeben. Den Text der drin stehen
     * soll zieht er aus einem Array.*/

    function pulli($name,$options,$qname) {                                            //Function zum erstellen eines Pulldowns
		$pulldown = '<select name="' . $qname . '">';
		$anzahl = count ($options);
		
			for ($i=0; $i < $anzahl; $i++) {                                    //Schleife für Pulldown
				$pulldown = $pulldown . '<option>';
				$pulldown = $pulldown . $options[$i];
				$pulldown = $pulldown . '</option>';
			}
	
		$pulldown = $pulldown . '</select>';
		return $pulldown;
	}

        function selection($name,$options,$qname) {                                            //Function zum erstellen eines Pulldowns
		$pulldown = '<select size="5" multiple name="' . $qname . '">';
		$anzahl = count ($options);

			for ($i=0; $i < $anzahl; $i++) {                                    //Schleife für Pulldown
				$pulldown = $pulldown . '<option>';
				$pulldown = $pulldown . $options[$i];
				$pulldown = $pulldown . '</option>';
			}

		$pulldown = $pulldown . '</select>';
		return $pulldown;
	}

?>
<html>
<head>
<title>Unbenanntes Dokument</title>
</head>

<body>
</body>
</html>
