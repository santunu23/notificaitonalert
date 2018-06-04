@extends('layouts.app')

@section('content')
@include('layouts.sidebar')

                    <form method="POST" action="{{ 'insertitem' }}">
                        @csrf

                        <div class="form-group row">
                            <label for="iname" class="col-md-4 col-form-label text-md-right">{{ __('Item Name') }}</label>

                            <div class="col-md-6">
                                <input id="iname" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="iname" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('iname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('iname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          <div class="form-group row">
                            <label for="iqty" class="col-md-4 col-form-label text-md-right">{{ __('Item Qty') }}</label>
                             <div class="col-md-6">
                                <input id="iqty" type="text" class="form-control{{ $errors->has('iqty') ? ' is-invalid' : '' }}" name="iqty" value="{{ old('iqty') }}" required autofocus>

                                @if ($errors->has('iqty'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('iqty') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
