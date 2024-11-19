<?php
session_start();

if (!isset($_SESSION["username"])){
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
<body class="w-full bg-gray-100 flex">
<div class="w-1/6 h-screen fixed top-0 left-0 bg-white flex flex-col items-center px-10 py-5">
    <h1 class="font-bold">TopDoučko</h1>
    <div class="flex flex-col w-full gap-2 mt-5">
        <a href="index.php" class="transition hover:bg-gray-200 w-full text-center py-2 rounded cursor-pointer">
            <div href="index.php">Domů</div>
        </a>
        <a class="transition hover:bg-gray-200 w-full text-center py-2 rounded cursor-pointer">
            <div class="font-bold">Referal</div>
        </a>
    </div>

</div>
<div class="h-full w-1/6"></div>
<div class="w-5/6 p-10">
    <h1 class="text-2xl font-bold">Referal</h1>
    <div class="flex flex-col p-4 border rounded-lg shadow-lg gap-2 mt-5">
        <!-- Header -->
        <div class="flex font-bold border-b px-2">
            <div class="flex-1 p-2">ID</div>
            <div class="flex-1 p-2">Email</div>
            <div class="flex-1 p-2">Referal link</div>
        </div>

        <!-- Row 1 -->
        <div class="flex transition hover:bg-gray-200 rounded cursor-pointer px-2">
            <div class="flex-1 p-2">1</div>
            <div class="flex-1 p-2">john.doe@example.com</div>
            <div class="flex-1 p-2">asfdasgdsag</div>
        </div>

        <!-- Row 2 -->
        <div class="flex transition hover:bg-gray-200 rounded cursor-pointer px-2">
            <div class="flex-1 p-2">2</div>
            <div class="flex-1 p-2">jane.smith@example.com</div>
            <div class="flex-1 p-2">asfdasgdsag</div>
        </div>

        <!-- Row 3 -->
        <div class="flex transition hover:bg-gray-200 rounded cursor-pointer px-2">
            <div class="flex-1 p-2">3</div>
            <div class="flex-1 p-2">alice.brown@example.com</div>
            <div class="flex-1 p-2">asfdasgdsag</div>
        </div>
    </div>


</div>
</body>
</html>
