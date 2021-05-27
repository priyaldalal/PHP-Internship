<?php  
$num=162;
echo"Your Number is $num";  
$total=0;  
$x=$num; 
while($x!=0)  
{  
$rem=$x%10;  
$total=$total+$rem*$rem*$rem;  
$x=$x/10;   
}  
if($num==$total)  
{  
echo "<br/>$num is an Armstrong number";  
}  
else  
{  
echo "<br/>No, $num is not an Armstrong number";  
}  
?>  