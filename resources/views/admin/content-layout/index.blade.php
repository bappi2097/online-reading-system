@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h3 class="card-title mr-2">Content Layout</h3>
            <a href="{{route('adminlte.content-layouts.create')}}" class="btn btn-success">Add Data</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>SL.</th>
                        <th>Category</th>
                        <th>Layout</th>
                        <th>Position</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contentLayouts as $index => $contentLayout)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$contentLayout->newsCategory->name}}</td>
                        <td> {{$contentLayout->layout_no}} </td>
                        <td> {{$contentLayout->position}} </td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('adminlte.content-layouts.show', [$contentLayout])}}"
                                    class="btn btn-primary btn-xs mr-2">
                                    <span><i class="fas fa-eye"></i></span>
                                </a>
                                <a href="{{route('adminlte.content-layouts.edit', [$contentLayout])}}"
                                    class="btn btn-success btn-xs mr-2">
                                    <span> <i class="fas fa-pencil-alt"></i> </span>
                                </a>
                                <a href="{{ route('adminlte.content-layouts.destroy', [$contentLayout]) }}"
                                    class="btn btn-danger btn-xs mr-2"
                                    onclick="event.preventDefault(); document.getElementById('{{$contentLayout->id}}-content-layouts-delete').submit();">
                                    <span> <i class="fas fa-trash-alt"></i> </span>
                                </a>
                                <form id="{{$contentLayout->id}}-content-layouts-delete"
                                    action="{{ route('adminlte.content-layouts.destroy', [$contentLayout]) }}"
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