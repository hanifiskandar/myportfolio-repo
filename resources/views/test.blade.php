Hello, {{$title}}.
Right now im currently {{$purpose}}.
<br>
<br>
<hr>

<br>
<?php




$name = "My name is Madking";
$x = 1;
$y = 3;
?>
{{ $name }}
<br>


<!-- @if($x < $y){
    puta
} @else
{
    totorao
}
@endif -->


@for($i = 0 ; $i < 4; $i++)
    The current value is {{ $i }} <br>
@endfor

