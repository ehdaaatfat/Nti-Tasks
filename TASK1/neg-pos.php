<?php
if(isset($_POST["submit"])){
    $num=$_POST["num"];
  if ($num> 0)
    {$message = "Positive number";}
  elseif ($num == 0)
    {$message = "Zero";}
  elseif ($num < 0)
    {$message = "Negative number";}

}
?>
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
                    negative OR positive
                </div>
                <div class="col-4 offset-4 mt-5">
                    <form method="post" action="">
                        <div class="form-group">
                        <input type="number" name="num" class="form-control" placeholder="Enter the  number"><br>
                         <?php if(isset($message)){
                         echo $num ." is ". $message ;} ?>
                        </div>
                        <div class=" col-4 offset-4 form-group">
                            <button class="btn btn-primary" name="submit" > Enter</button> 
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