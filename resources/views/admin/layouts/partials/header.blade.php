<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                    @for($i = 2; $i <= count(Request::segments()); $i++)
                        {{strtoupper(Request::segment($i))}}
                   @endfor
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('adminlte.dashboard')}}">HOME</a></li>
                    @for($i = 2; $i <= count(Request::segments()); $i++)
                      <li class="breadcrumb-item active">
                         <a href="{{ URL::to( implode( '/', array_slice(Request::segments(), 0 ,$i, true)))}}">
                            {{strtoupper(Request::segment($i))}}
                         </a>
                      </li>
                   @endfor
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>