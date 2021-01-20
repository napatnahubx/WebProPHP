<?php
$x=100;
$y=10;
$operator = '/';
function plus($x,$y){

echo "x + y =".($x+$y)."<br>";
}
function sub($x,$y)
{
    echo "x - y =".($x-$y)."<br>";
}
function mul($x,$y)
{
    echo "x * y =".($x*$y)."<br>";
}
function div($x,$y)
{
    echo "x / y =".($x/$y)."<br>";
}
plus($x,$y);
sub($x,$y);
mul($x,$y);
div($x,$y);
?>