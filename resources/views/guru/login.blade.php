<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ea79650093.js" crossorigin="anonymous"></script>

    <link href="../img/logoKecil.png" rel="icon">
    <title>Halaman Login Guru</title>
    <script src="https://www.gstatic.com/firebasejs/7.20.0/firebase.js"></script>
</head>
<body id="grad1">
  <link rel="stylesheet" href="css/stylelogingur.css" />
  <title>Login guru</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="#" class="sign-in-form">
          <h2 class="title">Login Guru</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username"id="usernameGuru"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" id="passwordGuru"/>
            </div>
                <button onclick="login()"  class="btn-solid"> LOGIN</button>
                <br>
                <a href='/'>Halaman siswa</a>
            </div>
        </div>
        
        <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h1> KESEBANGUNAN </h1><br>
            <h2>MATEMATIKA SMP KELAS VII</h2>
          </div>
          <img src="img/gambar1.png" style="width: 100%;" class="image" alt="" />
        </div>
      </div>
    </div>
    

    <script src="js/loginguru.js"></script>
    <script src="jquery.js"></script>
</body>
</html>