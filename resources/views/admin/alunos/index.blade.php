@extends('layouts.main')
@section('content')
<div class="container-fluid text-center">
  <h1 class="mt-3">Alunos cadastrados</h1>
</div>
<hr>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Usuário</th>
      <th>E-mail</th>
      <th>Cidade</th>
      <th>Estado</th>
      <th>Cep</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($alunos as $aluno)
      <tr>
        <td>{{ $aluno->id }}</td>
        <td>{{ $aluno->nome }}</td>
        <td>{{ $aluno->usuario }}</td>
        <td>{{ $aluno->email }}</td>
        <td>{{ $aluno->cidade }}</td>
        <td>{{ $aluno->estado }}</td>
        <td>{{ $aluno->cep }}</td>
        <td>
          <a href="{{ route('aluno.edit', ['aluno'=>$aluno->id]) }}">Editar</a>
          <form action="{{ route('aluno.destroy', ['aluno'=>$aluno->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection