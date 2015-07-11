<html>
    <head>
        <title>Cadastro de Clientes</title>
        <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.indigo-pink.min.css">
        <script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
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

            $pessoas = array($pessoa1, $pessoa2, $pessoa3, $pessoa4, $pessoa5, $pessoa6, $pessoa7, $pessoa8, $pessoa9, $pessoa10);
        ?>

        <div class="mdl-layout mdl-layout--fixed-header">
            <div class="mdl-layout__content">
                <div class="page-content">
                    <div ng-controller="CtrlPessoas">

                        <header class="mdl-layout__header">
                            <div class="mdl-layout__header-row">
                                <!-- Title -->
                                <span class="mdl-layout-title">Cadastro de Clientes</span>
                                <!-- Add spacer, to align navigation to the right -->
                                <div class="mdl-layout-spacer"></div>
                                <!-- Navigation. We hide it in small screens. -->

                            </div>
                        </header>

                        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                            <thead>
                                <tr>
                                    <th class="mdl-data-table__cell--non-numeric">Nome</th>
                                    <th class="mdl-data-table__cell--non-numeric">Detalhes</th>
                                    <th class="mdl-data-table__cell--non-numeric">Idade</th>
                                    <th class="mdl-data-table__cell--non-numeric">CPF</th>
                                    <th class="mdl-data-table__cell--non-numeric">Endereço</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="pessoa in pessoas | orderBy:orderBy+campo.id">
                                    <td class="mdl-data-table__cell--non-numeric">{{ pessoa.nome }} </td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <div class="text-center">
                                            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for= {{$index}}>
                                                <input type="checkbox" id={{$index}} class="mdl-checkbox__input" ng-model="checado">
                                            </label>
                                        </div>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric" ng-show = "checado" >{{ pessoa.idade }}</td>
                                    <td class="mdl-data-table__cell--non-numeric" ng-show = "checado" >{{ pessoa.cpf }}</td>
                                    <td class="mdl-data-table__cell--non-numeric" ng-show = "checado" >{{ pessoa.endereco }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <h5>Ordenar por:
                    <select ng-model="campo.id">
                        <option value="">Selecione um campo</option>
                        <option value="nome">Nome</option>
                        <option value="idade">Idade</option>
                        <option value="cpf">CPF</option>
                        <option value="endereco">Endereço</option>
                    </select>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                        <input type="radio" id="option-1" class="mdl-radio__button" ng-model="orderBy" value="" name="radios"/>
                        <span class="mdl-radio__label">Crescente</span>
                    </label>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                        <input type="radio" id="option-2" class="mdl-radio__button" ng-model="orderBy" value="-" name="radios" />
                        <span class="mdl-radio__label">Decrescente</span>
                    </label>
                </h5>
            </div>
        </div>

        <script>
            angular
                .module("pessoas", [])
                .controller("CtrlPessoas", function($scope){
                    $scope.pessoas =
                        [
                            <?php foreach($pessoas as $pessoa){
                            echo json_encode($pessoa);
                            ?>,<?php } ?>
                        ]
                });
        </script>
    </body>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


</html>
