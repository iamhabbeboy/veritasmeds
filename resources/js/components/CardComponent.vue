<template>
    <div class="col-xl-3 col-md-6 col-12">
        <div class="box box-body" :class="cardStyle">
            <h6>
                <span class="text-uppercase">{{cardTitle}}</span>
                <span class="float-right"><a class="btn btn-xs btn-warning" href="#">View</a></span>
              </h6>
            <div class="flexbox align-items-center">
                <div><small>{{cardSmallTitle}}</small>
                    <p class="font-size-26 mb-0">{{cardAmount}}</p>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'Card',
    props: {
    	cardTitle: String, 
    	cardStyle: String, 
    	cardUrl: String, 
    	cardSmallTitle: String, 
    	cardAmount: String,
    }
}

</script>
<style>
</style>
