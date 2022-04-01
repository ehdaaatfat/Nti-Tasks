<?php
if (isset($_POST['subm'])) {
  $num1 = $_POST['n1'];
  $num2 = $_POST['n2'];
  $oper = $_POST['subm'];
  if ($oper == "+")
    $answer = $num1 + $num2;
  else if ($oper == "-")
    $answer = $num1 - $num2;
  else if ($oper == "x")
    $answer = $num1 * $num2;
  else if ($oper == "/")
    $answer = $num1 / $num2;
} ?>





<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

      <div class="container">
            <div class="row ">
                <div class="col-12 mt-5 text-center text-primary font-weight-bold h3">
                        <h1> Calculator</h1><br>
                </div>
                <div class="col-4 offset-4 mt-2">
                    <form method="post" action="">
                        <div class="form-group">
                        <input  name="n1" class="form-control" placeholder="Enter the first number" value=""><br>
                        <input  name="n2" class="form-control" placeholder="Enter the Second number" value=""><br>


                        <input type="submit" name="subm" value="+">
                        <input type="submit" name="subm" value="-">
                        <input type="submit" name="subm" value="x">
                        <input type="submit" name="subm" value="/">
                        </div>
                        <div class=" col-4 offset-4 form-group">
                         <input class="form-control" placeholder="Result"  type="number"  value="<?php echo $answer ?>"><br>
                        </div>
                    </form>
               </div>
            </div>
        </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>