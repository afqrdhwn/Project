
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
  
  This concept focuses on creating a web application for a clinic in a rural region, as well as a platform that provides services to the employees. For example, in addition to being able to manage employees, patients data can be easily monitored, accessed and searched with this web application. In remote areas, medical centres still maintain a paper-based system, which this system may replace and make it easier for staff and customers.
  
## Objective 
1. Improve data storing
2. Mobility to staff and customer
3. Optimize work and data flow
  
## Features and Functionalities
1. Register staff
2. Register new patients
3. Preview health record
4. Preview health assessment 
5. Preview medicine informations
6. Book appointments
7. Preview staff profile
8. Edit staff profile
9. Preview about the system

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

## Mockup
![Sign Up](https://user-images.githubusercontent.com/104018700/170817496-68dd1e5a-2d65-4fb0-bb3c-f56e8336a1d9.png)
![LoginPHP](https://user-images.githubusercontent.com/104018700/170817490-5a4cdbb4-7b7e-44bd-8c8c-508e8d64642c.png)
![AppointmentPHP](https://user-images.githubusercontent.com/104018700/170817484-5b0cbdbb-bc8f-4d4a-9d3f-f63a03f3410e.png)
![Health Assesment](https://user-images.githubusercontent.com/104018700/170817486-2c0b8f99-b70d-44ac-843d-97bca1b61fca.png)
![Health Record](https://user-images.githubusercontent.com/104018700/170817489-a1420e34-1ab7-4a70-a4f4-f691db4d4e6d.png)
![Medicine Info](https://user-images.githubusercontent.com/104018700/170817494-0f72d282-77f0-4843-80dc-e0bba3c2f4b8.png)
![LogoutPHP](https://user-images.githubusercontent.com/104018700/170817493-dcdb544a-5c1c-4d15-b9e3-dd65fba0aea2.png)

## Proposal Presentation
https://youtu.be/Yc7YArIsyFY
