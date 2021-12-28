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
    <div class="container font-sans font-semibold max-w-full">
    <header class="header-info flex h-14 py-3 px-6 bg-blue-400">
            <div class="header-contact text-white">
                <i class="">
                    <ion-icon class="call w-5 h-5" name="call"/></ion-icon> Liên hệ : 0358405987  &nbsp;
                    <ion-icon class="mail w-5 h-5" name="mail"></ion-icon> Email : sonhoang.070400@gmail.com
                </i>
            </div>
            <div class="header-login absolute right-10">
                <div class="text-white">
                    Bạn chưa đăng nhập 
                    <a class="hover:text-gray-600" href="./login.php">Đăng nhập</a>
                </div>
            </div>
        </header>
        <nav class="nav-pc relative flex row py-3 px-3 border-2">
            <div class="nav-logo">
                <a href="#">
                    <img src="./assets/images/page-free.png" alt="" width="50px" height="50px">
                </a>
            </div>
            <div class="nav-search relative pl-3 my-auto">
                <label for="search">
                    <span class="absolute right-3 top-3"><ion-icon id="icon1" name="search"></ion-icon></span>
                    <input type="text" class="border-2 w-56 h-11 px-1 py-1 rounded-3xl" name="search" id="search" placeholder="Tìm kiếm...">
                </label> 
            </div>
            <ul class="nav-list-pc text-xl text-gray-800 flex md:absolute md:right-0 md:top-6 px-5 ">
                <li class="nav-link-pc px-5 hover:text-gray-500">
                    <a href="#">Trang chủ</a>
                </li>
                <li class="nav-link-pc px-5 hover:text-gray-500">
                    <a href="#">Môn học</a>
                </li>
                <li class="nav-link-pc px-5 hover:text-gray-500">
                    <a href="#">Trang cá nhân</a>
                </li>
                <li class="nav-link-pc px-5 hover:text-gray-500">
                    <a href="#">Hướng dẫn</a>
                </li>
                <li class="nav-link-pc px-5 hover:text-gray-500">
                    <a href="#">Vietnamese</a>
                </li>
            </ul>
            <label for="nav-mobile-input" class="nav__bars_btn cursor-pointer">                   
                <ion-icon id="hide" class="lg:hidden absolute right-5 pt-2 w-10 h-10  hover:text-gray-400" name="reorder-four-sharp"></ion-icon>
            </label>
        </nav>
        <!-- Nav Mobile -->
        <div>
            <script>
                $("#hide").click(function(){
                    $('.nav-list-mobile').toggle(400);
                });
            </script>
            <ul class="z-50 nav-list-mobile bg-blue-300 text-xl text-gray-800 float-right text-right px-5">
                <li class="nav-link-mobile px-5 py-2 hover:text-gray-500">
                    <a href="#">Trang chủ</a>
                </li>
                <li class="nav-link-mobile px-5 py-2 hover:text-gray-500">
                    <a href="#">Môn học</a>
                </li>
                <li class="nav-link-mobile px-5 py-2 hover:text-gray-500">
                    <a href="#">Trang cá nhân</a>
                </li>
                <li class="nav-link-mobile px-5 py-2 hover:text-gray-500">
                    <a href="#">Hướng dẫn</a>
                </li>
                <li class="nav-link-mobile px-5 py-2 hover:text-gray-500">
                    <a href="#">Vietnamese</a>
                </li>
            </ul> 
        </div> 
        <main class="lg:flex md:gap-x-3 mx-auto">
            <div class="p-5 md:w-3/5 block mx-auto">
                <div class="px-5 py-8 mb-8 rounded-lg border border-[#eee] text-center bg-white dark:bg-[#0F0D58]">
                  <h3 class="text-lg font-semibold mb-6 text-[#0F0D58] dark:text-white">Quy định</h3>
                  <div class="text-sm leading-loose text-[#9191B4] font-normal dark:text-white">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, odio,
                    facilis vero quod natus molestiae autem provident nam corporis sint
                    accusamus excepturi at in, temporibus architecto ad voluptatibus
                    maxime. Tenetur!
                  </div>
                </div>
                <div class="px-5 py-8 mb-8 rounded-lg border border-[#eee] text-center bg-white dark:bg-[#0F0D58]">
                    <h3 class="text-lg font-semibold mb-6 text-[#0F0D58] dark:text-white">Bảng tin </h3>
                    <div class="text-sm leading-loose text-[#9191B4] font-normal dark:text-white">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, odio,
                      facilis vero quod natus molestiae autem provident nam corporis sint
                      accusamus excepturi at in, temporibus architecto ad voluptatibus
                      maxime. Tenetur!
                    </div>
                  </div>
                  <div class="px-5 py-8 mb-8 rounded-lg border border-[#eee] text-center bg-white dark:bg-[#0F0D58]">
                    <h3 class="text-lg font-semibold mb-6 text-[#0F0D58] dark:text-white">Bảng tin </h3>
                    <div class="text-sm leading-loose text-[#9191B4] font-normal dark:text-white">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, odio,
                      facilis vero quod natus molestiae autem provident nam corporis sint
                      accusamus excepturi at in, temporibus architecto ad voluptatibus
                      maxime. Tenetur!
                    </div>
                  </div>
              </div>
              <div class="p-5 md:w-2/5 block mx-auto">
                <div class="px-5 py-8 mb-8 rounded-lg border border-[#eee] text-center bg-white dark:bg-[#0F0D58]">
                  <h3 class="text-lg font-semibold mb-6 text-[#0F0D58] dark:text-white">Thông báo</h3>
                  <div class="text-sm leading-loose text-[#9191B4] font-normal dark:text-white">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, odio,
                    facilis vero quod natus molestiae autem provident nam corporis sint
                    accusamus excepturi at in, temporibus architecto ad voluptatibus
                    maxime. Tenetur!
                  </div>
                </div>
                <div class="px-5 py-8 mb-8 rounded-lg border border-[#eee] text-center bg-white dark:bg-[#0F0D58]">
                    <h3 class="text-lg font-semibold mb-6 text-[#0F0D58] dark:text-white">Thông báo</h3>
                    <div class="text-sm leading-loose text-[#9191B4] font-normal dark:text-white">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, odio,
                      facilis vero quod natus molestiae autem provident nam corporis sint
                      accusamus excepturi at in, temporibus architecto ad voluptatibus
                      maxime. Tenetur!
                    </div>
                  </div>
                  <div class="px-5 py-8 mb-8 rounded-lg border border-[#eee] text-center bg-white dark:bg-[#0F0D58]">
                    <h3 class="text-lg font-semibold mb-6 text-[#0F0D58] dark:text-white">Thông báo</h3>
                    <div class="text-sm leading-loose text-[#9191B4] font-normal dark:text-white">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, odio,
                      facilis vero quod natus molestiae autem provident nam corporis sint
                      accusamus excepturi at in, temporibus architecto ad voluptatibus
                      maxime. Tenetur!
                    </div>
                  </div>
              </div>
        </main>
        <?php include './footer.php' ?>
    </div>
</body>
</html>