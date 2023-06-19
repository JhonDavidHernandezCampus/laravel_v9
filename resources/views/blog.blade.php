@extends('template')


@section('content')
    <h1>Listado</h1>

    <h2>esto es lo que el hizo</h2>
    @foreach ( $posts as $post )
    <p>
        <strong>{{$post->id}}</strong>
        <a href="{{ route('post', $post->slug)}}">   {{ $post->title }}  </a><br>
        <span>{{$post->user->name}}</span>
    </p>

    @endforeach



    <h2>esto es lo que yo hice</h2>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>slug</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as  $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->slug}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

{{$posts->links()}}

@endsection

