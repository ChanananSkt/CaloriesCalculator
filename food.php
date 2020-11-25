<!DOCTYPE html>
<html>
<head>
<title>FOOD</title>
<link rel="stylesheet" href="food.css">
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
        <a class="nav-link" href="index.php#calculate">CALCULATOR</a>
      </li>
      <li class="nav-item">
        <a class="nav-link current" href="index.php#food">FOOD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#contact">CONTACT</a>
      </li>
    </ul>
  </div>
</nav>
</section>

<!------------------------------------------food section---------------------------------------------------------->

<br><br>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names of food">

<table id="myTable">
  <tr class="header">
    <th bgcolor="#91EAE4" style="width:40%;">Food</th>
    <th bgcolor="#86a8e7" style="width:30%;">Serving Size</th>
    <th bgcolor="#7f7fd5" style="width:30%;">Calories(Kcal)</th>
  </tr>
  <tr>
    <td>น้ำกระเจี๊ยบ</td>
    <td>1 แก้ว</td>
    <td>120</td>
  </tr>
  <tr>
    <td>น้ำอัดลม</td>
    <td>1 แก้ว</td>
    <td>120</td>
  </tr>
  <tr>
    <td>น้ำมะเขือเทศ</td>
    <td>1 แก้ว</td>
    <td>48</td>
  </tr>
  <tr>
    <td>น้ำมะตูม</td>
    <td>1 แก้ว</td>
    <td>120</td>
  </tr>
  <tr>
    <td>น้ำมะนาว</td>
    <td>1 แก้ว</td>
    <td>100</td>
  </tr>
  <tr>
    <td>น้ำมะพร้าว</td>
    <td>1 แก้ว</td>
    <td>120</td>
  </tr>
  <tr>
    <td>น้ำลำใย</td>
    <td>1 แก้ว</td>
    <td>100</td>
  </tr>
  <tr>
    <td>น้ำส้มคั้น</td>
    <td>1 แก้ว</td>
    <td>160</td>
  </tr>
  <tr>
    <td>น้ำสับปะรด</td>
    <td>1 แก้ว</td>
    <td>125</td>
  </tr>
  <tr>
    <td>น้ำองุ่น</td>
    <td>1 แก้ว</td>
    <td>112</td>
  </tr>
  <tr>
    <td>น้ำอ้อย</td>
    <td>1 แก้ว</td>
    <td>240</td>
  </tr>
  <tr>
    <td>รูทเบียร์</td>
    <td>1 แก้ว</td>
    <td>105</td>
  </tr>
  <tr>
    <td>วอดก้า</td>
    <td>1 cc</td>
    <td>2</td>
  </tr>
  <tr>
    <td>วิสกี้</td>
    <td>1 cc</td>
    <td>2</td>
  </tr>
  <tr>
    <td>บรั่นดี</td>
    <td>1 cc</td>
    <td>2</td>
  </tr>
  <tr>
    <td>น้ำขิง (ขิงผงรสหวาน)</td>
    <td>1 กล่อง</td>
    <td>60</td>
  </tr>
  <tr>
    <td>น้ำจับเลี้ยง</td>
    <td>1 แก้ว</td>
    <td>100</td>
  </tr>
  <tr>
    <td>น้ำชาเขียว</td>
    <td>250 ml</td>
    <td>70</td>
  </tr>
  <tr>
    <td>น้ำชาเขียวผสมน้ำผึ้ง</td>
    <td>250 ml</td>
    <td>70</td>
  </tr>
  <tr>
    <td>น้ำนมข้าวโพด</td>
    <td>1 แก้ว</td>
    <td>80</td>
  </tr>
  <tr>
    <td>น้ำผลไม้รวม</td>
    <td>1 กล่อง</td>
    <td>100</td>
  </tr>
  <tr>
    <td>น้ำผักรวม</td>
    <td>1 กล่อง</td>
    <td>90</td>
  </tr>
  <tr>
    <td>น้ำฝรั่ง</td>
    <td>200 ml</td>
    <td>100</td>
  </tr>
  <tr>
    <td>กาแฟเย็น</td>
    <td>200 ml</td>
    <td>317</td>
  </tr>
  <tr>
    <td>โกโก้เย็น</td>
    <td>200 ml</td>
    <td>334</td>
  </tr>
  <tr>
    <td>ชาเขียวนมย็น</td>
    <td>200 ml</td>
    <td>319</td>
  </tr>
  <tr>
    <td>ชานมเย็น</td>
    <td>200 ml</td>
    <td>319</td>
  </tr>
  <tr>
    <td>นมเย็น</td>
    <td>200 ml</td>
    <td>425</td>
  </tr>
  <tr>
    <td>โอเลี้ยง</td>
    <td>200 ml</td>
    <td>103</td>
  </tr>
  <tr>
    <td>ชาเย็น</td>
    <td>200 ml</td>
    <td>100</td>
  </tr>
  <tr>
    <td>โอวันติน</td>
    <td>1 ซอง</td>
    <td>150</td>
  </tr>
  <tr>
    <td>โอวันติน</td>
    <td>1 ซอง</td>
    <td>140</td>
  </tr>
  <tr>
    <td>ชาพีช</td>
    <td>1 ซอง</td>
    <td>15</td>
  </tr>
  <tr>
    <td>น้ำเปล่า</td>
    <td>-</td>
    <td>0</td>
  </tr>
  <tr>
    <td>น้ำใบบัวบก</td>
    <td>1 แก้ว</td>
    <td>120</td>
  </tr>
  <tr>
    <td>น้ำมะพร้าว</td>
    <td>100 กรัม</td>
    <td>18.9</td>
  </tr>
  <tr>
    <td>รังนก</td>
    <td>75 ml</td>
    <td>52</td>
  </tr>
  <tr>
    <td>M150</td>
    <td>1 ขวด</td>
    <td>110</td>
  </tr>
