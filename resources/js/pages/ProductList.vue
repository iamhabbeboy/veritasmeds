<template>
    <div>
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title"> Product List</h4>
                        <span class="box-controls pull-right">
                    <!-- <a href="#">view more</a> -->
                </span>
                    </div>
                    <div class="box-body">
                        <div v-if="products.length > 0">
                        <table class="table table-bordered text-center">
                            <tr>
                                <th>S/N.</th>
                                <th>Picture</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Brand</th>
                                <th>Status</th>
                                <th>Date Created</th>
                                <th>Action</th>
                            </tr>
                            <tr v-for="(product, index) in products">
                                <td>{{index+1}}</td>
                                <td>
                                    <!-- {{product.has_picture}} -->
                                    <!-- {{product.has_picture[0] ? `<img src="/${product.has_picture[0]['filepath']}" >`: 'N/A'}} -->
                                    <span v-if="product.has_picture.length > 0">
                                        <img :src="'/'+product.has_picture[0]['filepath']" class="image">
                                    </span>
                                    <span v-else>
                                        N/A
                                    </span>
                                </td>
                                <td>{{product.has_category ? product.has_category.title: 'N/A'}}</td>
                                <td>{{product.title}}</td>
                                <td>{{product.description.substring(0, 100)+'...'}}</td>
                                <td>{{product.quantity}}</td>
                                <td>{{product.has_brand ? product.has_brand.title: 'N/A'}}</td>
                                <td>
                                    <span v-if="product.product_status=='1'">
                                        <span class="badge badge-success">Enable</span>
                                    </span>
                                    <span v-else>
                                        <span class="badge badge-danger">Disable</span>
                                    </span>
                                </td>
                                <td>{{product.created_at}}</td>
                                <td>
                                    <router-link :to="{ name: 'AddProduct', params: {id: product.id }}" class="text-green"><i class="fa fa-edit"></i></router-link> &nbsp;
                                    <a href="javascript:void(0)" class="text-red"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div v-else>
                        <h3>No Product Available </h3>
                    </div>
                    
                     
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>
<script>
import { mapState } from 'vuex';
export default {
    name: 'ProductList',
    data() {
        return {
            loading: false
        }
    },
    async mounted() {
        this.$store.dispatch('loadproduct');
    },
    computed: mapState([
        'products'
    ]),
    methods: {

    }
}

</script>
<style lang="scss">
.image-custom {
    max-width: 100%;
    width: 30px;
}
.text-red {
    color: rgba(red, 0.6);
}
</style>
