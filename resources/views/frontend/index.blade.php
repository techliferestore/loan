@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
   <!-- Header -->
   <header id="page_top" class="car_loan">
    <div class="container">
        <div class="row">
            <div id="form" class="col-sm-5">
                <div class="form-container">
                    <div   class="form-mockup" style="
                
                    padding: 10px;
                 
                    top: 15%;">


@if (session()->has('message'))
<div style="color:green ;">
    {{ session('message') }}
</div>
@endif
                        <h2>Apply For Loan Now</h2>
                                                <form action="{{route('frontend.appstore')}}" method="post">
                                                  @csrf
                                                  <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name" required="">
                          </div>
                          <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="E-mail" required="">
                          </div>
                          <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Phone" required="">
                          </div>
                          <div class="form-group">
                            <input type="text" id="autocomplete" name="date" class="form-control" placeholder="Type Your City Name" required/="">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" name="time" placeholder="Pin" required="">
                          </div>
                          <div class="form-group"> 
                            <input type="text" class="form-control" name="treatment" placeholder="Loan Amount" required=""> 
                          </div>
                          <div class="form-group"> 
                            <select name="doctor" class="form-control" required="">
                              <option value="Personal Loan">Personal Loan</option>                                    
                              <option value="Business Loan">Business Loan</option>
                              <option value="Car Loan">Car Loan</option>
                              <option value="Home Loan">Home Loan</option>                                    
                              <option value="Consumer Loan">Consumer Loan</option>
                          </select>
                                                  </div>

                                                  <label style="color: black; font-size:10px;"><input type="checkbox" required=""> By entering your personal details, you hereby authorize us and our service provider(s) to contact you and you agree to the <a href="#" target="_blank">
                                                    <span style="color: rgb(231, 20, 20);">Terms and Conditions</span></a>                   
                                <a href="privacy-policy.php">                                    <span style="color: rgb(14, 13, 13);">and </span> <span style="color:rgb(231, 20, 20);">Privacy Policy</a></span>.</label>
            
                          <button type="submit"  class="btn btn-primary">Apply Now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-7" style="text-align: left;">
                <div class="header-content">
                    <div class="header-content-inner">
                        <h1>Your Loan is only a few steps away</h1>
                        <p>Register online with your email id and mobile no. to get instant approval for upto Rs.25 lacs based on your eligibility with easy and convenient repayment option. We have a 100% online loan process with instant loan approval.

                        </p>
                                             <ul style="color: white;">
                            <strong>Our Features :</strong>
                            <li class="animate__animated animate__delay-1s animate__fadeInUp"><span>Check your offer in an instant</span></li>
                            <li class="animate__animated animate__delay-1s animate__fadeInUp"><span>Quick &amp; Easy</span></li>
                            <li class="animate__animated animate__delay-1s animate__fadeInUp"><span>100% Paperless</span></li>
                            <li class="animate__animated animate__delay-1s animate__fadeInUp"><span>Instant approval anytime</span></li>
                            <li class="animate__animated animate__delay-1s animate__fadeInUp"><span>No hidden charges</span></li>
                          </ul>

                          <p style="color: white;" class="animate__animated animate__delay-1s animate__fadeInUp">
                            <strong>Amount Tenure, Fees and Other Charges:</strong>
                            <small>Loan Amount: ₹25,000/- to ₹25,00,000/- ; Minimum Annual Percentage Rate (APR): 12.5%, Maximum APR: 41% ; Minimum repayment period: 6 months ; Maximum repayment period: 120 months ; Processing Fees: 0% to 5% depending on eligibility<br>
                            If customers opt for a Value-Added Service, the fee for the same shall be levied additionally.</small>
                          </p>
                         
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</header><!-- End Of Header -->
<!-- Section Features -->
<section  class="features">
    <div class="container">
        <div class="row" >
            <div class="col-lg-12 text-center">
                <h3>
                    
                    <strong>Enter Your Current Pin Code To Check if We Are Able To Serve You!</strong>
                </h3>
            </div>
           @livewire('pincode')                        
        </div>
    </div>
