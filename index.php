<!DOCHTMl html>
<html ng-app="myApp">
<head>
    <title>dsfds</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular.min.js"></script>
    <script src="client/app.js"></script>
</head>
<body ng-controller="namesCtrl">


    <?php include './server/services/actions.php';?>

    <h1>{{food.apple}}</h1>
    <h1>{{apple}}</h1>
    <h1>{{names[0].name}}</h1>


</body>
</html>