<!----------------------------------snack&fruit---------------------------->
<tr>
    <td>กล้วยไข่</td>
    <td>1 ลูก</td>
    <td>40</td>
  </tr>
  <tr>
    <td>กล้วยฉาบ</td>
    <td>1 ชิ้น</td>
    <td>29</td>
  </tr>
  <tr>
    <td>กล้วยตาก</td>
    <td>1 ผล</td>
    <td>30</td>
  </tr>
  <tr>
    <td>กล้วยแขกทอด</td>
    <td>1 ชิ้น</td>
    <td>50</td>
  </tr>
  <tr>
    <td>กล้วยน้ำว้า</td>
    <td>1 ลูก</td>
    <td>36</td>
  </tr>
  <tr>
    <td>กล้วยบวชชี</td>
    <td>1 ถ้วยเล็ก</td>
    <td>152</td>
  </tr>
  <tr>
    <td>กล้วยเล็บมือนาง</td>
    <td>1 ผล</td>
    <td>30</td>
  </tr>
  <tr>
    <td>กล้วยหอม</td>
    <td>1 ลูก</td>
    <td>77</td>
  </tr>
  <tr>
    <td>กะละแม</td>
    <td>1 ห่อเล็ก</td>
    <td>65</td>
  </tr>
  <tr>
    <td>กะหรี่พัฟ</td>
    <td>1 ชิ้น</td>
    <td>157</td>
  </tr>
  <tr>
    <td>แก้วมังกร</td>
    <td>1 ลูก</td>
    <td>60</td>
  </tr>
  <tr>
    <td>ขนมกล้วย</td>
    <td>1 ห่อ</td>
    <td>120</td>
  </tr>
  <tr>
    <td>ขนมกลีบลำดวน</td>
    <td>1 ชิ้น</td>
    <td>23</td>
  </tr>
  <tr>
    <td>ขนมกุ้ยช่าย</td>
    <td>1 ชิ้น</td>
    <td>53</td>
  </tr>
  <tr>
    <td>ขนมเกลียว</td>
    <td>1 ตัว</td>
    <td>25</td>
  </tr>
  <tr>
    <td>ขนมเข่ง</td>
    <td>1 กระทง</td>
    <td>120</td>
  </tr>
  <tr>
    <td>ขนมครก</td>
    <td>1 คู่</td>
    <td>92</td>
  </tr>
  <tr>
    <td>ขนมตาล</td>
    <td>1 กระทง</td>
    <td>58</td>
  </tr>
  <tr>
    <td>ขนมถั่วแปป</td>
    <td>1 ชิ้น</td>
    <td>14</td>
  </tr>
  <tr>
    <td>ขนมเทียน</td>
    <td>1 ห่อ</td>
    <td>103</td>
  </tr>
  <tr>
    <td>ขนมบ้าบิ่น</td>
    <td>1 ชิ้น</td>
    <td>130</td>
  </tr>
  <tr>
    <td>ขนมเบื้องไทยไส้เค็ม</td>
    <td>1 แผ่น</td>
    <td>50</td>
  </tr>
  <tr>
    <td>ขนมเบื้องไทยไส้หวาน</td>
    <td>1 แผ่น</td>
    <td>60</td>
  </tr>
  <tr>
    <td>ขนมเปียกปูน</td>
    <td>1 จานเล็ก</td>
    <td>195</td>
  </tr>
  <tr>
    <td>ขนมผิง</td>
    <td>1 ก้อนเล็ก</td>
    <td>5</td>
  </tr>
  <tr>
    <td>ข้าวต้มมัด</td>
    <td>1 มัด</td>
    <td>285</td>
  </tr>
  <tr>
    <td>ข้าวตังหมูหยอง</td>
    <td>1 แผ่น</td>
    <td>80</td>
  </tr>
  <tr>
    <td>ข้าวโพดต้ม</td>
    <td>1 ฝัก</td>
    <td>200</td>
  </tr>
  <tr>
    <td>ข้าวเม่าทอด</td>
    <td>1 ชิ้น</td>
    <td>209</td>
  </tr>
  <tr>
    <td>ข้าวเหนียวหน้าสังขยา</td>
    <td>1 จานเล็ก</td>
    <td>223</td>
  </tr>
  <tr>
    <td>ครองแครงกรอบเค็ม</td>
    <td>1 ตัว</td>
    <td>19</td>
  </tr>
  <tr>
    <td>ครัวซอง</td>
    <td>1 ชิ้น</td>
    <td>235</td>
  </tr>
  <tr>
    <td>แคนตาลูป</td>
    <td>1 ชิ้น</td>
    <td>4</td>
  </tr>
  <tr>
    <td>เงาะ</td>
    <td>1 ลูก</td>
    <td>12</td>
  </tr>
  <tr>
    <td>เฉาก๊วย</td>
    <td>1 ถ้วย</td>
    <td>90</td>
  </tr>
  <tr>
    <td>ชมพู่</td>
    <td>1 ผล</td>
    <td>16</td>
  </tr>
  <tr>
    <td>เชอรี่</td>
    <td>1 ผล</td>
    <td>15</td>
  </tr>
  <tr>
    <td>ซาลาเปาทอด</td>
    <td>1 ลูก</td>
    <td>157</td>
  </tr>
  <tr>
    <td>ซาลาเปาไส้หมู</td>
    <td>1 ลูก</td>
    <td>202</td>
  </tr>
  <tr>
    <td>ซาหริ่ม</td>
    <td>1 ถ้วย</td>
    <td>275</td>
  </tr>
  <tr>
    <td>เต้าส่วน</td>
    <td>1 ถ้วย</td>
    <td>215</td>
  </tr>
  <tr>
    <td>เต้าหู้ไข่</td>
    <td>1 หลอด</td>
    <td>70</td>
  </tr>
  <tr>
    <td>เต้าหู้ทอด</td>
    <td>1 ชิ้น</td>
    <td>57</td>
  </tr>
  <tr>
    <td>เต้าหู้นมสด</td>
    <td>1 ถ้วย</td>
    <td>150</td>
  </tr>
  <tr>
    <td>เต้าฮวยน้ำขิง</td>
    <td>1 ถ้วย</td>
    <td>25</td>
  </tr>
  <tr>
    <td>แตงไทย</td>
    <td>1 ชิ้น</td>
    <td>4</td>
  </tr>
  <tr>
    <td>แตงโม</td>
    <td>1 kg</td>
    <td>250</td>
  </tr>
  <tr>
    <td>ถั่วทอด</td>
    <td>1 แพ</td>
    <td>82</td>
  </tr>
  <tr>
    <td>ถั่วลิสงทอด</td>
    <td>1 ช้อนโต๊ะ</td>
    <td>62</td>
  </tr>
  <tr>
    <td>ทองม้วน</td>
    <td>1 อัน</td>
    <td>35</td>
  </tr>
  <tr>
    <td>ทับทิมกรอบ</td>
    <td>1 ถ้วย</td>
    <td>250</td>
  </tr>
  <tr>
    <td>ทุเรียน</td>
    <td>1 เม็ด</td>
    <td>59</td>
  </tr>
  <tr>
    <td>ทุเรียนทอดกรอบ</td>
    <td>1 ชิ้น</td>
    <td>9</td>
  </tr>
  <tr>
    <td>น้อยหน่า</td>
    <td>1 ลูก</td>
    <td>61</td>
  </tr>
  <tr>
    <td>บะจ่าง</td>
    <td>1 ลูก</td>
    <td>300</td>
  </tr>
  <tr>
    <td>บัวลอย</td>
    <td>1 ถ้วยเล็ก</td>
    <td>223</td>
  </tr>
  <tr>
    <td>ปาท่องโก๋</td>
    <td>1 ตัว</td>
    <td>124</td>
  </tr>
  <tr>
    <td>เผือกทอด</td>
    <td>1 ชิ้น</td>
    <td>99</td>
  </tr>
  <tr>
    <td>ฝรั่ง</td>
    <td>1 ผล</td>
    <td>174</td>
  </tr>
  <tr>
    <td>ฝอยทอง</td>
    <td>1 แพ</td>
    <td>146</td>
  </tr>
  <tr>
    <td>พุทรา</td>
    <td>1 ลูก</td>
    <td>20</td>
  </tr>
  <tr>
    <td>มะกอก</td>
    <td>1 ลูก</td>
    <td>20</td>
  </tr>
  <tr>
    <td>มะขามหวาน</td>
    <td>1 ผล</td>
    <td>20</td>
  </tr>
  <tr>
    <td>มะปรางสุก</td>
    <td>1 ผล</td>
    <td>20</td>
  </tr>
  <tr>
    <td>มะเฟือง</td>
    <td>1 ผล</td>
    <td>120</td>
  </tr>
  <tr>
    <td>มะไฟ</td>
    <td>1 ผล</td>
    <td>4</td>
  </tr>
  <tr>
    <td>มะม่วงเขียวเสวย</td>
    <td>1 ผล</td>
    <td>120</td>
  </tr>
  <tr>
    <td>มะม่วงดิบ</td>
    <td>1 ลูก</td>
    <td>110</td>
  </tr>
  <tr>
    <td>มะม่วงน้ำดอกไม้</td>
    <td>1 ชิ้น</td>
    <td>15</td>
  </tr>
  <tr>
    <td>มะม่วงสุก</td>
    <td>1 ลูก</td>
    <td>98</td>
  </tr>
  <tr>
    <td>มะม่วงอกร่องสุก</td>
    <td>1 ชิ้น</td>
    <td>15</td>
  </tr>
  <tr>
    <td>มะยม</td>
    <td>1 เม็ด</td>
    <td>4</td>
  </tr>
  <tr>
    <td>มะละกอ</td>
    <td>1 ชิ้น</td>
    <td>8</td>
  </tr>
  <tr>
    <td>มังคุด</td>
    <td>1 ผล</td>
    <td>13</td>
  </tr>
  <tr>
    <td>มันทอด</td>
    <td>1 ชิ้น</td>
    <td>124</td>
  </tr>
  <tr>
    <td>เฟร้นฟราย</td>
    <td>1 ชิ้น</td>
    <td>20</td>
  </tr>
  <tr>
    <td>เมล็ดมะม่วงหิมพานต์ทอด</td>
    <td>1 ชิ้น</td>
    <td>28</td>
  </tr>
  <tr>
    <td>ระกำ</td>
    <td>1 ผล</td>
    <td>8</td>
  </tr>
  <tr>
    <td>โรตี ใส่นมข้นและน้ำตาล</td>
    <td>1 ชิ้น</td>
    <td>192</td>
  </tr>
  <tr>
    <td>ลองกอง</td>
    <td>1 ลูก</td>
    <td>6</td>
  </tr>
  <tr>
    <td>ลอดช่องน้ำกะทิ</td>
    <td>1 ถ้วย</td>
    <td>210</td>
  </tr>
  <tr>
    <td>ลอดช่องสิงคโปร์</td>
    <td>1 ถ้วย</td>
    <td>215</td>
  </tr>
  <tr>
    <td>ละมุด</td>
    <td>1 ผล</td>
    <td>120</td>
  </tr>
  <tr>
    <td>ลางสาด</td>
    <td>1 ผล</td>
    <td>6</td>
  </tr>
  <tr>
    <td>ลำไย</td>
    <td>1 เม็ด</td>
    <td>8</td>
  </tr>
  <tr>
    <td>ลำไยแห้ง</td>
    <td>1 เม็ด</td>
    <td>9</td>
  </tr>
  <tr>
    <td>ลิ้นจี่</td>
    <td>1 ลูก</td>
    <td>17</td>
  </tr>
  <tr>
    <td>ลูกเกด</td>
    <td>1 เม็ด</td>
    <td>4</td>
  </tr>
  <tr>
    <td>ลูกชุบ</td>
    <td>1 ชิ้น</td>
    <td>57</td>
  </tr>
  <tr>
    <td>ลูกพลับ</td>
    <td>1 ผล</td>
    <td>120</td>
  </tr>
  <tr>
    <td>พีช</td>
    <td>1 ผล</td>
    <td>39.4</td>
  </tr>
  <tr>
    <td>แอปเปิ้ล</td>
    <td>100 กรัม</td>
    <td>50</td>
  </tr>
  <tr>
    <td>ส้ม</td>
    <td>1 ผล</td>
    <td>60</td>
  </tr>
  <tr>
    <td>แครนเบอร์รี่</td>
    <td>100 กรัม</td>
    <td>46</td>
  </tr>
  <tr>
    <td>สตรอเบอร์รี่</td>
    <td>1 ถ้วย</td>
    <td>60</td>
  </tr>
  <tr>
    <td>สับปะรด</td>
    <td>100 กรัม</td>
    <td>50</td>
  </tr>
  <tr>
    <td>อะโวคาโด</td>
    <td>100 กรัม</td>
    <td>189</td>
  </tr>  
  <tr>
    <td>เชอร์รี่</td>
    <td>100 กรัม</td>
    <td>60</td>
  </tr>
  <tr>
    <td>กีวี่</td>
    <td>100 กรัม</td>
    <td>60</td>
  </tr>
  <tr>
    <td>ส้มโอ</td>
    <td>100 กรัม</td>
    <td>38</td>
  </tr>
  <tr>
    <td>บลูเบอร์รี่</td>
    <td>100 กรัม</td>
    <td>57.4</td>
  </tr>
  <tr>
    <td>ราสเบอร์รี่</td>
    <td>100 กรัม</td>
    <td>52.6</td>
  </tr> 
  <tr>
    <td>ไวท์มัลเบอร์รี่</td>
    <td>100 กรัม</td>
    <td>43</td>
  </tr>
  <tr>
    <td>แบล็กเบอร์รี่</td>
    <td>100 กรัม</td>
    <td>43.3</td>
  </tr> 
  <tr>
    <td>กูสเบอร์รี่</td>
    <td>1.9 กรัม</td>
    <td>53</td>
  </tr>
  <tr>
    <td>นมถั่วเหลือง</td>
    <td>1 แก้ว</td>
    <td>55</td>
  </tr>
  <tr>
    <td>เชอร์รี่</td>
    <td>1 กิโลกรัม</td>
    <td>340</td>
  </tr>
  <tr>
    <td>สละหวาน</td>
    <td>1 ผล</td>
    <td>60</td>
  </tr>
  <tr>
    <td>สาลี่</td>
    <td>1 ผล</td>
    <td>116</td>
  </tr>
  <tr>
    <td>ขนมชั้น</td>
    <td>1 ชิ้น</td>
    <td>92</td>
  </tr>
  <tr>
    <td>ขนมปลากริมไข่เต่า</td>
    <td>1 ถ้วย</td>
    <td>250</td>
  </tr> 
  <tr>
    <td>ขนมหม้อแกง</td>
    <td>1 ชิ้น</td>
    <td>179</td>
  </tr>
  <tr>
    <td>ขนมไหว้พระจันทร์ไส้ทุเรียนกวน</td>
    <td>1 ชิ้น</td>
    <td>340</td>
  </tr> 
  <tr>
    <td>ข้าวเหนียวสังขยา</td>
    <td>1 ห่อ</td>
    <td>370</td>
  </tr>
  <tr>
    <td>ครีมเทียม</td>
    <td>1 ช้อนชา</td>
    <td>45</td>
  </tr>
  <tr>
    <td>ครีมโรล</td>
    <td>1 ชิ้น</td>
    <td>360</td>
  </tr>
  <tr>
    <td>คอร์นเฟลค</td>
    <td>1 ถ้วยตวง</td>
    <td>110</td>
  </tr> 
  <tr>
    <td>คุ้กกี้ช็อคโกแลตชิพ</td>
    <td>1 ชิ้น</td>
    <td>215</td>
  </tr>
  <tr>
    <td>คุ้กกี้เนย</td>
    <td>1 ชิ้น</td>
    <td>105</td>
  </tr>
  <tr>
    <td>ชาดำเย็น</td>
    <td>1 แก้ว</td>
    <td>110</td>
  </tr>
  <tr>
    <td>ชาร้อน</td>
    <td>1 แก้ว</td>
    <td>55</td>
  </tr>
  <tr>
    <td>ชาเย็น</td>
    <td>1 แก้ว</td>
    <td>100</td>
  </tr>
  <tr>
    <td>ช็อคโกแลตร้อน</td>
    <td>1 แก้ว</td>
    <td>120</td>
  </tr>
  <tr>
    <td>ถั่วลิสงต้ม</td>
    <td>1 ช้อนโต๊ะ</td>
    <td>45</td>
  </tr> 
  <tr>
    <td>ทองหยิบ</td>
    <td>1 ชิ้น</td>
    <td>105</td>
  </tr>
  <tr>
    <td>ทุเรียนกวน</td>
    <td>1 ช้อนโต๊ะ</td>
    <td>115</td>
  </tr> 
  <tr>
    <td>บราวนี่</td>
    <td>1 ชิ้น</td>
    <td>340</td>
  </tr>
  <tr>
    <td>น้ำใบเตย</td>
    <td>1 แก้ว</td>
    <td>120</td>
  </tr>
  <tr>
    <td>บูลเบอร์รี่ชีสพาย</td>
    <td>1 ชิ้น</td>
    <td>350</td>
  </tr> 
  <tr>
    <td>พายทูน่า</td>
    <td>1 ชิ้น</td>
    <td>280</td>
  </tr>
  <tr>
    <td>พิซซ่าขอบไส้กรอกชีส</td>
    <td>1 ชิ้น</td>
    <td>340</td>
  </tr>
  <tr>
    <td>พิซซ่าทะเล</td>
    <td>1 ชิ้น</td>
    <td>335</td>
  </tr>
  <tr>
    <td>พิซซ่าฮาวายเอี้ยน</td>
    <td>1 ชิ้น</td>
    <td>345</td>
  </tr>
  <tr>
    <td>พิซซ่าไส้กรอก</td>
    <td>1 ชิ้น</td>
    <td>290</td>
  </tr>
  <tr>
    <td>ฟักทองเชื่อม</td>
    <td>1 จาน</td>
    <td>167</td>
  </tr>
  <tr>
    <td>มันฝรั่งแผ่น</td>
    <td>1 ชิ้น</td>
    <td>13</td>
  </tr> 
  <tr>
    <td>มาการีน</td>
    <td>1 ช้อนชา</td>
    <td>45</td>
  </tr>
  <tr>
    <td>รวมมิตร</td>
    <td>1 ถ้วยเล็ก</td>
    <td>230</td>
  </tr> 
  <tr>
    <td>ลูกตาลลอยแก้ว</td>
    <td>1 ถ้วย</td>
    <td>180</td>
  </tr>
  <tr>
    <td>วุ้นมะพร้าวอ่อน</td>
    <td>1 ชิ้น</td>
    <td>80</td>
  </tr>
  <tr>
    <td>สังขยาฟักทอง</td>
    <td>1 ชิ้นเล็ก</td>
    <td>288</td>
  </tr>
  <tr>
    <td>เค้กกล้วยหอม</td>
    <td>1 ชิ้น</td>
    <td>730</td>
  </tr> 
  <tr>
    <td>เค้กช็อคโกแลต</td>
    <td>1 ชิ้น</td>
    <td>275</td>
  </tr>
  <tr>
    <td>เค้กใบเตย</td>
    <td>1 ชิ้น</td>
    <td>250</td>
  </tr>
  <tr>
    <td>แซนวิชแฮมชีส</td>
    <td>1 คู่</td>
    <td>290</td>
  </tr> 
  <tr>
    <td>แซนวิชทูน่า</td>
    <td>1 คู่</td>
    <td>180</td>
  </tr>
  <tr>
    <td>แยมโรล</td>
    <td>1 ชิ้น</td>
    <td>310</td>
  </tr>
  <tr>
    <td>โดนัท</td>
    <td>1 ชิ้น</td>
    <td>270</td>
  </tr>
  <tr>
    <td>โรตีสายไหม</td>
    <td>1 ชิ้น</td>
    <td>145</td>
  </tr>
  <tr>
    <td>ไอศกรีมกะทิ</td>
    <td>1 ก้อน</td>
    <td>108</td>
  </tr>
  <tr>
    <td>ไอศกรีมกาแฟ</td>
    <td>1 ก้อน</td>
    <td>142</td>
  </tr>
  <tr>
    <td>ไอศกรีมช็อกโกแลต</td>
    <td>1 ก้อน</td>
    <td>110</td>
  </tr> 
  <tr>
    <td>ไอศกรีมวนิลลา</td>
    <td>1 ก้อน</td>
    <td>140</td>
  </tr>
  <tr>
    <td>ไอศกรีมสตรอเบอร์รี่</td>
    <td>1 ก้อน</td>
    <td>110</td>
  </tr> 
  <tr>
    <td>กาแฟเอสเปรสโซ่</td>
    <td>1 แก้ว</td>
    <td>13</td>
  </tr>
  <tr>
    <td>กาแฟอเมริกาโน่</td>
    <td>1 แก้ว</td>
    <td>15</td>
  </tr>
  <tr>
    <td>กาแฟคาปูชิโน่</td>
    <td>1 แก้ว</td>
    <td>120</td>
  </tr>
  <tr>
    <td>กาแฟลาเต้</td>
    <td>1 แก้ว</td>
    <td>190</td>
  </tr>
  <tr>
    <td>กาแฟมอคค่า</td>
    <td>1 แก้ว</td>
    <td>330</td>
  </tr>
  <tr>
    <td>ไอศกรีมเชอร์เบต</td>
    <td>1 ถ้วย</td>
    <td>180</td>
  </tr>
  <tr>
    <td>กาแฟคาราเมลมัคคิอาโต้</td>
    <td>1 แก้ว</td>
    <td>390</td>
  </tr>