</section>
<!-- End Of Section Features -->
<!-- Section Features -->
<section id="features" class="features" >
    <div  class="container">
        <div  class="row">
            <div class="col-lg-12 text-left" style="margin-top: -100px;">
                <div  class="section-heading">
                    <h2 style="text-align: center;">About Our Company</h2>
                    <p class="text-muted">
                        We are a new-age Fin-Tech platform which aims to foster financial inclusion by leveraging technology to support borrowers with hassle-free loans. Our establishment is based in Bengaluru, focusing on providing online loans to those who are looking for a quick line of credit. We offer easy EMI options on our loans and repayments are in line with what you can repay comfortably. We strive to extend our users a neat experience to avail of credit without any hiccups. Our responsible lending norms ensure that you borrow only what you require for a given purpose. We believe in quick and effective service. So, we make sure to respond to every query ASAP.  </p>
                    <hr>
                </div>
            </div>
        </div>

        <div  class="row">
            <div class="col-lg-12 text-center"    style="    margin-bottom: -88px;">
                <div  class="section-heading">
                    <h2>Documents Required & Eligibility Criteria</h2><br>
                   
                </div>
            </div>
        </div>
        <div class="row">
          
            <div class="col-md-12" id="agent">
                <div class="container-fluid">
                  
                    <div class="row">
                       
                        <div class="col-md-4">
                            <div class="feature-item">
                                <i class="icon-check"></i>
                                <h3>Aadhar Card</h3>
                                <p class="text-muted">We just need both side scanned copy of your Aadhar Card as Residential Address Proof Indian Citizenship.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-item">
                                <i class="icon-clock"></i>
                                <h3>PAN Card</h3>
                                <p class="text-muted">Scanned copy of PAN must be presented so that we can verify your financial reports.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-item">
                                <i class="icon-user-follow"></i>
                                <h3>Indian Bank Account</h3>
                                <p class="text-muted">An Indian bank account details must be presented to us so that we can easily disburse your loan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      
                        <div class="col-md-4">
                            <div class="feature-item last-one">
                                <i class="icon-lock"></i>
                                <h3>18+ Years Age
                                </h3>
                                <p class="text-muted" style="    margin-bottom: 25px;">Applicant must be at least 18+ years old to apply for a loan with BF Loan Serv</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="feature-item">
                                <i class="icon-user-follow"></i>
                                <h3>Minimum Income - 10000 PM</h3>
                                <p class="text-muted">Any person can opt for our loan service having income greater than or equal to Rs. 10000 per month.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-item last-one">
                                <i class="icon-lock"></i>
                                <h3>Income Tax Return - For Business             </h3>
                                <p class="text-muted">Last 2 years income tax return with financial sheet is required for business professionals..</p>
                            </div>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Of Section Features -->

<!-- Section About And Counter -->

<!-- End Section Of About And Counter -->

