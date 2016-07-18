<?php

namespace helpers;

class router
{
    public static function startApp()
    {
        $site=new \site();
        $site->body();  //создаем боди html 
        $site->home();  //вставляем необходимую информацию
    }
}