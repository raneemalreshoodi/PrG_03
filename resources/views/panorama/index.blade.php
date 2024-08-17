@extends('layouts.app')

@section('content')
    <h1>Panorama Al-Qassim</h1>
    <p>{{ $panorama->description }}</p>
    <a href="{{ route('customers.index') }}">Customers</a>
    <a href="{{ route('services.index') }}">Services</a>
    <a href="{{ route('messages.index') }}">Messages</a>
@endsection