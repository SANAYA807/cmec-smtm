<?php include "header.php"; ?>

<div class="inner-banner blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <h3>Student Online Registration Form</h3>
                    </div>
                   

<div class="container">



<form  method="POST" enctype="multipart/form-data" action="#">

<div class="row">
<div class="col-md-4 frlabel">First Name</div>
<div class="col-md-8"><input type="text" name="student_name" maxlength="20" required id="id_student_name"></div>
</div>

<div class="row">
<div class="col-md-4 frlabel">Middle Name</div>
<div class="col-md-8"><input type="text" name="Middle_Name" value=" " maxlength="20" id="id_Middle_Name"></div>
</div>

<div class="row">
<div class="col-md-4 frlabel">Last Name</div>
<div class="col-md-8"><input type="text" name="Last_Name" value=" " maxlength="20" id="id_Last_Name"></div>
</div>

<div class="row">
<div class="col-md-4 frlabel">Father Name</div>
<div class="col-md-8"><input type="text" name="father_name" maxlength="60" required id="id_father_name"></div>
</div>

<div class="row">
<div class="col-md-4 frlabel">Mother Name</div>
<div class="col-md-8"><input type="text" name="mother_name" maxlength="60" required id="id_mother_name"></div>
</div>

<div class="row">
<div class="col-md-4 frlabel">Date-Of-Birth</div>
<div class="col-md-8"><input type="Date" name="date_of_birth" value="2020-12-26" required id="id_date_of_birth"><input type="hidden" name="initial-date_of_birth" value="2020-12-26" id="initial-id_date_of_birth"></div>
</div>

<div class="row">
<div class="col-md-4 frlabel">Gender</div>
<div class="col-md-8"><select name="gender" required id="id_gender">
<option value="" selected>---------</option>

<option value="male">Male</option>

<option value="female">Female</option>

<option value="other">Other</option>

</select></div>
</div>

<div class="row">
<div class="col-md-4 frlabel">Marital Status</div>
<div class="col-md-8"><select name="Marital_Status" required id="id_Marital_Status">
<option value="" selected>---------</option>

<option value="married">Married</option>

<option value="unmarried">Unmarried</option>

</select></div>
</div>

<div class="row">
<div class="col-md-4 frlabel">Category</div>
<div class="col-md-8"><select name="Category" required id="id_Category">
<option value="" selected>---------</option>

<option value="general">General</option>

<option value="sc/st">SC/ST</option>

<option value="obc">OBC</option>

</select></div>
</div>

<div class="row">
<div class="col-md-4 frlabel">Course Name</div>
<div class="col-md-8"><select name="Course_Name" required id="id_Course_Name">
<option value="" selected>---------</option>

<option value="47">Bachelor of Naturopathy &amp; Yoga Science</option>

<option value="46">Bachelor of Physiotherapy</option>

<option value="45">Bachelor of Science in Nursing</option>

<option value="44">Bachelor of Medical Lab Technology</option>

<option value="43">Bachelor of Pharmacy</option>

<option value="42">Bachelor of Optometry</option>

<option value="41">Certificate Naturopathy &amp; Yoga Science</option>

<option value="40">Certificate Physiotherapy</option>

<option value="39">Certificate Homeopathy</option>

<option value="38">Certificate O.T. Assistant</option>

<option value="37">Certificate Emergency Medical Technician</option>

<option value="36">Certificate Medical Lab Technician</option>

<option value="35">Certificate Physician Assistant</option>

<option value="34">Certificate Dental Assistant</option>

<option value="33">Certificate Child Health Care Nursing</option>

<option value="32">Certificate in Nursing Assistant</option>

<option value="31">Diploma in Ayurvedic Pharmacy</option>

<option value="30">Diploma in Homeopathic Pharmacy</option>

<option value="29">Doctor of Naturopathy</option>

<option value="28">Diploma in Naturopath &amp; Yoga Science</option>

<option value="27">Diploma in Dental Mechanics</option>

<option value="26">Diploma in Anesthesia Assistant</option>

<option value="25">Diploma in Trauma Care Technology</option>

<option value="24">Diploma in CT-Scan Technology</option>

<option value="23">Diploma in ECG Technology</option>

<option value="22">Diploma in Hospital Management</option>

<option value="21">Diploma in Medical Rediography</option>

<option value="20">Diploma in Emergency Medical Technology</option>

<option value="19">Diploma in Dialysis Technology</option>

<option value="18">Diploma in Cath Lab Technology</option>

<option value="17">General Nursing &amp; Midwifery</option>

