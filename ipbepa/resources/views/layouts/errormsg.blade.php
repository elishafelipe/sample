@if(count($errors) > 0)
<div class="alert alert-danger">
    Adding Information Error<br><br>
    <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </ul>
</div>
@endif
@if($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">
    </button>
    <strong>{{$message}}</strong>>
</div>
@endif
@if(session()->has('msg'))
        <div class="alert alert-success">
            {{ session()->get('msg') }}
        </div>
@endif
@if(session()->has('delete'))
    <div class="alert alert-danger">
    {{ session()->get('delete') }}
    </div>
@endif