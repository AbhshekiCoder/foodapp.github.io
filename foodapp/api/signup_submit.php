<?php
$conn = mysqli_connect("127.0.0.1","root", "", "foodapp");
if(!$conn){
    $response = array("success" => false , "message" => "Something went wrong");
    echo json_encode($response);
    return;

}
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$password = sha1($password);
$gender = $_POST['gender'];
$sql = "SELECT * From  users WHERE email = '$email' OR phone = '$phone'";
$result = mysqli_query($conn, $sql);
if(!$result){
    $response = array("success" => false , "message" => "Something went wrong");
    echo json_encode($response);
    return;

}
$row_count = mysqli_num_rows($result);
if($row_count != 0){
    $response = array("success" => false , "message" => "This email and phone already registered with us");
    echo json_encode($response);
    return;
}
$sql = "INSERT INTO users (name, email, phone, password, gender)VALUES('$name','$email','$phone','$password','$gender') ";
$result = mysqli_query($conn, $sql);
if(!$result){
    $response = array("success" => false , "message" => "Something went wrong");
    echo json_encode($response);
    return;

}
$response = array("success" => true, "message" => "Registration Successfully");
echo json_encode($response);
mysqli_close($conn);
?>