<!-- Section EMI Calculator  -->
<section id="calculator" style="padding: 0px; padding-bottom: 15px;" class="loan-calculator">
    <div class="container">
        <div class="row  text-center">
            <div class="col-md-10 col-md-offset-1" style="margin-top: -50px;">
                <h2 class="section-heading">Loan Calculator</h2>
                <p class="text-muted">Find EMI Calculator Here.
                </p>
                <hr>
            </div>
        </div>
        <div class="row">

    
            <div class="col-md-12 text-center loan-details-box">
                <div class="row1 borderdiv" style="
                    text-align: center;
                display: inline-table;
                padding: 0 10px 10px;
                border: 3px solid #036;
                border-radius: 20px;
                color: #000;
                margin-top: 15px;
                background: #fff;
            }
            *, ::after, ::before {
                box-sizing: border-box;
            }
            *, ::after, ::before {
                box-sizing: border-box;
            }
            user agent stylesheet
            div {
                display: block;
            }">                     
                    <div id="ans"> 
                        <table  style="border-collapse: collapse;
                        border-spacing: 0;margin-left: 0%; margin-top: 10px; width: auto;"> 
                            <tbody ><tr> 
                                <td style="
                                font-size: 21px!important;
                                padding: 5px!important;
                                border-style: solid!important;
                                border-width: 0!important;
                                overflow: hidden!important;
                                word-break: normal!important;
                                font-weight: 700!important;
                                border: 1px solid #4267b2!important;">EMI Amount</td> 
                                <td id="total" style="color: green;
                                
    font-size: 21px!important;
    padding: 5px!important;
    border-style: solid!important;
    border-width: 0!important;
    overflow: hidden!important;
    word-break: normal!important;
    font-weight: 700!important;
    border: 1px solid #4267b2!important">XXXX/month</td> 
                            </tr> 
                            <tr> 
                                <td style="
                                font-size: 21px!important;
                                padding: 5px!important;
                                border-style: solid!important;
                                border-width: 0!important;
                                overflow: hidden!important;
                                word-break: normal!important;
                                font-weight: 700!important;
                                border: 1px solid #4267b2!important;">Total Payable With Interest</td> 
                                <td id="tbl_emi" style="color: green;
                                
    font-size: 21px!important;
    padding: 5px!important;
    border-style: solid!important;
    border-width: 0!important;
    overflow: hidden!important;
    word-break: normal!important;
    font-weight: 700!important;
    border: 1px solid #4267b2!important">XXXX</td> 
                            </tr> 
                            <tr> 
                                <td style="
                                font-size: 21px!important;
                                padding: 5px!important;
                                border-style: solid!important;
                                border-width: 0!important;
                                overflow: hidden!important;
                                word-break: normal!important;
                                font-weight: 700!important;
                                border: 1px solid #4267b2!important;">Total Interest</td> 
                                <td id="tbl_la" style="color: green;
                                font-size: 21px!important;
                                padding: 5px!important;
                                border-style: solid!important;
                                border-width: 0!important;
                                overflow: hidden!important;
                                word-break: normal!important;
                                font-weight: 700!important;
                                border: 1px solid #4267b2!important">XXXX</td> 
                            </tr> 
                        </tbody></table>
                    </div> 
                    <div class="row1"> 
                        <table> 
                            <tbody><tr> 
                                <td style="border-color: inherit;
                                border-style: solid;
                                border-width: 0;"> 
                                    <p style="    color: #000;
                                    font-size: 16px;
                                    margin-bottom: 0;">Loan Amount: </p> 
                                </td> 
                                <td class="textwebkitLeft">
                                    <input id="amount" type="number" style="
                                    width: 120px!important;
                                    margin-bottom: 4px;
                                    padding: 0 10px!important;
                                    border-radius: 5px!important;
                                    background-color: #fff;
    border: 1px solid grey;
    line-height: 40px;
    font-size: 24px;" onchange="Calculate()">                                </td>
                                    <td style="border-color: inherit;
                                    border-style: solid;
                                    border-width: 0;">
                                        <select name="times" style="    background-color: #fff;
                                        border: 1px solid grey;
                                        line-height: 40px;
                                        font-size: 24px;" class="animate__animated animate__delay-1s animate__fadeInUp"> 
                                            <option value="₹" selected="yes">₹</option> 
                                        </select>
                                    </td> 
                                </tr> 
                                <tr> 
                                    <td> 
                                        <p style="    color: #000;
                                        font-size: 16px;
                                        margin-bottom: 0;">Interest Rate:</p> 
                                    </td> 
                                    <td class="textwebkitLeft"> 
                                        <input id="rate" type="number" style="
                                        width: 120px!important;
                                        padding: 0 10px!important;
                                        margin-bottom: 4px;
                                        border-radius: 5px!important;
                                        background-color: #fff;
        border: 1px solid grey;
        line-height: 40px;
        font-size: 24px;"
                                        onchange="Calculate()">                                    </td>
                                    <td>
                                        <span>% Per Year</span>
                                    </td> 
                                </tr> 
                                <tr> 
                                    <td> 
                                        <p style="    color: #000;
                                        font-size: 16px;
                                        margin-bottom: 0;">Loan Tenure:</p> 
                                    </td> 
                                    <td style="width: 1px !important ;" class="textwebkitLeft">
                                        <input id="months" type="number"   style="
                                        width: 120px!important;
                                        margin-bottom: 4px;
                                        padding: 0 10px!important;
                                        border-radius: 5px!important;
                                        background-color: #fff;
        border: 1px solid grey;
        line-height: 40px;
        font-size: 24px;"   onchange="Calculate()">                                    </td>
                                    <td class="textwebkitAuto">
                                        <select name="time" id="perof1" style="    background-color: #fff;
                                        border: 1px solid grey;
                                        line-height: 40px;
                                        font-size: 24px;" class="animate__animated animate__delay-1s animate__fadeInUp">
                                            <option value="1" selected="yes"> Months </option> 
                                            <option value="2"> Years</option>
                                        </select>
                                    </td> 
                                </tr> 
                            </tbody></table> 
                        </div> 
                        <div class="row1"> 
                            <button id="cal" style="
                            font-family: inherit;
                            font-size: 20px;
                            padding: 0.5em 1em;
                            height: 45px;
                            color: #fff;
                            border: 1px solid #999;
                            border: transparent;
                            background-color: #4267b2;
                            text-decoration: none;
                            border-radius: 2px;">Calculate</button>
                            <button id="cle" style="
                            font-family: inherit;
                            font-size: 20px;
                            padding: 0.5em 1em;
                            height: 45px;
                            color: #fff;
                            border: 1px solid #999;
                            border: transparent;
                            background-color: #ca310b;
                            text-decoration: none;
                            border-radius: 2px;
                        " class="ctrl animate__animated animate__delay-1s animate__fadeInUp">Clear</button>  
                        </div>  
                        <p style="text-align: center; margin: 0px;" class="animate__animated animate__delay-1s animate__fadeInUp">*This is an approximate EMI calculation.<br>The actual processing fee and rate of interest may vary.</p>                         
                    </div>
                       
            
            </div>
          
            <script> function Calculate() {
      
                // Extracting value in the amount 
                // section in the variable
                const amount = document.querySelector("#amount").value;
              
                // Extracting value in the interest
                // rate section in the variable
                const rate = document.querySelector("#rate").value;
              
                // Extracting value in the months 
                // section in the variable
                const months = document.querySelector("#months").value;
              
                // Calculating interest per month
                const interest = (amount * (rate * 0.01)) / months;
                  
                // Calculating total payment
                const total = ((amount / months) + interest).toFixed(2);
                // Calculating total amount
                let z = amount+interest ;
                document.querySelector("#total")
                    .innerHTML = "EMI : (₹)" + total;

                    document.querySelector("#tbl_emi")
                    .innerHTML = "Interest : (₹)" + interest;

                    document.querySelector("#tbl_la")
                    .innerHTML = "Total Payable : (₹)" + z;
            }  </script>  
        </div>
    </div>
