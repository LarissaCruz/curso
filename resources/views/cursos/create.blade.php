<x-layout title="Cursos - create">
    <h1>Novo Curso</h2>
    <form action="/cursos/salvar" method="post" >
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Nome:</label>
          <input class="form-control" type="text" id="nome" name="nome">
      </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
  
</x-layout>