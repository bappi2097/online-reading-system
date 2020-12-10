@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h3 class="card-title mr-2">News</h3>
            <a href="{{route('adminlte.news.create')}}" class="btn btn-success">Add Data</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>SL.</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Author</th>
                        <th>Short Description</th>
                        <th>Quate</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($newses as $index => $news)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$news->title}}</td>
                        <td>
                            <img src="{{ $news->image}}" alt="" width="60" height="50">
                        </td>
                        <td>{{$news->author}}</td>
                        <td>{{$news->short_description}}</td>
                        <td>{{$news->quote}}</td>
                        <td>{{date("l", strtotime($news->created_at))}} .
                            {{date("j F . Y", strtotime($news->created_at))}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('adminlte.news.show', [$news])}}" class="btn btn-primary btn-xs mr-2">
                                    <span><i class="fas fa-eye"></i></span>
                                </a>
                                <a href="{{route('adminlte.news.edit', [$news])}}" class="btn btn-success btn-xs mr-2">
                                    <span> <i class="fas fa-pencil-alt"></i> </span>
                                </a>
                                <a href="{{ route('adminlte.news.destroy', [$news]) }}"
                                    class="btn btn-danger btn-xs mr-2"
                                    onclick="event.preventDefault(); document.getElementById('{{$news->slug}}-news-delete').submit();">
                                    <span> <i class="fas fa-trash-alt"></i> </span>
                                </a>
                                <form id="{{$news->slug}}-news-delete"
                                    action="{{ route('adminlte.news.destroy', [$news]) }}" method="POST">
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
    </div>
</div>
@endsection