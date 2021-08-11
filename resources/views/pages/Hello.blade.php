@extends('layout.master')
@section('content')
    <p>dddddddddddddddddddddddddd</p>  
    <p>{{$key1}}</p>  
    @foreach ($keys as $item)
        <li>{{$item}}</li>
        @if ($item>0)
            {{$item}}
            
        @endif
        
    @endforeach
@endsection