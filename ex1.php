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
   	   echo "hey";
   	   echo "this is a test funcion";
   	   echo "test3";
   	   echo "no";
   }
   function test1(){
   	echo "this is another test function1";
   }
   ?>
