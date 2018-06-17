@foreach($users as $user)
    <tr>
        <td>
            <a href="/user/{{$user->id}}" class="btn btn-sm btn-outline-secondary">
                {{ $user->username }}
            </a>
        </td>
        <td>
            {{ $user->email }}
        </td>
        {{--
        <td>{{ $user->name }}</td>
        <td>{{ $user->surname }}</td>
        --}}
        <td>
            {{ $user->employee }}
        </td>
        <td>
            {{ $user->admin }}
        </td>
    </tr>
@endforeach