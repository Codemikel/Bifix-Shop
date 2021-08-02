@extends('/store/storeTemplate')

@section('content')
    <section class="espacio">
        <h2 class="espacio__title">Tu Espacio</h2>
        <section class="espacio__compras" >
            <h2>Tus compras</h2>
            @for($i = 0; $i < 2; $i++)
                @include('../components/yourBuy')
            @endfor
        </section>    
        <section class="espacio__ventas">
        <h2>Tus ventas</h2>
            @for($i = 0; $i < 2; $i++)
                @include('../components/yourInsale')
            @endfor
        </section>
        <section class="espacio__revision">
        <h2>Tus artículos en revisión</h2>
            @for($i = 0; $i < 2; $i++)
                @include('../components/yourInsale')
            @endfor
        </section>
        <section class="espacio__vendiendo">
            <h2>Tus artículos en venta</h2>
            @for($i = 0; $i < 2; $i++)
                @include('../components/yourInsale')
            @endfor
        </section>
    </section>
@endsection
