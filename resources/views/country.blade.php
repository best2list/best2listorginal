@extends('layouts.app')
@section('sidebar')
    @parent
@endsection
@section('content')
    @foreach($businesses as $business)
        <div class="media border-bottom mt-1">
            <img class="align-self-start mr-3" src="/image/download.png" alt="Generic placeholder image">
            <div class="media-body">
                <h4 class="mt-0 pt-1" style="font-size: 16px;"><a class="card-link text-primary" href="{{ route('showBusiness', $business->id) }}">{{ $business->title }}</a></h4>
                <div class="text-muted mt-3" style="font-size: 13px;"><i class="fas fa-map-marker-alt"></i> {{ $business->hasCountry($business->country)->country }} , {{ $business->city }}</div>
                <div class="mb-0 text-muted" style="font-size: 13px;"><i class="fas fa-phone"></i> {{ $business->phone }} - <i class="fas fa-fax"></i> {{ $business->fax }} </div>
                <p class="mb-0 text-muted" style="font-size: 12px;"><i class="fas fa-clipboard"></i> {{ str_limit($business->summary,150) }} </p>
            </div>
        </div>
    @endforeach
    <div class="media justify-content-center mt-3">
        {{ $businesses->links() }}
    </div>
@endsection
