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
            define('CLASS_DIR', 'src/');
            set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
            spl_autoload_register();

            use \CAB\Classes\PessoaJuridica;
            use \CAB\Classes\PessoaFisica;

            $pessoa1 = new \CAB\Classes\PessoaFisica();
            $pessoa1->setNome("Cesar Balbinott")
                    ->setEndereco("Rua Andre Lunardi, 1291")
                    ->setCpf("009.735.829-67")
                    ->setRg("4.738.500-6")
                    ->setIdade(28)
                    ->setGrau(5)
                    ->setEnderecoCobranca("Rua 17");

            $pessoa2 = new CAB\Classes\PessoaJuridica();
            $pessoa2->setNome('Fusion Sistemas LTDA')
                    ->setEndereco('Rua Andre Lunardi, 1259')
                    ->setCnpj('00.000.000/0000-00')
                    ->setIe('255.255.255')
                ->setGrau(2)
                ->setEnderecoCobranca("Rua 81");

            $pessoa3 = new PessoaJuridica();
            $pessoa3->setNome('Empresa 1 LTDA')
                ->setEndereco('Rua Andre, 1259')
                ->setCnpj('00.000.000/1111-00')
                ->setIe('255.255.255')
                ->setGrau(2)
                ->setEnderecoCobranca("Rua 41");

            $pessoa4 = new PessoaJuridica();
            $pessoa4->setNome('Empresa 3 LTDA')
                ->setEndereco('Rua Lunardi, 1359')
                ->setCnpj('00.111.111/0000-00')
                ->setIe('255.255.255')
                ->setGrau(4)
                ->setEnderecoCobranca("Rua 31");

            $pessoa5 = new PessoaJuridica();
            $pessoa5->setNome('Fusion Sistemas 123 SA')
                ->setEndereco('Rua Castelo Branco, 12')
                ->setCnpj('00.000.000/0000-00')
                ->setIe('255.255.255')
                ->setGrau(3)
                ->setEnderecoCobranca("Rua 21");

            $pessoa6 = new PessoaFisica();
            $pessoa6->setNome("Marci de Sa")
                ->setEndereco("Avenida Brasil, 334")
                ->setCpf("009.546.229-67")
                ->setRg("4.238.333-6")
                ->setIdade(34)
                ->setGrau(4)
                ->setEnderecoCobranca("Rua 122");

            $pessoa7 = new PessoaFisica();
            $pessoa7->setNome("Fernando da Silva")
                ->setEndereco("Rua Barrao do Rio Branco, 1291")
                ->setCpf("009.722.829-67")
                ->setRg("4453.456-6")
                ->setIdade(45)
                ->setGrau(1)
                ->setEnderecoCobranca("Rua 11");

            $pessoa8 = new PessoaFisica();
            $pessoa8->setNome("Cesar da Silva")
                ->setEndereco("Rua 123, 1291")
                ->setCpf("009.222.829-67")
                ->setRg("3746438.500-6")
                ->setIdade(21)
                ->setGrau(1)
                ->setEnderecoCobranca("Rua 144");

            $pessoa9 = new PessoaFisica();
            $pessoa9->setNome("Eliza Samudio")
                ->setEndereco("Rua Andre Gomes, 342E")
                ->setCpf("009.735.829-67")
                ->setRg("989.3837487-0")
                ->setIdade(23)
                ->setGrau(2)
                ->setEnderecoCobranca("Rua 13");

            $pessoa10 = new PessoaFisica();
            $pessoa10->setNome("Joao de Sa")
                ->setEndereco("Rua Andre Lunardi, 15D")
                ->setCpf("334.332.829-43")
                ->setRg("5.123.500-6")
                ->setIdade(22)
                ->setGrau(3)
                ->setEnderecoCobranca("Rua 12");

            $pessoas = array($pessoa1, $pessoa2, $pessoa3, $pessoa4, $pessoa5, $pessoa6, $pessoa7, $pessoa8, $pessoa9, $pessoa10);
        ?>

        <div class="mdl-layout mdl-layout--fixed-header">
            <div class="mdl-layout__content">
                <div class="page-content">
                    <div ng-controller="CtrlPessoas">
                        <header class="mdl-layout__header">
                            <div class="mdl-layout__header-row">
                                <span class="mdl-layout-title">Cadastro de Clientes</span>
                                <div class="mdl-layout-spacer"></div>
                            </div>
                        </header>
                        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                            <thead>
                                <tr>
                                    <th class="mdl-data-table__cell--non-numeric">Nome</th>
                                    <th class="mdl-data-table__cell--non-numeric">Detalhes</th>
                                    <th class="mdl-data-table__cell--non-numeric">Tipo</th>
                                    <th class="mdl-data-table__cell--non-numeric">CPF/CNPJ</th>
                                    <th class="mdl-data-table__cell--non-numeric">RG/IE</th>
                                    <th class="mdl-data-table__cell--non-numeric">Endereço</th>
                                    <th class="mdl-data-table__cell--non-numeric">Idade</th>
                                    <th class="mdl-data-table__cell--non-numeric">Endereço de Cobrança</th>
                                    <th class="mdl-data-table__cell--non-numeric">Importância</th>
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
                                    <td class="mdl-data-table__cell--non-numeric" ng-show = "checado" >{{ pessoa.tipo }}</td>
                                    <td class="mdl-data-table__cell--non-numeric" ng-show = "checado" >{{ pessoa.cpf + pessoa.cnpj }}</td>
                                    <td class="mdl-data-table__cell--non-numeric" ng-show = "checado" >{{ pessoa.rg + pessoa.ie }}</td>
                                    <td class="mdl-data-table__cell--non-numeric" ng-show = "checado" >{{ pessoa.endereco }}</td>
                                    <td class="mdl-data-table__cell--non-numeric" ng-show = "checado" >{{ pessoa.idade }}</td>
                                    <td class="mdl-data-table__cell--non-numeric" ng-show = "checado" >{{ pessoa.endecobranca }}</td>
                                    <td class="mdl-data-table__cell--non-numeric" ng-show = "checado" >
                                        <div ng-controller="Repetir">
                                            <div><i class="material-icons" ng-repeat="a in range(pessoa.grau)">grade</i></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <h5>Ordenar por:
                    <select ng-model="campo.id">
                        <option value="">Selecione um campo</option>
                        <option value="nome">Nome</option>
                        <option value="endereco">Endereço</option>
                        <option value="cpf">CPF</option>
                        <option value="cnpj">CNPJ</option>
                        <option value="rg">RG</option>
                        <option value="ie">IE</option>
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
                .controller("Repetir", function TestCtrl($scope) {
                    $scope.range = function(n) {
                        return new Array(n);
                    };
                })
                .controller("CtrlPessoas", function($scope){
                    $scope.pessoas = <?php echo json_encode($pessoas); ?>
                });
        </script>
    </body>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</html>
