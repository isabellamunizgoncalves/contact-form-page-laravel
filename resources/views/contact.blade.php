<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato - CyberProtech</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #101820, #223260);
            color: white;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
            width: 70%; /* Ajuste para ocupar quase toda a tela em dispositivos pequenos */
            max-width: 380px; /* Limite para telas grandes */
            transition: transform 0.2s ease, box-shadow 0.3s ease;
        }

        form:hover {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6);
        }

        h2{
            text-align: center;
            margin-bottom: 15px;
            color: #e0e0e0;
            font-weight: 600;
            font-size: 22px;
        }

        h4{
            text-align: center;
            margin-bottom: 15px;
            color: #e0e0e0;
            font-weight: 600;
        }

        label {
            font-size: 16px;
            margin-bottom: 4px;
            display: block;
            color: #d3d3d3;
            font-weight: 500;
            padding-left: 2px;
        }

        input, textarea {
            width: 100%; /* Mantém 100% da largura */
            padding: 12px;
            margin: 4px 0 12px 0;
            border: none;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.25);
            color: #fff;
            font-size: 16px;
            outline: none;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            box-sizing: border-box;
        }

        input::placeholder, textarea::placeholder {
            color: #b0b0b0;
        }

        input:focus, textarea:focus {
            background-color: rgba(255, 255, 255, 0.35);
            box-shadow: 0 0 8px rgba(49, 109, 179, 0.5);
        }

        button {
            width: 100%; /* Garante que o botão acompanhe a largura do card */
            padding: 14px;
            margin: 10px 0;
            border: none;
            border-radius: 8px;
            background: linear-gradient(135deg, #316DB3, #223260);
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
            box-sizing: border-box;
        }

        button:hover {
            background: linear-gradient(135deg, #223260, #316DB3);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            transform: translateY(-2px);
        }

        button:active {
            transform: translateY(1px);
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        }

        p.success {
            margin-top: 8px;
            text-align: center;
            color: #d4edda;
            font-size: 14px;
        }

        /* Responsividade para dispositivos menores */
        @media only screen and (max-width: 412px) {
            form {
                width: 95%; /* Ocupar quase toda a tela */
                padding: 15px;
            }

            h2, h4 {
                font-size: 20px;
            }

            label, input, textarea, button {
                font-size: 15px;
                padding: 10px;
            }

            button {
                font-size: 16px;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        <h4>Logo CyberProtech</h4>
        <h2>Fale Conosco</h2>
        <label for="name">Nome</label>
        <input type="text" id="name" name="name" placeholder="Digite seu nome" required>

        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>

        <label for="message">Mensagem</label>
        <textarea id="message" name="message" placeholder="Escreva sua mensagem" rows="4" required></textarea>

        <button type="submit">Enviar</button>

        @if(session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif
    </form>
</body>
</html>
