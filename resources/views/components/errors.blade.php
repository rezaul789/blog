@if($errors->any())
    <div class="alert alert-danger">
        <span>
            @foreach($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach

        </span>

    </div>
@endif
