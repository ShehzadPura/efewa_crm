@extends('layouts.app')

@section('content')
<section class="section">
	<div class="container-fluid">
		 <!-- BreathCrum -->
     @include('partials.breadcrumb')

     <div class="right-mob-left">
<!--         <a href="{{ route('countries.index') }}">
        <button type="button" class="main-btn primary-btn-outline btn-hover btn-xs">Import</button> 
        </a> -->
        <a href="{{ route('blogs.create') }}">
        <button type="button" class="main-btn primary-btn btn-hover btn-xs">Create</button>
        </a>
    </div>
     
    <!--Add new section start here-->
<div class="card-style mt-20">
<div class="row">
<div class="col-sm-12">

</div>

<!-- <div class="col-sm-4 rowmargin10">
<div class="right-mob-left"><button type="button" class="main-btn dark-btn btn-hover btn-xs">Export</button></div>
</div> -->  
</div>
<hr>    
<div class="table-wrapper table-responsive mt-10">
<table class="table striped-table">
<thead>
<tr>
<th><h6>Image</h6></th>
<th><h6>Authur</h6></th>
<th><h6>Category</h6></th>
<th><h6>Title</h6></th>    
<th><h6>Status</h6></th>  
<th class="text-center"><h6>Action</h6></th>
</tr>
<!-- end table row-->
</thead>

</table>
<!-- end table -->
</div>
</div>
<!-- Pagination Start Here -->
@include('partials.pagination', ['items' => $blogs])
<!-- Pagination End here -->   
<!--Add new section end here-->
	</div>
</section>	
@endsection



