<?php
session_start();
echo $_SESSION['id'];
include '../Controller/InserePessoa.php';

?>

<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7767dc31b8.js"></script>
    <script src="../src/utils/js/InputMasks.js"></script>
    <script src="../src/utils/js/jquery.mask.js"></script>
    <script src="../src/utils/js/ViaCEP.js"></script>

    <script type="text/javascript">

        $(document).ready(function () {
            if ($(".modal").length) {
                $(".modal").modal('show')
            }
        });
    </script>
</head>
<body class="" style="background-color: #5fbae9">

<div class="row p-5">
    <div class="col-4 mx-auto p-5 pb-2 ml-5 bg-white rounded">
        <form action="." method="post">

            <div class="form-group">
                <label class="" for="nascimento">Data de Nascimento<span class="text-danger">*</span></label>
                <input class="form-control" id="nascimento" name="nascimento" type="text" required>
            </div>

            <div class="form-group">
                <label class="" for="telefone">Telefone</label>
                <input class="form-control" id="telefone" name="telefone" type="text">
            </div>

            <div class="form-group">
                <label class="" for="celular">Celular<span class="text-danger">*</span></label>
                <input class="form-control" id="celular" name="celular" type="text" required>
            </div>

            <div class="form-group">
                <label class="" for="cep">CEP<span class="text-danger">*</span></label>
                <input class="form-control" id="cep" name="cep" type="text" required>
            </div>

            <div class="form-group">
                <label class="" for="rua">Endereço<span class="text-danger">*</span></label>
                <input class="form-control" id="rua" name="rua" type="text" required>
            </div>

            <div class="row">
                <div class="col-5">
                    <div class="form-group">
                        <label class="" for="numero">Número<span class="text-danger">*</span></label>
                        <input class="form-control" id="numero" name="numero" type="text"
                               required>
                    </div>
                </div>
                <div class="col-7">
                    <div class="form-group">
                        <label class="" for="bairro">Bairro<span class="text-danger">*</span></label>
                        <input class="form-control" id="bairro" name="bairro" type="text"
                               required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="" for="complemento">Complemento<span class="text-danger">*</span></label>
                <input class="form-control" id="complemento" name="complemento" type="text">
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="form-group">
                        <label class="" for="cidade">Cidade<span class="text-danger">*</span></label>
                        <input class="form-control" id="cidade" name="cidade" type="text" required>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="form-group">
                        <label class="" for="uf">Estado<span class="text-danger">*</span></label>
                        <select class="form-control" id="uf" name="uf">
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
            <input class="btn btn-success col-12 py-2" type="submit" value="Continuar">
            <!--        FIM DA COLUNA-->
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
//echo $mostraModal;
//session_start();
//echo isset($_SESSION['modal']) ? $_SESSION['modal'] : '';
//unset($_SESSION['modal']);
?>
</body>

</html>