<table border="2">
    <tr>
        <td>Sno</td>
        <td>Name</td>
        <td>pass</td>
        <td>city</td>
    </tr>
    @foreach($data as $students)
    <td>{{$students->sno}}</td>
    <td>{{$students->name}}</td>
    <td>{{$students->pass}}</td>
    <td>{{$students->city}}</td>
    @endforeach
</table>