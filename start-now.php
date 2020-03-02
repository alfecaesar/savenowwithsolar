<?php

$zipcode = (!empty($_GET['zipcode'])) ? $_GET['zipcode'] : '';
$success_stat = (!empty($_GET['success_stat'])) ? $_GET['success_stat'] : '';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Save Now With Solar</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Open+Sans:400,400i,600,700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="start_now">

    <div id="page">

        <div id="formarea" class="section">            
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <a class="navbar-brand" href="/savewithsolar/"><img src="assets/images/logo2.png" alt="Save Now With Solar"></a>
                    </div>
                    <div class="col-md-6 ml-auto mr-auto col-12">
                        <div class="survey-form-box">
                            <h3 class="text-center">START SAVING HERE</h3>
                            <p class="text-center">Enter your details below to see if you qualify:</p>

                            <?php if ($success_stat === 'true') { ?>
                                <div class="alert alert-success" role="alert">
                                    Thank you for filling out your information!
                                </div>
                            <?php } ?>

                            <form action="submit_survey.php" method="get" name="start_survery">
                                <div class="sn_form_1 sn_form">
                                    <div class="form-group radio-b">
                                        <label>
                                            <input type="radio" class="form-control" value="Yes" name="own_home" id="own_home">
                                            Yes, I own my own home.
                                        </label>
                                    </div>
                                    <div class="form-group radio-b">
                                        <label>
                                            <input type="radio" class="form-control" value="No" name="own_home" id="own_home">
                                            No, I rent my home.
                                        </label>
                                    </div>

                                    <div class="sn_form_1_Yes" style="display: none;">
                                        <div class="form-group">
                                            <label for="approx_shading_of_roof">Approximate shading of roof:</label>
                                            <select class="form-control" name="approx_shading_of_roof" id="approx_shading_of_roof">
                                                <option value="No Shade">No Shade</option>
                                                <option value="A Little Shade">A Little Shade</option>
                                                <option value="A Lot of Shade">A Lot of Shade</option>
                                                <option value="Uncertain">Uncertain</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="button" value="CONTINUE" class="form-control" onclick="gotoFrm(2)">
                                        </div>
                                    </div>

                                    <div class="sn_form_1_No" style="display: none;">
                                        <div class="alert alert-danger" role="alert">
                                            Sorry, to qualify you must own your home
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="sn_form_2 sn_form" style="display: none;">
                                    <div class="form-group">
                                        <label for="average_monthly_electric_bill">What is your average monthly electric bill?</label>
                                        <select class="form-control" name="average_monthly_electric_bill" id="average_monthly_electric_bill">
                                            <option>-Select Monthly Bill-</option>
                                            <option value="$0-50">$0-$50</option>
                                            <option value="$51-100">$51-$100</option>
                                            <option value="$101-$150" selected="">$101-$150</option>
                                            <option value="$151-$200">$151-$200</option>
                                            <option value="$201-$300">$201-$300</option>
                                            <option value="$301-$400">$301-$400</option>
                                            <option value=">$401-$500">$401-$500</option>
                                            <option value="$501-$600">$501-$600</option>
                                            <option value=">$601-$700">$601-$700</option>
                                            <option value="$701-$800">$701-$800</option>
                                            <option value="$801+">$801+</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name_electric_company">Name of Electric Utility Company</label>
                                        <input type="text" class="form-control" name="name_electric_company" id="name_electric_company">
                                    </div>
                                    <div class="form-group">
                                        <input type="button" value="CONTINUE" class="form-control" onclick="gotoFrm(3)">
                                    </div>
                                </div>

                                <div class="sn_form_3 sn_form"  style="display: none;">
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control" name="first_name" id="first_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control" name="last_name" id="last_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email_address">Email</label>
                                        <input type="text" class="form-control" name="email_address" id="email_address" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="street_address">Street Address</label>
                                        <input type="text" class="form-control" name="street_address" id="street_address" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" name="city" id="city" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="state">State</label>
                                        <select class="form-control" name="state" id="state" required>
                                            <option value="" selected="" hidden="hidden">Please Select</option>				  
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="DC">District Of Columbia</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="phone" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="SUBMIT" class="form-control">
                                    </div>
                                    <div class="form-group small-txt">
                                        <p>
                                            By clicking above, you authorize SAVENOWWITHSOLAR.COM and up to four <a href="#" data-toggle="modal" data-target="#partners" class="mandatory-link">Solar Companies</a> to call you and send you pre-recorded messages and text messages at the number you entered above, using an autodialer, with offers about their products or services, even if your phone number is on any national or state "Do Not Call" list. Message and data rates may apply. Your consent here is not based on a condition of purchase.
                                        </p>
                                    </div>
                                </div>
                                <input type="hidden" name="zipcode" id="zipcode" value="<?php echo $zipcode; ?>">
                            </form>
                            <div class="form-group">
                                <img src="assets/images/secure.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 
        </div>

        <div id="footerarea" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12 text-left">
                        <p>© 2020 All rights reserved.<br>
                            Any third party products, brands or trademarks listed above are the sole property of their respective owner.<br>
                            No affiliation or endorsement is intended or implied.<br>
                            <a href="#" data-toggle="modal" data-target="#terms">Terms of Use</a> | <a href="#" data-toggle="modal" data-target="#privacy">Privacy Policy</a>
                                </p>
                        <h6>IMPORTANT DISCLOSURES:</h6>
                        <p>The information presented on or through the Website is made availably solely for general information purposes.  We do not warrant the accuracy, completeness or usefulness of this information. Any reliance you place on such information is strictly at your own risk. We disclaim all liability and responsibility arising from any reliance placed on such materials by you or any other visitor to the Website, or by anyone who may be informed of any of its contents. </p>
                        <p> We are a lead generation company. We do not provide any solar energy services or products. We are not affiliated with any governmental organization or agency, nor do we provide any services or products related to government incentives for solar energy services or products. The informational forms provided on this site are not applications to use for any solar energy services or products. Rather, upon completing your inquiry, we may call or email you to match you with independent, third-party companies that may assist you with saving on your monthly electricity bill based on your specific circumstance and situation.  All energy consultation services are performed by independent, third-party companies which will determine your eligibility for energy savings. There is no guarantee that you will be eligible for any energy savings on your electrical bill.  We make no representations or warranties about any solar energy savings services or products that may or may not be offered by these independent, third-party companies.  Other fees and costs may apply.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/simpleParallax.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>