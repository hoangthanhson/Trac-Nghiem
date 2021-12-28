<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style/app.css">
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="./assets/javascript/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./assets/build/tailwind.css">
</head>
<body>
    <div class="container relative font-sans font-semibold max-w-full">
        <?php include './header.php' ?>
        <main>
            <section class="mx-4 px-4 py-4 my-4 border-2 border-[#eee]">
                <div class="py-4">
                    <p>Danh sách các môn học</p>
                    <hr>
                </div>
                <div class="lg:grid grid-cols-4 w-full gap-5">
                    <div class="border border-[#eee] rounded-xl pb-4 mb-8 shadow-lg">
                        <div class="card-top bg-gradient-to-r from-green-500 to-purple-500 rounded-xl h-36 w-full cursor-pointer"></div>
                        <div class="card-body px-2 pt-2 hover:underline hover:text-gray-500">
                            <a href="#">Tin Học Cơ Sở - GV. Bùi Thị Hồng Minh</a>
                        </div>
                    </div>
                    <div class="border border-[#eee] rounded-xl pb-4 mb-8 shadow-lg">
                        <div class="card-top bg-gradient-to-r from-yellow-600 to-red-500 rounded-xl h-36 w-full cursor-pointer"></div>
                        <div class="card-body px-2 pt-2 hover:underline hover:text-gray-500">
                            <a href="#">Nhập Môn Lập Trình - GV. Nguyễn Đình Cường</a>
                        </div>
                    </div>
                    <div class="border border-[#eee] rounded-xl pb-4 mb-8 shadow-lg">
                        <div class="card-top bg-gradient-to-r from-gray-500 to-indigo-500 rounded-xl h-36 w-full cursor-pointer"></div>
                        <div class="card-body px-2 pt-2 hover:underline hover:text-gray-500">
                            <a href="#">Kiểm Thử Phần Mềm - GV. Bùi Thị Hồng Minh </a>
                        </div>
                    </div>
                    <div class="border border-[#eee] rounded-xl pb-4 mb-8 shadow-lg">
                        <div class="card-top bg-gradient-to-r from-green-600 to-blue-500 rounded-xl h-36 w-full cursor-pointer"></div>
                        <div class="card-body px-2 pt-2 hover:underline hover:text-gray-500">
                            <a href="#">Quản Trị Mạng - GV. Mai Cường Thọ</a>
                        </div>
                    </div>
                    <div class="border border-[#eee] rounded-xl pb-4 mb-8 shadow-lg">
                        <div class="card-top bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl h-36 w-full cursor-pointer"></div>
                        <div class="card-body px-2 pt-2 hover:underline hover:text-gray-500">
                            <a href="#">Công Nghệ Phần Mềm - GV. Nguyễn Thủy Đoan Trang</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include './footer.php' ?>
    </div>
    
</body>
<script>
</script>
</html>