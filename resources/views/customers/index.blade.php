@extends('layouts.app')

@section('content')
    <h1>Customers</h1>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Picture</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->title }}</td>
                    <td><img src="{{ $customer->picture }}" alt="{{ $customer->title }}"></td>
                    <td>{{ $customer->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
