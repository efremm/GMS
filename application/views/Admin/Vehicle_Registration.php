
<div class="container">
    <div class="row">
        <!--                 <div class="col">left</div>-->
        <div class="col text-right"> እንኳን ደህና መጡ: <?php echo $this->session->userdata('username');?></div>
    </div>
    <div class="row">
        <div class="col">
            <div class="float-right">  <a href="<?php echo site_url('Authentication/logout') ?>" class="btn btn-link">Sign Out</a>
                <?php echo form_close() ?></div>
        </div>
    </div>
</div>
<!--table design-->
<div class="container">
    <div class="row">
        <div class="col-12">

            <div class="col-md-12">
                <h1 style="color: green">Vehicle
                    <small>Registration </small>
                    <!--                    <a href="#" onclick="return false;">hello</a>-->
                    <!--                    href="javascript:void(0);-->
                    <div class="float-right"><a href="#" onclick="return false;" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
                </h1>
            </div>
        </div>
        <div class="col-lg-12">
            <table class="table table-striped " id="mytabledata">
                <thead>
                <tr>
                    <th>Plate Number</th>
                    <th>Vehicle Factory</th>
                    <th>Model</th>
                    <th>Year Made In</th>
                    <th>Chassi Number</th>
                    <th>Made In</th>
                    <th>Fuel Type</th>
                    <th>Motor Number</th>
                    <th>Libre</th>
                    <th>Libre Payment Year</th>
                    <!-- <th>Free Duty</th>
                    <th>Condition</th>
                    <th>Audomater</th> -->
                    <th style="text-align: right;">Actions</th>
                </tr>
                </thead>
                <tbody id="show_table_data">

                </tbody>
            </table>
        </div>

    </div>

</div>
<!-- MODAL ADD -->
<form>
    <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-label-group col-lg-4">
                            <label for="plateno">Plate Number</label>
                            <input type="text" class="form-control" id="plateno" name="plateno" placeholder="Insert Plate Number" required autofocus>
                        </div>
             
                    <div class="form-label-group col-lg-4">
                        <label for="vihicle_factory">Vehicle Factory</label>
                        <input type="text" class="form-control" id="vihicle_factory" name="vihicle_factory" placeholder="Insert vihicle factory" required autofocus>
                    </div>
                 
                    <div class="form-label-group col-lg-4">
                        <label for="model">Model</label>
                        <input type="text" class="form-control" id="model" name="model" placeholder="Model" required autofocus>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="year_made_in">Year Made In</label>
                        <input  data-type="date" class="form-control" id="year_made_in" name="year_made_in" placeholder="year_made_in" required autofocus>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="chassi_number">Chassi Number</label>
                        <input type="text" class="form-control" id="chassi_number" name="chassi_number" placeholder="chassi_number" required autofocus>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="madein">Made In</label>
                        <select class="form-control" id="madein" name="madein">
                            <option>-select made in-</option>
                            <option>Afganistan</option>
                            <option>Angola</option>
                        </select>
                    </div>
        
                    <div class="form-label-group col-lg-4">
                        <label for="fuil_type">Fuel Type</label>
                        <input type="text" class="form-control" id="fuil_type" name="fuil_type" placeholder="fuil_type" required autofocus>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="motor_number">Motor Number</label>
                        <input type="text" class="form-control" id="motor_number" name="motor_number" placeholder="motor_number" required autofocus>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="libre">Libre</label>
                        <input type="text" class="form-control" id="libre" name="libre" placeholder="libre" required autofocus>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="libre_payment_year">Libre Payment Year</label>
                        <input type="text" class="form-control" id="libre_payment_year" name="libre_payment_year" placeholder="libre_payment_year" required autofocus>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="free_duty">Free Duty</label>
                        <select class="form-control" id="free_duty" name="free_duty">
                            <option>-select free duty-</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="libre_payment_year">Condition</label>
                        <input type="text" class="form-control" id="libre_payment_year" name="libre_payment_year" placeholder="libre_payment_year" required autofocus>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="audometer">Audometer</label>
                        <input type="text" class="form-control" id="audometer" name="audometer" placeholder="audometer" required autofocus>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="mum_tyres">Number of Tyers</label>
                        <input type="text" class="form-control" id="mum_tyres" name="mum_tyres" placeholder="mum_tyres" required autofocus>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="insur_type">Insurence of Type</label>
                        <input type="text" class="form-control" id="insur_type" name="insur_type" placeholder="insur_type" required autofocus>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="load_capacity">Loading Capacity</label>
                        <input type="text" class="form-control" id="loading_capacity" name="loading_capacity" placeholder="loading_capacity" required autofocus>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="insurence_renwal">Insurence Renewal Date</label>
                        <input type="text" class="form-control" id="insurence_renwal" name="insurence_renwal" placeholder="insurence_renwal" required autofocus>
                    </div>
                    
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!--END MODAL ADD-->

