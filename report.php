<?php
$vivod = 8; // сколько отображаем записей
//echo "Отображаем $vivod записей <br>";

$i = 0;
$count = lines('file.txt'); 

if($count < $vivod)
{
    
    $vivod = $count;
    //echo "Недостаточно информации для отображения. Ожидаем ";
    //exit;
}
if($count == 0)
{
    echo "Нет данных для вывода";
    exit;
}

$file = new SplFileObject('file.txt');


$ot = $count - $vivod;
$do = $count;

$fileIterator = new LimitIterator($file, $ot, $do);
foreach($fileIterator as $line) {
 
    $arr[$i]=$line;
    $i++;
}


asort($arr, SORT_NATURAL);
//array_multisort('port', SORT_DESC, $arr);







echo '<table>';
echo '<tr><td>Порт</td><td>Номер</td><td>Сообщение</td><td>Время</td></tr>';
foreach($arr as $key => $value ) 
{
 if($value=='')
    continue;
    
    $decode = json_decode($value);
 
   
    foreach($decode as $keyy => $valuee ) 
        $arrs[$keyy] = $valuee; 
        
        switch ($arrs['port']) {
            case 9:
                $number='0504355566';
                break;
            case 10:
                $number='0959012839';
                break;
            case 11:
                $number='0993055511';
                break;
            case 12:
                $number='0635094242';
                break;
            case 17:
                $number='0963055511';
                break;
            case 18:
                $number='0980886970';
                break;
            case 19:
                $number='0989802397';
                break;
            case 20:
                $number='0633247084';
                break;
        }
            
          
        
         $str = '<tr><td>'.$arrs['port'].'</td><td>'.$number.'</td><td>'.$arrs['message'].'</td><td>'.$arrs['time'].'</td><tr>'; 
        //$str = 'Порт: <b>'.$arrs['port'].'</b> Сообщение: <b>'.$arrs['message'].'</b> Время: <b>'.$arrs['time'].'</b><br>';
    
    //echo $str.'<br>';
    echo $str;
}
echo '</table>';


// функция колличества строк
function lines($file) 
{ 
    $file_arr = file($file); 
    $lines = count($file_arr); 
    return $lines; 
} 
echo '<style>table, th, td {border: 1px solid black; border-collapse: collapse; }</style>';

?>