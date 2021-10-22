@extends('layouts.app')
@section('content')
<h1 align="center">This is service page</h1>
<p align= "center"> 
    @foreach($data as $item)
    {{ $item }}
    <?php
    echo "<br>";
    ?>
    @endforeach 
</p>
@endsection