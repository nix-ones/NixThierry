@extends('admin')

@section('contenu')

<table class="table">

    <thead>
        <div class="d-grid gap-2">
            
            <a  type="button" class="btn btn-primary" href="{{URL('/add_article')}}">Ajouter article</a>
          </div>
        <tr class="table-info">
            <th scope="col">ID</th>
            <th scope="col">TITRE</th>
            <th scope="col">IMAGE</th>
            <th scope="col">TEXT</th>
            <th scope="col">ACTION</th>
        </tr>
    </thead>
</table>

@endsection
