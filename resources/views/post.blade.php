<div>comment</div>

@foreach ($posts as $post)
    <p>title {{ $post->title }} &nbsp; content {{ $post->content}}</p>
@endforeach
