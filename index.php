<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width-device-width; initial-scale=1.0; shrink-to-fit=no" />
<title>CALORIESCULATOR</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" 
href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html {
  scroll-behavior: smooth;
}
</style>
</head>

<body>
<section id="nav-bar">

<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#banner"><img src="image/logo.png"></a>  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link current" href="#banner">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#calculate">CALCULATOR</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#food">FOOD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">CONTACT</a>
      </li>
    </ul>
  </div>
</nav>
</section>

<!------------------------------------------banner section---------------------------------------------------------->

<section id="banner">
<br><br>
<div class="container">
<div class="row">
<div class="col-md-6">
<a class="promo-title"><img src="image/logo.png" width="300"></a>
<p class="promo2-title">พลังงานที่ต้องการในแต่ละวันของแต่ละบุคคล ขึ้นอยู่กับหลากหลายปัจจัย ไม่ว่าจะเป็นความถี่ในการออกกำลังกาย ปริมาณไขมัน และ กล้ามเนื้อ กิจกรรมในสายอาชีพที่ต่างกัน และ ประสิทธิภาพการทำงานร่างกาย รวมทั้งเป้าหมายการควบคุมน้ำหนักที่ต่างกัน 
การรู้ว่าแคลอรี่ที่เหมาะกับเราคืออะไร จะสามารถทำให้เราควบคุมสมดุลร่างกายได้ทางหนึ่ง แคลอรี่ที่เหมาะสมต่อวัน สามารถคำนวณได้คร่าวๆ จากปัจจัยของร่างกาย คือ ความสูง น้ำหนัก อายุ และ กิจกรรมต่อวัน</p>
<a href="https://www.youtube.com/watch?v=Gmh_xMMJ2Pw"><img src="image/play.png" class="play-btn">Watch DemoVideo</a>
</div>
<div class="col-md-6 text-center">
<img src="image/salad.png" class="home-img">
</div>
</div>
</div>
<img src="image/wave1.png" class="wave1-img">
</section>

<!-----------------------------------------------calculate section------------------------------------------------------>

<section id="calculate" name="calculate">
<br><br><br><br><br><br><br>
<div class="container">
<div class="row">
<div class="col-md-6 calculate">
<a href="calculator-bmi.php"><p align="center"><img src="image/bmi.png" class="calculate-img"></p></a>
<a href="calculator-bmi.php"><h4 align="center"><font color="#000">Body Mass Index</font></h4></a>
<p align="center">มาตรการที่ใช้ประเมินภาวะอ้วนและผอมในผู้ใหญ่ ตั้งแต่อายุ 20 ปีขึ้นไป สามารถทำได้โดยการชั่งน้ำหนักตัวเป็นกิโลกรัม และวัดส่วนสูงเป็นเซนติเมตร แล้วนำมาหาดัชมีมวลกาย โดยใช้โปรแกรมวัดค่าความอ้วนข้างต้น</p>
</div>
<div class="col-md-6 service">
<a href="calculator-bmr.php"><p align="center"><img src="image/bmr.png" class="calculate-img"></p></a>
<a href="calculator-bmr.php"><h4 align="center"><font color="#000"><br>Basal Metabolic Rate</font></h4></a>
<p align="center">อัตราการเผาผลาญพลังงานในแต่ละวัน โดยค่าพลังงานนี้ร่างกายจะใช้ในการขับเคลื่อนระบบเเละควบคุมอวัยวะต่างๆ ในร่างกาย</p>
</div>
</div>
</div>
</section>

<!-------------------------------------------------food section---------------------------------------------------------->

<section id="food" name="food">
<h2 align="center">จำนวนแคลอรี่ของอาหาร</h2>
<table border=0 align="center" width="80%" height="50%" class="table table-hover">
<tbody>
<tr valign="middle">
<th bgcolor="#91EAE4" style="text-align: center;" valign="middle" width="150">รายการอาหาร</th>
<th bgcolor="#86a8e7" style="text-align: center;" width="100">ปริมาณอาหาร<br> (หน่วย)</th>
<th bgcolor="#7f7fd5" style="text-align: center;" width="100">ปริมาณแคลอรี่<br> (kcal)</th>
</tr>
<tr>
<td>กุ้งแช่น้ำปลา</td>
<td>1 ตัว</td>
<td>14</td>
</tr>
<tr>
<td>แกงเขียวหวานหมู</td>
<td>1 ถ้วย</td>
<td>235</td>
</tr>
<tr>
<td>ไก่ทอด</td>
<td>1 น่อง</td>
<td>345</td>
</tr>
<tr>
<td>ขนมจีนแกงเขียวหวานไก่</td>
<td>1 ชาม</td>
<td>594</td>
</tr>
<tr>
<td>ข้าวซอยไก่</td>
<td>1 ชาม</td>
<td>395</td>
</tr>
<tr>
<td>โจ๊กใส่ไข่</td>
<td>1 ถ้วย</td>
<td>250</td>
</tr>
<tr>
<td>ต้มยำกุ้ง</td>
<td>1 ถ้วย</td>
<td>65</td>
</tr>
<tr>
<td>ปลาแซลมอนย่าง</td>
<td>1 จาน</td>
<td>260</td>
</tr>
<tr>
<td>สลัดอกไก่ย่าง</td>
<td>1 จาน</td>
<td>172</td>
</tr>
<tr>
<td>พิซซ่าขอบไส้กรอกชีส</td>
<td>1 ชิ้น</td>
<td>340</td>
</tr>
</tbody>
</table>
<br>
<a href="food.php"><font size="4" color="#86a8e7"> search for more</font> <img src="image/search.png" class="search-btn" width="30"></a>
</section>

<!----------------------------------------------------contact section-------------------------------------------------------->

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