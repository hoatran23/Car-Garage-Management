@if(Session::has('error'))
	<p class="title" style="color: red;">{{Session::get('error')}}</p>
@endif
@foreach($errors->all() as $error)
<p class="title" style="color: red;">{{$error}}</p>
@endforeach