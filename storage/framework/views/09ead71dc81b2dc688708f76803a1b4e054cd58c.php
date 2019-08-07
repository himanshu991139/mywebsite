<?php $__env->startSection('title', 'Get a home tutor here'); ?>



<?php $__env->startSection('content'); ?>

    <style>
        .select{
            width: 100%;
            border: 1px #ececec solid;
            /* padding: 43px; */
            background: white;
            border-radius: 0px!important;
            -webkit-appearance: none;
            -moz-appearance: none;

            padding: 10px;
        }

    </style>

    <div  class="inner-banner">
        <div class="opacity">
            <div class="container">
                <h2>Students Enquiry </h2>
                <ul>
                    <li><a href="/" class="tran3s">Home</a></li>
                    <li>/</li>
                    <li>Students Enquiry</li>
                </ul>
            </div> <!-- /.container -->
        </div> <!-- /.opacity -->
    </div>
    <h2  style="text-align: center" class="education-account-heading">Post Your Requirement</h2>
    <div style="margin-top: 100px" class="signUpModal theme-modal-box">

        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">

                    <div class="education-create-account">
                        <div id="note"></div>
                        <form action="/student-request" method="post" >
<?php echo csrf_field(); ?>
                            <ul>
                                <li>

                                    <input required type="text" placeholder="Type Your Name" name="name" value="">
                                    <input required type="hidden" name="tutor" value="">
                                </li>
                                <li>

                                    <input required type="text" placeholder="Type Your Phone" name="phone" value="">
                                </li>
                                <li>

                                    <input  required type="email" placeholder="Type Your Email" name="email" value="">
                                </li>
                                <li>

                                    <textarea required cols="150" rows="5" class="form-control" name="address" placeholder="Enter Your Address"></textarea>
                                </li>
                                <br>

                                <li>

                                    <div class="clearfix"></div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <select  class="select" name="class">
                                                <option value="">Select Class</option>
                                                <option value="5">Ist - Vth</option>
                                                <option value="7">Vth-VIth</option>
                                                <option value="9">VIIth-VIIIth</option>
                                                <option value="10">IXth-Xth</option>
                                                <option value="11">XIth-XIIth</option>
                                                <option value="12">Graduate Level</option>
                                                <option value="13">PG Level</option>
                                                <option value="14">IIT JEE</option>
                                                <option value="15">CA/CS/ICWA</option>
                                                <option value="16">SSC</option>
                                                <option value="17">UPSC</option>
                                                <option value="18">Diploma/B.Tech</option>
                                                <option value="19">GRE/GMAT</option>

                                            </select>
                                        </div>
                                        <br>
                                        <div style="margin-top: 10px" class="col-md-12">
                                            <select  class="select" name="subject">
                                                <option value="">Select Subject</option>
                                                <option value="18">All Subjects Upto 5th</option>
                                                <option value="19">All Subjects Upto 8th</option>
                                                <option value="21">Maths</option>
                                                <option value="22">Science </option>
                                                <option value="23">Physics</option>
                                                <option value="24">Chemistry</option>
                                                <option value="25">Play School &amp; Nursery</option>
                                                <option value="26">English</option>
                                                <option value="27">Hindi</option>
                                                <option value="28">Biology</option>
                                                <option value="29">Information Practices </option>
                                                <option value="30">Computer Science</option>
                                                <option value="31">Economics</option>
                                                <option value="32">Account</option>
                                                <option value="33">Business studies</option>
                                                <option value="34">Sanskrit</option>
                                                <option value="35">French</option>
                                                <option value="36">German</option>
                                                <option value="37">Social studies</option>
                                                <option value="38">Law</option>
                                                <option value="39">C&amp; C++</option>
                                                <option value="40">Java</option>
                                                <option value="41">Basic Computer</option>
                                                <option value="42">Geography</option>
                                                <option value="43">Geography</option>
                                                <option value="44">History</option>
                                                <option value="45">Programming Language</option>
                                                <option value="46">Engineering Drawing</option>
                                                <option value="47">Electronics &amp; Communication</option>
                                                <option value="48">Mechanical Engg.</option>
                                                <option value="49">Engg. Mathematics</option>
                                                <option value="50">BBA/B.COM/M.COM</option>
                                                <option value="51">Corporate Accounting</option>
                                                <option value="52">Tax</option>
                                                <option value="53">Dance</option>
                                                <option value="54">Singing</option>
                                                <option value="55">Music</option>
                                                <option value="56">English Speaking</option>
                                                <option value="57">Painting</option>
                                                <option value="58">Psychology</option>
                                                <option value="59">Political Science </option>
                                                <option value="60">Bank PO/SSC Exam</option>
                                                <option value="61">Statistics </option>
                                                <option value="62">Quantitative Aptitude</option>
                                                <option value="63">Reasoning </option>
                                                <option value="65">Special Educator </option>
                                                <option value="66">SEO &amp; Webdesign</option>
                                                <option value="67">Yoga</option>
                                                <option value="68">UPSC</option>
                                                <option value="69">TOEFL &amp; IELTS</option>
                                                <option value="70">SAT</option>
                                                <option value="71">GRE/GMAT</option>
                                                <option value="72">NTSE &amp; Olympiad </option>
                                                <option value="73">Caligraphy</option>
                                                <option value="74">Legal Studies</option>
                                                <option value="75">Direct Tax</option>
                                                <option value="76">Spanish</option>
                                                <option value="77">operation research</option>
                                                <option value="78">Artist</option>
                                                <option value="79">Guitar</option>
                                                <option value="80">Italian</option>
                                                <option value="81">Chinese</option>
                                                <option value="82">Drawing</option>
                                                <option value="83">Photographay</option>
                                                <option value="84">Vocal Trainer</option>
                                                <option value="85">Phonics</option>

                                            </select>
                                        </div>
                                        <br>
                                        <div style="margin-top: 10px" class="col-md-12">
                                            <select  class="select" name="preference">
                                                <option value="">Select Tuition Type </option>
                                                <option value="18">Near By Me</option>
                                                <option value="18">Home Tutor</option>


                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <br>

                                <li>

                                    <textarea required cols="150" rows="10" class="form-control" name="message" placeholder="Enter Your Message"></textarea>
                                </li>
                                <br>
                                <li>
                               <input class="basic" type="submit" value="Submit"><span></span>
                                </li>
                            </ul>
                        </form>

                    </div>


                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kapilanandd/Desktop/web services/hometutor/resources/views//student-enquiry.blade.php ENDPATH**/ ?>