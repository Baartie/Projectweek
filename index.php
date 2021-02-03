<!doctype html>
<html lang="en">

<head>
    <!-- Including de head. !-->
    <?php include'./head.php'; ?>
    <link rel="stylesheet" href="assets/style/style.css">
</head>

<body>

    <div class="nav" id="navbar-kleuren">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
            <div class="nav-title">
                CSGO-Info
            </div>
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
            <a id="login-knop" href="http://">login</a>
        </div>
    </div>

    <!-- Bootstrap scripts !-->
    <?php include'./bsscripts.php'; ?>

</body>

</html>