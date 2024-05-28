<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SignIn&SignUp</title>
  <link rel="stylesheet" href="<?php echo _FOLDER_ROOT_; ?>web/public/assets/clients/css/login.css" />

  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

</head>

<body>


  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="<?php echo (_FOLDER_ROOT_ . 'web/tai-khoan/dang-ky/') ?>" class="sign-in-form" method="post">
          <h2 class="title">Đăng Ký</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="user" minlength="8" maxlength="20" required placeholder="Nhập Tên Tài Khoản" oninvalid="this.setCustomValidity('Vui Lòng Nhập Tên Tài Khoản!')" oninput="this.setCustomValidity('')" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" pattern="[^ @]*@[^ @]*" name="email" required placeholder="Nhập Email" oninvalid="this.setCustomValidity('Vui Lòng Nhập Email Của Bạn!')" oninput="this.setCustomValidity('')" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" minlength="8" maxlength="20" required placeholder="Nhập Mật Khẩu" oninvalid="this.setCustomValidity('Vui Lòng Nhập Mật Khẩu Của Bạn!')" oninput="this.setCustomValidity('')" />

          </div>
          <input type="submit" value="Đăng Ký" class="btn solid" />
        </form>

      </div>
    </div>
    <div class="panels-container">

      <div class="panel left-panel">
        <div class="content">
          <h2>Hello!</h2>
          <p>Chào Mừng Bạn Đến Với Thế Giới Mô Hình D002.</p>
          <button class="btn transparent" id="sign-up-btn">Đăng Nhập</button>
        </div>
        <img src="./img/log.svg" class="image" alt="">
      </div>

      <div class="panel right-panel">
        <div class="content">
          <h3>One of us?</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio minus natus est.</p>
          <button class="btn transparent" id="sign-in-btn">Sign In</button>
        </div>
        <img src="./img/register.svg" class="image" alt="">
      </div>
    </div>
  </div>

  <script src="<?php echo _FOLDER_ROOT_; ?>/public/assets/clients/login.js"></script>

</body>

</html>