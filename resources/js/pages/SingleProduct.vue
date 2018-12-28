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
                        
                     
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>
<script>
import { mapState } from 'vuex';
import swal from 'sweetalert';
export default {
    name: 'SingleProduct',
    data() {
        return {
            loading: false
        }
    },
    async mounted() {
        // this.$store.dispatch('loadproduct');
    },
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
