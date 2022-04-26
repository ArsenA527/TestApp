<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Обратная связь</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script defer src="./js/script.js"></script>

</head>

<body>
  <div class="container">
    <form id="form" class="form">
      <small id="errorMsg" class="error hide">Вы ранее были зарегистрированы!</small>
      <div class="form-control">
        <label>Имя пользователя</label>
        <input type="text" name="name" placeholder="Имя" id="name"></input>
        <small>Сообщение об ошибке</small>
      </div>

      <div class="form-control">
        <label>Фамилия пользователя</label>
        <input type="text" name="surname" placeholder="Фамилия" id="surname"></input>
        <small>Сообщение об ошибке</small>
      </div>

      <div class="form-control">
        <label>Эл. адрес</label>
        <input type="email" name="email" placeholder="Ivanov@gmail.com" id="email"></input>
        <small>Сообщение об ошибке</small>
      </div>

      <div class="form-control">
        <label>Пароль</label>
        <input type="password" name="password1" placeholder="Password" id="password"></input>
        <small>Сообщение об ошибке</small>
      </div>

      <div class="form-control">
        <label>Проверка пароля</label>
        <input type="password" name="password2" placeholder="Password" id="password2"></input>
        <small>Сообщение об ошибке</small>
      </div>

      <button id="btn" class="btn btn-primary">Отправить</button>
    </form>

    <div id="result"></div>
  </div>


  <script src="./js/ajax.js"></script>
</body>

</html>
