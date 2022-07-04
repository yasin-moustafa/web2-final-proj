@extends('admin.layout.master')
@section('title')
    Store
@endsection
@section('titlePage')
    Show Categore Page
@endsection
@section('body')

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projects</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Categore Name
                        </th>
                        <th style="width: 30%">
                            Categore dec
                        </th>

                    </tr>
                    </thead>
                    @foreach($Categore as $Categore)
                        <tbody>
                        <tr>
                            <td>
                                {{$Categore->id}}
                            </td>
                            <td>
                                {{$Categore->name}}
                            </td>
                            <td>
                                {{$Categore->dec}}
                            </td>

                            <td class="project-actions text-right">

                                <a class="btn btn-info btn-sm" href="{{route('categore.edit',[$Categore->id])}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <form class=""  method="post" action="{{route('categore.destroy',[$Categore->id])}}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger inline "><i class="fas fa-pencil-alt">
                                        </i>
                                        Delete</button>
                                </form>

                            </td>
                        </tr>

                        </tbody>
                    @endforeach
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
