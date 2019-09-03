<?php
include '../Controller/Cadastro.php';
?>

<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <script src="../utils/js/jquery.mask.js"></script>
    <script src="../utils/js/InputMasks.js"></script>
    <script type="text/javascript">

        $(document).ready(function () {

            if ($(".modal").length) {
                $(".modal").modal('show')
            }

        });

    </script>
</head>
<body class="" style="background-color: #5fbae9">
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

<div class="row p-5">
    <div class="col-4 mx-auto p-5 pb-2 ml-5 bg-white rounded">
        <form action="Informacoes.php" method="post">
            <div class="form-group">
                <label class="" for="nome">Nome Completo</label>
                <input class="form-control" id="nome" name="nome" type="text" required>
            </div>


            <div class="form-group">
                <label class="" for="nome">Data de Nascimento</label>
                <input class="form-control" id="nascimento" name="nascimento" type="text" required>
            </div>


            <div class="form-group">
                <label class="" for="nome">Telefone</label>
                <input class="form-control" id="phoneNumber" name="phoneNumber" type="text">
            </div>

            <div class="form-group">
                <label class="" for="nome">Celular</label>
                <input class="form-control" id="celNumber" name="celNumber" type="text" required>
            </div>

            <div class="form-group">
                <label class="" for="nome">CEP</label>
                <input class="form-control" id="cep" name="cep" type="text" required>
            </div>

            <div class="form-group">
                <label class="" for="nome">Endereço</label>
                <input class="form-control" id="endereco" name="endereco" type="text" required>
            </div>


            <div class="row">
                <div class="col-5">
                    <div class="form-group">
                        <label class="" for="nome">Número</label>
                        <input class="form-control" id="enderecoNum" name="enderecoNum" type="text"
                               required>
                    </div>
                </div>
                <div class="col-7">
                    <div class="form-group">
                        <label class="" for="nome">Bairro</label>
                        <input class="form-control" id="enderecoNum" name="enderecoNum" type="text"
                               required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-8">
                    <div class="form-group">
                        <label class="" for="nome">Cidade</label>
                        <input class="form-control" id="cidade" name="cidade" type="text" required>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="form-group">
                        <label class="" for="nome">Estado</label>
                        <select class="form-control" id="estado" name="estado">
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AP">AP</option>
                            <option value="AM">AM</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MT">MG</option>
                            <option value="MS">MS</option>
                            <option value="MG">MG</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PR">PR</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                            <option value="SE">SE</option>
                            <option value="TO">TO</option>
                        </select>

                    </div>
                </div>
            </div>
            <br>
            <input class="btn btn-success col-12 py-2" name="submit" type="submit" value="Continuar">
            <!--        FIM DA COLUNA-->
    </div>
    <div class="col-3 p-3 pt-5 text-center position-fixed mt-5 bg-transparent text-light">
        <p style="font-family: 'Poppins', sans-serif; font-size: 20px;"> Envie seu currículo para que possamos avaliar
            melhor sua candidatura. </p>
        <p style="font-family: 'Poppins', sans-serif; font-size: 20px;">Mas lembre-se:</p>
        <ul>
            <li style="font-family: 'Poppins', sans-serif; font-size: 20px;">O sistema só aceita arquivos nos formatos
                word e pdf.
            </li>
        </ul>
        <label class="bg-info" for="arquivo"> Escolha...</label>
        <input id="arquivo" name="arquivo" class="btn-info bg-info" type="file" value="Escolha...">
    </div>
</div>


</div>
</div>
</div>
</div>
</form>

</div>
</div>


<footer class="py-0 card-footer text-center bg-white">
    Hospital Nossa Senhora Auxiliadora - 2019
</footer>
<?php
echo $retornoUser;
?>
</body>

</html>