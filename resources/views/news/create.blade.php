@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel panel-default">
                        <div class="panel-heading" align="center">
                            Create a News
                        </div>

                        <div class="panel-body">
                            <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="content_id">Content</label>
                                    <input type="text" name="content_id" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="author">Author</label>
                                    <input type="text" name="author" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="image_gallery">Image</label>
                                    <input type="file" name="image_gallery" class="form-control">
                                </div>

                                <label for="category">Category</label>
                                <div class="input-group">
                                    <select name="category" class="form-control">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id}}">
                                                {{ $category->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <label for="tags">Tags</label>
                                <div class="input-group">
                                    <select name="tags" class="form-control">
                                        @foreach ($tags as $tag)
                                            <option value="{{$tag->id}}">
                                                {{$tag->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="rank">Rank</label>
                                    <input type="text" name="rank" class="form-control">
                                </div>

                                <div class="form-group">
                                    <div class="text-center">
                                        <button class="btn btn-success" type="submit">
                                            Create News
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop