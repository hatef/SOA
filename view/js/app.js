(function(){
    var myApp=angular.module('myApp',[]);
    myApp.controller('MainController',function($scope,$http){

        var url="/app/content/index.php";
        $http.get(url).success(function(response){
            $scope.contents=response;
        });



    });
    myApp.controller("CreateController",function($scope,$http){
        $scope.create=function(){
           uri="/app/content/create.php";
            var content={
                subject: $scope.form.subject,
                content: $scope.form.content
            };
            $http({
                method: "POST",
                url: uri,
                data: content,
                headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
            }).success(function(data){
                    console.log(data);
            });
        };
    });

    myApp.controller("LoginController",function($scope,$http){
        $scope.login=function(){
            uri="/app/auth/login.php";
            var loginData={
                email: $scope.loginForm.email,
                password: $scope.loginForm.password
            };
            $http({
                method: "POST",
                url: uri,
                data: loginData,
                headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
            }).success(function(data){
                console.log(data);
            });
        };
    });
})();