</section>
<!-- End Section EMI Calculator -->

<!-- Section Agents -->

<!-- End Section Agents -->

<!-- Section Testimonials -->
<section data-bs-version="5.1" class="about text-center" id="features">

    

    
    
    <div class="container">

        
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="card-wrapper">
                    <div class="card-box align-left">
                        <h2 class="section-heading" ><strong>Amount Tenure, Fees and Other Charges</strong></h4>
                        
                        <div class="mbr-section-btn"><a class="btn btn-primary display-4 animate__animated animate__delay-1s animate__fadeInUp" href="#home">Apply For A Loan Now</a></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 text-left">
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="mbr-iconfont mobi-mbri-setting-3 mobi-mbri"></span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title mbr-black mbr-fonts-style display-7 animate__animated animate__delay-1s animate__fadeInUp"><strong>Loan Amount</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4 animate__animated animate__delay-1s animate__fadeInUp">₹25,000/- to ₹25,00,000/-</h5>
                    </div>
                </div>
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="mbr-iconfont mobi-mbri-arrow-down mobi-mbri"></span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title mbr-black mbr-fonts-style display-7 animate__animated animate__delay-1s animate__fadeInUp"><strong>Minimum Annual Percentage Rate (APR)</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4 animate__animated animate__delay-1s animate__fadeInUp">12.5%</h5>
                    </div>
                </div>
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="mbr-iconfont mobi-mbri-arrow-up mobi-mbri"></span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title mbr-black mbr-fonts-style display-7 animate__animated animate__delay-1s animate__fadeInUp"><strong>Maximum Annual Percentage Rate (APR)</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4 animate__animated animate__delay-1s animate__fadeInUp">41%</h5>
                    </div>
                </div>
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="mbr-iconfont mobi-mbri-undo mobi-mbri"></span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title mbr-black mbr-fonts-style display-7 animate__animated animate__delay-1s animate__fadeInUp"><strong>Minimum repayment period</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4 animate__animated animate__delay-1s animate__fadeInUp">6 months</h5>
                    </div>
                </div>
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="mbr-iconfont mobi-mbri-redo mobi-mbri"></span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title mbr-black mbr-fonts-style display-7 animate__animated animate__delay-1s animate__fadeInUp"><strong>Maximum repayment period</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4 animate__animated animate__delay-1s animate__fadeInUp">120 months</h5>
                    </div>
                </div>
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="mbr-iconfont mobi-mbri-growing-chart mobi-mbri"></span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title mbr-black mbr-fonts-style display-7 animate__animated animate__delay-1s animate__fadeInUp"><strong>Processing Fees</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4 animate__animated animate__delay-1s animate__fadeInUp">0% to 5% depending on eligibility of customer</h5>
                    </div>
                </div>
                <p class="animate__animated animate__delay-1s animate__fadeInUp"><strong>Note</strong> : If customers opt for a Value-Added Service, the fee for the same shall be levied additionally.</p>
            </div>
            <p class="animate__animated animate__delay-1s animate__fadeInUp"><br><br><strong>Representative Example</strong>: For ₹25,000 borrowed for 12 months, with annual interest rate (APR) of 19%*, a user would pay : <br>Processing Fees = 0% ; Interest = ₹4750 ; Monthly EMI= ₹2479 ; Total Amount Repaid after a year = ₹29750
