<?php
session_start();
$conn = mysqli_connect("127.0.0.1","root", "", "foodapp");
if(!$conn){
    $response = array("success" => false , "message" => "Something went wrong");
    echo json_encode($response);
    return;

}
$email = $_POST['email'];
$password = $_POST['password'];
$password = sha1($password);
$sql = "SELECT * From users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $sql);
if(!$result){
    $response = array("success" => false , "message" => "something went wrong");
    echo json_encode($response);
    return;
}
$row_count = mysqli_num_rows($result);
if($row_count == 0){
    $response = array("success" => false , "message" => "Invalid email or password");
    echo json_encode($response);
    return;
}
$row = mysqli_fetch_assoc($result);
$_SESSION['user_id'] = $row['id'];
$_SESSION['name'] = $row['name'];
$_SESSION['email'] = $row['email'];
$response = array("success" => true, "message" => "Login Successfully");
echo json_encode($response);
mysqli_close($conn);

?>