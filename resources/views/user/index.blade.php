@can('user-create')
    <form action="{{route('user.create')}}">
        <input type="submit" value="Create" class="go-right">
    </form>
@endcan
<table>
    <tr>
        <td><strong>Username</strong></td>
        <td><strong>Email</strong></td>
        <td><strong>Roles</strong></td>
        @can('user-edit')
            <td><strong>Edit</strong></td>
        @endcan
        @can('user-delete')
            <td><strong>Delete</strong></td>
        @endcan
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                @foreach ($user->roles()->pluck('name') as $role)
                    <span class="role">{{$role}}</span>
                @endforeach
            </td>
            @can('user-edit')
                <td>
                    <form action="{{route('user.edit', $user->id)}}">
                        <input type="submit" value="Edit">
                    </form>
                </td>
            @endcan
            @can('user-delete')
                <td>
                    <form action="{{route('user.delete', $user->id)}}" method="post" onsubmit="return confirmDelete()">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="submit" value="Delete">
                    </form>
                </td>
            @endcan
        </tr>
    @endforeach
</table>
@endsection