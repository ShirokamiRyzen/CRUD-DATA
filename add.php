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
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
          <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
          Add Data    
      </a>
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  Input Data
              </h1>
              <form class="space-y-4 md:space-y-6" action="add.php" method="post" name="form1">
                  <div>
                      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                      <input type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Fatih Firdaus" required>
                  </div>
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                      <input type="text" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="shirokamiryzen@ryzn.site" required>
                  </div>
                  <div>
                      <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                      <input type="text" name="mobile" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="628xxxxxxxxxxx" required>
                  </div>
                  <button type="submit" name="Submit" value="Add"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Input</button>
              </form>
          </div>
      </div>
  </div>
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