<?php
#$row = 1;
#
#if (($handle = fopen("hd20.csv", "r")) !== FALSE) {
#	while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
#		$num = count($data);
#		echo "<p> $num fields in line $row: <br /></p>\n";
#		$row++;
#		for ($c = 0; $c < $num; $c++) {
#			echo $data[$c] . "<br />\n";
#		}
#	}
#	fclose($handle);
#	
#	
#	function get2DArrayFromCsv($file,$delimiter) { 
#       if (($handle = fopen($file, "r")) !== FALSE) { 
#            $i = 0; 
#            while (($lineArray = fgetcsv($handle, 4000, $delimiter)) !== FALSE) { 
#                for ($j=0; $j<count($lineArray); $j++) { 
#                    $data2DArray[$i][$j] = $lineArray[$j]; 
#                } 
#                $i++; 
#            } 
#            fclose($handle); 
#        } 
#        return $data2DArray; 
#    } 
    
    
    
    # Open the File.
    if (($handle = fopen("hd20.csv", "r")) !== FALSE) {
        # Set the parent multidimensional array key to 0.
        $nn = 0;
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            # Count the total keys in the row.
            $c = count($data);
            echo "<p> $c fields in line $nn: <br /></p>\n";            # Populate the multidimensional array.
            for ($x=0;$x<$c;$x++)
            {
                $csvarray[$nn][$x] = $data[$x];
            }
            $nn++;
        }
        # Close the File.
        fclose($handle);
    }
    #Print the contents of the multidimensional array. 
    #print_r($csvarray);
    echo "MULTIDIMENSIONAL ARRAY VALUE [1][2]:";  
    print($csvarray[1][2]);

echo "<br><br>Number of records:";
echo count($csvarray);
echo "<br><br>";

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
    
#Flip array columns and rows
/* public static function array_2D_inverse($csvarray) {
     $out = array();
     $ridx = 0;
     foreach ($csvarray as $row) {
         foreach ($row as $colidx => $val) {
             while ($ridx > count($out[$colidx]))
                 $out[$colidx][] = null;
             $out[$colidx][] = $val;
         }
         $ridx++;
     }
     $max_width = 0; 
     foreach($out as $v)
          $max_width = ($max_width < count($v)) ? count($v) : $max_width;
     foreach($out as $k => $v){
         while(count($out[$k]) < $max_width)
             $out[$k][] = null;
     }
     return $out;
 }
*/
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



# NEW ARRAY $NAMEARRAY
echo "COLLEGE NAME (LINKS):";
$namearray = array();
  for($i=1;$i<count($csvarray);$i++) {
	echo '<table>';
	echo('<tr>');
#    echo('<td>' . $csvarray[$i][1] . '</td>');,
    echo('<td>' . '<a href='."WWW.GOOGLE.COM".'>'.$csvarray[$i][1] .'</a></td>');  #"url">link text</a>  	echo('</tr>');
  	echo '</table>';  
}








?>
