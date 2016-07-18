<?php

namespace helpers;

class templateRender
{
    private static $style;
    public static function outNews( $newsArray)
    {            
        if (!self::$style) self::$style=self::checkVisualStyle().'.html';   //если шаблон загружен идем дальше, 
                                                                            //если нет, то проверяем что подключать
        if ($newsArray){
            foreach($newsArray as $news){   //проходим по массиву с данным из news.csv и обрабатываем конкретную строку из этого файла 
                require 'templates'.URI_SEPARATOR.(self::$style);   //подставляем файл с шаблоном
            }
        }
    }
    public static function checkVisualStyle()
    {
        if (isset($_POST['visualStyle'])) $postStyle=$_POST['visualStyle']; //получаем переменную с названием шаблона из POST, если она там есть
        if (empty($_POST['visualStyle']) ||  !file_exists('templates'.URI_SEPARATOR.$postStyle.'.html')){    //проверка на существование файла
            return 'template1';    //если нету такого файла то возвращаем шаблон по умолчанию
        }else{
            return $postStyle;  //если есть, то отдаем его имя
        }
    }
    public static function outSelectedStatus($value)
    {
        if (isset($_POST['visualStyle'])){
            if ($value==$_POST['visualStyle'])return 'selected';    //выставление текущего шаблона в выпадающем меню
        }    
    }        
}