@guest
    <div class="card">
        <div class="card-header">mybusiness</div>
        <div class="card-body">
            <ul>
                <li><a href="/login">login</a> </li>
            </ul>
        </div>
    </div>
@else
    <div class="card">
        <div class="card-header">mybusiness</div>
        <div class="card-body">
            <ul>
                <li><a href="/mybusiness">my businesses</a> </li>
                <li><a href="/mybusiness/create">new business</a></li>
                <li><a href="/favoroite">my favorite business</a> </li>
                <li><a href="/password/reset">reset password</a></li>
            </ul>
        </div>
    </div>
@endguest
<br/>