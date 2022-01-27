<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\userdashboardController ;
use App\Http\Controllers\userProfileController ;
use Illuminate\Support\Facades\Auth ;
use Illuminate\Support\Facades\Artisan;
//admin dashboard
use App\Http\Controllers\admin\manageDoctorController ;
use App\Http\Controllers\admin\manageReceptionController ;
use App\Http\Controllers\admin\diseaseManagementController ;
use App\Http\Controllers\admin\diseaseCatagoryManagmentController ;
use App\Http\Controllers\admin\manageDoctorSpecilityController ;
//patient dashboard
use App\Http\Controllers\doctor\doctorDashboardController ;
use App\Http\Controllers\doctor\doctorProfileManageController ;
use App\Http\Controllers\patient\ManagePatientAppointmentController ;
//Doctor Dashboard
use App\Http\Controllers\doctor\manageDoctorDaysController ;
use App\Http\Controllers\doctor\manageDoctorTimeSlotController ;
use App\Http\Controllers\doctor\manageDoctorAppoitmentController ;
use App\Http\Controllers\doctor\manageDoctorPrescriptionController ;
use App\Http\Controllers\doctor\medicineManagementDoctorPannelController ;
//models
use App\Models\User ;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
||
||
back rout start here
||
||
*/
Route::group(['middleware' => 'prevent-back-history'],function(){
    // Auth::routes();
    // Route::get('/home', 'HomeController@index');

  /*
||
||
back rout end here
||
||
*/

//redirect route after login
Route::get('redirects' , [AdminController::class , 'loginRedirects'])->middleware('admin') ;

// Route::get('user', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('auth.login');
});

//authentication
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // return view('dashboard');
    return view('admin.index');
})->name('dashboard')->middleware('admin');


Route::get('dashboard' ,
function() {

    return view('admin.index') ;
}
)->name('dashboard')->middleware('admin') ;


//Logout functionality here--
Route::get('/admin/logout' , [AdminController::class , 'Logout'])->name('admin.logout') ;

//
//GROUP FOR YOUR PROFILE AND CHAANGE PASSWORD 
//
Route::prefix('profile')->group(function() {
    //view Route for Users
    Route::get('/view' , [ProfileController::class , 'ProfileView'])->name('profile.view') ; 

    //EDIT profile
    Route::get('/edit' , [ProfileController::class , 'ProfileEdit'])->name('profile.edit') ;   

    Route::post('/store' , [ProfileController::class , 'ProfileStore'])->name('profile.store') ;   

    //Update Password OR change Password
    Route::get('/password/view' , [ProfileController::class , 'PasswordView'])->name('password.view') ;   

    Route::post('/password/update' , [ProfileController::class , 'PasswordUpdate'])->name('password.update') ;   
}) ;

//  USER MANAGMENT ALL ROUTES WILL BE HERE
//group for users[xyz]<=-=URLS
Route::prefix('users')->group(function() {
    //view Route for Users
    Route::get('/view' , [UserController::class , 'UserView'])->name('user.view') ;   //user view

    //ADD user Group Route
    Route::get('/add' , [UserController::class , 'UserAdd'])->name('users.add') ;   

    Route::post('/store' , [UserController::class , 'UserStore'])->name('users.store') ;  
    
    //view user profile here viewuserprofile
    Route::get('/viewuserprofile/{id}' , [UserController::class , 'UserProfileDetailsData'])->name('users.viewuserprofile') ;   

    //edit users
    Route::get('/edit/{id}' , [UserController::class , 'UserEdit'])->name('users.edit') ;   

    Route::post('/update/{id}' , [UserController::class , 'UserUpdate'])->name('users.update') ;   

    //Delete Users
    Route::get('/delete/{id}' , [UserController::class , 'UserDelete'])->name('users.delete') ;   

    //manage requests here
    Route::get('/managerequest' , [UserController::class , 'UserManageRequsts'])->name('user.managerequest') ; 
    
    //manage inacive users
    Route::get('/inactiveusers' , [UserController::class , 'UserInactiveUsers'])->name('user.inactiveusers') ; 

    //view user approve page here
    Route::get('/userapprove/{id}' , [UserController::class , 'UserApprovalRequestPageView'])->name('users.userapprove') ;   

    //post the data for approving the user userapprovalupdate
    Route::post('/userapprovalupdate/{id}' , [UserController::class , 'UserApprovalRequestUpdate'])->name('users.userapprovalupdate') ;   


}) ;

