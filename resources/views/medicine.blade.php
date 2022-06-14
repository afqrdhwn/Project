<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/homepage.css" rel="stylesheet">
    <title img src="img/hospital">Clinic | Medicine Info</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">-->

    <style>

  .medicine {
    border-radius: 25px;
    background-color: white;
    padding: 20px;
    margin-top: 10px;
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

<body>

    @extends('navbar')

    <section class="menu" id="menu">

               <div class="medicine">
                   <h1 style="text-align: left;" >Medicine Info</h1><hr><br>
                     <table>
                       <tr>
                        <th style="text-align: left">ID</th>
                         <th>Name</th>
                         <th>Details</th>
                         <th>Warning</th>
                         <th>Price</th>
                         <th>Stock</th>
                       </tr>
                       @foreach ($medicine_infos as $medicine_info)
                       <tr>
                        <td>{{$medicine_info['prescription_id']}}</td>
                        <td>{{$medicine_info['med_name']}}</td>
                        <td style="text-align: left"class="sparkbar" data-color="#00a65a">{{$medicine_info['med_details']}}</td>
                        <td class="warning">{{$medicine_info['warning']}}</td>
                        <td>{{$medicine_info['price']}}</td>
                        <td>{{$medicine_info['stock']}}</td>
                    </tr>
                    @endforeach

                     </table>
               </div>
    </section>

</body>
</html>
