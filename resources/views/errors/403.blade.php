@extends('layouts.app')
@section('title', 'Forbidden')

@section('content')

    <section class="box">

        <h1>403</h1>
        <p>{{ $exception->getMessage }}</p>

    </section>

@endsection
