@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h3 class="card-title mr-2">Tag</h3>
            <a href="{{route('adminlte.tag.create')}}" class="btn btn-success">Add Data</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>SL.</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $index => $tag)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$tag->name}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('adminlte.tag.show', [$tag])}}" class="btn btn-primary btn-xs mr-2">
                                    <span><i class="fas fa-eye"></i></span>
                                </a>
                                <a href="{{route('adminlte.tag.edit', [$tag])}}" class="btn btn-success btn-xs mr-2">
                                    <span> <i class="fas fa-pencil-alt"></i> </span>
                                </a>
                                <a href="{{ route('adminlte.tag.destroy', [$tag]) }}" class="btn btn-danger btn-xs mr-2"
                                    onclick="event.preventDefault(); document.getElementById('{{$tag->slug}}-tag-delete').submit();">
                                    <span> <i class="fas fa-trash-alt"></i> </span>
                                </a>
                                <form id="{{$tag->slug}}-tag-delete"
                                    action="{{ route('adminlte.tag.destroy', [$tag]) }}" method="POST">
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