@extends('layouts.app')

@section('title', 'Urutan')

@section('content')
    
@foreach($numbers as $number)
<h1>Urutan ke-{{ $number['ke'] }}</h1>
    Nomor ke-{{ $number['nomor'] }}
@endforeach

@endsection