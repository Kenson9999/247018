<!DCTYPE html>
<html>
    <body>
       
        <?php 
            
         //PDO

         $srvername = "localhost";
         $username = "tha10000";
         $password = "UxV1t)0@";

         try{
            $conn = new PDO("mysql:HOST= $servername; dbname=tha10000_test", $username, $password);
            echo "success conneted mysql";
         }
          catch(PDOException $e){
            echo $e->getMessage();
          }


         ?>

         
            
         
        </body>

</html>
