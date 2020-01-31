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
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>jQuery Lab SOLUTION- CPSC 2030</title>
</head>

<body class="container">
    <h1>jQuery Lab SOLUTION - CPSC 2030</h1>

    <div class="form-group row">
        <div class="col">
            <button type="button" class="btn btn-primary" id="newemployee">New Employee</button>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="fname" class="col-form-label">First name:</label>
                            <input type="text" class="form-control" id="fname">
                        </div>
                        <div class="form-group">
                            <label for="lname" class="col-form-label">Last name:</label>
                            <input type="text" class="form-control" id="lname">
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="sales" class="col-form-label">Sales:</label>
                            <input type="number" class="form-control" id="sales">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Weight</th>
                <th scope="col">Length</th>
                <th scope="col">Weight</th>
                <th scope="col">Height</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <!-- these rows are for example; you can remove these -->
            <!-- end of example rows -->

          <?php 
            if(is_array($productArray)){
              foreach ($productArray as $product){
                echo'<tr>'; 
                echo'<td>'. $product->getName() . '</td>';
                echo'<td>'. $product->getWeight() . '</td>';
                echo'<td>'. $product->getLength() . '</td>';
                echo'<td>'. $product->getWidth() . '</td>';
                echo'<td>'. $product->getHeight() . '</td>';
                echo"<td><button class=\"btn btn-danger\">Delete</button></td>";
                echo'</tr>';
              }
            }
          ?>
        </tbody>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        /* global $ */

        function getEmployeeData() {
            return {
                fname: $("#fname").val(),
                lname: $("#lname").val(),
                email: $("#email").val(),
                sales: $("#sales").val()
            };
        }

        function validData(employee) {
            var errorMessage = "";

            if (employee.fname == "") {
                errorMessage += "first name is blank; ";
            }
            if (employee.lname == "") {
                errorMessage += "last name is blank; ";
            }
            if (employee.email == "") {
                errorMessage += "email is blank; ";
            }
            if (employee.sales < 0) {
                errorMessage += "sales is not positive; ";
            }

            // todo: display error message

            return errorMessage == "";
        }

        function saveData(employee, fnameTd, lnameTd, emailTd, salesTd) {
            fnameTd.textContent = employee.fname;
            lnameTd.textContent = employee.lname;
            emailTd.textContent = employee.email;
            salesTd.textContent = employee.sales;
        }

        function updateEmployeeFunc() {
            var employee = getEmployeeData();

            if (!validData(employee)) return;

            $( ".bg-secondary" ).children().first().text( employee.fname );            
            $( ".bg-secondary" ).children().eq(1).text( employee.lname );            
            $( ".bg-secondary" ).children().eq(2).text( employee.email );            
            $( ".bg-secondary" ).children().eq(3).text( employee.sales );            

            $( "#exampleModal" ).modal('hide');
        }


        function newEmployeeFunc() {
            var employee = getEmployeeData();

            if (!validData(employee)) return;

            $("tbody").append(
                "<tr>" +
                "<td>" + employee.fname + "</td>" +
                "<td>" + employee.lname + "</td>" +
                "<td>" + employee.email + "</td>" +
                "<td class=\"text-right\">" + employee.sales + "</td>" +
                "<td><button class=\"btn btn-danger\">Delete</button></td>" +
                "</tr>"
            );

            $("tbody tr:last-child button").click(function(e) {
                e.stopPropagation();
                $(this).parent().parent().remove();
            });

            $("tbody tr:last-child").click(function(e) {
                $("tbody tr").removeAttr("class");

                $(this).addClass("bg-secondary");

                $("#fname").val($(this).children().first().text());
                $("#lname").val($(this).children().eq(1).text());
                $("#email").val($(this).children().eq(2).text());
                $("#sales").val($(this).children().eq(3).text());

                $("#exampleModalLabel").text("Update Employee");
                $(".modal-footer .btn-primary").text("Update");
                $(".modal-footer .btn-primary").off();
                $(".modal-footer .btn-primary").click(updateEmployeeFunc);

                $("#exampleModal").modal('show');
                
            });


            $("#exampleModal").modal('hide');



        }
        
        $(function() {
            $("#newemployee").click(function() {
                $("#fname").val("");
                $("#lname").val("");
                $("#email").val("");
                $("#sales").val("");

                $("#exampleModalLabel").text("New Employee");
                $(".modal-footer .btn-primary").text("Save");
                $(".modal-footer .btn-primary").off();
                $(".modal-footer .btn-primary").click(newEmployeeFunc);

                $("#exampleModal").modal('show');
            });
        });
    </script>
</body>
</html>