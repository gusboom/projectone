<?php

    
    
    
# Open the File.
if (($handle = fopen("hd20.csv", "r")) !== FALSE) {
    # Set the parent multidimensional array key to 0.
    $nn = 0;
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        # Count the total keys in the row.
        $c = count($data);
#        echo "<p> $c fields in line $nn: <br /></p>\n";            # Populate the multidimensional array.
        for ($x=0;$x<$c;$x++){
                $csvarray[$nn][$x] = $data[$x];
            }
        $nn++;
    }
    # Close the File.
	fclose($handle);
}



# NEW ARRAY $NAMEARRAY
echo "COLLEGE NAME (LINKS):";
$namearray = array();
  for($i=1;$i<count($csvarray);$i++) {
	echo '<table>';
	echo('<tr>');
    echo('<td>' . '<a href='."WWW.GOOGLE.COM".'>'.$csvarray[$i][1] .'</a></td>');
  	echo '</table>';  
}




#Print the contents of the multidimensional array. 
#print_r($csvarray);
    
#echo "MULTIDIMENSIONAL ARRAY VALUE [1][2]:";  
#print($csvarray[1][2]);

#echo "<br><br>Number of records:";
#echo count($csvarray);
#echo "<br><br>";


/*
# Print the contents of the multidimensional array.
echo "MULTIDIMENSIONAL ARRAY CONTENT:";
  for($i=0;$i<count($csvarray);$i++) {
	echo '<table>';
	echo('<tr>');
	for($j=0;$j<count($csvarray[$i]);$j++) {
    	echo('<td>' . $csvarray[$i][$j] . '</td>');
  	} 
  	echo('</tr>');
  	echo '</table>';  
}
*/



/*    
# NEW ARRAY $HEADARRAY
$headarray = array();
echo "<br><br>";
echo "HEAD ARRAY CONTENT:";
echo '<table>';
echo ('<tr>');
for($k=0;$k<count($csvarray[0]);$k++) {
    	echo('<td>' . $csvarray[0][$k] . '</td>');
    	$headarray[$k]=$csvarray[0][$k];
  	} 
echo ('</tr>');
echo '</table>';

echo "<br><br>";
print_r($headarray);
*/



/*
# NEW ARRAY $recordarray
$recordarray = array();
echo "<br><br>";
echo "ONE RECORD ARRAY CONTENT:";
echo '<table>';
echo ('<tr>');
for($k=0;$k<count($csvarray[1]);$k++) {
    	echo('<td>' . $csvarray[1][$k] . '</td>');
    	$recordarray[$k]=$csvarray[1][$k];
  	} 
echo ('</tr>');
echo '</table>';

echo "<br><br>";
print_r($recordarray);
*/



/*
# ARRAY COMBINE ($HEADARRAY, INAMEARRAY)
echo "<br><br>";	
$c = array_combine($headarray, $inamearray);

echo "COMBINE ARRAY CONTENT:";
echo "<br><br>";
print_r($c);	


echo "<br><br>";
echo "COMBINE ARRAY CONTENT IN A TABLE:";
echo "<br><br>";
echo ($c[3][5]);
*/



?>
