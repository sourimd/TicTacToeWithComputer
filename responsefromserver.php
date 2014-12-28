<?php
   $s=$_GET['gamestatus'];
   $arr=array();
   $j=0;
   $k=0;
   $vaccantspaces=array();
   for($i=0;$i<5;$i++){
      switch($s[$j]){
      case '0':
         $arr[$j]='0000';
         $j++;
         break;
      case '1':
         $arr[$j]='0001';
         $j++;
         break;
      case '2':
         $arr[$j]='0010';
         $j++;
         break;
      case '3':
         $arr[$j]='0011';
         $j++;
         break;
      case '4':
         $arr[$j]='0100';
         $j++;
         break;
      case '5':
         $arr[$j]='0101';
         $j++;
         break;
      case '6':
         $arr[$j]='0110';
         $j++;
         break;
      case '7':
         $arr[$j]='0111';
         $j++;
         break;
      case '8':
         $arr[$j]='1000';
         $j++;
         break;
      case '9':
         $arr[$j]='1001';
         $j++;
         break;
      case 'A':
      case 'a':
         $arr[$j]='1010';
         $j++;
         break;
       case 'B':
       case 'b':
         $arr[$j]='1011';
         $j++;
         break;
       case 'C':
       case 'c':
         $arr[$j]='1100';
         $j++;
         break; 
       case 'D':
       case 'd':
         $arr[$j]='1101';
         $j++;
         break;
       case 'E':
       case 'e':
         $arr[$j]='1110';
         $j++;
         break;
       case 'F':
       case 'f':
         $arr[$j]='1111';
         $j++;
         break;        
      }
    }
   $hexstring=implode("",$arr);
   //echo "$hexstring";
   for($i=0;$i<18;$i=$i+2){
   	$a=substr($hexstring,$i,2);
        
   	if($a=='00'){
   		$vaccantspaces[$k]=(($i)/2)+1;
   	    $k++;
        }
   }
   $z=rand(0,count($vaccantspaces)-1);
   $response = $vaccantspaces[$z];
   echo $response;
?>