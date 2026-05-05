<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        body {
          flex: 1;
          display: flex;
          flex-direction: column;
          align-items: center;
          background-color: #ffffff;
          color: #333333;
          font-family: Arial, sans-serif;
          transition: 0.5s;
        }

        .modo-escuro {
          background-color: #1a1a1a;
          color: #f1f1f1;
        }

        h1 {
          margin-top: 50px;
        }

        button {
          padding: 10px 20px;
          font-size: 16px;
          cursor: pointer;
          background-color: #007BFF;
          color: #fff;
          border: none;
          border-radius: 5px;
          transition: background-color 0.3s;
        }
    </style>
</head>
<body>
    <h1>Config. do Sistema</h1>
    <p>Bem-vindo ao painel de preferências.</p>

    <button id="btn-tema">🌙 Modo Noturno</button>

    <script> 
        let botao = document.getElementById('btn-tema');
        botao.addEventListener('mouseover', function() {
            document.body.classList.toggle('modo-escuro');

                if(document.body.classList.contains('modo-escuro')) {
                    botao.innerHTML = '☀️ Modo Claro';
                } else {
                    botao.innerHTML = '🌙 Modo Noturno';
                }
        });
    </script>
</body>
</html>