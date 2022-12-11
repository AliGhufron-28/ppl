<?php  

require "function_admin.php";

session_start();

// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['status']==""){
    header("Location: login.php?pesan=gagal");
}

$data = query("SELECT * FROM menu");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Merriweather:wght@400;700;900&family=Open+Sans:wght@300;400&family=Quicksand:wght@300;400;500&display=swap" 
    rel="stylesheet">

    <!-- Box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">

    <!-- Css landing -->
    <link rel="stylesheet" href="css/landing.css">
    <link rel="stylesheet" href="css/style_profilenav.css">
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3">
            <div class="container">
                <a class="navbar-brand" href="#"><span>MEMORY</span>JINGGA CAFE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end align-items-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active me-4" href="landing_page.php">Home</a>
                        <a class="nav-link me-4" href="landing_page.php">Menu</a>
                        <a class="nav-link me-4" href="landing_page.php">Place</a>
                        <a class="nav-link me-4" href="landing_page.php">About</a>
                        <div class="icons-home mt-2">
                            <img src="img/avatar.png" alt="avatar" class="avatar" onclick="toggleMenu()">
                            <div class="sub-menu-wrap" id="subMenu">
                                <div class="sub-menu">
                                    <div class="user-info">
                                        <img src="img/avatar.png">
                                        <h3><?php echo $_SESSION['username']; ?></h3>
                                    </div>
                                    <hr>

                                    <a href="halaman_profile.php" class="sub-menu-link mt-5">
                                        <img style="margin-top: -12px;" src="img/profile.png" alt="profile">
                                        <p>Edit Profile</p>
                                        <span style="margin-top: -15px;"> > </span>
                                    </a>
                                
                                    <a href="logout.php" class="sub-menu-link">
                                        <img style="margin-top: -12px;" src="img/logout.png" alt="help">
                                        <p>Logout</p>
                                        <span style="margin-top: -15px;"> > </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
          </nav>
    </header>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" 
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
    crossorigin="anonymous"></script>

    <!-- Custom -->
    <script src="js/script.js"></script>

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>
</html>