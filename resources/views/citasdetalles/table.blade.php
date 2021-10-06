<div class="table-responsive">
    <table class="table" id="citasdetalles-table">
        <thead>
            <tr>
                <th>Id Detallecita</th>
        <th>Id Cita</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($citasdetalles as $citasdetalle)
            <tr>
                <td>{{ $citasdetalle->id_detallecita }}</td>
            <td>{{ $citasdetalle->id_cita }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['citasdetalles.destroy', $citasdetalle->idCitas_detalle], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('citasdetalles.show', [$citasdetalle->idCitas_detalle]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('citasdetalles.edit', [$citasdetalle->idCitas_detalle]) }}" class='btn btn-default btn-xs'>
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
