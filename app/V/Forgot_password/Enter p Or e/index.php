<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="icon" href="../../Login User/Untitled-3.svg">
    <!-- Tailwind -->
    <link rel="stylesheet" href="../../../../src/output.css">
    <link rel="stylesheet" href="style.css">
    <title>Forgot password</title>
</head>
<body class="bg-[#222] h-screen flex items-center justify-center">
<form action="" method="post">
    <section class="bg-[#333]  mx-auto w-96 h-80 rounded-xl absolute">
        <!-- Text -->
        <div class="w-full text-center text-white montserrat-600 text-2xl mt-5">
            <h2>Forgot password</h2>
        </div>

        <!-- Input -->
        <div class=" mt-9 w-full flex justify-center absolute montserrat-400">
            <input required class=" absolute bg-[#222] px-4 py-3 focus:outline-none focus:border-0 text-white  rounded-md my-input transition" name="forgot-input" type="text" >
            <label class="relative text-[#ffffff33] cursor-text transition  pointer-events-none px-6 py-3 m-0 left-999" for="forgot-input" id="laleb-input"> Email or Phone </label>
        </div>

        <!-- Captcha -->
        <div class="absolute flex bg-[#333] w-full justify-between mt-28">
            <!-- input -->
            <div class=" w-1/2 ms-3 h-auto  montserrat-400">
                <div class="flex">
                    <input required class="absolute w-1/2 outline-0 border-0 px-4 py-3 rounded-md my-input bg-[#222] text-white transition" name="captcha-input" type="text" id="input-captcha">
                    <label class="relative text-[#ffffff33] px-4 py-3 transition rounded-md pointer-events-none" for="captcha-input" id="label-captcha">Captcha</label>
                </div>
            </div>

            <!-- Img -->
            <div class=" w-1/2 flex justify-center">
                <button class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-arrow-clockwise" name="submit" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/>
                        <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/>
                    </svg>
                </button>
                <img class="w-8/12" src="../../Login User/G_DATA_Blog_CaptchaDissolve_Preview_52a6e13490_11zon.webp" alt="Captcha">
            </div>
        </div>

        <!-- Btn -->
        <div class="bg-transparent w-full mt-48 h-11 relative flex justify-center items-center" >

            <a class="bg-[#222] text-white px-7 py-3 rounded-md montserrat-400 hover:bg-white  hover:text-blue-800" href="" id="my-btn">
                <button >
                    Send code!
                </button>
            </a>

        </div>

    </section>
    </form>

</body>
</html>