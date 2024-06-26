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
        Elis Regina teve que depor ao SNI (Serviço Nacional de Informações), um órgão de coleta de informações e de 
        inteligência criado durante o período da Ditadura Militar, devido à uma entrevista concedida à imprensa holandesa, 
        onde ela disse que o país era "governado por gorilas".
      </label>
    </div>

    <div class="form-check py-4">
      <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="B">
      <label class="form-check-label" for="pergunta">
        Grávida de seu primeiro filho, Rita Lee teve a ajuda de Elis Regina para sair da prisão durante a ditadura militar.
      </label>
    </div>

    <div class="form-check py-4">
      <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="C">
      <label class="form-check-label" for="pergunta">
        Elis Regina foi obrigada à cantar o Hino Nacional na cerimônia de abertura das Olímpiadas do Exército de 1972, 
        e foi duramente criticada pela imprensa de esquerda, sendo acusada de colaborar com o regime.
      </label>
    </div>

    <div class="form-check py-4">
      <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="D">
      <label class="form-check-label" for="pergunta">
        Elis Regina fez sua primeira apresentação em São Paulo, na Rádio Difusora, no ano de 1956. Dias após, Os pais de Elis
        foram contatados por gravadoras, que fizeram ofertas para lançarem Elis na indústria da música. 
        Porém, seus pais recusaram, devido à idade.
      </label>
    </div>

    <button type="submit" class="btn btn-primary btn-sm">Próxima</button>
    <button onclick="window.location.href = '/';" type="button" class="btn btn-danger btn-sm">Desistir</button>
  </div>
</form>
    </div>
</div>