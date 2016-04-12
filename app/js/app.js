(function(){
    var myApp=angular.module('myApp',[]);
    myApp.controller('MainController',function(){
        this.products=gems;
        this.tab=1;
        this.Tab=function(setTab){
            this.tab= setTab;
        };
        this.isSetTab=function(ist){
            return this.tab==ist
        };
        this.process=function(){
          alert("Hello");
        };
    });
    var gems=[
        {
            name:"Dodecahedron",
            price: 2.95,
            description:".....",
            canPurchase:true,
        },
        {
            name:"Pentagonal Gem",
            price: 5.95,
            description:".....",
            canPurchase:"disabled",
        }
    ]
})();