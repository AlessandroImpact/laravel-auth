@extends('admin.layout,base')

@section('content')

<div class="coontainer">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <form method="POST" action={{route('admin.posts.update' , $post->id)}}></form>
                
                @csrf

                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{old('title', $post->title)}}">

                </div>

                <div class="form-group">
                    <label for="content">Contenuto del post</label>
                    <textarea type="text" class="form-control" rows="10" name="content" id="content" value="{{old('content', $post->content)}}">

                </div>


                <button type="submit" class="btn btn-primary">Salva</button>
              </form>

        </div>
    </div>
</div>