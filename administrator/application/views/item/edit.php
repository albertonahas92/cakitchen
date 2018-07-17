<script type="text/javascript">
    base_url = '<?=base_url()?>';
</script>

<div class="row" xmlns:v-on="http://www.w3.org/1999/xhtml">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Item Edit</h3>
            </div>


            <?php echo form_open_multipart('item/edit/' . $item['id']); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <div class="form-group">
                            <p id="itemid" style="display: none;"><?php echo $item['id'] ?></p>
                            <input type="checkbox" name="is_featured"
                                   value="1" <?php echo($item['is_featured'] == 1 ? 'checked="checked"' : ''); ?>
                                   id='is_featured'/>
                            <label for="is_featured" class="control-label">Is Featured</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="title" class="control-label">Title</label>
                        <div class="form-group">
                            <input required  type="text" name="title"
                                   value="<?php echo($this->input->post('title') ? $this->input->post('title') : $item['title']); ?>"
                                   class="form-control" id="title"/>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="title" class="control-label">Image</label>
                        <img width="50" src="<?php echo site_url('/uploads/'.$item['image']); ?>" alt="">
                        <div class="form-group">
                            <input type="file" name="image" value=""
                                   class="form-control" id="image"/>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <label for="text" class="control-label">Text</label>
                        <div class="form-group">
                            <input type="text" name="text"
                                   value="<?php echo($this->input->post('text') ? $this->input->post('text') : $item['text']); ?>"
                                   class="form-control" id="text"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="sub_title" class="control-label">Sub Title</label>
                        <div class="form-group">
                            <input type="text" name="sub_title"
                                   value="<?php echo($this->input->post('sub_title') ? $this->input->post('sub_title') : $item['sub_title']); ?>"
                                   class="form-control" id="sub_title"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="serving_size" class="control-label">Serving Size</label>
                        <div class="form-group">
                            <input type="text" name="serving_size"
                                   value="<?php echo($this->input->post('serving_size') ? $this->input->post('serving_size') : $item['serving_size']); ?>"
                                   class="form-control" id="serving_size"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="serving_per_container" class="control-label">Serving Per Container</label>
                        <div class="form-group">
                            <input type="text" name="serving_per_container"
                                   value="<?php echo($this->input->post('serving_per_container') ? $this->input->post('serving_per_container') : $item['serving_per_container']); ?>"
                                   class="form-control" id="serving_per_container"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="calories" class="control-label">Calories</label>
                        <div class="form-group">
                            <input type="text" name="calories"
                                   value="<?php echo($this->input->post('calories') ? $this->input->post('calories') : $item['calories']); ?>"
                                   class="form-control" id="calories"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="calories_from_fat" class="control-label">Calories From Fat</label>
                        <div class="form-group">
                            <input type="text" name="calories_from_fat"
                                   value="<?php echo($this->input->post('calories_from_fat') ? $this->input->post('calories_from_fat') : $item['calories_from_fat']); ?>"
                                   class="form-control" id="calories_from_fat"/>
                        </div>
                    </div>
 <div class="col-md-6">
                        <label for="cholesterol" class="control-label">Cholesterol</label>
                        <div class="form-group">
                            <input type="text" name="calories_from_fat"
                                   value="<?php echo($this->input->post('cholesterol') ? $this->input->post('cholesterol') : $item['cholesterol']); ?>"
                                   class="form-control" id="cholesterol"/>
                        </div>
                    </div>
 <div class="col-md-6">
                        <label for="Sodium" class="control-label">Sodium</label>
                        <div class="form-group">
                            <input type="text" name="calories_from_fat"
                                   value="<?php echo($this->input->post('Sodium') ? $this->input->post('Sodium') : $item['Sodium']); ?>"
                                   class="form-control" id="Sodium"/>
                        </div>
                    </div>
 <div class="col-md-6">
                        <label for="dietary_fiber" class="control-label">Dietary Fiber</label>
                        <div class="form-group">
                            <input type="text" name="calories_from_fat"
                                   value="<?php echo($this->input->post('dietary_fiber') ? $this->input->post('dietary_fiber') : $item['calories_from_fat']); ?>"
                                   class="form-control" id="dietary_fiber"/>
                        </div>
                    </div>
 <div class="col-md-6">
                        <label for="sugars" class="control-label">Sugars</label>
                        <div class="form-group">
                            <input type="text" name="calories_from_fat"
                                   value="<?php echo($this->input->post('sugars') ? $this->input->post('sugars') : $item['sugars']); ?>"
                                   class="form-control" id="sugars"/>
                        </div>
                    </div>
 <div class="col-md-6">
                        <label for="saturated_fat" class="control-label">Saturated Fat</label>
                        <div class="form-group">
                            <input type="text" name="calories_from_fat"
                                   value="<?php echo($this->input->post('saturated_fat') ? $this->input->post('saturated_fat') : $item['saturated_fat']); ?>"
                                   class="form-control" id="saturated_fat"/>
                        </div>
                    </div>
 <div class="col-md-6">
                        <label for="trans_fat" class="control-label">Trans Fat</label>
                        <div class="form-group">
                            <input type="text" name="calories_from_fat"
                                   value="<?php echo($this->input->post('trans_fat') ? $this->input->post('trans_fat') : $item['trans_fat']); ?>"
                                   class="form-control" id="trans_fat"/>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="fat" class="control-label">Fat</label>
                        <div class="form-group">
                            <input type="text" name="fat" value="<?php echo($this->input->post('fat') ? $this->input->post('fat') : $item['fat']); ?>"
                                   class="form-control" id="fat"/>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="carbohydrates" class="control-label">Carbohydrates</label>
                        <div class="form-group">
                            <input type="text" name="carbohydrates"
                                   value="<?php echo($this->input->post('carbohydrates') ? $this->input->post('carbohydrates') : $item['carbohydrates']); ?>"
                                   class="form-control" id="carbohydrates"/>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <label for="proteins" class="control-label">Proteins</label>
                        <div class="form-group">
                            <input type="text" name="proteins" value="<?php echo($this->input->post('proteins') ? $this->input->post('proteins') : $item['proteins']); ?>"
                                   class="form-control" id="proteins"/>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <label for="calories_from_fat" class="control-label">Category</label>
                          <div class="form-group">
                            <select name="cat_id" class="form-control">

                                <option value="<?php $item['cat_id'] ?>">select Category</option>
                                <?php
                                foreach ($all_categories as $cateogry) {
                                    $selected = ($cateogry['id'] == $item['cat_id']) ? ' selected="selected"' : "";

                                    echo '<option value="' . $cateogry['id'] . '" ' . $selected . '>' . $cateogry['title'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">

                <div class="form-group">
                    <label for="price" class="control-label">Price</label>
                    <div class="input-group"><span class="input-group-addon">LBP</span>
                        <input type="text" name="price" value="<?php echo($this->input->post('price') ? $this->input->post('price') : $item['price']); ?>"
                               class="form-control" id="price"/></div>
                </div>
            </div>


<div class="box-body">
                <div class="row clearfix">


                    <div class="container">
                        <header class="page-header">
                            <div class="branding">
                               Categories (tags)
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

                                <input type="hidden" name="cats" v-model="categories"/>
                             

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
                            <form id="categoryForm" class=" col-md-10" v-on:submit="createCategory">
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

                             
                                <button type="submit"  class="btn btn-primary">Create</button>
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
   <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.js'></script>
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue-router/2.2.1/vue-router.js'></script>
              
                    <script src="<?php echo site_url('resources/js/codpen.js'); ?>"></script>
      <script>

$("#categoryForm").submit(function(e){
alert("submit");
 e.preventDefault();
});
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

        

            <div class="box-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Save
                </button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>