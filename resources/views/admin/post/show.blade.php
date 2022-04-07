@extends('admin.layout,base')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">


            <h1>Visualizza</h1>

            <div><strong>Titolo</strong> {{$post->title}}</div>
            <div><strong>Contenuto</strong> {{$post->content}}</div>
            <div><strong>Slug</strong> {{$post->slug}}</div>
            <a href="{{route('admin.post.edit' , $post->id)}}" class="btn btn-secondary">Modifica</a>
           


        </div>
    </div>
</div>