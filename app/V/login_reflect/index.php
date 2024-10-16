<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - A Pen by Coding Stella</title>
  <link rel="stylesheet" href="../../../src/output.css">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
</head>
</head>
<body class="montserrat-300">
  <form action="" method="post">
<!-- partial:index.partial.html -->
<div class="container">

  <!-- Login Text -->
  <h2 class="text-center pb-4 montserrat-700" style="color: white;">LOGIN</h2>

  <!-- Email input -->
  <div class="inputArea mb-4 fld montserrat-600">
    <input class="montserrat-600 " required placeholder=" " type="email" name="email-input" autocomplete="off">
    <label for="email-input">email</label>
  </div>

  <!-- Password input -->
  <div class="inputArea mb-4 fld montserrat-600">

    <div class="pass-bg pass-bg-min">
    </div>

    <input class="montserrat-600" required placeholder=" " type="password" name="pass-input" autocomplete="off" id="YourPassword">
    <label class="pass-label" for="pass-input">password</label>
    <span class="eye-icon" onclick="togglePassword()"><i class="fas fa-eye"></i></span>
  </div>

  <!-- Rate pass -->
  <div class="strengthMeter montserrat-700 "></div>

  <!-- Login btn -->
  <div class="justify-center flex">
    <a href="https://discord.gg/2n3t5GUcyn" class="btb" target="_blank" ><button class="btu py-2 px-4 text-center justify-center" name="submit">LOGIN</button></a>
  </div>
  
</div>
</form>
<!-- partial -->
  <script  src="css/sccript.js"></script>

</body>
</html>