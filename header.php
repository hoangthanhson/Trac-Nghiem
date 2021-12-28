<header class="header-info flex h-14 py-3 px-6 bg-blue-400">
            <div class="header-contact text-white">
                <i class="">
                    <ion-icon class="call w-5 h-5" name="call"/></ion-icon> Liên hệ : 0358405987  &nbsp;
                    <ion-icon class="mail w-5 h-5" name="mail"></ion-icon> Email : sonhoang.070400@gmail.com
                </i>
            </div>
            
        </header>
        <nav class="nav-pc relative flex row py-3 px-3 border-2">
            <div class="nav-logo">
                <a href="./home.php">
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
                    <a href="./home.php">Trang chủ</a>
                </li>
                <li class="nav-link-pc px-5 hover:text-gray-500">
                    <a href="./subject.php">Môn học</a>
                </li>
                <li class="nav-link-pc px-5 hover:text-gray-500">
                    <a href="./personal.php">Trang cá nhân</a>
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
                    <a href="./home.php">Trang chủ</a>
                </li>
                <li class="nav-link-mobile px-5 py-2 hover:text-gray-500">
                    <a href="./subject.php">Môn học</a>
                </li>
                <li class="nav-link-mobile px-5 py-2 hover:text-gray-500">
                    <a href="./personal.php">Trang cá nhân</a>
                </li>
                <li class="nav-link-mobile px-5 py-2 hover:text-gray-500">
                    <a href="#">Hướng dẫn</a>
                </li>
                <li class="nav-link-mobile px-5 py-2 hover:text-gray-500">
                    <a href="#">Vietnamese</a>
                </li>
            </ul> 
        </div> 
        <div class="absolute right-10 top-3 header-login">
            <button onclick="myFunction()" class="dropbtn flex">
                <p class="mt-1 pr-2 font-bold">Hoàng Thanh Sơn</p>
                <div class=" block h-8 w-8 rounded-full overflow-hidden border-2 border-gray-600 forcus:outline-none forcus:border-white"> 
                    <img  class="w-full h-full object-cover" src="./assets/images/avatar.png" alt="">
                </div>
            </button>
            <div id="myDropdown" class="absolute dropdown-content hidden mt-2 w-48 z-100 bg-white rounded-lg shadow-xl py-2">
                <a href="./personal.php" class="block px-4 py-2 text-gray-800 hover:text-white">
                    <div class=" block h-40 w-40 rounded-full overflow-hidden border-2 border-gray-600 forcus:outline-none forcus:border-white"> 
                        <img  class="w-full h-full object-cover" src="./assets/images/avatar.png" alt="">
                    </div>
                    <br><hr>
                </a>
                <a href="./personal.php" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Cài đặt</a><hr>
                <a href="./login.php" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Đăng xuất</a><hr>
            </div>
        </div> 