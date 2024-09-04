<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vignan University</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/modals.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <div class="container">
        <div class="row"><br><br>

            <div class="col-lg-2" style="">
                <button class="filter_button_primary Ss-btn_txt" data-toggle="modal" data-target="#overlay"> <img
                        src="assets/icons/filter_list_white.png" />
                    &nbsp;Overlay </button>

            </div>


            <div class="col-lg-2" style="">
                <button class="filter_button_primary Ss-btn_txt" data-toggle="modal" data-target="#newsoverlay"> <img
                        src="assets/icons/filter_list_white.png" />
                    &nbsp;News </button>

            </div>

            <div class="col-lg-2" style="">
                <button class="filter_button_primary Ss-btn_txt" data-toggle="modal" data-target="#newsoverlay2"> <img
                        src="assets/icons/filter_list_white.png" />
                    &nbsp;News2 </button>

            </div>


            <div class="col-lg-2" style="">
                <button class="filter_button_primary Ss-btn_txt" data-toggle="modal" data-target="#flipFlop"> <img
                        src="assets/icons/filter_list_white.png" />
                    &nbsp;Filter </button>

            </div>


            <div class="col-lg-2" style="">
                <button class="button_primary Ss-btn_txt" style="width:100%;" data-toggle="modal"
                    data-target="#profile">View Profile</button>
                <!-- <div class="button_primary">
                              <div class="Ss-btn_txt">Button</div>
                          </div> -->
            </div>

            <div class="col-lg-2" style="">
                <button class="button_primary Ss-btn_txt" style="width:100%;" data-toggle="modal"
                    data-target="#admission">Admisson Modal</button>
                <!-- <div class="button_primary">
                              <div class="Ss-btn_txt">Button</div>
                          </div> -->
            </div>
            <!-- The Profile modal -->


            <div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                aria-hidden="true">
                <div class="profmodal-dialog" role="document">
                    <div class="profmodal-content">

                        <div class="profmodal-body">

                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                                    <div class="profile-picdiv">
                                        <img class="profile-pic" src="assets/images/man.png" />
                                        <div class="profile-namedesg">
                                            <div class="fac-name">DR. John Doe</div>
                                            <div
                                                style="align-self: stretch; color: black; font-size: 20px; font-family: Familjen Grotesk; font-weight: 400; line-height: 28px; word-wrap: break-word">
                                                Designation</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 profile-div">
                                    <div class="prof-title">Faculty Profile
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <img src="assets/icons/cross_big.png">
                                            <!-- <span aria-hidden="true">&times;</span> -->
                                        </button>

                                        <br><br>
                                        <div class="prof-section_hdng_div">
                                            <div class="prof-section_hdng_innrdiv">
                                                <div class="prof-section_hdng">Teaching</div>
                                                <div class="prof-content_div">
                                                    <div class="prof-content_text">Basics of Electrical & Electronic
                                                        Engineering</div>
                                                    <div class="prof-content_text">Physical Fitness, Sports and Games-I
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="prof-sectionbrdr"></div>

                                            <div class="prof-section_hdng_innrdiv">
                                                <div class="prof-section_hdng">Academic Experience</div>
                                                <div class="prof-content_div">
                                                    <div class="prof-content_subhdng">Professor and Dean</div>
                                                    <div class="prof-content_text">Vignan's Institute of Information
                                                        Technology(Autonomous) · Full-time<br />Oct 2003 - Present</div>
                                                </div>
                                            </div>
                                            <div class="prof-sectionbrdr"></div>

                                            <div class="prof-section_hdng_innrdiv">
                                                <div class="prof-section_hdng">Education</div>
                                                <div class="prof-content_div">
                                                    <div class="prof-content_subhdng">University of Twente</div>
                                                    <div class="prof-content_text">PhD, Applied Physics<br />2002 - 2006
                                                    </div>
                                                </div>

                                                <div class="prof-content_div">
                                                    <div class="prof-content_subhdng">Indian Institute of Technology,
                                                        Delhi</div>
                                                    <div class="prof-content_text">B.tech, Chemical Engineering
                                                        <br />2002 - 2006
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="prof-sectionbrdr"></div>

                                            <div class="prof-section_hdng_innrdiv">
                                                <div class="prof-section_hdng">Projects</div>
                                                <div class="prof-content_div">
                                                    <div class="prof-content_subhdng">Integrated Product Development -
                                                        Sponsored by Opus Mach</div>
                                                    <div class="prof-content_text">Jan 2015 - Present</div>
                                                </div>
                                                <div class="prof-content_div">
                                                    <div class="prof-content_subhdng">Integrated Product Development -
                                                        Sponsored by Opus Mach</div>
                                                    <div class="prof-content_text">Jan 2015 - Present</div>
                                                </div>
                                            </div>
                                            <div class="prof-sectionbrdr"></div>


                                            <div class="prof-section_hdng_innrdiv">
                                                <div class="prof-section_hdng">Publications</div>
                                                <!-- <div style="align-self: stretch; height: 130px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex"> -->
                                                <div class="prof-content_div">
                                                    <div class="prof-content_subhdng">A Multimodal End-2-End Approach to
                                                        Accessible Computing (first edition)</div>
                                                    <div class="prof-content_text">Springer (ISBN 978-1-4471-5081-7) ·
                                                        Mar 1, 2013</div>
                                                </div>
                                                <button class="text_btn_primary text_btn_primary-btn_txt "> <img
                                                        src="assets/icons/arrow_outward.png" />
                                                    &nbsp;Text Button </button>

                                                <!-- </div> -->
                                                <!-- <div style="prof-section_hdng_innrdiv"> -->
                                                <div class="prof-content_div">
                                                    <div class="prof-content_subhdng">A Multimodal End-2-End Approach to
                                                        Accessible Computing (first edition)</div>
                                                    <div class="prof-content_text">Springer (ISBN 978-1-4471-5081-7) ·
                                                        Mar 1, 2013</div>
                                                </div>
                                                <button class="text_btn_primary text_btn_primary-btn_txt "> <img
                                                        src="assets/icons/arrow_outward.png" />
                                                    &nbsp;Text Button </button>
                                            </div>
                                            <!-- </div> -->
                                            <div class="prof-sectionbrdr"></div>


                                            <div class="prof-section_hdng_innrdiv">
                                                <div class="prof-section_hdng">Awards & Honors</div>
                                                <div class="prof-content_div">
                                                    <div class="prof-content_subhdng">Applause Award</div>
                                                    <div class="prof-content_text">Issued by Vignan · Mar 2018</div>
                                                </div>
                                            </div>
                                            <div class="prof-sectionbrdr"></div>



                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>




                    </div>

                </div>

            </div>


            <!-- Profile modal end -->

            <!-- The modal -->


            <div class="modal fade" id="flipFlop" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                aria-hidden="true">
                <div class="filter-dialog" role="document">
                    <div class="filter-modal_content">
                        <div class="modal-header filtermodal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <img src="assets/icons/cross_big.png">
                                <!-- <span aria-hidden="true">&times;</span> -->
                            </button>
                            <h4 class="filter-modaltitle" id="modalLabel">Filter</h4>
                        </div>
                        <div class="modal-body filtermodal-body">
                            <div class="modal-bydept">BY departments <button class="filterbtn-search"
                                    id="filtersearch"><img src="assets/icons/search_square.webp"
                                        class="search-icn" /></button></div>

                            <div class="search-box filtersearch-box" id="filtersearch-show" style="display:none;">
                                <img src="assets/icons/search_square.webp" class="filtersearch-icon" />
                                <input type="text" class="input-search filterinput-search" id="searchterm" value=""
                                    placeholder="" onkeyup="filterFunction()">
                                <img src="assets/icons/cross.png" class="filter-cross"
                                    onclick="abortterm('searchterm')" />

                            </div>
                            <div class="selectontxt-div" id="selectiondiv" style="display:none;">
                                <div class="selectontxt-innrdiv">
                                    <div class="selecte_no"><span id="selected"></span> Selected</div>


                                </div>
                            </div>
                            <ul class="modal_ul" id="depul">
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="acse" id="acse" class="dept" name="dept[]">
                                            Advanced Computer Science Engineering
                                        </label>
                                    </div>

                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="aiml" id="aiml" class="dept" name="dept[]">
                                            ACSE - Artificial Intelligence and Machine
                                        </label>
                                    </div>

                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="cs" id="cs" class="dept" name="dept[]">
                                            ACSE - Cyber Security
                                        </label>
                                    </div>

                                </li>

                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="csbs" id="csbs" class="dept" name="dept[]">
                                            ACSE - Computer Science and Business
                                        </label>
                                    </div>

                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="ds" id="ds" class="dept" name="dept[]">
                                            ACSE - Data Science
                                        </label>
                                    </div>

                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="agri" id="agri" class="dept" name="dept[]">
                                            Agri. & Horti. Sciences
                                        </label>
                                    </div>

                                </li>

                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="ae" id="ae" class="dept" name="dept[]">
                                            Applied Engineering
                                        </label>
                                    </div>

                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="age" id="age" class="dept" name="dept[]">
                                            Agriculture Engineering
                                        </label>
                                    </div>

                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="ame" id="ame" class="dept" name="dept[]">
                                            Automobile Engineering
                                        </label>
                                    </div>

                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="bt" id="bt" class="dept" name="dept[]">
                                            BioTechnology
                                        </label>
                                    </div>

                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="bi" id="bi" class="dept" name="dept[]">
                                            BioInformatics
                                        </label>
                                    </div>

                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="bme" id="bme" class="dept" name="dept[]">
                                            Biomedical Engineering
                                        </label>
                                    </div>

                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="bme" id="bme" class="dept" name="dept[]">
                                            Biomedical Engineering
                                        </label>
                                    </div>

                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="bscagri" id="agri" class="dept" name="dept[]">
                                            B.Sc. (Hons) Agriculture
                                        </label>
                                    </div>

                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="chem" id="chem" class="dept" name="dept[]">
                                            Chemical Engineering
                                        </label>
                                    </div>

                                </li>

                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="civil" id="civil" class="dept" name="dept[]">
                                            Civil Engineering
                                        </label>
                                    </div>

                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="cse" id="cse" class="dept" name="dept[]">
                                            Computer Science Engineering
                                        </label>
                                    </div>

                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="chmstry" id="chmstry" class="dept"
                                                name="dept[]">
                                            Dept. of Chemistry
                                        </label>
                                    </div>
                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="eng" id="eng" class="dept" name="dept[]">
                                            Dept. of English
                                        </label>
                                    </div>
                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="maths" id="maths" class="dept" name="dept[]">
                                            Dept. of Mathematics
                                        </label>
                                    </div>
                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="phy" id="phy" class="dept" name="dept[]">
                                            Dept. of Physics
                                        </label>
                                    </div>
                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="ssh" id="ssh" class="dept" name="dept[]">
                                            Dept. of Science & Humanities
                                        </label>
                                    </div>
                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="ece" id="ece" class="dept" name="dept[]">
                                            Electronics And Communication Engineering
                                        </label>
                                    </div>

                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="eee" id="eee" class="dept" name="dept[]">
                                            Electrical And Electronics Engineering
                                        </label>
                                    </div>

                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="food" id="food" class="dept" name="dept[]">
                                            Food Technology
                                        </label>
                                    </div>

                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="it" id="it" class="dept" name="dept[]">
                                            Information Technology
                                        </label>
                                    </div>

                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="law" id="law" class="dept" name="dept[]">
                                            LAW
                                        </label>
                                    </div>

                                </li>

                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="mech" id="mech" class="dept" name="dept[]">
                                            Mechanical Engineering
                                        </label>
                                    </div>

                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="mba" id="mba" class="dept" name="dept[]">
                                            Management Studies
                                        </label>
                                    </div>

                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="pet" id="pet" class="dept" name="dept[]">
                                            Petroleum Engineering
                                        </label>
                                    </div>

                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="pharma" id="pharma" class="dept"
                                                name="dept[]">
                                            Pharmacetuical Sciences
                                        </label>
                                    </div>

                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="rae" id="rae" class="dept" name="dept[]">
                                            Robotic & Automation
                                        </label>
                                    </div>

                                </li>
                                <li class="modal_listbrdr">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="tt" id="tt" class="dept" name="dept[]">
                                            Textile Technology
                                        </label>
                                    </div>

                                </li>












                            </ul>
                            <!-- <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 13px; display: inline-flex">
                                        <div style="align-self: stretch; justify-content: space-between; align-items: flex-end; display: inline-flex">
                                            <div style="flex: 1 1 0; color: black; font-size: 16px; font-family: Familjen Grotesk; font-weight: 400; line-height: 22.40px; word-wrap: break-word">Advanced Computer Science Engineering</div>
                                           <input style="width: 20px; height: 20px; position: relative; border-radius: 2px; overflow: hidden; border: 1px black solid" type="checkbox" id=""  name="" />
                                            
                                        </div>
                                        <div style="align-self: stretch; height: 0px; border: 1px #E6E6E6 solid"></div>
                                    </div> -->


                        </div>
                        <div class="modal-footer filter-footer">

                            <button class="button_primary filtermodal-btn_txt modal-btn">Apply Filter</button>
                            <button class="button_secondary filtermodal-btn_txt2 modal-btn" onclick="clearall()">Clear
                                All</button>
                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        </div>
                    </div>

                </div>
            </div>

            <!-- The modal end -->


            <!-- The Admission modal -->


            <div class="modal fade" id="admission" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                aria-hidden="true">
                <div class="admissionmodal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-body">


                            <div class="row" style="padding: 25px;">

                                <div class="admsnmdl_div">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <img src="assets/icons/cross_big.png">
                                        <!-- <span aria-hidden="true">&times;</span> -->
                                    </button>
                                    <div class="admsn-row1_div">
                                        <div class="admsn-row1_innrdiv">
                                            <div class="admsn-row1_sec1">
                                                <div class="admsn-row1_sec1title">Admission Open for 2024</div>
                                                <div class="admsn-row1_sec1_txtbtndiv">
                                                    <div class="admsn-row1_sec1_txt">For B.tech, B.Pharmacy and B.Sc (
                                                        Hons ) Agriculture</div>
                                                    <button class="cta_button_primary Ss-btn_txt proceedtoapply">Proceed
                                                        to Apply <img
                                                            src="assets/icons/Button_forwardarrow.png" /></button>

                                                </div>
                                            </div>
                                            <div class="admsn-row1_sec2">

                                                <div class="admsn-row1_sec2_imgdiv">
                                                    <img class="admsn-row1_sec2_img" src="assets/images/girl.png" />
                                                </div>
                                                <div class="admsn-row1_sec2_txtdiv">
                                                    <img src="assets/icons/quotes.png" />
                                                    <div class="admsn-row1_sec2_txt">Vignan has always been at my side,
                                                        and to be honest, I’ve made the right decision for my future.
                                                    </div>

                                                    <div class="admsn-row1_sec2_name">Kunita Rao</div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">

                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                <div class="admsn-row2_div">
                                                    <div class="admsn-row2_innrdiv">
                                                        <div class="admsn-row2_txtdiv">
                                                            <div class="admsn-row2_hdng">V-SAT Exam</div>
                                                            <div class="admsn-row2_txt">Every student should appear in
                                                                V-SAT Exam to get admission in Vignan</div>
                                                            <button
                                                                class="text_btn_primary text_btn_primary-btn_txt knowmore">
                                                                <img src="assets/icons/arrow_outward.png" />
                                                                &nbsp;Know More</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                <div class="admsn-row2_div">
                                                    <div class="admsn-row2_innrdiv">
                                                        <div class="admsn-row2_txtdiv">
                                                            <div class="admsn-row2_hdng">Scholarship</div>
                                                            <div class="admsn-row2_txt">All student will get discount on
                                                                Tuition fee, depending on V-SAT results.</div>
                                                            <button
                                                                class="text_btn_primary text_btn_primary-btn_txt knowmore">
                                                                <img src="assets/icons/arrow_outward.png" />
                                                                &nbsp;Know More</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                <div class="admsn-row2_div">
                                                    <div class="admsn-row2_innrdiv">
                                                        <div class="admsn-row2_txtdiv">
                                                            <div class="admsn-row2_hdng">Departments</div>
                                                            <div class="admsn-row2_txt">Choosing department is important
                                                                as your career Depends on it</div>
                                                            <button
                                                                class="text_btn_primary text_btn_primary-btn_txt knowmore">
                                                                <img src="assets/icons/arrow_outward.png" />
                                                                &nbsp;Know More</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                    </div>





                                </div>


                            </div>


                        </div>
                        <div class="modal-footer" style="padding:0;">

                            <div class="admsnmodal_ftrdiv">
                                <div class="admsnmodal_ftr_innrdiv">
                                    <div class="admsnmodal_ftrtxt">Important dates : Last date to apply April 15, 2024 -
                                        V-SAT results on April 30, 2024 </div>
                                    <div class="admsnmodal_ftrtxt">Important dates : Last date to apply April 15, 2024 -
                                        V-SAT results on April 30, 2024 </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <!-- Profile modal end -->


            <!-- Overlay modal starts -->


            <div class="modal fade" id="overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                aria-hidden="true">
                <div class="overlay-dialog" role="document">
                    <div class="filter-modal_content">
                        <div class="modal-header overlaymodal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <img src="assets/icons/cross_big.png">
                                <!-- <span aria-hidden="true">&times;</span> -->
                            </button>
                            <h4 class="filter-modaltitle" id="modalLabel">NAAC</h4>
                        </div>
                        <div class="modal-body overlaymodal-body">


                            <p>
                                Vignan's Foundation for Science, Technology & Research (VFSTR) (Deemed to be University)
                                is known for quality-consciousness through its student-centric activities for
                                transforming them into globally accepted, socially conscious, emotionally balanced and
                                psychologically strong professionals. VFSTR sustains a culture that supports excellence
                                in teaching-learning, outcome-based education, and provides an environment that serves
                                the needs of students, faculty and staff.National Assessment and Accreditation Council
                                (NAAC) accredited VFSTR and awarded "A" grade on 16 November 2015 in the first cycle of
                                its assessment for a period of five years till 15 November 2020. The institution is
                                heading towards the second cycle of accreditation in the year 2020
                            </p>

                        </div>

                    </div>

                </div>
            </div>

            <!-- Overlay modal ends -->



            <!-- Overlay modal starts -->


            <div class="modal fade" id="overlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                aria-hidden="true">
                <div class="overlay-dialog" role="document">
                    <div class="filter-modal_content">
                        <div class="modal-header overlaymodal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <img src="assets/icons/cross_big.png">
                                <!-- <span aria-hidden="true">&times;</span> -->
                            </button>
                            <h4 class="filter-modaltitle" id="modalLabel">NAAC</h4>
                        </div>
                        <div class="modal-body overlaymodal-body">


                            <p>
                                Vignan's Foundation for Science, Technology & Research (VFSTR) (Deemed to be University)
                                is known for quality-consciousness through its student-centric activities for
                                transforming them into globally accepted, socially conscious, emotionally balanced and
                                psychologically strong professionals. VFSTR sustains a culture that supports excellence
                                in teaching-learning, outcome-based education, and provides an environment that serves
                                the needs of students, faculty and staff.National Assessment and Accreditation Council
                                (NAAC) accredited VFSTR and awarded "A" grade on 16 November 2015 in the first cycle of
                                its assessment for a period of five years till 15 November 2020. The institution is
                                heading towards the second cycle of accreditation in the year 2020
                            </p>

                        </div>

                    </div>

                </div>
            </div>

            <!-- Overlay modal ends -->



            <!-- News Overlay Image modal starts -->


            <div class="modal fade" id="newsoverlay" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                aria-hidden="true">
                <div class="newsoverlay-dialog" role="document">
                    <div class="filter-modal_content">
                        <!-- <div class="modal-header overlaymodal-header">
                          
                          
                        </div> -->
                        <div class="modal-body newsoverlaymodal-body">

                            <div class="news-outerdiv">

                                <div class="news-leftsection">
                                    <span class="news-date">20th Jan 2024</span>
                                    <img src="assets/images/newspaper-1.webp" class="news-img" />


                                    <div class="news-shareonoutrdiv">
                                        <div class="news-shareonparentdiv">
                                            <span class="shareon">Share on</span>
                                            <div class="ftr_socialmediadivs">
                                                <svg id="social-arrow" width="46" height="44" viewBox="0 0 46 44"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.7087 30.9159V19.0303H13.5822V30.9159H17.7091H17.7087ZM15.6463 17.4077C17.085 17.4077 17.9807 16.4951 17.9807 15.3545C17.9537 14.1879 17.085 13.3007 15.6736 13.3007C14.2613 13.3007 13.3389 14.1879 13.3389 15.3544C13.3389 16.495 14.2343 17.4076 15.6192 17.4076H15.6459L15.6463 17.4077ZM19.9928 30.9159H24.1189V24.2791C24.1189 23.9244 24.1459 23.5687 24.2549 23.3153C24.5531 22.6053 25.232 21.8703 26.3722 21.8703C27.865 21.8703 28.4625 22.9601 28.4625 24.5581V30.9159H32.5886V24.101C32.5886 20.4504 30.5531 18.7516 27.8383 18.7516C25.6125 18.7516 24.6349 19.9426 24.0918 20.7538H24.1193V19.0307H19.993C20.0468 20.1457 19.9926 30.9163 19.9926 30.9163L19.9928 30.9159Z"
                                                        fill="black" />
                                                </svg>

                                                <svg id="social-arrow" width="45" height="45" viewBox="0 0 45 45"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="Social Media / Facebook">
                                                        <g id="Capa 2">
                                                            <g id="ELEMENTS">
                                                                <path id="Vector"
                                                                    d="M28.0055 23.9648L28.6466 19.8911H24.6971V17.2432C24.6971 16.1293 25.2485 15.0409 27.0117 15.0409H28.8326V11.5718C27.7722 11.4027 26.7007 11.3113 25.6268 11.2981C22.3761 11.2981 20.2538 13.2522 20.2538 16.7849V19.8911H16.6505V23.9648H20.2538V33.8181H24.6971V23.9648H28.0055Z"
                                                                    fill="black" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>

                                                <svg id="social-arrow" width="46" height="44" viewBox="0 0 46 44"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="Social Media / Instagram">
                                                        <g id="Group 15">
                                                            <path id="Vector"
                                                                d="M19.172 22.0564C19.172 20.0296 20.8887 18.3862 23.007 18.3862C25.1253 18.3862 26.8429 20.0296 26.8429 22.0564C26.8429 24.0831 25.1253 25.7266 23.007 25.7266C20.8887 25.7266 19.172 24.0831 19.172 22.0564ZM17.0983 22.0564C17.0983 25.1788 19.7436 27.7098 23.007 27.7098C26.2703 27.7098 28.9156 25.1788 28.9156 22.0564C28.9156 18.934 26.2703 16.403 23.007 16.403C19.7436 16.403 17.0983 18.934 17.0983 22.0564ZM27.7687 16.1788C27.7686 16.4401 27.8495 16.6956 28.0011 16.9129C28.1528 17.1302 28.3684 17.2997 28.6206 17.3998C28.8729 17.4999 29.1505 17.5261 29.4184 17.4752C29.6863 17.4244 29.9324 17.2986 30.1256 17.1139C30.3188 16.9292 30.4504 16.6939 30.5037 16.4376C30.5571 16.1814 30.5299 15.9157 30.4255 15.6743C30.3211 15.4328 30.1442 15.2264 29.9172 15.0811C29.6901 14.9359 29.4232 14.8583 29.1501 14.8582H29.1496C28.7835 14.8583 28.4325 14.9975 28.1735 15.2451C27.9146 15.4928 27.769 15.8286 27.7687 16.1788ZM18.3582 31.0181C17.2363 30.9692 16.6266 30.7904 16.2213 30.6393C15.6841 30.4392 15.3008 30.2009 14.8978 29.8158C14.4947 29.4307 14.2453 29.0643 14.037 28.5503C13.8791 28.1628 13.6922 27.5791 13.6412 26.5057C13.5854 25.3452 13.5743 24.9966 13.5743 22.0565C13.5743 19.1163 13.5863 18.7687 13.6412 17.6072C13.6923 16.5338 13.8805 15.9513 14.037 15.5626C14.2462 15.0486 14.4953 14.6819 14.8978 14.2962C15.3002 13.9106 15.6832 13.6719 16.2213 13.4727C16.6264 13.3216 17.2363 13.1428 18.3582 13.094C19.5711 13.0406 19.9355 13.0299 23.007 13.0299C26.0785 13.0299 26.4432 13.0415 27.6572 13.094C28.779 13.1429 29.3878 13.323 29.794 13.4727C30.3313 13.6719 30.7146 13.9112 31.1176 14.2962C31.5206 14.6813 31.7692 15.0486 31.9783 15.5626C32.1363 15.9502 32.3232 16.5338 32.3742 17.6072C32.4299 18.7687 32.4411 19.1163 32.4411 22.0565C32.4411 24.9966 32.4299 25.3443 32.3742 26.5057C32.3231 27.5791 32.1353 28.1626 31.9783 28.5503C31.7692 29.0643 31.5201 29.4311 31.1176 29.8158C30.7151 30.2005 30.3313 30.4392 29.794 30.6393C29.389 30.7905 28.779 30.9693 27.6572 31.0181C26.4442 31.0714 26.0799 31.0821 23.007 31.0821C19.9341 31.0821 19.5708 31.0714 18.3582 31.0181ZM18.2629 11.1133C17.0379 11.1667 16.2009 11.3525 15.4699 11.6247C14.7128 11.9057 14.0719 12.2828 13.4315 12.8946C12.7911 13.5064 12.398 14.1205 12.1042 14.8449C11.8198 15.5448 11.6256 16.3452 11.5698 17.5173C11.5131 18.6912 11.5001 19.0665 11.5001 22.0564C11.5001 25.0463 11.5131 25.4216 11.5698 26.5955C11.6256 27.7676 11.8198 28.568 12.1042 29.2679C12.398 29.9918 12.7912 30.6067 13.4315 31.2182C14.0718 31.8297 14.7128 32.2063 15.4699 32.4881C16.2023 32.7603 17.0379 32.9461 18.2629 32.9995C19.4905 33.0529 19.8821 33.0662 23.007 33.0662C26.1319 33.0662 26.5241 33.0537 27.7511 32.9995C28.9761 32.9461 29.8126 32.7603 30.5441 32.4881C31.3007 32.2063 31.9421 31.83 32.5825 31.2182C33.2229 30.6064 33.6152 29.9918 33.9097 29.2679C34.1942 28.568 34.3893 27.7675 34.4442 26.5955C34.5 25.4207 34.513 25.0463 34.513 22.0564C34.513 19.0665 34.5 18.6912 34.4442 17.5173C34.3884 16.3451 34.1942 15.5443 33.9097 14.8449C33.6152 14.121 33.2219 13.5073 32.5825 12.8946C31.9431 12.2818 31.3007 11.9057 30.545 11.6247C29.8126 11.3525 28.976 11.1658 27.752 11.1133C26.5251 11.0599 26.1328 11.0466 23.0079 11.0466C19.883 11.0466 19.4905 11.059 18.2629 11.1133Z"
                                                                fill="black" />
                                                        </g>
                                                    </g>
                                                </svg>


                                                <svg id="social-arrow" width="46" height="44" viewBox="0 0 46 44"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="Social Media / Instagram">
                                                        <g id="Group 15">
                                                            <path id="Vector"
                                                                d="M23.0001 12.5716C19.3697 12.5716 14.6577 13.4705 14.6577 13.4705L14.6458 13.4839C12.9924 13.7452 11.7256 15.1493 11.7256 16.8569V21.9993V22.001V27.1417V27.1434C11.7272 27.9589 12.0229 28.7472 12.5597 29.3666C13.0965 29.986 13.8391 30.3961 14.6543 30.5231L14.6577 30.5281C14.6577 30.5281 19.3697 31.4287 23.0001 31.4287C26.6305 31.4287 31.3425 30.5281 31.3425 30.5281L31.3442 30.5264C32.1602 30.3997 32.9037 29.9893 33.4409 29.3691C33.9781 28.749 34.2737 27.9597 34.2746 27.1434V27.1417V22.001V21.9993V16.8569C34.2734 16.0411 33.9778 15.2524 33.441 14.6326C32.9042 14.0129 32.1613 13.6026 31.3459 13.4755L31.3425 13.4705C31.3425 13.4705 26.6305 12.5716 23.0001 12.5716ZM20.3983 18.0555L27.3364 21.9993L20.3983 25.9431V18.0555Z"
                                                                fill="black" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="newspaperlink-parentdiv">

                                            <span class="newspaper-name">Sakshi Newspaper, Andra Pradesh</span>
                                            <div class="text_btnnew viewall-right" onclick="">
                                                <div class="text_btnnew_innrdiv">
                                                    <div class="text_btnnew_txt">
                                                        Go To Newspaper Link
                                                    </div>

                                                    <div>
                                                        <img loading="lazy" src="assets/svgicons/outwardarrow_brown.svg"
                                                            style="width: 16px;height: 16px;" />
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                    </div>

                                </div>
                                <div class="news-rightsection">
                                    <p class="news-title">
                                        Vignan Student Selected for Republic day Parade for 26th January 2024
                                    </p>
                                    <p class="news-content">
                                        The film starts with a clip showing Santiago Munez playing football as a child
                                        in Mexico. The same night, his family illegally enter into the United States to
                                        find a better living. Santi grows up in the USA and works with his father as a
                                        gardener. At night he works as a busboy in a Chinese restaurant. He also plays
                                        football for a small local team called AJFC. He goes to play a match one day
                                        after his work with his father, where he is forced to use a pair of cardboard
                                        pieces as shin guards as he cannot afford any. He saves his money and hides it
                                        in his shoes every night to purchase a football kit.<br><br>
                                        The next day, while playing football, he is noticed by Glen Foy, an ex-Newcastle
                                        player, scout and car mechanic. Glen tells Santi that on the next match day, he
                                        will call an agent who was in US to set up a meeting with the Newcastle manager.
                                        The agent, Barry Rankin, does not turn up and lies that he is in a meeting.
                                        Later, Glen himself calls the Newcastle boss and convinces him to give Santiago
                                        a trial. Glen then tells Santiago that, if he can get to England, he will be
                                        allowed a tryout with Newcastle United. Santiago would like nothing more in the
                                        world than to join the club. However, he does not have sufficient funds, so he
                                        decides to save up some more money and use it along with his hidden stash. He
                                        returns home one afternoon, however, to find that his father has stolen his
                                        money hidden in the shoes, and used it to purchase a new Chevy truck, so they
                                        can have their own gardening business and not work for another business. When
                                        Santiago confronts his father, he explains that "this is how things get better!
                                        This is how you measure a man's life," to him. Santiago suddenly shouts at him
                                        "It's Your life!" and sulks in his room. His grandmother (who is an even bigger
                                        football fan than him) sells off part of her jewellery and buys a ticket for
                                        Santi to travel from Los Angeles to Mexico City by train and catch the plane to
                                    </p>


                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <img src="assets/icons/cross_big.png">
                                    <!-- <span aria-hidden="true">&times;</span> -->
                                </button>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <!-- News Overlay Image modal ends -->



            <!-- News Overlay  modal starts -->


            <div class="modal fade" id="newsoverlay2" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                aria-hidden="true">
                <div class="newsoverlay-dialog2" role="document">
                    <div class="filter-modal_content">
                        <!-- <div class="modal-header overlaymodal-header">
                          
                          
                        </div> -->
                        <div class="modal-body newsoverlaymodal-body">

                            <div class="news-outerdiv">

                                <div class="news-leftsection2">

                                   



                                    <div class="news-noimage-contentdiv">
                                        <p class="news-title">
                                            Vignan Student Selected for Republic day Parade for 26th January 2024
                                        </p>


                                        <div class="news-shareonparentdiv2">
                                            <span class="news-date">
                                                20th Jan 2024
                                            </span>
                                            <div class="news-shareonparentdiv">
                                                <span class="shareon">Share on</span>
                                                <div class="ftr_socialmediadivs">
                                                    <svg id="social-arrow" width="46" height="44" viewBox="0 0 46 44"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.7087 30.9159V19.0303H13.5822V30.9159H17.7091H17.7087ZM15.6463 17.4077C17.085 17.4077 17.9807 16.4951 17.9807 15.3545C17.9537 14.1879 17.085 13.3007 15.6736 13.3007C14.2613 13.3007 13.3389 14.1879 13.3389 15.3544C13.3389 16.495 14.2343 17.4076 15.6192 17.4076H15.6459L15.6463 17.4077ZM19.9928 30.9159H24.1189V24.2791C24.1189 23.9244 24.1459 23.5687 24.2549 23.3153C24.5531 22.6053 25.232 21.8703 26.3722 21.8703C27.865 21.8703 28.4625 22.9601 28.4625 24.5581V30.9159H32.5886V24.101C32.5886 20.4504 30.5531 18.7516 27.8383 18.7516C25.6125 18.7516 24.6349 19.9426 24.0918 20.7538H24.1193V19.0307H19.993C20.0468 20.1457 19.9926 30.9163 19.9926 30.9163L19.9928 30.9159Z"
                                                            fill="black" />
                                                    </svg>

                                                    <svg id="social-arrow" width="45" height="45" viewBox="0 0 45 45"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="Social Media / Facebook">
                                                            <g id="Capa 2">
                                                                <g id="ELEMENTS">
                                                                    <path id="Vector"
                                                                        d="M28.0055 23.9648L28.6466 19.8911H24.6971V17.2432C24.6971 16.1293 25.2485 15.0409 27.0117 15.0409H28.8326V11.5718C27.7722 11.4027 26.7007 11.3113 25.6268 11.2981C22.3761 11.2981 20.2538 13.2522 20.2538 16.7849V19.8911H16.6505V23.9648H20.2538V33.8181H24.6971V23.9648H28.0055Z"
                                                                        fill="black" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>

                                                    <svg id="social-arrow" width="46" height="44" viewBox="0 0 46 44"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="Social Media / Instagram">
                                                            <g id="Group 15">
                                                                <path id="Vector"
                                                                    d="M19.172 22.0564C19.172 20.0296 20.8887 18.3862 23.007 18.3862C25.1253 18.3862 26.8429 20.0296 26.8429 22.0564C26.8429 24.0831 25.1253 25.7266 23.007 25.7266C20.8887 25.7266 19.172 24.0831 19.172 22.0564ZM17.0983 22.0564C17.0983 25.1788 19.7436 27.7098 23.007 27.7098C26.2703 27.7098 28.9156 25.1788 28.9156 22.0564C28.9156 18.934 26.2703 16.403 23.007 16.403C19.7436 16.403 17.0983 18.934 17.0983 22.0564ZM27.7687 16.1788C27.7686 16.4401 27.8495 16.6956 28.0011 16.9129C28.1528 17.1302 28.3684 17.2997 28.6206 17.3998C28.8729 17.4999 29.1505 17.5261 29.4184 17.4752C29.6863 17.4244 29.9324 17.2986 30.1256 17.1139C30.3188 16.9292 30.4504 16.6939 30.5037 16.4376C30.5571 16.1814 30.5299 15.9157 30.4255 15.6743C30.3211 15.4328 30.1442 15.2264 29.9172 15.0811C29.6901 14.9359 29.4232 14.8583 29.1501 14.8582H29.1496C28.7835 14.8583 28.4325 14.9975 28.1735 15.2451C27.9146 15.4928 27.769 15.8286 27.7687 16.1788ZM18.3582 31.0181C17.2363 30.9692 16.6266 30.7904 16.2213 30.6393C15.6841 30.4392 15.3008 30.2009 14.8978 29.8158C14.4947 29.4307 14.2453 29.0643 14.037 28.5503C13.8791 28.1628 13.6922 27.5791 13.6412 26.5057C13.5854 25.3452 13.5743 24.9966 13.5743 22.0565C13.5743 19.1163 13.5863 18.7687 13.6412 17.6072C13.6923 16.5338 13.8805 15.9513 14.037 15.5626C14.2462 15.0486 14.4953 14.6819 14.8978 14.2962C15.3002 13.9106 15.6832 13.6719 16.2213 13.4727C16.6264 13.3216 17.2363 13.1428 18.3582 13.094C19.5711 13.0406 19.9355 13.0299 23.007 13.0299C26.0785 13.0299 26.4432 13.0415 27.6572 13.094C28.779 13.1429 29.3878 13.323 29.794 13.4727C30.3313 13.6719 30.7146 13.9112 31.1176 14.2962C31.5206 14.6813 31.7692 15.0486 31.9783 15.5626C32.1363 15.9502 32.3232 16.5338 32.3742 17.6072C32.4299 18.7687 32.4411 19.1163 32.4411 22.0565C32.4411 24.9966 32.4299 25.3443 32.3742 26.5057C32.3231 27.5791 32.1353 28.1626 31.9783 28.5503C31.7692 29.0643 31.5201 29.4311 31.1176 29.8158C30.7151 30.2005 30.3313 30.4392 29.794 30.6393C29.389 30.7905 28.779 30.9693 27.6572 31.0181C26.4442 31.0714 26.0799 31.0821 23.007 31.0821C19.9341 31.0821 19.5708 31.0714 18.3582 31.0181ZM18.2629 11.1133C17.0379 11.1667 16.2009 11.3525 15.4699 11.6247C14.7128 11.9057 14.0719 12.2828 13.4315 12.8946C12.7911 13.5064 12.398 14.1205 12.1042 14.8449C11.8198 15.5448 11.6256 16.3452 11.5698 17.5173C11.5131 18.6912 11.5001 19.0665 11.5001 22.0564C11.5001 25.0463 11.5131 25.4216 11.5698 26.5955C11.6256 27.7676 11.8198 28.568 12.1042 29.2679C12.398 29.9918 12.7912 30.6067 13.4315 31.2182C14.0718 31.8297 14.7128 32.2063 15.4699 32.4881C16.2023 32.7603 17.0379 32.9461 18.2629 32.9995C19.4905 33.0529 19.8821 33.0662 23.007 33.0662C26.1319 33.0662 26.5241 33.0537 27.7511 32.9995C28.9761 32.9461 29.8126 32.7603 30.5441 32.4881C31.3007 32.2063 31.9421 31.83 32.5825 31.2182C33.2229 30.6064 33.6152 29.9918 33.9097 29.2679C34.1942 28.568 34.3893 27.7675 34.4442 26.5955C34.5 25.4207 34.513 25.0463 34.513 22.0564C34.513 19.0665 34.5 18.6912 34.4442 17.5173C34.3884 16.3451 34.1942 15.5443 33.9097 14.8449C33.6152 14.121 33.2219 13.5073 32.5825 12.8946C31.9431 12.2818 31.3007 11.9057 30.545 11.6247C29.8126 11.3525 28.976 11.1658 27.752 11.1133C26.5251 11.0599 26.1328 11.0466 23.0079 11.0466C19.883 11.0466 19.4905 11.059 18.2629 11.1133Z"
                                                                    fill="black" />
                                                            </g>
                                                        </g>
                                                    </svg>


                                                    <svg id="social-arrow" width="46" height="44" viewBox="0 0 46 44"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="Social Media / Instagram">
                                                            <g id="Group 15">
                                                                <path id="Vector"
                                                                    d="M23.0001 12.5716C19.3697 12.5716 14.6577 13.4705 14.6577 13.4705L14.6458 13.4839C12.9924 13.7452 11.7256 15.1493 11.7256 16.8569V21.9993V22.001V27.1417V27.1434C11.7272 27.9589 12.0229 28.7472 12.5597 29.3666C13.0965 29.986 13.8391 30.3961 14.6543 30.5231L14.6577 30.5281C14.6577 30.5281 19.3697 31.4287 23.0001 31.4287C26.6305 31.4287 31.3425 30.5281 31.3425 30.5281L31.3442 30.5264C32.1602 30.3997 32.9037 29.9893 33.4409 29.3691C33.9781 28.749 34.2737 27.9597 34.2746 27.1434V27.1417V22.001V21.9993V16.8569C34.2734 16.0411 33.9778 15.2524 33.441 14.6326C32.9042 14.0129 32.1613 13.6026 31.3459 13.4755L31.3425 13.4705C31.3425 13.4705 26.6305 12.5716 23.0001 12.5716ZM20.3983 18.0555L27.3364 21.9993L20.3983 25.9431V18.0555Z"
                                                                    fill="black" />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="news-content2">
                                            The film starts with a clip showing Santiago Munez playing football as a
                                            child in Mexico. The same night, his family illegally enter into the United
                                            States to find a better living. Santi grows up in the USA and works with his
                                            father as a gardener. At night he works as a busboy in a Chinese restaurant.
                                            He also plays football for a small local team called AJFC. He goes to play a
                                            match one day after his work with his father, where he is forced to use a
                                            pair of cardboard pieces as shin guards as he cannot afford any. He saves
                                            his money and hides it in his shoes every night to purchase a football
                                            kit.<br><br>
                                            The next day, while playing football, he is noticed by Glen Foy, an
                                            ex-Newcastle player, scout and car mechanic. Glen tells Santi that on the
                                            next match day, he will call an agent who was in US to set up a meeting with
                                            the Newcastle manager. The agent, Barry Rankin, does not turn up and lies
                                            that he is in a meeting. Later, Glen himself calls the Newcastle boss and
                                            convinces him to give Santiago a trial. Glen then tells Santiago that, if he
                                            can get to England, he will be allowed a tryout with Newcastle United.
                                            Santiago would like nothing more in the world than to join the club.
                                            However, he does not have sufficient funds, so he decides to save up some
                                            more money and use it along with his hidden stash. He returns home one
                                            afternoon, however, to find that his father has stolen his money hidden in
                                            the shoes, and used it to purchase a new Chevy truck, so they can have their
                                            own gardening business and not work for another business. When Santiago
                                            confronts his father, he explains that "this is how things get better! This
                                            is how you measure a man's life," to him. Santiago suddenly shouts at him
                                            "It's Your life!" and sulks in his room. His grandmother (who is an even
                                            bigger football fan than him) sells off part of her jewellery and buys a
                                            ticket for Santi to travel from Los Angeles to Mexico City by train and
                                            catch the plane to
                                        </p>


                                    </div>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <img src="assets/icons/cross_big.png">
                                    </button>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <!-- News Overlay  modal ends -->

            </div>

        </div>


        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/common.js"></script>
        <script>
        $('#filtersearch').click(function() {
            //$('#filtersearch').css('display', 'none');
            $("#filtersearch-show").slideToggle();
            $('#filtersearch-show').css('display', 'flex');

            //    $(".search-box").slideDown("slow");
        })

        function clearall() {
            console.log('clearall');
            $('input:checked').removeAttr('checked');
            $('.smallchip-div').css('display', 'none');
            $("#selected").text($('input[name=lineup]:checked').length);
            //  $('input:checked').attr('checked', false); // Unchecks it
        }
        let dept = [];
        $('.dept').on('click', function() {
            console.log($(this).val());
            var depul = document.getElementById('depul');
            depul.style.height = '74%';

            var deptnm = $(this).val();
            console.log(jQuery.inArray(deptnm, dept) === -1);

            if (jQuery.inArray(deptnm, dept) === -1) {
                $(".dept:checked").each(function() {
                    //$(".dept:checked").removeAttr('checked');

                    dept.push(deptnm);
                    dept = dept.filter((item,
                        index) => dept.indexOf(item) === index);


                });
            } else {
                console.log('remove');
                const branchindex = dept.indexOf(deptnm);
                console.log(branchindex);
                dept.splice(branchindex, 1);
                closechip(deptnm);
                // dept.filter((item,
                // index) =>array.splice(index, 1));
            }
            console.log(dept);
            $('#selectiondiv').css('display', 'inline-flex');
            $("#selected").text(dept.length);
            $('.selecte_no').append(` <div class="smallchip-div" id=` + deptnm + `>
                                                <div class="smallchip-txt">` + deptnm +
                ` </div>
                                                <div class="forward_arrw">
                                                    <img src="assets/icons/cross.png" class="img-size" onclick="closechip(` +
                deptnm + `)" />
                                                </div>
                                            </div>`);
            //  dept.pop();
        });

        function closechip(chipid) {
            console.log(chipid);
            //  console.log(chipid[0].id);
            var chip = document.getElementById(chipid[0].id);
            console.log(chip);
            if (chip == null) {
                $('#' + chip + ':checked').removeAttr('checked');
                document.getElementById(chipid).style.display = 'none';
                console.log($('input[name="dept[]"]:checked').length);
                $("#selected").text($('input[name="dept[]"]:checked').length);
                chip.style.display = 'none';
            } else {
                $('#' + chip.id + ':checked').removeAttr('checked');
                chip.style.display = 'none';
                console.log($('input[name="dept[]"]:checked').length);
                $("#selected").text($('input[name="dept[]"]:checked').length);
            }
            // console.log(chip.id);
            //console.log($('#'+chip.id+':checked'));

            //$('#mech').prop('checked', false);
        }

        function filterFunction() {
            const input = document.getElementById("searchterm");

            const filter = input.value.toUpperCase();

            const div = document.getElementById("depul");
            const optn = div.getElementsByTagName("li");

            for (let i = 0; i < optn.length; i++) {
                txtValue = optn[i].textContent || optn[i].innerText;
                console.log(txtValue.toUpperCase().indexOf(filter));
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    optn[i].style.display = "";
                } else {
                    optn[i].style.display = "none";
                }
            }
        }
        </script>
</body>

</html>