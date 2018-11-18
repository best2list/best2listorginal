@extends('layouts.app')
@section('sidebar')
    @include('business.my_account_menu')
    @parent
@endsection
@section('content')

                <div class="card">
                    <div class="card-header">All businesses</div>


                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr class="table-active">
                                <td>business ID</td>
                                <td>my business title</td>>
                            </tr>
                            {{ $businesses }}
                    {{--@foreach($businesses->business() as $business)--}}
                            {{--<tr @if($business->type=='active') class="alert alert-success" @endif>--}}
                                {{--<td>{{ $business->id }}</td>--}}
                                {{--<td><a href="/mybusiness/{{ $business->id }}"> {{ $business->title }}</a></td>--}}
                            {{--</tr>--}}
                    {{--@endforeach--}}
                        </table>
                    </div>
                </div>
@endsection
