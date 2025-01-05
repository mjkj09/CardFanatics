<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/common.css">
    <link rel="stylesheet" href="public/css/cardlist.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;900&display=swap" rel="stylesheet">
    <script src="public/js/menu.js"></script>
    <script src="public/js/cardsfortrade.js" defer></script>
    <script src="https://kit.fontawesome.com/4dc72001e9.js" crossorigin="anonymous"></script>
    <title>Cards for Trade</title>
</head>
<body>
    <div class="main-page">
        <!-- Navbar -->
        <nav class="navbar">
            <i class="fa-solid fa-bars" id="menu-toggle" style="color: #f6fcdf;"></i>
            <img src="public/img/logo.svg" class="navbar__logo" alt="Logo">
        </nav>

        <!-- Fullscreen Menu -->
        <div id="fullscreen-menu" class="fullscreen-menu">
            <i class="fa-solid fa-times" id="close-menu" style="color: #f6fcdf;"></i>
            <ul class="menu-options">
                <li><a href="cardsearch">CARD SEARCH</a></li>
                <li><a href="personaldata">MY PERSONAL DATA</a></li>
                <li><a href="cardsfortrade">CARDS FOR TRADE</a></li>
                <li><a href="wishlist">WISHLIST</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <main class="content">
            <header class="page-header">
                <h1>Cards for Trade</h1>
            </header>

            <section class="form-container">
                <form id="add-card-form">
                    <label for="card-code">Card Code *</label>
                    <input type="text" id="card-code" name="card-code" placeholder="Enter card code" required>
                    
                    <label for="collection">Collection *</label>
                    <input type="text" id="collection" name="collection" placeholder="Enter collection name" required>
                    
                    <button type="submit" class="submit-button">Add Card</button>
                </form>
            </section>

            <section class="card-list">
                <header class="page-header">
                    <h1>Your Cards</h1>
                </header>
                <ul id="card-list-container">
                    <!-- Card items will be dynamically added here -->
                </ul>
            </section>
        </main>
    </div>
</body>
</html>