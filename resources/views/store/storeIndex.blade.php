@extends('/store/storeTemplate')

@section('content')

    <section class="home">

        <article class="home__product">
            @include('../components/article')
        </article>

        <article class="home__similar-product">
            @for($i = 0; $i < 3; $i++)
                @include('../components/similarProduct')
            @endfor
        </article>

    </section>


@endsection
