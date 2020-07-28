


                  <!DOCTYPE html>
<html lang="en">
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery.min.js"></script>
    <script>
      $(document).ready(function(){
         $("#getUID").load("UIDContainer.php");
        setInterval(function() {
          $("#getUID").load("UIDContainer.php");
        }, 500);
      });
    </script>
    
    <style>
    html {
      font-family: Arial;
      display: inline-block;
      margin: 0px auto;
    }
    
    textarea {
      resize: none;
    }

    ul.topnav {
      list-style-type: none;
      margin: auto;
      padding: 0;
      overflow: hidden;
      background-color: #4CAF50;
      width: 70%;
    }

    ul.topnav li {float: left;}

    ul.topnav li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    ul.topnav li a:hover:not(.active) {background-color: #3e8e41;}

    ul.topnav li a.active {background-color: #333;}

    ul.topnav li.right {float: right;}

    @media screen and (max-width: 600px) {
      ul.topnav li.right, 
      ul.topnav li {float: none;}
    }
    </style>
    
    <title>Registration : RFID Based Attendance System</title>
  </head>
  
  <body>

    <h2 align="center">RFID Based Attendance System</h2>
    <ul class="topnav">
      <li><a href="attview.php">Home</a></li>
      <li><a href="user data.php">User Data</a></li>
      <li><a  href="registration.php">Registration</a></li>
      <li><a href="read tag.php">Read Tag ID</a></li>
      <li><a  class="active" href="attcount.php">Attendance Count</a></li>

    </ul>
    <div class="container">
            <div class="row">
                <h3>User Data Table</h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr bgcolor="#10a0c5" color="#FFFFFF">
                      <th>No</th>
                      <th>id</th>
            <th>Date</th>
            <th>Time</th>
            
                    </tr>
                  </thead>
                  <tbody>

                     <?php
                   
    

  


                   $getUID=$_POST["getUID"];
                   include 'database.php';
                   $pdo = Database::connect();
                  
 
                   $sql = "SELECT * FROM nodemcu_ldr_table where id ='$getUID' ";
                   foreach ($pdo->query($sql) as $row) {
                    
                            echo '<tr>';
                            echo '<td>'. $row['No'] . '</td>';
                            echo '<td>'. $row['id'] . '</td>';
                            echo '<td>'. $row['Date'] . '</td>';
                            echo '<td>'. $row['Time'] . '</td>';
                            
                          echo '</td>';
                            echo '</tr>';

                   }
                 
                   Database::disconnect();
                  ?>
     
                  </tbody>
        </table>
      </div>
    </div> <!
               