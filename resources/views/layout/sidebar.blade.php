<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      SL<span>Auto</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Home</li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Painel</span>
        </a>
      </li>
            <!-- Gerenciamento de Usuários -->
      <li class="nav-item nav-category">Controle de Acesso</li>
        <li class="nav-item {{ active_class(['users/*']) }}">
        <a class="nav-link" data-toggle="collapse" href="#users" role="button" aria-expanded="{{ is_active_route(['users/*']) }}" aria-controls="users">
          <i class="link-icon" data-feather="user"></i>
          <span class="link-title">Usuários</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['users/*']) }}" id="users">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/users/create') }}" class="nav-link {{ active_class(['users/create']) }}">Criar</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/users/edit') }}" class="nav-link {{ active_class(['email/edit']) }}">Editar</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/users/list') }}" class="nav-link {{ active_class(['email/list']) }}">Listar</a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Aplicações -->
      <li class="nav-item nav-category">Aplicações</li>
       <li class="nav-item {{ active_class(['apps/aplicacoes']) }}">
        <a href="{{ url('/#') }}" class="nav-link">
          <i class="link-icon" data-feather="zap"></i>
          <span class="link-title">Comprador</span>
        </a>
      </li>

      <!-- Vendedor -->
         <li class="nav-item {{ active_class(['vendedor/*']) }}">
        <a class="nav-link" data-toggle="collapse" href="#vendedor" role="button" aria-expanded="{{ is_active_route(['vendedor/*']) }}" aria-controls="vendedor">
          <i class="link-icon" data-feather="coffee"></i>
          <span class="link-title">Vendedor</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['vendedor/*']) }}" id="vendedor">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/vendedor/chat') }}" class="nav-link {{ active_class(['vendedor/chat']) }}">Chat</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/vendedor/agenda') }}" class="nav-link {{ active_class(['vendedor/agenda']) }}">Agenda</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/vendedor/clientes') }}" class="nav-link {{ active_class(['vendedor/clientes']) }}">Clientes</a>
            </li>
          </ul>
        </div>
      </li>

      <!-- email -->
        <li class="nav-item {{ active_class(['email/*']) }}">
        <a class="nav-link" data-toggle="collapse" href="#email" role="button" aria-expanded="{{ is_active_route(['email/*']) }}" aria-controls="email">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Email</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['email/*']) }}" id="email">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/email/inbox') }}" class="nav-link {{ active_class(['email/inbox']) }}">Caixa de Entrada</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/email/read') }}" class="nav-link {{ active_class(['email/read']) }}">Ler</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/email/compose') }}" class="nav-link {{ active_class(['email/compose']) }}">Escrever</a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Loja Online -->
        <li class="nav-item {{ active_class(['apps/web']) }}">
        <a class="nav-link" data-toggle="collapse" href="#web" role="button" aria-expanded="{{ is_active_route(['web/*']) }}" aria-controls="web">
          <i class="link-icon" data-feather="chrome"></i>
          <span class="link-title">WebSite</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['web/*']) }}" id="web">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/#') }}" class="nav-link {{ active_class(['shop/estoque']) }}">Menu</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/#') }}" class="nav-link {{ active_class(['shop/anuncios']) }}">Rodapé</a>
            </li>
          </ul>
        </div>
      </li>

       <li class="nav-item {{ active_class(['apps/web']) }}">
        <a class="nav-link" data-toggle="collapse" href="#shop" role="button" aria-expanded="{{ is_active_route(['shop/*']) }}" aria-controls="web">
          <i class="link-icon" data-feather="shopping-cart"></i>
          <span class="link-title">Loja Online</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['shop/*']) }}" id="shop">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/#') }}" class="nav-link {{ active_class(['shop/estoque']) }}">Estoque</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/#') }}" class="nav-link {{ active_class(['shop/anuncios']) }}">Anuncios</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/#') }}" class="nav-link {{ active_class(['shop/listar']) }}">Campanhas</a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Bot -->
      <li class="nav-item nav-category">Robos</li>
        <li class="nav-item {{ active_class(['robos/*']) }}">
        <a class="nav-link" data-toggle="collapse" href="#robos" role="button" aria-expanded="{{ is_active_route(['robos/*']) }}" aria-controls="robos">
          <i class="link-icon" data-feather="slack"></i>
          <span class="link-title">Robos</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['robos/*']) }}" id="robos">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('robos/#') }}" class="nav-link {{ active_class(['robos/webmotors']) }}">Webmotors</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('robos/#') }}" class="nav-link {{ active_class(['robos/olx']) }}">OLX</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('robos/#') }}" class="nav-link {{ active_class(['robos/mercadolivre']) }}">Mercado Livre</a>
            </li>
        </div>
        </li>
    </ul>
  </div>
</nav>
