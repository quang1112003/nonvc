@extends("layout")
@section("content-header")
    <h1>List Classes</h1>
@endsection
@section("main")
    <!-- Content Header (Page header) -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List Classes</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 10%">
                        Class ID
                    </th>
                    <th style="width: 10%">
                        Class Name
                    </th>
                    <th style="width: 10%">
                        Room Name
                    </th>
                    <th style="width: 10%">
                        Student Count
                    </th>
                    <th style="width: 10%">

                    </th>



                </tr>
                </thead>
                <tbody>
                @foreach ($classes as $item)
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                            {{$item->cid}}
                    </td>
                    <td>
                        {{$item->name}}
                    </td>
                    <td>
                       {{$item->room}}
                    </td>
                    <td>
                        {{$item->students_count}}
                    </td>


                    <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {!! $classes->links() !!}
        </div>
        <!-- /.card-body -->
    </div>
@endsection
