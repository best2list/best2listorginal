@extends('layouts.app')
@section('sidebar')
    @include('business.my_account_menu')
    @parent
@endsection
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
            <form method="POST" action="{{ route('storeTicket',$subjectID) }}" aria-label="{{ __('storeTicket') }}">
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



    {{--<div class="card">--}}
        {{--<div class="card-header">ticket</div>--}}
        {{--<div class="card-body">--}}

            {{--@foreach($favorites as $favorite)--}}
            {{--@if($favorite->hasBusiness($favorite->business_id)->type=='active')--}}
            {{--<div class="media border-bottom mt-1">--}}
            {{--<img class="align-self-start mr-3 col-md-2 " src="@if($favorite->hasBusiness($favorite->business_id)->image_path){{ $favorite->hasBusiness($favorite->business_id)->image_path }} @else /image/download.png @endif" alt="Generic placeholder image">--}}
            {{--<div class="media-body">--}}
            {{--<h4 class="mt-0 pt-1" style="font-size: 16px;"><a class="card-link text-primary" href="{{ route('showBusiness', $favorite->hasBusiness($favorite->business_id)->id) }}">{{ $favorite->hasBusiness($favorite->business_id)->title }}</a></h4>--}}
            {{--<div class="text-muted mt-3" style="font-size: 13px;"><i class="fas fa-map-marker-alt"></i> {{ $favorite->hasBusiness($favorite->business_id)->hasCountry($favorite->hasBusiness($favorite->business_id)->country)->country }} , {{ $favorite->hasBusiness($favorite->business_id)->city }}</div>--}}
            {{--<div class="mb-0 text-muted" style="font-size: 13px;"><i class="fas fa-phone"></i> {{ $favorite->hasBusiness($favorite->business_id)->phone }} - <i class="fas fa-fax"></i> {{ $favorite->hasBusiness($favorite->business_id)->fax }} </div>--}}
            {{--<p class="mb-0 text-muted" style="font-size: 12px;"><i class="fas fa-clipboard"></i> {{ str_limit($favorite->hasBusiness($favorite->business_id)->summary,150) }} </p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--@endif--}}
            {{--@endforeach--}}

        {{--</div>--}}
    {{--</div>--}}
    <br/>

@endsection