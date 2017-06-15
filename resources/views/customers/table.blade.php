<table class="table table-responsive" id="customers-table">
    <thead>
        <th>Name</th>
        <th>Age</th>
        <th>Phone</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($customers as $customers)
        <tr>
            <td>{!! $customers->name !!}</td>
            <td>{!! $customers->age !!}</td>
            <td>{!! $customers->phone !!}</td>
            <td>{!! $customers->created_at !!}</td>
            <td>{!! $customers->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['customers.destroy', $customers->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('customers.show', [$customers->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('customers.edit', [$customers->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>