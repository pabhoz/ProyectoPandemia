<table>
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
    </tbody>
</table>