<?php





//    if ( 0 < $_FILES['file']['error'] ) {
//        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
//    }
//    else {
//        move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);
//    }

include ("../Classes/PHPExcel/IOFactory.php");

$html = "<table class=\"table\">";

$inputFileName ='/Users/jiangying/PhpstormProjects/seapluzMainService/excels/Parcelforce.xls';
$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$objPHPExcel = $objReader->load($inputFileName);

foreach($objPHPExcel->getWorksheetIterator() as $worksheet){
    $highestRow = $worksheet->getHighestRow();
    $highestColumm = $worksheet->getHighestColumn();
    $colNumber = PHPExcel_Cell::columnIndexFromString($highestColumm);
    $html .="<thead>";
    $html .="<tr>";
    $html .=" <th>#</th>";
    for($i=0; $i<=34; $i++){
        $html.= "<th>".$worksheet->getCellByColumnAndRow($i,2)->getValue()."<th>";
    }
    $html .="</tr>";
    $html .="</thead>";
    $html .=" <tbody>";

    for($row = 3; $row<=$highestRow; $row++){
        $index = $row-2;
        $html .="<tr>";
        $html .="<th scope=\"row\">".$index."</th>";
        for($i=0; $i<=34; $i++){
            $html.= "<td>".$worksheet->getCellByColumnAndRow($i,$row)->getValue()."</td>";
        }

        $html .= "</tr>";
    }

}
$html .=" </tbody>";
$html.="</table>";
echo $html;
?>


