@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h3 class="card-title mr-2">News Category</h3>
            <a href="{{route('adminlte.news-category.create')}}" class="btn btn-success">Add Data</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>SL.</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news_categories as $index => $news_category)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$news_category->name}}</td>
                        <td>{{$news_category->slug}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('adminlte.news-category.show', [$news_category])}}"
                                    class="btn btn-primary btn-xs mr-2">
                                    <span><i class="fas fa-eye"></i></span>
                                </a>
                                <a href="{{route('adminlte.news-category.edit', [$news_category])}}"
                                    class="btn btn-success btn-xs mr-2">
                                    <span> <i class="fas fa-pencil-alt"></i> </span>
                                </a>
                                <a href="{{ route('adminlte.news-category.destroy', [$news_category]) }}"
                                    class="btn btn-danger btn-xs mr-2"
                                    onclick="event.preventDefault(); document.getElementById('{{$news_category->slug}}-news-category-delete').submit();">
                                    <span> <i class="fas fa-trash-alt"></i> </span>
                                </a>
                                <form id="{{$news_category->slug}}-news-category-delete"
                                    action="{{ route('adminlte.news-category.destroy', [$news_category]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection