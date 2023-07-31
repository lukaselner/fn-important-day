<?php
/*
PHP function - Important Day's with translate
Author: Lukas Elner
E-mail: lukas@elner.cz
Web: lukas.elner.cz
Version: CZECH
Revision: 0.3
*/
function importantDay($day_d) {
	$unix_time = strtotime($day_d);
	$day_name_val = ['Mon' => 'Pondělí', 'Tue' => 'Úterý', 'Wed' => 'Středa', 'Thu' => 'Čtvrtek', 'Fri' => 'Pátek', 'Sat' => 'Sobota', 'Sun' => 'Neděle'];
	$month_name_val = ['Jan' => 'ledna', 'Feb' => 'února', 'Mar' => 'března', 'Apr' => 'dubna', 'May' => 'května', 'Jun' => 'června', 'Jul' => 'července', 'Aug' => 'srpna', 'Sep' => 'září', 'Oct' => 'října', 'Nov' => 'listopadu', 'Dec' => 'prosince'];
	return $day_name_val[Date('D', $unix_time)] . ', ' . date('j', $unix_time) . '. ' . $month_name_val[Date('M', $unix_time)] . ' ' . date('Y', $unix_time);
}
echo importantDay('1970-01-01');
?>
