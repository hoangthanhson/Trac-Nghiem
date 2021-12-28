<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style/app.css">
    <script src="./assets/javascript/main.js"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./assets/build/tailwind.css">
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-blue-400">
        <div class="bg-white max-w-lg mx-auto p-8 md:p-12 lg:w-1/2 my-10 rounded shadow-2xl">    
          <h2 class="text-3xl font-bold mb-10 text-gray-800">Tạo tài khoản</h2>     
          <form class="space-y-5">     
            <div>
              <label class="block mb-1 font-bold text-gray-500">Họ tên của bạn</label>
              <input type="text" placeholder="Họ và tên" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
            </div>   
            <div>
              <label class="block mb-1 font-bold text-gray-500">Email</label>
              <input type="email" placeholder="email@gmail.com" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
            </div>     
            <div>
              <label class="block mb-1 font-bold text-gray-500">Mật khẩu</label>
              <input type="password" placeholder="Mật khẩu" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
            </div>        
            <input type="submit" value="Đăng ký" class="font-bold block w-full bg-purple-600 hover:bg-purple-700 p-4 rounded text-white transition duration-300">
            <div class="max-w-lg mx-auto text-center mt-12 mb-6">
                <p class="text-gray-700 ">Quay lại trang <a href="./login.php" class="font-bold text-gray-600 hover:underline">Đăng nhập</a>.</p>
            </div>     
          </form>     
        </div>
      </div>
</body>
</html>