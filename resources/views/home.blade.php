@extends('layouts.app')

@section('content')
@include('layouts.sidebar')
   
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Item</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
    @foreach($items as $item)
    <tr>
        
      <td scope="row">{{ $item->id  }}</td>
      <td>{{ $item->iname }}</td>
      <td>{{ $item->iqty  }}</td>


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
