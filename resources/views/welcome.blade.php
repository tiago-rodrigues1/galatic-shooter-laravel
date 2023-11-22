<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galatic Shooter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/globals.css">
</head>
<body class="w-100 h-100 d-flex flex-column justify-content-between">
    <header class="w-100 p-5">
        <h1 class="m-0 fs-2 text-center txt-yellow title-font">Galatic Shooter</h1>
    </header>
    
    
    <main class="flex-fill w-100 h-100 d-flex align-items-center justify-content-center">
        <div id="signin-form" class="col-10 col-md-6 col-xl-4">
            <x-forms.signin/>
        </div>

        <div id="signup-form" class="col-10 col-md-6 col-xl-4">
            <x-forms.signup/>
        </div>
    </main>

    <footer class="p-3 bc-opaco txt-white d-flex justify-content-evenly hstack align-items-center" style="font-size: 14px;">
        <p class="m-0 text-center"> 
            <b>Atividade</b> <br>
            <b>Disciplina: </b> Programação Para Internet<br>
            <b>Professor: </b> Marcelo Figueiredo Barbosa Júnior <br>
            IFRN - Campus Santa Cruz
        </p>
        <p class="m-0 text-center">Todos os direitos reservados ©</p>
        
        <p class="m-0 text-center">
            <b>Desenvolvido por</b><br>
            Jamilly Emilly da Silva Campelo<br>
            Natálya Gabrielle Nunes de Azevedo<br>
            Tiago Rodrigues dos Santos
        </p>
    </footer>
    <script src="scripts/jquery-3.7.0.min.js"></script>
    <script src="scripts/home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>