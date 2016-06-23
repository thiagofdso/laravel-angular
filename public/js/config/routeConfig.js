angular.module("listaTelefonica").config(function ($routeProvider) {
    $routeProvider.when("/contatos",{
        templateUrl: "view/contatos.html",
        controller: "listaTelefonicaCtrl",
        resolve:{
            contatos: function (Contato){
                return Contato.get();
            }
        }
    });
    $routeProvider.when("/novoContato",{
        templateUrl: "view/novoContato.html",
        controller: "novoContatoCtrl"
    });
    $routeProvider.otherwise({redirectTo:"/contatos"});
});
