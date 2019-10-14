<?php
include '../Controller/CriaUsuario.php';
?>

<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7767dc31b8.js"></script>
    <script src="../src/utils/js/jquery.mask.js"></script>
    <script src="../src/utils/js/InputMasks.js"></script>
    <script type="text/javascript">

        $(document).ready(function () {

            if ($(".modal").length) {
                $(".modal").modal('show')
            }

        });

    </script>
</head>
<body>
<header class="card-header bg-white fixed-top">

    <div class="mx-auto">
        <ul class="nav mx-auto">
            <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
    </div>


</header>
<div class="container bg-light" style="height: 100%">
    <div class="col-md-6 mx-auto text-center pt-5 mt-5">
    <div class="header-title py-3">
            <h1 class="wv-heading--title">
                Crie Sua Conta de Acesso!
            </h1>
            <h2 class="wv-heading--subtitle">
                Este é o primeiro passo para trabalhar conosco.
            </h2>
        </div>
    </div>
    <div class="row bg-light">
        <div class="col-md-4 mx-auto">
            <div class="form-row">
                <form action="." method="post" name="login">
                    <div class="form-group">
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" min="0" name="password" id="password" class="form-control"
                               placeholder="Senha" required>
                    </div>
                    <div class="form-group">
                        <input type="password" min="0" name="passwordConfirm" id="passwordConfirm" class="form-control"
                               placeholder="Confirmar Senha" required>
                    </div>
                    <div class="text-center py-3">
                        <button type="submit" class=" btn btn-info">Crie Minha Conta!</button>
                    </div>
                    <div class="col-md-12 ">
                    </div>
                    <p class="small mt-3">Ao criar sua conta, você automaticamente aceita nossos <a href="#"
                                                                                                    class="ps-hero__content__link">Termos
                            de Uso</a> e <a href="#">Política de Privacidade</a>.
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<footer class="py-2 fixed-bottom card-footer text-center bg-white">Hospital Nossa Senhora Auxiliadora - 2019
</footer>
<?php
echo $mostraModal;
session_start();
echo isset($_SESSION['modal']) ? $_SESSION['modal'] : '';
unset($_SESSION['modal']);
?>
</body>
