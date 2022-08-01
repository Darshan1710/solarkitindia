<link href="css/form.css" rel="stylesheet" type="text/css">
<script src="js/validation.js"></script>
<body class="zf-backgroundBg">
<!-- Change or deletion of the name attributes in the input tag will lead to empty values on record submission-->
<div class="row contact-form">
    <div class="container">
        <div class="">
            <form action='https://forms.zohopublic.com/mountingsolarkitprivatelimited/form/ContactUs/formperma/D6D9Pq66BTZ4aXGnxZetDs9jZCzw2348z7adLGRHF5Y/htmlRecords/submit'
                  name='form' method='POST'
                  onSubmit='javascript:document.charset="UTF-8"; return zf_ValidateAndSubmit();' accept-charset='UTF-8'
                  enctype='multipart/form-data' id='form'>
                <input type="hidden" name="zf_referrer_name" value="">
                <!-- To Track referrals , place the referrer name within the " " in the above hidden input field -->
                <input type="hidden" name="zf_redirect_url" value="">
                <!-- To redirect to a specific page after record submission , place the respective url within the " " in the above hidden input field -->
                <input type="hidden" name="zc_gad" value="">
                <!-- If GCLID is enabled in Zoho CRM Integration, click details of AdWords Ads will be pushed to Zoho CRM -->
                <div class="zf-templateWrapper">
                    <!---------template Header Starts Here---------->
                    <ul class="zf-tempHeadBdr">
                        <li class="zf-tempHeadContBdr">
                            <h2 class="zf-frmTitle">
                                <em>Contact Us</em>
                            </h2>
                            <p class="zf-frmDesc"></p>
                            <div class="zf-clearBoth"></div>
                        </li>
                    </ul>
                    <!---------template Header Ends Here---------->
                    <!---------template Container Starts Here---------->
                    <div class="zf-subContWrap zf-topAlign">
                        <ul>
                            <div class="row">
                                <div class="col-md-6">
                                    <!---------Single Line Starts Here---------->
                                    <li class="zf-tempFrmWrapper zf-small">
                                        <label class="zf-labelName"></label>
                                        <div class="zf-tempContDiv">
                                              <span>
                                                <input type="text" name="SingleLine" checktype="c1" value="" maxlength="255" fieldType=1
                                                       placeholder="   * Last name" class="form-control"/>
                                              </span>
                                              <p id="SingleLine_error" class="zf-errorMessage" style="display:none;">
                                                Invalid value</p>
                                        </div>
                                        <div class="zf-clearBoth"></div>
                                    </li>
                                    <!---------Single Line Ends Here---------->
                                </div>
                                <div class="col-md-6">
                                    <!---------Number Starts Here---------->
                                    <li class="zf-tempFrmWrapper zf-small">
                                        <label class="zf-labelName"></label>
                                        <div class="zf-tempContDiv">
                                              <span>
                                                <input type="text" name="Number" checktype="c2" value="" maxlength="18" placeholder="   * Mobile"
                                                       class="form-control"/>
                                              </span>
                                              <p id="Number_error" class="zf-errorMessage" style="display:none;">Invalid
                                                value</p>
                                        </div>
                                        <div class="zf-clearBoth"></div>
                                    </li>
                                    <!---------Number Ends Here---------->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <!---------Email Starts Here---------->
                                    <li class="zf-tempFrmWrapper zf-small">
                                        <label class="zf-labelName"></label>
                                        <div class="zf-tempContDiv">
                  <span>
                    <input fieldType=9 type="text" maxlength="255" name="Email" checktype="c5" value=""
                           placeholder="  * Email" class="form-control"/>
                  </span>
                                            <p id="Email_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
                                        </div>
                                        <div class="zf-clearBoth"></div>
                                    </li>
                                    <!---------Email Ends Here---------->
                                </div>
                                <div class="col-md-6">
                                    <!---------Multiple Line Starts Here---------->
                                    <li class="zf-tempFrmWrapper zf-small">
                                        <label class="zf-labelName"></label>
                                        <div class="zf-tempContDiv">
                  <span>
                    <textarea name="MultiLine" checktype="c1" maxlength="65535" placeholder="   Message"
                              class="form-control"></textarea>
                  </span>
                                            <p id="MultiLine_error" class="zf-errorMessage" style="display:none;">Invalid
                                                value</p>
                                        </div>
                                        <div class="zf-clearBoth"></div>
                                    </li>
                                    <!---------Multiple Line Ends Here---------->
                                </div>
                            </div>

                            
                            
                        </ul>
                    </div>
                    <!---------template Container Starts Here---------->
                    <ul>
                        <li class="zf-fmFooter">
                            <button class="zf-submitColor">Submit</button>
                        </li>
                    </ul>
                </div>
                <!-- 'zf-templateWrapper' ends -->
            </form>
        </div>
        <!-- 'zf-templateWidth' ends -->
    </div>
</div>
<script type="text/javascript">
    var zf_DateRegex = new RegExp("^(([0][1-9])|([1-2][0-9])|([3][0-1]))[-](Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec|JAN|FEB|MAR|APR|MAY|JUN|JUL|AUG|SEP|OCT|NOV|DEC)[-](?:(?:19|20)[0-9]{2})$");
    var zf_MandArray = ["Email"];
    var zf_FieldArray = ["SingleLine", "Number", "Email", "MultiLine"];
    var isSalesIQIntegrationEnabled = false;
    var salesIQFieldsArray = [];
</script>
</body>