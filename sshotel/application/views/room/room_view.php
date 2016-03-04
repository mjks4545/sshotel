<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Room's
      <small>Preview</small>
    </h1>
  </section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- right column -->
            <div class="col-md-6">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Add A New Room</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <form role="form" action="<?=site_url()?>room/add_room" method="post">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Room Type :</label>
                    <input type="text" class="form-control" name="RoomType" placeholder="Room Type" />
                  </div>
                  <div class="form-group">
                    <label>Room Rent :</label>
                    <input type="text" class="form-control" name="RoomRent" placeholder="Room Rent" />
                  </div>

                  <!-- textarea -->
                  <div class="form-group">
                    <label>Notes :</label>
                    <textarea class="form-control" rows="3" name="Notes" placeholder="Notes"></textarea>
                  </div>
                  <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary">Add New Room</button>
                  </div>
                </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!--/.col (right) -->
    </div>
</section>
</div>