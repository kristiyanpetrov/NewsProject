@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default" align="center">
                    <div class="card-header">News</div>

                        <form method="post" action="{{ route('news.update', ['$news' => $news->id])}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <label for="title">title</label>
                            <div class="input-group">
                                <input type="text" name="title" class="form-control">
                            </div>

                            <label for="content_id">Content</label>
                            <div class="input-group">
                                <input type="text" name="content_id" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="image_gallery">Image</label>
                                <input type="file" name="image_gallery" class="form-control">
                            </div>

                            <label for="category">Category</label>
                            <div class="input-group">
                                <select name="category" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                                @if ($category->id == $news->category) selected @endif
                                        >
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="input-group">
                                <select name="tags" class="form-control">
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}"
                                                @if ($tag->id == $news->tag) selected @endif
                                        >
                                            {{ $tag->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <label for="author">Author</label>
                            <div class="input-group">
                                <input type="text" name="author" class="form-control">
                            </div>

                            <label for="rank">Rank</label>
                            <div class="input-group">
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
@endsection