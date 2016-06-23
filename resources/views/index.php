<html ng-app="listaTelefonica">
<head>
    <meta charset="UTF-8">
    <title> Lista Telefonica </title>
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/ui.css">
    <script src="lib/angular/angular.js"></script>
    <script src="lib/angular/angular-route.js"></script>
    <script src="lib/angular/angular-locale_pt-br.js"></script>
    <script src="lib/angular/angular-messages.js"></script>
    <script src="js/app.js"></script>
    <script src="js/controllers/listaTelefonicaCtrl.js"></script>
    <script src="js/controllers/novoContatoCtrl.js"></script>
    <script src="js/services/contatoService.js"></script>
    <script src="lib/serialGenerator/serialGenerator.js"></script>
    <script src="lib/ui/ui.js"></script>
    <script src="js/config/routeConfig.js"></script>
    <script src="js/filters/namefilter.js"></script>
    <script src="js/filters/elipsisFilter.js"></script>
    <script src="js/directives/uiAlertDirective.js"></script>
    <script src="js/directives/uiDateDirective.js"></script>
    <script src=" http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</head>
<body >
    <div class="jumbotron">
        <div ng-view></div>
    </div>
    <div ng-include="'view/footer.html'"></div>
</body>
</html>