<?php
$con= mysqli_connect('localhost', 'root', '', 'mystore');
if($con){
    echo "connection sucessful";

}else{
    die(mysqli_error($con));
}

?>