//manage doctor specility doctorspecility
Route::prefix('doctorspecility')->group(function() {
    //add doctor specility here
    Route::get('/add' , [manageDoctorSpecilityController::class , 'addDoctorSpecility'])->name('doctorspecility.add') ;  

    //store the specility 
    Route::post('/store' , [manageDoctorSpecilityController::class , 'StoreDoctorSpecility'])->name('doctorspecility.store') ;  

    //view the specility here
    Route::get('/view' , [manageDoctorSpecilityController::class , 'ViewDoctorSpecility'])->name('doctorspecility.view') ;  

    //edit the specility here 
    Route::get('/edit/{id}' , [manageDoctorSpecilityController::class , 'EditDoctorSpecility'])->name('doctorspecility.edit') ;  

    //update edited data
    Route::post('/update/{id}' , [manageDoctorSpecilityController::class , 'UpdateDoctorSpecility'])->name('doctorspecility.update') ;  

    //delete the specility here
    Route::get('/delete/{id}' , [manageDoctorSpecilityController::class , 'DeleteDoctorSpecility'])->name('doctorspecility.delete') ;  

});

//managing doctors here
Route::prefix('doctors')->group(function() {
    //adding doctors doctors.add
    Route::get('/add' , [manageDoctorController::class , 'AddDoctor'])->name('doctors.add') ;   //user view

    //Storing the add doctor data
    Route::post('/store' , [manageDoctorController::class , 'storeDoctorData'])->name('doctors.store') ;   //user store 

    //view all doctore
    Route::get('/view' , [manageDoctorController::class , 'ViewDoctors'])->name('doctors.view') ;   //user view

    //edit doctors
    Route::get('/edit/{id}' , [manageDoctorController::class , 'EditDoctors'])->name('doctors.edit') ;   //user edit

    //updatee doctor here
    Route::post('/update/{id}' , [manageDoctorController::class , 'UpdateDoctors'])->name('doctors.update') ;   //user update

    //delete doctores here
    Route::get('/delete/{id}' , [manageDoctorController::class , 'DeleteDoctors'])->name('doctors.delete') ;   //user edit
}) ;


//
//manage reptionist here
Route::prefix('reception')->group(function() {
    //add reseptionsit here
    Route::get('/add' , [manageReceptionController::class , 'AddReceptionist'])->name('reception.add') ;   //user view

    //store
    Route::post('/store' , [manageReceptionController::class , 'StoreReceptionist'])->name('reception.store') ;   //user view

    Route::get('/view' , [manageReceptionController::class , 'ViewReceptionist'])->name('reception.view') ;   //reception view

    Route::get('/edit/{id}' , [manageReceptionController::class , 'EditReceptionist'])->name('reception.edit') ;   //reception edit

    Route::post('/update/{id}' , [manageReceptionController::class , 'UpdateReceptionist'])->name('reception.update') ;   //reception edit

    Route::get('/delete/{id}' , [manageReceptionController::class , 'DeleteReceptionist'])->name('reception.delete') ;   //reception edit

}) ;

//
//
//DISEASE MANAGMENT HERE
//
//
Route::prefix('disease')->group(function() {
    //add disease here
    Route::get('/add' , [diseaseManagementController::class , 'AddDisease'])->name('disease.add') ;   //disease add

    //store
    Route::post('/store' , [diseaseManagementController::class , 'storeDisease'])->name('disease.store') ;   //disease Store

    //view disease ViewDisease
    Route::get('/view' , [diseaseManagementController::class , 'ViewDisease'])->name('disease.view') ;   //disease View Disease

    //disease details
    Route::get('/details/{id}' , [diseaseManagementController::class , 'DetailViewDisease'])->name('disease.details') ;   //disease Details view

    //disease Edit
    Route::get('/edit/{id}' , [diseaseManagementController::class , 'EditDisease'])->name('disease.edit') ;   //disease Edit

    //update disease
    Route::post('/update/{id}' , [diseaseManagementController::class , 'UpdateDisease'])->name('disease.update') ;   //disease Update

    //Delete disease
    Route::get('/delete/{id}' , [diseaseManagementController::class , 'DeleteDisease'])->name('disease.delete') ;   //disease Edit
}) ;

