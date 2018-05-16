@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" align="center">
                        News
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>

                            <th>Title</th>

                            <th>Content</th>

                            <th>Author</th>

                            <th>Image</th>

                            <th>Category</th>

                            <th>Tag</th>

                            <th>Rank</th>

                            <th>Edit</th>

                            <th>Delete</th>

                            </thead>

                            <tbody>
                            @if($news->count() > 0)
                                @foreach($news as $news_1)
                                    <tr>
                                        <td> {{ $news_1->title }} </td>
                                        <td> {{ $news_1->content_id }} </td>
                                        <td> {{ $news_1->author }} </td>
                                        <td> {{ $news_1->image_gallery }} </td>
                                        <td> {{ $news_1->category }} </td>
                                        <td> {{ $news_1->tags }} </td>
                                        <td> {{ $news_1->rank }} </td>
                                        {{--<td>--}}
                                            {{--<a href="{{ route('news.edit', ['id' => $news->id]) }}"--}}
                                               {{--class="btn btn-xs btn-info">--}}
                                                {{--Edit--}}
                                            {{--</a>--}}
                                        {{--</td>--}}

                                        {{--<td>--}}
                                            {{--<a href="{{ route('news.destroy', ['id' => $news->id]) }}"--}}
                                               {{--class="btn btn-xs btn-danger">--}}
                                                {{--Delete--}}
                                            {{--</a>--}}
                                        {{--</td>--}}
                                    </tr>
                                @endforeach
                            @else
                                <th>
                                    <tr>
                                        <th colspan="9" class="text-center">No News yet</th>
                                    </tr>
                                </th>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

