<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Real State</title>
    <link rel="stylesheet" href="build/css/app.css" />
    <!-- Puede que pierda estilos, por eso se pone la ruta absoluta. -->
</head>

<body>
    <header class="header <?php echo $home ? 'home' : ''; ?>">
        <div class="container header-content">
            <div class="bar">
                <a href="index.php"><img src="build/img/Real_Estate.svg" alt="logo" /></a>

                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="menu-bar">
                </div>

                <nav class="navigation">
                    <a href="about.php">About Us</a>
                    <a href="listings.php">Listings</a>
                    <a href="blog.php">Blog</a>
                    <a href="contact.php">Contact</a>
                    <a href="">
                        <img src="build/img/dark-mode.svg" alt="dark mode icon">
                    </a>
                </nav>
            </div>
            <?php if ($home) { ?>
                <h1>Exclusive Luxury Homes and Apartments for Sale</h1>
            <?php } ?>
        </div>
    </header>