<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
         <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="mdi mdi-account-off"></i> Неактивный сотрудников </h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Employee</li>
                    </ol>
                </div>
            </div>
            <div class="message"></div>
            <div class="container-fluid">
                <div class="row m-b-10"> 
                    <div class="col-12">
                        <button type="button" class="btn btn-success"><i class="fa fa-plus"></i><a href="<?php echo base_url(); ?>employee/Add_employee" class="text-white"><i class="" aria-hidden="true"></i> Добавить неактивный сотрудника </a></button>
                        <button type="button" class="btn btn-primary"><i class="fa fa-bars"></i><a href="<?php echo base_url(); ?>employee/Disciplinary" class="text-white"><i class="" aria-hidden="true"></i> Список сотрудников </a></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"><i class="mdi mdi-account-off"></i> Список неактивный сотрудников: </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><i class="mdi mdi-account-card-details"></i> ID </th>
                                                <th><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#1976d2"></i> Имя сотрудника:  </th>
                                                <th><i class="mdi mdi-contact-mail" style="color:#1976d2"></i> Электронная почта: </th>
                                                <th><i class="mdi mdi-cellphone-iphone" style="color:#1976d2"></i> Контактный номер: </th>
                                                <th><i class="mdi mdi-account-star" style="color:#1976d2"></i> Роль </th>
                                                <th><i class="mdi mdi-console" style="color:#1976d2"></i> Действие: </th>
                                            </tr>
                                        </thead>
                                        <!-- <tfoot>
                                            <tr>
                                                <th>ID </th>
                                                <th>Employee Name</th>
                                                <th>Email </th>
                                                <th>Contact </th>
                                                <th>Roll</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot> -->
                                        <tbody>
                                           <?php foreach($invalidem as $value): ?>
                                            <tr>
                                                <td><?php echo $value->em_code; ?></td>
                                                <td><?php echo $value->first_name .' '.$value->last_name; ?></td>
                                                <td><?php echo $value->em_email; ?></td>
                                                <td><?php echo $value->em_phone; ?></td>
                                                <td><?php echo $value->em_role; ?></td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="<?php echo base_url(); ?>employee/view?I=<?php echo base64_encode($value->em_id); ?>" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
													<a href="DeletDisiplinary?D=<?php echo $value->id; ?>" onclick="confirm('Are you sure to delete this value?')" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i> Удалить </a>
												</td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php $this->load->view('backend/footer'); ?>
