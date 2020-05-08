<?php
/*
Author: Lukas Elner
E-mail: lukas@elner.cz
Web: lukas.elner.cz
Version: CZECH
*/

function importantDay($dayD) {
	$unixTime = strtotime($dayD);
	$dayNameText = array('Mon' => 'Pondělí', 'Tue' => 'Úterý', 'Wed' => 'Středa', 'Thu' => 'Čtvrtek', 'Fri' => 'Pátek', 'Sat' => 'Sobota', 'Sun' => 'Neděle');
	$monthNameText = array('Jan' => 'ledna', 'Feb' => 'února', 'Mar' => 'března', 'Apr' => 'dubna', 'May' => 'května', 'Jun' => 'června', 'Jul' => 'července', 'Aug' => 'srpna', 'Sep' => 'září', 'Oct' => 'října', 'Nov' => 'listopadu', 'Dec' => 'prosince');
	echo $dayNameText[Date('D', $unixTime)] . ', ' . date('j', $unixTime) . '. ' . $monthNameText[Date('M', $unixTime)] . ' ' . date('Y', $unixTime);
}
?>

<?php
importantDay('2020-01-01');
?>
