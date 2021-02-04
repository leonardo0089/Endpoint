@extends('admin')
@section('contents')
    <div class="card-listagem">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">IP</th>
                <th scope="col">Nome Usuario</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col">Endereco</th>
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
