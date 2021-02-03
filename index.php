<!doctype html>
<html lang="en">

<head>
    <!-- Including de head. !-->
    <?php include'./head.php'; ?>
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/style/login.scss">
    <script src="assets/js/app.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="nav " id="navbar-kleuren">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
            <div class="nav-title">CSGO-FAMILY.COM</div>
        </div>
        <div class="nav-btn">
            <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>

        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">Tactics</a>
            <a href="./contact.php">Contact</a>
            <a href="#">Profile</a>
            <a id="login-knop" class="" href=./login.php>login</a>
        </div>
    </div>

    <div style="height: 500px;" class="box-shadow">
        <img src="https://goexanimo.lv/storage/images/news/lg_csgo-2x2-turnirs-8-VUl54fQRkz.png" alt="">
        <h1 class="hoofdtekst">WELCOME!</h1>
    </div>


    <!-- The App Section -->
    <div class="container-fluid">
        <div class="row">
            <div class="column-66">
                <h1 class="xlarge-font"><b>E-Sport</b></h1>
                <h1 class="large-font" style="color:MediumSeaGreen;"></h1>
                <p class="paragraph1">You should buy this app because lorem
                    ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat.</p>
                <button class="button">Download Application</button>
            </div>
            <div class="column-33">
                <img src="https://www.seekpng.com/png/full/121-1217542_steams-gemenskap-scream-cs-go-hd.png" width="400" height="400">
            </div>
        </div>
    </div>

    <!-- Clarity Section -->
    <div class="container-fluid">
        <div class="row">
            <div class="column-33">
                <img src="https://www.pngkey.com/png/full/149-1499168_csgo-knife-knifes-csgo-knife-in-hand.png" width="100%" height="100%">
            </div>
            <div class="column-66">
                <h1 class="xlarge-font"><b>Skins</b></h1>
                <p class="paragraph1"> Sharp and clear photos with the
                    world's best photo engine, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquipex ea commodo consequat. Duis aute irure
                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <button class="button">Read More</button>
            </div>
        </div>
    </div>

    <!-- The App Section -->
    <div class="container-fluid">
        <div class="row">
            <div class="column-66">
                <h1 class="xlarge-font"><b>Gamemodes</b></h1>
                <p class="paragraph1"> ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
                <button class="button">Download Application</button>
            </div>
            <div class="column-33">
                <img src="http://pngimg.com/uploads/counter_strike/counter_strike_PNG21.png" width="100%" height="100%">
            </div>
        </div>
    </div>

    <!-- Bootstrap scripts -->
    <?php include'./bsscripts.php'; ?>

</body>

</html>