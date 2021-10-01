<?php
$servername="localhost";
$user="root";
$password="";
$dbname="booking";

//create connection
$conn = new mysqli($servername,$user,$password,$dbname);

//check connection
if($conn->connect_error){
    die("Connection failed " .$conn->connect_error);

}


//getting city
function getCity(){
    global $conn;

    $get_city = "select * from city";

    $run_city = mysqli_query($conn,$get_city);
    while($row_city=mysqli_fetch_array($run_city)){
        $city_id = $row_city['city_id'];
        $city_name = $row_city['city_name'];

        echo  "<option> <a>$city_name</a></option>";
    }
}


//getting requirement
function getReq(){
    global $conn;

    $get_req="select * from requirement";
    $run_req=mysqli_query($conn,$get_req);
    while($row_req=mysqli_fetch_array($run_req)){
        $req_id=$row_req['req_id'];
        $req_name=$row_req['req_name'];
        echo  "<option> <a>$req_name</a></option>";
    
    }
}
























?>