<!-- MODAL EDIT -->
<form>
    <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-label-group col-lg-4">
                            <label for="member_id_edit">Member ID</label>
                            <input type="text" class="form-control" id="member_id_edit" name="member_id_edit" placeholder="Insert Member ID" required autofocus readonly>
                        </div>
                        <div class="form-label-group col-lg-4">
                            <label for="title_edit">Title</label>
                            <select class="form-control" id="title_edit" name="title_edit">
                                <option>-select titl-</option>
                                <option>Mr.</option>
                                <option>Ms.</option>
                                <option>Dr.</option>
                                <option>Eng.</option>
                                <option>Nrs.</option>
                                <option>Dr.</option>
                            </select>
                        </div>
                        <div class="form-label-group col-lg-4">
                            <label for="first_name_edit">First Name</label>
                            <input type="text" class="form-control" id="first_name_edit" name="first_name_edit" placeholder="Insert user name" required autofocus>
                        </div>
                        <div class="form-label-group col-lg-4">
                            <label for="middle_name_edit">Middle Name</label>
                            <input type="text" class="form-control" id="middle_name_edit" name="middle_name_edit" placeholder="Middle Name" required autofocus>
                        </div>
                        <div class="form-label-group col-lg-4">
                            <label for="last_name_edit">Last Name</label>
                            <input type="text" class="form-control" id="last_name_edit" name="last_name_edit" placeholder="Middle Name" required autofocus>
                        </div>
                        <div class="form-label-group col-lg-4">
                            <label for="age_edit">Age</label>
                            <input type="text" class="form-control" id="age_edit" name="age_edit" placeholder="Age" required autofocus>
                        </div>
                        <div class="form-label-group col-lg-4">
                            <label for="gender_edit">Gender</label>
                            <select class="form-control" id="gender_edit" name="gender_edit">
                                <option>-select gender-</option>
                                <option>Female</option>
                                <option>Male</option>
                            </select>
                        </div>
                        <div class="form-label-group col-lg-4">
                            <label for="department_edit">Department</label>
                            <select class="form-control" id="department_edit" name="department_edit">
                                <option>-select gender-</option>
                                <option>HRMS</option>
                                <option>IT</option>
                                <option>Tv Department</option>
                                <option>Radio Department</option>
                                <option>Journal Department</option>
                            </select>
                        </div>


                        <div class="form-label-group col-lg-4">
                            <label for="salary_edit">Salary</label>
                            <input type="text" class="form-control" id="salary_edit" name="salary_edit" placeholder="salary" required autofocus>
                        </div>
                        <div class="form-label-group col-lg-4">
                            <label for="registrationdate_edit">Date</label>
                            <input  data-type="date" class="form-control" id="registrationdate_edit" name="registrationdate_edit" placeholder="date" required autofocus>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!--END MODAL EDIT-->
<!--MODAL DELETE-->
<form>
    <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <strong>Are you sure to delete this record?</strong>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="delete_memberid" id="delete_memberid" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!--END MODAL DELETE-->
<!---->

