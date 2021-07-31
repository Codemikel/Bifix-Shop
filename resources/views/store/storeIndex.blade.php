@extends('/store/storeTemplate')

@section('content')

    @include('../components/article')

    @for($i = 0; $i < 3; $i++)

    @include('../components/similarProduct')

    @endfor

@endsection
