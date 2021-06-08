<!DOCTYPE html>

<title> My Blog</title>
<link rel="stylesheet" href="/app.css">
<link rel="stylesheet" href="/vendor-lib.css">

<body>

    @foreach ($posts as $post)
    <article class="{{ $loop->even ? 'mb-60' : ''}}">

        <h1>
            <a href="/posts/{{ $post->slug }}">
                {{ $post->title }}
            </a>
        </h1>

        <div>
            {{$post->excerpt}}
        </div>

    </article>
    @endforeach

</body>
