<?php
// echo " hello";

include 'config.php';



// $name = $_POST['name'];
// $email = $_POST['email'];
// $number = $_POST['number'];
// $gender = $_POST['gender'];
// $city = $_POST['city'];

// echo "Error: " . $sql . "<br>" . mysqli_error($conn);

// if(isset($_POST['submit'])){
//     echo "Error2: " . $sql . "<br>" . mysqli_error($conn);

//     $sql = "INSERT INTO user (name, email, number, gender, city) VALUES ('$name','$email','$number','gender','city')";
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//     ini_set ('display_errors', 1);  
//     ini_set ('display_startup_errors', 1);  
//     error_reporting (E_ALL);  

//     if(mysqli_query($conn, $sql)){
//         echo "New record created sucessfully";
//     }
//     else{
//         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//     }
//     echo "Error:566 " . $sql . "<br>" . mysqli_error($conn);

// }

// $sql = "INSERT INTO user (name, email, number, gender, city) VALUES ('Test', 'Testing', '23456','df','def')";
// if (mysqli_query($conn, $sql)) {
//       echo "New record created successfully";
// } else {
//       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
// mysqli_close($conn);

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    echo " hi3";

    $sql = "INSERT INTO `user`(`name`, `email`, `number`, `gender`, `city`) VALUES ('$name','$email','$number','$gender','$city')";
    echo " hiiiii2";
    $result = mysqli_query($conn, $sql);
    echo " hi8";
    if($result){
        echo "hi4";
        echo "<script>alert('Wow! User Registration Completed.'); window.location.href='detail.php'</script>";
        $name ="";
        $email ="";
        $number ="";
        $gender ="";
        $city ="";
    }
    else{
        echo "<SCRIPT LANGUAGE='JavaScript'> window.alert('Failed to Registere'); window.location.href='javascript:history.go(-1)';</SCRIPT>";
    }

}

?>