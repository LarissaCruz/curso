
<x-layout title="Cursos" >
    <h1>Cursos</h1>
    <a href="/cursos/criar" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">
        @foreach ($cursos as $curso)
        <li class="list-group-item">{{$curso}}</li>
        @endforeach
    </ul>
</x-layout>
