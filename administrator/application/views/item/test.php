<div class="box-body">
                <div class="row clearfix">


                    <div class="container">
                        <header class="page-header">
                            <div class="branding">
                               Categories
                            </div>
                        </header>
                        <main id="app2">
                            <router-view></router-view>
                        </main>
                    </div>

                    <template id="category-list">
                        <div>
                            <div class="actions">
                                <router-link class="btn btn-default" v-bind:to="{path: '/add-category'}">
                                    <span class="glyphicon glyphicon-plus"></span>
                                    Add Category
                                </router-link>
                            </div>
                            <div class="filters row">
                                <div class="form-group col-sm-3">
                                    <label for="search-element">Category Name</label>
                                    <input v-model="searchKey" class="form-control" id="search-element" requred/>
                                </div>

                                <input type="hidden" name="cats" v-model="cats"/>
                             

                            </div>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Name</th>

                                
                                    <th class="col-sm-2">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="category in filteredCategories">
                                    <td>
                                        <router-link v-bind:to="{name: 'category', params: {category_id: category.id}}">{{
                                            category.title }}
                                        </router-link>
                                    </td>

                                  
                                    <td>
                                        <router-link class="btn btn-warning btn-xs"
                                                     v-bind:to="{name: 'category-edit', params: {category_id: category.id}}">
                                            Edit
                                        </router-link>
                                        <router-link class="btn btn-danger btn-xs"
                                                     v-bind:to="{name: 'category-delete', params: {category_id: category.id}}">
                                            Delete
                                        </router-link>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </template>

                    <template id="add-category">
                        <div>
                            <h2>Add Category</h2>
                            <form class=" col-md-10" v-on:submit="createCategory">
                                <div class="form-group ">

                                    <input class="form-control" type="hidden" id="add-cat-id" v-model="category.id"
                                           required/>
                                 

                                    <label class="control-lable" style="color: #fff;">Category Name</label>
                                    <input style="height:70px;position: relative;" type="text" autocomplete="off"
                                           name="country" class="form-control" id="add-cat-name" v-model="category.title"
                                           required
                                           placeholder="Category Name">
                                    <ul class="dropdown-menu txtcategory"
                                        style="margin-left:15px;margin-right:0px;position: absolute;top: 100px;"
                                        role="menu" aria-labelledby="dropdownMenu" id="DropdownCategory"></ul>


                                </div>

                             
                                <button type="submit" class="btn btn-primary">Create</button>
                                <router-link class="btn btn-default" v-bind:to="'/'">Cancel</router-link>
                            </form>
                        </div>
                    </template>

                    <template id="category">
                        <div>
                            <h2>{{ category.title }}</h2>
                            
                            <br/>
                            <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
                            <router-link v-bind:to="'/'">Back to category list</router-link>
                        </div>
                    </template>

                    <template id="category-edit">
                        <div>
                            <h2>Edit category</h2>
                            <form v-on:submit="updateCategory">
                                <div class="form-group">
                                    <label for="edit-name">{{ category.title }}</label>

                                </div>

                              
                                <button type="submit" class="btn btn-primary">Save</button>
                                <router-link class="btn btn-default" v-bind:to="'/'">Cancel</router-link>
                            </form>
                        </div>
                    </template>

                    <template id="category-delete">
                        <div>
                            <h2>Delete category {{ category.name }}</h2>
                            <form v-on:submit="deleteCategory">
                                <p>The action cannot be undone.</p>
                                <button type="submit" class="btn btn-danger">Delete</button>
                                <router-link class="btn btn-default" v-bind:to="'/'">Cancel</router-link>
                            </form>
                        </div>
                    </template>

                    <script src="<?php echo site_url('resources/js/codpen.js'); ?>"></script>
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


                        var categories = new Array();


                        function findCategory(categoryId) {
                            return categories[findCategoryKey(categoryId)];
                        };

                        function findCategoryKey(categoryId) {
                            for (var key = 0; key < categories.length; key++) {
                                if (window.CP.shouldStopExecution(1)) {
                                    break;
                                }
                                if (categories[key].id == categoryId) {
                                    return key;
                                }
                            }
                            window.CP.exitedLoop(1);

                        };
                        var loaded = false;
                        var List = Vue.extend({
                            template: '#category-list',
                            data: function () {
                                return {categories: categories, searchKey: ''};
                            },
                            computed: {
                                filteredCategories: function () {
                                    return this.categories.filter(function (category) {
                                        return this.searchKey == '' || category.title.indexOf(this.searchKey) !== -1;
                                    }, this);
                                }
                            },
                            mounted: function () {
                                var $self = this;

                                if (loaded == true) {

                                    $self.categories = categories;
                                    return;
                                }
                                ;
                                $.ajax({
                                    url: base_url + "Item/getItemCategories",
                                    method: 'POST',
                                    data: {
                                        "id": $('#itemid').html()
                                    },

                                    success: function (data) {

                                        $self.categories = JSON.parse(data); //aaa
                                        loaded = true;

                                        for (var j = 0; j < $self.categories.length; j++) {
                                            var obj = $self.categories[j];
                                            categories.push({
                                                id: obj.id,
                                                title: obj.title,
                                                unit: obj.unit,
                                                daily: obj.daily
                                            });
                                        }


                                    },
                                    error: function (error) {
                                        console.log(error);
                                    }
                                });

                            }

                        });

                        var Category = Vue.extend({
                            template: '#category',
                            data: function () {
                                return {category: findCategory(this.$route.params.category_id)};
                            }
                        });

                        var CategoryEdit = Vue.extend({
                            template: '#category-edit',
                            data: function () {
                                return {category: findCategory(this.$route.params.category_id)};
                            },
                            methods: {
                                updateCategory: function () {
                                    var category = this.category;
                                    categories[findCategoryKey(category.id)] = {
                                        id: category.id,
                                        title: category.title
                                     
                                    };
                                    router.push('/');
                                }
                            }
                        });

                        var CategoryDelete = Vue.extend({
                            template: '#category-delete',
                            data: function () {
                                return {category: findCategory(this.$route.params.category_id)};
                            },
                            methods: {
                                deleteCategory: function () {
                                    categories.splice(findCategoryKey(this.$route.params.category_id), 1);
                                    router.push('/');
                                }
                            }
                        });

                        var AddCategory = Vue.extend({
                            template: '#add-category',
                            data: function () {
                                return {category: {title: ''}}
                            },
                            mounted: function () {
                                initCategoryAutoComplete();
                            },
                            methods: {
                                createCategory: function () {
                                    var category = this.category;
                                    categories.push({
                                        id: category.id,
                                        title: category.title
                                    });
                                    router.push('/');
                                }
                            }
                        });

                        var router = new VueRouter({
                            routes: [
                                {path: '/', component: List},
                                {path: '/category/:category_id', component: Category, name: 'category'},
                                {path: '/add-category', component: AddCategory},
                                {path: '/category/:category_id/edit', component: CategoryEdit, name: 'category-edit'},
                                {path: '/category/:category_id/delete', component: CategoryDelete, name: 'category-delete'}
                            ]
                        });
                        app = new Vue({
                            router: router
                        }).$mount('#app2');
                        //# sourceURL=pen.js


                        function initCategoryAutoComplete() {
                            $("#add-cat-name").keyup(function () {
                                $.ajax({
                                    type: "POST",
                                    url: base_url + "Item/GetCategoryName",
                                    data: {
                                        keyword: $("#add-cat-name").val()
                                    },
                                    dataType: "json",
                                    success: function (data) {
                                        if (data.length > 0) {
                                            $('#DropdownCategory').empty();
                                            $('#add-cat-name').attr("data-toggle", "dropdown");
                                            $('#DropdownCategory').dropdown('toggle');
                                        }
                                        else if (data.length == 0) {
                                            $('#add-cat-name').attr("data-toggle", "");
                                        }
                                        $.each(data, function (key, value) {
                                            if (data.length >= 0)
                                                $('#DropdownCategory').append('<li role="displayCountries" ><a role="menuitem dropdownCountryli" data-id=' + value['id'] + ' data-unit=' + value['unit'] + ' class="dropdownlivalue">' + value['title'] + '</a></li>');
                                        });
                                    }
                                });
                            });
                            $('ul.txtcategory').on('click', 'li a', function () {
                                //  $('#add-cat-name').val($(this).text());
                                var $input = $('#add-cat-name').val($(this).text());
                                var e = document.createEvent('HTMLEvents');
                                e.initEvent('input', true, true);
                                $input[0].dispatchEvent(e);


                                var $input2 = $('#add-cat-id').val($(this).data('id'));
                                var e = document.createEvent('HTMLEvents');
                                e.initEvent('input', true, true);
                                $input2[0].dispatchEvent(e);

                             
                            });
                        }


                    
                    </script>


                </div>
            </div>