<div class="container" id="bodyMain">
  <div class="container">
    <form method="POST">
      <input type="text" placeholder="Nombre del virus" name="xname">
      <select name="xgenero">
        <option value="">Género</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Unknown">Unknown</option>
      </select>
      <select name="xregistros">
        <option value="">N° Registros</option>
        <option value="limit 3">3</option>
        <option value="limit 6">6</option>
        <option value="limit 15">15</option>
      </select>
      <button name="buscar" type="submit" class="btn btn-success">Buscar</button>                   
    </form>
    <section>
      <h6>Resultados encontrados: <?php echo $rows_count ?></h6>
    </section>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre del virus</th>
          <th scope="col">Adhesión</th>
          <th scope="col">Fecha de muestra</th>
          <th scope="col">Locación</th>
          <th scope="col">Anfitrión</th>
          <th scope="col">Otra locación</th>
          <th scope="col">Género</th>
          <th scope="col">Edad</th>
          <th scope="col">Estado</th>
          <th scope="col">Paso</th>
          <th scope="col">Especimen</th>
          <th scope="col">Otro anfitrión</th>
          <th scope="col">Linaje</th>
          <th scope="col">Clado</th>
          <th scope="col">Substituciones AA</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($rows_data as $rows) { ?>
        <tr>
          <th scope="row"><?php echo $rows->id ?></th>
          <td><?php echo $rows->virus_name ?></td>
          <td><?php echo $rows->accession_id ?></td>
          <td><?php echo $rows->collection_date ?></td>
          <td><?php echo $rows->location ?></td>
          <td><?php echo $rows->host ?></td>
          <td><?php echo $rows->additional_location ?></td>
          <td><?php echo $rows->gender ?></td>
          <td><?php echo $rows->patient_age ?></td>
          <td><?php echo $rows->patient_status ?></td>
          <td><?php echo $rows->passage ?></td>
          <td><?php echo $rows->specimen ?></td>
          <td><?php echo $rows->additional_host ?></td>
          <td><?php echo $rows->linage ?></td>
          <td><?php echo $rows->clade ?></td>
          <td><?php echo $rows->aa_substitutions ?></td>
        </tr>
        <?php }?>
      </tbody>
    </table>
  </div>
</div>