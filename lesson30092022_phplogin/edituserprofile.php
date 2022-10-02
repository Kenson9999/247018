<?php
    $servername="localhost";
    $username="root";
    $dbpassword="";
    $dbname="";
try{
    //login session checking,check whether login or not session_start();
    session_start();
    if(!isset($_SESSION["email"])){
        header('Refresh:1;url=login.html');
        return;
    }
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;
    charset=utf8",$username,$dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT email, password FROM memberinfo WHERE email = :email AND password = :password");
    $email = $_SESSION["email"];
    $password = $_SESSION["password"];
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':password',$password);
    $stmt->execute();
    $result = $stmt->fetchAll();
}catch(PDOException $e){
    echo "Error:" . $e->getMessage();
    header('Refresh:3;url=login.html');
}
$conn=null;//close connection when the script done
?>


</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
        id="bootstrap-css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user profile</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">My Profile</a>
                    <a href="logoutprocess.php" class="list-group-item">Logout</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>User Profile</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form name="my-form" action="./updateprofile.php" method="post">
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            Email:
                                            <?php echo $email ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-md-right">Password</label>
                                        <div class="col-md-8">
                                            <input type="password" id="password" class="form-control"
                                                placeholder="Password" name="password" value=""><br>
                                            <input type="password" id="cfmpassword" class="form-control"
                                                placeholder="Confirm Password" name="cfmpassword" value="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="address"
                                            class="col-md-4 col-md-4 col-form-label text-md-right">Address</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" name="address"></textarea>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group row">
                                        <label for="fullname"
                                            class="col-md-4 col-md-4 col-form-label text-md-right">Fullname</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" name="fullname"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone"
                                            class="col-md-4 col-md-4 col-form-label text-md-right">Phone</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" name="phone"></textarea>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <button type="submit" class="btn btn-waring">
                                                Update My Profile
                                            </button>
                                            <button type="reset" class="btn btn-warning">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>