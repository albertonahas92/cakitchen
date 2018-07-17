var app =
    angular.module('caKitchenApp', ['angularUtils.directives.dirPagination', 'ngAnimate']);


app.controller('TableFilterController', function ($scope, $http, sharedProperties) {
    $http.get(base_url + "menu/loadItems?per_page=0").then(function (res, status, xhr) {


        $scope.data = res.data;
        $scope.base_url = base_url;

        $scope.addToCart =

            function (val) {
                sharedProperties.pushCart(val);
            }

        // pagination controls
        $scope.currentPage = 1;
        $scope.totalItems = $scope.data.length;
        $scope.entryLimit = 4; // items per page
        $scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);

    });
    $scope.f = {};
    $scope.list = true;
    $scope.setList = function (val) {
        $scope.list = val;
    }
    $scope.calories = "0-800";


    $scope.sortKey = 'id';

    var cat = window.location.href.split('=')[1];
    if (cat != null && cat != "") $scope.cat_id = cat;
    else
        $scope.cat_id = -1;

    $scope.selected = {};


    $scope.selectItem = function (item) {
        $scope.selected = item;
        $http.get(base_url + "menu/getItemIngrident?id=" + item.id).then(function (res, status, xhr) {
            $scope.selected.ingridents = res.data;
        });

        $http.get(base_url + "menu/getItemAttributes?id=" + item.id).then(function (res, status, xhr) {
            $scope.selected.attributes = res.data;
        });
    }

    $scope.catFilter = function (val) {

        return (val.cat_id == $scope.cat_id || $scope.cat_id == -1);

    };


    $scope.caloriesFilter = function (val) {

        var min = parseInt($scope.calories.split('-')[0]);
        var max = parseInt($scope.calories.split('-')[1]);
//console.log('min : '+min);console.log('max : '+max);
        return (val.calories <= max && val.calories >= min);

    }


    $scope.filter_by = function (field) {
        console.log(field);
        console.log($scope.g[field]);
        if ($scope.g[field] === '' || $scope.g[field] == -1) {
            delete $scope.f['__' + field];
            return;
        }
        $scope.f['__' + field] = true;
        $scope.data.forEach(function (v) {
            v['__' + field] = v[field] == $scope.g[field];
        })
    }

    $scope.setCat = function (id) {

        $scope.cat_id = id;

    }

    $scope.setCalories = function (input) {

        $scope.calories = $(input).val();

    }

})


    .filter('startFrom', function () {
        return function (input, start) {
            if (input) {
                start = +start;
                return input.slice(start);
            }
            return [];
        };
    }).directive('a', function () {
    return {
        restrict: 'E',
        link: function (scope, elem, attrs) {
            if (attrs.ngClick || attrs.href === '' || attrs.href === '#') {
                elem.on('click', function (e) {
                    e.preventDefault();
                });
            }
        }
    };
})

    .controller('ProgramPricingController', function ($scope, $http) {
        $http.get(base_url + "programs/loadPrograms").then(function (res, status, xhr) {


            $scope.data = res.data;
            $scope.base_url = base_url;

            $scope.selected = res.data[0].id;
            $scope.selectItem(res.data[0]);

        });

        $scope.list = true;
        $scope.setList = function (val) {
            $scope.list = val;
        }


        $scope.selected = {}

        $scope.pricing = {};

        $scope.selectItem = function (item) {
            // $scope.selected = item;
            $http.get(base_url + "programs/getProgramPricing?id=" + $scope.selected).then(function (res, status, xhr) {
                $scope.pricing = res.data;
            });


        }


        $scope.selectId = function (id) {
            // $scope.selected = item;
            $http.get(base_url + "programs/getProgramPricing?id=" + id).then(function (res, status, xhr) {
                $scope.pricing = res.data;
                $("html, body").animate({ scrollTop: $(document).height() }, "slow");
            });


        }


    })
    .controller('ProgramSingleController', function ($scope, $http) {


        var currentId = window.location.href.split('=')[1];

        $http.get(base_url + "programs/getProgram?id=" + currentId).then(function (res, status, xhr) {


            $scope.program = res.data;
            $scope.base_url = base_url;


        });


        $scope.meal = {
            1: "Breakfast",
            2: "Lunch",
            3: "Dinner",
            4: "Snack"
        }

        $http.get(base_url + "programs/getProgramPricing?id=" + currentId).then(function (res, status, xhr) {
            $scope.pricing = res.data;


            $scope.min = Math.min.apply(Math, res.data.map(function (item) {
                return item.weeks;
            }));

            $scope.max = Math.max.apply(Math, res.data.map(function (item) {
                return item.weeks;
            }));

        });

        $http.get(base_url + "programs/getProgramItems?id=" + currentId).then(function (res, status, xhr) {
            $scope.items = res.data;


        });


    })
    .controller('ProgramSingleController', function ($scope, $http) {


        var currentId = window.location.href.split('=')[1];

        $http.get(base_url + "programs/getProgram?id=" + currentId).then(function (res, status, xhr) {


            $scope.program = res.data;
            $scope.base_url = base_url;


        });


        $scope.meal = {
            1: "Breakfast",
            2: "Lunch",
            3: "Dinner",
            4: "Snack"
        }

        $http.get(base_url + "programs/getProgramPricing?id=" + currentId).then(function (res, status, xhr) {
            $scope.pricing = res.data;


            $scope.min = Math.min.apply(Math, res.data.map(function (item) {
                return item.weeks;
            }));

            $scope.max = Math.max.apply(Math, res.data.map(function (item) {
                return item.weeks;
            }));

        });

        $http.get(base_url + "programs/getProgramItems?id=" + currentId).then(function (res, status, xhr) {
            $scope.items = res.data;


        });


    })

    .controller('CartController', function ($scope, $http, sharedProperties) {

        $scope.cart = sharedProperties.getCart();

        $scope.remove = function (item) {
            var index = $scope.cart.indexOf(item);
            $scope.cart.splice(index, 1);
        }

        $scope.loaded = false;
        $scope.$watch('cart', function (newVal, oldVal) {

            if (newVal.length > 0 || loaded == true) {

                myFactory().saveItems(newVal);
            }
            loaded = true;


        }, true);


    }).service('sharedProperties', function () {
    var cart = new Array();

    return {
        getCart: function () {

            if (cart.length == 0 && localStorage != null && localStorage["_items"] != null) {
                cart = JSON.parse(localStorage["_items"]);
            }

            return cart;
        },
        setCart: function (value) {
            cart = value;
        },
        pushCart: function (value) {

            value.quantity = 1;
            cart.push(value);
        }
    };
})
    .factory('myFactory', myFactory);
;


function myFactory() {
    function saveItems(cart) {


        if (localStorage != null && JSON != null) {
            localStorage["_items"] = JSON.stringify(cart);
        }

    }

    //utility function
    function getFormData(data) {
        var unindexed_array = data;
        var indexed_array = {};

        $.map(unindexed_array, function(n, i) {
            indexed_array[n['name']] = n['value'];
        });

        return indexed_array;
    }

    return {
        saveItems: saveItems,
        getFormData:getFormData
    }
}
;