<br><br>The annual interest rates and processing fee will vary as per the risk profile of the customers.
The maximum Annual Interest Rate can go up to 41% (However, only a fraction of our customers get an interest rate higher than 30% per annum).</p>
        </div>
    </div>
</section>
<!-- End Of Section Testimonials -->

<!-- Section FAQ -->
<section id="faq" style="    margin-top: -75px;" class="faq">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-5">
                <i class="icon-question faq_icon"></i>
                <h1 class="faq_title">FAQs</h1>
               
                <a class="btn btn-primary page-scroll" href="#contact">Ask Question</a>
            </div>
            <div class="col-md-7 mar-20t">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">What is a Personal Loan?</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                A personal loan is a loan that does not require collateral or security and is offered with minimal documentation. You can use the funds from this loan for any legitimate financial need. Like any other loan, you must repay it accordance to the agreed terms with the lender.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">What is the minimum and maximum loan amount offered?</a>
                            </h4>
                        </div>
                        <div id="collapseTen" class="panel-collapse collapse">
                            <div class="panel-body">
                                The loan amount starts from minimum ₹ 25,000 to a maximum amount of ₹ 25,00,000 with bfloanserve.com.

 
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">What are the Pre-requisites of Personal Loan?</a>
                            </h4>
                        </div>
                        <div id="collapseEleven" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p class="mbr-fonts-style panel-text display-7">To apply for Personal Loan, customer:
                                    <br>1. should be an Indian citizen with minimum 18 years of age;
                                    <br>2. should have a valid e-mail address and a mobile number;
                                    <br>3. should have a valid residential address proof and a PAN card; and
                                    <br>4. personal Indian Bank account.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">If I do not have any of the documents from the proposed list of documents on the application?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                As per company policy, possessing at least one of the mentioned documents is mandatory to apply for our personal loan.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">What is the interest rate for the loan offered?</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                The interest rates offered are based on various factors such as loan amount, tenure, credit score, etc. and may vary for different customers.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Of Section FAQ -->


