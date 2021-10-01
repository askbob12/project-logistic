<!DOCTYPE html>
<?php
include("db.php");
include("function.php")
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="javascript.js">
</head>
<body>
<nav id="navbar" style="background-color: #7fffd4;">
    <div id="logo" style="size: 13px; border-radius: 10px;"><img src="image/logo1.png" >    TURIN</div>
    <a href="#" class="toggle-button" >
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </a>
    <div id="right-nav">
        <ul>
            <li class="home"><a href="index.html">Home</a></li>
            <li class="about"><a href="#">About</a></li>
            <li class="service"><a href="#">Services</a></li>
            <li class="contact"><a href="#">Contact</a></li>
            <li class="help"><a href="#">Help</a></li>
        </ul>
    </div>
</nav>
<div >
<section id="book" >
    <div id="horizontal" style="flex-direction: row;">
        <div id="book">
       <form action="booking.php" method="post" style=" background-color:rgb(24, 206, 160); padding: 10%;margin-right: 50%; ">
            Select city
            <br>
            <select name="city_name" id="city-select" require>
                <option value="  ">--Please Choose city</option>
                <?php
                        $get_city = "select * from city";

                        $run_city = mysqli_query($conn,$get_city);
                        while($row_city=mysqli_fetch_array($run_city)){
                            $city_id = $row_city['city_id'];
                            $city_name = $row_city['city_name'];
                    
                            echo  "<option value='$city_id'>$city_name</option>";
                        }
                ?>
           </select>
           <br>
           <input type="text" name="cust_pickup" placeholder="Pickup Address" require>
           <br>
           <input type="text" name="cust_drop" placeholder="DropOff Address" require>
           <br>
           <input type="number" name="cust_mobile" placeholder="Mobile Number" require>
           <br>
           <input type="text" name="cust_name"  placeholder="Name (Optional)" require>
           <br>
           <select name="req_name" id="requirement-select" require>
                <option value=" ">Requirement</option>
                    <?php
                          $get_req="select * from requirement";
                          $run_req=mysqli_query($conn,$get_req);
                          while($row_req=mysqli_fetch_array($run_req)){
                              $req_id=$row_req['req_id'];
                              $req_name=$row_req['req_name'];
                               echo  "<option value='$req_id'>$req_name</option>";
                          
                          }
                    ?>
            </select>
            <br>
            <button type="submit" name="insert_post" >Get Estimate</button>
        </form> 
    </div>
</section>
<section id="right" style="float: right; margin-top: -27%; margin-right: 10%;">
    <h1 style="text-align: center;font-size: 35px; color: rgb(58, 44, 136);">Click, Book & done</h1>
    <h3 style="margin-top: 17px; color: rgb(192, 55, 55);">Book a tempo to your desired destination as we provide you the same-day</h3>
    <h3 style="margin-top: 17px; color: rgb(192, 55, 55);text-align: center; ">delivery by connecting with our professional land pilots.</h3>
</section>
</div>
<footer style="text-align: center;">

    <div>
        <p>copyright &copy; www.logistic.com All right are reserved</p>
          <a href="#help">help</a>      <a href="#client-section"> about</a>    
          <a href="#homepage">TURIN</a>      <a href="#service">service</a> 
    </div>
</footer>
</body>
</html>

<?php
    if(isset($_POST['insert_post'])){
        //getting text data from the table
        $city_name =    $_POST['city_name'];
        $cust_pickup =  $_POST['cust_pickup'];
        $cust_drop =    $_POST['cust_drop'];
        $cust_mobile =  $_POST['cust_mobile'];
        $cust_name =    $_POST['cust_name'];
        $req_name =     $_POST['req_name'];
        //g
        $insert_data ="insert into detail1(city_name,cust_pickup,cust_drop,cust_mobile,cust_name,req_name)values('$city_name','$cust_pickup','$cust_drop','$cust_mobile','$cust_name','$req_name')";      
        
        $insert_pro = mysqli_query($conn,$insert_data);
        if($insert_pro){
            echo "<script>alert('Thank you for Booking!!!')</script>";
            echo "<script>window.open('booking.php','self')</script>";
    }
    }
       
        ?>