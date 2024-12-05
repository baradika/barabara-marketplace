<!-- NAVBAR -->
<div class="navbar">
    <nav class="teal">
        <div class="container">
            <div class="nav-wrapper">
                <!-- Ganti logo dengan ikon home -->
                <a href="index.php" class="brand-logo center">
                    <i class="material-icons">home</i>
                </a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li class="hoverable">
                        <a href="keranjang.php"><i class="material-icons left">shopping_cart</i>Keranjang</a>
                    </li>
                    <li class="hoverable">
                        <a href="riwayat.php"><i class="material-icons left">assignment</i>Riwayat Belanja</a>
                    </li>
                </ul>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li class="hoverable">
                        <a href="checkout.php"><i class="material-icons left">payment</i>Checkout</a>
                    </li>
                    <!-- Jika sudah login ada session penjual -->
                    <?php if (isset($_SESSION['pelanggan'])): ?>
                        <li class="hoverable">
                            <a href="penjual/index.php" name="jual"><i class="material-icons left">store</i>Jual</a>
                        </li>
                    <?php else: ?>
                        <li class="hoverable">
                            <a href="daftar.php"><i class="material-icons left">person_add</i>Daftar</a>
                        </li>
                    <?php endif ?>
                    <!-- Jika sudah login ada session pelanggan -->
                    <?php if (isset($_SESSION['pelanggan'])): ?>
                        <li class="hoverable">
                            <a href="logout.php"><i class="material-icons left">exit_to_app</i>Logout</a>
                        </li>
                    <?php else: ?>
                        <li class="hoverable">
                            <a href="login.php"><i class="material-icons left">login</i>Login</a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>
</div>

<!-- Sidenav -->
<ul class="sidenav" id="mobile-nav">
    <li>
        <a href="keranjang.php"><i class="material-icons">shopping_cart</i>Keranjang</a>
    </li>
    <li>
        <a href="riwayat.php"><i class="material-icons">assignment</i>Riwayat Belanja</a>
    </li>
    <li>
        <a href="checkout.php"><i class="material-icons">payment</i>Checkout</a>
    </li>
    <li>
        <?php if (isset($_SESSION['pelanggan'])): ?>
            <a href="penjual/index.php"><i class="material-icons">store</i>Jual</a>
        <?php else: ?>
            <a href="daftar.php"><i class="material-icons">person_add</i>Daftar</a>
        <?php endif ?>
    </li>
    <li>
        <?php if (isset($_SESSION['pelanggan'])): ?>
            <a href="logout.php"><i class="material-icons">exit_to_app</i>Logout</a>
        <?php else: ?>
            <a href="login.php"><i class="material-icons">login</i>Login</a>
        <?php endif ?>
    </li>
</ul>
