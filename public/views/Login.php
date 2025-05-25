<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EBakery - Logowanie</title>
    <link rel="stylesheet" href="public/css/Login.css">
    <script src="public/scripts/Login.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

</head>

<body>
    <div class="main">
        <aside class="left">
            <img src="public/images/Login-pic.jpg" alt="">
            <h1>EBakery</h1>
            <span>
                Twoje miejsce w świecie piekarnictwa. Dołącz do nas i
                <br>
                <span>odkryj świeże możliwości.</span>
            </span>
        </aside>
        <aside class="right">
            <div>
                <nav class="tabs">
                    <div id="login-tab" class="tab active">Logowanie</div>
                    <div id="register-tab" class="tab">Rejestracja</div>
                </nav>
                <form id="auth-form" action="login" method="POST">
                    <div class="messages">
                        <?php if(isset($messages)){
                            foreach($messages as $message){
                                echo $message;
                            }
                        }
                        ?>
                    </div>
                    <section class="hidden" id="name">
                        <span>Imię</span>
                        <input name="name" type="name" placeholder="Imię">
                    </section>

                    <section>
                        <span>Email</span>
                        <input name="email" type="email" placeholder="twój@email.com" required>
                    </section>

                    <section>
                        <span>Hasło</span>
                        <input name="password" type="password" placeholder="Hasło" required>
                    </section>


                    <section id="repeat-password" class="hidden">
                        <span>Powtórz hasło</span>
                        <input name="password-rep" type="password" placeholder="Powtórz hasło">
                    </section>

                    <section class="row">
                        <label><input type="checkbox"> Zapamiętaj mnie</label>
                        <a href="#">Zapomniałeś hasła?</a>
                    </section>

                    <button type="submit" id="submit-btn">Zaloguj się</button>
                </form>
            </div>

        </aside>
    </div>
</body>

</html>