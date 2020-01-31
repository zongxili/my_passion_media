<?php
$productArray = array();
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

  function getName() {
    return $this->name;
  }

  function getWeight() {
    return $this->weight;
  }

  function getLength() {
    return $this->length;
  }

  function getWidth() {
    return $this->width;
  }

  function getHeight() {
    return $this->height;
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
$Dish = new Product('Dish', 0.1, 30, 30, 5);
$Spoon = new Product('Spoon', 0.05, 15, 5, 2);
array_push($productArray, $Fiddle, $Dish, $Spoon);

$message = '';
if(isset($_POST['SubmitButton'])){ //check if form was submitted
  $productName = $_POST['product_name'];
  $weight = $_POST['weight'];
  $length = $_POST['length'];
  $width = $_POST['width'];
  $height = $_POST['height'];
  $new = new Product($productName, $weight, $length, $width, $height);
  array_push($productArray, $new);
  $message = "Success! You entered: ".$productName . $weight . $length . $width . $height;
} 
?>

<!DOCTYPE html>
<html>
  <body>

  <h1></h1>

  <div id="table_admin" class="span7">
    <h3></h3>

    <table class="table table-striped table-condensed">

      <thead>
        <tr>
          <th>Product Name</th>
          <th>Weight</th>
          <th>Length</th>
          <th>Width</th>
          <th>Height</th>
          <!-- <th>Edit</th> -->
        </tr>
      </thead>
      <tbody>
        <?php 
          if(is_array($productArray)){
            foreach ($productArray as $product){
              echo'<tr>'; 
              echo'<td>'. $product->getName() . '</td>';
              echo'<td>'. $product->getWeight() . '</td>';
              echo'<td>'. $product->getLength() . '</td>';
              echo'<td>'. $product->getWidth() . '</td>';
              echo'<td>'. $product->getHeight() . '</td>';
              echo'<td><button type="button" onclick="myFunction()">Edit Item</button></td>';
              echo'</tr>';
            }
          }
          echo count($productArray) . "\n";
          echo $message . "\n";
        ?>
      </tbody>
    </table>
  </div>

  <div>

    <h3>Add new item</h3>
    <form action="" method="post">
      Product Name: <input type="text" name="product_name"><br>
      Weight: <input type="text" name="weight"><br>
      Length: <input type="text" name="length"><br>
      Width: <input type="text" name="width"><br>
      Height: <input type="text" name="height"><br>
      <input type="submit" name="SubmitButton">
    </form>
  </div>

  <script>
    function myFunction() {
      console.log("Hello World");
    }
  </script>

  </body>
</html>