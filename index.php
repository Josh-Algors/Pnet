<?php   
session_start();  
include ("database.php");
$state = "you";
if(!isset($_SESSION["login"])){  
    header("location:http://localhost/pnetdata/login/index.htm");  
}
if(($_POST["state"]=="GLO") && (isset($_SESSION["login"]))){
  if($_POST["countrya"]=="1GB for 480"){
    header("Location: http://paystack.com/1/globacom.php");
  }
  if($_POST["countrya"]=="2.3GB for 960"){
    header("Location: http://paystack.com/2/globacom.php");
  }
  if($_POST["countrya"]=="3.7GB for 1430"){
    header("Location: http://paystack.com/3/globacom.php");
  }
  if($_POST["countrya"]=="5.25GB for 1900"){
    header("Location: http://paystack.com/4/globacom.php");
  }
   }
if(($_POST["state"]=="MTN") && (isset($_SESSION["login"]))){
  if($_POST["countrya"]=="500MB for 175"){
    header("Location: http://paystack.com/1/MTN.php");
  }
  if($_POST["countrya"]=="1GB for 330"){
    header("Location: http://paystack.com/2/MTN.php");
  }
  if($_POST["countrya"]=="2GB for 660"){
    header("Location: http://paystack.com/3/MTN.php");
  }
  if($_POST["countrya"]=="3GB for 1000"){
    header("Location: http://paystack.com/4/MTN.php");
  }
  if($_POST["countrya"]=="5GB for 1650"){
    header("Location: http://paystack.com/5/MTN.php");
  }
 }
if(($_POST["state"]=="AIRTEL") && (isset($_SESSION["login"]))){
  if($_POST["countrya"]=="1.5GB for 1000"){
    header("Location: http://paystack.com/1/Airtel.php");
  }
  if($_POST["countrya"]=="2GB for 1200"){
    header("Location: http://paystack.com/2/Airtel.php");
  }
  if($_POST["countrya"]=="3GB for 1450"){
    header("Location: http://paystack.com/3/Airtel.php");
  }
  if($_POST["countrya"]=="4.5GB for 2000"){
    header("Location: http://paystack.com/4/Airtel.php");
  } }
if(($_POST["state"]=="9MOBILE") && (isset($_SESSION["login"]))){
  if($_POST["countrya"]=="1.5GB for 950"){
    header("Location: http://paystack.com/1/9mobile.php");
  }
  if($_POST["countrya"]=="2GB for 1150"){
    header("Location: http://paystack.com/2/9mobile.php");
  }
  if($_POST["countrya"]=="4.5GB for 1900"){
    header("Location: http://paystack.com/3/9mobile.php");
  }
 }
 if(isset($_SESSION["admin"]) && isset($_SESSION["login"])){
  header("Location: http://localhost/pnetdata/login/login.php");
 }
