<?php

class site
{
    function home()
    {           
        $newsArray=helpers\news::getData();
        helpers\templateRender::outNews($newsArray);
    }   
    
    PUBLIC function body()
    {
        require 'layouts'.URI_SEPARATOR.'site'.URI_SEPARATOR.'body.html';
    }
}   