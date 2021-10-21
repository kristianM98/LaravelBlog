@extends('layouts.app')
@section('title', $title)


@section('title', $title)


@section('content')

    <section class="box">
        {!! Form::open(['route' => 'post.store', 'method' => 'post', 'class' => 'post', 'id' => 'add-form']) !!}

        @include('post.form')

        {!! Form::close() !!}
    </section>

@endsection
