<!-- include header in this file  -->
<?php require 'includes/header.php'?>

<section class="container border mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-column align-items-center">
            <img src="images/logo.png" alt="logo" class="school-logo">

            <h1 class="school-address text-uppercase mt-2">5 , nakhas khone - allahabad</h1>
            <h2 class="document-type text-uppercase mt-3">transfer certificate</h2>

        </div>
    </div>


    <!-- certificate body start -->

    <form action="lib/certificate_act.php" method="POST" enctype="multipart/form-data">
        <div class="row mt-5">
            <div class="col-sm-6 col-md-4 col-lg-1">
                <b class="text-capitalize">S.No.</b>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <input type="number" class="form-control" name="sr_number" id="sr_number" placeholder="skip this fieild it is auto generated">
                <span class="text-danger"> * skip this fieild it is auto generated</span>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <b class="text-capitalize">school admission no.</b>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <input type="number" class="form-control" name="admission_number" id="admission_number">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-6 col-md-4 col-lg-2">
                <b class="text-lowercase">this is to certify that</b>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-10">
                <input type="text" class="form-control" name="certified_school_name" id="certified_school_name">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-6 col-md-4 col-lg-2">
                <b class="text-lowercase">son of/ daughter of</b>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-10">
                <input type="text" class="form-control" name="student_parent_name" id="student_parent_name">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-6 col-md-4 col-lg-4">
                <b class="text-lowercase">was admitted to this school on (Date)</b>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-8">
                <input type="date" class="form-control" name="student_admission_date" id="student_admission_date">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <b class="text-lowercase">on a transfer certificate from</b>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-9">
                <input type="text" class="form-control" name="student_certificate_from" id="student_certificate_from">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-6 col-md-4 col-lg-1">
                <b class="text-lowercase">and left on</b>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <input type="date" class="form-control" name="student_left_date" id="student_left_date">
            </div>


            <div class="col-sm-6 col-md-4 col-lg-1">
                <b class="text-lowercase">with a </b>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <input type="text" class="form-control" name="student_character" id="student_character">
            </div>

            <div class="col-sm-6 col-md-4 col-lg-1">
                <b class="text-lowercase">chracter</b>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <b class="text-lowercase">he was then studying in class * </b>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-8">
                <input type="text" class="form-control" name="student_class" id="student_class">
            </div>

            <div class="col-sm-6 col-md-4 col-lg-1">
                <b class="text-lowercase">of that ** </b>
            </div>
        </div>

        <div class="row mt-3">

            <div class="col-sm-6 col-md-4 col-lg-8">
                <input type="text" class="form-control" name="student_stream" id="student_stream">
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <b class="text-lowercase">stream the school year begin from ***</b>
            </div>
        </div>

        <div class="row mt-3">

            <div class="col-sm-6 col-md-4 col-lg-5">
                <input type="month" class="form-control" name="year_begin" id="year_begin">
            </div>

            <div class="col-sm-6 col-md-4 col-lg-1">
                <b class="text-lowercase">to</b>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <input type="month" class="form-control" name="year_end" id="year_end">
            </div>

            <div class="col-sm-6 col-md-4 col-lg-2">
                <b class="text-lowercase">all sums****</b>
            </div>
        </div>

        <div class="row mt-3">

            <div class="col-sm-6 col-md-4 col-lg-12">
                <b class="text-lowercase">due to this school on his account have been remitted or satisfactorily
                    arranged
                    for his date of birth according to our school record in (in figures)</b>
            </div>

            <div class="row mt-3">
                <div class="col-sm-6 col-md-4 col-lg-5">
                    <input type="date" class="form-control" name="student_dob_in_figure" id="student_dob_in_figure">
                </div>

                <div class="col-sm-6 col-md-4 col-lg-2">
                    <b class="text-lowercase">(in words)</b>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-5">
                    <input type="text" class="form-control" name="student_dob_in_word" id="student_dob_in_word">
                </div>
            </div>
        </div>

        <div class="row mt-3">

            <div class="col-sm-6 col-md-4 col-lg-8">
                <b class="text-lowercase">(the following information must be supplied if the scholer left at the end of
                    the
                    school year) Promotion has been Granted / Refused to class</b>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <input type="text" class="form-control" name="student_promoted_class" id="student_promoted_class">
            </div>
        </div>

        <div class="row mt-3">

            <div class="col-sm-6 col-md-4 col-lg-1">
                <b class="text-lowercase">Dated </b>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <input type="date" class="form-control" name="certificate_issue_date" id="certificate_issue_date">
            </div>
        </div>

        <div class="row mt-5">

            <div class="col-sm-6 col-md-4 col-lg-7">
                <p> <b class="text-lowercase">* to be given in words </b> </p>
                <p> <b class="text-lowercase">** mention whether ICSE / CBSE stream or any other examination stream.
                    </b>
                </p>

                <p> <b class="text-lowercase">*** insert month </b></p>
                <p>
                    <b class="text-lowercase">**** sums duw to the school include payments for which provision was made
                        when
                        <br> the scholar was admited into the school. </b>
                </p>

            </div>

            <div class="col-sm-6 col-md-4 col-lg-4 text-center ">
                <h3 class="text-capitalize p-5"> PRINCIPAL</h3>
            </div>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col text-center">
                <input type="hidden" name="certificate_action" value="generate_certificate">
                <input type="submit" value="Generate Transfer Certificate / Print" class="btn btn-primary">
            </div>
        </div>
    </form>
    <!-- certificate body end-->
</section>

<!-- include footer in this file  -->

<?php require 'includes/footer.php'?>