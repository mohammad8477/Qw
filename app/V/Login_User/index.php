<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="Icon" href="Untitled-3.svg">
  <link rel="stylesheet" href="output.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
</head>
<body class="montserrat-300">
  <form action="" method="post">
<!-- partial:index.partial.html -->
<div class="container ">
  <!-- Text -->
  <div class="logo-div w-full flex justify-center mb-5">
    <span class="text-white montserrat-600 ">Login</span>
  </div>

  <!-- Email input -->
  <div class="inputArea mb-4 fld montserrat-600">
    <input class="email-label" required valid  placeholder=" " type="text" name="email-input" autocomplete="off">
    <label for="email-input">email or phone number</label>
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
  <!-- <div class="strengthMeter montserrat-700 "></div> -->

  <!-- Captcha -->
  <div class="flex mt-3 justify-between  mb-3">

</div>

  <!-- Login btn -->
  <div class="justify-center flex mb-5">
 <button class="btb btu py-2 px-4 text-center justify-center" name="submit">LOGIN</button>
  </div>

  <!-- Forgot && creat account text -->
  <div class="bottom-text montserrat-700">
    <div>
      <a class="forgot-link transition-08" href="update">Forgot yor password?</a>
    </div>

    <div>
      <a class="creat-link transition-08" href="sigup">Don't have an accounr?</a>
    </div>
  </div>


</div>
</form>
<!-- partial -->
  <script  src="css/script.js"></script>

</body>
</html>
