<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/craatacc.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Creat Account</title>
    <link rel="Icon" href="css/Untitled-3.svg">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 montserrat-500">

    <section class="container d-flex justify-content-center justify-content-md-between h-60 w-vh-50 radius ">
    <form action="" method="post">
        <!-- Logo -->
        <div class="w-50 d-none d-md-flex  justify-content-center">
            <img class="logo w-60" src="Untitled-3.svg" alt="">
        </div> 

        <!-- Inputs -->
        <div class="w-75 w-md-50 d-flex flex-column justify-content-center align-items-center">

            <!-- Creat Text -->
            <div class="text-danger top-text m-0 p-0">
                <span class="text-white ">Creat an <span class="text-account">account</span></span>
            </div>

            <!-- Button for phone or email -->
            <div class="mt-2 d-flex">
                <button class="my-btn phone-btn active " onclick="toggleBtn(this)">Phone</button>
                <button class="my-btn email-btn " onclick="toggleBtn(this)">Email</button>
            </div>

            <!-- Inputs -->
            <div class="inputs-div">

                <!-- Name input -->
                <div class="inputArea mb-2-5 mt-3 fld">
                    <input required placeholder=" " type="text" name="name-input" autocomplete="off">
                    <label for="name-input">Username</label>
                </div>

                <!-- Email input -->
                <div class="inputArea mb-2-5  fld d-none" id="email-input">
                    <input required placeholder=" " type="text" name="email-input" autocomplete="off">
                    <label for="email-input">Email</label>
                </div>

                <!-- phone input -->
                <div class="inputArea mb-2-5  fld" id="phone-input">
                    <input required placeholder=" " type="number" name="phone-input" autocomplete="off">
                    <label for="phone-input">Phone number</label>
                </div>

                <!-- Password input -->
                <div class="inputArea mb-2-5 fld">

                    <div class="pass-bg pass-bg-min">
                    </div>
                
                    <input class="montserrat-500" required placeholder=" " type="password" name="password-input" autocomplete="off" id="YourPassword">
                    <label class="pass-label" for="password-input">password</label>
                    <span class="eye-icon" onclick="togglePassword()"><i class="fas fa-eye"></i></span>
                </div>

                <!-- Repeatpassword input -->
                <div class="inputArea mb-2-5  fld" id="repeat-input">
                    <input onkeyup="repeatComparator()" required placeholder=" " type="password" name="repeat-input" autocomplete="off" id="repeat-password">
                    <label for="repeat-input">Repeat password</label>
                    <div class="position-absolute montserrat-500 error-div d-none"><span class="error-repeat">The Repeat is not match</span></div>
                </div>

            </div>

            <!-- Captcha -->
            <div class="d-flex align-items-center mt-3 justify-content-md-between w-75 mb-2">

                <!-- Password input -->
                <div class="inputArea ms-3  w-50 fld" id="phone-input">
                    <input required placeholder=" " type="text" name="captcha-input" autocomplete="off">
                    <label for="captcha-input">Captcha</label>
                </div>

                <!-- Image -->
                <div class="my-w me-3  d-flex justify-content-center align-items-center">
                    <button class="ref-btn" type="submit" name="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/>
                            <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/>
                        </svg>
                    </button>
                    </form>
                    <img class="w-100" src="css/Untitled-3.svg" alt="">
                </div>

            </div>

            <!-- Creat Button -->
            <div class="d-flex mt-3 justify-content-center ">
                <a href="https://discord.gg/2n3t5GUcyn" class="btb  text-decoration-none w-100" target="_blank" ><button class="my-btu py-2 px-4 text-center justify-center">LOGIN</button></a>
            </div>



        </div>

    </section>


    <script src="css/app.js"></script>
</body>
</html>