<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Felio
            <small>Below are the Felio Details</small>
          </h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-3">
                    <label for="name">Name :</label> <?=$values['name']?>
                </div>
                <div class="col-md-3"><label for="company">Company :</label> <?=$values['company']?> </div>
                <div class="col-md-2"><label for="room no">Room No :</label> <?=$values['room_no']?> </div>
                <div class="col-md-2"><label for="reg no"> Reg No   :</label> <?=$values['reg_no']?> </div>
                <div class="col-md-2"><label for="bill no">Bill No :</label> <?=$values['bill_no']?> </div>
            </div>
            <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Felio Table</h3>
<!--                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>-->
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Date</th>
                      <th>Room Rent</th>
                      <th colspan="2">Food </th>                     
                      <th colspan="2">Hall</th>
                      <th colspan="2">Mini Bar</th>
                      <th colspan="2">Laundry</th>
                      <th colspan="2">Misc</th>
                      <th>Remarks</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>VN</th>
                        <th>Rs</th>
                        <th>VN</th>
                        <th>Rs</th>
                        <th>VN</th>
                        <th>Rs</th>
                        <th>VN</th>
                        <th>Rs</th>
                        <th>VN</th>
                        <th>Rs</th>
                        <th></th>
                    </tr>
                <?php foreach ( $values['result'] as $object ) { ?>
                    <tr>
                      <td><?=$object->date_added?></td>
                      <td><?=$object->Room_Rent?></td>
                      <td><?=$object->Food_Vn?></td>
                      <td><?=$object->Food_Rs?></td>
                      <td><?=$object->Hall_Vn?></td>
                      <td><?=$object->Hall_Rs?></td>
                      <td><?=$object->Mini_Bar_Vn?></td>
                      <td><?=$object->Mini_Bar_Rs?></td>
                      <td><?=$object->Laundry_Vn?></td>
                      <td><?=$object->Landry_Rs?></td>
                      <td><?=$object->Misc_Vn?></td>
                      <td><?=$object->Misc_Rs?></td>
                      <td><?=$object->Remarks?></td>
                    </tr> 
                <?php } ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
          <div class="row">  
            <!-- right column -->
            <div class="col-md-6">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">General Elements</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled/>
                    </div>

                    <!-- textarea -->
                    <div class="form-group">
                      <label>Textarea</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="form-group">
                      <label>Textarea Disabled</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                    </div>

                    <!-- input states -->
                    <div class="form-group has-success">
                      <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
                      <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group has-warning">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with warning</label>
                      <input type="text" class="form-control" id="inputWarning" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group has-error">
                      <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with error</label>
                      <input type="text" class="form-control" id="inputError" placeholder="Enter ..."/>
                    </div>

                    <!-- checkbox -->
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"/>
                          Checkbox 1
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox"/>
                          Checkbox 2
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" disabled/>
                          Checkbox disabled
                        </label>
                      </div>
                    </div>

                    <!-- radio -->
                    <div class="form-group">
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                          Option one is this and that&mdash;be sure to include why it's great
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                          Option two can be something else and selecting it will deselect option one
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled/>
                          Option three is disabled
                        </label>
                      </div>
                    </div>

                    <!-- select -->
                    <div class="form-group">
                      <label>Select</label>
                      <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Select Disabled</label>
                      <select class="form-control" disabled>
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>

                    <!-- Select multiple-->
                    <div class="form-group">
                      <label>Select Multiple</label>
                      <select multiple class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Select Multiple Disabled</label>
                      <select multiple class="form-control" disabled>
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>

                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) --> 
            <!-- right column -->
            <div class="col-md-6">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">General Elements</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled/>
                    </div>

                    <!-- textarea -->
                    <div class="form-group">
                      <label>Textarea</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="form-group">
                      <label>Textarea Disabled</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                    </div>

                    <!-- input states -->
                    <div class="form-group has-success">
                      <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
                      <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group has-warning">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with warning</label>
                      <input type="text" class="form-control" id="inputWarning" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group has-error">
                      <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with error</label>
                      <input type="text" class="form-control" id="inputError" placeholder="Enter ..."/>
                    </div>

                    <!-- checkbox -->
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"/>
                          Checkbox 1
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox"/>
                          Checkbox 2
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" disabled/>
                          Checkbox disabled
                        </label>
                      </div>
                    </div>

                    <!-- radio -->
                    <div class="form-group">
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                          Option one is this and that&mdash;be sure to include why it's great
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                          Option two can be something else and selecting it will deselect option one
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled/>
                          Option three is disabled
                        </label>
                      </div>
                    </div>

                    <!-- select -->
                    <div class="form-group">
                      <label>Select</label>
                      <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Select Disabled</label>
                      <select class="form-control" disabled>
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>

                    <!-- Select multiple-->
                    <div class="form-group">
                      <label>Select Multiple</label>
                      <select multiple class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Select Multiple Disabled</label>
                      <select multiple class="form-control" disabled>
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>

                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>
        </section>
    </div>