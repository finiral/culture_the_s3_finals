<?php 
function dbConnect()
{
    static $connect=null;
    if($connect===null)

    {   
        //$connect=mysqli_connect("172.20.0.167","ETU002708","fj43gRCIMWTX","db_p16_ETU002708","3306");
        $connect=mysqli_connect("localhost","root","","thecompany","3306");
    }
    return $connect;
    
}

?>