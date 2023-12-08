<?php
if ( !file_exists('config.php') ) {
    echo 'É necessário configurar o script';
    exit();
}

require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Feira City Login</title>
        <link rel="stylesheet" href="<?php echo LOGIN_URL; ?>/css/style.css" />
        <link rel="stylesheet" href="<?php echo LOGIN_URL; ?>/css/animation.css" />
        <link rel="stylesheet" href="<?php echo LOGIN_URL; ?>/css/remixicon.css" />
        <link rel="stylesheet" href="<?php echo LOGIN_URL; ?>/litenotify/litenotify.css" />

        <script
            src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
    <body>
        <section class="mainLogin">
            <!-- Tela Laranja sobre os formularios -->
            <div class="orangeContainer">
                <!-- Esquerda -->
                <div class="left">
                    <!-- Mensagem Hello -->
                    <div class="welcome">
                        <img src="<?php echo LOGIN_URL; ?>/img/logo_fc.png" alt="Logo" />
                        <h1>Bem vindo!</h1>
                        <p>
                            Para fazer Login, <br />
                            Preencha o formulário ao lado!
                        </p>
                    </div>
                </div>

                <!-- Button Swipe Screen -->
                <div class="buttonContainer logoContainer"></div>

                <!-- Direita -->
                <div class="right">
                    <!-- Mensagem Hello -->
                    <div class="msgCentered">
                        <h2>Olá, amigo.</h2>
                        <span>
                            Insira suas credenciais<br />
                            e tenha acesso ao nosso sistema.
                        </span>
                    </div>
                </div>
            </div>
            <!-- Formularios -->
            <div class="formsContainer">
                <!-- Form da Direita -->
                <div class="right">
                    <h2>Acessar área administrativa</h2>
                    <form
                        action="/"
                        method="POST"
                        id="login-form"
                        class="fbox fbox_column fbox_space_between"
                    >
                        <span>Insira suas credenciais:</span>

                        <!-- Email -->
                        <div class="input_item">
                            <i class="ri-mail-send-line"></i>
                            <input
                                type="email"
                                name="auth_email"
                                placeholder="Email"
                                autocomplete="one-time-code"
                            />
                        </div>

                        <!-- Senha -->
                        <div class="input_item">
                            <i class="ri-lock-line"></i>
                            <input
                                type="password"
                                name="auth_password"
                                placeholder="Senha"
                                autocomplete="one-time-code"
                            />
                        </div>

                        <!-- Recovery Password -->
                        <!-- <a class="recoveryPass" href="#">Esqueceu a senha?</a> -->

                        <!-- Submit -->
                        <button
                            type="submit"
                            class="g-recaptcha"
                            data-sitekey="<?php echo RECAPTCHA_PUBLIC_KEY; ?>"
                            data-callback="onSubmit"
                            data-action="submit"
                            id="login-button"
                        >
                            Entrar
                        </button>
                    </form>
                </div>
                <!-- Form da Esquerda -->
                <div class="left">
                    <h2>Registrar-se</h2>
                    <a
                        href="<?php echo SITE_URL; ?>/cadastro/"
                        id="register"
                    ></a>
                </div>
            </div>
        </section>
        <script
            src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"
        ></script>

        <!-- Scripts -->
        <script>
            let js_global = {
                wp_ajax: "<?php echo SITE_URL; ?>/wp-admin/admin-ajax.php",
                site_url: "<?php echo SITE_URL; ?>",
            };
        </script>
        <script src="<?php echo LOGIN_URL; ?>/litenotify/litenotify.js"></script>
        <script src="<?php echo LOGIN_URL; ?>/js/js.js"></script>
    </body>
</html>
