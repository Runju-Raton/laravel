<!-- @foreach($datakey as $countryname)
    {{$countryname}}
@endforeach -->

<!-- <select>
@foreach($datakey as $countryname)
   <option>{{$countryname}}</option>
@endforeach

</select> -->

<!-- @forelse($datakey as $countryname)
   <li> {{$countryname}}</li>
@empty
    <p>No data is here</p>    
@endforelse     -->

<!-- @if($loginkey==true)
<h1>if condition</h1>
    <h1>Log in success</h1>
@elseif($loginkey==false)
    <h1>Login failed</h1>   
@else
    <h1>Status is not found</h1>
@endif -->

@foreach($datakey as $countryname)
  {{$loop->index}}
@endforeach