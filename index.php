<?php 

$msg = '';
$num1 = rand(1,20);
$num2 = rand(1,10);
$both = $num1."+".$num2;
if(isset($_POST['submit'])){
    $usersum = $_POST['usersum'];
    $no1 = $_POST['no1'];
    $no2 = $_POST['no2'];
    $total = $no1+$no2;
    if($total == $usersum){
        $msg = "<h4 class='text-center text-success'>you are human</h4>";
    }else{
        $msg = "<h4 class='text-center text-danger'>you are robot</h4>";
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>captcha</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-12 bg-primary">
<h5 class="text-center text-white">PHP captcha</h5>


</div>




</div>

</div>
<br>
<div class="container justify-content-center">

<div class="col-sm-12">
<div class="row">

<div class="col-sm-3 bg-dark">
<h5 class="text-center text-white">CAPTCHA :</h5>
<p class="text-white text-center" style="font-size:35px;"><?php echo $both;?></p>

</div>
<div class="card col-sm-7">


<br>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<div class="form-group">
<label for="">Enter sum </label>
<input type="text" name="usersum" class="form-control">

</div>
<div class="form-group">

<input type="hidden" name="no1" value="<?php echo $num1;?>">
<input type="hidden" name="no2" value="<?php echo $num2;?>">
<input type="submit" name="submit" value="SUBMIT" class="btn btn-primary form-control">

</div>


</form>
<?php  echo $msg;?>
</div>


</div>




</div>

</div>







  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</body>
</html>