<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/common.css">
    <link rel="stylesheet" href="public/css/cardsearch.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,594;1,594&family=Poppins:ital,wght@0,400;1,600&display=swap" rel="stylesheet">
    <script src="public/js/menu.js"></script>
    <script src="https://kit.fontawesome.com/4dc72001e9.js" crossorigin="anonymous"></script>
    <title>Card Finder</title>
</head>
<body>
    <div class="main-page">
        <nav class="navbar">
            <i class="fa-solid fa-bars" id="menu-toggle" style="color: #f6fcdf;"></i>
            <img src="public/img/logo.svg" class="navbar__logo" alt="Logo">
        </nav>

        <div id="fullscreen-menu" class="fullscreen-menu">
            <i class="fa-solid fa-times" id="close-menu" style="color: #f6fcdf;"></i>
            <ul class="menu-options">
                <li><a href="cardsearch">CARD SEARCH</a></li>
                <li><a href="personaldata">MY PERSONAL DATA</a></li>
                <li><a href="cardsfortrade">CARDS FOR TRADE</a></li>
                <li><a href="wishlist">WISHLIST</a></li>
                <li><a href="logout">LOGOUT</a></li>
            </ul>
        </div>


        <main class="content">
            <header class="search-bar">
                <form>
                    <input placeholder="Search for a card" type="text" name="search" id="search">
                    <i class="fa-solid fa-search" style="color: #f6fcdf;"></i>
                </form>
                <button class="filter-button">Filters</button>
            </header>

            <section class="results">
                <div class="result-item">
                    <div class="result-item__details">
                        <p>Card Code: 12345</p>
                        <p>City: Kraków</p>
                        <p>Available: Yes</p>
                    </div>
                </div>
                <div class="result-item">
                    <div class="result-item__details">
                        <p>Card Code: 54321</p>
                        <p>City: Warszawa Gdanska</p>
                        <p>Available: No</p>
                    </div>
                </div>
                <div class="result-item">
                    <div class="result-item__details">
                        <p>Card Code: 67890</p>
                        <p>City: Gdańsk</p>
                        <p>Available: Yes</p>
                    </div>
                </div>
                <div class="result-item">
                    <div class="result-item__details">
                        <p>Card Code: 09876</p>
                        <p>City: Poznań</p>
                        <p>Available: Yes</p>
                    </div>
                </div>
                <div class="result-item">
                    <div class="result-item__details">
                        <p>Card Code: 11223</p>
                        <p>City: Łódź</p>
                        <p>Available: No</p>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
