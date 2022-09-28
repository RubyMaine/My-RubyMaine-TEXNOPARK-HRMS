        <aside class="left-sidebar" style="padding-top: 74px;background: #3e515a;">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav" style="background: #3e515a;">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li> <a href="<?php echo base_url(); ?>" ><i class="mdi mdi-gauge"></i><span class="hide-menu"> Панель управление </span></a></li>
                        <?php if($this->session->userdata('user_type')=='EMPLOYEE'){ ?>
                        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo base_url(); ?>employee/view?I=<?php echo base64_encode($basicinfo->em_id); ?>" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu"> Cотрудников </span></a>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-rocket"></i><span class="hide-menu"> Оставлять </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>leave/Holidays"> Holiday </a></li>
                                <li><a href="<?php echo base_url(); ?>leave/EmApplication"> Leave Application </a></li>
                                <li><a href="<?php echo base_url(); ?>leave/EmLeavesheet"> Leave Sheet </a></li>
                            </ul>
                        </li> 
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-briefcase-check"></i><span class="hide-menu"> Projects </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>Projects/All_Projects">Projects </a></li>
                                <li><a href="<?php echo base_url(); ?>Projects/All_Tasks"> Task List </a></li>
                            </ul>
                        </li>                                                                       
                        <?php } else { ?>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-building-o"></i><span class="hide-menu"> Организация </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url();?>organization/Department"><i class="mdi mdi-hospital-building" aria-hidden="true"></i> Департаменты </a></li>
                                <li><a href="<?php echo base_url();?>organization/Designation"><i class="fa fa-random" aria-hidden="true"></i> Направление </a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu"> Сотрудники </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>employee/Employees"><i class="mdi mdi-view-list"></i> Список сотрудников </a></li>
                                <li><a href="<?php echo base_url(); ?>employee/Disciplinary"><i class="mdi mdi-buffer"></i> Дисциплинарный список </a></li>
                                <li><a href="<?php echo base_url(); ?>employee/Inactive_Employee"><i class="mdi mdi-account-off"></i> Неактивный сотрудников </a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-clipboard-text"></i><span class="hide-menu"> Посещаемость </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>attendance/Attendance"><i class="mdi mdi-view-list"></i> Список участников </a></li>
                                <li><a href="<?php echo base_url(); ?>attendance/Save_Attendance"><i class="mdi mdi-city"></i> Добавить посещаемость </a></li>
                                <li><a href="<?php echo base_url(); ?>attendance/Attendance_Report"><i class="mdi mdi-chart-bar"></i> Отчёт о посещаемости </a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-folder-account"></i><span class="hide-menu"> Персональные данные </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>leave/Holidays"><i class="fa fa-birthday-cake" aria-hidden="true"></i> Праздничный день </a></li>
                                <li><a href="<?php echo base_url(); ?>leave/leavetypes"><i class="mdi mdi-airballoon"></i> Отпуски </a></li>
                                <li><a href="<?php echo base_url(); ?>leave/Application"><i class="mdi mdi-file-word"></i> Оставленный заявки </a></li>
                                <li><a href="<?php echo base_url(); ?>leave/Earnedleave"><i class="mdi mdi-airplane-takeoff"></i> Заслуженный отпуск </a></li>
                                <li><a href="<?php echo base_url(); ?>leave/Leave_report"><i class="mdi mdi-chart-bar"></i> Отчётности по данные </a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-briefcase"></i><span class="hide-menu"> Все проекты </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>Projects/All_Projects"><i class="mdi mdi-briefcase-check"></i> Статус по проекты </a></li>
                                <li><a href="<?php echo base_url(); ?>Projects/All_Tasks"><i class="mdi mdi-buffer"></i> Список заданий </a></li>
                                <li><a href="<?php echo base_url(); ?>Projects/Field_visit"><i class="mdi mdi-bulletin-board"></i> Выезд на место </a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-wallet"></i><span class="hide-menu"> Заработной оплаты </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>Payroll/Salary_List"><i class="mdi mdi-file-document"></i> Список по оплаты </a></li>
                                <li><a href="<?php echo base_url(); ?>Payroll/Generate_salary"><i class="mdi mdi-file-document-box"></i> Создать ведомость </a></li>
                                <li><a href="<?php echo base_url(); ?>Payroll/Payslip_Report"><i class="mdi mdi-chart-bar"></i> Отчет по ведомости </a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-cash-multiple"></i><span class="hide-menu"> Авансы </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>Loan/View"> Список по авансов </a></li>
                                <li><a href="<?php echo base_url(); ?>Loan/installment"><i class="mdi mdi-chart-bar"></i> Отчет по авансов </a></li>
                            </ul>
                        </li>
                        
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-grid"></i><span class="hide-menu"> Инвентаризация Ресурсы </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>Logistice/Assets_Category"><i class="mdi mdi-file-document"></i> Список по категорий </a></li>
                                <li><a href="<?php echo base_url(); ?>Logistice/All_Assets"><i class="mdi mdi-buffer"></i> Список по ресурсы </a></li>
                                <li><a href="<?php echo base_url(); ?>Logistice/logistic_support"><i class="mdi mdi-layers-off"></i> Возврата ресурсы </a></li>
                            </ul>
                        </li>
                        
                        <li> <a href="<?php echo base_url()?>notice/All_notice" ><i class="mdi mdi-newspaper"></i><span class="hide-menu"> Доска объявлений <span class="hide-menu"></a></li>
                        <li> <a href="<?php echo base_url(); ?>settings/Settings" ><i class="mdi mdi-settings"></i><span class="hide-menu"> Настройка HRM систему <span class="hide-menu"></a></li>
                        <?php } ?>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
