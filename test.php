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
            <section class="lg:flex">
                <div class="col w-2/3">
                    <form action="" method="">
                        <div class="ml-32 py-5">
                            <p class="text-xl">Câu 01: Ai đang làm các chuẩn cho Web?</p>
                            <div>
                                A.  <input type="radio" id="goo" name="web" value="Google">
                                <label for="goo">Google</label><br>
                                B. <input type="radio" id="moz" name="web" value="Mozila">
                                <label for="moz">Mozila</label><br>
                                C. <input type="radio" id="mic" name="web" value="Microsoft">
                                <label for="mic">Microsoft</label><br>
                                D. <input type="radio" id="www" name="web" value="Tổ chức Word Wide Web">
                                <label for="www">Tổ chức Word Wide Web</label>
                            </div>
                        </div>
                        <div class="ml-32 py-5">
                            <p class="text-xl">Câu 02: Thẻ input type='Submit' dùng để làm gì?</p>
                            <div>
                                A.  <input type="radio" id="sett" name="input" value="Tạo một nút lệnh dùng để gửi tin trong form đi">
                                <label for="sett">Tạo một nút lệnh dùng để gửi tin trong form đi</label><br>
                                B. <input type="radio" id="all" name="input" value="Tất cả các ý kiến trên">
                                <label for="all">Tất cả các ý kiến trên</label><br>
                                C. <input type="radio" id="set" name="input" value="Tạo một ô text để nhập dữ liệu">
                                <label for="set">Tạo một ô text để nhập dữ liệu</label><br>
                                D. <input type="radio" id="del" name="input" value="Tạo một nút lệnh dùng để xóa thông tin trong form">
                                <label for="del">Tạo một nút lệnh dùng để xóa thông tin trong form</label>
                            </div>
                        </div>
                        <div class="ml-32 py-5">
                            <p class="text-xl">Câu 03: Javascript là ngôn ngữ thông dịch hay biên dịch?</p>
                            <div>
                                A.  <input type="radio" id="thong" name="js" value="Thông dịch">
                                <label for="thong">Thông dịch</label><br>
                                B. <input type="radio" id="bien" name="js" value="Biên dịch">
                                <label for="bien">Biên dịch</label><br>
                                C. <input type="radio" id="both" name="js" value="Cả hai dạng">
                                <label for="both">Cả hai dạng</label><br>
                                D. <input type="radio" id="no" name="js" value="Không có dạng nào ở trên">
                                <label for="no">Không có dạng nào ở trên</label>
                            </div>
                        </div>
                        <div class="ml-32 py-5">
                            <p class="text-xl">Câu 04: Hàm alert() dùng để làm gì?</p>
                            <div>
                                A.  <input type="radio" id="tb" name="alert" value="Dùng để hiện một thông báo">
                                <label for="tb">Dùng để hiện một thông báo</label><br>
                                B. <input type="radio" id="nhap" name="alert" value="Dùng để hiện một thông báo nhập">
                                <label for="nhap">Dùng để hiện một thông báo nhập</label><br>
                                C. <input type="radio" id="change" name="alert" value="Dùng để chuyển đổi sang chữ">
                                <label for="change">Dùng để chuyển đổi sang chữ</label><br>
                                D. <input type="radio" id="tat" name="alert" value="Tất cả các ý trên">
                                <label for="tat">Tất cả các ý trên</label>
                            </div>
                        </div>
                        <div class="ml-32 py-5">
                            <p class="text-xl">Câu 05: Sự kiện nào xảy ra khi người dùng kích vào một phần tử HTML trên trang?</p>
                            <div>
                                A.  <input type="radio" id="on" name="click" value="onclick">
                                <label for="on">onclick</label><br>
                                B. <input type="radio" id="onc" name="click" value="onchange">
                                <label for="onc">onchange</label><br>
                                C. <input type="radio" id="onv" name="click" value="onmouseover">
                                <label for="onv">onmouseover</label><br>
                                D. <input type="radio" id="onl" name="click" value="onmouseclick">
                                <label for="onl">onmouseclick</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col w1/3 py-5 ml-32 lg:ml-1">
                    <h1>Thời gian làm bài</h1>
                    <div>

                    </div>
                    <input type="submit" value="Nộp bài" class="cursor-pointer font-bold text-white bg-blue-500 hover:bg-blue-400  px-3 py-1 rounded-md">
                </div>
            </section>
        </main>
        <?php include './footer.php' ?>
    </div>
    
</body>
<script>
</script>
</html>