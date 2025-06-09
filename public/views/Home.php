<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="public/css/Home.css">
    <script src="public/scripts/common.js"></script>
    <script src="public/scripts/Home.js"></script>
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
            <a href=http://localhost:8080/homePage>Strona główna</a>
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
    <section class="under-nav">
        <article>
            <h1>Świeże pieczywo
                prosto z pieca</h1>
            <span>Odkryj smak tradycyjnego, rzemieślniczego pieczywa wypiekanego z pasją i najlepszych
                składników</span>
            <button id="scroll-down">Zamów teraz</button>
        </article>
        <img src="public/images/Home-pic.jpg" alt="">
    </section>
    <section class="filters-prod-promo">
        <nav class="filters">
            <button data-filter="all">Wszystkie</button>
            <button data-filter="bread">Chleby</button>
            <button data-filter="roll">Bułki</button>
            <button data-filter="sweet">Słodkie</button>
            <button data-filter="gluten-free">Bezglutenowe</button>
        </nav>
        <div class="products-container">
            <?php if (!empty($products) && is_array($products)): ?>
                <?php foreach ($products as $product): ?>
                    <a style="text-decoration: none; color: inherit;" href=http://localhost:8080/more/<?php echo htmlspecialchars($product->getId()); ?>>
                        <div class="product-item" data-category="<?php echo htmlspecialchars($product->getCategory()); ?>">
                            <div class="prod-imag">
                                <img src="/public/images/<?php echo htmlspecialchars($product->getImage()); ?>"
                                    alt="<?php echo htmlspecialchars($product->getName()); ?>">
                            </div>

                            <h3><?php echo htmlspecialchars($product->getName()); ?></h3>
                            <p><?php echo htmlspecialchars($product->getDescription()); ?></p>
                            <div class="btn-price">
                                <p><strong><?php echo number_format($product->getPrice(), 2, ',', ' '); ?> zł</strong></p>
                                <button data-product-id="<?= $product->getId() ?>" class="AddToCart">Dodaj do koszyka</button>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <section class="promotion-info">
            <div class="ingredients">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="800px"
                    height="800px" viewBox="0 0 24 24" version="1.1">
                    <title>Wheat</title>
                    <g id="Wheat" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                        <path
                            d="M3.46530832,20.534679 L15.2109027,8.78899174 M8.90748885,9.23119339 C10.5260377,10.4451155 10.8540525,12.741287 9.64013033,14.3598359 C9.48392783,14.5681041 9.3061194,14.7589289 9.10982697,14.9291885 L8.90748885,15.0924774 C7.28893997,13.8785552 6.96092521,11.5823837 8.17484736,9.96383487 C8.33104986,9.75556668 8.5088583,9.56474181 8.70515072,9.39448224 L8.90748885,9.23119339 Z M11.8381055,6.30055141 C13.4566544,7.51447356 13.7846691,9.81064501 12.570747,11.4291939 C12.4145445,11.6374621 12.236736,11.8282869 12.0404436,11.9985465 L11.8381055,12.1618354 C10.2195566,10.9479132 9.89154184,8.65174177 11.105464,7.03319289 C11.2616665,6.82492469 11.4394749,6.63409983 11.6357674,6.46384026 L11.8381055,6.30055141 Z M14.7687221,3.36990942 C16.387271,4.58383158 16.7152858,6.88000303 15.5013636,8.4985519 C15.3451611,8.7068201 15.1673527,8.89764496 14.9710602,9.06790454 L14.7687221,9.23119339 C13.1501732,8.01727123 12.8221585,5.72109978 14.0360806,4.10255091 C14.1922831,3.89428271 14.3700916,3.70345785 14.566384,3.53319827 L14.7687221,3.36990942 Z M20.6299554,9.23119339 C19.4160647,10.8497283 17.1199302,11.1777572 15.5013953,9.96386656 C15.2931167,9.80765894 15.102283,9.62984306 14.9320168,9.43354137 L14.7687221,9.23119339 C15.9826128,7.61265851 18.2787473,7.28462956 19.8972822,8.49852022 C20.1055608,8.65472784 20.2963945,8.83254372 20.4666607,9.02884541 L20.6299554,9.23119339 Z M17.6993388,12.1618354 C16.4854481,13.7803702 14.1893135,14.1083992 12.5707787,12.8945085 C12.3625,12.7383009 12.1716664,12.560485 12.0014002,12.3641834 L11.8381055,12.1618354 C13.0519961,10.5433005 15.3481307,10.2152715 16.9666656,11.4291622 C17.1749442,11.5853698 17.3657778,11.7631857 17.536044,11.9594874 L17.6993388,12.1618354 Z M14.7687221,15.0924774 C13.5548315,16.7110122 11.2586969,17.0390412 9.64016202,15.8251505 C9.43188339,15.6689429 9.24104976,15.491127 9.07078357,15.2948253 L8.90748885,15.0924774 C10.1213795,13.4739425 12.4175141,13.1459135 14.036049,14.3598042 C14.2443276,14.5160118 14.4351612,14.6938277 14.6054274,14.8901294 L14.7687221,15.0924774 Z M5.90748885,12.2311934 C7.52603772,13.4451155 7.85405249,15.741287 6.64013033,17.3598359 C6.48392783,17.5681041 6.3061194,17.7589289 6.10982697,17.9291885 L5.90748885,18.0924774 C4.28893997,16.8785552 3.96092521,14.5823837 5.17484736,12.9638349 C5.33104986,12.7555667 5.5088583,12.5647418 5.70515072,12.3944822 L5.90748885,12.2311934 Z M11.7687221,18.0924774 C10.5548315,19.7110122 8.25869689,20.0390412 6.64016202,18.8251505 C6.43188339,18.6689429 6.24104976,18.491127 6.07078357,18.2948253 L5.90748885,18.0924774 C7.12137951,16.4739425 9.41751408,16.1459135 11.036049,17.3598042 C11.2443276,17.5160118 11.4351612,17.6938277 11.6054274,17.8901294 L11.7687221,18.0924774 Z M20.7375506,3.26301485 C21.0236732,5.26589042 19.6319978,7.12145287 17.6291624,7.40756974 C17.3714382,7.44438685 17.1107705,7.45359128 16.8515745,7.4351821 L16.593027,7.40752834 C16.3069102,5.40469292 17.6985855,3.54913047 19.7014209,3.26301359 C20.0450532,3.2139237 20.3939185,3.21392412 20.7375506,3.26301485 Z"
                            id="Combined-Shape" stroke="#000000">
                        </path>
                    </g>
                </svg>
                <span class="span-head">Naturalne składniki</span>
                <span class="span-body">Używamy tylko najlepszej jakości składników</span>
            </div>
            <div class="delivery">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="800px"
                    height="800px" viewBox="0 0 12 12" enable-background="new 0 0 12 12" id="Слой_1" version="1.1"
                    xml:space="preserve">
                    <path
                        d="M12,10V6l-1.1230469-4H7V1H0v7.7832031l1.2804565,0.7679443C1.4241333,10.3724365,2.1382446,11,3,11  c0.6954346,0,1.2924194-0.4109497,1.5744629-1h3.1010742C7.9575806,10.5890503,8.5545654,11,9.25,11  s1.2924194-0.4109497,1.5744629-1 M3,10c-0.4141846,0-0.75-0.3358154-0.75-0.75C2.25,8.8357544,2.5858154,8.5,3,8.5  s0.75,0.3357544,0.75,0.75C3.75,9.6641846,3.4141846,10,3,10z M10.8370972,5.5H9V3h1.1230469L10.8370972,5.5z M9.25,10  C8.8358154,10,8.5,9.6641846,8.5,9.25c0-0.4142456,0.3358154-0.75,0.75-0.75S10,8.8357544,10,9.25  C10,9.6641846,9.6641846,10,9.25,10z"
                        fill="#1D1D1B" />
                </svg>
                <span class="span-head">Dostawa do domu</span>
                <span class="span-body">Szybka dostawa w całym mieście</span>
            </div>
            <div class="freshness">
                <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21ZM13 6.5C13 5.94772 12.5523 5.5 12 5.5C11.4477 5.5 11 5.94772 11 6.5V11.75C11 12.4404 11.5596 13 12.25 13H15.5C16.0523 13 16.5 12.5523 16.5 12C16.5 11.4477 16.0523 11 15.5 11H13V6.5Z"
                        fill="#222222" />
                </svg>
                <span class="span-head">Świeże wypieki</span>
                <span class="span-body">Wypiekamy klika razy dziennie</span>
            </div>
        </section>
    </section>
    <section class="newsletter">
        <h3>Dołącz do naszego newslettera</h3>
        <span>Otrzymuj informacje o promocjach i nowościach</span>
        <div class="insert">
            <input type="text" placeholder="Twój adres email">
            <button>Zapisz się</button>
        </div>
    </section>
    <footer>
        <div class="Info">
            <div class="Company-Info">
                <span class="head">EBakery</span>
                <span class="main">Tradycyjna piekarnia z</span>
                <span class="main">nowoczesnym podejściem</span>
            </div>
            <div class="Contact">
                <span>Kontakt</span>
                <ul>
                    <li>ul. Piekarnicza 123</li>
                    <li>00-000 Kraków</li>
                    <li>+48 123 456 789</li>
                    <li>kontakt@ebakery.pl</li>
                </ul>
            </div>
            <div class="Social-Media">
                <span>Social Media</span>
                <div class="svgs">
                    <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none"
                        , class="fb">
                        <path
                            d="M20 12.05C19.9813 10.5255 19.5273 9.03809 18.6915 7.76295C17.8557 6.48781 16.673 5.47804 15.2826 4.85257C13.8921 4.2271 12.3519 4.01198 10.8433 4.23253C9.33473 4.45309 7.92057 5.10013 6.7674 6.09748C5.61422 7.09482 4.77005 8.40092 4.3343 9.86195C3.89856 11.323 3.88938 12.8781 4.30786 14.3442C4.72634 15.8103 5.55504 17.1262 6.69637 18.1371C7.83769 19.148 9.24412 19.8117 10.75 20.05V14.38H8.75001V12.05H10.75V10.28C10.7037 9.86846 10.7483 9.45175 10.8807 9.05931C11.0131 8.66687 11.23 8.30827 11.5161 8.00882C11.8022 7.70936 12.1505 7.47635 12.5365 7.32624C12.9225 7.17612 13.3368 7.11255 13.75 7.14003C14.3498 7.14824 14.9482 7.20173 15.54 7.30003V9.30003H14.54C14.3676 9.27828 14.1924 9.29556 14.0276 9.35059C13.8627 9.40562 13.7123 9.49699 13.5875 9.61795C13.4627 9.73891 13.3667 9.88637 13.3066 10.0494C13.2464 10.2125 13.2237 10.387 13.24 10.56V12.07H15.46L15.1 14.4H13.25V20C15.1399 19.7011 16.8601 18.7347 18.0985 17.2761C19.3369 15.8175 20.0115 13.9634 20 12.05Z"
                            fill="#000000" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 192 192"
                        fill="none" , class="insta">
                        <path stroke="#000000" stroke-width="12"
                            d="M96 162c-14.152 0-24.336-.007-32.276-.777-7.849-.761-12.87-2.223-16.877-4.741a36 36 0 0 1-11.33-11.329c-2.517-4.007-3.98-9.028-4.74-16.877C30.007 120.336 30 110.152 30 96c0-14.152.007-24.336.777-32.276.76-7.849 2.223-12.87 4.74-16.877a36 36 0 0 1 11.33-11.33c4.007-2.517 9.028-3.98 16.877-4.74C71.663 30.007 81.847 30 96 30c14.152 0 24.336.007 32.276.777 7.849.76 12.87 2.223 16.877 4.74a36 36 0 0 1 11.329 11.33c2.518 4.007 3.98 9.028 4.741 16.877.77 7.94.777 18.124.777 32.276 0 14.152-.007 24.336-.777 32.276-.761 7.849-2.223 12.87-4.741 16.877a36 36 0 0 1-11.329 11.329c-4.007 2.518-9.028 3.98-16.877 4.741-7.94.77-18.124.777-32.276.777Z" />
                        <circle cx="96" cy="96" r="30" stroke="#000000" stroke-width="12" />
                        <circle cx="135" cy="57" r="9" fill="#000000" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="800px"
                        height="800px" viewBox="0 0 20 20" version="1.1" , class="pin">

                        <title>pinterest [#180]</title>
                        <desc>Created with Sketch.</desc>
                        <defs>

                        </defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Dribbble-Light-Preview" transform="translate(-220.000000, -7399.000000)"
                                fill="#000000">
                                <g id="icons" transform="translate(56.000000, 160.000000)">
                                    <path
                                        d="M173.876,7239 C168.399,7239 164,7243.43481 164,7248.95866 C164,7253.05869 166.407,7256.48916 169.893,7258.07936 C169.893,7256.21186 169.88,7256.45286 171.303,7250.38046 C170.521,7248.80236 171.129,7246.19673 172.88,7246.19673 C175.31,7246.19673 173.659,7249.79964 173.378,7251.2174 C173.129,7252.30544 173.959,7253.14238 174.955,7253.14238 C176.864,7253.14238 178.108,7250.71524 178.108,7247.87063 C178.108,7245.69456 176.615,7244.10437 174.042,7244.10437 C169.467,7244.10437 168.307,7249.19966 169.893,7250.79893 C170.292,7251.40294 169.893,7251.43118 169.893,7252.22174 C169.616,7253.05768 167.403,7251.84259 167.403,7248.70757 C167.403,7245.86195 169.727,7242.51518 174.457,7242.51518 C178.191,7242.51518 180.681,7245.27609 180.681,7248.2054 C180.681,7252.13805 178.523,7254.98366 175.37,7254.98366 C174.291,7254.98366 173.295,7254.3978 172.963,7253.72824 C172.36,7256.07371 172.238,7257.26258 171.303,7258.58153 C172.216,7258.83261 173.129,7259 174.125,7259 C179.602,7259 184,7254.56519 184,7249.04235 C183.752,7243.43481 179.353,7239 173.876,7239"
                                        id="pinterest-[#180]">

                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <div class="rights">
            <span>© 2025 EBakery: Wszystkie prawa zastrzeżone.</span>
        </div>
    </footer>
</body>

</html>