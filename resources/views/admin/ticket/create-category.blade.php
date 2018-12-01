@extends('admin.layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">ticket</div>
        <div class="card-body">
            <table class="table table-responsive-md table-bordered">
                <tr>
                    <td>id</td>
                    <td>name</td>
                    <td>edit</td>
                    <td>delete</td>
                </tr>
                @foreach($ticketCategories as $ticketCategory)
                    <tr>
                        <td>{{ $ticketCategory->id }}</td>
                        <td>{{ $ticketCategory->name }}</td>
                        <td>edit</td>
                        <td>delete</td>
                    </tr>
                @endforeach
            </table>
        </div>



            <div class="card-body">
                <form method="POST" action="{{ route('storeTicketCategory') }}" aria-label="{{ __('storeTicketCategory') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('insert') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
    </div>

@endsection