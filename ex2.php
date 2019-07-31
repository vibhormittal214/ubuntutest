<?php
     $qw=5;
     $a=5;
     $b=6;
     $aa=5;
     $c=814;
     $bb=6;
     $dd=9;
     function test1($a){
     	echo $a;
          echo "no2";
          echo "no1";
          echo "change1";
     }
     function test2(){
     	echo "yes";
     	$c=3;
     	test1($b);
          echo "yes1";
     }
     $d=8;
     function print(){
          echo"printing";
          echo "change2";
     }
     $d=9;
     $aa=4;
     ?>