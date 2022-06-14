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
            .Bubble {
            border-radius: 25px;
            background-color: white;
            padding: 20px;
            margin-top: 10px;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);}
        </style>

    </head>
    <body>
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
        <div class="Bubble">
            <h3 class="card-title">List of Appointments</h3>
        </div>
        <div class="Bubble">
                <table class="table">
                    <thead>
                        <tr>
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
                            </tr>
                   
                    </tbody>
                </table>  
                <div class="Bubble">
                <h2> Create a new appointment </h2>
                <form action="welcome.php" method="post">
                Date : <input type="text" name="Date"><br>
                Time: <input type="text" name="Time"><br>
                <input type="submit">
                </form>
                <?php
                $sql = "INSERT INTO appointment (date, time)
                VALUES ('Date', 'Time');";

                if ($conn->multi_query($sql) === TRUE) {
                  echo "Appointment booked";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
                ?>           
            </div>
        </div>
    </div>
    </body>
    
