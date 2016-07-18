<?php

namespace helpers;

class news
{
    public static function getData()
    {
        return csv::getData('news');    //достаем и возвращаем все данные из файла новостей
    }
}