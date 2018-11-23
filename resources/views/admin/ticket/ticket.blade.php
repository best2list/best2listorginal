@extends('admin.dashboard')
@section('content')

    <div class="card">
        <div class="card-header">ticket subjects</div>
        <div class="card-body">
            <table class="table table-bordered text-center">
                <tr>
                    <td>id</td>
                    <td>subject</td>
                    <td>messages</td>
                    <td>status</td>
                </tr>
                @foreach($ticketSubjects as $ticketSubject)
                    <tr>
                        <td>{{ $ticketSubject->id }}</td>
                        <td><a class="text-primary" href="{{ route('adminTicketSubject', $ticketSubject->id) }}">{{ $ticketSubject->subject }}</a></td>
                        <td>8</td>
                        <td class="@if($ticketSubject->status == 'open') text-danger @else text-success @endif">{{ $ticketSubject->status }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection