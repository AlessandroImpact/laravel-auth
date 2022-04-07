@extends('admin.layout,base')

@section('content')

<div class="coontainer">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <form method="POST" action={{route('admin.posts.store')}}>
                
                @csrf

                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" name="title" id="title">

                </div>

                <div class="form-group">
                    <label for="content">Contenuto del post</label>
                    <input type="text" class="form-control" rows="10" name="content" id="content">

                </div>


                <button type="submit" class="btn btn-primary">Salva</button>
              </form>

        </div>
    </div>
</div>