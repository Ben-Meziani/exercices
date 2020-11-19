<?php

class A 
{
   protected static $attribut1 = 8;

   public function methode1()
   {
       echo static::$attribut1;
   }
}

class B extends A
{
    public function methode1()
    {
        parent::methode1();
    }
}

(new B)->methode1();