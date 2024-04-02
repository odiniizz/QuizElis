@extends('layout')
@section('content')

<div class="card border">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-center">
                <p class="texto">
                    <h4><strong>Pergunta 4:</strong></h4>
                </p>
            </div>
        </div>
        <form action="{{route('dadosPagina4')}}" method="POST">
  @csrf
  <div class="form-group py-4">
    <label for="pergunta">
      <strong>Apenas um destes acontecimentos é falso. Qual é?</strong>
    </label>

    <div class="form-check py-4">
      <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="A">
      <label class="form-check-label" for="pergunta">
        Elis Regina teve que depor ao SNI (Serviço Nacional de Informações) durante o período da Ditadura Militar, devido
        à uma entrevista, onde ela disse que o país era "governado por gorilas"
      </label>
    </div>

    <div class="form-check py-4">
      <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="B">
      <label class="form-check-label" for="pergunta">
        Elis ajudou a tirar Rita Lee, que estava grávida, da prisão durante o período da Ditadura Militar
      </label>
    </div>

    <div class="form-check py-4">
      <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="C">
      <label class="form-check-label" for="pergunta">
        Elis Regina foi obrigada à cantar na cerimônia de abertura dos Jogos Olímpicos Militares
      </label>
    </div>

    <div class="form-check py-4">
      <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="D">
      <label class="form-check-label" for="pergunta">
        
      </label>
    </div>

    <button type="submit" class="btn btn-primary btn-sm">Próxima</button>
    <button onclick="window.location.href = '/';" type="button" class="btn btn-danger btn-sm">Desistir</button>
  </div>
</form>
    </div>
</div>