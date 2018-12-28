@extends('layout.admin')
@section('content-body')
<div class="wrapper">

  <!--Navbar 🔥-->
  <nav-component></nav-component>

  <sidebar-component></sidebar-component>

  <div class="content-wrapper">

	<navbar-component></navbar-component>

  <section class="content">
	 <router-view></router-view>
	</section>

  </div>
  <!-- /.content-wrapper -->
<foot-component></foot-component>

</div>
<!-- ./wrapper -->

@stop