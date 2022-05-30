@extends('layouts.layout')


@section('content')

    <div class="row">
        @forelse ($beers as $beer)
        <div class="card">
                <h2>{{ $beer->nome }}</h2>
                <h4>{{ $beer->formato_cl }} cl</h4>
                <h4>{{ $beer->prezzo }} €</h4>
                <a href="{{ route('show', [ 'id' => $beer->id ]) }}">Vedi Info</a>
        </div>
            @empty
              <p>Non sono presenti prodotti disponibili.</p>  
            @endforelse
    </div>

@endsection