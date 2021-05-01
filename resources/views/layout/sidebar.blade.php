<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      Sistem<span>Bot</span>
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
      <!-- Aplicações -->
      <li class="nav-item nav-category">Aplicações</li>
       <li class="nav-item {{ active_class(['apps/aplicacoes']) }}">
        <a href="{{ url('/#') }}" class="nav-link">
          <i class="link-icon" data-feather="zap"></i>
          <span class="link-title">Comprador</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['apps/aplicacoes']) }}">
        <a href="{{ url('/#') }}" class="nav-link">
          <i class="link-icon" data-feather="coffee"></i>
          <span class="link-title">Vendedor</span>
        </a>
      </li>
      <!-- Gerenciamento de Usuários -->
      <li class="nav-item nav-category">Usuários</li>
       <li class="nav-item {{ active_class(['apps/calendar']) }}">
        <a href="{{ url('/#') }}" class="nav-link">
          <i class="link-icon" data-feather="user-plus"></i>
          <span class="link-title">Criar</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['apps/calendar']) }}">
        <a href="{{ url('/#') }}" class="nav-link">
          <i class="link-icon" data-feather="coffee"></i>
          <span class="link-title">Editar</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['apps/calendar']) }}">
        <a href="{{ url('/#') }}" class="nav-link">
          <i class="link-icon" data-feather="coffee"></i>
          <span class="link-title">Listar</span>
        </a>
      </li>

      <!-- Ferramentas -->
       <li class="nav-item nav-category">Ferramentas</li>
       <li class="nav-item {{ active_class(['email/*']) }}">
        <a class="nav-link" data-toggle="collapse" href="#email" role="button" aria-expanded="{{ is_active_route(['email/*']) }}" aria-controls="email">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Email</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['email/*']) }}" id="email">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/email/inbox') }}" class="nav-link {{ active_class(['email/inbox']) }}">Inbox</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/email/read') }}" class="nav-link {{ active_class(['email/read']) }}">Read</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/email/compose') }}" class="nav-link {{ active_class(['email/compose']) }}">Compose</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ active_class(['apps/chat']) }}">
        <a href="{{ url('/apps/chat') }}" class="nav-link">
          <i class="link-icon" data-feather="message-square"></i>
          <span class="link-title">Chat</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['apps/calendar']) }}">
        <a href="{{ url('/apps/calendar') }}" class="nav-link">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">Agenda</span>
        </a>
      </li>
    </ul>
  </div>
</nav>

