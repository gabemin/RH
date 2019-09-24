<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container bg-light">
    <div class="text-left text-info p-3"><h1>Cadastro de vagas</h1></div>
    <hr>


    <div class="row">

    </div>












    <div class="col-md-12 mx-auto text-center pt-3">
        <form action="." method="post">
            <div class="col-md-4 p-2">
                <div class="form-group">
                    <input class="form-control" name="titulo" id="titulo" type="text" placeholder="Título da vaga"
                           required>
                    <input class="form-control" name="qtdVagas" id="qtdVagas" type="number" value="1" required>
                </div>
            </div>

            <div class="col-md-6 p-2">
                <div class="form-group">
                <textarea class="form-control" name="descrição" id="descrição" cols="30" rows="10"
                          placeholder="Dê uma descrição para a vaga"></textarea>
                </div>
            </div>
            <div class="col-md-6 p-2">
                <div class="form-group">
                <textarea class="form-control" name="requisito" id="requisito" cols="30" rows="10"
                          placeholder="Defina os pré-requisitos da vaga"></textarea>
                </div>
            </div>


        </form>
    </div>
</div>
</body>
</html>
