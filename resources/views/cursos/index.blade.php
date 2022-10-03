
<x-layout title="Cursos" >
    <h1>Cursos</h1>
    <form action={{route('cursos.store')}} method="post" >
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input class="form-control" type="text" id="name" name="name">
        </div>
        <button type="submit" class="btn btn-primary mb-4 ">Adicionar</button>
    </form>
    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{$mensagemSucesso}}
    </div>
    @endisset
    <table class="table table-striped table-bordered">
        <thead >
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>

            </tr>
        </thead>
        @foreach ($cursos as $curso)
        <tbody>
            <tr>
                <th scope="row">{{$curso->id}}</th>
                <td>{{$curso->name}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>

</x-layout>
