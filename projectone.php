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
    if (($handle = fopen("hd3.csv", "r")) !== FALSE) {
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
    # Print the contents of the multidimensional array.
    #print_r($csvarray);  
    print($csvarray[1][2]);

echo count($csvarray);

for($i=0;$i<count($csvarray);$i++) {
	echo '<table>';
	echo('<tr>');
	for($j=0;$j<count($csvarray[$i]);$j++) {
    	echo('<td>' . $csvarray[$i][$j] . '</td>');
  	} 
  	echo('</tr>');
  	echo '</table>';  
}
    
    	
	
	
#}
?>
