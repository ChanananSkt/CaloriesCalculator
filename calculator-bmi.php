<html>
<head>
<title>CALCULATE BMI</title>
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



<!-------heading------>

<h2 style="margin-top: 50px; padding-left: 400px;"><b>เครื่องคำนวณหาค่าดัชนีมวลกาย (BMI)</h2>
<h6 style="margin-top: 30px; padding-left: 400px;">การหาค่าดัชนีมวลกาย (Body Mass Index : BMI) คือเป็นมาตรการที่ใช้ประเมินภาวะอ้วนและผอมในผู้ใหญ่ <br><br>ตั้งแต่อายุ 20 ปีขึ้นไป สามารถทำได้โดยการชั่งน้ำหนักตัวเป็นกิโลกรัม และวัดส่วนสูงเป็นเซนติเมตร <br><br>แล้วนำมาหาดัชมีมวลกาย โดยใช้โปรแกรมวัดค่าความอ้วนข้างต้น (BMI)<br><br><br></h6>


<!-------input------>

<section id="bmi-input">
<div class="container">
<form method="post" action="calculator-bmi.php">
<div class="row">
  <div class="col-md-3">
  </div>
  <div class="div-input col-md-6">
    <label for="formGroupExampleInput">ส่วนสูง (เซนติเมตร)</label>
    <input class="form-control" type="text" name="height" value="<?php $height;?>" placeholder="Input your height">
    <br>
    <label for="formGroupExampleInput2">น้ำหนัก (กิโลกรัม)</label>
    <input class="form-control" type="text" name="weight" value="<?php $weight;?>" placeholder="Input your weight">
  </div>
</div>
<br>
<div class="container">
<div class="row">
  <div class="col-md-3">
  </div>
  <div class="div-input col-md-6">
    <button class="btn" onclick="calBMI()" value="Submit" width="50" type="submit" name="submit">คำนวณ</button>
  </div>
</div>
</div>
</form>
</div>
</section>


<?php
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			if(empty($_POST["height"]) or empty($_POST["weight"])){
        $result = "ข้อมูลไม่ถูกต้อง โปรดลองใหม่อีกครั้ง";
        $resultShow = $result;
			}
			else{
				$weight = $_POST["weight"];
				$height = $_POST["height"];
				$result = $weight / (($height / 100) ** 2);

				if($result >= 40){
					$data = " <b>โรคอ้วนขั้นสูงสุด</b>";
				}
				else if($result > 35.0 && $result < 39.9){
					$data = " <b>โรคอ้วนระดับ2</b> คุณเสี่ยงต่อการเกิดโรคที่มากับความอ้วน หากคุณมีเส้นรอบเอวมากกว่าเกณฑ์ปกติคุณจะเสี่ยงต่อการเกิดโรคสูง คุณต้องควบคุมอาหาร และออกกำลังกายอย่างจริงจัง";
				}
				else if($result > 28.5 && $result < 34.9){
					$data = " <b>โรคอ้วนระดับ1</b> และหากคุณมีเส้นรอบเอวมากกว่า 90 ซม.(ชาย) 80 ซม.(หญิง) คุณจะมีโอกาศเกิดโรคความดัน เบาหวานสูง จำเป็นต้องควบคุมอาหาร และออกกำลังกาย";
				}
				else if($result > 23.4 && $result < 28.4){
					$data = " <b>น้ำหนักเกิน</b> หากคุณมีกรรมพันธ์เป็นโรคเบาหวานหรือไขมันในเลือดสูงต้องพยายามลดน้ำหนักให้ดัชนีมวลกายต่ำกว่า 23";
				}
				else if($result > 18.5 && $result < 23.4){
					$data = " <b>น้ำหนักปกติ</b> และมีปริมาณไขมันอยู่ในเกณฑ์ปกติ มักจะไม่ค่อยมีโรคร้าย อุบัติการณ์ของโรคเบาหวาน ความดันโลหิตสูงต่ำกว่าผู้ที่อ้วนกว่านี้";
				}
				else if($result < 18.5){
					$data = " <b>น้ำหนักน้อยเกินไป</b> ซึ่งอาจจะเกิดจากนักกีฬาที่ออกกำลังกายมาก และได้รับสารอาหารไม่เพียงพอ วิธีแก้ไขต้องรับประทานอาหารที่มีคุณภาพ และมีปริมาณพลังงานเพียงพอ และออกกำลังกายอย่างเหมาะสม";
        }
        $resultShow = "ดัชนีมวลกายของคุณ = ". $result. "<br><br><br>". $data;
			}

      
      echo '<div class="card bg-light mb-3" style="max-width: 47rem; margin-left: 25%; margin-top: 20px;">';
			echo '<div class="card-header text-center"><h3>BMI</h3></div>';
			echo '<div class="card-body">';
      echo '<div id="result" name="result" class="result"><h5 class="card-text text-center" font-size=20px;>';
      echo "<br><br>";
      echo $resultShow;
      echo '</h5></div>';
      echo '</div>';
      echo '</div>';
      echo "<br>";
      
		}
	?>

<!-------table-------->


<table class="table table-hover col-md-5" style="margin-left: 29%; margin-top: 20px;">
  <thead>
    <tr>
      <th bgcolor="#91EAE4" scope="col">BMI kg/m²</th>
      <th bgcolor="#86a8e7" scope="col">อยู่ในเกณฑ์</th>
      <th bgcolor="#7f7fd5" scope="col">ภาวะเสี่ยงต่อโรค</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>น้อยกว่า 18.50</td>
      <td>น้ำหนักน้อย / ผอม</td>
      <td>มากกว่าคนปกติ</td>
    </tr>
    <tr>
      <td>ระหว่าง 18.50 - 22.90</td>
      <td>ปกติ (สุขภาพดี)</td>
      <td>เท่าคนปกติ</td>
    </tr>
    <tr>
      <td>ระหว่าง 23 - 24.90</td>
      <td>ท้วม / โรคอ้วนระดับ 1</td>
      <td>อันตรายระดับ 1</td>
    </tr>
    <tr>
      <td>ระหว่าง 25 - 29.90</td>
      <td>อ้วน / โรคอ้วนระดับ 2</td>
      <td>อันตรายระดับ 2</td>
    </tr>
    <tr>
      <td>มากกว่า 30</td>
      <td>อ้วนมาก / โรคอ้วนระดับ 3</td>
      <td>อันตรายระดับ 3</td>
    </tr>
  </tbody>
</table>

<!--------------------------------------------------contact section---------------------------------------->

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
      <br><br><br><br>
      </div>
      </div>
      </div>
      </div>
      </section>
</body>
</html>