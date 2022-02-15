{{-- @if(5>10)
<p>5 is lower than 10</p>
@elseif(5==10)
<p>5 is indeed lower than 10</p>
@else
<h2>Condition for print the Name</h2>
@endif

@unless (empty($name))
    <h2>Name is empty !</h2>
@endunless

@empty($name)
<p>Name is Empty</p>
@endempty --}}
@for ($i=0;$i<10;$i++)

<h3> The number is {{$i}} </h3>

@endfor

@foreach ($users as  $user)

<h2>The best employee of mpokket is {{$user}}</h2>
    
@endforeach


{{-- @switch($name)
    @case('Rustam')
        <h2>Name is Rustam</h2>
        @break
    @case('Shohrab')
        <h2>Name is Shohrab</h2>
    @break
    @case('Armaan')
    <h2>Name is Armaan</h2>
    @break

    @default
        <h2>Name no found</h2>
@endswitch --}}
