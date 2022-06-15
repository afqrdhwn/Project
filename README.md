
## Group 5 Members

1. Mohd Afiq Ridhwan bin Rosli (2014161)
2. Muhammad Afiq Bin Abdul Patah (1917837)
3. Afnan Iman bin Azman (1902311)
4. Zahra Fathanah (2019050)
5. Alfikra Muhammad (1836031)

## Title
Kampung Desa Clinic System

## Introduction
  Today's technologies are better than yesterday. Technology evolves and improves on a daily basis. Between urban and rural areas, there is a technological divide. Nearly every day, we improve our science and technology in urban areas. However, they are still 2010 in rural areas. For example, the medical institution still stores information in files and on paper. This should be a matter of concern, and attention should be paid to it. Data stored in files and paper can cause data loss, fraud, and big data problem. 
  
  This concept focuses on creating a web application for a clinic in a rural region, as well as a platform that provides services to the employees. For example, in addition to being able to monitor employees, patients data can be stored  with this web application. In remote areas, medical centres still maintain a paper-based system, which this system may replace and make it easier for staff and customers.
  
## Objective 
1. Improve data storing
2. Mobility to staff and customer
3. Optimize work and data flow
  
## Features and Functionalities
1. Register for staff and customer
2. Health record
3. Health assessment 
4. Medicine Info
5. Appointment
6. User profile
7. About the system

## Description
  The views file will contain the homepage and the welcome page. On visiting the website, visitors are routed to the welcome page where they are presented with a loh in form along with a sign up option. Upon logging in, the user are brought to the home page , in this page, users are able to choose their prefered page to go to. A top navigation bar is also provided for users to navigate to medicine info, new patient, appointment, homepage, health assessment and health record. There is also a dropdown bar for users to go to their profile, about the system and allow the users to log out.
  
### Views
- layouts/app.blade.php
- auth/login.blade.php
- auth/register.blade.php
- auth/verify.blade.php
- auth/passwords/confirm.blade.php
- auth/passwords/email.blade.php
- auth/passwords/reset.blade.php
- patient.blade.php
- about.blade.php
- home.blade.php
- navbar.blade.php
- profile.blade.php
- appointment.blade.php
- assessment.blade.php
- record.blade.php
- medicine.blade.php
- newappointment.blade.php

### Controllers
- auth/ConfirmPasswordController.php
- auth/ForgotPasswordController.php
- auth/LoginController.php
- auth/RegisterController.php
- auth/ResetPasswordController.php
- auth/VerificationController.php
- Controller.php
- PatientController.php
- AppointmentController.php
- AssessmentController.php
- HomeController.php
- MedicineController.php
- RecordController.php
- UserController.php
- StaffController.php

### Routes
- api.php
- channels.php
- console.php
- web.php

### Models
- User.php
- appointment.php
- health_assessment.php
- health_record.php
- medicine_info.php
- patient.php
  
 ## Entity relationship diagram
![erd](https://user-images.githubusercontent.com/103871912/173637598-20e2f8d8-651b-40ae-9715-910139a27586.jpg)

## Sequence Diagram
![Appoinment](https://user-images.githubusercontent.com/103871912/173637835-23c1bd69-25bb-419f-8379-6e34179050f7.jpg)

## Web Interface
###Login Page
![screencapture-127-0-0-1-8000-login-2022-06-15-14_10_44](https://user-images.githubusercontent.com/103871912/173755263-c0a3f6f5-6405-48cf-a344-c3cece60966b.png)

###Register Page
![Opera Snapshot_2022-06-15_141059_127 0 0 1](https://user-images.githubusercontent.com/103871912/173755319-16526f67-7192-44bd-9893-04e456be7496.png)

###Reset Password Page
![Opera Snapshot_2022-06-15_141115_127 0 0 1](https://user-images.githubusercontent.com/103871912/173755345-af897840-90e6-4a13-b782-bb6e883d9474.png)

###Home Page
![Clinic _ Homepage_page-0001](https://user-images.githubusercontent.com/103871912/173756249-16ecf765-25f0-4165-87f7-974220e06b96.jpg)

###Appointment Page
![screencapture-127-0-0-1-8000-appointment-2022-06-15-14_04_36](https://user-images.githubusercontent.com/103871912/173756306-01558e79-89c5-436d-921c-1d3554f22ab4.png)

###Add appointment Page
![Opera Snapshot_2022-06-15_140820_127 0 0 1](https://user-images.githubusercontent.com/103871912/173756357-8b0a9682-be13-4b84-b53f-9101fa0018be.png)

###Health Assessment Page
![screencapture-127-0-0-1-8000-assessment-2022-06-15-14_08_35](https://user-images.githubusercontent.com/103871912/173756374-f0f60ada-d009-4520-adca-2f014c58fd49.png)

###Health Record Page
![screencapture-127-0-0-1-8000-record-2022-06-15-14_08_57](https://user-images.githubusercontent.com/103871912/173756396-f1bb1602-292b-4359-9c31-f18661b5297e.png)

###New Patient Page
![Opera Snapshot_2022-06-15_140913_127 0 0 1](https://user-images.githubusercontent.com/103871912/173756431-fe35f912-5fd3-4923-a87e-449df65d88f7.png)

###Medicine Info Page
![screencapture-127-0-0-1-8000-medicine-2022-06-15-14_09_27](https://user-images.githubusercontent.com/103871912/173756450-d26d7960-f713-4ccf-845b-ab9d745cd638.png)

###Profile Page
![screencapture-127-0-0-1-8000-profile-2022-06-15-14_09_54](https://user-images.githubusercontent.com/103871912/173756533-2f578b55-e250-4ffb-a325-6df2ae87f8a3.png)

###About Page
![screencapture-127-0-0-1-8000-about-2022-06-15-14_10_24](https://user-images.githubusercontent.com/103871912/173756547-3f00bbfd-9ca0-435a-b425-89731042ff70.png)

## Proposal Presentation
https://youtu.be/Yc7YArIsyFY
