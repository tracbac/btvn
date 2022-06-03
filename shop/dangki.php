<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/dangnhap.css" />
    <script src="https://kit.fontawesome.com/22fc02102c.js" crossorigin="anonymous"></script>
</head>
<body>

   
    <script>
        function getvalue(id) {
    return document.getElementById(id).valua.trim()
    
}function showError(key, mess) {
    document.getElementById(key + '_error').innerHTML = mess;
    
}function validate() {
    var flag = true ;
   
 var username = getvalue('username');
 if (username===''||username.length < 5 ||!/^[a-zA-Z0-9] +$/.test(username)) {
    flag= flag;
    showError('username','vui long kiem tra lai')
   
    }
    var password = getvalue('password');
 if (password===''||password.length > 8 ) {
    flag= flag;
    showError('password','vui long kiem tra lai')
    }
    var gmail = getvalue('gmail');
 if (gmail===''||!/^\w+@\w+\.com$/i.test(gmail)) {
    flag= flag;
    showError('gmail','vui long kiem tra lai')
    }
    var repeat_password = getvalue('repeat_password');
 if (repeat_password===''||repeat_password==='password'.test(repeat_password)) {
    flag= flag;
    showError('repeat_password','Phải giống với password đã nhập')
    }
    return flag;
}

    </script>
    <div class="frames">
        <form class="form-login" action="./reg.php" method="post" >
        <h1>Đăng kí tài khoản</h1>
        <div class="form-text" >
    
    <input  type="text" placeholder="username" id="username" name="username"></div><span id="username_error"></span>
    <div class="form-text" >
    
        <input required type="text" placeholder="gmail" id="gmail" name="gmail"></div><span id="gmail_error"></span>
        <div class="form-text" >
    
            <input required="Bắt Buộc" type="password" placeholder="password" id="password" name="password"></div><span id="password_error"></span>
            <div class="form-text" >
    
    <input  required type="password" placeholder="Repeat Password" id="repeat_password" name="repeatPassword" ></div><span id="repeat_password_error"></span>
    
<div class="d">
<button  action="./reg.php" name="btn-reg" onclick="return getvalue()"> Đăng kí </button></div>
<br>
<div class="up">
    <a href="./index.php">
    <i class="fas fa-arrow-left"></i></a>
    <span>Bạn đã có tài khoản?</span>
</div>
</form>
</div>
<div class="n">
    <br />
    <p>Copyright @ 2022</p>
    <br />
    <p>Nguyen Trac Bac</p>
    <br />
    <p>Mọi thông tin liên hệ: tracbac77@gmail.com</p>
  </div>
<script src="./js/index.js"></script>
</body>
</html> 