<option value="16">Auxiliary Nursing &amp; Midwifery</option>

<option value="15">Diploma in Sanitation</option>

<option value="14">Diploma in Nursing and Midwifery</option>

<option value="13">Diploma in Nursing Assistant</option>

<option value="12">Diploma in Opthalmic Assistant</option>

<option value="11">Diploma in Pharmacy</option>

<option value="10">Diploma in Medical Imaging Technology</option>

<option value="9">Diploma in Physical Assistant</option>

<option value="8">Diploma in Dental Hygienist</option>

<option value="7">Dimploma in Dental Assistant</option>

<option value="6">Diploma in X-Ray Technology</option>

<option value="5">Diploma in Medical Lab Technology</option>

<option value="4">Diploma in Operation Theater Technology</option>

<option value="3">Diploma in Physiotherapy</option>

<option value="2">Diploma in Optmetry</option>

<option value="1">Diploma in Community Medical Services &amp; Essential Drugs</option>

</select></div>
</div>

<div class="row">
<div class="col-md-4 frlabel">Qualification</div>
<div class="col-md-8"><input type="text" name="Qualification" maxlength="30" required id="id_Qualification"></div>
</div>

<div class="row">
<div class="col-md-4 frlabel">Aadhar Card Number</div>
<div class="col-md-8"><input type="number" name="Aadhar_Card_Number" min="-9223372036854775808" max="9223372036854775807" required id="id_Aadhar_Card_Number"></div>
</div>

<div class="row">
<div class="col-md-4 frlabel">Mobile Number</div>
<div class="col-md-8"><input type="text" name="Mobile_Number" maxlength="10" required id="id_Mobile_Number"></div>
</div>

<div class="row">
<div class="col-md-4 frlabel">Email Id</div>
<div class="col-md-8"><input type="text" name="Email_Id" maxlength="100" id="id_Email_Id"></div>
</div>

<div class="row">
<div class="col-md-4 frlabel">Nationality</div>
<div class="col-md-8"><select name="Nationality" required id="id_Nationality">
<option value="" selected>---------</option>

<option value="indian">Indian</option>

<option value="other">Other</option>

</select></div>
</div>

<div class="row">
<div class="col-md-4 frlabel">Address</div>
<div class="col-md-8"><input type="text" name="Address" maxlength="400" required id="id_Address"></div>
</div>

<div class="row">
<div class="col-md-4 frlabel">District</div>
<div class="col-md-8"><input type="text" name="District" maxlength="200" required id="id_District"></div>
</div>

<div class="row">
<div class="col-md-4 frlabel">State</div>
<div class="col-md-8"><select name="State" required id="id_State">
<option value="" selected>---------</option>

<option value="1">Andhra Pradesh</option>

<option value="2">Arunachal Pradesh</option>

<option value="3">Assam</option>

<option value="4">Bihar</option>

<option value="5">Chhattisgarh</option>

<option value="6">Goa</option>

<option value="7">Gujarat</option>

<option value="8">Haryana</option>

<option value="9">Himachal Pradesh</option>

<option value="10">Jharkhand</option>

<option value="11">Karnataka</option>

<option value="12">Kerala</option>

<option value="13">Madhya Pradesh</option>

<option value="14">Maharashtra</option>

<option value="15">Manipur</option>

<option value="16">Meghalaya</option>

<option value="17">Mizoram</option>

<option value="18">Nagaland</option>

<option value="19">Odisha</option>

<option value="20">Punjab</option>

<option value="21">Rajasthan</option>

<option value="22">Sikkim</option>

<option value="23">Tamil Nadu</option>

<option value="24">Telangana</option>

<option value="25">Tripura</option>

<option value="26">Uttar Pradesh</option>

<option value="27">Uttarakhand</option>

<option value="28">West Bengal</option>

<option value="29">DELHI</option>

</select></div>
</div>

<div class="row">
<div class="col-md-4 frlabel">Pin Code</div>
<div class="col-md-8"><input type="number" name="Pin_Code" required id="id_Pin_Code"></div>
</div>

<div class="row">
<div class="col-md-4 frlabel">Student Photo</div>
<div class="col-md-8"><input type="file" name="Student_Photo" accept="image/*" required id="id_Student_Photo"></div>
</div>

<br>
<div class="row">
    <div class="col-md-4 frlabel"></div>
    <div class="col-md-8"><input type="submit" value="Submit " id="register_button"></div>
</div>
</form>
</div> 

                </div>
            </div>
        </div>
    </div>




   
<?php include "footer.php"; ?>