//
//manage the disease main catagory here
//
Route::prefix('diseasecatagory')->group(function() {
    //adding disease catagory
    Route::get('/add' , [diseaseCatagoryManagmentController::class , 'AddDiseaseCatagory'])->name('diseasecatagory.add') ;

    //store the data of disease catagory
    Route::post('/store' , [diseaseCatagoryManagmentController::class , 'StoreDiseaseCatagory'])->name('diseasecatagory.store') ;

    //view all disease cataogy here
    Route::get('/view' , [diseaseCatagoryManagmentController::class , 'ViewDiseaseCatagory'])->name('diseasecatagory.view') ;


}) ;




//************************************************************ *//
////////////////PATIENT DASHBOARD ROUTING//////////////////////////
//********************************************************* *//
//************************************************************ *//
////////////////PATIENT DASHBOARD ROUTING//////////////////////////
//********************************************************* *//

//loading user index page after login as user
Route::get('userdashboard', function () {
    return view('users_dashboard.index');

})->name('userdashboard');

Route::view('calendar' , 'users_dashboard.body.calendar')->name('calendar') ;

Route::get('/userdashboard/logout' , [userdashboardController::class , 'logout'])->name('userdashboard.logout') ;

//manage user profile at userdashbord
Route::prefix('userprofile')->group( function() {
    //view the profile of users
    Route::get('/view' , [userProfileController::class , 'userprofileview'])->name('userprofile.view') ;

    //edit user profile
    Route::get('/edit' , [userProfileController::class , 'userprofileEdit'])->name('userprofile.edit') ;

    //updating the profile
    Route::post('/store' , [userProfileController::class , 'userprofileStore'])->name('userprofile.store') ;

    //view the change password page
    Route::get('/userpassword/view' , [userProfileController::class , 'userPasswordView'])->name('userpassword.view') ;

    //updating the password
    Route::post('/userpassword/update' , [userProfileController::class , 'userPasswordUpdate'])->name('userpassword.update') ;
}) ;

///
//MANAGE APPOINTMENT
//
Route::prefix('patientappointment')->group( function() {
    //add appointment
    Route::get('/add' , [ManagePatientAppointmentController::class , 'AddManagePatientAppointment'])->name('patientappointment.add') ;

    //store the appointment
    Route::post('/store' , [ManagePatientAppointmentController::class , 'StoreManagePatientAppointment'])->name('patientappointment.store') ;

    //view all appointment 
    Route::get('/view' , [ManagePatientAppointmentController::class , 'ViewManagePatientAppointment'])->name('patientappointment.view') ;

    //reschedule the Appoitment here
    Route::get('/rescheduleadd/{id}' , [ManagePatientAppointmentController::class , 'AddRescheduleManagePatientAppointment'])->name('patientappointment.rescheduleadd') ;

    Route::post('/update/{id}' , [ManagePatientAppointmentController::class , 'UpdateManagePatientAppointment'])->name('patientappointment.update') ;



});
    //AJAX DATA[ geting the appointment dated in dropdown]   
    Route::post('getpatient_doctordate' , [ManagePatientAppointmentController::class , 'GetDateManageAjaxData'])->name('getpatient_doctordate') ;

    //AJAX DATA [getiing appointment time in dropdown for patient]
    Route::post('getpatient_doctortime' , [ManagePatientAppointmentController::class , 'GetTimeManageAjaxData'])->name('getpatient_doctortime') ;

    //Update AJAX DATA[ geting the appointment dated in dropdown]   
    Route::post('updategetpatient_doctordate' , [ManagePatientAppointmentController::class , 'UpdateGetDateManageAjaxData'])->name('updategetpatient_doctordate') ;

    //Update AJAX DATA [getiing appointment time in dropdown for patient]
    Route::post('updategetpatient_doctortime' , [ManagePatientAppointmentController::class , 'UpdateGetTimeManageAjaxData'])->name('updategetpatient_doctortime') ;



    










