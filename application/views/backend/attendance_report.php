<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
         <div class="page-wrapper">
            <div class="message"></div>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="mdi mdi-chart-bar"></i> Отчёт о посещаемости </h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active"><i class="mdi mdi-chart-bar"></i> Отчёт о посещаемости</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">

                <div class="row m-b-10"> 
                    <div class="col-12">
                        <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a href="<?php echo base_url(); ?>attendance/Save_Attendance" class="text-white"><i class="mdi mdi-city"></i> Добавить посещаемость </a></button>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><i class="mdi mdi-chart-bar"></i> Отчёт о посещаемости</h4>
                                <form method="post" action="Get_attendance_data_for_report" class="form-material row">
                                    <div class="form-group col-md-3">
                                        <input type="text" name="date_from" id="date_from" class="form-control mydatetimepickerFull" placeholder="От:">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" name="date_to" id="date_to" class="form-control mydatetimepickerFull" placeholder="До:">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <select class="form-control custom-select"  tabindex="1" name="emid" id="employee_id" required>
                                        <option> Выбор Сотрудника: </option>
                                         <?php foreach($employee as $value): ?>
                                         <option value="<?php echo $value->em_id; ?>">
                                            <?php echo $value->first_name ?>
                                            <?php echo $value->last_name ?>
                                         </option>
                                         <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-3 form-group">
										<input type="submit" class="btn btn-success" value="Сохранить" name="submit" id="getAtdReport">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body EmployeeInfo">
                                <h3 class="employee_name"><i class="mdi mdi-account-settings"></i> Сотрудник </h3>
								Работал <span class="hours"></span> Часы в <span class="days"></span> дни
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><i class="mdi mdi-checkbox-multiple-marked"></i> Полная активности </h4>
                                <div class="table-responsive ">
                                  <table id="example234" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                      <tr>
                                        <th><i class="mdi mdi-account-location" style="color:#1976d2"></i> PIN-Локации:</th>
                                        <th><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#1976d2"></i> Имя сотрудника: </th>
                                        <th><i class="fa fa-calendar" style="color:#1976d2"></i> Дата: </th>
                                        <th><i class="mdi mdi-clock-in" style="color:#1976d2"></i> Время входа:</th>
                                        <th><i class="mdi mdi-clock-out" style="color:#1976d2"></i> Время выхода: </th>
                                        <th><i class="mdi mdi-av-timer" style="color:#1976d2"></i> Время:</th>
                                        <th><i class="mdi mdi-map-marker-radius" style="color:#1976d2"></i> Местонахождение: </th>
                                      </tr>
                                    </thead>
                                    <!-- <tfoot>
                                    <tr>
                                        <th>PIN </th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>In</th>
                                        <th>Out</th>
                                        <th>Hour</th>
                                        <th>Place</th>
                                    </tr>
                                    </tfoot> -->
                                    <tbody class="leave">
                                    
                                    </tbody>
                                  </table>
                                </div>
                        </div>
                    </div>
                </div>
<?php $this->load->view('backend/footer'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $("#getAtdReport").click(function(e) {
            e.preventDefault(e);
            // Get the record's ID via attribute
            var date_from = $('#date_from').val();
            var date_to = $('#date_to').val();
            var employee_id = $('#employee_id').val();

            $.ajax({
                url: 'Get_attendance_data_for_report',
                method: 'POST',
                data: {
                    date_from: date_from,
                    date_to: date_to,
                    employee_id: employee_id
                }
            }).done(function(response) {

                var data = JSON.parse(response);

                //console.log(data);

                var infoContainer = $('.EmployeeInfo'),
                    name          = $('.EmployeeInfo .employee_name'),
                    hours         = $('.EmployeeInfo .hours'),
                    days          = $('.EmployeeInfo .days');

                name.text(data.name);
                hours.text(Math.abs(data.hours[0].Hours));
                days.text(data.days);
                
                var tableData = data.attendance;
                //console.log(tableData);
                $('#example234').dataTable( {
                    "bDestroy":true,
                    "aaData": tableData,
                    "columns": [
                        { "data": "em_code" },
                        { "data": "name" },
                        { "data": "atten_date" },
                        { "data": "signin_time" },
                        { "data": "signout_time" },
                        { "data": "Hours" },
                        { "data": "place" }
                    ]
                });
            });
        });
    });
</script>
                          
