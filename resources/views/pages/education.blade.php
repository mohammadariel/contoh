@extends('layouts.default')
@section('content')
    <!-- i am the Education homepage -->
    @for($i=0; $i<$posts; $i++)
    {{$i}}<br>
    @endfor
@stop