<!----------------------------------food---------------------------->
<tr>
    <td>กระเพาะปลา</td>
    <td>1 ชาม</td>
    <td>150</td>
  </tr>
  <tr>
    <td>ก๋วยจั๊บ</td>
    <td>1 ชาม</td>
    <td>240</td>
  </tr>
  <tr>
    <td>ก๋วยเตี๋ยวเรือน้ำตก</td>
    <td>1 ชาม</td>
    <td>180</td>
  </tr>
  <tr>
    <td>ก๋วยเตี๋ยวหลอด</td>
    <td>1 ชิ้น</td>
    <td>50</td>
  </tr>
  <tr>
    <td>กุ้งแช่น้ำปลา</td>
    <td>1 ตัว</td>
    <td>14</td>
  </tr>
  <tr>
    <td>กุ้งทอดกระเทียมพริกไทย</td>
    <td>1 ตัวกลาง</td>
    <td>86</td>
  </tr>
  <tr>
    <td>กุ้งผัดพริกอ่อน</td>
    <td>1 จาน</td>
    <td>235</td>
  </tr>
  <tr>
    <td>กุ้งอบวุ้นเส้น</td>
    <td>1 จาน</td>
    <td>300</td>
  </tr>
  <tr>
    <td>กุนเชียงทอด</td>
    <td>1 ชิ้นเล็ก</td>
    <td>120</td>
  </tr>
  <tr>
    <td>กุ้ยช่ายทอด</td>
    <td>1 ชิ้น</td>
    <td>114</td>
  </tr>
  <tr>
    <td>เกาเหลาลูกชิ้นน้ำ</td>
    <td>1 ชาม</td>
    <td>225</td>
  </tr>
  <tr>
    <td>เกี๊ยวซ่า</td>
    <td>1 ชิ้น</td>
    <td>63</td>
  </tr>
  <tr>
    <td>เกี๊ยวน้ำกุ้ง</td>
    <td>1 ชาม</td>
    <td>275</td>
  </tr>
  <tr>
    <td>แกงกะหรี่ไก่</td>
    <td>1 ถ้วย</td>
    <td>450</td>
  </tr>
  <tr>
    <td>แกงกะหรี่หมู</td>
    <td>1 ถ้วย</td>
    <td>325</td>
  </tr>
  <tr>
    <td>แกงขี้เหล็ก</td>
    <td>1 ถ้วย</td>
    <td>195</td>
  </tr>
  <tr>
    <td>แกงเขียวหวานไก่</td>
    <td>1 ถ้วย</td>
    <td>240</td>
  </tr>
  <tr>
    <td>แกงจืดตำลึงหมูสับ</td>
    <td>1 ถ้วย</td>
    <td>90</td>
  </tr>
  <tr>
    <td>แกงจืดวุ้นเส้น</td>
    <td>1 ถ้วย</td>
    <td>85</td>
  </tr>
  <tr>
    <td>แกงไตปลา</td>
    <td>1 ถ้วย</td>
    <td>50</td>
  </tr>
  <tr>
    <td>แกงเผ็ดไก่ใส่หน่อไม้</td>
    <td>1 ถ้วย</td>
    <td>245</td>
  </tr>
  <tr>
    <td>มัสมั่นไก่</td>
    <td>1 ถ้วย</td>
    <td>325</td>
  </tr>
  <tr>
    <td>แกงเลียง</td>
    <td>1 ชาม</td>
    <td>115</td>
  </tr>
  <tr>
    <td>แกงส้ม</td>
    <td>1 ถ้วย</td>
    <td>28</td>
  </tr>
  <tr>
    <td>แกงหมูเทโพ</td>
    <td>1 ถ้วย</td>
    <td>300</td>
  </tr>
  <tr>
    <td>ไก่ทอด</td>
    <td>1 น่อง</td>
    <td>345</td>
  </tr>
  <tr>
    <td>ไก่ผัดขิง</td>
    <td>1 จาน</td>
    <td>210</td>
  </tr>
  <tr>
    <td>ไก่ยอชุบแป้งทอด</td>
    <td>1 ชิ้น</td>
    <td>73</td>
  </tr>
  <tr>
    <td>ไก่ย่าง</td>
    <td>1 น่อง</td>
    <td>165</td>
  </tr>
  <tr>
    <td>ขนมจีนแกงเขียวหวานไก่</td>
    <td>1 ชาม</td>
    <td>594</td>
  </tr>
  <tr>
    <td>ขนมจีนน้ำยา</td>
    <td>1 จาน</td>
    <td>332</td>
  </tr>
  <tr>
    <td>ขนมจีบหมู</td>
    <td>1 ชิ้น</td>
    <td>32</td>
  </tr>
  <tr>
    <td>ข้าวเกรียบกุ้ง</td>
    <td>1 แผ่น</td>
    <td>37</td>
  </tr>
  <tr>
    <td>ข้าวเกรียบปากหม้อ</td>
    <td>1 ชิ้น</td>
    <td>26</td>
  </tr>
  <tr>
    <td>ข้าวแกงกะหรี่ไก่</td>
    <td>1 จาน</td>
    <td>389</td>
  </tr>
  <tr>
    <td>ข้าวไก่อบ</td>
    <td>1 จาน</td>
    <td>490</td>
  </tr>
  <tr>
    <td>ข้าวขาหมู</td>
    <td>1 จาน</td>
    <td>690</td>
  </tr>
  <tr>
    <td>ข้าวไข่เจียว</td>
    <td>1 จาน</td>
    <td>445</td>
  </tr>
  <tr>
    <td>ข้าวคลุกกะปิ</td>
    <td>1 จาน</td>
    <td>410</td>
  </tr>
  <tr>
    <td>ข้าวซอยไก่</td>
    <td>1 ชาม</td>
    <td>395</td>
  </tr>
  <tr>
    <td>ข้าวต้ม</td>
    <td>1 ถ้วย</td>
    <td>120</td>
  </tr>
  <tr>
    <td>ข้าวผัดกระเพราหมูกรอบ</td>
    <td>1 จาน</td>
    <td>650</td>
  </tr>
  <tr>
    <td>ข้าวผัดกะเพราหมู</td>
    <td>1 จาน</td>
    <td>580</td>
  </tr>
  <tr>
    <td>ข้าวผัดคะน้าหมูกรอบ</td>
    <td>1 จาน</td>
    <td>28</td>
  </tr>
  <tr>
    <td>ข้าวผัดต้มยำทะเลแห้ง</td>
    <td>1 จาน</td>
    <td>400</td>
  </tr>
  <tr>
    <td>ข้าวผัดน้ำพริกกุ้งสด</td>
    <td>1 จาน</td>
    <td>460</td>
  </tr>
  <tr>
    <td>ข้าวผัดน้ำพริกลงเรือ</td>
    <td>1 จาน</td>
    <td>605</td>
  </tr>
  <tr>
    <td>ข้าวผัดปูใส่ไข่</td>
    <td>1 จาน</td>
    <td>610</td>
  </tr>
  <tr>
    <td>ข้าวผัดอเมริกัน</td>
    <td>1 จาน</td>
    <td>790</td>
  </tr>
  <tr>
    <td>ข้าวมันไก่</td>
    <td>1 จาน</td>
    <td>596</td>
  </tr>
  <tr>
    <td>ข้าวมันไก่ทอด</td>
    <td>1 จาน</td>
    <td>695</td>
  </tr>
  <tr>
    <td>ข้าวยำปักษ์ใต้</td>
    <td>1 จาน</td>
    <td>248</td>
  </tr>
  <tr>
    <td>ข้าวหมกไก่</td>
    <td>1 จาน</td>
    <td>534</td>
  </tr>
  <tr>
    <td>ข้าวหมูแดง</td>
    <td>1 จาน</td>
    <td>541</td>
  </tr>
  <tr>
    <td>ข้าวหมูทอด</td>
    <td>1 จาน</td>
    <td>416</td>
  </tr>
  <tr>
    <td>ข้าวหมูทอดกระเทียม</td>
    <td>1 จาน</td>
    <td>525</td>
  </tr>
  <tr>
    <td>ข้าวหมูอบ</td>
    <td>1 จาน</td>
    <td>389</td>
  </tr>
  <tr>
    <td>ข้าวสวย</td>
    <td>1 ทัพพี</td>
    <td>80</td>
  </tr>
  <tr>
    <td>ข้าวเหนียวหมูทอด</td>
    <td>1 ชุด</td>
    <td>440</td>
  </tr>
  <tr>
    <td>ไข่เค็ม</td>
    <td>1 ฟอง</td>
    <td>75</td>
  </tr>
  <tr>
    <td>ไข่เจียว</td>
    <td>1 ฟอง</td>
    <td>215</td>
  </tr>
  <tr>
    <td>ไข่ดาว</td>
    <td>1 ฟอง</td>
    <td>215</td>
  </tr>
  <tr>
    <td>ไข่ต้ม</td>
    <td>1 ฟอง</td>
    <td>73</td>
  </tr>
  <tr>
    <td>ไข่ตุ๋น</td>
    <td>1 ฟอง</td>
    <td>75</td>
  </tr>
  <tr>
    <td>ไข่ตุ๋นทรงเครื่อง</td>
    <td>1 ฟอง</td>
    <td>159</td>
  </tr>  
  <tr>
    <td>ไข่นกกระทา</td>
    <td>1 จานเล็ก</td>
    <td>191</td>
  </tr>
  <tr>
    <td>ไข่พะโล้</td>
    <td>1 ถ้วย</td>
    <td>180</td>
  </tr>
  <tr>
    <td>ไข่ยัดไส้</td>
    <td>1 จาน</td>
    <td>310</td>
  </tr>
  <tr>
    <td>ไข่ลวก</td>
    <td>1 ฟอง</td>
    <td>75</td>
  </tr>
  <tr>
    <td>ไข่ลูกเขย</td>
    <td>1 ฟอง</td>
    <td>205</td>
  </tr> 
  <tr>
    <td>คอหมูย่าง</td>
    <td>1 จาน</td>
    <td>200</td>
  </tr>
  <tr>
    <td>คะน้าหมูกรอบ</td>
    <td>1 จาน</td>
    <td>420</td>
  </tr> 
  <tr>
    <td>แคบหมู มีมัน</td>
    <td>1 ชิ้นเล็ก</td>
    <td>13</td>
  </tr>
  <tr>
    <td>แคบหมู ไร้มัน</td>
    <td>1 ชิ้นเล็ก</td>
    <td>10</td>
  </tr>
  <tr>
    <td>โจ๊กใส่ไข่</td>
    <td>1 ถ้วย</td>
    <td>250</td>
  </tr>
  <tr>
    <td>โจ๊กหมู</td>
    <td>1 ถ้วย</td>
    <td>160</td>
  </tr>
  <tr>
    <td>ซุปข้าวโพด</td>
    <td>1 ถ้วย</td>
    <td>140</td>
  </tr>
  <tr>
    <td>ต้มข่าไก่</td>
    <td>1 ถ้วย</td>
    <td>210</td>
  </tr>
  <tr>
    <td>ต้มจืดเลือดหมู</td>
    <td>1 ถ้วย</td>
    <td>120</td>
  </tr>
  <tr>
    <td>ต้มยำกุ้ง</td>
    <td>1 ถ้วย</td>
    <td>65</td>
  </tr>
  <tr>
    <td>ทอดมันกุ้ง</td>
    <td>1 จาน</td>
    <td>255</td>
  </tr>
  <tr>
    <td>ทอดมันปลากลาย</td>
    <td>1 ชิ้น</td>
    <td>37</td>
  </tr>
  <tr>
    <td>เทมปุระ</td>
    <td>1 ชิ้น</td>
    <td>77</td>
  </tr>
  <tr>
    <td>น้ำพริกหนุ่ม</td>
    <td>1 ช้อนโต๊ะ</td>
    <td>18</td>
  </tr>
  <tr>
    <td>น้ำพริกอ่อง</td>
    <td>1 ช้อนโต๊ะ</td>
    <td>80</td>
  </tr>
  <tr>
    <td>บะหมี่กรอบราดหน้า</td>
    <td>1 จาน</td>
    <td>515</td>
  </tr>
  <tr>
    <td>บะหมี่กึ่งสำเร็จรูป</td>
    <td>1 ก้อน</td>
    <td>253</td>
  </tr>
  <tr>
    <td>ปลาซาบะย่าง</td>
    <td>1 ตัว</td>
    <td>220</td>
  </tr>
  <tr>
    <td>ปลาแซลมอนย่าง</td>
    <td>1 จาน</td>
    <td>260</td>
  </tr>
  <tr>
    <td>ปลาเผา</td>
    <td>1 ตัว</td>
    <td>156</td>
  </tr>
  <tr>
    <td>ปลาหมึกนึ่งมะนาว</td>
    <td>1 ตัว</td>
    <td>75</td>
  </tr>
  <tr>
    <td>ปลาหมึกย่าง</td>
    <td>1 ไม้</td>
    <td>37</td>
  </tr>
  <tr>
    <td>ปอเปี๊ยะทอด</td>
    <td>1 ชิ้น</td>
    <td>158</td>
  </tr>
  <tr>
    <td>ปีกไก่ทอด</td>
    <td>1 ชิ้นกลาง</td>
    <td>107</td>
  </tr>
  <tr>
    <td>เป็ดพะโล้</td>
    <td>1 ถ้วย</td>
    <td>110</td>
  </tr>
  <tr>
    <td>ผัดไชโป๊วใส่ไข่</td>
    <td>1 จาน</td>
    <td>125</td>
  </tr>
  <tr>
    <td>ผัดซีอิ๊วเส้นใหญ่หมูใส่ไข่</td>
    <td>1 จาน</td>
    <td>679</td>
  </tr>
  <tr>
    <td>ผัดไทยกุ้งสด</td>
    <td>1 จาน</td>
    <td>486</td>
  </tr>
  <tr>
    <td>ผัดไทยกุ้งสดใส่ไข่</td>
    <td>1 จาน</td>
    <td>545</td>
  </tr>
  <tr>
    <td>ผัดไทยห่อไข่</td>
    <td>1 จาน</td>
    <td>565</td>
  </tr>
  <tr>
    <td>ผัดเปรี้ยวหวานไก่</td>
    <td>1 จาน</td>
    <td>215</td>
  </tr>
  <tr>
    <td>ผัดกระเฉดน้ำมันหอย</td>
    <td>1 จาน</td>
    <td>185</td>
  </tr>
  <tr>
    <td>ผัดผักบุ้งไฟแดง</td>
    <td>1 จาน</td>
    <td>210</td>
  </tr>
  <tr>
    <td>ผัดเผ็ดปลาดุก</td>
    <td>1 จาน</td>
    <td>200</td>
  </tr>
  <tr>
    <td>ผัดฟักทองใส่ไข่</td>
    <td>1 จาน</td>
    <td>255</td>
  </tr>
  <tr>
    <td>ผัดวุ้นเส้นใส่ไข่</td>
    <td>1 จาน</td>
    <td>265</td>
  </tr>
  <tr>
    <td>ผัดมักกะโรนีหมู</td>
    <td>1 จาน</td>
    <td>514</td>
  </tr>
  <tr>
    <td>ผัดหมี่ซั่ว</td>
    <td>1 จาน</td>
    <td>395</td>
  </tr>
  <tr>
    <td>เฝอ</td>
    <td>1 ถ้วย</td>
    <td>240</td>
  </tr>
  <tr>
    <td>พะแนงไก่</td>
    <td>1 ถ้วย</td>
    <td>230</td>
  </tr>
  <tr>
    <td>มักกะโรนีขี้เมาไก่</td>
    <td>1 จาน</td>
    <td>520</td>
  </tr>
  <tr>
    <td>เมี่ยงคำ</td>
    <td>1 คำ</td>
    <td>30</td>
  </tr>
  <tr>
    <td>ยากิโซบะ</td>
    <td>1 จาน</td>
    <td>400</td>
  </tr>
  <tr>
    <td>ยำขนมจีน</td>
    <td>1 จาน</td>
    <td>220</td>
  </tr>
  <tr>
    <td>ยำถั่วพู</td>
    <td>1 จาน</td>
    <td>185</td>
  </tr>
  <tr>
    <td>ยำมาม่า</td>
    <td>1 จาน</td>
    <td>215</td>
  </tr>
  <tr>
    <td>เย็นตาโฟ</td>
    <td>1 ชาม</td>
    <td>290</td>
  </tr>
  <tr>
    <td>ราดหน้าบะหมี่กรอบ</td>
    <td>1 จาน</td>
    <td>515</td>
  </tr>
  <tr>
    <td>ลาบหมู</td>
    <td>1 จาน</td>
    <td>119</td>
  </tr>
  <tr>
    <td>ลูกชิ้นทอด</td>
    <td>1 ลูก</td>
    <td>35</td>
  </tr>
  <tr>
    <td>ไวตามิลค์</td>
    <td>1 ขวด</td>
    <td>150</td>
  </tr>
  <tr>
    <td>สเต็กไก่ทอด + มันบด</td>
    <td>1 จาน</td>
    <td>615</td>
  </tr>
  <tr>
    <td>สเต็กปลาย่าง</td>
    <td>1 จาน</td>
    <td>260</td>
  </tr>
  <tr>
    <td>สเต็กหมู + ผักสลัด</td>
    <td>1 จาน</td>
    <td>505</td>
  </tr>
  <tr>
    <td>สปาเกตตี้กะเพรากุ้ง</td>
    <td>1 จาน</td>
    <td>485</td>
  </tr>
  <tr>
    <td>ส้มตำไทย ไม่ใส่ถั่ว</td>
    <td>1 จาน</td>
    <td>55</td>
  </tr>
  <tr>
    <td>สลัดกุ้ง</td>
    <td>1 จาน</td>
    <td>92</td>
  </tr>
  <tr>
    <td>สลัดปลาทูน่า</td>
    <td>1 จาน</td>
    <td>12</td>
  </tr>  
  <tr>
    <td>สาคูไส้หมู</td>
    <td>1 ลูก</td>
    <td>51</td>
  </tr>
  <tr>
    <td>สุกี้น้ำไก่</td>
    <td>1 ชาม</td>
    <td>345</td>
  </tr>
  <tr>
    <td>สุกี้แห้งทะเล</td>
    <td>1 ชาม</td>
    <td>280</td>
  </tr>
  <tr>
    <td>เส้นใหญ่ผัดซีอิ๊วใส่ไข่</td>
    <td>1 จาน</td>
    <td>520</td>
  </tr>
  <tr>
    <td>ไส้กรอกอีสาน</td>
    <td>1 ลูก</td>
    <td>90</td>
  </tr> 
  <tr>
    <td>ไส้อั่ว</td>
    <td>1 คำ</td>
    <td>60</td>
  </tr>
  <tr>
    <td>หมี่ซั่วผัด</td>
    <td>1 จาน</td>
    <td>395</td>
  </tr> 
  <tr>
    <td>หมูกรอบ</td>
    <td>1 จาน</td>
    <td>560</td>
  </tr>
  <tr>
    <td>หมูกะทะ</td>
    <td>1 ชุด</td>
    <td>375</td>
  </tr>
  <tr>
    <td>หมูปิ้ง</td>
    <td>1 ไม้</td>
    <td>125</td>
  </tr>
  <tr>
    <td>หมูผัดขิง</td>
    <td>1 จาน</td>
    <td>275</td>
  </tr>
  <tr>
    <td>หมูย่างเกาหลี</td>
    <td>1 ชุด</td>
    <td>375</td>
  </tr>
  <tr>
    <td>หมูสะเต๊ะ</td>
    <td>1 ไม้</td>
    <td>115</td>
  </tr>
  <tr>
    <td>หมูหยอง</td>
    <td>1 ช้อนโต๊ะ</td>
    <td>38</td>
  </tr>
  <tr>
    <td>หลนปูเค็ม</td>
    <td>1 ถ้วย</td>
    <td>205</td>
  </tr>
  <tr>
    <td>แหนมสด</td>
    <td>1 จาน</td>
    <td>175</td>
  </tr>
  <tr>
    <td>อกไก่ย่าง</td>
    <td>1 ชิ้น</td>
    <td>110</td>
  </tr>
  <tr>
    <td>ฮะเก๋า</td>
    <td>1 ลูกเล็ก</td>
    <td>115</td>
  </tr>
  <tr>
    <td>ลูกชิ้นปิ้ง</td>
    <td>1 ไม้</td>
    <td>165</td>
  </tr>
  <tr>
    <td>เกี๊ยวกรอบ</td>
    <td>1 ชิ้น</td>
    <td>78</td>
  </tr>
  <tr>
    <td>แฮมเบอร์เกอร์ไก่ชีส</td>
    <td>1 ชิ้น</td>
    <td>280</td>
  </tr>
  <tr>
    <td>แฮมเบอร์เกอร์หมู</td>
    <td>1 ชิ้น</td>
    <td>245</td>
  </tr>
</table>

<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
</body>
</html>