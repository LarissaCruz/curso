
<x-layout title="Cursos" >
    <h1>Cursos</h1>
    <table class="table table-striped table-dark">
        <thead >       
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">#</th>
            </tr>
        </thead>
         @foreach ($cursos as $curso)
        <tbody>
            <tr>
                <th scope="row">{{$curso->id}}</th>
                <td>{{$curso->name}}</td>
                <td>
                    <form action="{{ route('cursos.index', $curso->id) }}" method="post">
                        @csrf
                        <button class="btn btn-danger btn-sm">X</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
   
</x-layout>
