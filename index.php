<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Port Testing</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </head>
  <body>

    <div class="container-fluid bg-primary">

        <h1 class="text-center">Network Programming Port Demo</h1>
    </div>

    <div class="container">


          <form id="f" action="test.php" method="post">
            <div class="form-group">
                <label for="">Student Number: </label>
                <input id="sn" class="form-control" type="text" name="sn" value="<?php echo isset($_SESSION['sn']) ? $_SESSION['sn'] : '' ?>" placeholder='Please enter your student number' required>
            </div>

            <div class="form-group">
                <label for="">Port Number 1 :</label>
                <input id="p1" class="form-control" type="text" name="p1" value="<?php echo isset($_SESSION['p1']) ? $_SESSION['p1'] : '' ?>" placeholder='Please enter your first port number' required>
            </div>

            <div class="form-group">
                <label for=""> Port Number 2 : </label>
                <input id="p2" class="form-control" type="text" name="p2" value="<?php echo isset($_SESSION['p2']) ? $_SESSION['p2'] : '' ?>" placeholder='Please enter your second port number' required> <br>
            </div>

            <input id="submit-button" type="submit" name="submit" class="btn btn-primary" value="Submit" onclick="validate()">
          </form>
    </div>
  <script type="text/javascript">

    function validate(){



      if(!isNaN(p1) && p1 >=61000 && p1<=61999){
        // alert
      }
      // console.log(sn);
    }
    $(document).ready(function(){
      $("#submit-button").click(function(){
        var sn = $('#sn').value();
        var p1 = $('#p1').value();
        var p2 = $('#p2').value();
        if(!$.isNumeric(p1) || !$.isNumeric(p2) ){ // is not a number
            event.preventDefault();
            alert("Must be number");

        }
        else{

        }
      })
    })
    // $(document).ready(function(){
    //   $("#f").submit(function(){
    //
    //         jquery.post('sample.txt',function(data){
    //           var lines = data.split('/n');
    //           $.each(lines, function(key , value)
    //           {
    //               alert("key : " + key + ", value : " + value);
    //           });
    //           event.preventDefault();
    //           alert("Submitted");
    //
    //         });
    //
    //   });
      // $("#submit-button").click(function(){
      //   // $(this).submit(function(event){
      //
      //     alert("Submitted");
      //     event.preventDefault();
      //   // });
      // });
    });
  </script>
  </body>

</html>
