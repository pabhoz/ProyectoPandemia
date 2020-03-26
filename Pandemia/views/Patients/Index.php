<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Pacientes</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">id</th>
                  <th>Nombre</th>
                  <th>Nivel de blah blah</th>
                </tr>
                <?php foreach($this->patients as $patient): ?>
                <tr>
                  <td><?php echo $patient["id"]; ?></td>
                  <td><?php echo $patient["name"]; ?></td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: <?php echo 33.3 * $patient["level"]; ?>%"></div>
                    </div>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>