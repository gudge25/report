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
foreach($arr as $key => $value ) 
{
 if($value=='')
    continue;
    
    $decode = json_decode($value);
 
   
    foreach($decode as $keyy => $valuee ) 
        $arrs[$keyy] = $valuee; 

    $str = 'Порт: <b>'.$arrs['port'].'</b> Сообщение: <b>'.$arrs['message'].'</b> Время: <b>'.$arrs['time'].'</b><br>';
    
    echo $str.'<br>';
}


// функция колличества строк
function lines($file) 
{ 
    $file_arr = file($file); 
    $lines = count($file_arr); 
    return $lines; 
} 
?>