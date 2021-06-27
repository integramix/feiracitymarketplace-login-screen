<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAC WebPanel • Riverlab</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animation.css">
    <link rel="stylesheet" href="css/remixicon.css">
</head>
<body>
    <section class="mainLogin">
        <!-- Tela Laranja sobre os formularios -->
        <div class="orangeContainer">
            <!-- Esquerda -->
            <div class="left">
                <!-- Mensagem Hello -->
                <div class="msgCentered">
                    <h2>Bem-vindo.</h2>
                    <span>
                        Para ter acesso ao nosso sistema<br>
                        preencha o formulário ao lado.
                    </span>
                </div>

                <!-- Powered By -->
                <a class="poweredBy" href="https://riverlab.org" title="Riverlab - Agência Digital" target="_blank">
                    <span>Powered by</span>
                    <?php require 'riverlab_icon.php'; ?>
                </a>
            </div>

            <!-- Button Swipe Screen -->
            <div class="buttonContainer">
                <a href="#" class="btn_001 swipe_screen">
                    <span class="text_visible">Login</span>
                    <span class="text_hidden">Solicitar Acesso</span>
                </a>
            </div>

            <!-- Direita -->
            <div class="right">
                <!-- Mensagem Hello -->
                <div class="msgCentered">
                    <h2>Olá, amigo.</h2>
                    <span>
                    Insira suas credenciais<br>
                    e tenha acesso ao nosso sistema.
                    </span>
                </div>
            </div>
        </div>
        <!-- Formularios -->
        <div class="formsContainer">
            <!-- Form da Esquerda -->
            <div class="left">
                <h2>Acessar o painel</h2>
                <form action="" class="fbox fbox_column fbox_space_between">
                    <span>insira suas credenciais:</span>

                    <!-- Email -->
                    <div class="input_item">
                        <i class="ri-mail-send-line"></i>
                        <input
                            type="email"
                            name="nac_auth_email"
                            placeholder="Email"
                            autocomplete="one-time-code"
                        >
                    </div>

                    <!-- Senha -->
                    <div class="input_item">
                        <i class="ri-lock-line"></i>
                        <input
                            type="password"
                            name="nac_auth_password"
                            placeholder="Senha"
                            autocomplete="one-time-code"
                        >
                    </div>

                    <!-- Recovery Password -->
                    <a class="recoveryPass" href="#">Esqueceu a senha?</a>

                    <!-- Submit -->
                    <button type="submit">Entrar</button>
                </form>

                <!-- Mobile Swipe Screen -->
                <div class="mobile_swipe_screen">
                    Ainda não sou um membro. <span class="swipe_screen screentwo login_screen">Solicitar Acesso</span>
                </div>

                <!-- Mobile Powered By -->
                <div class="mobile_powered_by">
                    <a class="poweredBy" href="https://riverlab.org" title="Riverlab - Agência Digital" target="_blank">
                        <span>Powered by</span>
                        <?php require 'riverlab_icon.php'; ?>
                    </a>
                </div>
            </div>
            <!-- Form da Direita -->
            <div class="right">
                <h2>Solicitar Acesso</h2>
                <div class="iconsSociais">
                    <!-- Facebook -->
                    <a href="https://facebook.com/riverlabteam" title="Facebook" target="_blank">
                        <i class="ri-facebook-fill"></i>
                    </a>
                    <!-- Instagram -->
                    <a href="https://instagram.com/riverlabteam" title="Instagram" target="_blank">
                        <i class="ri-instagram-line"></i>
                    </a>
                    <!-- Whatsapp -->
                    <a href="https://wa.me/5582987580787" title="Whatsapp" target="_blank">
                        <i class="ri-whatsapp-line"></i>
                    </a>
                </div>
                <form action="" class="fbox fbox_column fbox_space_between">
                    <span>ou nos mande um e-mail:</span>

                    <!-- Nome -->
                    <div class="input_item">
                        <i class="ri-user-line"></i>
                        <input
                            type="text"
                            name="nac_ra_name"
                            placeholder="Nome"
                            autocomplete="one-time-code"
                        >
                    </div>

                    <!-- Email -->
                    <div class="input_item">
                        <i class="ri-mail-send-line"></i>
                        <input
                            type="email"
                            name="nac_ra_email"
                            placeholder="Email"
                            autocomplete="one-time-code"
                        >
                    </div>

                    <!-- URL -->
                    <div class="input_item">
                        <i class="ri-link"></i>
                        <input
                            type="url"
                            name="nac_ra_website"
                            placeholder="Link da Loja"
                            autocomplete="one-time-code"
                        >
                    </div>

                    <!-- Submit -->
                    <button type="submit">Solicitar</button>
                    
                </form>

                <!-- Mobile Swipe Screen -->
                <div class="mobile_swipe_screen">
                    Já sou um membro. <span class="swipe_screen">Login</span>
                </div>

                <!-- Mobile Powered By -->
                <div class="mobile_powered_by">
                    <a class="poweredBy" href="https://riverlab.org" title="Riverlab - Agência Digital" target="_blank">
                        <span>Powered by</span>
                        <?php require 'riverlab_icon.php'; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="js/js.js"></script>
</body>
</html>