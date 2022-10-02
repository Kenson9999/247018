<?php
if($_POST!=NULL){
    $servername="localhost";
    $username="root";
    $dbpassword="";
    $dbname="";
try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;
    charset=utf8",$username,$dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("INSERT INTO memberinfo (email,password,fullname,gender,dob,phone,address) VALUES (:email,:password,:fullname,:gender,:dob,:phone,:address)");
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':password',$password);
    $stmt->bindParam(':fullname',$fullname);
    $stmt->bindParam(':gender',$gender);
    $stmt->bindParam(':dob',$dob);
    $stmt->bindParam(':phone',$phone);
    $stmt->bindParam(':address',$address);

    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $fullname = $_POST["fullname"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $stmt->execute();
    echo "Member account created successful";
    header('Refresh:3;url=login.html');
}
catch(PDOException $e){
    //echo "Error:" .$e->getMessage();
    if($e->errorInfo[1]==1062){
        header('Refresh:3;url=join.html?error=1062');
    }
}
$conn = null;
}else{
    echo "OOPS! Error.";
    header('Refresh:3;url=join.html');
}
?>