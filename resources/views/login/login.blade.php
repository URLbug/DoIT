<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form | CodingLab</title> 
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title">
          <span>Войти в аккаунт</span>
        </div>
        <form action="{{ route('login') }}" method="POST">
          @csrf

          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Логин" name="login" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Пароль" name="password" required>
          </div>
          <div class="row button">
            <input type="submit" value="Войти">
          </div>

          @if($errors->any())
            <div class="errors">
              <span>{{$errors->first()}}</span>
            </div>
          @endif

          <div class="signup-link"> <a href="{{ route('regist') }}"> Нету аккаунт?</a></div>
        </form>
      </div>
    </div>

  </body>
</html>