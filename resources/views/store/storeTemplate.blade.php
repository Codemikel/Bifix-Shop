@extends('../template')

@section('main')
    @include('../components/header')

    @yield('content')

    @include('../components/footer')
@endsection
