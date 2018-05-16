@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" align="center">
                        Categories
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                            <th>Category name</th>

                            <th>Edit</th>

                            <th>Delete</th>

                            </thead>

                            <tbody>
                            @if($categories->count() > 0)
                                @foreach($categories as $category)
                                    <tr>
                                        <td>
                                            {{ $category->name }}
                                        </td>

                                        <td>
                                            <a href="{{ route('categories.edit', ['id' => $category->id]) }}"
                                               class="btn btn-xs btn-info">
                                                Edit
                                            </a>
                                        </td>

                                        <td>
                                            <a href="{{ route('categories.destroy', ['id' => $category->id]) }}"
                                               class="btn btn-xs btn-danger">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <th>
                                    <tr>
                                        <th colspan="5" class="text-center">No Categories yet</th>
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

