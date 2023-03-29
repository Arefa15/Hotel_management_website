<!DOCTYPE html>
<html lang="en">
<?php
    include('connection.php');
	error_reporting(0);
    $userName = $_POST['firstname'];
	$userEmail = $_POST['Email'];
	$userPhone = $_POST['Phone'];
	$userAdate = $_POST['arrivaldate'];
	$userDdate = $_POST['departdate'];
	$userRtype = $_POST['roomtype'];
	$userPrice = $_POST['price'];
	$userAdult = $_POST['adult'];
	$userRooms = $_POST['rooms'];
	
	if (!$_POST['submit']){
		echo "All fields required";
	}
else{
$sql = "INSERT into bookings (first_name,email,phone,arrivedate,departuredate,roomtype,price,adult,room_nos)
		values ('$userName','$userEmail','$userPhone','$userAdate','$userDdate','$userRtype','$userPrice','$userAdult','$userRooms')";
		if (mysqli_query($conn, $sql)){
			echo "Your form has been sent";
		}
		else{
			echo "something went wrong,try later";
		}
	}

?>


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="swiper.min.css">
<link href='style1.css' rel='stylesheet'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="lightbox.min.css">





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="lightbox-plus-jquery.min.js"></script>
<head>

<script type="text/javascript">
function populate(r1,p1){
	var r1= document.getElementById(r1);
	var p1= document.getElementById(p1);
	p1.innerHTML = "";
	if(r1.value == "penthousesuite"){
	  var optionArray = ["2000|2000Taka"];
	}
	else if(r1.value == "executivesuite"){
	  var optionArray = ["1000|1000Taka"];
	}
	else if(r1.value == "businesssuite"){
	  var optionArray = ["1500|1500Taka"];
	}
	else if(r1.value == "executivepremiumdeluxe"){
	  var optionArray = ["1700|1700Taka"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		p1.options.add(newOption);
	}
	
}
</script>
<title>Lakeshore BANANI</title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color:#0B0B0B;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
  color:#FFF;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}


</style>

</head>
<body style="background-color:black; padding-left:25px; padding-right:25px;">
<h3 style="color:#F9FEC7; font-family:'Times New Roman', Times, serif">For Booking Please Fill the Form below</h3>
<div class="container">
  <form action="book.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="Email" placeholder="Your email..">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="phone">Phone</label>
      </div>
      <div class="col-75">
        <input type="text" id="phone" name="Phone" placeholder="Your phone number..">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="adate">Arrival Date</label>
      </div>
      <div class="col-75">
        <input type="date" id="adate" name="arrivaldate" >
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="ddate">Departure Date</label>
      </div>
      <div class="col-75">
        <input type="date" id="ddate" name="departdate" >
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="rtype">Room Type</label>
      </div>
      <div class="col-75">
        <select id="rtype" name="roomtype" onChange="populate(this.id,'price')">
          <option value="penthousesuite">Pent House Suite</option>
          <option value="executivesuite">Executive Suite</option>
          <option value="businesssuite">Business Suite</option>
          <option value="executivepremiumdeluxe">Executive Premium Deluxe</option>
        </select>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="price">Price</label>
      </div>
      <div class="col-75">
        <select id="price" name="price">
         
        </select>
      </div>
    </div>
    
     <div class="row">
      <div class="col-25">
        <label for="adult">Adult</label>
      </div>
      <div class="col-75">
        <select id="adult" name="adult">
          <option value="1adult">1Adult</option>
         <option value="2adults">2Adults</option>
         <option value="3adults">3Adults</option>
         <option value="4adults">4Adults</option>
         <option value="5adults">5Adults</option>
         <option value="6adults">6Adults</option>
        </select>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="rooms">Room Nos.</label>
      </div>
      <div class="col-75">
        <select id="rooms" name="rooms">
          <option value="1">1room</option>
         <option value="2">2rooms</option>
         <option value="3">3rooms</option>
         <option value="4">4rooms</option>
         <option value="5">5rooms</option>
         <option value="6">6rooms</option>
          <option value="7">7rooms</option>
         <option value="8">8rooms</option>
         <option value="9">9rooms</option>
         <option value="10">10rooms</option>
         <option value="11">11rooms</option>
         <option value="12">12rooms</option>
          <option value="13">13rooms</option>
         <option value="14">14rooms</option>
         <option value="15">15rooms</option>
         <option value="16">16rooms</option>
         <option value="17">17rooms</option>
         <option value="18">18rooms</option>
          <option value="19">19rooms</option>
         <option value="20">20rooms</option>
         
         
        </select>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="msg">Message</label>
      </div>
      <div class="col-75">
        <textarea id="msg" name="message" placeholder="Write something.." style="height:150px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" name="submit"  value="Book now" style="background-color:#E9944E">
    </div>
  </form>
</div>

<script>

</script>
</body>
</html>