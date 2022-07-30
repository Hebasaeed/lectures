<?php
/////////////////  task in lecture /////////////////

//     for ($ii=0; $ii < 8; $ii++) { // for column
    
//     for ($iy=0; $iy < 8; $iy++) { // for raw

//         if ((($ii+$iy)%2)==0){
//             echo "@white@";
//         }else{
//             echo "  black  ";
//         }

//     }
//     echo "<br>";
// }

?>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Register</h2>

        <form action="
        <?php //echo $_SERVER['PHP_SELF']; ?>
        "  method="post" enctype="multipart/form-data" >

            <div class="form-group">
                <label for="exampleInputTitle">title</label>
                <input type="text" class="form-control" id="exampleInputTitle"   required aria-describedby=""   name="title" placeholder="Enter Title">
            </div>


            <div class="form-group">
                <label for="exampleInputContent">content </label>
                <input type="text" class="form-control" id="exampleInputContent"  required aria-describedby="" name="content" placeholder="Enter content">
            </div>


            <div class="form-group">
                <label for="exampleInputSdate">startdate</label>
                <input type="date" class="form-control" id="exampleInputSdate"  required aria-describedby="" name="startdate" placeholder="Enter  start date">
            </div>


            <div class="form-group">
                <label for="exampleInputEdate">enddate</label>
                <input type="date" class="form-control" id="exampleInputEdate"  required aria-describedby="" name="enddate" placeholder="Enter  end date">
            </div>

            <div class="form-group">
                <label for="exampleInputImage">Image</label>
                <input type="file" name="image">
            </div>

            <button type="submit" class="btn btn-primary">submit</button>
        </form>
    </div>


    <br>

</body>

</html>  
 -->


 <!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
        <table  width=900px   height=600px>

        <?php
        for ($raw=0; $raw < 8; $raw++) { // for raw -----------> raws
         echo   '<tr>';
               
              
    for ($column=0; $column < 8; $column++) { // for column -------------> values of raw
        
        if ((($raw+$column)%2)==0){
            //echo "@white@";

            echo ' <td    height=38 width=38  bgcolor=#FFFFFF ></td>';
    
          }else{
           // echo "  black  ";
        
           echo ' <td     height=38  width=38  bgcolor=#000000 ></td>';

        }
    }
    
         echo '</tr>';
    
    

        }
// continue = skip for this iteration and continue after this iteration
   ?>
  </table>
 </div>
</body>

</html> 



