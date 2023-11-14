@foreach($all_students as $Student)
<h3>{{$Student->name}}</h3>
<p>{{$Student->adress}}</p>
<p>{{$Student->mobile}}</p>
@endforeach