<?php

namespace helpers;

class csv
{
    public static function getData($file)
    {
        $filename ='data/'.$file.'.csv';    // определяем из какого файла будем доставть данные
        if (file_exists($filename )) {    
            $csvArray=array();
            $file = fopen ( $filename, 'r' );   
            while (($result=fgetcsv($file, 2000, ';'))!==false){    //читаем весь файл, раскладываем и 
                array_push($csvArray, $result); //добавляем строку csv файла в итоговый массив                
            }
            fclose ( $file );
            $csvArray=array_slice($csvArray, 1); //удаляем первое значение  в массиве, оно тут информационное
            return $csvArray;   //возвращаем массив со значениями 
        }else{
                echo 'Внимание файл '.$file.'.csv не найден';   //если файл не найден то пишем об этом на экране
        }
    }
}