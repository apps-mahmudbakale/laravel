<div>
    <table id="datatables-dashboard-orders" class="table table-sm table-striped my-0">
        <thead>
            <tr>
                <th>S/N</th>
                <th>Ware House Name</th>
                <th>Location</th>
                <th>Capacity</th>
                <th>Date Created</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($warehouses as $warehouse)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $warehouse->name }}</td>
                    <td>{{ $warehouse->name }}</td>
                    <td>{{$warehouse->location}}</td>
                    <td>{{$warehouse->capacity }}</td>
                    <td>{{$warehouse->created_at->diffForHumans()}}</td>
                    <td class="btn-group">
                        <a class="btn btn-info btn-sm" href="{{route('app.warehouses.edit', $warehouse->id)}}">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="" class="btn btn-danger btn-sm"
                            onclick="event.preventDefault(); document.getElementById('del#{{ $warehouse->id }}').submit();">
                            <i class="fa fa-trash"></i>
                        </a>
                        <form id="del#{{ $warehouse->id }}" action="{{route('app.warehouses.destroy', $warehouse->id)}}" method="POST"
                            onsubmit="return confirm('Are you sure');" style="display: inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
