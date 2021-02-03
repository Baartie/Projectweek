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
            <div class="nav-title">RUSH-B.COM</div>
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

    <!-- Moving background !-->
    <div class="page">
        <header>
            <h1>Rush b</h1>
            <h2>HOME</h2>
        </header>
        </h1>
        <!-- Bootstrap scripts !-->
        <?php include'./bsscripts.php'; ?>

</body>

</html>