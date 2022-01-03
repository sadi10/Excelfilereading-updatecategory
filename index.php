<html>
<body>
<center>
<h2>Read Excel By PHPExcel</h2>
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "healthlink_crm_updated";

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'healthlink_crm_updated');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected Successfully.";
require_once "Classes/PHPExcel.php";
$path="medicine.xlsx";
$reader= PHPExcel_IOFactory::createReaderForFile($path);
$excel_Obj = $reader->load($path);

//Get the last sheet in excel
//$worksheet=$excel_Obj->getActiveSheet();

//Get the first sheet in excel
 $med = array (
  
  
);
$worksheet=$excel_Obj->getSheet('0');
echo $worksheet->getCell('E33')->getValue();
$lastRow = $worksheet->getHighestRow();
//echo $lastRow;
$colomncount = $worksheet->getHighestDataColumn();
$colomncount_number=PHPExcel_Cell::columnIndexFromString($colomncount);
echo $lastRow.'     ';
echo $colomncount;
echo "<table border='1'>";
	for($row=0;$row<=$lastRow;$row++){
		echo "<tr>";
		for($col=0;$col<=$colomncount_number;$col++){
			$txt = "";
			//echo "<td>";
			$txt = $worksheet->getCell(PHPExcel_Cell::stringFromColumnIndex($col).$row)->getValue();
			//echo $worksheet->getCell(PHPExcel_Cell::stringFromColumnIndex($col).$row)->getValue();
			//echo "</td>";
			$med[$row][$col] = $txt;
		}
		echo "</tr>";
		
		
		
		
	}	
echo "</table>";
echo "</br>";
echo "</br>";
echo $lastRow;
//die();
$Antipyretics = array();

echo "</br>";
$m=0;
for($j=0;$j<1;$j++){
for($i=2;$i<=284;$i++){
	//echo $med[$i][4];
	echo "</br>";
	//str_replace ("."," ", $med[$i][4]);
	$Antipyretics[$m] = str_replace ("."," ", $med[$i][$j]);
	$Antipyretics[$m] = substr($Antipyretics[$m], 0, 10);
	
	echo $Antipyretics[$m];

if($j==0){	
$query = "UPDATE master_medicine SET catagory = 1 WHERE dosage_brand_strength like '%".$Antipyretics[$m]."%'";
}

if($j==1){	
$query = "UPDATE master_medicine SET catagory = 2 WHERE dosage_brand_strength like '%".$Antipyretics[$m]."%'";

}


if($j==2){	
$query = "UPDATE master_medicine SET catagory = 3 WHERE dosage_brand_strength like '%".$Antipyretics[$m]."%'";

}

if($j==3){	
$query = "UPDATE master_medicine SET catagory = 4 WHERE dosage_brand_strength like '%".$Antipyretics[$m]."%'";

}

if($j==4){	
$query = "UPDATE master_medicine SET catagory = 5 WHERE dosage_brand_strength like '%".$Antipyretics[$m]."%'";

}

if($j==5){	
$query = "UPDATE master_medicine SET catagory = 6 WHERE dosage_brand_strength like '%".$Antipyretics[$m]."%'";

}








  if($Antipyretics[$m]!=NULL){
    $result = mysqli_query($conn,$query);
	if($result){
		
		
		echo"success";
	}
	else{
		echo"failed";
	}
  }
$m++;
	
	
}


}

$conn->close();
?>
</center>
</body>
</html>