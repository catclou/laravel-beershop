@extends('layouts.layout')


@section('content')

    <div class="container-product">
        <h2>NOME:
            <span class="info-product">
                {{ $beer->nome }}
            </span>
        </h2>
        <h4>QUANTITÀ:
            <span class="info-product">
                {{ $beer->formato_cl }} cl
            </span>
        </h4>
        <h4>STILE:
            <span class="info-product">
                {{ $beer->stile }}
            </span>
        </h4>
        <h4>PREZZO:
            <span class="info-product">
                {{ $beer->prezzo }} €
            </span>
        </h4>
        <h4>PROVENIENZA:
            <span class="info-product">
                {{ $beer->provenienza }}
            </span>
        </h4>
        <h4>GRADAZIONE:
            <span class="info-product">
                {{ $beer->gradazione }}% vol
            </span>
        </h4>
    </div>

@endsection