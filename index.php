<!doctype html>
<html lang="en">

<head>
    <!-- Including de head. !-->
    <?php include'./head.php'; ?>
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/style/login.scss">
    <script src="assets/js/app.js"></script>
</head>

<body>

    <div class="nav" id="navbar-kleuren">
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
            <a href="#" target="_blank">Home</a>
            <a href="#" target="_blank">Tactics</a>
            <a href="#" target="_blank">Smokes/Grenades</a>
            <a href="#" target="_blank">Info</a>
            <a id="login-knop" href=./login-page.html>login</a>
        </div>
    </div>

    <div style="height: 500px;" class="box-shadow">
        <img src="https://goexanimo.lv/storage/images/news/lg_csgo-2x2-turnirs-8-VUl54fQRkz.png" alt="">
    </div>

    <!--Footer-->
    <div class="indexfooter">
        <p>Footer</p>
    </div>

    <!-- Bootstrap scripts -->
    <?php include'./bsscripts.php'; ?>

</body>

</html>