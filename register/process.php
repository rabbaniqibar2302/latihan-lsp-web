<?php 

require '../koneksi.php';

function tambahUser($data){

    global $conn;

    $username = htmlspecialchars($data["username"]);
    $name = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $role = $data["roles"];

    $query = "INSERT INTO user VALUES(NULL, '$username', '$name', '$password', '$role')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



?>