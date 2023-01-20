<html>
<?php
  include "connection.php";
  $mycontent="";
	 $query="select * from questions";
	
	
	 $result=mysqli_query($conn, $query);


	if($result) 
	{
		 $count=mysqli_num_rows($result);
		while($record=mysqli_fetch_assoc($result))
    {

            $mycontent .= '

     <h4 class="text-capitalize"> Que :&nbsp; <span>'.$record["question"].'</span></h4>

        <div class="imgbox">
            <img src='.$record["img"].' width="100%" height="200px" class="img-responsive" alt="">
        </div>
        <ul class="list-unstyled my-2">
             <li class="mb-2">A) <span>'.$record["opt1"].'</span></li>
            <li class="mb-2">B) <span>'.$record["opt2"].'</span></li>
            <li class="mb-2">C) <span>'.$record["opt3"].'</span></li>
            <li class="">D) <span>'.$record["opt4"].'</span></li>
            <li class="text-success mt-3">Answer : &nbsp;<span>'.$record["answer"].'</span></li>
        </ul>
     ';

        }
    }
 ?>






<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>See Questions</title>
</head>

<body>
    <?php require 'navbar.php'?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">

        </script>


<div class="container my-4">
    <h2 class="text-capitalize text-center my-2">questions and answers</h2>

    <div class="content">
        <div class="mycontent">
        <?php echo $mycontent; ?>
        </div>
    </div>

</div>

</body>

</html>




