<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/7767dc31b8.js"></script>
</head>
<body>
<div class="container">
    <form>
        <table class="table table-striped">
            <tbody>
            <tr>
                <td colspan="1">
                    <div class="well form-horizontal">
                        <fieldset>
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
                                    <div class="input-group"><span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span><input
                                                id="nascimento" name="nascimento" placeholder="DD/MM/AAAA"
                                                class="form-control" required="true" value="" type="date"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Phone Number</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-earphone"></i></span><input
                                                id="phoneNumber"
                                                name="phoneNumber"
                                                placeholder="Phone Number"
                                                class="form-control"
                                                required="true"
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
                                                                                              type="text"></div>
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
                    </div>
                    <div class="well form-horizontal">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label">E-mail</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                    class="fas fa-at"></i></span><input id="email" name="email"
                                                                                        placeholder="E-mail"
                                                                                        class="form-control"
                                                                                        required="true"
                                                                                        value="" type="text"></div>
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
                                                                                           type="text"></div>
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
                                                                                         type="text"></div>
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
                                                                                           type="text"></div>
                                </div>
                            </div>
                                <div class="form-group pull-right">
                                    <button class="btn btn-danger" id="btn">Limpar</button>
                                    <script>
                                        $("#btn").click(function () {
                                            $("#cv").val("")
                                        });
                                    </script>
                                    <input class="btn btn-info" type="submit" value="Enviar">
                                </div>


                        </fieldset>
                    </div>
                </td>
                <td colspan="1">
                    <div class="fixed-bottom">
                        <p>Envie-nos seu curriculo para que possamos análisar melhor sua candidatura.<br>
                            Lembre-se de enviar nos formatos de documento word ou pdf.
                        </p>
                        <input class="btn btn-info" id="cv" name="cv" placeholder="Selecione o arquivo do seu curriculo"
                               type="file"
                               accept=".doc,.docx,.odt,.pdf" value="">
                    </div>
                </td>
            </tr>
            </tbody>
            <form>
        </table>
</div>
</body>
</html>