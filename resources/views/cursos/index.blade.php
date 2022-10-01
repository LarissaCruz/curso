
<x-layout title="Cursos" >
    <h1>Cursos</h1>
    <ul class="list-group ">
        @foreach ($cursos as $curso)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$curso->name}}
            <form action="{{ route('cursos.index', $curso->id) }}" method="post">
                @csrf
                <button class="btn btn-danger btn-sm">X</button>
            </form>
        </li>
        @endforeach
    </ul>
</x-layout>
