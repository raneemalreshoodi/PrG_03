@extends('layouts.app')

@section('content')
    <h1>Services</h1>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Picture</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>{{ $service->title }}</td>
                    <td><img src="{{ $service->picture }}" alt="{{ $service->title }}"></td>
                    <td>{{ $service->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection