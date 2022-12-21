<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>
  <body>
    <!-- login -->
    <div class="h-screen flex">
      <div class="flex w-1/2 bg-white justify-around items-center">
        <div>
          <img src="images/login/bglogin.png" alt="bglogin" />
        </div>
      </div>
      <div class="flex w-1/2 justify-center items-center bg-white">
        <form class="bg-white">
          <h1 class="text-gray-800 font-bold text-2xl mb-1">Selamat Datang </h1>
          <p class="text-sm font-normal text-gray-600 mb-7">Di Esteh Creative</p>
          <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
            </svg>
            <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Username" />
          </div>
          <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
            </svg>
            <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Password" />
          </div>
          <button type="submit" class="block w-full bg-hijau mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Login</button>
          <span class="text-sm ml-2 hover:text-hijau cursor-pointer">Forgot Password ?</span>
          <div class="mt-6 grid space-y-4">
            <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-hijau focus:bg-hijau active:bg-hijau">
              <div class="relative flex items-center space-x-4 justify-center">
                <img src="https://tailus.io/sources/blocks/social/preview/images/google.svg" class="absolute left-0 w-5" alt="google logo" />
                <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Continue with Google</span>
              </div>
            </button>
            <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-hijau focus:bg-hijau active:bg-hijau">
              <div class="relative flex items-center space-x-4 justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute left-0 w-5 text-gray-700" viewBox="0 0 16 16">
                  <path
                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"
                  />
                </svg>
                <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Continue with Github</span>
              </div>
            </button>
            <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-hijau focus:bg-hijau active:bg-hijau">
              <div class="relative flex items-center space-x-4 justify-center">
                <img src="https://upload.wikimedia.org/wikipedia/en/0/04/Facebook_f_logo_%282021%29.svg" class="absolute left-0 w-5" alt="Facebook logo" />
                <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Continue with Facebook</span>
              </div>
            </button>
          </div>
        </form>
      </div>
    </div>
    <!-- akhir login -->

    <!-- taildwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- akhir -->

    <!-- config -->
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: "#FAFAFB",
              soft: "#FEECED",
              hijau: "#0de49d",
              secondary: "#F2404D",
              primary2: "#792027",
              primary3: "#F0F1F2",
            },
            fontFamily: {
              inter: "Inter, sans-serif",
            },
          },
        },
      };
    </script>

    <!-- akhir config -->
  </body>
</html>