<script type="text/javascript" src="<?php echo base_url().'assets/Datepicker/jquery.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/Datepicker/moment.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/Datepicker/bootstrap-datetimepicker.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/Datepicker/bootstrap-datetimepicker.min.js'?>"></script>

    <script>
        $('input[data-type="date"]').datetimepicker({
            format: 'YYYY-MM-DD'
        });

    </script>

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/bootstrap4/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/DataTable/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/DataTable/js/dataTables.bootstrap4.js'?>"></script>


    <script type="text/javascript">
        $(document).ready(function(){
            show_product();	//call function show all product

            $('#mytabledata').dataTable();

            //function show all product
            function show_product(){
                $.ajax({
                    type  : 'ajax',
                    url   : '<?php echo site_url('Registration_C/member_data')?>',
                    async : true,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<tr>'+
                                '<td>'+data[i].member_id+'</td>'+
                                '<td>'+data[i].title+'</td>'+
                                '<td>'+data[i].first_name+'</td>'+
                                '<td>'+data[i].middle_name+'</td>'+
                                '<td>'+data[i].last_name+'</td>'+
                                '<td>'+data[i].age+'</td>'+
                                '<td>'+data[i].gender+'</td>'+
                                '<td>'+data[i].department+'</td>'+
                                '<td>'+data[i].salary+'</td>'+
                                '<td>'+data[i].registration_date+'</td>'+
                                '<td style="text-align:right;">'+
                                '<a <a href="#" onclick="return false;" class="btn btn-info btn-sm item_edit"' +
                                ' data-member_id="'+data[i].member_id+'" data-title="'+data[i].title+'" ' +
                                ' data-firstname="'+data[i].first_name+'" data-middlename="'+data[i].middle_name+'" ' +
                                ' data-lastname="'+data[i].last_name+'" data-age="'+data[i].age+'" ' +
                                ' data-gender="'+data[i].gender+'" data-department="'+data[i].department+'" ' +
                                'data-salary="'+data[i].salary+'" data-registrationdate="'+data[i].registration_date+'"> <i class="fa fa-edit"></i></a>'+' '+
                                '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-member_id="'+data[i].member_id+'"><i class="fa fa-fw fa-trash"></i></a>'+
                                '</td>'+
                                '</tr>';
                        }
                        $('#show_table_data').html(html);
                    }

                });
            }

            //Save product
            $('#btn_save').on('click',function(){
                // alert("clicked")
                var memberid = $('#member_id').val();
                var title = $('#title').val();
                var firstname = $('#first_name').val();
                var middlename  = $('#middle_name').val();
                var lastname = $('#last_name').val();
                var age = $('#age').val();
                var gender = $('#gender').val();
                var department  = $('#department').val();
                var salary = $('#salary').val();
                var datepicker1 = $('#datepicker1').val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url('Registration_C/save_members_c')?>",
                    dataType : "JSON",
                    data : {member_id:memberid,title:title , first_name:firstname,
                        middle_name:middlename,last_name:lastname , age:age,gender:gender, department:department,
                        salary:salary , datepicker1:datepicker1},
                    success: function(data){
                        $('[name="member_id"]').val("");
                        $('[name="title"]').val("");
                        $('[name="first_name"]').val("");
                        $('[name="middle_name"]').val("");
                        $('[name="last_name"]').val("");
                        $('[name="age"]').val("");
                        $('[name="gender"]').val("");
                        $('[name="department"]').val("");
                        $('[name="salary"]').val("");
                        $('[name="datepicker1"]').val("");
                        $('#Modal_Add').modal('hide');
                        show_product();
                    }
                });
                return false;
            });

            //get data for update record
            $('#show_table_data').on('click','.item_edit',function(){
                var memberid = $(this).data('member_id');
                var title =$(this).data('title');
                var firstname = $(this).data('firstname');
                var middlename  = $(this).data('middlename');
                var lastname = $(this).data('lastname');
                var age = $(this).data('age');
                var gender = $(this).data('gender');
                var department  = $(this).data('department');
                var salary = $(this).data('salary');
                var datepicker1 = $(this).data('registrationdate');

                $('#Modal_Edit').modal('show');
                $('[name="member_id_edit"]').val(memberid);
                $('[name="title_edit"]').val(title);
                $('[name="first_name_edit"]').val(firstname);
                $('[name="middle_name_edit"]').val(middlename);
                $('[name="last_name_edit"]').val(lastname);
                $('[name="age_edit"]').val(age);
                $('[name="gender_edit"]').val(gender);
                $('[name="department_edit"]').val(department);
                $('[name="salary_edit"]').val(salary);
                $('[name="registrationdate_edit"]').val(datepicker1);

            });

            //update record to database
            $('#btn_update').on('click',function(){

                var memberid_update = $('#member_id_edit').val();
                var title_update = $('#title_edit').val();
                var firstname_update  = $('#first_name_edit').val();
                var middlename_update = $('#middle_name_edit').val();
                var lastname_update = $('#last_name_edit').val();
                var age_update= $('#age_edit').val();
                var gendre_update = $('#gender_edit').val();
                var  department_update= $('#department_edit').val();
                var salary_update  = $('#salary_edit').val();
                var regestration_update  = $('#registrationdate_edit').val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url('Registration_c/update_member_c')?>",
                    dataType : "JSON",
                    data : {memberid_update:memberid_update , title_update:title_update, firstname_update:firstname_update,
                        middlename_update:middlename_update, lastname_update:lastname_update,
                        age_update:age_update, gendre_updte:gendre_update,  department_update:department_update,
                        salary_update:salary_update, regestration_update:regestration_update},
                    success: function(data){
                        $('[name="member_id_edit"]').val("");
                        $('[name="title_edit"]').val("");
                        $('[name="first_name_edit"]').val("");
                        $('[name="middle_name_edit"]').val("");
                        $('[name="last_name_edit"]').val("");
                        $('[name="age_edit"]').val("");
                        $('[name="gender_edit"]').val("");
                        $('[name="department_edit"]').val("");
                        $('[name="salary_edit"]').val("");
                        $('[name="registrationdate_edit"]').val("");
                        $('#Modal_Edit').modal('hide');
                        show_product();
                    }
                });
                return false;
            });

            //get data for delete record
            $('#show_table_data').on('click','.item_delete',function(){
                var memberid = $(this).data('member_id');

                $('#Modal_Delete').modal('show');
                $('[name="delete_memberid"]').val(memberid);
            });

            //delete record to database
            $('#btn_delete').on('click',function(){
                var member_id = $('#delete_memberid').val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url('Registration_C/delete_member_c')?>",
                    dataType : "JSON",
                    data : {member_id:member_id},
                    success: function(data){
                        $('[name="delete_memberid"]').val("");
                        $('#Modal_Delete').modal('hide');
                        show_product();
                    }
                });
                return false;
            });

        });

    </script>
