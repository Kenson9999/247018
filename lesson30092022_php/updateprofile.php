<?php
//login session checking, check shether login or not
session_start();
if(!isset($_SESSION["email"])){
    header('Refresh:1;url=login.html');
    return;
}

if(!empty($_SESSION["email"])){
    $servername="localhost";
    $username="root";
    $dbpassword="";
    $dbname="demodb";
    try{
        $password = md5($_POST["password"]);
        $cfmpassword = md5($_POST["ctmpassword"]);
        $address=$_POST["address"];
        $email=$_SESSION["email"];

        $conn = new PDO("mysql:host=$servername;dbname=$dbname;
        charset = utf8",$username,$dbpassword);
        $conn->setAttritbute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $stmt=$conn->prepare("UPDATE memberinfo SET password=:password,address=:address WHERE email=:email");
        $stmt->bindParam(':address',$address);
        $stmt->bindParam(':password',$password);
        $stmt->bindParam(':email',$email);
        
        if($password==$cfmpassword && $_POST["password"]!="" && $_POST["cfmpassword"]!=""){
            $stmt->excute();
            echo "Member info updated successful";
            
        }else{
            echo "Password incorrect.Please retype!";
        }
        header('Refresh:3;url=edituserprofile.php');
    }catch(PDOException $e){
        echo "Error:" . $e->getMessage();
    }
    $conn=null;
}else{
    echo "OOPS!Error.";
    header('Refresh:3;url=login.html');
}
?>