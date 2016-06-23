        angular.module("listaTelefonica").controller("listaTelefonicaCtrl", function ($scope,Contato,contatos) {
            $scope.app = "Lista Telefonica";
            $scope.reverso = false;
            $scope.contatos=contatos.data;


            $scope.apagarContatos = function(contatos){
                $scope.counter=0;
                ids=contatos.filter(function(contact){
                    if(contact.selecionado)return contact;
                }).map(function(contact){
                    return contact.id;
                });
                ids.forEach(function(id,index,array){
                    if (index === array.length) {
                        $scope.deletando=false;
                    }

                    Contato.destroy(id).success(function(data) {
                        // if successful, we'll need to refresh the comment list
                        Contato.get().success(function(getData) {
                            $scope.contatos = getData;
                        }).error(function (data,status){
                            $scope.error = "Não foi possível carregar os dados";
                        });
                    });

                });



            };

            $scope.isContatoSelecionado = function (contatos) {
                return contatos.some(function (contato) {
                    return contato.selecionado;
                });
            };
            $scope.ordenarPor = function(campo) {
                if ($scope.criterioDeOrdenacao == campo) {
                    $scope.reverso = !$scope.reverso;
                }else{
                    $scope.reverso = false;
                }
                $scope.criterioDeOrdenacao = campo;

            };
        });