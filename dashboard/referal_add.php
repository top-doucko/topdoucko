<?php
session_start();
include "../backend/db.php";

if (!isset($_SESSION["username"])) {
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
    <title>LunarBytes - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="w-full bg-neutral-100 flex">
    <div class="w-1/6 h-screen fixed top-0 left-0 bg-white flex flex-col items-center px-10 py-5">
        <h1 class="font-bold text-xl">TopDoučko</h1>
        <div class="flex flex-col w-full gap-2 mt-5">
            <a href="index.php" class="transition hover:bg-gray-200 w-full text-center py-2 rounded cursor-pointer">
                <div>Domů</div>
            </a>
            <a href="referal.php" class="transition hover:bg-gray-200 w-full text-center py-2 rounded cursor-pointer">
                <div class="font-bold">Referal</div>
            </a>
        </div>
    </div>
    <div class="h-full w-1/6"></div>
    <div class="w-5/6 p-10">
        <h1 class="text-2xl font-bold">Add referal</h1>

        <form>
            <div>
                <div>User</div>
                <input type="dropdown"/>
            </div>
        </form>
    </div>
</body>

</html>