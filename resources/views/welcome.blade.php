@extends('layouts.main')

@section('title', 'Teste')

@section('content')

    @if(10 < 3)
        <h1>true</h1>
    @else
        <h1>{{$name}} tem {{$age}} anos</h1>
    @endif
    @for($i = 0 ; $i < count($array) ; $i++)
        <h1>{{$array[$i]}}</h1>
    @endfor
    @foreach($numbers as $number)
        <h1>{{$loop->index}} - {{$number}}</h1>
    @endforeach

    @if($id2 == null)
        <h2>Parametro três da URL não obrigatório: {{$id2}}</h2><br>
    @endif
    @if($id2 <> null && $id <> null )
        <h2>Parametro dois da URL obrigatório: {{$id}} e o três não obrigatório: {{$id2}}</h2><br>
    @else
        <h2>Parametro dois da URL obrigatório: {{$id}}</h2><br>
    @endif
    <h2>Parametro depois da palavra action: {{$busca}}</h2>
    {{-- Comentario com blade --}}
    {{-- /teste/21324354/user?action=cadastrar --}}
    @endsection




