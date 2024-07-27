<h1>Users</h1>

<table border="2">
    <tr>
        <td>Password</td>
        <td>Phone</td>
        <td>Email</td>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user->pass}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->email}}</td>
    </tr>
    @endforeach
</table>

