<form class="regularForm" style="width: 1000px; height:fit-content" method="post" action="<?=''?>">
    <h3 class="formHeading">New Student</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="width: 300px; border: 2px solid white; padding:5px; border-radius:4px">
                <label for="studentId">Student ID:</label>
                <input id="studentId" name="studentId" class="medInput" value="<?=esc($nxtStudentId)?>" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12"><br>
                <label>Bio Data</label>
            </div>
        </div>
        <div id="bioDataDiv" style="border: 2px solid white; padding:5px; border-radius:4px">
            <div class="row">
                <div class="col-md-4">
                    <label for="studFirstName">First Name</label><br>
                    <input id="studFirstName" name="studFirstName" class="medInput">
                </div>
                <div class="col-md-4">
                    <label for="studMidName">Middle Name</label><br>
                    <input id="studMidName" name="studMidName" class="medInput">
                </div>
                <div class="col-md-4">
                    <label for="studSecName">Surname</label><br>
                    <input id="studSecName" name="studSecName" class="medInput">
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <label for="dob">Date of Birth</label><br>
                    <input type="date" id="dob" name="dob" class="medInput">
                </div>
                <div class="col-md-4">
                    <label>Gender:</label><br>
                    <label style="margin-right: 10px;">Male  <input type="radio" name="gender" value="Male" style="margin-right: 50px;"></label>
                    <label style="margin-right: 10px;">Female  <input type="radio" name="gender" value="Female"></label>
                </div>
                <div class="col-md-4">
                    <label for="nationality">Nationality</label><br>
                    <input id="nationality" name="nationality" class="medInput">
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <label for="nin">NIN (ID Number)</label><br>
                    <input type="text" id="nin" name="nin" class="medInput">
                </div>
                <div class="col-md-4">
                    <label for="tel">Telephone</label><br>
                    <input type="tel" id="tel" name="tel" class="medInput">
                </div>
                <div class="col-md-4">
                    <label for="studEmail">Email</label><br>
                    <input type="email" id="studEmail" name="studEmail" class="medInput">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12"><br>
                <label>Location</label>
            </div>
        </div>
        <div id="bioDataDiv" style="border: 2px solid white; padding:5px; border-radius:4px">
            <div class="row">
                <div class="col-md-4">
                    <label for="country">Country</label><br>
                    <input id="country" name="country" class="medInput">
                </div>
                <div class="col-md-4">
                    <label for="district">District / Province</label><br>
                    <input id="district" name="district" class="medInput">
                </div>
                <div class="col-md-4">
                    <label for="county">County</label><br>
                    <input id="county" name="county" class="medInput">
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <label for="subCounty">Subcounty</label><br>
                    <input id="subCounty" name="subCounty" class="medInput">
                </div>
                <div class="col-md-4">
                    <label for="parish">Parish</label><br>
                    <input id="parish" name="parish" class="medInput">
                </div>
                <div class="col-md-4">
                    <label for="village">Village</label><br>
                    <input id="village" name="village" class="medInput">
                </div>
            </div><br>
        </div>
        <div class="row">
            <div class="col-md-12"><br>
                <label>Parents</label>
            </div>
        </div>
        <div id="bioDataDiv" style="border: 2px solid white; padding:5px; border-radius:4px">
            <div class="row">
                <div class="col-md-12"><br>
                    <label>Father</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="fatherName">Full Name</label><br>
                    <input id="fatherName" name="fatherName" class="medInput">
                </div>
                <div class="col-md-4">
                    <label for="fatherTel">Telephone</label><br>
                    <input id="fatherTel" name="fatherTel" class="medInput">
                </div>
                <div class="col-md-4">
                    <label for="fatherEmail">Email</label><br>
                    <input id="fatherEmail" name="fatherEmail" class="medInput">
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-12"><br>
                    <label>Mother</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="studentId">Full Name</label><br>
                    <input id="studentId" name="studentId" class="medInput">
                </div>
                <div class="col-md-4">
                    <label for="studentId">Telephone</label><br>
                    <input id="studentId" name="studentId" class="medInput">
                </div>
                <div class="col-md-4">
                    <label for="studentId">Email</label><br>
                    <input id="studentId" name="studentId" class="medInput">
                </div>
            </div>
        </div><br>
    </div>
    <?php submitButton("Submit", "submit", "btnsubmit") ?>
</form>