

<?php
//Creates new record as per request
   $UIDresult=$_POST["UIDresult"];
    
    $Write="<?php $" . "UIDresult='" . $UIDresult . "'; " . "echo $" . "UIDresult;" . " ?>";
    file_put_contents('UIDContainer.php',$Write);
    
   $hostname = "localhost";     //example = localhost or 192.168.0.0
        $username = "root";     //example = root
        $password = ""; 
        $dbname = "nodemcu_rfidrc522_mysql";
        // Create connection
        $conn = mysqli_connect($hostname, $username, $password, $dbname);
        
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }

    //Get current date and time
    date_default_timezone_set('Asia/Dhaka');
    $d = date("Y-m-d");
    $t = date("H:i:s");

    if(!empty($_POST['UIDresult']))
    {
        $UIDresult = $_POST['UIDresult'];
        $sql = "INSERT INTO nodemcu_ldr_table (id, Date, Time) VALUES ('".$UIDresult."', '".$d."', '".$t."')"; //nodemcu_ldr_table = Youre_table_name

        if ($conn->query($sql) === TRUE) {
            echo "OK";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }


    $conn->close();
?>

