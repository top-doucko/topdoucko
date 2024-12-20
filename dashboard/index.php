<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search" />
    <title>LunarBytes - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="w-full bg-gray-100 flex">
    <div class="w-1/6 h-screen fixed top-0 left-0 bg-white flex flex-col items-center px-10 py-5">
        <h1 class="font-bold text-xl">TopDoučko</h1>
        <div class="flex flex-col w-full gap-2 mt-5">
            <a class="transition hover:bg-gray-200 w-full text-center py-2 rounded cursor-pointer">
                <div class="font-bold">Domů</div>
            </a>
            <a href="referal.php" class="transition hover:bg-gray-200 w-full text-center py-2 rounded cursor-pointer">
                <div href="referal.php">Referal</div>
            </a>
        </div>
    </div>
    <div class="h-full w-1/6"></div>
    <div class="w-5/6">
        <div class="bg-white w-full h-20 flex items-center px-10">
            <div class="flex items-center gap-2">
                <?php echo $_SESSION["user"]["username"] ?>

            </div>
        </div>
    </div>
</body>

</html>