<?php
//connection
define('DB_HOST','localhost:3308');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','crud');
define('show_conn',false);


$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if($conn){
    if(show_conn==true){
        echo 'connection Success';
    }
    
}else{
    echo 'connection error';
}


?>