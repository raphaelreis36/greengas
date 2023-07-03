<?php

require 'Simple.php';

class NewsFactory
{
    public function __construct()
    {
        
    }
   
    public static function create ($kind){
        $kindClass = "\FactoryMethod\Handler\News{$kind}";
        
        if(!class_exists($kindClass)) {            
            throw new \Exception("Class News{$kind} not found");
        }

        return new $kindClass;
    }
}