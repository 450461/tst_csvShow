<?php

namespace helpers;

class authors
{
    public static function getAuthorName($authorId)
    {
        $authorArray=csv::getData('authors');   //достаем данные из csv файла в массив
        if ($authorArray){
            foreach ($authorArray as $authorLine){
                if ($authorLine[0]==$authorId) return $authorLine[1];   //ищем соответствие ид автора переданного из приложения
            }                                                               // и автора в массиве, когда находим возвращаем
        }
    }
}