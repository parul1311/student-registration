@auth
<div class="sidebar">
    <ul class="menu">
        @if(auth()->user()->hasRole('admin'))
      <li><a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
      <li><a href="{{ route('admin.users.index',['role'=>'Admin']) }}"><i class="fas fa-users"></i>Admins</a></li>
      <li><a href="{{ route('admin.users.index',['role'=>'Student']) }}"><i class="fas fa-users"></i>Students</a></li>
      @else
      <li><a href="{{ route('home') }}"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
      @endif
    </ul>
  </div>
@endauth