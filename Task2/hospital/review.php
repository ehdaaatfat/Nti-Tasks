<?php

if(isset($_POST["submit"])){
    $bad=0;
    $good=3;
    $very_good=5;
    $Excellent=10;
    

    
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
                      
                <form method="post" action="result.php">
                    <div class="row mt-5 p-1 bg-info">
                        <div class="col-4"><label for="colFormLabel" class="col col-form-label">Question?</label></div>
                        <label for="colFormLabel" class="col col-form-label">Bad</label>
                        <div class="col"><label for="colFormLabel2" class="col col-form-label">Good</label></div>
                        <div class="col"><label for="colFormLabel3" class="col col-form-label">very Good</label></div>
                        <div class="col"><label for="colFormLabel4" class="col col-form-label">Excellent</label></div>
                    </div> 

                    <div class="row  p-2 bg-secondary">
                        <div class="col-4">Are you statisfied with the level of cleanliness?</div>
                        <div class="col"><input class="form-check-input " type="radio" name="<?php $bad ?>" id="colFormLabel" value="<?php $bad ?>"></div>
                        <div class="col"><input class="form-check-input" type="radio" name="q1" id="colFormLabel2" value="<?php $good ?>"></div>
                        <div class="col"><input class="form-check-input" type="radio" name="q1" id="colFormLabel3" value="<?php $very_good ?>"></div>
                        <div class="col"><input class="form-check-input" type="radio" name="<?php $Excellent ?>" id="colFormLabel4" value="<?php $Excellent ?>"></div>
                    </div> 
                    <div class="row  p-2 bg-info">
                        <div class="col-4">Are you statisfied with the service ?</div>
                        <div class="col"><input class="form-check-input " type="radio" name="q2" id="colFormLabel" value="<?php $bad ?>"></div>
                        <div class="col"><input class="form-check-input" type="radio" name="q2" id="colFormLabel2" value="<?php $good ?>"></div>
                        <div class="col"><input class="form-check-input" type="radio" name="q2" id="colFormLabel3" value="<?php $very_good ?>"></div>
                        <div class="col"><input class="form-check-input" type="radio" name="q2" id="colFormLabel4" value="<?php $Excellent ?>"></div>
                    </div> 
                    <div class="row  p-2 bg-secondary">
                        <div class="col-4">Are you statisfied with the nursing service?</div>
                        <div class="col"><input class="form-check-input " type="radio" name="q3" id="colFormLabel" value="<?php $bad ?>"></div>
                        <div class="col"><input class="form-check-input" type="radio" name="q3" id="colFormLabel2" value="<?php $good ?>"></div>
                        <div class="col"><input class="form-check-input" type="radio" name="q3" id="colFormLabel3" value="<?php $very_good ?>"></div>
                        <div class="col"><input class="form-check-input" type="radio" name="q3" id="colFormLabel4" value="<?php $Excellent ?>"></div>
                    </div> 
                    <div class="row  p-2 bg-info">
                        <div class="col-4">Are you statisfied with the level of doctors?</div>
                        <div class="col"><input class="form-check-input " type="radio" name="q4" id="colFormLabel" value="<?php $bad ?>"></div>
                        <div class="col"><input class="form-check-input" type="radio" name="q4" id="colFormLabel2" value="<?php $good ?>"></div>
                        <div class="col"><input class="form-check-input" type="radio" name="q4" id="colFormLabel3" value="<?php $very_good ?>"></div>
                        <div class="col"><input class="form-check-input" type="radio" name="q4" id="colFormLabel4" value="<?php $Excellent ?>"></div>
                    </div> 
                    <div class="row  p-2 bg-secondary">
                        <div class="col-4">Are you statisfied with the calmness in hospital?</div>
                        <div class="col"><input class="form-check-input " type="radio" name="q5" id="colFormLabel" value="<?php $bad ?>"></div>
                        <div class="col"><input class="form-check-input" type="radio" name="q5" id="colFormLabel2" value="<?php $good ?>"></div>
                        <div class="col"><input class="form-check-input" type="radio" name="q5" id="colFormLabel3" value="<?php $very_good ?>"></div>
                        <div class="col"><input class="form-check-input" type="radio" name="q5" id="colFormLabel4" value="<?php $Excellent ?>"></div>
                    </div><br>
                    
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