<?php
session_start();
include "../backend/db.php";

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
}

$message = "";

if (!isset($_GET["uid"])){
    //$message = "There is no referal with this ID.";
    header("Location: referal.php");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $userId = $_POST["user_id"];
    $referal_url = $_POST["referal_url"];
    $isActive = $_POST["is_active"];

    if (!isset($userId) || !isset($referal_url) || !isset($isActive)) {
        return;
    }

    add_referal($userId, $referal_url, $isActive);
    header("Location: referal.php");
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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_back" />
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
    <div class="w-5/6 p-10 relative">
        <a href="referal.php" class="absolute top-5 left-5 flex gap-1 cursor-pointer">
            <span class="material-symbols-rounded">
                arrow_back
            </span>
            <div class="font-bold">Back</div>
        </a>
        <div class="w-full flex flex-col items-center">
            <h1 class="text-2xl font-bold">Add referal</h1>
            <form action="" method="POST" class="w-2/4 flex flex-col mt-5 gap-3">
                <div class="mt-5">
                    <div>User</div>
                    <select name="user_id" class="border p-2.5 border-gray-300 text-gray-900 rounded-lg w-full">
                        <option selected>Please select an user</option>
                        <?php
                        foreach (get_users() as $referal) {
                            echo "<option value='" . $referal["id"] . "'>" . $referal["email"] . "</option>";
                        }

                        ?>
                    </select>
                </div>
                <div class="flex flex-col w-full ">
                    <label for="referal_url">Referal URL</label>
                    <div class="flex gap-2">
                        <input type="text" name="referal_url"
                            class="w-full border p-2.5 border-gray-300 text-gray-900 rounded-lg outline-0"
                            id="referal-url" />
                        <div class="bg-black p-2.5 rounded-lg text-white cursor-pointer"
                            onclick="generateRandomString()">Generate</div>
                    </div>
                </div>
                <div class="flex flex-col items-start">
                    <label for="is_active">Is Active?</label>
                    <select name="is_active" class="border p-2.5 border-gray-300 text-gray-900 rounded-lg w-full">
                        <option value="true">Yes</option>
                        <option value="false">No</option>
                        ?>
                    </select>
                </div>
                <div>
                    <input class="w-full bg-black p-2.5 text-white rounded-lg" type="submit" />
                </div>
            </form>
        </div>

    </div>
    <script>
        function generateRandomString(length = 10) {
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            let result = '';
            for (let i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * characters.length));
            }
            document.getElementById("referal-url").value = result;
        }
    </script>
</body>

</html>