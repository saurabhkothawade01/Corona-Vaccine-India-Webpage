<?php
if(isset($_POST["submit"])) {

$con = mysqli_connect('localhost', 'root', '','cvihelp');

require_once __DIR__ . '/vendor/autoload.php';

    $name = $_POST['name'];
    $number = $_POST['number'];
    $adhar = $_POST['adhar']; 
    $nod = $_POST['nod'];
    $vname = $_POST['vname'];
    $date = $_POST['date'];
    $cityname = $_POST['cityname'];
    $centername = $_POST['centername'];
    $age = $_POST['age'];
if($age >= 18) {
$check = mysqli_query($con,"SELECT * FROM `book_slot` WHERE adhar= '$adhar'");
if(mysqli_num_rows($check)>0)
{
    echo'<div class="alert-error">
    <span><b>Adhar Number Already Taken..!</b></span>
   </div>';
}
else {

$c = mysqli_query($con, "SELECT * FROM `vacavailable` WHERE vname='".$vname."'");
while($row=mysqli_fetch_assoc($c))  
    {  
    $cd=$row['available'];  
    } 
if($cd >= 1) {
    if($vname == "Covishield") {
        $a = "UPDATE `vacavailable` SET `available` = `available` - 1 WHERE `vname` = '".$vname."'";
if(mysqli_query($con, $a)) {
$sql = "INSERT INTO `book_slot` (`rname`, `mob`, `adhar`, `age`, `nod`,`vname`,`b_date`, `cityname`, `centername`) VALUES ('$name', '$number', '$adhar','$age','$nod','$vname','$date', '$cityname', '$centername')";
//$rs = mysqli_query($con, $sql);

if(mysqli_query($con, $sql))
{
$name = $_POST['name'];
$number = $_POST['number'];
$adhar = $_POST['adhar'];
$nod = $_POST['nod'];
$vname = $_POST['vname'];
$date = $_POST['date'];
$cityname = $_POST['cityname'];
$centername = $_POST['centername'];
$age = $_POST['age'];
$mpdf = new \Mpdf\Mpdf();
$pdfcontent = '<html>
<style>
th, td {
  padding: 20px;
}
</style>
<p style="text-align:center;"><img src="images/c-logo.png" width=300 height=80></b> 
<br><br>
<b><font color="blue" size=6 face="verdana">Beneficiary Details</font></b>
<br><br>

<table>
	<tr>
	<td><font size=4 face="verdana">Beneficiary Name  </font></td>
	<td><font size=4 face="verdana"><b>'. $name.'</b></font></td>
	</tr>

	<tr>
	<td><font size=4 face="verdana">Mobile Number   </font></td>
	<td><font size=4 face="verdana"><b>'. $number.'</b></font></td>
	</tr>

    <tr>
	<td><font size=4 face="verdana">Age   </font></td>
	<td><font size=4 face="verdana"><b>'. $age.'</b></font></td>
	</tr>

    <tr>
	<td><font size=4 face="verdana">ID Verified   </font></td>
	<td><font size=4 face="verdana"><b>Aadhaar # '. $adhar.'</b></font></td>
	</tr>

    <tr>
	<td><font size=4 face="verdana">Vaccine Name </font></td>
	<td><font size=4 face="verdana"><b>'. $vname.'</b></font></td>
	</tr>
    
	<tr>
	<td><font size=4 face="verdana">No. Of Dose  </font></td>
	<td><font size=4 face="verdana"><b>'. $nod .'</b></font></td>
	</tr>

	<tr>
	<td><font size=4 face="verdana">Date of Dose</font></td>
	<td><font size=4 face="verdana"><b>'. $date.'</b></font></td>
	</tr>

	<tr>
	<td><font size=4 face="verdana">Vaccination Center</font></td>
	<td><font size=4 face="verdana"><b>'.$centername.', '.$cityname.'</b></font></td>
	</tr>
</table>
<br><br>
<img src="images/c1.jpg" height=250 width=1510>
</html>';

$mpdf->WriteHtml($pdfcontent);
$mpdf->output("MyData.pdf",'D');
}
}
    }
    else if($vname == "Covaxin") {
        $a = "UPDATE `vacavailable` SET `available` = `available` - 1 WHERE `vname` = '".$vname."'";
if(mysqli_query($con, $a)) {
$sql = "INSERT INTO `book_slot` (`rname`, `mob`, `adhar`,`age`, `nod`,`vname`,`b_date`, `cityname`, `centername`) VALUES ('$name', '$number', '$adhar', '$age','$nod','$vname','$date', '$cityname', '$centername')";
//$rs = mysqli_query($con, $sql);

if(mysqli_query($con, $sql))
{
$name = $_POST['name'];
$number = $_POST['number'];
$adhar = $_POST['adhar'];
$nod = $_POST['nod'];
$vname = $_POST['vname'];
$date = $_POST['date'];
$cityname = $_POST['cityname'];
$age = $_POST['age'];
$centername = $_POST['centername'];
$mpdf = new \Mpdf\Mpdf();
$pdfcontent = '<html>
<style>
th, td {
  padding: 20px;
}
</style>
<p style="text-align:center;"><img src="images/c-logo.png" width=300 height=80></b> 
<br><br>
<b><font color="blue" size=6 face="verdana">Beneficiary Details</font></b>
<br><br>

<table>
	<tr>
	<td><font size=4 face="verdana">Beneficiary Name  </font></td>
	<td><font size=4 face="verdana"><b>'. $name.'</b></font></td>
	</tr>

	<tr>
	<td><font size=4 face="verdana">Mobile Number   </font></td>
	<td><font size=4 face="verdana"><b>'. $number.'</b></font></td>
	</tr>

    <tr>
	<td><font size=4 face="verdana">Age   </font></td>
	<td><font size=4 face="verdana"><b>'. $age.'</b></font></td>
	</tr>

    <tr>
	<td><font size=4 face="verdana">ID Verified   </font></td>
	<td><font size=4 face="verdana"><b>Aadhaar # '. $adhar.'</b></font></td>
	</tr>

    
    <tr>
	<td><font size=4 face="verdana">Vaccine Name </font></td>
	<td><font size=4 face="verdana"><b>'. $vname.'</b></font></td>
	</tr>
    
	<tr>
	<td><font size=4 face="verdana">No. Of Dose  </font></td>
	<td><font size=4 face="verdana"><b>'. $nod .'</b></font></td>
	</tr>

	<tr>
	<td><font size=4 face="verdana">Date of Dose</font></td>
	<td><font size=4 face="verdana"><b>'. $date.'</b></font></td>
	</tr>

	<tr>
	<td><font size=4 face="verdana">Vaccination Center</font></td>
	<td><font size=4 face="verdana"><b>'.$centername.', '.$cityname.'</b></font></td>
	</tr>
</table>
<br><br>
<img src="images/c1.jpg" height=250 width=1510>
</html>';

$mpdf->WriteHtml($pdfcontent);
$mpdf->output("MyData.pdf",'D');
}
}
    }
    else if($vname == "Sputnik-V") {
        $a = "UPDATE `vacavailable` SET `available` = `available` - 1 WHERE `vname` = '".$vname."'";
if(mysqli_query($con, $a)) {
$sql = "INSERT INTO `book_slot` (`rname`, `mob`, `adhar`, `age`, `nod`,`vname`,`b_date`, `cityname`, `centername`) VALUES ('$name', '$number', '$adhar', '$age','$nod','$vname','$date', '$cityname', '$centername')";
//$rs = mysqli_query($con, $sql);

if(mysqli_query($con, $sql))
{
$name = $_POST['name'];
$number = $_POST['number'];
$adhar = $_POST['adhar'];
$nod = $_POST['nod'];
$vname = $_POST['vname'];
$date = $_POST['date'];
$cityname = $_POST['cityname'];
$centername = $_POST['centername'];
$age = $_POST['age'];
$mpdf = new \Mpdf\Mpdf();
$pdfcontent = '<html>
<style>
th, td {
  padding: 20px;
}
</style>
<p style="text-align:center;"><img src="images/c-logo.png" width=300 height=80></b> 
<br><br>
<b><font color="blue" size=6 face="verdana">Beneficiary Details</font></b>
<br><br>

<table>
	<tr>
	<td><font size=4 face="verdana">Beneficiary Name  </font></td>
	<td><font size=4 face="verdana"><b>'. $name.'</b></font></td>
	</tr>

	<tr>
	<td><font size=4 face="verdana">Mobile Number   </font></td>
	<td><font size=4 face="verdana"><b>'. $number.'</b></font></td>
	</tr>

    <tr>
	<td><font size=4 face="verdana">Age   </font></td>
	<td><font size=4 face="verdana"><b>'. $age.'</b></font></td>
	</tr>

    <tr>
	<td><font size=4 face="verdana">ID Verified   </font></td>
	<td><font size=4 face="verdana"><b>Aadhaar # '. $adhar.'</b></font></td>
	</tr>

    <tr>
	<td><font size=4 face="verdana">Vaccine Name </font></td>
	<td><font size=4 face="verdana"><b>'. $vname.'</b></font></td>
	</tr>
    
	<tr>
	<td><font size=4 face="verdana">No. Of Dose  </font></td>
	<td><font size=4 face="verdana"><b>'. $nod .'</b></font></td>
	</tr>

	<tr>
	<td><font size=4 face="verdana">Date of Dose</font></td>
	<td><font size=4 face="verdana"><b>'. $date.'</b></font></td>
	</tr>

	<tr>
	<td><font size=4 face="verdana">Vaccination Center</font></td>
	<td><font size=4 face="verdana"><b>'.$centername.', '.$cityname.'</b></font></td>
	</tr>
</table>
<br><br>
<img src="images/c1.jpg" height=250 width=1510>
</html>';

$mpdf->WriteHtml($pdfcontent);
$mpdf->output("MyData.pdf",'D');
}
}
    }
}       

else {
    echo'<div class="alert-error">
        <span><b>Vaccine Is Not Available..!</b></span>
       </div>'; 
}
}
}
else {
    echo'<div class="alert-error">
        <span><b>You must be 18+ years old to book vaccine..!</b></span>
       </div>'; 
}
}
?>
  