<section   >
    <div  class="container">
        <div  class="row">
            <div class="col-lg-12 text-left" style="margin-top: -100px;">
                <div  >
                    <h2 style="text-align: center;">Instant Loan Up to 25 Lakhs For All</h2>
                    <p class="text-muted">
                        We provide online personal loan to salaried &amp; self-employed individuals in India with just 2 documents whenever there is an unusual expense like child's marriage, renovation of your home or furnishing, children's higher education, family holiday, or any other dream to be turned into reality, make use of the online personal loans. Our instant personal loans are unsecure loans provided to individuals on the basis of their credit history. Personal loans can provide huge reassurance in times of adhoc financial crunch. It can be your 'all weather' friend to serve all your purposes and leave your savings untouched.</p>
                    </p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</section>




<section   >
    <div  class="container">
        <div  class="row">
            <div class="col-lg-12 text-left" style="margin-top: -100px;">
                <div >
                    <h3 ><strong>All Your Personal Loan Options In One Place</strong></h3>
                    
                    <p class="mbr-text mbr-fonts-style display-7 animate__animated animate__delay-1s animate__fadeInUp">We works to bring all personal loan options on the same platform. Get multipurpose instant loan without any guarantee &amp; collateral security for all your needs. Our personal loan makes it possible with a quick &amp; easy online process. On the basis of your needs, you can avail instant personal loan for the following:
    <br>
    <br><strong>Personal Loan for Travel</strong> : When you have travel on your mind, why delay it? A personal loan for travel can be helpful to bear your travel expenses. Visit your favorite place with an instant personal loan for vacations now. Don’t think longer, avail easy holiday loans for a comfortable vacation. Pack your bags and don’t wait till your bank account has sufficient balance. Instant travel loan will be disbursed into your account at the earliest possible hour.<br>
    <br><strong>Personal Loan for Medical Emergencies</strong> : Medical ailments can be exhaustive and pocket heavy. Whether it’s a surgery/operation or a regular doctor consultation, it can get expensive to manage. Every hospital and nursing home charges you a bomb, even for a one time visit. A medical loan from us can assist to stay cash ready at the helm of contingencies. An emergency personal loan can take care of all your medical emergencies.<br>
    <br><strong>Personal Loan for Marriage</strong> : Marriages can be a grand auspicious ceremony to be celebrated in an extraordinary way. However, the expenses can pitch hard. No one wants to settle for less, therefore, take a personal loan for wedding. In this growing market, all the commodities are getting expensive, each passing day. Managing finances well is a core of a successful wedding affair.<br>
    <br><strong>Personal Loan for Small Businesses</strong> : If you want a small business loan for your startup or any other business, then it’s important to meet defined eligibility criteria to have money at the earliest. Our personal loans have a customer centric approach. It’s quite easy to have quick cash as and when your business demands. Our personal loan for business come with a host of benefits and meet your unique business needs, no matter how big or small it is. This could be better than personal loan private finance! Take a short term personal loan and make your beginning a memorable one.<br>
    <br><strong>Personal loan for Home Renovation</strong> : Home is where you belong! Quickly turn your old construction into the dreamy house that you always wanted. A Home Improvement personal loan can help in your essential repairs, long due maintenance and classic interiors for a beautiful living. Apply for an Instant Personal Loan for Home Renovation.<br>
    <br><strong>Personal Loan for Education</strong> : Education is crucial for career building. Having the required education and skills to start a job is one basic step to a successful career. All personal loans for students provide the comfort of repayments once the course gets over.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section   >
    <div  class="container">
        <div  class="row">
            <div class="col-lg-12 text-left" style="margin-top: -100px;">
                <div >
                    <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2 animate__animated animate__delay-1s animate__fadeInUp"><strong>Our Loan Offered Across India</strong></h3>
                    
                    <p class="mbr-text mbr-fonts-style display-7 animate__animated animate__delay-1s animate__fadeInUp">So if you’re looking for a Personal Loan, online instant loan in top commercial cities of India? Here we are to help you.<br>
    <br><strong>Personal Loan in Delhi</strong>: Personal loan in Delhi are available up to 25 lakhs are picking up pace to meet all uninvited demands of the prospective borrower. With the considerable leap in the living standards, Delhi needs a sigh of relief.<br>
    <br><strong>Personal Loan in Gurgaon</strong>: Personal Loan in Gurgaon can make life simpler by meeting all your financial commitments for the upbeat city. You can apply online &amp; choose a tenure to your suitability to meet wedding &amp; transport needs, debt consolidation, set up business, medical treatment, and more.<br>
    <br><strong>Personal Loan in Pune</strong>: Pune has a mixed crowd of migrants with different financial needs. Instant personal loans are readily available via us to meet your day to day expenses, travel expenditure, high car maintenance, postgraduate courses etc.
    <br>Personal Loan in Chennai: Personal loans in Chennai are easily available at 0%-5% processing fees. This city has lot of tradesmen and new settlers who needs instant cash to meet financial emergencies.<br>
    <br><strong>Personal Loan in Hyderabad</strong>: Hyderabad being the IT hub, attracts a large population of aspirants looking to build a meaty career. A quick personal loan helps to fulfil opportunities and support goals like education, vehicle, travel &amp; tours, medical emergencies, etc.<br>
    <br><strong>Personal Loan in Mumbai</strong>: Personal loan in Mumbai eases the cash requirement in times of financial crunch. Purposes are borne out of needs, whether it’s a family wedding, higher education, long adventures, house improvement, etc. In a city like Mumbai the cost of living is high.<br>
    <br><strong>Personal Loan in Bangalore</strong>: In the Bangalore metro, personal loans are effectively sold. We offer Instant Personal loan to sponsor long delayed vacations, home renovations or buy expensive cars.<br>
    <br><strong>Personal Loan in Kolkata</strong>: Kolkata is the city of dreams which is why our Loan serves right. An international tour, buying a fancy car, gifting expensive gifts to your near &amp; dear ones, a big fat wedding, improvements to your house, educating your children, and what not!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content5 cid-tfrAmjWLHF" id="article3">
    
    <div class="container-fluid">
        <div class="row text-center">
           
        </div>
    </div>
