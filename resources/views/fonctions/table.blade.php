<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table table-striped" id="fonctions-table">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($fonctions as $fonction)
                <tr>
                    <td>{{ $fonction->nom }}</td>
                    <td>{{ $fonction->description }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['fonctions.destroy', $fonction->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('fonctions.show', [$fonction->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('fonctions.edit', [$fonction->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $fonctions])
        </div>
        <div class="float-left">
                                <button type="button" class="btn btn-default swalDefaultQuestion">
                                    <i class="fas fa-download"></i> Exporter
                                </button>
                                <button type="button" class="btn btn-default swalDefaultQuestion">
                                    <i class="fas fa-file-import"></i> Importer
                                </button>
        </div>
    </div>
</div>
