<?php
if(isset($_POST["submit"])){
    $submit=$_POST["submit"];
    $name=$_POST["name"];
    $num1=$_POST["num1"];
    $year=$_POST["year"];
    if($year<3){
        $interset_rate = $num1 * 0.10 *$year;
        $after_interset = $interset_rate +$num1;
        $monthly = $after_interset / ($year*12);
    }
    elseif($year>=3){
        $interset_rate = $num1 * 0.15 *$year;
        $after_interset = $interset_rate +$num1;
        $monthly = $after_interset / ($year*12);
    }
}
else{
    $meessge = "plz enter your info";
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
                    BANK 
                </div>
                <div class="col-4 offset-4 mt-5">
                    <form method="post" action="">
                        
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Enter your name"><br>

                            <input type="number" name="num1" class="form-control" placeholder="Enter  number:"><br>
                            
                            <input type="number" name="year" class="form-control" placeholder="Enter the total year"><br>                        
                        </div>
                        <div class=" col-4 offset-4 form-group">
                            <button class=" btn btn-primary " name="submit">Get ruselt</button> 
                        </div>
                    </form>   
               </div>  
            </div>
            <?php if(isset($_POST["submit"])){
                         echo  "" ?>
            <form method="post" action="">
                    <div class="row mt-5 p-1 bg-info">
                        <div class="col-4"><label for="colFormLabel" class="col col-form-label">User Name</label></div>
                        <div class="col"><label for="colFormLabel2" class="col col-form-label">Interset Rate</label></div>
                        <div class="col"><label for="colFormLabel3" class="col col-form-label"> After Interset</label></div>
                        <div class="col"><label for="colFormLabel4" class="col col-form-label">Monthly</label></div>
                    </div> 
                    <div class="row p-1 bg-secondary">
                        <div class="col-4"><label for="colFormLabel" class="col col-form-label"></label><?php if(isset($name)){
                         echo $name ;} ?></div>
                        <div class="col"><label for="colFormLabel2" class="col col-form-label"></label><?php if(isset($interset_rate)){
                         echo $interset_rate ;} ?></div>
                        <div class="col"><label for="colFormLabel3" class="col col-form-label"> </label><?php if(isset($after_interset)){
                         echo $after_interset ;} ?></div>
                        <div class="col"><label for="colFormLabel4" class="col col-form-label"></label><?php if(isset($monthly)){
                         echo $monthly;} ?></div>
                    </div> 
                </form>
                <?php } ?>    
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>