@extends('crudbooster::admin_template')
@section('content')
<!-- Main content -->
<section id='content_section' class="content">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">English</a></li>
        <li><a data-toggle="tab" href="#menu1">Bangla </a></li>
    </ul>

    <form method="POST" action="{{ URL::to('loan_requests/add-save') }}">
      {{ csrf_field() }}

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <!-- english part start -->

                <div class="col-md-12 well">
                    <h4 class="bg-blue">Applicant Bio Data</h4><br>

                    <div class="form-group col-md-3">
                        <label for="inputEmail4">Name</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="name" placeholder="Full Name" class="form-control" required="true" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="inputEmail4">Date Of Birth:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input id="phoneNumber" name="date_of_birth" placeholder="Date Of Birth" class="form-control" required="true" type="date" value=""></div>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="inputEmail4">Educational Qualification</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="name" placeholder="Full Name" class="form-control" required="true" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="inputEmail4">Training:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input name="training" placeholder="Training" class="form-control" required="true" type="text" value=""></div>
                    </div>


                    <div class="form-group col-md-3">
                        <label for="inputEmail4">Father Name</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="father_name" placeholder="Father Name" class="form-control" required="true" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="inputEmail4">Mohter Name</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="mother_name" placeholder="Mother Name" class="form-control" required="true" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="inputEmail4">Gender</label>
                        <div class="input-group">
                            <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                            <select class="selectpicker form-control" name="gender">
                                <option hidden>Select Your Gender</option>
                                <option value="MAle">MAle</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-3">
                        <label>Married Status</label>
                        <div class="input-group">
                            <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                            <select class="selectpicker form-control" name="merried_status">
                                <option hidden>Select Married Status</option>
                                <option value="Married">Married</option>
                                <option value="Un Married">Un Married</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Husband / Wife Name :</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="hus_wife_name" placeholder="Husband / Wife Name" class="form-control" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-3">
                        <label>Monthly Income Others Source :</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="income_other_source" placeholder="Monthly Income From Others Source" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>NID:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="nid" placeholder="NID" class="form-control" type="text" value="">
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Phone Number:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="mobile" placeholder="Phone Number" class="form-control" type="text" value=""></div>
                    </div>
                </div>
                <div class="col-md-12 well">
                    <h4 class="bg-blue p-3">Present Address</h4><br>
                    <div class="form-group col-md-2">
                        <label>Village:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="village" placeholder="Village" class="form-control" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-2">
                        <label>Home No/ Road No:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="road_no" placeholder="Home No/ Road No" class="form-control" type="text" value="">
                        </div>
                    </div>

                    <div class="form-group col-md-2">
                        <label>Post office:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="post_office" placeholder="Post office" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Union:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="union" placeholder="Union" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Upozilla:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="upozilla" placeholder="Upozilla" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Zilla:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="zilla" placeholder="Zilla" class="form-control" type="text" value=""></div>
                    </div>
                </div>

                <div class="col-md-12 well">
                    <h4 class="bg-blue p-3">Permanent Address</h4><br>
                    <div class="form-group col-md-2">
                        <label>Village:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="p_village" placeholder="Village" class="form-control" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-2">
                        <label>Home No/ Road No:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="p_road_no" placeholder="Home No/ Road No" class="form-control" type="text" value="">
                        </div>
                    </div>

                    <div class="form-group col-md-2">
                        <label>Post office:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="p_post_office" placeholder="Post office" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Union:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="p_union" placeholder="Union" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Upozilla:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="p_upozilla" placeholder="Upozilla" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Zilla:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="p_zilla" placeholder="Zilla" class="form-control" type="text" value=""></div>
                    </div>
                </div>

                <div class="col-md-12 well">
                    <h4 class="bg-blue p-3">Business /Project Bio Data</h4><br>

                    <div class="form-group col-md-3">
                        <label>Institute Name:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="institute_name" placeholder="Institute Name" class="form-control" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-3">
                        <label>Business Type:</label>
                        <div class="input-group">
                            <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                            <select class="selectpicker form-control" name="type" required="true" id="select_type">
                                <option value="" hidden>Select Business Type</option>
                                <option value="Single Owner">Single Owner</option>
                                <option value="Partner">Partner </option>
                                <option value="Joint Capital">Joint capital </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Trade Licence:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="trade_licence" placeholder="Trade Licence" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Invested Capital:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="Invested_capital" placeholder="Invested Capital" class="form-control" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-3">
                        <label>Business Start Date:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="start_date" placeholder="Business Start Date" class="form-control" type="text" value="">
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Bank Account Name/No:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="bank_account" placeholder="Bank Account Name/No" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Institute Annual Income:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="annual_income" placeholder="Institute Annual Income" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Institute Annual Sell:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="annual_income" placeholder="Institute Annual Sell" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Institute Annual Expense:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="annual_income" placeholder="Institute Annual Expense" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Number Of Workers In Institute:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="workers_no" placeholder="Number Of Workers In Institute" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Institute Permanent Resource:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="parmanent_resource" placeholder="Institute Permanent Resource" class="form-control" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-3">
                        <label>Tax Identification Number:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="tax_identification_number" placeholder="Tax Identification Number" class="form-control" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-2">
                        <label>Village:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="b_village" placeholder="Village" class="form-control" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-2">
                        <label>Home No/ Road No:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="b_road_no" placeholder="Home No/ Road No" class="form-control" type="text" value="">
                        </div>
                    </div>

                    <div class="form-group col-md-2">
                        <label>Post office:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="b_post_office" placeholder="Post office" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Union:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="b_union" placeholder="Union" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Upozilla:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="b_upozilla" placeholder="Upozilla" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Zilla:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="b_zilla" placeholder="Zilla" class="form-control" type="text" value=""></div>
                    </div>


                    <div class="col-md-12 well">
                        <h4 class="bg-blue p-3">Owned Other Institue Information</h4><br>
                        <div class="form-group col-md-3">
                            <label>Institute Name:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="o_institute_name" placeholder="Institute Name" class="form-control" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Institute Address:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <textarea name="o_institue_addtess" placeholder="Business/Project Address" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Business Type:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="o_institute_type" placeholder="Business Type" class="form-control" type="text" value=""></div>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Institute Email:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="o_institute_email" placeholder="Institute Email" class="form-control" type="email" value=""></div>
                        </div>
                    </div>

                    <div class="col-md-12 well">
                        <h4 class="bg-blue p-3">Loan Acceptance Reasons</h4><br>
                        <div class="form-group col-md-3">
                            <label>Loan Type:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="loan_type" placeholder="Loan Type" class="form-control" value="" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Reasons Of Loan:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="loan_reason" placeholder="Reasons Of Loan" class="form-control" value="" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label> nature of the business:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="bussiness_nature" placeholder=" nature of the business" class="form-control" value="" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Loan Clearence Deadline:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="clearence_deadline" placeholder="Loan Clearence Deadline" class="form-control" value="" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Loan Applied Limitation:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="applied_limitation" placeholder="Loan Applied Limitation" class="form-control" required="true" value="" type="text" value="">
                            </div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Loan Approval Limitation:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="approval_limitation" placeholder="LoanApproval Limitation" class="form-control" required="true" value="" type="text" value="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 well">
                        <h4 class="bg-blue p-3">Guarantors Information</h4><br>

                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Name</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="name" placeholder="Full Name" class="form-control" required="true" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Date Of Birth:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input id="phoneNumber" name="date_of_birth" placeholder="Date Of Birth" class="form-control" required="true" type="date" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Educational Qualification</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="name" placeholder="Full Name" class="form-control" required="true" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Father Name</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="father_name" placeholder="Father Name" class="form-control" required="true" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Mohter Name</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="mother_name" placeholder="Mother Name" class="form-control" required="true" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Gender</label>
                            <div class="input-group">
                                <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                <select class="selectpicker form-control" name="gender">
                                    <option hidden>Select Your Gender</option>
                                    <option value="MAle">MAle</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Married Status</label>
                            <div class="input-group">
                                <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                <select class="selectpicker form-control" name="merried_status">
                                    <option hidden>Select Married Status</option>
                                    <option value="Married">Married</option>
                                    <option value="Un Married">Un Married</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Husband / Wife Name :</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="hus_wife_name" placeholder="Husband / Wife Name" class="form-control" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Monthly Income :</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="monthly_income" placeholder="Monthly Income" class="form-control" type="text" value=""></div>
                        </div>
                        <div class="form-group col-md-3">
                            <label>NID:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="nid" placeholder="NID" class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Phone Number:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="mobile" placeholder="Phone Number" class="form-control" type="text" value="">
                            </div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Relation With Applicant:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="relation_with_applicant" placeholder="Relation With Applicant" class="form-control" type="text" value=""></div>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Address:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <textarea name="g_address" placeholder="Address" class="form-control">

               </textarea></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Bank Loan Acceptance Amount :</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="g_loan_amount" placeholder="Bank Loan Acceptance Amount" class="form-control" type="text" value=""></div>
                        </div>
                    </div>

                    <div class="col-md-12 well">
                        <h4 class="bg-blue p-3">Branch Information</h4><br>

                        <div class="form-group col-md-3">
                            <label>Branch Name :</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="branch_name" placeholder="Branch Name" class="form-control" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Branch Address :</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="branch_addrss" placeholder="Branch Address" class="form-control" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Recommendation Branch :</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="recommendation_branch" placeholder="Recommendation Branch" class="form-control" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Branch Code :</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="branch_code" placeholder="Branch Code" class="form-control" value="" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Main Office Note No:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="main_office_not_no" placeholder="Main Office Note No" class="form-control" value="" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Main Office Note Date:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="main_office_not_date" placeholder="Main Office Note Date" class="form-control" value="" type="date" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Interest Percent:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="interest_percent" placeholder="Interest Percent" class="form-control" value="" type="number" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Loan Granted Instruction No:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="loan_granted_instruction_no" placeholder="Loan Granted Instruction No" class="form-control" value="" type="number" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Loan Granted Instruction Date:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="loan_granted_instruction_date" placeholder="Loan Granted Instruction Date" class="form-control" value="" type="number" value=""></div>
                        </div>


                        <div class="form-group col-md-3">
                            <label>Loan Granted Instruction Date:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="loan_granted_instruction_date" placeholder="Loan Granted Instruction Date" class="form-control" value="" type="number" value=""></div>
                        </div>




                    </div>


                </div>
                <!-- english part end -->
            </div>
            <div id="menu1" class="tab-pane fade">

                <!-- bangla part start -->
                <div class="col-md-12 well">
                    <h4 class="bg-blue">আবেদন কারীর বৃত্তান্ত</h4><br>

                    <div class="form-group col-md-3">
                        <label for="inputEmail4">নাম</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="name" placeholder="নাম" class="form-control" required="true" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="inputEmail4">জন্ম তারিখ:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input id="phoneNumber" name="date_of_birth" placeholder="Date Of Birth" class="form-control" required="true" type="date" value=""></div>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="inputEmail4">শিক্ষাগত যোগ্যতা</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="name" placeholder="Full Name" class="form-control" required="true" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="inputEmail4">প্রশিক্ষণ:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input name="training" placeholder="Training" class="form-control" required="true" type="text" value=""></div>
                    </div>


                    <div class="form-group col-md-3">
                        <label for="inputEmail4">পিতার নাম</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="father_name" placeholder="Father Name" class="form-control" required="true" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="inputEmail4">মাতার নাম</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="mother_name" placeholder="Mother Name" class="form-control" required="true" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="inputEmail4">লিঙ্গ</label>
                        <div class="input-group">
                            <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                            <select class="selectpicker form-control" name="gender">
                                <option hidden>আপনার লিঙ্গ নির্বাচন করুন </option>
                                <option value="পুরুষ">পুরুষ</option>
                                <option value="মহিলা">মহিলা</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-3">
                        <label>বৈবাহিক অবস্থা</label>
                        <div class="input-group">
                            <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                            <select class="selectpicker form-control" name="merried_status">
                                <option hidden>বৈবাহিক অবস্থা নির্বাচন করুন</option>
                                <option value="বিবাহিত">বিবাহিত</option>
                                <option value="অবিবাহিত">অবিবাহিত</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>স্বামী /স্ত্রীর নাম :</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="hus_wife_name" placeholder="স্বামী /স্ত্রীর নাম " class="form-control" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-3">
                        <label>অন্যান্য উৎস হতে মাসিক আয় :</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="income_other_source" placeholder="অন্যান্য উৎস হতে মাসিক আয়" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>এনআইডি:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="nid" placeholder="এনআইডি" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>মোবাইল:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="mobile" placeholder="মোবাইল" class="form-control" type="text" value=""></div>
                    </div>
                </div>
                <div class="col-md-12 well">
                    <h4 class="bg-blue p-3">বর্তমান ঠিকানা</h4><br>
                    <div class="form-group col-md-2">
                        <label>গ্রাম:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="village" placeholder="গ্রাম" class="form-control" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-2">
                        <label>বাড়ি /রাস্তা নং:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="road_no" placeholder="বাড়ি /রাস্তা নং" class="form-control" type="text" value="">
                        </div>
                    </div>

                    <div class="form-group col-md-2">
                        <label>ডাকঘর:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="post_office" placeholder="ডাকঘর" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-2">
                        <label>উনিয়ন:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="union" placeholder="উনিয়ন" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-2">
                        <label>উপজেলা:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="upozilla" placeholder="উপজেলা" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-2">
                        <label>জেলা:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="zilla" placeholder="জেলা" class="form-control" type="text" value=""></div>
                    </div>
                </div>

                <div class="col-md-12 well">
                    <h4 class="bg-blue p-3">স্থায়ী ঠিকানা</h4><br>
                    <div class="form-group col-md-2">
                        <label>Village:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="p_village" placeholder="Village" class="form-control" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-2">
                        <label>বাড়ি /রাস্তা নং:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="p_road_no" placeholder="বাড়ি /রাস্তা নং" class="form-control" type="text" value="">
                        </div>
                    </div>

                    <div class="form-group col-md-2">
                        <label>ডাকঘর:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="p_post_office" placeholder="ডাকঘর" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-2">
                        <label>উনিয়ন:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="p_union" placeholder="উনিয়ন" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-2">
                        <label>উপজেলা:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="p_upozilla" placeholder="উপজেলা" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-2">
                        <label>জেলা:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="p_zilla" placeholder="জেলা" class="form-control" type="text" value=""></div>
                    </div>
                </div>

                <div class="col-md-12 well">
                    <h4 class="bg-blue p-3">ব্যবসায় প্রতিষ্ঠানের বৃত্তান্ত</h4><br>

                    <div class="form-group col-md-3">
                        <label>প্রতিষ্ঠানের নাম:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="institute_name" placeholder="প্রতিষ্ঠানের নাম" class="form-control" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-3">
                        <label>ব্যবসায়ের ধরন:</label>
                        <div class="input-group">
                            <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                            <select class="selectpicker form-control" name="type" required="true" id="select_type">
                                <option value="" hidden>ব্যবসায়ের ধরন</option>
                                <option value="এক্মালিকানা">এক্মালিকানা</option>
                                <option value="অংশীদার">অংশীদার </option>
                                <option value="যৌথ মূলধনি">যৌথ মূলধনি </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>ট্রেড লাইসেন্স:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="trade_licence" placeholder="ট্রেড লাইসেন্স" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>বিনিয়োগক্রিত মূলধন:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="Invested_capital" placeholder="বিনিয়োগক্রিত মূলধন" class="form-control" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-3">
                        <label>ব্যবসায়ের শুরুর তারিখ:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="start_date" placeholder="ব্যবসায়ের শুরুর তারিখ" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>ব্যাংক হিসাবের নাম ও নাম্বার :</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="bank_account" placeholder="ব্যাংক হিসাবের নাম ও নাম্বার " class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>প্রতিষ্ঠানের বার্ষিক আয়:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="annual_income" placeholder="প্রতিষ্ঠানের বার্ষিক আয়" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>প্রতিষ্ঠানের বার্ষিক বিক্রয় :</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="annual_income" placeholder="প্রতিষ্ঠানের বার্ষিক বিক্রয় " class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>প্রতিষ্ঠানের বার্ষিক খরচ:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="annual_income" placeholder="প্রতিষ্ঠানের বার্ষিক খরচ" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>প্রতিষ্ঠানের নিয়োজিত জনবলের সংখ্যা :</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="workers_no" placeholder="প্রতিষ্ঠানের নিয়োজিত জনবলের সংখ্যা " class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>প্রতিষ্ঠানের স্থায়ী মূলধন:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="parmanent_resource" placeholder="প্রতিষ্ঠানের স্থায়ী মূলধন" class="form-control" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-3">
                        <label>টিন():</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="tax_identification_number" placeholder="টিন()" class="form-control" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-2">
                        <label>গ্রাম:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="b_village" placeholder="গ্রাম" class="form-control" type="text" value=""></div>
                    </div>

                    <div class="form-group col-md-2">
                        <label>বাড়ি /রাস্তা নং:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="b_road_no" placeholder="বাড়ি /রাস্তা নং" class="form-control" type="text" value="">
                        </div>
                    </div>

                    <div class="form-group col-md-2">
                        <label>ডাকঘর:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="b_post_office" placeholder="ডাকঘর" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-2">
                        <label>উনিয়ন:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="b_union" placeholder="উনিয়ন" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-2">
                        <label>উপজেলা:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="b_upozilla" placeholder="উপজেলা" class="form-control" type="text" value=""></div>
                    </div>
                    <div class="form-group col-md-2">
                        <label>জেলা:</label>
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="b_zilla" placeholder="জেলা" class="form-control" type="text" value=""></div>
                    </div>


                    <div class="col-md-12 well">
                        <h4 class="bg-blue p-3">মালিকানাধীন অন্যান্ন প্রতিষ্ঠানের তথ্য</h4><br>
                        <div class="form-group col-md-3">
                            <label> প্রতিষ্ঠানের নাম:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="o_institute_name" placeholder=" প্রতিষ্ঠানের নাম" class="form-control" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label> প্রতিষ্ঠানের ঠিকানা:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <textarea name="o_institue_addtess" placeholder="প্রতিষ্ঠানের ঠিকানা" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>ব্যবসায়ের ধরন:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="o_institute_type" placeholder="ব্যবসায়ের ধরন" class="form-control" type="text" value=""></div>
                        </div>
                        <div class="form-group col-md-3">
                            <label>প্রতিষ্ঠানের ইমেইল :</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="o_institute_email" placeholder="প্রতিষ্ঠানের ইমেইল " class="form-control" type="email" value=""></div>
                        </div>
                    </div>

                    <div class="col-md-12 well">
                        <h4 class="bg-blue p-3">ঋণের তথ্য</h4><br>
                        <div class="form-group col-md-3">
                            <label> ঋণের ধরন:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="loan_type" placeholder=" ঋণের ধরন" class="form-control" value="" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>ঋণের উদ্দেশ্য :</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="loan_reason" placeholder="ঋণের উদ্দেশ্য " class="form-control" value="" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>ব্যবসায়ের প্রকৃতি :</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="bussiness_nature" placeholder="ব্যবসায়ের প্রকৃতি " class="form-control" value="" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>ঋণের মেয়াদ:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="clearence_deadline" placeholder="ঋণের মেয়াদ" class="form-control" value="" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>আবেদনকৃত ঋণের পরিমান:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="applied_limitation" placeholder="আবেদনকৃত ঋণের পরিমান" class="form-control" required="true" value="" type="text" value="">
                            </div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>মঞ্জুরকৃত ঋণের পরিমান:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="approval_limitation" placeholder="মঞ্জুরকৃত ঋণের পরিমান" class="form-control" required="true" value="" type="text" value="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 well">
                        <h4 class="bg-blue p-3">জামীনদাতার তথ্য</h4><br>

                        <div class="form-group col-md-3">
                            <label for="inputEmail4">নাম </label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="name" placeholder="নাম " class="form-control" required="true" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="inputEmail4">জন্ম তারিখ:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input id="phoneNumber" name="date_of_birth" class="form-control" required="true" type="date" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="inputEmail4">শিক্ষাগত যোগ্যতা</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="name" placeholder="শিক্ষাগত যোগ্যতা" class="form-control" required="true" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="inputEmail4">পিতার নাম</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="father_name" placeholder="Father নাম" class="form-control" required="true" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="inputEmail4">মাতার নাম</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="mother_name" placeholder="Mother নাম" class="form-control" required="true" type="text" value=""></div>
                        </div>


                        <div class="form-group col-md-3">
                            <label for="inputEmail4">লিঙ্গ</label>
                            <div class="input-group">
                                <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                <select class="selectpicker form-control" name="gender">
                                    <option hidden>আপনার লিঙ্গ নির্বাচন করুন </option>
                                    <option value="পুরুষ">পুরুষ</option>
                                    <option value="মহিলা">মহিলা</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>বৈবাহিক অবস্থা</label>
                            <div class="input-group">
                                <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                <select class="selectpicker form-control" name="merried_status">
                                    <option hidden>বৈবাহিক অবস্থা নির্বাচন করুন</option>
                                    <option value="বিবাহিত">বিবাহিত</option>
                                    <option value="অবিবাহিত">অবিবাহিত</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label>স্বামী /স্ত্রীর নাম :</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="hus_wife_name" placeholder="স্বামী /স্ত্রীর নাম " class="form-control" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>মাসিক আয় :</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="monthly_income" placeholder="মাসিক আয়" class="form-control" type="text" value=""></div>
                        </div>
                        <div class="form-group col-md-3">
                            <label>এনআইডি:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="nid" placeholder="এনআইডি" class="form-control" type="text" value=""></div>
                        </div>
                        <div class="form-group col-md-3">
                            <label>মোবাইল:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="mobile" placeholder="মোবাইল" class="form-control" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>আবেদনকারীর সাথে সম্প্ররক:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="relation_with_applicant" placeholder="আবেদনকারীর সাথে সম্প্ররক" class="form-control" type="text" value=""></div>
                        </div>
                        <div class="form-group col-md-4">
                            <label>ঠীকানা:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <textarea name="g_address" placeholder="ঠীকানা" class="form-control">

               </textarea></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>ব্যাংক ঋণ গ্রহনের পরিমান:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="g_loan_amount" placeholder=ব্যাংক গ্রহনের পরিমান" class="form-control" type="text" value=""></div>
                        </div>
                    </div>

                    <div class="col-md-12 well">
                        <h4 class="bg-blue p-3">শাখার তথ্য</h4><br>

                        <div class="form-group col-md-3">
                            <label>শাখার নাম :</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="branch_name" placeholder="শাখার নাম" class="form-control" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>শাখার ঠিকানা :</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="branch_addrss" placeholder="শাখার ঠিকানা" class="form-control" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label> শাখার সুপারিশ :</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input name="recommendation_branch" placeholder=" শাখার সুপারিশ " class="form-control" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>শাখার সূত্র :</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="branch_code" placeholder="শাখার সূত্র " class="form-control" value="" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>প্রধান অফিসের নোট নং:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="main_office_not_no" placeholder="প্রধান অফিসের নোট নং" class="form-control" value="" type="text" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>প্রধান অফিসের নোট তারিখ:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="main_office_not_date" placeholder="Main Office Note Date" class="form-control" value="" type="date" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>সুদের হার:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="interest_percent" placeholder="সুদের হার" class="form-control" value="" type="number" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>ঋণ মঞ্জুরি নির্দেশ্না নং :</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="loan_granted_instruction_no" placeholder="ঋণ মঞ্জুরি নির্দেশ্না নং " class="form-control" value="" type="number" value=""></div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>ঋণ মঞ্জুরি নির্দেশ্না তারিখ:</label>
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="phoneNumber" name="loan_granted_instruction_date" placeholder="ঋণ মঞ্জুরি নির্দেশ্না তারিখ" class="form-control" value="" type="number" value=""></div>
                        </div>
                    </div>
                </div>
                <input type="submit" name="" class="btn btn-danger btn-block" value="Submit">
                <!-- bangla part end -->
            </div>
        </div>
    </form>
    <style type="text/css">
        .active {

            background: #ccc;
            padding: 5px;
            color: #000;
            font-size: 14px;
        }

        h4 {
            padding: 5px;
            text-align: center;
            display: block;
            width: 400px;
        }
    </style>
</section><!-- /.content -->


@endsection
