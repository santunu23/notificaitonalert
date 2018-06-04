@extends('layouts.app')

@section('content')
@include('layouts.sidebar')
   
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">User Name</th>
      <th scope="col">Activity</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td>{{ $user->name }}</td>
      <td>
      	@if($user->isOnline())
      	<li class="text-success">
      	   Online
      	</li>
      	@else()
      	<li class="text-muted">
      	    Offline
      </li>
      	@endif




      </td>
    </tr>
    @endforeach
   </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
