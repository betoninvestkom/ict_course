<!DOCTYPE html>
<html>
<head>
	<title>Форма регистрации</title>
</head>
<body>
<?php 
  require('connection.php');

  if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];


    $query = "INSERT INTO users (username, email, gender, password) VALUES ('$username', '$email', '$gender', '$password')";
    $result = mysqli_query($connection, $query);

  }
  ?>
  <div>
    <form method="POST">
      <h2>Форма регистрации</h2>
      
      <input type="text" name="username" placeholder="имя пользователя" required> <br>
      <input type="email" name="email" placeholder="почта" required> <br>
      <input type="text" name="gender" placeholder="пол"> <br>
      <input type="password" name="password" placeholder="пароль" required> <br><br>
      <button type="submit">Регистрация</button><br>
    </form>
  </div>
  <br>
</body>
</html>