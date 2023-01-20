<?php
include "connection.php";
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

    <title>Add Questions</title>
</head>

<body>
    <?php require 'navbar.php'?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
          
        
        <div class="container">
            <h1 style="text-center my-4 mx-auto">Add New Question</h1>
                    <form action="" method="POST" enctype="multipart/form-data" class="py-2">              
        <div class="card-body card-block">

             <div class="form-group">
                <label for="question" class=" form-control-label">Question</label>
                 <input type="text" id="question" name="question" placeholder=""  required class="form-control">
            </div>

           <div class="form-group">
                <label for="fopt1" class=" form-control-label">Image</label>
                 <input type="file" accept="image/*" id="file" name="file" value="" class="form-control">
            </div> 
            
             <div class="form-group">
                <label for="opt1" class=" form-control-label">Option 1</label>
                 <input type="text" id="opt1" name="opt1" placeholder="" required class="form-control">
            </div>
                                                
            <div class="form-group">
                <label for="opt2" class=" form-control-label">Option 2</label>
                 <input type="text" id="opt2" name="opt2" placeholder="" required class="form-control">
            </div>
                                                
            <div class="form-group">
                 <label for="opt3" class=" form-control-label">Option 3</label>
                 <input type="text" id="opt3" name="opt3" placeholder="" required class="form-control">
            </div>
                                                
            <div class="form-group">
                 <label for="opt4" class=" form-control-label">Option 4</label>
                 <input type="text" id="opt4" name="opt4" placeholder=""  required 
                 class="form-control">
            </div>
                                                
            <div class="form-group">
                 <label for="answer" class=" form-control-label">Answer</label>
                 <input type="text" id="answer" name="answer" placeholder="" required class="form-control">
             </div>
                                                

             <div class="form-group">
                 <button type="submit" name="submit" class="btn btn-dark  text-light mt-4">Submit</button>
             </div>
                                                                                                                   
          </div>
</form>  
</div>

</body>

</html>

<?php
// insert query for question 
if(isset($_POST['submit']))
{
    
    $ques = $_POST['question'];
    $opt1 = $_POST['opt1'];
    $opt2 = $_POST['opt2'];
    $opt3 = $_POST['opt3'];
    $opt4 = $_POST['opt4'];
    $ans  = $_POST['answer'];
    $name = $_FILES['file']['name'];

 
     $target_dir = "uploads/";
     $target_file = $target_dir . basename($_FILES["file"]["name"]);

     // Select file type
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


    
                $sql = "INSERT INTO `questions`( `question`, `img`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`) VALUES ('$ques','$target_file','$opt1', '$opt2', '$opt3', '$opt4', '$ans')";
                $result = mysqli_query($conn, $sql);

      


    if ($result) {
       
       echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your question added successfully done.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
                

    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Warning!</strong> Your question added Unsuccessfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }

}


?>

