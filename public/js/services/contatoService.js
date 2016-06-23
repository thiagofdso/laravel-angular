angular.module('contatoService', [])

    .factory('Contato', function($http) {

        return {
            // get all the comments
            get : function() {
                return $http.get('./api/contatos');
            },

            // save a comment (pass in comment data)
            save : function(contato) {
                return $http({
                    method: 'POST',
                    url: './api/contatos',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param(contato)
                });
            },

            // destroy a comment
            destroy : function(id) {
                return $http.delete('./api/contatos/' + id);
            }
        }

    });