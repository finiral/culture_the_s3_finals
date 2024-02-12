<?php 
function dbConnect()
{
    static $connect=null;
    if($connect===null)
    {
        $connect=mysqli_connect("localhost","root","","crypto","3306");
    }
    return $connect;
    
}

?>