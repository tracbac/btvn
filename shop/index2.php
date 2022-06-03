<?php
$con = mysqli_connect('localhost' ,'root','','shop') or die(' ko the ket noi database');
$querry = mysqli_query($con,"select * from `goods1`") or die ('ko the try van database');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <script
      src="https://kit.fontawesome.com/33e495fb35.js"
      crossorigin="anonymous"
    ></script>
    
  </head>
  <body>
    <div id="box" class="box">
      <div class="Name"><a href="#">Sports Shop</a></div>

      <div class="" id="timKiem">
        <form action="./timkiem.php" method="post">
          <button id="btn_sre"> <i class="fas fa-search"></i></button>
          <input type="search" name="timkiem" id="search_txt" />
        </form>
      </div>

      <div class="Gio">
        <button id="btn1">
          <img src="https://cdn-icons-png.flaticon.com/512/3081/3081840.png" />
          <span class="TongTienOGio">0</span><sup>đ</sup>
        </button>
      </div>
      <div class="account">
        <button id="btn3">
          <img
            src="https://httl.com.vn/en/wp-content/uploads/2021/08/imager_2_12693_700.jpg"
          />
        </button>
      </div>
    </div>
    <div class="menuDacap">
      <ul class="root">
      <li><a href="">
        Sports</a>
        <ul class="menuCon">
          <li> <a href="./index.php">
            football
          </a>
            </li>
              <li> <a href="./index2.php">basketball</a></li>
<script>const menu = document.querySelector(".menuDacap");
window.addEventListener("scroll", () =>  {
  if(window.pageYOffset >150){
    menu.classList.add("active")
  }else{
    menu.classList.remove("active")
  }
})</script>
      </ul>
      </li>
    </ul>
        
    </div>
    <!-- <div id="thongBao" class="thongBao">
      <p>Sản phẩm đã có trong giỏ</p>
    </div> -->
    <div id="SanPham" class="SanPham">
      <?php
while ($row= mysqli_fetch_array($querry,MYSQLI_ASSOC)) {
    

 ?>
 
      <div class="con">
        <img src="<?php  echo $row['hinh'] ?>" alt="" />
        <h1 id="ten"><?php  echo $row['ten'] ?></h1>
        <br />
        <h1 id="gia"><?php  echo $row['gia'] ?></h1>
        <br />
        <button id="buyNow" class="buy">Buy Now</button>
        <button id="addToCart" class="add" href="">Add to Cart</button>
      </div>
      
      <?php } ?>
    </div>

    <div id="cart" class="cart">
      <button id="btn2">X</button>
      <section>
        <form action="">
          <table>
            <thead>
              <tr>
                <th>Sản Phẩm</th>
                <th>Giá</th>
                <th>Sl</th>
                <th>Chọn</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
          <div class="price-total">
            <p >
              Tổng:  <span>0</span><sup>đ</sup>
            </p>
          </div>
          <button id="thanhToan">Thanh toán</button>
        </form>
      </section>

      <script>
        document.getElementById("btn1").onclick = function () {
          document.getElementById("cart").style.display = "block";
        };
        document.getElementById("btn2").onclick = function () {
          document.getElementById("cart").style.display = "none";
        };
      </script>
    </div>
    <div class="listMenu">
      <div class="buttonRow">
        <!-- <button class="NutChuyenTrang" id="btn5"><</button> -->
        <button class="NutChuyenTrang" id="btn6">1</button>
        <button class="NutChuyenTrang" id="btn7">2</button>
        <button class="NutChuyenTrang" id="btn8">3</button>
        <button class="NutChuyenTrang" id="btn9">4</button>

        <!-- <button class="NutChuyenTrang" id="btn17">></button> -->
      </div>
    </div>
    <a href="#" class="to-top">
      
      <i class="fas fa-chevron-up"></i>
    </a>
    <div class="n">
      <br />
      <p>Copyright @ 2022</p>
      <br />
      <p>Nguyen Trac Bac</p>
      <br />
      <p>Mọi thông tin liên hệ: tracbac77@gmail.com</p>
    </div>
    <script src="./js/add.js"></script>
  </body>
</html>
