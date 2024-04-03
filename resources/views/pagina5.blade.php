@extends('layout')
@section('content')

<div class="card border">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-center">
                <p class="texto">
                    <h4><strong>Pergunta 5:</strong></h4>
                </p>
            </div>
        </div>
        <form action="{{route('dadosPagina5')}}" method="POST">
  @csrf
  <div class="form-group py-4">
    <label for="pergunta">
      <strong>Qual premiação fez com que a carreira de Elis alavancasse, e qual música foi apresentada por ela?</strong>
    </label>

    <div class="form-check py-4">
      <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="A">
      <label class="form-check-label" for="pergunta">
        Meu Brasil Brasileiro, e a música foi "O Bêbado e o Equilibrista"
      </label>
    </div>

    <div class="form-check py-4">
      <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="B">
      <label class="form-check-label" for="pergunta">
        O Fino da Bossa, e a música foi "Águas de Março"
      </label>
    </div>

    <div class="form-check py-4">
      <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="C">
      <label class="form-check-label" for="pergunta">
        Festival de Música Brasileira, e a música foi "Arrastão"
      </label>
    </div>

    <div class="form-check py-4">
      <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="D">
      <label class="form-check-label" for="pergunta">
        Jabuti, e a música foi "Madalena"
      </label>
    </div>

    <button type="submit" class="btn btn-primary btn-sm">Próxima</button>
    <button onclick="window.location.href = '/';" type="button" class="btn btn-danger btn-sm">Desistir</button>
  </div>
</form>
    </div>
</div>