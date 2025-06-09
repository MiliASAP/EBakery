<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <script src="public/scripts/common.js"></script>
    <script src="public/scripts/Account.js"></script>
    <link rel="stylesheet" href="public/css/Account.css">
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
        <form action="/logout" method="post" id="logout-form" style="display: none;"></form>
        <a href="#" onclick="document.getElementById('logout-form').submit(); return false;">
            <svg class="logout" xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24"
                fill="none">
                <path stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M20 12h-9.5m7.5 3l3-3-3-3m-5-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2h5a2 2 0 002-2v-1" />
            </svg>
        </a>
    </nav>

    <main>
        <div class="header">
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
            <div class="nameId">
                <h2>
                    <?= htmlspecialchars($user->getName()) ?>
                    <?= htmlspecialchars($user->getSurname()) ?>
                </h2>
                <p>ID: #<?= htmlspecialchars($user->getId()) ?></p>
            </div>

        </div>
        <section class="HistoryData">
            <aside class="left">
                <div>
                    <h3>Historia zamówień</h3>
                </div>
                <div class="orders">
                    <p>Brak zamówień.</p>
                </div>
            </aside>
            <aside class="right">
                <div>
                    <h3>Dane osobowe</h3>
                </div>
                <div class="Data">
                    <span>Imię</span>
                    <p><?= htmlspecialchars($user->getName()) ?></p>
                    <br>
                    <span>Nazwisko</span>
                    <p><?= htmlspecialchars($user->getSurname()) ?></p>
                    <br>
                    <span>Email</span>
                    <p><?= htmlspecialchars($user->getEmail()) ?></p>
                </div>
            </aside>
        </section>
    </main>
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