<div class="content" style="min-height: 956px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pacientes
        <small>Crear</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            
<div class="col-md-12">
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Paciente</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="create">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nivel de afectación</label>
                  <select name="level" class="form-control">
                      <option value="">Seleccione el nivel</option>
                      <?php 
                            foreach ($this->levels as $level) {
                                echo '<option value="'.$level->getId().'">'.$level->getName().'</option>';
                            }
                      ?>
                  </select>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
</div>
            
                  </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
        
   <?php echo $this->asyncCreation("#create",'Patients/createAction','Paciente',$method="POST",'Patients'); ?>