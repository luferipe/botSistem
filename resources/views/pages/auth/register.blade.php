@extends('layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-md-4 pr-md-0">
            <div class="auth-left-wrapper" style="background-image: url({{ url('./assets/images/login.png') }})">

            </div>
          </div>
          <div class="col-md-8 pl-md-0">
            <div class="auth-form-wrapper px-4 py-5">
              <a href="#" class="noble-ui-logo d-block mb-2">Sl<span>Auto</span></a>
              <h5 class="text-muted font-weight-normal mb-4">Criar conta</h5>
              <form class="forms-sample">
                <div class="form-group">
                  <label for="exampleInputUsername1">Usuário</label>
                  <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="Username" placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Senha</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="current-password" placeholder="Password">
                </div>
                <div class="form-check form-check-flat form-check-primary">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Lebrar de mim
                  </label>
                </div>
                <div class="mt-3">
                  <a href="{{ url('/') }}" class="btn btn-primary mr-2 mb-2 mb-md-0">Inscreva-se</a>
                  <button type="button" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                    <i class="btn-icon-prepend" data-feather="twitter"></i>
                    Inscreva-se no twitter
                  </button>
                </div>
                <a href="{{ url('/auth/login') }}" class="d-block mt-3 text-muted">Já é um usuário? Entrar</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
