<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
    <script src="https://kit.fontawesome.com/7767dc31b8.js"></script>
    <script src="../utils/js/jquery.mask.js"></script>
    <script src="../utils/js/InputMasks.js"></script>
</head>
<body>
<div class="container">
    <form action="." method="post">
        <table class="table table-striped">
            <tbody>
            <tr>
                <td colspan="1">
                    <fieldset>
                        <div class="well form-horizontal">
                            <div class="text-center" >
                                <h3>Dados Pessoais</h3>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nome</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i class="fas fa-user"></i></span><input
                                                id="fullName" name="fullName" placeholder="Nome Completo"
                                                class="form-control" required="true" value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Data de Nascimento</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                    class="fas fa-calendar-alt"></i></span><input
                                                id="nascimento" name="nascimento" placeholder="DD/MM/AAAA"
                                                class="form-control" required="true" value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Telefone</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                    class="fas fa-phone"></i></span><input
                                                id="phoneNumber"
                                                name="phoneNumber"
                                                placeholder="Phone Number"
                                                class="form-control"
                                                required="false"
                                                value=""
                                                type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Celular</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                    class="fas fa-mobile-alt"></i></span><input
                                                id="celNumber"
                                                name="celNumber"
                                                placeholder="Phone Number"
                                                class="form-control"
                                                required="false"
                                                value=""
                                                type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">CEP</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                    class="fas fa-envelope"></i></span><input id="cep" name="cep"
                                                                                              placeholder="CEP"
                                                                                              class="form-control"
                                                                                              required="true" value=""
                                                                                              type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Endereço</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                    class="fas fa-map-marker-alt"></i></span><input id="endereco"
                                                                                                    name="endereco"
                                                                                                    placeholder="Endereço"
                                                                                                    class="form-control"
                                                                                                    required="true"
                                                                                                    value=""
                                                                                                    type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Numero</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                    class="fas fa-map-marker-alt"></i></span><input id="numero"
                                                                                                    name="numero"
                                                                                                    placeholder="Número"
                                                                                                    class="form-control"
                                                                                                    required="true"
                                                                                                    value=""
                                                                                                    type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Complemento</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                    class="fas fa-map-marker-alt"></i></span><input id="complemento"
                                                                                                    name="complemento"
                                                                                                    placeholder="Complemento"
                                                                                                    class="form-control"
                                                                                                    required="false"
                                                                                                    value=""
                                                                                                    type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Cidade</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                    class="fas fa-building"></i></span><input id="cidade" name="cidade"
                                                                                              placeholder="Cidade"
                                                                                              class="form-control"
                                                                                              required="true" value=""
                                                                                              type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Estado/UF</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i class="fas fa-flag"></i></span><input
                                                id="uf" name="uf" placeholder="Estado/UF" class="form-control"
                                                required="true" value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Country</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="max-width: 100%;"><i
                                                    class="glyphicon glyphicon-list"></i></span>
                                        <select class="selectpicker form-control">
                                            <option>A really long option to push the menu over the edget</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    </fieldset>
                </td>
            </tr>

</div>

<div class="well form-horizontal">
<tr></tr>
        <div class="text-center">
            <h3>Cadastro</h3>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">E-mail</label>
            <div class="col-md-8 inputGroupContainer">
                <div class="input-group"><span class="input-group-addon"><i
                                class="fas fa-at"></i></span><input id="email" name="email"
                                                                    placeholder="E-mail"
                                                                    class="form-control"
                                                                    required="true"
                                                                    value="" type="email    ">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Confirmar E-mail</label>
            <div class="col-md-8 inputGroupContainer">
                <div class="input-group"><span class="input-group-addon"><i
                                class="fas fa-check"></i></span><input id="emailconfirm"
                                                                       name="emailconfirm"
                                                                       placeholder="Confirme o E-mail"
                                                                       class="form-control"
                                                                       required="true" value=""
                                                                       type="email">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Senha</label>
            <div class="col-md-8 inputGroupContainer">
                <div class="input-group"><span class="input-group-addon"><i
                                class="fas fa-key"></i></span><input id="password" name="password"
                                                                     placeholder="Senha"
                                                                     class="form-control"
                                                                     required="true" value=""
                                                                     type="password">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Confirmar Senha</label>
            <div class="col-md-8 inputGroupContainer">
                <div class="input-group"><span class="input-group-addon"><i
                                class="fas fa-check"></i></span><input id="passwordconfirm"
                                                                       name="passwordconfirm"
                                                                       placeholder="Confirme a Senha"
                                                                       class="form-control"
                                                                       required="true" value=""
                                                                       type="password">
                </div>
            </div>
        </div>
        <div class="form-group pull-right">
            <input class="btn btn-danger" type="reset" value="Limpar">

            <input class="btn btn-info" type="submit" value="Enviar">
        </div>
</div>
</tr>
</div>
<td colspan="1">
    <fieldset>
        <div class="position-fixed">
            <p>Envie-nos seu curriculo para que possamos análisar melhor sua candidatura.<br></p>
            <ul>
                <li>Envie seu curriculo como documento Word ou PDF.</li>
                <li>Lembre-se de colocar informações importantes.</li>
            </ul>
            <p>Boa Sorte!</p>
            <input class="btn btn-info" id="cv" name="cv"
                   type="file"
                   accept=".doc,.docx,.odt,.pdf, .txt" value="">
        </div>
    </fieldset>
</td>

</tbody>
</table>
</form>
</div>
</body>
</html>