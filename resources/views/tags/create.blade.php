@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" align="center">
                        Create a new Tag
                    </div>

                    <div class="panel-body">
                        <form action="{{ route('tags.store') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name">Tag name</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <div class="text-center">
                                    <button class="btn btn-success" type="submit">
                                        Create category
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop