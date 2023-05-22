<?php
// Create database connection using config file
include_once("koneksi.php");
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
<html>

<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Fatih</title>
</head>

<body>
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center">
                <img src="https://avatars.githubusercontent.com/u/76462435?v=4" class="h-8 mr-3" alt="shirokami">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Fatih Firdaus</span>
            </a>
            <div class="flex md:order-2">
                <div>
                    <button class="buttonmsc" onclick="toggleMusic()" id="btn-playback" data-play="false">
                        <i class="fa fa-play"></i>
                    </button>
                    <audio id="audio" src="https://osanime.com/filedownload/2190008/Orange-(osanime.com).mp3">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <tr>
        <td>
            <button class="bg-blue-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                </svg>
                <a href="add.php">Add User</a>
            </button>
        </td>
    </tr>
    <br>
    <br>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" width='80%' border=1>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Update</th>
                </tr>
            </thead>
            <?php
            while ($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['name'] . "</td>";
                echo "<td>" . $user_data['mobile'] . "</td>";
                echo "<td>" . $user_data['email'] . "</td>";
                echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a
href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
            }
            ?>
        </table>
        <br>
        <br>
        <br>
        <br>
    </div>
    <footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="/" class="flex items-center mb-4 sm:mb-0">
                    <img src="https://avatars.githubusercontent.com/u/76462435?v=4" class="h-8 mr-3" alt="shirokami" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Fatih
                        Firdaus</span>
                </a>
                <ul
                    class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="about.html" class="mr-4 hover:underline md:mr-6 ">About</a>
                    </li>
                    <li>
                        <a href="term/privacy.html" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="contact.html" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                    href="https://github.com/ShirokamiRyzen" class="hover:underline">ShirokamiRyzen</a>. All
                Rights Reserved.</span>
        </div>
    </footer>
    <!--Javascript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./assets/js/music.js"></script>
    <script>AOS.init();</script>
</body>

</html>