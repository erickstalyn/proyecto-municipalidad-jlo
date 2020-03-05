@extends('principal')

@section('contenidoPrincipal')

    @if(Auth::check())
        {{-- @if(Auth::user()->tipo=='G')
            <template v-if="menu==1">
                <ger_equipo></ger_equipo>
            </template>
        @elseif(Auth::user()->tipo=='C')

        @elseif(Auth::user()->tipo=='R')

        @elseif(Auth::user()->tipo=='T')

        @else

        @endif --}}
        <template v-if="menu==2">
            <example-component></example-component>
        </template>
    @endif

@endsection

