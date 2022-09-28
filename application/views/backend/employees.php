<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
         <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="mdi mdi-view-list"></i><i class="fa fa-users" aria-hidden="true"></i> Список сотрудников </h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="mdi mdi-home-assistant"></i> Главная </a></li>
                        <li class="breadcrumb-item active"><i class="mdi mdi-account-multiple"></i> Сотрудники </li>
                    </ol>
                </div>
            </div>
            <div class="message"></div>
            <div class="container-fluid">
                <div class="row m-b-10"> 
                    <div class="col-12">
                        <button type="button" class="btn btn-success"><i class="fa fa-plus"></i><a href="<?php echo base_url(); ?>employee/Add_employee" class="text-white"><i class="" aria-hidden="true"></i> Добавить сотрудник </a></button>
                        <button type="button" class="btn btn-primary"><i class="fa fa-bars"></i><a href="<?php echo base_url(); ?>employee/Disciplinary" class="text-white"><i class="" aria-hidden="true"></i>  Дисциплинарный список </a></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"><i class="mdi mdi-view-list"></i><i class="fa fa-users" aria-hidden="true"></i> Список сотрудников: </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table id="employees123" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#1976d2"></i> Имя сотрудника: </th>
                                                <th><i class="mdi mdi-account-location" style="color:#1976d2"></i> PIN-Локации: </th>
                                                <th><i class="mdi mdi-contact-mail" style="color:#1976d2"></i> Электронная почта: </th>
                                                <th><i class="mdi mdi-cellphone-iphone" style="color:#1976d2"></i> Контактный номер: </th>
                                                <th><i class="mdi mdi-account-convert" style="color:#1976d2"></i> Тип пользователя: </th>
                                                <th><i class="mdi mdi-console" style="color:#1976d2"></i> Действие:</th>
                                            </tr>
                                        </thead>
                                        <!-- <tfoot>
                                               <tr>
                                                <th>Employee Name</th>
                                                <th>PIN</th>
                                                <th>Email </th>
                                                <th>Contact </th>
                                                <th>User Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot> -->
                                        <tbody>
                                           <?php foreach($employee as $value): ?>
                                            <tr>
                                                <td title="<?php echo $value->first_name .' '.$value->last_name; ?>"><?php echo $value->first_name .' '.$value->last_name; ?></td>
                                                                                <td><?php echo $value->em_code; ?></td>
                                                <td><?php echo $value->em_email; ?></td>
                                                <td><?php echo $value->em_phone; ?></td>
                                                <td><?php echo $value->em_role; ?></td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="<?php echo base_url(); ?>employee/view?I=<?php echo base64_encode($value->em_id); ?>" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i> Редактировать </a>
													<a onclick="return confirm('Are you sure to delete this data?')" href="<?php echo base_url();?>organization/Delete_dep/<?php echo $value->id;?>" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i> Удалить </a>
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
<script>
    $('#employees123').DataTable({
        "aaSorting": [[1,'asc']],
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script>
