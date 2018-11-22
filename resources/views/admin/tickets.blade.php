@extends('admin.dashboard')
@section('content')


    <div class="card">
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

    <div class="card">
        <div class="card-header">ticket</div>
        <div class="card-body">

        @foreach($tickets as $ticket)
            {{--@if($favorite->hasBusiness($favorite->business_id)->type=='active')--}}


                    <div class="text-muted mt-3 mb-1" style="font-size: 13px;">{{ Auth::user()->username }} : {{ $ticket->message }}</div>
                    <span class="text-white p-1 rounded @if($ticket->reply_status=='unseen') bg-danger @elseif($ticket->reply_status=='seen') bg-warning @else bg-success @endif" style="font-size: 13px;">{{ $ticket->reply_status }}</>
                    {{--<h4 class="mt-0 pt-1" style="font-size: 16px;"><a class="card-link text-primary" href="{{ route('showBusiness', $favorite->hasBusiness($favorite->business_id)->id) }}">{{ $favorite->hasBusiness($favorite->business_id)->title }}</a></h4>--}}
                    {{--<div class="text-muted mt-3" style="font-size: 13px;"><i class="fas fa-map-marker-alt"></i> {{ $favorite->hasBusiness($favorite->business_id)->hasCountry($favorite->hasBusiness($favorite->business_id)->country)->country }} , {{ $favorite->hasBusiness($favorite->business_id)->city }}</div>--}}
                    {{--<div class="mb-0 text-muted" style="font-size: 13px;"><i class="fas fa-phone"></i> {{ $favorite->hasBusiness($favorite->business_id)->phone }} - <i class="fas fa-fax"></i> {{ $favorite->hasBusiness($favorite->business_id)->fax }} </div>--}}
                    {{--<p class="mb-0 text-muted" style="font-size: 12px;"><i class="fas fa-clipboard"></i> {{ str_limit($favorite->hasBusiness($favorite->business_id)->summary,150) }} </p>--}}

            {{--@endif--}}
        @endforeach

        </div>
    </div>
@endsection