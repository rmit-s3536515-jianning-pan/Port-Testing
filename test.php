<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Port Testing</title>
  </head>
  <body>

    <?php


    $sn = $_POST['sn'];
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];

    $_SESSION['sn'] = $sn;
    $_SESSION['p1'] = $p1;
    $_SESSION['p2'] = $p2;

    if(!is_numeric($p1) || !is_numeric($p2)){
      echo "<script type='text/javascript'> alert('You must enter number on the port'); window.location='index.php';</script>";

    } else if(($p1 >=61000 && $p1 <=61999) && ($p2 >=61000 && $p2 <=61999)){
        $snFound = false;
        $array = array(); // array for storing all the port from the txt file

        if($p1==$p2){
            echo "<script type='text/javascript'> alert('You can not have two same port!!!! '); window.location='index.php';</script>";
        }

        foreach(file('sample.txt') as $lines){
          $row = explode(",",$lines);
          echo $row[2]."<br>";
          if($row[0]==$sn){ //if already have this user
              $snFound = true;
              echo "<script type='text/javascript'> alert('You already have two ports!!!! '); window.location='index.php';</script>";
              // break;
          }
          array_push($array,$row[1],$row[2]);
        }

        print_r($array);
        if(in_array($p1,$array) || in_array($p2,$array)){ // the port already taken
            echo "<script type='text/javascript'> alert('Ports have already been taken by someone!! '); window.location='index.php';</script>";
        }
        else{ // not taken
          // echo "not found";
          $file = fopen("sample.txt",'a');
          fwrite($file,$sn.",".$p1.",".$p2."\n");
          fclose($file);
          echo "<script type='text/javascript'> alert('You just take two port!!'); window.location='index.php';</script>";
        }

    }
    else{
      echo "<script type='text/javascript'> alert('You must enter valid number from 61000 to 61999 on the port');window.location='index.php'; </script>";

    }


      ?>
  </body>
</html>
