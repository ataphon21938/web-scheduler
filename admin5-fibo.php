<?php
      require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--meta-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

    <!--shortcut-->
    <link rel="shortcut icon" href="images/icon.png" title="Favicon"/>
    
    <!--style-->
    <link rel="stylesheet" type="text/css" href="css/admin5.css">
    <link rel="stylesheet" type="text/css" href="css/admin5-1.css">
    <link rel="stylesheet" type="text/css" href="css/admin5-2.css">

    <!--font&icon-->
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro|Work+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Classroom Schedule</title>
  </head>
  <style>
    body {
    background-color: #ececec;
    color: #ff6c00 ;
    font-family: 'Work Sans', sans-serif;
    font-size: 1em;
    text-align: left;}
    header {
       background: #ff6c00 none repeat-x 0 0;
       color: #FFFFFF;
       margin-top: 0px;
       padding: 0 5px;
       text-align: left;}
  </style>
  <body>
    <header>
        <img src="images/FIBO_logo.jpg" width="55" height="62" style="margin-top: 10px; margin-left: 10px">
        <div style="font-size: 1.8em; margin-top: -50px; margin-left: 80px">
        <b>Classroom Schedule</b>
        </div><br>
        </header>
        <div style="margin-top: -30px; margin-left: 500px">
        <a href="admin1.php" class="btn1"><b>Home</b></a>
        <a href="admin2.php" class="btn1"><b>User Info</b></a>
        <a href="admin3.php" class="btn1"><b>Class Info</b></a>
        <a href="admin4.php" class="btn1"><b>Class Management</b></a>
        <a href="admin5.php" class="btn1"><b>Summary</b></a>
        <a href="admin6.php" class="btn1"><b>User status</b></a>
        <a href="admin7.php" class="btn1" style=" color: #79a2ff"><b>Complete</b></a>
        </div>
        <div style="margin-top: -84px; margin-left: 1200px">
            <a href="index.php" class="btn"><b>Log out</b></a>
        </div>
        <div style="margin-top: 50px;">
            <br><b class="topics">Summary</b><br><br><br>
            <a href="admin5.php" class="btn2"><b>Teacher</b></a><br><br>
            <a href="admin5-fibo.php" class="btn2"style="background-color:#79a2ff"><b>FIBO Subjests</b></a><br><br>
            <a href="admin5-fund.php" class="btn2"><b>Fundamental Subjects</b></a><br><br>
            <a href="admin5-classroom.php" class="btn2"><b>Classroom</b></a><br><br>
        </div>
        
        <div style="margin-top: -280px; margin-left:650px">
            <p class='headfibo'><b>FIBO Subjects</b></p><br><br>
        </div>
        <div style="margin-top: 0px; margin-left:60px">
        <?php
                 $allsubject = "SELECT DISTINCT subject_code AS Subjects FROM table_subject_description_input";
                 $allsubject2 = "SELECT DISTINCT subject_name AS Subjects_name FROM table_subject_description_input";
                 $smyData2 = mysqli_query($con, $allsubject);
                 $smyData3 = mysqli_query($con, $allsubject2);
                 //$status = "SELECT teacher_status FROM table_account";
                // $mydata = mysqli_query($con,$status);
                 //$row1 = mysqli_fetch_array($mydata);
                 $save = "";
                 $x=1;
                    while($row = mysqli_fetch_array($smyData2) ){
                        //$check == $row['teacher_status'];
                        echo "<div style='margin-top:0px; margin-left:450px'class='statuskru'>";
                        echo "<p class='edit'>&nbsp&nbsp<b>".$x.".&nbsp".$row["Subjects"]."(".$row["Subjects_name"].")
                        <button class='editbutton'><i class='material-icons'>mode_edit</i></button></b></p><br>";
                        $x++;
                        //echo $row1["teacher_status"];
                        //echo $row["Subjects_name"];
                        if($save != "") {
                            echo "<p>".$save."</p><br>";
                        }
                        echo "</div>";
                    }
                //}
            ?>        
        </div>
        <div style="margin-left:30px;margin-top:0px;margin-bottom:20px;">
                <button class="howto">?</button>     
        </div>
  </body>
</html>