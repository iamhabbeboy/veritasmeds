<template>
    <div class="box">
        <div class="box-header with-border">
            <h4 class="box-title">Search</h4>
            <span class="box-controls pull-right">
              	<a href="#">Advance search</a>
              </span>
        </div>
        <div class="box-body">
            <form>
                <div class="form-group">
                    <label>Enter Your search query</label>
                    <input class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label>Payroll Date</label>
                    <input type="date" class="form-control" name="">
                </div>
                <p></p>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
        <!-- /.box-body -->
    </div>
</template>
<script>
export default {
    name: 'Search'
}

</script>
<style>
</style>