//************************************************************ *//
////////////////DOCTOR DASHBOARD ROUTING/////////////////////////
//********************************************************* *////
//************************************************************ *//
////////////////DOCTOR DASHBOARD ROUTING/////////////////////////
//********************************************************* *////

Route::get('doctordashboard', function () {
    return view('doctor_dashboard.index');
})->name('doctordashboard');

//logout dunctionality of doctor dashboard
Route::get('/doctordashboard/logout' , [doctorDashboardController::class , 'doctorDashboardLogout'])->name('doctordashboard.logout') ;

//
//DOCTOR PROFILE MANAGEMENT 
Route::prefix('doctorprofile')->group( function() {
    Route::get('/view' , [doctorProfileManageController::class , 'doctorProfileViewProfile'])->name('doctorprofile.view') ;

    //edit doctor profile 
    Route::get('/edit' , [doctorProfileManageController::class , 'doctorProfileEditProfile'])->name('doctorprofile.edit') ;

    //storing the edited data from edit page of doctor
    Route::post('/store' , [doctorProfileManageController::class , 'doctorProfileUpdateDataStore'])->name('doctorprofile.store') ;

    //change password of doctor dashboard 
    Route::get('/doctorpassword/view' , [doctorProfileManageController::class , 'doctorProfileChangePassword'])->name('doctorpassword.view') ;

    //updaating password of doctor 
    Route::post('/doctorpassword/update' , [doctorProfileManageController::class , 'doctorProfileChangePasswordUpdate'])->name('doctorpassword.update') ;

}) ;

//
//MANAGE DOCTOR PANNEL MEDICNE MANAGEMENT 
//
Route::prefix('doctormedicine')->group( function() {
    Route::get('/addmedicine' , [medicineManagementDoctorPannelController::class , 'AddMedicineByDoctor'])->name('doctormedicine.addmedicine') ;

    //store the medicine names 
    Route::post('/store' , [medicineManagementDoctorPannelController::class , 'StoreMedicineByDoctor'])->name('doctormedicine.store') ;

    //view all medicine here
    Route::get('/view' , [medicineManagementDoctorPannelController::class , 'ViewAllMedicineByDoctor'])->name('doctormedicine.view') ;

    //delete the medicine here
    Route::get('/delete/{id}' , [medicineManagementDoctorPannelController::class , 'DeleteMedicineByDoctor'])->name('doctormedicine.delete') ;




}) ;
/////////////
///////////
///////////
/////////


//
//manage time slotes for doctors
//
Route::prefix('doctorday')->group( function() {
    //adding day page
    Route::get('/add' , [manageDoctorDaysController::class , 'AddManageDoctorDays'])->name('doctorday.add') ;

    //store the date
    Route::post('/store' , [manageDoctorDaysController::class , 'StoreManageDoctorDays'])->name('doctorday.store') ;

    //view dates here
    Route::get('/view' , [manageDoctorDaysController::class , 'ViewManageDoctorDays'])->name('doctorday.view') ;

    //upcoming appointment dates
    Route::get('/viewupcomingdate' , [manageDoctorDaysController::class , 'ViewUpcomingManageDoctorDays'])->name('doctorday.viewupcomingdate') ;

    //passed appointment dates
    Route::get('/viewpasseddate' , [manageDoctorDaysController::class , 'ViewPassedAppointmentManageDoctorDays'])->name('doctorday.viewpasseddate') ;

    //delete the date
    Route::get('/delete/{id}' , [manageDoctorDaysController::class , 'DeleteManageDoctorDays'])->name('doctorday.delete') ;
});

