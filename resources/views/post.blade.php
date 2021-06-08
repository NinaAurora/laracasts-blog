<!DOCTYPE html>

<title> My Blog</title>
<link rel="stylesheet" href="/app.css">
<link rel="stylesheet" href="/vendor-lib.css">

<body>

    <article>

        <h1> {{$post->title}} </h1>

        <div>
            {!! $post->body !!}
        </div>

    </article>

    <a href="/">Go Back</a>

</body>
