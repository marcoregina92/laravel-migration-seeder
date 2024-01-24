@extends('layouts.app')

@section('content')
    <h1 class="mb-5">Treni</h1>
    @foreach ($treni as $treno)
        <h2>Azienda: {{ $treno->azienda }}</h2>
        <h2>Stazione di partenza: {{ $treno->stazione_di_partenza }}</h2>
        <h2>Stazione di arrivo: {{ $treno->stazione_di_arrivo }}</h2>
        <h2>Orario di arrivo: {{ $treno->orario_di_arrivo }}</h2>
        <h2 class="mb-5">Orario di partenza: {{ $treno->orario_di_partenza }}</h2>
    @endforeach
@endsection
