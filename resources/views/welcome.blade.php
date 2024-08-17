<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بانوراما القصيم</title>
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/png" href="{{asset ('./img/Logo.png')}}">
    <link rel="icon" type="image/png" href="{{ asset('img/Logo.png') }}">


</head>
<body>
{{-- start header --}}
@include ('header') 
{{-- end header --}}





   
{{-- start content --}}
@include('content')
{{-- @section('con')@endsection --}}

{{-- <section>('content')</section> --}}
{{-- @section('about')@endsection --}}
{{-- end content --}}

{{-- start footer --}}
@include ('footer') 
{{-- end footer --}}
</body>
</html>
