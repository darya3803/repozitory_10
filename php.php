<?php
if(isset($_POST["cr"]))
{
class laba
{
 public $x, $a, $b, $c;
function __construct($x, $a, $b, $c){
 $this->x = $x;
 $this->a = $a;
 $this->b = $b;
 $this->c = $c;
}
function Numbers(){
if($this->x <= 3){
 echo $this->x * $this->x - 3 * $this->x + 9 + "<br>";
}
else{
 echo $this->x * $this->x * $this->x + 6 + "<br>";
}
}
function Discriminant(){
 echo $this->a * $this->b * $this->c + "<br>";
}
}
$x = $_POST["X"];
$a = $_POST["A"];
$b = $_POST["B"];
$c = $_POST["C"];
$num = new laba($x, $a, $b, $c);
$num->Numbers();
$num->Discriminant();
}
?>