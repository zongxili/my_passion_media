<?php
class Product {
  public $name;
  public $weight;
  public $length;
  public $width;
  public $height;

  function __construct($name, $weight, $length, $width, $height) {
    $this->name = $name;
    $this->weight = $weight;
    $this->length = $length;
    $this->width = $width;
    $this->height = $height;
  }

  function changeProductInfo($name, $weight, $length, $width, $height) {
    $this->name = $name;
    $this->weight = $weight;
    $this->length = $length;
    $this->width = $width;
    $this->height = $height;
  }
  
  function ProductInfo() {
    $info = 'This ' . $this->name . ' weighs ' . $this->weight . 'kg and dimension as ' . $this->length . 'cm, ' . $this->width . 'cm and ' . $this->height . "cm.\n";
    return $info;
  }
}

$Fiddle = new Product('Fiddle', 1, 60, 20, 10);
echo $Fiddle->ProductInfo();

echo "new product here\n";
$Fiddle->changeProductInfo('Fiddle', 2, 60, 30, 10);
echo $Fiddle->ProductInfo();
?>