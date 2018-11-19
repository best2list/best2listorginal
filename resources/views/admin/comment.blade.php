@extends('admin.dashboard')
@section('content')
                    <div class="card">
                        <div class="card-header">comments</div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr class="table-active">
                                    <td>comment ID</td>
                                    <td>business ID</td>
                                    <td>user ID</td>
                                    <td>comment</td>
                                    <td>status</td>
                                    <td>delete</td>
                                </tr>
                                @foreach($comments as $comment)
                                    <tr>
                                        <td>{{ $comment->id }}</td>
                                        <td>{{ $comment->business_id }}</td>
                                        <td>{{ $comment->user_id }}</td>
                                        <td>{{ $comment->comment }}</td>
                                        <td>{{ $comment->status }} |
                                            <form action="{{ route('commentStatus', $comment->id) }}" method="post">
                                                {{ method_field('put') }}
                                                {{csrf_field()}}
                                                <input type="submit" value="change">
                                            </form> </td>
                                        <td><a href="">delete</a> </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
@endsection