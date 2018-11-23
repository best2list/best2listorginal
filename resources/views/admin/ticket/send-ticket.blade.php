@extends('admin.dashboard')
@section('content')

    <div class="card">
        <div class="card-header">ticket</div>
        <div class="card-body">
            @foreach($tickets as $ticket)
                @if($ticket->user_id)
                    <div class="bg-primary text-white">{{ $ticket->user_id }}</div>
                @else
                    <div class="bg-success text-white">{{ $ticket->admin_id }}</div>
                @endif
                <div>{{ $ticket->message }}</div>
                <span class="@if($ticket->message_status == 'unseen') text-danger @elseif($ticket->message_status == 'seen') text-primary @else text-success @endif">{{ $ticket->status }}</span>
                <hr/>
            @endforeach
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('adminStoreTicket',$subject_id) }}" aria-label="{{ __('storeTicket') }}">
                @csrf
                <div class="form-group row">
                    <label for="message" class="col-sm-4 col-form-label text-md-right">{{ __('message') }}</label>

                    <div class="col-md-6">
                        <input id="message" type="text" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" value="{{ old('message') }}" required autofocus>

                        @if ($errors->has('message'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('message') }}</strong>
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