<!DOCTYPE html>
<html lang="en">
<head>

<script type="text/javascript">
           var centerByCity = {
        Mumbai: ["Krantiveer Mahatma Jyotiba Phule Hospital","Shushrusha Hospital",
                "Hiranandani Hospital", "Powai Polyclinic and Hospital", 
                "Godrej Memorial Hospital", "Dr Praful Lokhande’s Shantiniketan Hospital",
                "Matoshree Ramabai Maternity BMC Hospital", "Sapna Health Care Centre Pvt Ltd - CoWin Centre Ghatkopar West",
                "Sant Muktabai General Hospital", "Zynova Shalby Hospital", "Parakh Hospital, Khokani Lane"],
        Pune: ["Phoenix Hospital Thergaon", "Paarasmani Hospital, Hadapsar", "Hridaya Hospital, Kothrud",
                "Kuti Hospital, Aunth", "Rajiv Gandhi Hospital, Yerawada", 
                "Kamla Hospital,Kasaba", "Surat Hospital, Kothrud", "Sant Ramdas Shala, ShivajiNagar", 
                "Bindu Hospital, Warje", "Savitribai Phule Hospital, Kondhawa"],
        Jalgaon: ["Sanjeevan Heart Hospital and Multispecialty Centre", "Samvedna Speciality Hospital", 
                "Sulochan Retina Care Center", "KHADKE HOSPITAL AND HEALTHCARE PVT.LTD", "Gayatri hospital", 
                "Sardar Vallabh Bhai Patel Hall (LEVA BHAVAN)", "Prakash Children's Hospital And Neonatology Centre",
                "Shree Saileela Accident Hospital Jalgaon", "Orchid Multi Superspeciality Hospital"],
        Nagpur: ["Icon Hospital - Super speciality Hospital", "Telankhedi Ayurvedic Dispensary", 
                "Zenith Hospital", "Dr. K. G. Deshpande Memorial Centre", "Sengupta Hospital And Research Institute", "Wockhardt Super Speciality Hospitals", "National Cancer Institute"],
        Dhule: ["Om critical care center pvt. Ltd. Agrawal nagar, malegaon road", 
                "Niramaya Hospital & Shwaas Criti Care Center", "Bhatwal Surgical And Maternity Hospital", 
                "Khandesh Cancer Centre", "Kesharanand Hospital", "Chandrakant Kele Medical And Research Foundation", "Shree Siddheshwar Hospital"],
        Nashik: ["Dr. Vasantrao Pawar Medical College,Hospital & Research Center", "Lokmanya Hospital", 
                "Shree Swami Samarth Hospital", "Sahyadri Speciality Hospital", "Apollo Hospitals",
                "Jijamata Vyayam Shala", "J. D. C. Bytco Hospital Blood Bank", "Raddiant Plus Hospital Nashik Road","Sujata Birla Hospital & Medical Research Center", "Swami Residency, Shiv Samarth Nagar"],

        
}

