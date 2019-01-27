<template>
    <aside class="main-sidebar">
        <section class="sidebar">
            <ul class="sidebar-menu" data-widget="tree">
                <li class="user-profile treeview">
                    <a href="javascript:void(0)">
                        <span style="color: #000">Welcome back, Admin</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <router-link to="/home">
                        <i class="fa fa-home"></i>
                        <span>Home</span>
                    </router-link>
                </li>
                <li class="header nav-small-cap">PRODUCT MANAGEMENT</li>
                </li>
                <li>
                    <router-link to="/panel/category">
                        <i class="fa fa-history"></i>
                        <span>Category</span>
                    </router-link>
                </li>
                <li>
                    <router-link to="/panel/add-product">
                        <i class="fa fa-plus-circle"></i>
                        <span>Add Product</span>
                    </router-link>
                </li>
                 <li>
                    <router-link to="/panel/product">
                        <i class="fa fa-table"></i>
                        <span>Product List</span>
                    </router-link>
                </li>

                <li class="header nav-small-cap">CUSTOMERS</li>
                <li class="">
                    <router-link to="/home/payroll">
                        <i class="fa fa-users"></i> <span>Registered Customer</span>
                    </router-link>
                </li>
                <li class="">
                    <router-link to="/home/payroll">
                        <i class="fa fa-table"></i> <span>Payment History</span>
                    </router-link>
                </li>
                <li class="header nav-small-cap">USER MANAGEMENT</li>
                 <li class="">
                    <a href="#">
                        <i class="fa fa-cog"></i> <span>Setting</span>
                    </a>
                </li>
                <li class="">
                    <a href="/logout">
                        <i class="fa fa-power-off"></i> <span>Logout</span>
                    </a>
                </li>
            </ul>
        </section>
    </aside>
</template>
<script>
export default {
    name: 'SideBar'
}

</script>
<style>
</style>
