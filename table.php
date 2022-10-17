<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Table</title>
 <style>
  table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  padding-right: 10px;
}
</style> 
</head>
<body>
<?php
    function build_table($array){
    $html = '<table>';
    $html .= '<tr>';
    foreach($array[0] as $key=>$value){
            $html .= '<th>' . htmlspecialchars($key) . '</th>';
        }
    $html .= '</tr>';

    foreach( $array as $key=>$value){
        $html .= '<tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>' . htmlspecialchars($value2) . '</td>';
        }
        $html .= '</tr>';
    }

    $html .= '</table>';
    return $html;
}
$array = array(
    array('Name'=>'Ramesh Raman ', 'Salary'=>' 5000'),
    array('Salary'=>'Shabbir Hussein ', 'last'=>' 7000')
);
echo build_table($array);
?>
</body>
</html>