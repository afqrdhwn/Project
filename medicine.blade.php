<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="homepage.css" rel="stylesheet">
    <title img src="img/hospital">Clinic | Medicine Info</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">-->

    <style>
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

    <section class="menu" id="menu">

               <div class="medicine">
                   <h1 style="text-align: left;" >Medicine Info</h1><hr><br>
                     <table>
                       <tr>
                         <th>Name</th>
                         <th>Details</th>
                         <th>Warning</th>
                       </tr>
                       <tr>
                         <td>Amoxicillin</td>
                         <td>
                           <div style="text-align: left"class="sparkbar" data-color="#00a65a" data-height="20">Amoxicillin is a penicillin antibiotic that fights bacteria.
                             It us to treat many different types of infection caused by bacteria, such as tonsillitis, bronchitis, pneumonia,
                             and infections of the ear, nose, throat, skin, or urinary tract.</div>
                         </td>
                         <td class="warning">Do not use this medication if you are allergic to amoxicillin or to any other penicillin antibiotic.</td>
                       </tr>
                       <tr>
                         <td>Paracetamol</td>
                         <td>
                           <div style="text-align: left"class="sparkbar" data-color="#00a65a" data-height="20">Paracetamol is a pain reliever and a fever reducer.
                             To treat many conditions such as headache, muscle aches, arthritis, backache, toothaches, colds, and fevers.</div>
                         </td>
                         <td class="warning">An overdose of paracetamol can cause serious harm and could cause damage to your liver.
                           The maximum amount of paracetamol for adults is 4 grams (4000 mg) per DAY.
                           </td>
                       </tr>
                       <tr>
                         <td>Bryhali</td>
                         <td>
                           <div style="text-align: left"class="sparkbar" data-color="#00a65a" data-height="20">Bryhali helps reduce inflammation in the body.
                             It used to treat inflammation and itching caused by plaque psoriasis or skin conditions that respond to steroid medication.
                             Bryhali may also be used for purposes not listed in this medication guide.</div>
                         </td>
                         <td class="warning">You should not use halobetasol if you are allergic to it</td>
                       </tr>
                       <tr>
                         <td>Bystolic</td>
                         <td>
                           <div style="text-align: left"class="sparkbar" data-color="#00a65a" data-height="20">Bystolic is used to treat hypertension (high blood pressure).
                            </div>
                             <td class="warning">Do not skip doses or stop taking Bystolic without first talking to your doctor. It can impact to you heart</td>
                         </td>
                       </tr>
                       <tr>
                         <td>Casodex</td>
                         <td>
                           <div style="text-align: left"class="sparkbar" data-color="#00a65a" data-height="20">Casodex is used to treat prostate cancer that has spread to other parts of the body (metastatic) and
                             to treat prostate cancer that has spread to other parts of the body (metastatic).</div>
                         </td>
                         <td class="warning">This medicine should never be taken by a woman or a child.</td>
                       </tr>
                       <tr>
                         <td>Umbralisib</td>
                         <td>
                           <div style="text-align: left"class="sparkbar" data-color="#00a65a" data-height="20">Umbralisib is used to treat certain types of lymphoma in adults
                           </div>
                         </td>
                         <td class="warning">Umbralisib affects your immune system. You may get infections more easily, even serious or fatal infections.</td>
                       </tr>
                       <tr>
                         <td>Focalin</td>
                         <td>
                           <div style="text-align: left"class="sparkbar" data-color="#00a65a" data-height="20">Focalin is a prescription medicine used to treat attention deficit
                             hyperactivity disorder (ADHD). Focalin should be used as a part of a total treatment program for ADHD that
                             may include counseling or other therapies.</div>
                         </td>
                         <td class="warning">Focalin may cause new or worsening psychosis, especially if you have a history of depression, mental illness, or bipolar disorder.
                         </td>
                       </tr>
                       <tr>
                         <td>Herceptin</td>
                         <td>
                           <div style="text-align: left"class="sparkbar" data-color="#00a65a" data-height="20">Herceptin is a cancer medicine.
                             Herceptin is used to treat certain types of breast cancer or stomach cancer.</div>
                         </td>
                         <td class="warning">Do not use Herceptin if you are pregnant.</td>
                       </tr>
                     </table>
               </div>
                <button class="btn"><b><a href="https://www.drugs.com/drug_information.html">See More</a></b></button>
    </section>


    <script type="text/javascript">
        window.addEventListener('scroll', function(){
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0);
         });
        function toggleMenu(){
            const menuToggle = document.querySelector('.menuToggle');
            const navigation = document.querySelector('.navigation');
            menuToggle.classList.toggle('active');
            navigation.classList.toggle('active');
        }
        function openForm() {
        document.getElementById("myForm").style.display = "block";
        }
        function closeForm() {
        document.getElementById("myForm").style.display = "none";
        }
    </script>
</body>
</html>
