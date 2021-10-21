@extends('layouts.app')
@section('title', isset($title) ? $title : 'All post')

@section('content')

    <section class="box post-list">
        <h1 class="box-heading text-muted">
            {!! $title ?? "this is a blog, bitch" !!}
        </h1>

        @forelse( $posts as $post )

            <article id="post-{{ $post->id }}" class="post">
                <header class="post-header">
                    <h2>
                        <a href="{{ route('post.show', $post->slug) }}">
                            {{ $post->title }}
                        </a>
                        <time datetime="{{ $post->datetime }}">
                            <small>/ {{ $post->created_at }}</small>
                        </time>
                    </h2>
                    @include('partials.tags')
                </header>
                <div class="post-content">
                    <p>
                        {{ Str::limit( $post->text, 300) }}
                    </p>
                </div>
                <footer class="post-footer">
                    <a href="{{ route('post.show', $post->slug) }}" class="read-more">
                        read more
                    </a>
                </footer>
            </article>

        @empty

            <p>we got nothing :(</p>

        @endforelse

        {!! $posts->render() !!}
    </section>

@endsection
