<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        	<div class="card">
        	<div class="card-header">
        	Admin Panel
        </div>
        <div class="card-body">
        	<table class="table table-dark">
                @can('isAuthor')
                <tbody><td><a href="/admin/adminIteminsert">Create new Items</a></td></tbody>
                @endcan
                @can('isAdmin')
                <tbody><td><a href="/admin/admindashboard">Dashboard</a></td></tbody>
                 <tbody><td><a href="/admin/manageuser">Manage User</a></td></tbody>
               @endcan
        </table>       
        </div>
        </div>
        </div>
       <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <p>
                   @include('layouts.messages')
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif