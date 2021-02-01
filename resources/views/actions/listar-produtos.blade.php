@extends('admin')
@section('contents')
    <div class="card-listagem">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome Produto</th>
                <th scope="col">quantidade</th>
              </tr>
            </thead>
            <tbody id="body-list">

            </tbody>
          </table>
          <div class="butao-cont">
            <button class="btn btn-primary" id="carr" onclick="carrMais()" >Carregar Mais</button>
          </div>
    </div>
@endsection
