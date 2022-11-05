<?php

    session_start();

    if((!isset($_SESSION['cpf']) == true) and (!isset($_SESSION['senha']) == true) or ($_SESSION['cpf'] != '111.111.111-11') and ($_SESSION['senha'] != 'laila')) {

        unset($_SESSION['cpf']);
        unset($_SESSION['senha']);

        header('Location: ../../index.php');
        die();

    }

    $logado = $_SESSION['cpf'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="../imgs/logo.png">
    <link rel="stylesheet" href="../../style/main.css">
    <link rel="stylesheet" href="../../style/responsive.css">
    <!--ICONES-->
    <script src="https://kit.fontawesome.com/6131a377dc.js" crossorigin="anonymous"></script>
    <script src="../../script.js"></script>
    <title>Menu adiministrador</title>
</head>

<body>
    <div id="vanta"></div>
    
    <div id="out">
        <a href="../../index.php" target="_top">Sair</a>
    </div>

    <!--BLOCO HEADER-->
    <div class="header">
        <header>
            <div class="logo">
                <img src="../../imgs/logo.png" alt="">
            </div>

            <h1>MODO ADIMINISTRADOR</h1>
            <nav>
                <input type="checkbox" id="menuAlternar" />
                <label for="menuAlternar" id="menu-icon-label" class="menu-icone">
                    <i class="fa-solid fa-bars"></i>
                </label>
                <ul type="none">
                    <li><button onclick="Change(1); return false">Cadastrar Notebook</button></li>
                    <li class="caracter">⬤</li>

                    <li><button onclick="Change(2); return false">Cadastrar Carrinho</button></li>
                    <li class="caracter">⬤</li>

                    <li><button onclick="Change(3); return false">histórico</button></li>
                    <li class="caracter">⬤</li>

                    <li><button onclick="Change(4); return false">Professores</button></li>
                    <li class="caracter">⬤</li>

                    <li><button onclick="Change(5); return false">Notebooks</button></li>
                    <li class="caracter">⬤</li>

                    <li><button onclick="Change(6); return false">Pendentes</button></li>
                </ul>
            </nav>
        </header>
    </div>

    <main>
        <div id="frame">
            <iframe id="ifra" src=""></iframe>  
        </div>
    </main>

    <style>
        body {
            background: linear-gradient(#57c1fe,#b3d1e3);
        }

        header {
            display: flex;
        }

        iframe {
            height: 80vh;
            width: 100%;
            border: none;
            color: white;
        }

        #frame {
            width: 65vw;
            margin-top: 50px;
            margin-left: auto;
            margin-right: auto;
            background-color: transparent;
            border-radius: 10px;
        }

        button {
            transition: all 500ms;
            background: transparent;
            border: none;
            color: white;
        }

        button:hover {
            color: bisque;
        }

        h1 {
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 3vw;
            margin-right: 3vw;
            font-size: 1.4em;
            color: red;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.dots.min.js"></script>
    
    <script>
        VANTA.DOTS({
            el: "#vanta",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            color: 0x3a20ff,
            scaleMobile: 1.00,
            backgroundAlpha: 0.0,
            showLines: false
        })

        function Change(i){
            switch (i) {
                case 1:
                    document.getElementById("ifra").src = "notebooks.php"; 
                    break;

                case 2:
                    document.getElementById("ifra").src = "carrinhos.php"; 
                    break;

                case 3:
                    document.getElementById("ifra").src = "historico.php"; 
                    break;

                case 4:
                    document.getElementById("ifra").src = "professor.php"; 
                    break;

                case 5:
                    document.getElementById("ifra").src = "notes.php"; 
                    break;

                case 6:
                    document.getElementById("ifra").src = "pendente.php"; 
                    break;
            }
        }
    </script>
</body>
</html>