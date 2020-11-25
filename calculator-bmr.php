<html>
<head>
<title>CALCULATE BMR</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" 
href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<section id="nav-bar">

<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.php"><img src="image/logo.png"></a>  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link current" href="index.php#calculate">CALCULATOR</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#food">FOOD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#contact">CONTACT</a>
      </li>
    </ul>
  </div>
</nav>
</section>

<!-----------------------------------------------------------------------bmr/tdee section---------------------------------------------------------->

<section id="bmrsec">
<br>
<div class="text-center">
<h1>เครื่องคำนวณการเผาผลาญพลังงาน</h1>
</div>


<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
  <h2>BMR / TDEE</h2>
  <p>BMR (Basal Metabolic Rate) คือ อัตราการเผาผลาญพลังงานในแต่ละวัน ใช้ควบคุมอวัยวะต่างๆในร่างกาย <br>
  TDEE (Total Daily Energy Expenditure) คือ ค่าของพลังงานที่ใช้กิจกรรมอื่นในแต่ละวัน</p>
  </div>
  <div class="col-md-3"></div>
</div>



<div class="container">
<div class="row">
<div class="col-md-3"></div>

  <div class="col-md-6">
  <div class="p-3 mb-2 bg-light text-dark">
    <div id="calBMR">
		<form method="post" action="calculator-bmr.php" >
    <label for="sex">เพศ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">&nbsp;&nbsp;&nbsp;&nbsp;ชาย &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">&nbsp;&nbsp;&nbsp;หญิง
			<br>
      
      <label for="height">ส่วนสูง (cm)</label>
      <div class="form-group">
			  <input class="form-control" type="number" name="heightBMR" value="<?php $heightBMR;?>">
      </div>
      
      <label for="Weight">น้ำหนัก (kg)</label>
      <div class="form-group">
        <input class="form-control" type="number" name="weightBMR" value="<?php $weightBMR;?>">
      </div>
			<div class="form-group">
    		<label for="Weight">อายุ (ปี)</label>
    		<input class="form-control type="text" name="ageBMR" value="<?php $ageBMR;?>">
      </div>
    		<label for="Weight">กิจกรรม</label>
      <select class="selectpicker show-tick"id="selectActi" name="selectActi"style="width:510" >
				<option selected="selected" value="0">ไม่ออกกำลังกายหรือออกกำลังกายน้อยมาก</option>
				<option value="1">ออกกำลังกายน้อยเล่นกีฬา 1-3 วัน/สัปดาห์</option>
				<option value="2">ออกกำลังกายปานกลางเล่นกีฬา 3-5 วัน/สัปดาห์</option>
				<option value="3">ออกกำลังกายหนักเล่นกีฬา 6-7 วัน/สัปดาห์</option>
				<option value="4">ออกกำลังกายหนักมากเป็นนักกีฬา</option>
      </select>
      <br><br>
      <div class="clear"></div>
      <div class="button">
      <div class="text-center">
			<a href="#resultsec"><input class="btn btn-primary" type="submit" name="submit" value="คำนวณ"></a>
      </div>
      </div>
		</form>
    </div>
  </div>
  <div class="col-md-3"></div>
  </div>
</div>
</div>


  
<!-----------------------------------------------------------------------result section---------------------------------------------------------->
<section id="resultsec">
  <?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["gender"]) or empty($_POST["heightBMR"]) or empty($_POST["weightBMR"]) or empty($_POST["ageBMR"])){
      $bmr = "";
    }
    else{
      $gender = $_POST["gender"];
      $weightBMR = $_POST["weightBMR"];
      $heightBMR = $_POST["heightBMR"];
      $ageBMR = $_POST["ageBMR"];
      $selectActi = $_POST["selectActi"];
      if($gender == "male"){
        $cal1 = 13.7*$weightBMR;
        $cal2 = 5*$heightBMR;
        $cal3 = $cal1+$cal2+66;
        $cal4 = 6.8*$ageBMR;
        $bmr = $cal3-$cal4;
      }
      else{
        $cal1 = 9.6*$weightBMR;
        $cal2 = 1.8*$heightBMR;
        $cal3 = $cal1+$cal2+665;
        $cal4 = 4.7*$ageBMR;
        $bmr = $cal3-$cal4;
      }

      if($selectActi == 0){
        $tdee = $bmr * 1.2;
      }
      else if($selectActi == 1){
        $tdee = $bmr * 1.375;
      }
      else if($selectActi == 2){
        $tdee = $bmr * 1.55;
      }
      else if($selectActi == 3){
        $tdee = $bmr * 1.725;
      }
      else if($selectActi == 4){
        $tdee = $bmr * 1.9;
      }
    }
    
    echo '<div class="card bg-light mb-3" style="max-width: 45rem; margin-left: 26%; margin-top: 20px;">';
		echo '<div class="card-header text-center"><h3>ผลลัพธ์</h3></div>';
		echo '<div class="card-body">';
    echo '<div id="result" name="result" class="result"><h5 class="card-text text-center" font-size=20px;>';
    echo "BMR :";
    echo $bmr;
    echo " kcal";
    echo "<br><br>";
    echo "TDEE : ";
    echo $tdee;
    echo " kcal";
    echo '</h5></div>';
    echo "</div>";
    echo '</div>';
    echo "<br>";

  }
?>

        </div>
	</div>
    </div>		
    </div>
	</div>

</div>

</div>
</div><br>

  <p align="center"><a href="calculator-dietp.php" target="_blank"><font size="4" color="#86a8e7">Next for diet planing</font></a></p>
</section>


<!------------------------------------------------------------contact section--------------------------------------------------------------------------------->
<section id="contact" name="contact">
<img src="image/wave2.png" class="wave2-img"><h1 align="center" class="contact-title">Contact</h1>
<div class="container">
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">
<div class="text-center">
<br>
<p align="center" class="contact2-title">If you have any question or queries a member of staff will always be happy to help. Feel free to contact us by email and we will be sure to get back to you as soon as possible.</p>
<a href="contact.php"><img src="image/write.png" class="write-btn" width="30"><font size="4" color="#fff"> Contact us</font></a>
<br><br>
</div>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-md-3">
<div class="text-left">
<br><br>
<a href="https://www.instagram.com/som.swt/"><img src="image/ig.png" class="ig-btn" width="30"><font size="4" color="#fff"> KANCHANA 61010069</font></a><br><br>
<br><br><br><br>
</div>
</div>
<div class="col-md-3">
<div class="text-left">
<br><br>
<a href="https://www.instagram.com/g.gmm/"><img src="image/ig.png" class="ig-btn" width="30"><font size="4" color="#fff"> CHANANAN 61010197</font></a><br><br>
<br><br><br><br>
</div>
</div>
<div class="col-md-3">
<div class="text-left">
<br><br>
<a href="https://www.instagram.com/bambapich/"><img src="image/ig.png" class="ig-btn" width="30"><font size="4" color="#fff"> APICHAYA 61011200</font></a><br><br>
<br><br><br><br>
</div>
</div>
<div class="col-md-3">
<div class="text-left">
<br><br>
<a href="https://www.instagram.com/erng__wy/"><img src="image/ig.png" class="ig-btn" width="30"><font size="4" color="#fff"> NATTAYA 61011381</font></a>

</div>
</div>
</div>
</div>
</section>


</body>
</html>