var app=angular.module('myApp',[]);
app.controller('cont',function($scope){
	$scope.invoice={
		number:10,
		tax:14,
	items:[{
		description:"",
		quentity:10,
		cost:300

	}],
	};
  $scope.currency_symbol=[
  {

	name:'Indian Rupee',
	currency:'₹'
  },
  {
	name:'USD',
    currency:'$'
  },
  {
	name:'Euro',
	currency:'€'
  }
  ];
  $scope.addItem=function(){
	  $scope.invoice.items.push([{
		description:"description",
		quentity:1,
		cost:1

	}]);
  }
  $scope.removeItem = function(m){
	  $scope.invoice.items.splice($scope.invoice.items.indexOf(m),1);
		  }
	$scope.subTotal=function(){
		var total=0.0;
		angular.forEach($scope.invoice.items, function(item,key){
			total += item.quentity*item.cost;
		});
		return total;
	};
	$scope.calcuteTax=function(){
		return (($scope.subTotal()*$scope.invoice.tax)/100);
	};
	$scope.grandTotal= function(){
	return ($scope.subTotal()+$scope.calcuteTax());

	};
});
