<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?> 
         <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"><i class="mdi mdi-hospital-building" style="color:#1976d2"></i> Департаменты </h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="mdi mdi-home-assistant"></i> Главная </a></li>
                        <li class="breadcrumb-item active"><i class="mdi mdi-hospital-building" style="color:#1976d2"></i> Департаменты </li>
                    </ol>
                </div>
            </div>
            <div class="message"></div> 
            <div class="container-fluid">         
                <div class="row">
                    <div class="col-lg-5">
                        <?php if (isset($editdepartment)) { ?>
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#1976d2"></i> Редактировать департамента </h4>
                            </div>
                            
                            <?php echo validation_errors(); ?>
                            <?php echo $this->upload->display_errors(); ?>
                            <?php echo $this->session->flashdata('feedback'); ?>
                            

                            <div class="card-body">
                                    <form method="post" action="<?php echo base_url();?>organization/Update_dep" enctype="multipart/form-data">
                                        <div class="form-body">
                                            <div class="row ">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label"> Название департамента </label>
                                                        <input type="text" name="department" id="firstName" value="<?php  echo $editdepartment->dep_name;?>" class="form-control" placeholder="">
                                                        <input type="hidden" name="id" value="<?php  echo $editdepartment->id;?>">
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Сохранять </button>
                                            <button type="button" class="btn btn-danger"><i class="mdi mdi-close-box"></i> Отменить </button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                        <?php } else { ?>                        

                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"><i class="mdi mdi-plus-box" style="color:#1976d2"></i><i class="mdi mdi-hospital-building" style="color:#1976d2"></i> Добавить департамент </h4>
                            </div>
                            
                            <?php echo validation_errors(); ?>
                            <?php echo $this->upload->display_errors(); ?>
                            <?php echo $this->session->flashdata('feedback'); ?>
                            

                            <div class="card-body">
                                    <form method="post" action="Save_dep" enctype="multipart/form-data">
                                        <div class="form-body">
                                            <div class="row ">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#1976d2"></i> Название департамента: </label>
                                                        <input type="text" name="department" id="firstName" value="" class="form-control" placeholder="Введите вазвание департамента ..." minlength="3" required>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                        </div>
                                        <div class="form-actions">
											<button type="button" class="btn btn-danger"><i class="mdi mdi-close-box"></i> Отменить </button>
											<button type="submit" class="btn btn-success"><i class="mdi mdi-content-save-all"></i> Сохранять </button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                        <?php }?>
                    </div>

                    <div class="col-lg-7">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"><i class="mdi mdi-view-list" style="color:#1976d2"></i> Список департаментов </h4>
                            </div>
                            <?php echo $this->session->flashdata('delsuccess'); ?>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table id="" class="display  table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#1976d2"></i> Название департамента:</th>
                                                <th><i class="mdi mdi-console" style="color:#1976d2"></i> Действие: </th>
                                            </tr>
                                        </thead>
                                        <!-- <tfoot>
                                            <tr>
                                                <th>Department Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot> -->
                                        
                                        <tbody>
                                            <?php foreach ($department as $value) { ?>
                                            <tr>
                                                <td><?php echo $value->dep_name;?></td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="<?php echo base_url();?>organization/dep_edit/<?php echo $value->id;?>" title="Edit" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fa fa-pencil-square-o"></i> Редактировать </a>
                                                    <a onclick="return confirm('Are you sure to delete this data?')" href="<?php echo base_url();?>organization/Delete_dep/<?php echo $value->id;?>" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i> Удалить </a>
                                                </td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <?php $this->load->view('backend/footer'); ?>
