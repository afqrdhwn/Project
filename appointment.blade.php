<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title img src="img/appointment">Clinic | Appointment</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            html{line-height:1.15;-webkit-text-size-adjust:100%}
            body {background-image: url('backgroundimg.jpg')}
            
        </style>

    </head>
    <header>
        <a href="#" class="logo"><img src="img/hospital.png" style="width: 45px; height: 45px;"></a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navigation">
            <li><a href="http://127.0.0.1:8000/" onclick="toggleMenu();"><b>Homepage</b></a></li>
            <li><a href="#" onclick="toggleMenu();"><b>Appointment</b></a></li>
            <li><a href="#" onclick="toggleMenu();"><b>Health Assessment</b></a></li>
            <li><a href="#" onclick="toggleMenu();"><b>Health Record</b></a></li>
            <li><a href="http://127.0.0.1:8000/medicine" onclick="toggleMenu();"><b>Medicine Info</b></a></li>
            <li><a href="http://127.0.0.1:8000/about" onclick="toggleMenu();"><b>About</b></a></li>
        </ul>
    </header>
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">List of Appointments</h3>
            <div class="card-tools">
                <!--"create new appointment" button-->
                <a href="javascript:void(0)" id="create_new" class="btn btn-flat btn-primary"><span class="fas fa-plus"></span>  Create New</a>
            </div>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <div class="row" style="display:none" id="selected_opt">
                    <div class="w-100 d-flex">
                        <div class="col-2">
                            <label for="" class="controllabel"> With Selected:</label>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary" type="button" id="selected_go">Go</button>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-stripped" id="indi-list">
                    <colgroup>
                        <col width="5%">
                        <col width="5%">
                        <col width="25%">
                        <col width="25%">
                        <col width="20%">
                        <col width="20%">
                    </colgroup>
                    <thead>
                        <tr>
                            <td class="text-center"><div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="selectAll">
                                </div></td>
                            <th class="text-center">#</th>
                            <th>Appointment no.</th>
                            <th>Patient ID</th>
                            <th>Date</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- SQL -->
                        <?php
                        $i = 1;
                            $qry = $conn->query("SELECT appt_no, patient_id, appt_date, appt_time");
                            while($row = $qry->fetch_assoc()):
                        ?>

                            <tr>
                                <td class="text-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input invCheck" value="<?php echo $row['appt_no'] ?>">
                                </div>
                                </td>
                                <td class="text-center"><?php echo $i++; ?></td>
                                <td><?php echo $row['patient_id'] ?></td>
                                <td><?php echo date("M d,Y h:i A",strtotime($row['appt_date'])) ?></td>
                                <td><?php echo $row['appt_time'] ?></td>
                                <td align="center">
                                     <button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                              Action
                                        <span class="sr-only">Toggle Dropdown</span>
                                      </button>
                                      <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item view_data" href="javascript:void(0)" data-id="<?php echo $row['aid'] ?>"> View</a>
                                        <div class="divider"></div>
                                        <a class="dropdown-item edit_data" href="javascript:void(0)" data-id="<?php echo $row['aid'] ?>"> Edit</a>
                                      </div>
                                </td>
                            </tr>
                   
                    </tbody>
                </table>
            </div>
        </div>
    </div>
