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

    <!-- captcha input -->
    <div class="inputArea ms-3   fld" id="captcha-input">
        <input required placeholder=" " type="text" name="captcha-input" autocomplete="off">
        <label for="captcha-input">Captcha</label>
    </div>

    <!-- Image -->
    <div class="my-w flex mr-6 ">
        <button class="ref-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/>
                <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/>
            </svg>
        </button>
        <img class="w-100 rounded-md" src="G_DATA_Blog_CaptchaDissolve_Preview_52a6e13490_11zon.webp" alt="">
    </div>

</div>

  <!-- Login btn -->
  <div class="justify-center flex mb-5">
    <a href="https://discord.gg/2n3t5GUcyn" class="btb" target="_blank" ><button class="btu py-2 px-4 text-center justify-center" name="submit">LOGIN</button></a>
  </div>

  <!-- Forgot && creat account text -->
  <div class="bottom-text montserrat-700">
    <div>
      <a class="forgot-link transition-08" href="../Forgot password/Enter p Or e/index.html">Forgot yor password?</a>
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
