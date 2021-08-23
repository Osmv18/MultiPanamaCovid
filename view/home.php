<div class="container" id="bodyMain">
  <div class="container">
    <form method="POST" action="">
      <div class="form-group">
        <div class="row">
          <div class="col">
            <input type="filter" class="form-control" id="exampleInputFilter" aria-describedby="filterSearch" placeholder="Buscar">
          </div>
          <div class="col">
            <button type="submit" class="btn btn-primary">Buscar</button>
          </div>
        </div>
      </div>
    </form>
    <div class="outer-container container">
      <form action="?c=controller_load_excel" method="post" name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
        <div>
          <label>Cargar excel</label> 
          <input type="file" name="file" id="file" accept=".xls,.xlsx" >
          <button type="submit" id="submit" name="import" class="btn btn-success">Cargar</button>
        </div>
      </form>
    </div>
  </div>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>