//
//MANAGE TIME SLOT FOR DOCTORES HERE  doctor_timeslot
// 
Route::prefix('doctortimeslots')->group( function() {
    //add timeslots
    Route::get('/add' , [manageDoctorTimeSlotController::class , 'AddManageDoctorTimeSlot'])->name('doctortimeslots.add') ;

    //store the time slot here
    Route::post('/store' , [manageDoctorTimeSlotController::class , 'StoreManageDoctorTimeSlot'])->name('doctortimeslots.store') ;

    //view the time slots 
    Route::get('/view' , [manageDoctorTimeSlotController::class , 'ViewManageDoctorTimeSlot'])->name('doctortimeslots.view') ;

    //delete the timeslot 
    Route::get('/delete/{id}' , [manageDoctorTimeSlotController::class , 'DeleteManageDoctorTimeSlot'])->name('doctortimeslots.delete') ;


}) ;


//
//MANAGE DOCTOR APPOITMENTS HERE
//
Route::prefix('doctorappoitments')->group( function() {
    //view all doctor appoitments here
    Route::get('/viewall' , [manageDoctorAppoitmentController::class , 'ViewAllDoctoreAppoitments'])->name('doctorappoitments.viewall') ;

    //Upcomming Appoitments
    Route::get('/upcommingappoitments' , [manageDoctorAppoitmentController::class , 'UpcommingAppoitmentsDoctoreAppoitments'])->name('doctorappoitments.upcommingappoitments') ;

    //Passed Appoitments Dated
    Route::get('/passedappoitments' , [manageDoctorAppoitmentController::class , 'PassedAppoitmentsDoctoreAppoitments'])->name('doctorappoitments.passedappoitments') ;

    //delete appoitment
    Route::get('/delete/{id}' , [manageDoctorAppoitmentController::class , 'DeleteDoctoreAppoitments'])->name('doctorappoitments.delete') ;

}) ;

//
//Manage Doctor Prescription section
//
Route::prefix('doctorprescription')->group( function() { 
    //view todays appoitment
    Route::get('/todaysappoitmentview' , [manageDoctorPrescriptionController::class , 'viewDoctorsTodaysAppoiutment'])->name('doctorprescription.todaysappoitmentview') ;

    //Add Prescriptions  addprescription
    Route::get('/addprescription/{id}' , [manageDoctorPrescriptionController::class , 'AddPrescriptionMETHODONeDoctorsTodaysAppoiutment'])->name('doctorprescription.addprescription') ;

    //storing the prescription here
    Route::post('/store1' , [manageDoctorPrescriptionController::class , 'StoreFIrstFormDataDoctorsTodaysAppoiutment'])->name('doctorprescription.store1') ;

    //view all doctor prescriptions
    Route::get('/viewallprescription' , [manageDoctorPrescriptionController::class , 'ViewAllDoctorPrescriptions'])->name('doctorprescription.viewallprescription') ;

    //view full details
    Route::get('/viewalldetails/{id}' , [manageDoctorPrescriptionController::class , 'ViewDetailsOFPrescriptions'])->name('doctorprescription.viewalldetails') ;

    //Edit Doctor Prescription full details
    Route::get('/editprescription/{id}' , [manageDoctorPrescriptionController::class , 'EditDoctorPrescriptions'])->name('doctorprescription.editprescription') ;

    //Update Doctor Prescription full details
    Route::post('/update/{id}' , [manageDoctorPrescriptionController::class , 'UpdateDoctorPrescriptions'])->name('doctorprescription.update') ;

    //previoushistory of patients here
    Route::get('/previoushistory/{id}' , [manageDoctorPrescriptionController::class , 'PreviousHistoryOfPatient'])->name('doctorprescription.previoushistory') ;


}) ;





















//************************************************************ *//
////////////////RECEPTION DASHBOARD ROUTING//////////////////////
//********************************************************* *////
Route::get('receptiondashboard', function () {
    return view('reception_dashboard.index');

})->name('receptiondashboard');







//************************************************************ *//
///////////////Finally Website Route here[ARAGMA]////////////////
//********************************************************* *//

// Route::get('/cache' , function() {
//     Artisan::Call('cache:clear') ;
// }) ;
// Route::get('/storage' , function() {
//     Artisan::Call('storage:link') ;
// }) ;





































}); //preventing backlogin here [clearing backhistory here don't delete it and also  make routes under this not out side this closing tags]

