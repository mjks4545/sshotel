 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Customer Registration Form
            <small>Enter Data Below</small>
          </h1>
          <div class="breadcrumb">
              Registration Number : <span id="registeration_no_value"><?=$reg_no->Reg_No;?></span>
          </div>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Registration Card</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <div id="message"></div>
                <form role="form" id="registeration-form" action="<?=site_url()?>registration/after_form_posts" method="post">
                  <div class="box-body">
                    <div class="col-md-12">
                        <div id="name-div" class="form-group">
                            <label id="name-label" for="name">Name :</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-6">  
                        
                        <div id="nationality-div" class="form-group">
                          <label id="nationality-label" for="nationality">Nationality :</label>
                          <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nationality">
                        </div>
                        
                        <div id="id_pass-div" class="form-group">
                          <label id="id_pass-label" for="id_pass">ID Card Or Passport Number :</label>
                          <input type="text" class="form-control" id="id_pass" name="id_pass" placeholder="ID Card Or Passport Number">
                          <input type="hidden" id="url" value="<?=site_url();?>registration/get_values_through_id">
                          <input type="hidden" id="bool" name="bool" value="false" />
                          <input type="hidden" id="reg_no" name="reg_no" />
                        </div>
                        
                        <div id="telephone_no-div" class="form-group">
                          <label id="telephone_no-label" for="telephone_no">Telephone No :</label>
                          <input type="text" class="form-control" id="telephone_no" name="telephone_no" placeholder="Telephone No">
                        </div>
                        
                        <div id="purpose_of_visit-div" class="form-group">
                          <label id="purpose_of_visit-label" for="purpose_of_visit">Purpose of Visit :</label>
                          <input type="text" class="form-control" id="purpose_of_visit" name="purpose_of_visit" placeholder="Purpose of Visit">
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        
                        <div id="profession-div" class="form-group">
                          <label id="profession-label" for="profession">Profession :</label>
                          <input type="text" class="form-control" id="profession" name="profession" placeholder="Profession">
                        </div>
                        
                        <div id="date_of_issue-div" class="form-group">
                          <label id="date_of_issue-label" for="date_of_issue">Date of Issue :</label>
                          <input type="date" class="form-control" id="date_of_issue" name="date_of_issue" placeholder="Date of Issue">
                        </div>
                        
                        <div id="date_of_birth-div" class="form-group">
                          <label id="date_of_birth-label" for="date_of_birth">Date of Birth :</label>
                          <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Date of Birth">
                        </div>
                        
                    </div>
                    <div class="col-md-12">
                        <div id="address-div" class="form-group">
                            <label id="address-label" for="address">Address :</label>
                            <textarea class="form-control" id="address" name="address" placeholder="Address"></textarea>
                        </div>  
                    </div>
                    <div class="col-md-4">
                        
                        <div class="form-group">
                            <label for="date_of_arrival">Date of Arrival :</label>
                            <input type="text" class="form-control" data-provide="datepicker" id="date_of_arrival" name="date_of_arrival" value="<?=date("m/d/Y");?>" placeholder="Date of Arrival" /> 
                        </div>
                        
                        <div id="date_of_departure-div" class="form-group">
                            <label id="date_of_departure-label" for="date_of_departure">Date of Departure :</label>
                            <input type="date" class="form-control" id="date_of_departure" name="date_of_departure" placeholder="Date of Departure">
                        </div>
                    
                    </div>
                    <div class="col-md-4">
                        
                        <div class="bootstrap-timepicker">
                            <div class="form-group">
                                <label for="time_of_arrival">Time :</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="time_of_arrival" name="time_of_arrival" value="<?php date_default_timezone_set('Asia/Karachi'); echo date("g:i A"); ?>" placeholder="Time">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <div class="bootstrap-timepicker">
                            <div id="time_of_departure-div" class="form-group">
                                <label id="time_of_departure-label" for="time_of_departure">Time :</label>
                                <div class="input-group">
                                    <input type="text" class="form-control timepicker" id="time_of_departure" name="time_of_departure" placeholder="Time">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>    
                            </div>  
                        </div>
                        
                        
                    </div>
                    <div class="col-md-4">
                        
                        <div id="from-div" class="form-group">
                          <label id="from-label" for="from">From :</label>
                          <input type="text" class="form-control" id="from" name="from" placeholder="From">
                        </div>
                        <div id="destination-div" class="form-group">
                          <label id="destination-label" for="destination">Destination :</label>
                          <input type="text" class="form-control" id="destination" name="destination" placeholder="Destination">
                        </div>
                        
                    </div>
                    <div class="col-md-12">
                        <div id="company-div" class="form-group">
                          <label id="company-label" for="company">Company :</label>
                          <input type="text" class="form-control" id="company" name="company" placeholder="Company">
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        <div id="room_no-div" class="form-group">
                            <label id="room_no-label" for="room_no">Room No :</label>
                            <input type="number" class="form-control" id="room_no" name="room_no" placeholder="Room No">
                        </div>
                    </div>  
                    <div class="col-md-2">
                        <div id="persons-div" class="form-group">
                            <label id="persons-label" for="persons">Persons :</label>
                            <input type="number" class="form-control" id="persons" name="persons" placeholder="Persons">
                        </div>
                    </div>  
                    <div class="col-md-2">
                        <div id="rate-div" class="form-group">
                            <label id="rate-label" for="rate">Rate :</label>
                            <input type="decimal" class="form-control" id="rate" name="rate" placeholder="Rate">
                        </div>
                    </div>  
                    <div class="col-md-2">
                        <div id="deposited-div" class="form-group">
                            <label id="deposited-label" for="deposited">Deposited :</label>
                            <input type="decimal" class="form-control" id="deposited" name="deposited" placeholder="Deposited">
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div id="remarks-div" class="form-group">
                            <label id="remarks-label" for="remarks">Remarks :</label>
                            <input type="text" class="form-control" id="remarks" name="remarks" placeholder="Remarks">
                        </div>
                    </div> 
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </form>
              </div><!-- /.box -->
          </div>
        </section>
      </div>