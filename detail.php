<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <table>
                <tr>
                    
                    <th width="20%">Name</th>
                    <th width="20%">Gender</th>
                    <th width="20%">Mobile</th>
                    <th width="20%">Email ID</th>
                    <th width="20%">City</th>
                </tr>
                
                <?php
                include("config.php");
                $query1 = "SELECT * FROM user";

                $data1 = mysqli_query($conn, $query1);
                $total1 = mysqli_num_rows($data1);

                ini_set ('display_errors', 1);  
                ini_set ('display_startup_errors', 1);  
                error_reporting (E_ALL);  
                // echo $data1;
                // echo $total1;

                if($total1!=0){
                    while($result1= mysqli_fetch_assoc($data1)){
                        echo "
                        <tr>
                        <td>".$result1['name']."</td>
                        <td>".$result1['gender']."</td>
                        <td>".$result1['number']."</td>
                        <td>".$result1['email']."</td>
                        <td>".$result1['city']."</td>
                        ";
                    }
                }
            
?>


        </table>
    </div>
</body>
</html>