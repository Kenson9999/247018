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
    $stmt = $conn->prepare("SELECT email, password FROM memberinfo WHERE email = :email AND password = :password");
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':password',$password);

    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $stmt->execute();
    if($stmt->rowCount()>0){
        $loginCredentials=$stmt->fetch(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION['email']=$loginCredentials["email"];
        $_SESSION["password"]=$loginCredentials["password"];
        echo "Login successful";
        //header(''Refresh:3;url=tables.php');
        header('Refresh:2;url=edituserprofile.php');
    }else{
        echo "Login or Password are invalid. Try again!";
        header('Refresh:3;url=login.html');
    }
}
catch(PDOException $e){
    echo "Error:" . $e->getMessage();
}
$conn=null;
}else{
    echo "OOPS!Error.";
    header('Refresh:3;url=login.html');
}
?>