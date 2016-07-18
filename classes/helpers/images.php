<?php

namespace helpers;

class images
{        
    public static function getImage($imageId)
    {
        $imagesArray=csv::getData('images');    //достаем данные из csv файла в массив
        if ($imagesArray){
            foreach($imagesArray as $imageLine){    //разбираем массив по строкам
                if ($imageLine[0]==$imageId){   //ищем соответсвие ид картинки на входе и в массиве
                    return $imageLine;  //возвращаем массив со всеми значениями для картинки
                }
            }     
        }  
    }
}