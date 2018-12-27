<ul class="sidebar-menu" data-widget="tree">
  <li class="header">Navegación</li>
  <!-- Optionally, you can add icons to the links -->
  <li class="active"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> <span>Inicio</span></a></li>
  <li><a href="{{ route('admin.empresas.index')}}"><i class="fa fa-area-chart" data-toggle="modal" data-target="#modal-default"></i> <span>Graficos de análisis</span></a></li>
  <li><a href="{{ route('admin.empresas.matriz')}}"><i class="fa fa-list"  data-target="#modal-default"></i> <span>Matriz de Riesgos</span></a></li>
  {{-- <li><a href="#"><i class="fa fa-arrow-circle-up"></i> <span>Carga de datos</span></a></li> --}}
  {{-- <li class="treeview">
    <a href="#"><i class="fa fa-bars"></i> <span>Carga de datos</span>
      <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="#"><i class="fa fa-bank"></i> Alta de Empresa</a></li>
      <li><a href="#"><i class="fa fa-list"></i> Lista de activos</a></li>
    </ul>
  </li> --}}
</ul>
