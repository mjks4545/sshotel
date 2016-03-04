<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            List Rooms
            <small>Preview</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><button class="btn btn-primary">Add New Room</button></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Room Type</th>
                        <th>Room Rent</th>
                        <th>Notes</th>
                        <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ( $data as $room ) : ?>  
                      <tr>
                        <td><?=$room['Room_Type']; ?></td>
                        <td><?=$room['Room_Rent']; ?></td>
                        <td><?=$room['Notes']; ?></td>
                        <td><?=$room['date_added']; ?></td>
                        <td>Edit</td>
                        <td>Delete</td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Room Type</th>
                        <th>Room Rent</th>
                        <th>Notes</th>
                        <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->