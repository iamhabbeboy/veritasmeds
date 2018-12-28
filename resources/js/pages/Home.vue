<template>
    <div>
        <div class="row">
            <card-component card-title="Product Sold" card-style="bg-primary" card-url="#" card-small-title="Total Amount Paid" card-amount="NGN 51,642"></card-component>
            <card-component card-title="Total Product" card-style="bg-info" card-url="#" card-small-title="Total Staff Available" card-amount="10"></card-component>
            <card-component card-title="Customer" card-style="bg-danger" card-url="#" card-small-title="Total payroll created by this user" card-amount="30"></card-component>
            <card-component card-title="Category" card-style="bg-success" card-url="#" card-small-title="click to create" card-amount="10"></card-component>
            <!-- /.col -->
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <search-component></search-component>
            </div>
            <div class="col-12 col-lg-6">
                <!-- AREA CHART -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Monthly Relationship</h4>
                        <span class="box-controls pull-right">
     				<a href="#">view more</a>
                </span>
                    </div>
                    <div class="box-body">
                        <div class="chart-responsive">
                            <div class="chart" id="bar-chart" style="height: 250px;"></div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
    </div>
</template>
<script>
export default {
    name: 'Home',
}

</script>
<style>
</style>
