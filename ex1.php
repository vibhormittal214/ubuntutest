<?php
   $a;
   class A{
   	   var $b;
   	   function get(){
   	   	    echo $this->b;
   	   }
   	   function set($a){
           $this->b=$a;
           echo " testing";
   	   }
   }
   class B{
   	   var $c;
   	   function __construct($a){
   	   	  $this->c = $a;
   	   	  echo "test1";
   	   }
   }
   function test(){
   	   echo "this is a test funcion";
   }
   function test1(){
   	echo "this is another test function";
   	echo "worked";
   }
   ?>
