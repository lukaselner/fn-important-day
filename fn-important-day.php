<?php
/*
PHP function - Important Day's with translate
Author: Lukas Elner
E-mail: lukas@elner.cz
Web: lukas.elner.cz
Version: CZECH
Revision: 0.2
*/
function importantDay($dayD) {
	$unixTime = strtotime($dayD);
	$dayNameText = array('Mon' => 'Pondělí', 'Tue' => 'Úterý', 'Wed' => 'Středa', 'Thu' => 'Čtvrtek', 'Fri' => 'Pátek', 'Sat' => 'Sobota', 'Sun' => 'Neděle');
	$monthNameText = array('Jan' => 'ledna', 'Feb' => 'února', 'Mar' => 'března', 'Apr' => 'dubna', 'May' => 'května', 'Jun' => 'června', 'Jul' => 'července', 'Aug' => 'srpna', 'Sep' => 'září', 'Oct' => 'října', 'Nov' => 'listopadu', 'Dec' => 'prosince');
	return $dayNameText[Date('D', $unixTime)] . ', ' . date('j', $unixTime) . '. ' . $monthNameText[Date('M', $unixTime)] . ' ' . date('Y', $unixTime);
}
echo importantDay('1970-01-01');
?>
