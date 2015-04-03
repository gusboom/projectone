<?php

# OPEN CSV FILE
if (($handle = fopen("hd20.csv", "r")) !== FALSE) {
	# SET THE PARENT MULTIDIMENSIONAL ARRAY KEY TO 0.
	$nn = 0;
	while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		# COUNT THE TOTAL KEYS IN THE ROW
		$c = count($data);
		# POPULATE THE MULTIDIMENSIONAL ARRAY
		for ($x = 0; $x < $c; $x++) {
			$csvarray[$nn][$x] = $data[$x];
		}
		$nn++;
	}
	# CLOSE THE FILE
	fclose($handle);
}

# NEW ARRAY $namearray All COLLEGE NAMES
echo "COLLEGE NAME (LINKS):";
$namearray = array();
for ($i = 1; $i < count($csvarray); $i++) {
	echo '<table>';
	echo('<tr>');
	echo('<td>' . '<a href=' . "projectone.php" . '>' . $csvarray[$i][1] . '</a></td>');
	echo('</tr>');
	echo '</table>';
}

# NEW ARRAY $headarray ALL HEADINGS
$headarray = array();
echo "<br><br>";
#echo "HEAD ARRAY CONTENT:";
echo '<table border="1" cellpadding="6" cellspacing="3">';
echo('<tr width="200px" height="50px">');
for ($k = 0; $k < count($csvarray[0]); $k++) {
	echo('<td width="200px" height="50px">' . $csvarray[0][$k] . '</td>');
	$headarray[$k] = $csvarray[0][$k];
}
echo('</tr>');
echo '</table>';

# NEW ARRAY $recordarray ALL RECORDS
$recordarray = array();

for ($i = 1; $i < count($csvarray); $i++) {
	echo '<table border="1" cellpadding="6" cellspacing="3">';
	echo('<tr width="200px" height="50px">');

	for ($k = 0; $k < count($csvarray[$i]); $k++) {
		echo('<td width="200px" height="50px">' . $csvarray[$i][$k] . '</td>');
		$recordarray[$k] = $csvarray[$i][$k];
	}
	echo('</tr>');
	echo '</table>';
}
echo "<br><br>";
?>
