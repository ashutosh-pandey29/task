<?php
include 'includes/header.php';
include 'includes/connection.php';

// echo print_r($_GET)."<spanr>";

$admissionNum = $_GET['id'];

$certificate ="";


$certificate.="
    <section class='certificate p-3 mx-auto'>
    <div class='row'>
        <div class='col-sm-12 col-md-12 col-lg-12 d-flex flex-column align-items-center'>
            <img src='images/logo.png' alt='logo' class='school-logo'>

            <h1 class='school-address text-uppercase mt-2'>5 , nakhas khone - allahabad</h1>
            <h2 class='document-type text-uppercase mt-2'>transfer certificate</h2>

        </div>
    </div>

   
";


if($admissionNum){

     $sql = "SELECT * FROM certificate WHERE admissionNumber = '$admissionNum'";
    $query  = mysqli_query($con , $sql);

    $data = mysqli_fetch_assoc($query);

    $certificate .="
       
    
    <div class='row mt-5'>
        <div class='col-sm-6 col-md-4 col-lg-1'>
            <span class='text-capitalize'>S.No.</span>
        </div>

        <div class='col-sm-6 col-md-4 col-lg-4 output-box'>
           <div  style='border-bottom:2px dotted black'  >$data[srNumber]</div>
        </div>

        <div class='col-sm-6 col-md-4 col-lg-3'>
            <span class='text-capitalize'>school admission no.</span>
        </div>

        <div class='col-sm-6 col-md-4 col-lg-4' >
        <div  style='border-bottom:2px dotted black'>$data[admissionNumber]</div>

        </div>
    </div>



    <div class='row mt-2'>
            <div class='col-sm-6 col-md-4 col-lg-4'>
                <span class='text-lowercase'>this is to certify that</span>
            </div>

            <div class='col-sm-6 col-md-4 col-lg-8'>
                <div  style='border-bottom:2px dotted black'>$data[certifiedSchoolName]</div>
            </div>
        </div>

        <div class='row mt-2'>
            <div class='col-sm-6 col-md-4 col-lg-3'>
                <span class='text-lowercase'>son of/ daughter of</span>
            </div>

            <div class='col-sm-6 col-md-4 col-lg-9'>
            <div  style='border-bottom:2px dotted black'>$data[studentParentName]</div>

            </div>
        </div>

        <div class='row mt-2'>
            <div class='col-sm-6 col-md-4 col-lg-5'>
                <span class='text-lowercase'>was admitted to this school on (Date)</span>
            </div>

            <div class='col-sm-6 col-md-4 col-lg-7'>
            <div  style='border-bottom:2px dotted black'>$data[studentAdmissionDate]</div>

            </div>
        </div>

        <div class='row mt-2'>
            <div class='col-sm-6 col-md-4 col-lg-5'>
                <span class='text-lowercase'>on a transfer certificate from</span>
            </div>

            <div class='col-sm-6 col-md-4 col-lg-7'>
            <div  style='border-bottom:2px dotted black'>$data[studentCertificateFrom]</div>
            </div>
        </div>

        <div class='row mt-2'>
            <div class='col-sm-6 col-md-4 col-lg-2'>
                <span class='text-lowercase'>and left on</span>
            </div>

            <div class='col-sm-6 col-md-4 col-lg-3'>
            <div  style='border-bottom:2px dotted black'>$data[studentLeftDate]</div>
            
            </div>


            <div class='col-sm-6 col-md-4 col-lg-2'>
                <span class='text-lowercase'>with a </span>
            </div>

            <div class='col-sm-6 col-md-4 col-lg-4'>
            <div  style='border-bottom:2px dotted black'>$data[studentCharacter]</div>

            </div>

            <div class='col-sm-6 col-md-4 col-lg-1 text-right'>
                <span class='text-lowercase'>chracter</span>
            </div>
        </div>

        <div class='row mt-2'>
            <div class='col-sm-6 col-md-4 col-lg-4'>
                <span class='text-lowercase'>he was then studying in class * </span>
            </div>

            <div class='col-sm-6 col-md-4 col-lg-6'>
            <div  style='border-bottom:2px dotted black'>$data[studentClass]</div>

            </div>

            <div class='col-sm-6 col-md-4 col-lg-2'>
                <span class='text-lowercase'>of that ** </span>
            </div>
        </div>

        <div class='row mt-2'>

            <div class='col-sm-6 col-md-4 col-lg-7'>
            <div  style='border-bottom:2px dotted black'>$data[studentStream]</div>
                
            </div>

            <div class='col-sm-6 col-md-4 col-lg-5'>
                <span class='text-lowercase'>stream the school year begin from ***</span>
            </div>
        </div>

        <div class='row mt-2'>

            <div class='col-sm-6 col-md-4 col-lg-5'>
            <div  style='border-bottom:2px dotted black'>$data[yearBegin]</div>

            </div>

            <div class='col-sm-6 col-md-4 col-lg-1'>
                <span class='text-lowercase'>to</span>
            </div>

            <div class='col-sm-6 col-md-4 col-lg-4'>
            <div  style='border-bottom:2px dotted black'>$data[yearEnd]</div>

            </div>

            <div class='col-sm-6 col-md-4 col-lg-2'>
                <span class='text-lowercase'>all sums****</span>
            </div>
        </div>

        <div class='row mt-2'>

            <div class='col-sm-6 col-md-4 col-lg-9'>
                <span class='text-lowercase'>due to this school on his account have been remitted or satisfactorily
                    arranged
                    for his date of birth according to our school record in (in figures)</span>
            </div>

            <div class='col-sm-6 col-md-4 col-lg-3'>
            <div  style='border-bottom:2px dotted black' class='mt-4'>$data[studentDobInFigure]</div>
           </div>


            <div class='row mt-2'>
            
                <div class='col-sm-6 col-md-4 col-lg-2'>
                    <span class='text-lowercase'>(in words)</span>
                </div>

                <div class='col-sm-6 col-md-4 col-lg-10'>
                <div  style='border-bottom:2px dotted black'>$data[studentDobInword]</div>

                </div>
            </div>
        </div>

        <div class='row mt-2'>

            <div class='col-sm-6 col-md-4 col-lg-8'>
                <span class='text-lowercase'>(the following information must be supplied if the scholer left at the end of
                    the
                    school year) Promotion has been Granted / Refused to class</span>
            </div>

            <div class='col-sm-6 col-md-4 col-lg-4'>
            <div  style='border-bottom:2px dotted black' class='mt-4'>$data[studentPromotedClass]</div>

            </div>
        </div>

        <div class='row mt-5'>

            <div class='col-sm-6 col-md-4 col-lg-1'>
                <span class='text-lowercase'>Dated </span>
            </div>

            <div class='col-sm-6 col-md-4 col-lg-4'>
            <div style='border-bottom:2px dotted black'k'>$data[certificateIssueDate]</div>
            </div>
        </div>

        <div class='row mt-5'>

            <div class='col-sm-6 col-md-4 col-lg-8'>
                <p> <span class='text-lowercase'>* to be given in words </span> </p>
                <p> <span class='text-lowercase'>** mention whether ICSE / CBSE stream or any other examination stream.
                    </span>
                </p>

                <p> <span class='text-lowercase'>*** insert month </span></p>
                <p>
                    <span class='text-lowercase'>**** sums duw to the school include payments for which provision was made
                        when
                        <spanr> the scholar was admited into the school. </span>
                </p>

            </div>

            <div class='col-sm-6 col-md-4 col-lg-4 text-center '>
                <h3 class='text-capitalize p-5 mt-5'> PRINCIPAL</h3>
            </div>
        </div>

    
    ";




}else{
    echo "Id Not Found For Printing Document";
}

$certificate .= "</section>";


// display certificate view

echo $certificate;

echo "<button onclick='window.print()'>Print</button>"
?>