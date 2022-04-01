<?php
if(isset($_POST["submit"])){
    $bad=0;
    $good=3;
    $very_good=5;
    $Excellent=10;
    $mess1=0;
    $mess2=0;
    $mess3=0;
    $mess4=0;
    $mess5=0;

    $Question1=0;;
    $Question2=0;
    $Question3=0;
    $Question4=0;
    $Question5=0;
    
    
    if(isset($_POST["submit"])){
        $Question1=$_POST["q1"];
        $Question2=$_POST["q2"];
        $Question3=$_POST["q3"];
        $Question4=$_POST["q4"];
        $Question5=$_POST["q5"];
        if($Question1==$bad || $Question1==$good|| $Question1==$very_good || $Question1==$Excellent){
            $mess1 = $Question1;
        }
        elseif($Question2==$bad || $Question2==$good|| $Question2==$very_good || $Question2==$Excellent){
            $mess2 = $Question2;
        }
        elseif($Question3==$bad || $Question3==$good|| $Question3==$very_good || $Question3==$Excellent){
            $mess3 = $Question3;
        }
        elseif($Question4==$bad || $Question4==$good|| $Question4==$very_good || $Question4==$Excellent){
            $mess4 = $Question4;
        }
        elseif($Question5==$bad || $Question5==$good|| $Question5==$very_good || $Question5==$Excellent){
            $mess5 = $Question5;
        }
    }

    $message=0;
    $result = $mess1 + $mess2 + $mess3 + $mess4 + $mess5;


    if($result <= 25){
        $message = "we will call you on this" ;
    }
    else{
        $message = "Thanks" ;
    }
    

    
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
                      
                <form method="post" action="">
                    <div class="row mt-5 p-1 bg-info">
                        <div class="col-8"><label for="colFormLabel" class="col col-form-label">Question?</label></div>
                        
                        <div class="col-4"><label for="colFormLabel2" class="col col-form-label">Review</label></div>
                        
                    </div> 

                    <div class="row  p-2 bg-secondary">
                        <div class="col-8">Are you statisfied with the level of cleanliness?</div>
                        <div class="col-4"><label for="colFormLabel2" name="q1" class="col col-form-label"><?php echo $mess1 ?></label></div>
                        
                    </div> 
                    <div class="row  p-2 bg-info">
                        <div class="col-8">Are you statisfied with the service ?</div>
                        <div class="col"><label for="colFormLabel2" name="q2" class="col col-form-label"><?php echo $mess2 ?></label></div>
                        
                    </div> 
                    <div class="row  p-2 bg-secondary">
                        <div class="col-8">Are you statisfied with the nursing service?</div>
                        <div class="col-4"><label for="colFormLabel2" class="col col-form-label"><?php echo $mess3 ?></label></div>
                    </div> 
                    <div class="row  p-2 bg-info">
                        <div class="col-8">Are you statisfied with the level of doctors?</div>
                        <div class="col-4"><label for="colFormLabel2" class="col col-form-label"><?php echo $mess4 ?></label></div>
                       
                    </div> 
                    <div class="row  p-2 bg-secondary">
                        <div class="col-8">Are you statisfied with the calmness in hospital?</div>
                        <div class="col4"><label for="colFormLabel2" class="col col-form-label"><?php echo $mess5 ?></label></div>
                      
                    </div><br>
                    <?php if(isset($message)){
                         echo  $message ;} ?>
                    <div class=" form-group">
                    <button class=" btn btn-primary" name="submit">The Result</button>
                    </div>
                </form>    
        
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>