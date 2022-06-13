<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title img src="img/hospital">Clinic | Appointment</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
   body {background-image: url('backgroundimg.jpg')}
  .medicine {
    border-radius: 25px;
    background-color: white;
    padding: 20px;
    margin: 50px;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
  }
  h1{
    padding: 15px;
  }
  .warning{
    color: red;
  }
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    border-radius: 10px;
  }
  td{
    text-align: left;
    padding: 8px;
  }
  th{
    text-align: center;
    padding: 8px;
  }
  tr:nth-child(even) {
    border-radius: 10px;
    background-color: #abc3fa;
  }
.btn{
  margin-right: 50px;
  float: right;
  border: none;
  color: white;
  text-decoration: none;
  text-align: center;
  cursor: pointer;
  background-color: #233862;
  border-radius: 8px;
}
a:link {
  color: #abc3fa;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: white;
  background-color: transparent;
  text-decoration: underline;
}
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
    <script>
        var indiList;
        $(document).ready(function(){
            $('.view_data').click(function(){
                uni_modal("Appointment Details","appointments/view_details.php?id="+$(this).attr('data-id'))
            })
            $('#create_new').click(function(){
                uni_modal("Appointment Form","appointments/manage_appointment.php",'mid-large')
            })
            $('.edit_data').click(function(){
                uni_modal("Edit Appointment Details","appointments/manage_appointment.php?id="+$(this).attr('data-id'),'mid-large')
            })
            $('#selectAll').change(function(){
                // if($(this).is(":checked") == true){
                // 	$('.invCheck').prop("checked",true)
                // }else{
                // 	$('.invCheck').prop("checked",false)
                // }
                var _this = $(this)
                count = indiList.api().rows().data().length
                for($i = 0 ; $i < count; $i++){
                    var node = indiList.api().row($i).node()
                    console.log($(node).find('.invCheck'))
                    if(_this.is(":checked") == true){
                        $(node).find('.invCheck').prop("checked",true)
                        $('#selected_opt').show('slow')
                    }else{
                        $(node).find('.invCheck').prop("checked",false)
                        $('#selected_opt').hide('slow')
                    }
                }
            })

        })
    </script>
