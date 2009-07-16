<?php
/**
 * DML f�r Basisklassen die auf db.tabellen zugreifen um Persistenz zu bilden 
 *
 */
interface Dmlable {
	
	function insert();
	
	function update();
	
	function load($id);
	
	function delete($id);

        /**
	 * gibt alle Datens�tze als Array zur�ck, dessen Elemente Objekte sind
	 *
	 * @param string $restriction Erg�nzung der WHERE-claue mittels AND
	 * @example $restriction = " AND id > 22 "
	 */

	function getAllAsArray($restriction = '');
	
}

?>