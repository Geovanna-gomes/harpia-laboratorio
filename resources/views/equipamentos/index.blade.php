@include('layout.header')
@include('layout.navbar')
@include('layout.sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Equipamentos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item "><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item active">Equipamentos</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->

        <div class="card">
          <div class="card-header">
            <a href="/equipamentos/novo" class="btn btn-primary">
              Novo Equipamento 
              <i class="fas fa-plus"></i>
            </a>

            <div class="card-tools">
              <form action="">
                <div class="input-group input-group" style="width: 150px;">
                  <input type="text" name="pesquisa" class="form-control float-right" placeholder="Pesquisar" value="{{ $pesquisa }}">
  
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap table-bordered ">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th>Equipamento</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Fabricante</th>
                  <th>Fornecedor</th>
                  <th>Ações</th>
                </tr>
              </thead>
              @foreach ($equipamentos as $item)
              <tbody>
                <tr>

@include('layout.menu')
<div class="container corpo">
  <h2>Equipamentos</h2>

  <div class="row">
      <div class="col">
          <a href="/equipamentos/novo" class="btn btn-primary">
            Novo Equipamento 
            <i class="fas fa-plus"></i>
          </a>
      </div>
      <div class="col ">
        <form action="">
          <div class="input-group justify-content-end">
            <div class="form-outline ">
              <input type="search" placeholder="pesquisar" id="form1" class="form-control" name="pesquisa"/>
              <label class="form-label" for="form1">Pesquisar</label>
            </div>
            <button type="submit" class="btn btn-primary">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </form>
    </div>
  </div>
               

                    <td>{{ $item->id }}</td>
                    <td>{{ $item->equipamento }}</td>
                    <td>{{ $item->marca }}</td>
                    <td>{{ $item->equipamento }}</td>
                    <td>{{ $item->modelo }}</td>
                    <td>{{ $item->fabricante }}</td>
                    <td>{{ $item->fornecedor }}</td>
                    <td>
                      <a href="equipamentos/editar/{{ $item->id }}" class="btn btn-warning">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="equipamentos/deletar/{{ $item->id }}" class="btn btn-danger" onclick="return confirm('Deseja realmente deletar?')">
                        <i class="fas fa-trash"></i>
                      </a>


                    </td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
          <!-- /.card-body -->
        </div>
  <div class="row">
    <div class="col">
      {{ $equipamentos->links() }}
    </div>
  </div>

  <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

@include('layout.footer')
