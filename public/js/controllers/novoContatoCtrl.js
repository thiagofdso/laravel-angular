angular.module("listaTelefonica").controller("novoContatoCtrl", function ($scope,$location,Contato) {
    $scope.app = "Lista Telefonica";
    $scope.reverso = false;

    $scope.adicionarContato = function(){

        Contato.save($scope.contato)
            .success(function(data) {
                //delete $scope.contato;
                //$scope.contatoForm.$setPristine();
                // if successful, we'll need to refresh the comment list
                $location.path("/contatos");
            })
            .error(function(data) {
                console.log(data);
            });
    };
    $scope.voltar = function(){
        $location.path("/contatos");
    }

});