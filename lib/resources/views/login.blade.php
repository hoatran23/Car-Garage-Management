<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <base href="{{asset('public/layout/')}}/">
  <title>Quản lý Garage | Đăng nhập</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <div class="main_login">
    <div class="login">
        <h1 class="title">Đăng nhập</h1>
        @include('errors.note')
        <form method="post">
            <div class="txt_field">
                <input type="text" id="email" name="email" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="password" id="password" name="password" required>
                <span></span>
                <label>Mật khẩu</label>
            </div>
            <div class="form-options-wrapper">
              <div class="custom-control custom-checkbox login-card-check-box">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember Me</label>
              </div>              
            </div>
            <div class="btn-sm">
                <div class="inner"></div>
                <input name="submit" id="login" type="submit" value="Đăng nhập">
            </div>
            <div class="more-info">
                  Trang web Quản lý Garage Ô tô
            </div>
             {{csrf_field()}}
        </form>
    </div>
</div>

</body>
</html>