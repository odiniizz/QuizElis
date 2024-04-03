@extends('layout')
@section('content')

<div class="card border">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-center">
                <p class="texto">
                    <h4><strong>Pergunta 3:</strong></h4>
                </p>
            </div>
        </div>
        <form action="{{route('dadosPagina3')}}" method="POST">
  @csrf
  <div class="form-group py-4">
    <label for="pergunta">
      <strong>Quais os nomes dos três filhos de Elis Regina?</strong>
    </label>

    <div class="form-check py-4">
      <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="A">
      <label class="form-check-label" for="pergunta">
        Beto, João e Antônio
      </label>
    </div>

    <div class="form-check py-4">
      <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="B">
      <label class="form-check-label" for="pergunta">
        João Marcelo, Maria Rita e Pedro
      </label>
    </div>

    <div class="form-check py-4">
      <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="C">
      <label class="form-check-label" for="pergunta">
        Paulo. Maria Luiza e Elizabeth
      </label>
    </div>

    <div class="form-check py-4">
      <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="D">
      <label class="form-check-label" for="pergunta">
        Helena, Sílvia e Luísa
      </label>
    </div>

    <button type="submit" class="btn btn-primary btn-sm">Próxima</button>
    <button onclick="window.location.href = '/';" type="button" class="btn btn-danger btn-sm">Desistir</button>
  </div>
</form>
    </div>
</div>