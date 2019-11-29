
@extends('layouts.layout')

@section('content')


<div id="app">
            {!! $chart->container() !!}
        </div>

@include('layouts.footer')            

 {!! $chart->script() !!}

@endsection
