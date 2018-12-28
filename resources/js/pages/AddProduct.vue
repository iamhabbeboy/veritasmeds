<template>
    <div>
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title"> Add Product</h4>
                        <span class="box-controls pull-right">
                    <!-- <a href="#">view more</a> -->
                </span>
                    </div>
                    <div class="box-body">
                        <form method="post" @submit.prevent="submitProduct">
                            <div class="form-group">
                                <label>Category</label>
                                <div style="float:right;">
                                    <a href="javascript:void(0)" id="add-category" @click="modalEvt" data-id="category" class="font-size-12" style="color: #007bff;">Add New</a>
                                </div>
                                <select class="form-control" ref="category" required>
                                    <option value="">Select</option>
                                    <option v-for="category in categories" :value="category.id" :selected="products && category.id === products.category_id">{{category.title}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Brand Name</label>
                                <div style="float:right !important;">
                                    <a href="javascript:void(0)" @click="modalEvt" data-id="brand" class="font-size-12" style="color: #007bff;">Add New</a>
                                </div>
                                <select class="form-control" ref="brand" required>
                                    <option value="">select</option>
                                    <option v-for="brand in brands" :value="brand.id" :selected="products && brand.id === products.brand_id">{{brand.title}}</option>
                                </select>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" ref="product_title" required :value="products ? products.title : ''">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" ref="description" id="editor" required>{{ products ? products.description : '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" class="form-control" ref="price" name="" required :value="products ? products.price : ''">
                            </div>
                            <div class="form-group">
                                <label>Quantity in stock</label>
                                <input type="text" class="form-control" ref="quantity" required :value="products ? products.quantity : '0'">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" required="" ref="status">
                                    <option value="">select</option>
                                    <option value="1" :selected="products && products.product_status === '1'">Enable</option>
                                    <option value="0" :selected="products && products.product_status === '0'">Disable</option>
                                </select>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Pictures</label>
                                <p></p>
                                <button class="btn-primary btn-sm btn" @click="choosePhoto">
                                    Choose <i class="fa fa-photo"></i></button>
                                <p></p>
                                <img src="/images/drugs.png" class="image-custom" ref="placeholder"/>
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="file" name="photo[]" multiple="" ref="photo" style="visibility: hidden;" @change="upload" accept=".jpg,.jpeg,.png,.gif" required>
                                        <div ref="preview" id="preview"></div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <button class="btn btn-primary btn-lg">
                                    Submit <i class="fa fa-chevron-right"></i>
                                </button>
                                &nbsp;
                                <button class="btn btn-default btn-lg">
                                    Clear <i class="fa fa-minus-circle"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add New</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <label>Title</label>
                        <input class="form-control" type="text" ref="title">
                        <input type="hidden" ref="request_type" id="request-type">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" @click="saveModal" class="btn btn-primary float-right" id="category-form" :disabled="loading">Save changes <span v-if="loading"><i class="fa fa-cogs fa-spin"></i></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { mapState } from 'vuex';
import swal from 'sweetalert';
import http from '../http';
import helper from '../helper';
// import Quill from 'quill';
// import 'quill/dist/quill.snow.css';
export default {
    name: 'AddProduct',
    data() {
        return {
            loading: false,
            products: [],
            update: false,
        }
    },
    created() {},
    async mounted() {
        const id = this.$route.params.id || null;
        if (id !== null) {
            this.products = this.$store.getters.findProductById(id);
            this.update = true;
        }
        this.$store.dispatch('loadcategory')
        this.$store.dispatch('loadbrand')
    },
    computed: mapState([
        'categories',
        'brands'
    ]),
    methods: {
        modalEvt(e) {
            const attr = e.target.getAttribute('data-id');
            $('#request-type').val(attr);
            $('#modal-default').modal('show')
        },
        saveModal() {
            let title = this.$refs.title;
            let request = this.$refs.request_type;
            if (title.value === '') return title.focus();
            const datastring = { title: title.value, request: request.value };
            this.loading = true;
            this.$store.dispatch('saverequest', datastring)
                .then(() => {
                    this.loading = false;
                    swal('Notification', `${request.value} added successfully`, 'success');
                    $('#modal-default').modal('hide')
                    title.value = '';
                    request.value = '';
                })
        },
        submitProduct() {
            const category = this.$refs.category;
            const brand = this.$refs.brand;
            const title = this.$refs.product_title;
            const desc = this.$refs.description;
            const price = this.$refs.price;
            const qty = this.$refs.quantity;
            const status = this.$refs.status;
            const id = this.$route.params.id || null;

            const datastring = {
                id: id,
                category_id: category.value,
                brand_id: brand.value,
                title: title.value,
                description: desc.value,
                price: price.value,
                quantity: qty.value,
                product_status: status.value
            };
            this.$store.dispatch('storeproduct', datastring)
            .then((resp) => {
                swal('Notification', 'Product Added Successfully', 'success');
                this.$router.push('/panel/product');
            }).catch((err) => {
                swal('Notification', 'Error Occured while processing information', 'error');
            });
        },
        choosePhoto(e) {
            e.preventDefault();
            if (!window.URL) return swal('Notification', 'Please Upgrade your browser', 'error');
            this.$refs.photo.click();
        },
        upload(e) {
            let files = e.target.files;
            let file, len = files.length;
            let preview = this.$refs.preview;

            if (len > 4) return swal('Notification', 'Maximum Image Allowed is 4', 'error');
            this.$refs.placeholder.style.display = 'none';

            let formData = new FormData();
            for (file of files) {

                let filesize = Math.floor(file.size / 1000);
                if (filesize > 3045) return swal('Notification', 'Max Filesize is 3MB', 'error');
                const img = document.createElement('img');
                formData.append('file[]', file);

                img.src = window.URL.createObjectURL(file);
                img.className = 'image-custom';
                img.style.padding = '2px';
                img.style.border = '1px solid #ccc';
                img.style.width = '150px';
                img.style.height = '150px';
                img.style.marginLeft = '5px';
                preview.appendChild(img)
            }
            helper.storeFile(formData)
        }
        
    }
}

</script>
<style>
.image-custom {
    width: 100px;
    max-width: 100%;
    margin-top: 10px;
    opacity: 0.4;
    padding: 10px;
    /*border: 1px solid #ccc;*/
}

</style>
