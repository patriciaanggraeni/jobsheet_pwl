<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Artikel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Artikel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>

        @yield('card-body')
        @yield('profile')
        @yield('mahasiswa')

        <div class="mahasiswa"></div>
        <div class="profile"></div>
        <div class="card-body">


        <div class="container">
            <form action="/articles" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title: </label>
                    <input type="text" class="form-control" required="required" name="title"></br>

                    <label for="content">Content: </label>
                    <textarea type="text" class="form-control" required="required" name="content"></textarea></br>

                    <label for="image">Feature Image: </label>
                    <input type="file" class="form-control" required="required" name="image"></br>

                </div>

                <button type="submit" name="submit" class="btn btn-primary float-left">Simpan</button>

            </form>
        </div>

        <!-- /.card-body -->
        <div class="card-footer"></div>

      </div>

    </section>

</div>
