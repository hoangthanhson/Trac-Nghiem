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
                    <form action="">
                        <div>Câu 01: Câu hỏi số một?</div>
                        A.  <input type="radio" id="html" name="fav_language" value="HTML">
                        <label for="html">HTML</label><br>
                        B. <input type="radio" id="css" name="fav_language" value="CSS">
                        <label for="css">CSS</label><br>
                        C. <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                        <label for="javascript">JavaScript</label>
                    </form>
                </div>
                <div class="col w1/3">
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