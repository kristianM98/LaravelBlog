@extends('layouts.app')


@section('title', $title)


@section('content')

	<section class="box">
	{!! Form::model($post, ['route' => [ 'post.update', $post->id ], 'method' => 'put', 'class' => 'post', 'id' => 'edit-form']) !!}

		@include('post.form')

	{!! Form::close() !!}
	</section>

@endsection
