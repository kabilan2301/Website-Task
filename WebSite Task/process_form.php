<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "test");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_POST['name']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$address = mysqli_real_escape_string($link, $_POST['address']);
$country = mysqli_real_escape_string($link, $_POST['country']);
$gender = mysqli_real_escape_string($link, $_POST['gender']);
$qualification = mysqli_real_escape_string($link, $_POST['qualification']);

// attempt insert query execution
$sql = "INSERT INTO kabil (name,email,address,country,gender,qualification) VALUES ('$name','$email','$address','$country','$gender','$qualification')";
if(mysqli_query($link, $sql)){
echo  '<script>alert("Registration Successfull")</script>';

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
echo '<script type="text/javascript">window.close()</script>'
?>
