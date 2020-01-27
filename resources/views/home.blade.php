@extends('principal')

@section('contenidoPrincipal')

    @if(Auth::check())
        @if(Auth::user()->tipo=='G')
            <template v-if="menu==1">
                <ger_equipo></ger_equipo>
            </template>
            <template v-if="menu==2">
                <ger_juego></ger_juego>
            </template>
            <template v-if="menu==3">
                <ger_trabajador></ger_trabajador>
            </template>
            <template v-if="menu==4">
                <ger_cliente></ger_cliente>
            </template>
            <template v-if="menu==5">
                <ger_mantenimiento></ger_mantenimiento>
            </template>
            <template v-if="menu==6">
                <ger_veralquiler></ger_veralquiler>
            </template>
        @elseif(Auth::user()->tipo=='C')

        @elseif(Auth::user()->tipo=='R')
            <template v-if="menu==1">
                <rec_equipo></rec_equipo>
            </template>
            <template v-if="menu==2">
                <rec_juego></rec_juego>
            </template>
            <template v-if="menu==3">
                <rec_alquiler></rec_alquiler>
            </template>
            <template v-if="menu==4">
                <rec_cliente></rec_cliente>
            </template>
        @elseif(Auth::user()->tipo=='T')

        @else

        @endif
    @endif

@endsection

