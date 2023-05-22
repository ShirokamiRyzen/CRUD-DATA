<html>

<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Add Users</title>
</head>

<body>
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="index.php" class="flex items-center">
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
    <form action="add.php" method="post" name="form1">
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
            <input type="text" name="name"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="Fatih Firdaus" required>
        </div>
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Email</label>
            <input type="text" name="email"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="shirokamiryzen@ryzn.site" required>
        </div>
        <div class="mb-6">
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Phone</label>
            <input type="text" name="mobile"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="628xxxxxxxxxxx" required>
        </div>
        <button type="submit" name="Submit" value="Add"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Input</button>
    </form>
    <?php
    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        // include database connection file
        include_once("koneksi.php");
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile)
VALUES('$name','$email','$mobile')");
        // Show message when user added
        echo "<a class='negro'>User added successfully. </a>";
        echo "<a class='negro' href='index.php'>View Users</a>";
    }
    ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
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