@extends('layouts.app')
@section('title', 'Register')

@section('content')

    {!! Form::open([ 'route' => 'register', 'class' => 'box box-auth' ]) !!}

    <h2 class="box-auth-heading">
        Register
    </h2>

    {!! Form::text('name', null, [
        'class' => 'form-control',
        'placeholder' => 'name',
        'required' => true,
        'autofocus' => true,
    ]) !!}

    {!! Form::email('email', null, [
        'class' => 'form-control',
        'placeholder' => 'email@address.com',
        'required' => true,
        'autofocus' => true,
    ]) !!}

    {!! Form::password('password', [
        'class' => 'form-control',
        'placeholder' => 'password',
        'required' => true,
    ]) !!}

    {!! Form::password('password_confirmation', [
        'class' => 'form-control',
        'placeholder' => 'password, again',
        'required' => true,
    ]) !!}

    {!! Form::button('Register', [
        'type' => 'submit',
        'class' => 'btn btn-lg btn-primary btn-block'
    ]) !!}

    <p class="alt-action text-center">
        or <a href="{{ route('login') }}">come inside</a>
    </p>

    {!! Form::close() !!}

@endsection
