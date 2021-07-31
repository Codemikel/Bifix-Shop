@extends('/store/storeTemplate')

@section('content')

    <section class="requirements">

        <article class="requirements__item">
            <h3>¿Qué necesitamos para darte el sello bifix?</h3>
            <ul>
                <li>Foto de serie de marco</li>
                <li>Número de serie del marco</li>
            </ul>
        </article>
        <article class="requirements__item">
            <p>Cuando revisemos los requisitos y estén aprobados tus ventas se publicarán automaticamente.</p>
            @include('components/stamp')
        </article>
        <article class="requirements__item">
            <h3>Ventajas de la plataforma</h3>
            <ul>
                <li>La bicicleta es totalmente como se describe en la publicación</li>
                <li>Frenamos en gran proporción la venta y compra de bicicletas robadas</li>
                <li>Tendremos un sistema de pago donde se evitarán las estafas (Si desean usarlo)</li>
                <li>El registro debe ser autenticado con sus documentos</li>
            </ul>
        </article>

    </section>
@endsection
