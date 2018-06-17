@foreach($users as $user)
    <tr>
        <td>test</td>
        <td>{{ $user->username }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->surname }}</td>
        <td>{{ $user->employee }}</td>
        <td>{{ $user->admin }}</td>
    </tr>
@endforeach