</section>



<!-- Section Brand -->

<!-- End Of Section Brand -->

<!-- Section Social And NewsLetter -->

<!-- End Of Section Social And NewsLetter -->

<!-- Section Contact -->
<section id="contact">
    <h2 id="dev-snippet-title" class="text-center">Contact Us</h2>
    <div class="container mr_top_10">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-6">
                <form action="mailer.php" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required="">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required="">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputPhone" name="InputPhone" placeholder="Enter Phone Number" required="">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputZipCode" name="InputZipCode" placeholder="Enter Zip Code" required="">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputZipCode" name="InputZipCode" placeholder="City name" required="">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                        </div>
                    </div>
                
                <div class="form-group"> 
                  <input type="text" class="form-control" name="treatment" placeholder="Loan Amount" required=""> 
                </div>
                <div class="form-group"> 
                  <select name="doctor" class="form-control" required="">
                    <option value="Personal Loan">Personal Loan</option>                                    
                    <option value="Business Loan">Business Loan</option>
                    <option value="Car Loan">Car Loan</option>
                    <option value="Home Loan">Home Loan</option>                                    
                    <option value="Consumer Loan">Consumer Loan</option>
                </select>
                                        </div>

                                        <label style="color: white;"><input type="checkbox" required=""> By entering your personal details, you hereby authorize us and our service provider(s) to contact you and you agree to the <a href="#" target="_blank"><span style="color: rgb(240, 233, 233);">Terms and Conditions</span></a> and <a href="privacy-policy.php"><span style="color: white;">privacy policy</span></a>.</label>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline btn-xl page-scroll ">Apply Now</button>
                    </div>
                </form>
            </div>
           
        </div>
    </div>
</section>
<!-- End Of Section Contact -->

@endsection