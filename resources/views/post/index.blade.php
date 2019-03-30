<ul>
    @foreach ($posts as $post)
    <li>
        <a href="{{ route('posts.edit', $post) }}">
            {{ $post->title }}
        </a>
        <img width="60" src="{{ asset('storage/'.$post->image) }}" alt="">
    </li>        
    @endforeach
</ul>

<a href="{{ route('posts.create') }}">Add post</a>

<form action="{{ route('posts.update', $post) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    Title:
    <input type="text" name="title" value="{{ $post->title }}">
    <br>
    Content:
    <textarea name="content" id="" cols="30" rows="10">{{ $post->title }}</textarea>
    <br>
    Image:
    <img width="60" src="{{ asset('storage/'.$post->image) }}" alt="">
    <input type="file" name="image">
    <button type="submit">Save</button>
</form>