<?php
include 'C:\xampp\htdocs\task10\includes\connection.php';
global $admissionNum;

if(isset($_POST['certificate_action'])=="generate_certificate"){

    insert_certificate_data();
}
else{
    echo "<h1>Server Can't Handle This Request ...</h1>";
}

function insert_certificate_data(){
    global $con;

    $srNo = $_POST['sr_number'];
    $admissionNumber = $_POST['admission_number'];
    $certifiedSchoolName = $_POST['certified_school_name'];
    $studentParentName = $_POST['student_parent_name'];
    $studentAdmissionDate = $_POST['student_admission_date'];
    $studentCertificateFrom = $_POST['student_certificate_from'];
    $studentLeftDate = $_POST['student_left_date'];
    $studentCharacter = $_POST['student_character'];
    $studentClass = $_POST['student_class'];
    $studentStream = $_POST['student_stream'];
    $yearBegin = $_POST['year_begin'];
    $yearEnd = $_POST['year_end'];
    $studentDobInFigure = $_POST['student_dob_in_figure'];
    $studentDobInWord = $_POST['student_dob_in_word'];
    $studentPromotedClass = $_POST['student_promoted_class'];
    $certificateIssueDate = $_POST['certificate_issue_date'];

// echo "<pre>";
//     echo "$srNo    
//     $admissionNumber   
//     $certifiedSchoolName    
//     $studentParentName    
//     $studentAdmissionDate   
//     $studentCertificateFrom   
//     $studentLeftDate   
//     $studentCharacter    
//     $studentClass    
//     $studentStream    
//     $yearBegin   
//     $yearEnd   
//     $studentDobInFigure   
//     $studentDobInWord   
//     $studentPromotedClass   
//     $certificateIssueDate    
//     ";

//     echo "</pre>";


    $sql = "INSERT INTO  certificate(admissionNumber,certifiedSchoolName ,studentParentName ,studentAdmissionDate , studentCertificateFrom ,studentLeftDate  ,studentCharacter  ,  studentClass , studentStream , yearBegin ,yearEnd,studentDobInFigure   ,studentDobInWord  , studentPromotedClass   ,certificateIssueDate)VALUES('$admissionNumber', '$certifiedSchoolName' ,'$studentParentName' ,'$studentAdmissionDate' , '$studentCertificateFrom' ,'$studentLeftDate'  ,'$studentCharacter'  ,  '$studentClass' , '$studentStream' , '$yearBegin' ,'$yearEnd','$studentDobInFigure'   ,'$studentDobInWord'  , '$studentPromotedClass'   ,'$certificateIssueDate')";

    // echo $sql."<br><br>";

    $query = mysqli_query($con,$sql) or die(mysqli_error($con)."Certificate can't be generatured due to unexpected error");



    if($query){
        // header("location:../certificate.php?admissionNum=$admissionNumber");
        echo "<h1 class='text-center'>Your Record Has been save. Do you want to print transter certificate</h1>";
        echo "<a href='../certificate.php?id=$admissionNumber'>Yes I want to print </a> <br/>";
        echo "<a href='../'>no print </a>";
    }else{
        echo "record can't be saved";
    }

}
?>