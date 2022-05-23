@extends('admin')

@section('contenu')
    <table class="table">
        <thead>
            <tr class="table-info">
                <th scope="col">ID</th>
                <th scope="col">NOM</th>
                <th scope="col">PRENOM</th>
                <th scope="col">SEXE</th>
                <th scope="col">TYPE</th>
                <th scope="col">DATE</th>
                <th scope="col">PSEUDO</th>
                <th scope="col">E-MAIL</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
             @foreach ($users as $user)
        <tbody>
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->prenom }}</td>
                <td>{{ $user->sexe }}</td>
                <td>{{ $user->admin }}</td>
                <td>{{ $user->date }}</td>
                <td>{{ $user->pseudo }}</td>
                <td>{{ $user->email }}</td>
                <td class="text-right">
                    <button type="button" class="btn btn-warning rounded-pill" style="width: 80px">EDIT</button>
                    <button type="button" class="btn btn-danger rounded-pill  "style="width: 80px">DELETE</button>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
@endsection
