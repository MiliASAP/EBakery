<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <script src="public/scripts/common.js"></script>
    <script src="public/scripts/Cart.js"></script>
    <link rel="stylesheet" href="public/css/Cart.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav class="navigation">
        <div class="logo">
            <img src="public/images/bread-logo.png" alt="" class="bread-logo">
            <h3>EBakery</h3>
        </div>
        <div class="navigation-el">
            <a href="http://localhost:8080/homePage">Strona główna</a>
            <a href="">O nas</a>
            <a href="">Kontakt</a>
        </div>
        <div class="icons">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"
                width="800px" height="800px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" id="Glyph"
                version="1.1" xml:space="preserve">
                <path
                    d="M27.414,24.586l-5.077-5.077C23.386,17.928,24,16.035,24,14c0-5.514-4.486-10-10-10S4,8.486,4,14  s4.486,10,10,10c2.035,0,3.928-0.614,5.509-1.663l5.077,5.077c0.78,0.781,2.048,0.781,2.828,0  C28.195,26.633,28.195,25.367,27.414,24.586z M7,14c0-3.86,3.14-7,7-7s7,3.14,7,7s-3.14,7-7,7S7,17.86,7,14z"
                    id="XMLID_223_" />
            </svg>
            <a href="http://localhost:8080/account">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="800px"
                    height="800px" viewBox="0 0 20 20" version="1.1">

                    <title>profile_round [#1342]</title>
                    <desc>Created with Sketch.</desc>
                    <defs>

                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -2159.000000)" fill="#000000">
                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                <path
                                    d="M100.562548,2016.99998 L87.4381713,2016.99998 C86.7317804,2016.99998 86.2101535,2016.30298 86.4765813,2015.66198 C87.7127655,2012.69798 90.6169306,2010.99998 93.9998492,2010.99998 C97.3837885,2010.99998 100.287954,2012.69798 101.524138,2015.66198 C101.790566,2016.30298 101.268939,2016.99998 100.562548,2016.99998 M89.9166645,2004.99998 C89.9166645,2002.79398 91.7489936,2000.99998 93.9998492,2000.99998 C96.2517256,2000.99998 98.0830339,2002.79398 98.0830339,2004.99998 C98.0830339,2007.20598 96.2517256,2008.99998 93.9998492,2008.99998 C91.7489936,2008.99998 89.9166645,2007.20598 89.9166645,2004.99998 M103.955674,2016.63598 C103.213556,2013.27698 100.892265,2010.79798 97.837022,2009.67298 C99.4560048,2008.39598 100.400241,2006.33098 100.053171,2004.06998 C99.6509769,2001.44698 97.4235996,1999.34798 94.7348224,1999.04198 C91.0232075,1998.61898 87.8750721,2001.44898 87.8750721,2004.99998 C87.8750721,2006.88998 88.7692896,2008.57398 90.1636971,2009.67298 C87.1074334,2010.79798 84.7871636,2013.27698 84.044024,2016.63598 C83.7745338,2017.85698 84.7789973,2018.99998 86.0539717,2018.99998 L101.945727,2018.99998 C103.221722,2018.99998 104.226185,2017.85698 103.955674,2016.63598"
                                    id="profile_round-[#1342]">

                                </path>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
            <a class="cartLogo" href=http://localhost:8080/cart>
                <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                        stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />

                </svg>
            </a>
        </div>
    </nav>
    <main class="cart-container">
        <section class="cart-items">
            <h2>Twój Koszyk</h2>
            <?php if (empty($cartItems)): ?>
                <p>Twój koszyk jest pusty.</p>
            <?php else: ?>
                <?php foreach ($cartItems as $item): ?>
                    <?php $product = $item['product']; ?>
                    <div class="cart-item">
                        <a class="fromCartToMore" href="http://localhost:8080/more/<?= $product->getId() ?>">
                            <img src="/public/images/<?= $product->getImage(); ?>" alt="<?= $product->getName(); ?>"
                                width="100">
                            <h3><?= $product->getName(); ?></h3>
                            <p>Ilość: <?= $item['quantity']; ?></p>
                            <p>Cena: <?= number_format($item['quantity'] * $product->getPrice(), 2); ?> zł</p>
                        </a>
                        <button data-product-id="<?= $product->getId() ?>" class="trashcan">

                            <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24"
                                fill="none">
                                <path d="M20.5001 6H3.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M9.5 11L10 16" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M14.5 11L14 16" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                                <path
                                    d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                                    stroke="#1C274C" stroke-width="1.5" />
                                <path
                                    d="M18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5M18.8334 8.5L18.6334 11.5"
                                    stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                        </button>
                    </div>

                    <hr>
                <?php endforeach; ?>
            <?php endif; ?>
        </section>

        <aside class="summary">
            <h3>Podsumowanie</h3>
            <div class="summary-row">
                <span>Suma częściowa</span>
                <span id="summary-subtotal">0,00 zł</span>
            </div>
            <div class="summary-row">
                <span>Dostawa</span>
                <span id="summary-shipping">0,00 zł</span>
            </div>
            <div class="summary-total">
                <strong>Razem</strong>
                <strong id="summary-total">0,00 zł</strong>
            </div>
            <button class="checkout-btn">Przejdź do kasy</button>

        </aside>

    </main>

</body>

</html>