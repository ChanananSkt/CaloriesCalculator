<html>
<head>
<title>DIET PLANNING</title>
<link rel="stylesheet" href="style.css">
<link href="script.js" rel="stylesheet">
<link href="bmi-cal.php" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
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
        <a class="nav-link" href="index.php#calculate">CALCULATOR</a>
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



<!-------heading------>
<section id="dietp">
<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <h2>Diet Planning</h2>
  </div>
  <div class="col-md-3"></div>
</div>

<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
  <p>เมื่อเราได้ค่าการเผาผลาญพลังงานต่อวันออกมาเเล้ว ทีนี้จะเป็นการกำหนดเป้าหมายคร่าวๆเพื่อให้เราทราบว่าถ้าหากเราต้องการที่จะลดน้ำหนักให้ได้ตามระยะเวลาที่วางไว้ 
     เราควรจะลดการรับพลังงานจากอาหารให้เหลือวันละเท่าไหร่<br><br>
  โดยการใส่เป้าหมายของจำนวนกิโลกรัมที่ต้องการลดเเละระยะเวลาในการลด เเต่ระยะเวลาควรมีกรอบเวลาอยู่ที่<br>ไม่น้อยกว่า 30 วัน เเละควรกำหนดเป้าหมายน้ำหนักเเบ่งเป็นระยะ 
  ไม่ควรหักโหมจนเกินไป โดยเฉลี่ยเเล้ว<br>การลดน้ำหนักที่ดีเเละทำให้มีสุขภาพที่ดีด้วยจะต้องอยู่ที่ประมาณ 1-2 กิโลกรัมต่อสัปดาห์<br><br>
  ผลจากเครื่องคำนวณนี้จะเป็นพลังงานที่ต้องลด เเละ ปริมาณที่ใช้ได้ต่อวัน ค่าที่ได้เป็นค่าที่ได้จากการคำนวณจาก<br>สูตรทางคณิตศาสตร์ ควรจะยึดไว้เป็นกรอบไว้คร่าวๆนะคะ
  เพื่อวางเเผนการลดน้ำหนักให้มีประสิทธิภาพ <br>เพราะร่างกายเเต่ละคนไม่เหมือนกัน ระยะเวลาเเละผลลัพธ์อาจต่างกันค่ะ<br><br>
  </p>
  
 <br>


	
		<div class="clear"></div>
		<div id="calDP">
        <div class="p-3 mb-2 bg-light text-dark">
		        <form method="post" >
            <label for="tdee">TDEE</label>
              <div class="form-group">
			          <input class="form-control" type="float" name="tdee" value="<?php $tdee;?>">
              </div>
			        <br>
			      <label for="mass">น้ำหนักที่ต้องการลด (kg)</label>
              <div class="form-group">
			          <input class="form-control" type="number" name="mass" value="<?php $mass;?>">
              </div>
			        <br>
			      <label for="day">จำนวนวัน</label>
              <div class="form-group">
			          <input class="form-control" type="number" name="day" value="<?php $day;?>">
              </div>
			        <br>
			      <div class="button">
              <input class="btn" type="submit" name="submit" value="คำนวณ">
            </div>
		      </form>
	      </div>


	<?php
   
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			if(empty($_POST["day"]) or empty($_POST["mass"]) or empty($_POST["tdee"])){
				$dietp = "";
			}
			else{
				$mass = $_POST["mass"];
				$day = $_POST["day"];
				$tdee = $_POST["tdee"];
				$dietp = $tdee-(($mass * 7700)/$day);
			}

			$dietpShow = "ปริมาณพลังงานที่แนะนำต่อวัน = ". $dietp;
			
			
	  echo '<div class="card bg-light mb-3" style="max-width: 48rem; margin-top: 20px;">';
	  echo '<div class="card-header text-center"><h3>ผลลัพธ์</h3></div>';
	  echo '<div class="card-body">';
    echo '<div id="result" name="result" class="result"><h5 class="card-text text-center" font-size=20px;>';
    echo $dietpShow;
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
<div class="col-md-3"></div>

</section>

</body>
</html>