function makeSubmenu(value) {
if(value.length==0) document.getElementById("centername").innerHTML = "<option></option>";
else {
var centerOptions = "";
for(centerId in centerByCity[value]) {
    centerOptions+="<option>"+centerByCity[value][centerId]+"</option>";
}
document.getElementById("centername").innerHTML = centerOptions;
}
}

function resetSelection() {
document.getElementById("rname").selectedIndex = 0;
document.getElementById("mob").selectedIndex = 0;
document.getElementById("nod").selectedIndex = 0;
document.getElementById("vname").selectedIndex = 0;
document.getElementById("b_date").selectedIndex = 0;
document.getElementById("cityname").selectedIndex = 0;
document.getElementById("centername").selectedIndex = 0;
document.getElementById("age").selectedIndex = 0;
}
    </script>
    <title>Book slot </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="book.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body onload="resetSelection()">
<section class="book" id="book">

        <h1 class="heading"> <span>book</span> Slot </h1>
    <!-- <h1 class="heading"> <span>book</span> Slot </h1>    </td> -->

    <div class="container">
    
    <a href="logout.php" class="btn btn-info btn-lg">
    
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
</div>
<div>
    <h1>             </h1>
</div>
    <div class="row">

        <div class="image">
            <img src="images/book-img.svg" alt="">
        </div>

        <form action="" method=POST>
            <h3>book your slot  for vaccination</h3>
            <input type="text" placeholder="your name" name="name" class="box" required>
            <input type="number" placeholder="your number" name="number" class="box" required>
            <input type="number" placeholder="Adhar card number" name="adhar" class="box" required>
            <input type="number" placeholder="your Age" name="age" class="box" required>
            <h2 class="dose">Number of dose</h2>
            <select id="nod" name="nod" class="box">
            <option value="" disabled selected>Select Dose Number</option>
                <option value="One">One</option>
                <option value="Two">Two</option>
            </select>
            <h2 class="dose">Name of dose</h2>
            <select id="vname" name="vname" class="box">
            <option value="" disabled selected>Select Vaccine Name</option>
    <option value="Covishield">Covishield</option>
    <option value="Covaxin">Covaxin</option>
    <option value="Sputnik-V">Sputnik-V</option>
  </select>
            <input type="date" class="box" name="date" required >

            <h2 class="dose">Select Vaccination Center</h2>

<select id="cityname" name="cityname" class="box" onchange="makeSubmenu(this.value)">
<option value="" disabled selected>Choose City</option>
    <option>Mumbai</option>
    <option>Pune</option>
    <option>Jalgaon</option>
    <option>Nagpur</option>
    <option>Dhule</option>
    <option>Nashik</option>
</select>

<select id="centername" name="centername" class="box">
<option value="" disabled selected>Choose Center</option>
    <option></option>
    
</select>
            <input type="submit" value="book now" name="submit" class="btn">
        </form>
<br>
    </div>
<br>
</section>
</body>
</html>