if(isset($_SESSION["login"])){  
?>  

<!DOCTYPE html>
<html lang="en">
<head>
      
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162222857-3"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-162222857-3');
        </script>

      
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="robots" content="index, follow">
      <meta name="description" content="Invest Your Money today with Wazobia Investment. It’s super simple - Your signup process had been made easy. As soon as your payment is received, you will earn your first profit of 50% interest in 3 days using our unbeatable Investment Programme. Get started today!">
      <meta name="keywords" content="Dashboard | Wazobia Investment, wazobia, investment, investments, ponzi, ponzi scheme, Naira, Bitcoin, Nigeria, Money, Invest, Wazobia Investment, Donation, Donate, bitcoin investment, altcoin investment, cloud investment">


      <meta name="google-site-verification" content="">
      <meta name="naver-site-verification" content="">

      <title>Dashboard | Wazobia Investment</title>

      <link rel="icon" type="image/png" href="../img/logo1.jpg">

      <!-- CSS -->
      <link rel="stylesheet" type="text/css" href="../css/theme1/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/theme1/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/theme1/morris.css">
  <link rel="stylesheet" type="text/css" href="../css/theme1/bootstrap-select.min.css">
  <link rel="stylesheet" type="text/css" href="../css/theme1/style_dash.min.css">
  <link rel="stylesheet" type="text/css" href="../css/theme1/custom.css">
  <link rel="stylesheet" type="text/css" href="../css/theme1/jquery.dataTables.css">

  <!--<script src="https://www.wazobiaweb.cash/js/theme1/365584476983376" async=""></script>
  <script async="" src="https://www.wazobiaweb.cash/js/theme1/fbevents.js"></script>
  <script type="text/javascript" async="" src="https://www.wazobiaweb.cash/js/theme1/2700f421a76d827cbf11f5f8099b08e11837c20b.1.js"></script>
  <script type="text/javascript" async="" src="https://www.wazobiaweb.cash/js/theme1/i.js"></script>
  <script type="text/javascript" async="" src="https://www.wazobiaweb.cash/js/theme1/_Incapsula_Resource"></script>-->
  <script async="" src="../js/theme1/analytics.js"></script>
  <script type="text/javascript" src="../js/theme1/jquery-2.1.2.min.js"></script>
  <script type="text/javascript" src="../js/theme1/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/theme1/menu.js"></script>
  <script type="text/javascript" src="../js/theme1/raphael-min.js"></script>
  <script type="text/javascript" src="../js/theme1/morris.js"></script>
  <script type="text/javascript" src="../js/theme1/dashboard.js"></script>
  <script type="text/javascript" src="../js/theme1/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="../js/theme1/dataTables.js"></script>
    <script type="text/javascript" src="../js/theme1/svg4everybody.min.js"></script>
    <script type="text/javascript">svg4everybody();</script>
    
    <link href="../css/theme1/widget.css" rel="stylesheet">
    <script async="true" type="text/javascript" src="../js/theme1/roundtrip.js"></script>
    <div style="width: 1px; height: 1px; display: inline; position: absolute;">
      <img height="1" width="1" style="border-style:none;" alt="" src="../css/theme1/out">
      <img height="1" width="1" style="border-style:none;" alt="" src="../css/theme1/out(1)">
      <img height="1" width="1" style="border-style:none;" alt="" src="../css/theme1/out(2)">
      <img height="1" width="1" style="border-style:none;" alt="" src="../css/theme1/out(3)">
      <img height="1" width="1" style="border-style:none;" alt="" src="../css/theme1/out(4)">
      <img height="1" width="1" style="border-style:none;" alt="" src="../css/theme1/out(5)">
      <img height="1" width="1" style="border-style:none;" alt="" src="../css/theme1/out(6)">
    </div>
    <div style="width: 1px; height: 1px; display: inline; position: absolute;">
      <img height="1" width="1" style="border-style:none;" alt="" src="../css/theme1/out(7)">
      <img height="1" width="1" style="border-style:none;" alt="" src="../css/theme1/out(8)">
      <img height="1" width="1" style="border-style:none;" alt="" src="../css/theme1/out(9)">
      <img height="1" width="1" style="border-style:none;" alt="" src="../css/theme1/out(10)">
      <img height="1" width="1" style="border-style:none;" alt="" src="../css/theme1/out(11)">
      <img height="1" width="1" style="border-style:none;" alt="" src="../css/theme1/out(12)">
    </div>
  </head>
<body >

<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<div >
</div>
<div  class="container">
    <div class="row splash-main">
    
        <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <h4>Welcome, <?=$_SESSION['login'];?>!  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="http://localhost/pnetdata/dashboard/logout.php">Logout</a></h4>
            <span>Select your data plan.</span>

            <form action="" id="UserLoginNowForm" method="post" accept-charset="utf-8">
	            <div style="display:none;"><input type="hidden" name="_method" value="POST">
	            	<input type="hidden" name="key" value="6Lfwu8sUAAAAAGi3hFs-D8F8o2ZLI1mzBA2fIRiS" id="Token1532892527">
	            </div>
	            <div class="form-group required">
                <select name="state" id="network" size="1" required="required">
                        <option value="" selected="selected">Select Network</option>
                        </select>
                    </div>
	            <div class="form-group required">
                <select name="countrya" id="data" size="1" required="required">
<option value="" selected="selected" >Select Data Plan</option>
</select>
	            	 </div>
           

<div class="form-group required">
            <input  name="phone" class="form-control" placeholder="Phone Number" minlength="11" maxlength="11" type="text" id="phone" required="required" value="">
          </div>
          
	            
	            <div class="form-group captcha-box">
	                                                <!--<div class="g-recaptcha" data-sitekey="6Lfwu8sUAAAAAGi3hFs-D8F8o2ZLI1mzBA2fIRiS" data-callback="enableBtn"></div>--> 
                        	            		<div class="submit">
		            		<input class="btn btn-primary" style="color:#ffffff; text-align:center;" onclick= payWithPaystack() name="btnlogin" id="signInButton" type="submit" value="Buy Data" disabled="">
		            	</div>
		            	<div style="display:none;">
		            		<input type="hidden" name="data[_Token][fields]" value="a8f894205ef2839927d5ad906c061462f4424136%3A" id="TokenFields2092665347">
		            		<input type="hidden" name="data[_Token][unlocked]" value="User.form_type%7Cg-recaptcha-response" id="TokenUnlocked836959454">
		            	</div>
		        </div>
            </form>

            <form name="myform" id="myForm">

        </div>
    </div>

</div>
<script type="text/javascript">
              document.getElementById("signInButton").disabled = false;
            function enableBtn(){
        document.getElementById("signInButton").disabled = false;
      }
var stateObject = {
"GLO": [ "1GB for 480",
"2.3GB for 960",
"3.7GB for 1430",
"5.25GB for 1900"
],
"MTN": [
"500MB for 175",
"1GB for 330", 
"2GB for 660",
"3GB for 1000",
"5GB for 1650"
], "AIRTEL": [
"1.5GB for 1000",
"2GB for 1200",
"3GB for 1450",
"4.5GB for 2000"
],
"9MOBILE": [
"1.5GB for 950",
"2GB for 1150",
"4.5GB for 1900"
]
}
window.onload = function () {
var network = document.getElementById("network"),
data = document.getElementById("data");


var counter = 0;
for (var state in stateObject) {
network.options[network.options.length] = new Option(state, state);



}

// reset in case page is reloaded
network.onchange = function () {
data.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done
var district = stateObject[network.value];
for (var i=0; i<district.length; i++){
  data.options[data.options.length] = new Option(district[i], district[i]);
}
var mynet = document.getElementById("network").value;
var mylist = 
console.log(mynet);
var mydata = district.indexOf(this.value);


}
}

    </script>


    
</body>
</html>
<?php  
}  
?>