<?php

class S{

   public $name = '';
    public function __construct($name)
    {
        echo $this->name = $name;
    }
    public function sum(){
       return 'From sum ';
   }
}
$name = 'Al Amin';
 new S($name);


//echo $object->sum();
























