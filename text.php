<?php
$num = 153;  /// try changing this number to find which numbers are Armstrong.
$sum = 0;
$temp=$num;
while($temp!=0){
$rem=$temp%10;
$sum = $sum + $rem * $rem * $rem;
$temp=$temp/10;

}
if($num == $sum){
echo "Armstrong Number!";
} else {
echo "Not an Armstrong Number";
}
?>
