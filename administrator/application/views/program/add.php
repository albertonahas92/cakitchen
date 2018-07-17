<div class="row" xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Program Add</h3>
            </div>
            <?php echo form_open_multipart('program/add'); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="title" class="control-label"><span class="text-danger">*</span>Title</label>
                        <div class="form-group">
                            <input type="text" name="title" value="<?php echo $this->input->post('title'); ?>"
                                   class="form-control" id="title"/>
                            <span class="text-danger"><?php echo form_error('title'); ?></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="goal" class="control-label">Main Goal</label>
                        <div class="form-group">
                            <input type="goal" name="goal" value="<?php echo $this->input->post('goal'); ?>"
                                   class="form-control" id="goal"/>
                            <span class="goal-danger"><?php echo form_error('goal'); ?></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="text" class="control-label">Female Calories</label>
                        <div class="form-group">
                            <input type="text" name="female_calories"
                                   value="<?php echo $this->input->post('female_calories'); ?>" class="form-control"
                                   id="female_calories"/>
                            <span class="text-danger"><?php echo form_error('female_calories'); ?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="male_calories" class="control-label">Male Calories</label>
                        <div class="form-group">
                            <input type="male_calories" name="male_calories"
                                   value="<?php echo $this->input->post('male_calories'); ?>" class="form-control"
                                   id="male_calories"/>
                            <span class="male_calories-danger"><?php echo form_error('male_calories'); ?></span>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <label for="text" class="control-label">Text</label>
                        <div class="form-group">
                            <input type="text" name="text" value="<?php echo $this->input->post('text'); ?>"
                                   class="form-control" id="text"/>
                            <span class="text-danger"><?php echo form_error('text'); ?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="image" class="control-label">Image</label>
                        <!-- image-preview-filename input [CUT FROM HERE]-->
                        <div class="input-group image-preview">
                            <input type="text" class="form-control image-preview-filename" disabled="disabled">
                            <!-- don't give a name === doesn't send on POST/GET -->
                            <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                                <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="image" id="image"/>
                        <!-- rename it -->
                    </div>
                </span>
                        </div><!-- /input-group image-preview [TO HERE]-->

                    </div>



                    <div class="col-md-6">
                        <label for="icon" class="control-label">Icon</label>

                        <input type="file" name="icon" id="icon">
                        <!-- image-preview-input -->

                    </div>

                </div>
            </div>


            <div class="box-body">

                <div class="row clearfix">

                    <div class="col-md-10">
                        <table cellspacing="5" class="table table-bordered table-striped" id="pricing"></table>

                    </div>


                </div>
                <input type="hidden" id="pricings" name="pricings"/>

                <script src="<?php echo site_url('resources/js/jquery.dynamicTable-1.0.0.js'); ?>"></script>
                <script>

                    $(function () {
                        $("#pricing").dynamicTable({
                            columns: [{
                                text: "price",
                                key: "price"
                            },
                                {
                                    text: "weeks",
                                    key: "weeks"
                                },
                                {
                                    text: "text",
                                    key: "text"
                                },

                            ],

                        });

                        $('#btnGetData').click(function () {
                            var data = $("#pricing").getTableData();
                            console.log(data);
                        });
                    });


                    $('form').submit(function () {

                        $('#pricings').val(JSON.stringify($('#pricing').getTableData()));

                        return true; // return false to cancel form action
                    });

                </script>


            </div>


            <div class="box-body">
                <div class="row clearfix">


                    <div class="container">
                        <header class="page-header">
                            <div class="branding">
                                Program Items
                            </div>
                        </header>
                        <main id="app">
                            <router-view></router-view>
                        </main>
                    </div>

                    <template id="product-list">
                        <div>
                            <div class="actions">
                                <router-link class="btn btn-default" v-bind:to="{path: '/add-product'}">
                                    <span class="glyphicon glyphicon-plus"></span>
                                    Add Program Item
                                </router-link>
                            </div>
                            <div class="filters row">
                                <div class="form-group col-sm-3">
                                    <label for="search-element">Item Name</label>
                                    <input v-model="searchKey" class="form-control" id="search-element" requred/>
                                </div>

                                <input type="hidden" name="products" v-model="products"/>
                                <input type="hidden" id="ingridents" name="ingridents"/>

                            </div>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Name</th>

                                    <th>Day</th>
                                    <th>Meal</th>
                                    <th class="col-sm-2">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="product in filteredProducts">
                                    <td>
                                        <router-link v-bind:to="{name: 'product', params: {product_id: product.id}}">{{
                                            product.title }}
                                        </router-link>
                                    </td>

                                    <td>
                                        {{ product.day }}

                                    </td>

                                    <td>
                                        {{ product.meal }}

                                    </td>

                                    <td>
                                        <router-link class="btn btn-warning btn-xs"
                                                     v-bind:to="{name: 'product-edit', params: {product_id: product.id}}">
                                            Edit
                                        </router-link>
                                        <router-link class="btn btn-danger btn-xs"
                                                     v-bind:to="{name: 'product-delete', params: {product_id: product.id}}">
                                            Delete
                                        </router-link>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </template>

                    <template id="add-product">
                        <div>
                            <h2>Add Program Menu Item</h2>
                            <form class=" col-md-10" v-on:submit="createProduct">
                                <div class="form-group ">

                                    <input class="form-control" type="hidden" id="add-id" v-model="product.id"
                                           required/>


                                    <label class="control-lable" style="color: #fff;">Item Name</label>
                                    <input style="height:70px;position: relative;" type="text" autocomplete="off"
                                           name="country" class="form-control" id="add-name" v-model="product.title"
                                           required
                                           placeholder="Item Name">
                                    <ul class="dropdown-menu txtcountry"
                                        style="margin-left:15px;margin-right:0px;position: absolute;top: 100px;"
                                        role="menu" aria-labelledby="dropdownMenu" id="DropdownCountry"></ul>


                                </div>

                                <div class="form-group">
                                    <label for="add-price">Day </label>
                                <select v-model="product.day" class="form-control" id="add-day">
                                    <option v-for="option in dayOptions"  v-bind:value="option.value">
                                        {{ option.text }}
                                    </option>
                                </select>
                                </div>

                                <div class="form-group">
                                    <label for="add-price">Meal </label>
                                    <select v-model="product.meal" class="form-control" id="add-meal">
                                        <option v-for="option in mealOptions"  v-bind:value="option.value">
                                            {{ option.text }}
                                        </option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Create</button>
                                <router-link class="btn btn-default" v-bind:to="'/'">Cancel</router-link>
                            </form>
                        </div>
                    </template>

                    <template id="product">
                        <div>
                            <h2>{{ product.title }}</h2>
                            <b>Description: </b>
                            <div>{{ product.meal }}</div>
                            <b>Price:</b>
                            <div>{{ product.day }}</div>
                            <br/>
                            <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
                            <router-link v-bind:to="'/'">Back to Items list</router-link>
                        </div>
                    </template>

                    <template id="product-edit">
                        <div>
                            <h2>Edit product</h2>
                            <form v-on:submit="updateProduct">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="edit-name">{{ product.title }}</label>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="edit-day">Day </label>
                                    <select v-model="product.day" class="form-control" id="edit-day">
                                        <option v-for="option in dayOptions"  v-bind:value="option.value">
                                            {{ option.text }}
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="edit-price">Meal </label>
                                    <select v-model="product.meal" class="form-control" id="edit-meal">
                                        <option v-for="option in mealOptions" v-bind:value="option.value">
                                            {{ option.text }}
                                        </option>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <router-link class="btn btn-default" v-bind:to="'/'">Cancel</router-link>
                                </div>
                            </form>
                        </div>
                    </template>

                    <template id="product-delete">
                        <div>
                            <h2>Delete Item {{ product.title }}</h2>
                            <form v-on:submit="deleteProduct">
                                <p>The action cannot be undone.</p>
                                <button type="submit" class="btn btn-danger">Delete</button>
                                <router-link class="btn btn-default" v-bind:to="'/'">Cancel</router-link>
                            </form>
                        </div>
                    </template>

                    <script src="<?php echo site_url('resources/js/codpen.js'); ?>"></script>

                    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.js'></script>
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue-router/2.2.1/vue-router.js'></script>
                    <script>

                        window.readyHandlers = [];
                        window.ready = function ready(handler) {
                            window.readyHandlers.push(handler);
                            handleState();
                        };

                        window.handleState = function handleState() {
                            if (['interactive', 'complete'].indexOf(document.readyState) > -1) {
                                while (window.readyHandlers.length > 0) {
                                    (window.readyHandlers.shift())();
                                }
                            }
                        };

                        document.onreadystatechange = window.handleState;


                        var products = new Array();


                        function findProduct(productId) {
                            return products[findProductKey(productId)];
                        };

                        function findProductKey(productId) {
                            for (var key = 0; key < products.length; key++) {
                                if (window.CP.shouldStopExecution(1)) {
                                    break;
                                }
                                if (products[key].id == productId) {
                                    return key;
                                }
                            }
                            window.CP.exitedLoop(1);

                        };
                        var loaded = false;
                        var List = Vue.extend({
                            template: '#product-list',
                            data: function () {
                                return {products: products, searchKey: ''};
                            },
                            computed: {
                                filteredProducts: function () {
                                    return this.products.filter(function (product) {
                                        return this.searchKey == '' || product.title.indexOf(this.searchKey) !== -1;
                                    }, this);
                                }
                            }

                        });

                        var Product = Vue.extend({
                            template: '#product',
                            data: function () {
                                return {product: findProduct(this.$route.params.product_id)};
                            }
                        });

                        var ProductEdit = Vue.extend({
                            template: '#product-edit',
                            data: function () {
                                return {
                                    product: findProduct(this.$route.params.product_id)

                                    ,

                                    dayOptions: [
                                        {text: 'Day 1', value: '1'},
                                        {text: 'Day 2', value: '2'},
                                        {text: 'Day 3', value: '3'},
                                        {text: 'Day 4', value: '4'},
                                        {text: 'Day 5', value: '1'},
                                        {text: 'Day 6', value: '2'},
                                        {text: 'Day 7', value: '3'},
                                        {text: 'Day 8', value: '4'},
                                        {text: 'Day 9', value: '1'},
                                        {text: 'Day 10', value: '2'},
                                        {text: 'Day 11', value: '3'},
                                        {text: 'Day 12', value: '4'},
                                        {text: 'Day 13', value: '1'},
                                        {text: 'Day 14', value: '2'},
                                        {text: 'Day 15', value: '3'},
                                        {text: 'Day 16', value: '4'},
                                        {text: 'Day 17', value: '1'},
                                        {text: 'Day 18', value: '2'},
                                        {text: 'Day 19', value: '3'},
                                        {text: 'Day 20', value: '4'},
                                    
                                        {text: 'Day 21', value: '3'},
                                        {text: 'Day 22', value: '4'},
                                        {text: 'Day 23', value: '1'},
                                        {text: 'Day 24', value: '2'},
                                        {text: 'Day 25', value: '3'},
                                        {text: 'Day 26', value: '4'},
                                        {text: 'Day 27', value: '1'},
                                        {text: 'Day 28', value: '2'},
                                        {text: 'Day 29', value: '3'},
                                        {text: 'Day 30', value: '4'}],
                                        
                                    
                                    mealOptions: 
                                        {text: 'Breafast', value: '1'},
                                        {text: 'Dinnr', value: '2'},
                                        {text: 'Lunch', value: '3'},
                                        {text: 'Snack', value: '4'}]

                                }



                            }



                            ,
                            methods: {
                                updateProduct: function () {
                                    var product = this.product;
                                    products[findProductKey(product.id)] = {
                                        id: product.id,
                                        title: product.title,
                                        meal: product.meal,
                                        day: product.day
                                    };
                                    router.push('/');
                                }
                            }
                        });

                        var ProductDelete = Vue.extend({
                            template: '#product-delete',
                            data: function () {
                                return {product: findProduct(this.$route.params.product_id)};
                            },
                            methods: {
                                deleteProduct: function () {
                                    products.splice(findProductKey(this.$route.params.product_id), 1);
                                    router.push('/');
                                }
                            }
                        });

                        var AddProduct = Vue.extend({
                                template: '#add-product',
                                data: function () {
                                    return {
                                        product: {
                                            title: '', meal: '', day: '',


                                        },

                                        dayOptions: [
                                          {text: 'Day 1', value: '1'},
                                        {text: 'Day 2', value: '2'},
                                        {text: 'Day 3', value: '3'},
                                        {text: 'Day 4', value: '4'},
                                        {text: 'Day 5', value: '1'},
                                        {text: 'Day 6', value: '2'},
                                        {text: 'Day 7', value: '3'},
                                        {text: 'Day 8', value: '4'},
                                        {text: 'Day 9', value: '1'},
                                        {text: 'Day 10', value: '2'},
                                        {text: 'Day 11', value: '3'},
                                        {text: 'Day 12', value: '4'},
                                        {text: 'Day 13', value: '1'},
                                        {text: 'Day 14', value: '2'},
                                        {text: 'Day 15', value: '3'},
                                        {text: 'Day 16', value: '4'},
                                        {text: 'Day 17', value: '1'},
                                        {text: 'Day 18', value: '2'},
                                        {text: 'Day 19', value: '3'},
                                        {text: 'Day 20', value: '4'},
                                    
                                        {text: 'Day 21', value: '3'},
                                        {text: 'Day 22', value: '4'},
                                        {text: 'Day 23', value: '1'},
                                        {text: 'Day 24', value: '2'},
                                        {text: 'Day 25', value: '3'},
                                        {text: 'Day 26', value: '4'},
                                        {text: 'Day 27', value: '1'},
                                        {text: 'Day 28', value: '2'},
                                        {text: 'Day 29', value: '3'},
                                        {text: 'Day 30', value: '4'}]

                                    ,
                                        mealOptions: [
                                            {text: 'Breakfast', value: '1'},
                                            {text: 'Dinner', value: '2'},
                                            {text: 'Lunch', value: '3'},
                                            {text: 'Snack', value: '4'}]





                                }


                            },
                            mounted
                        :
                        function () {
                            initItemAutoComplete();
                        }

                        ,
                        methods: {
                            createProduct: function () {


                                if(this.product.id==null){
                                    swal("Menu item is missing","Define your item please");
                                    return ;
                                }
else {
                                    var product = this.product;
                                    products.push({
                                        id: product.id,
                                        title: product.title,
                                        meal: product.meal,
                                        day: product.day
                                    });
                                    router.push('/');
                                }
                            }
                        }
                        })
                        ;

                        var router = new VueRouter({
                            routes: [
                                {path: '/', component: List},
                                {path: '/product/:product_id', component: Product, name: 'product'},
                                {path: '/add-product', component: AddProduct},
                                {path: '/product/:product_id/edit', component: ProductEdit, name: 'product-edit'},
                                {path: '/product/:product_id/delete', component: ProductDelete, name: 'product-delete'}
                            ]
                        });
                        app = new Vue({
                            router: router
                        }).$mount('#app');
                        //# sourceURL=pen.js


                        function initItemAutoComplete() {
                            $("#add-name").keyup(function () {
                                $.ajax({
                                    type: "POST",
                                    url: "GetItemName",
                                    data: {
                                        keyword: $("#add-name").val()
                                    },
                                    dataType: "json",
                                    success: function (data) {
                                        if (data.length > 0) {
                                            $('#DropdownCountry').empty();
                                            $('#add-name').attr("data-toggle", "dropdown");
                                            $('#DropdownCountry').dropdown('toggle');
                                        }
                                        else if (data.length == 0) {
                                            $('#add-name').attr("data-toggle", "");
                                        }
                                        $.each(data, function (key, value) {
                                            if (data.length >= 0)
                                                $('#DropdownCountry').append('<li role="displayCountries" ><a role="menuitem dropdownCountryli" data-id=' + value['id'] + '  class="dropdownlivalue">' + value['title'] + '</a></li>');
                                        });
                                    }
                                });
                            });
                            $('ul.txtcountry').on('click', 'li a', function () {
                                //  $('#add-name').val($(this).text());
                                var $input = $('#add-name').val($(this).text());
                                var e = document.createEvent('HTMLEvents');
                                e.initEvent('input', true, true);
                                $input[0].dispatchEvent(e);


                                var $input2 = $('#add-id').val($(this).data('id'));
                                var e = document.createEvent('HTMLEvents');
                                e.initEvent('input', true, true);
                                $input2[0].dispatchEvent(e);

                                var $input3 = $('#add-meal').val($(this).data('meal'));
                                var e = document.createEvent('HTMLEvents');
                                e.initEvent('input', true, true);
                                $input3[0].dispatchEvent(e);
                            });
                        }


                    </script>


                </div>
            </div>


            <div class="box-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Save
                </button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>