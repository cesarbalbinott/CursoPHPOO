<html>
    <head>
        <title>Cadastro de Clientes</title>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    <body ng-app="pessoas">
        <?php
            require_once 'Cliente.php';
            $pessoa1 = new Cliente("Cesar Balbinott",28,"009.725.829-67","Rua Andre Lunardi, 1291");
            $pessoa2 = new Cliente("Marta da Silva",18,"623.555.786-55","Rua Ari Lunardi, 1231");
            $pessoa3 = new Cliente("Monica Fagundes",38,"009.375.232-98","Rua Sao Paulo, 324");
            $pessoa4 = new Cliente("Claudio Dias",34,"876.233.098-34","Av. Brasil, 2615");
            $pessoa5 = new Cliente("Marci de Sa",27,"654.983.122-87","Rua Treze de Maio, 435");
            $pessoa6 = new Cliente("Marcio Goncalves",32,"345.122.654-34","Rua Fidencio de Souza Melo, 3321");
            $pessoa7 = new Cliente("Paulo Silva",33,"456.554.223-98","Rua Atlanta, 554D");
            $pessoa8 = new Cliente("Maria Antonieta das Neves",44,"324.222.112-87","Av. Sao Paulo, 91");
            $pessoa9 = new Cliente("Artur Rei",54,"989.333.234-09","Av. Independencia, 912");
            $pessoa10 = new Cliente("Fatima Aparecida",14,"002.223.345-22","Rua 7 de Setembro, 1314E");
        ?>

        <div class="container">
            <div class="starter-template">
                <div class="row">
                    <div ng-controller="CtrlPessoas">

                        <h1 class="text-center">Cadastro de Clientes</h1>
                        <br>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th class="text-center">Detalhes</th>
                                    <th>Idade</th>
                                    <th>CPF</th>
                                    <th>Endereço</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="pessoa in pessoas | orderBy:orderBy+campo.id">
                                    <td >{{ pessoa.nome }} </td>
                                    <td><div class="text-center"><input type="checkbox" ng-model="checado"></div></td>
                                    <td ng-show = "checado" >{{ pessoa.idade }}</td>
                                    <td ng-show = "checado" >{{ pessoa.cpf }}</td>
                                    <td ng-show = "checado" >{{ pessoa.endereco }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <h3>Ordenar por:
                    <select ng-model="campo.id">
                        <option value="">Selecione um campo</option>
                        <option value="nome">Nome</option>
                        <option value="idade">Idade</option>
                        <option value="cpf">CPF</option>
                        <option value="endereco">Endereço</option>
                    </select>
                    <input type="radio" ng-model="orderBy" value="" /> Crescente
                    <input type="radio" ng-model="orderBy" value="-" /> Decrescente
                </h3>
            </div>
        </div>

        <script>
            angular
                .module("pessoas", [])
                .controller("CtrlPessoas", function($scope){
                    $scope.pessoas =
                        [
                            <?php echo json_encode($pessoa1); ?>,
                            <?php echo json_encode($pessoa2); ?>,
                            <?php echo json_encode($pessoa3); ?>,
                            <?php echo json_encode($pessoa4); ?>,
                            <?php echo json_encode($pessoa5); ?>,
                            <?php echo json_encode($pessoa6); ?>,
                            <?php echo json_encode($pessoa7); ?>,
                            <?php echo json_encode($pessoa8); ?>,
                            <?php echo json_encode($pessoa9); ?>,
                            <?php echo json_encode($pessoa10); ?>
                        ]
                });
        </script>
    </body>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</html>
