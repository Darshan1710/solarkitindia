<?php include("connect.php"); 



/*if(isset($_GET["url"])) $url=$_GET["url"]; else $url="homepage";



 $vysledek = mysqli_query($db,"select * from page1 where url='$url' and zakazat='0'");

    $row = mysqli_fetch_assoc($vysledek);

  

 $title=$row["title"];

 $desc=$row["description"];

 $keyw=$row["keywords"];

 $nazev=$row["nazev"];

 $baner=$row["baner"];

 $text=$row["text"];

 */

 



 

 

 



include("header.php");

 

 //echo $url;

 //echo $baner;

?>

<style>

	.image-div img {

    position: relative;

    z-index: 1;

    margin-top: 17%;

    bottom: 10px;

    bottom: 35px;

    border-radius: 15px;

    width: 150%;

}



@media only screen and (max-width: 767px){

.image-div img {

    position: relative;

    z-index: 1;

    bottom: -10px;

    border-radius: 15px;

    width: 334px;

    margin-top: 0%;

}

}

.paragraph-div {

    background-color: #e6e8e7;

    border-radius: 25px;

}

.para {

    padding: 12% 15%;

}





.heading-color {

    color: #3e74b0;

    font-size: 48px;

    font-family: 'Silka-SemiBold';

    padding-bottom: 8%;

}

@media (max-width: 768px){

.heading-color {

    font-size: 20px;

}

}



.heading-2-color {

    color: #747d8c;

    font-size: 25px;

    text-align: justify;

    font-family: 'Silka-Regular';

}

@media only screen and (max-width: 767px){

.heading-2-color {

    font-size: 18px;

}

}



.container-fluid {

    width: 100%;

    padding-right: 15px;

    padding-left: 15px;

    margin-right: auto;

    margin-left: auto;

}



.content2 {

    background-color: #3e74b0;

}

.para-content {

    padding: 15px;

    padding-top: 6%;

    padding-bottom: 25px;

}



.content h1 {

    font-size: 40px;

    font-family: 'Silka-SemiBold';

}

@media (max-width: 768px)

.content h1 {

    font-size: 20px;

}

}



.content p {

    font-size: 25px;

    font-family: 'Silka-Regular';

    margin-top: 3%;

}

.para-justify {

    text-align: justify;

}

@media only screen and (max-width: 767px){

.content p {



    margin-right: 0%;

}

}



.image2-div img {

    position: relative;

    left: -15px;

    height: 410px;

}



@media only screen and (max-width: 767px){

.image2-div img {

    width: 100%;

    left: 0;

    height:auto;

    margin-top: 0%;

}

}



.img3-div img {

    width: 600px;

    margin-left: 48%;

    position: relative;

    top: 70px;

    z-index: 1;

    transform: skew( 

2deg);

    border-radius: 35px;

}



@media (max-width: 768px){

.img3-div img {

    width: 100%!important;

    margin-left: 0!important;

    position: relative;

    top: 20%;

    z-index: 1;

    transform: skew( 

2deg);

    border-radius: 35px;

}

}



.para2-content {

    background-color: #e6e8e7;

    border-radius: 8px;

}



.paracontent {

    padding: 5%;

}



.growing-head {

    color: #3e74b0;

    font-size: 40px;

    font-family: Silka-SemiBold;

}



@media only screen and (max-width: 767px){

.growing-head {

    font-size: 18px;

    margin-top: 6%;

}

}



.para-justify {

    text-align: justify;

}

.growing-para {

    font-size: 25px;

    font-family: 'Silka-Regular';

    margin-top: 3%;

}

@media only screen and (max-width: 767px){

.growing-para {

    font-size: 18px;

}

}



.row {

    display: -webkit-box;

    display: -ms-flexbox;

    display: flex;

    -ms-flex-wrap: wrap;

    flex-wrap: wrap;

    margin-right: -15px;

    margin-left: -15px;

}





.how-we-div {

    padding: 50px;

    padding-left: 10%;

}



@media only screen and (max-width: 767px){

.how-we-div {

    padding: 10px;

}

}

.how-we-div h1 {

    color: white;

}





.how-we-div p.para-justify {

    margin-bottom: 5%;

}



.how-we-div p {

    color: white;

    font-size: 25px;

    font-family: 'Silka-Regular';

}

@media only screen and (max-width: 767px){

.how-we-div p {

    font-size: 18px;

}

}





.hr1 {

    margin-left: 12%;

    margin-top: -7px;

    margin-bottom: 1%;

    background-color: #fff;

    border-color: #fff;

}



@media only screen and (max-width: 767px){

.hr1 {

    margin-left: 25%;

}

|



@media only screen and (max-width: 767px){}

.hr1, .hr2, .hr3 {

    margin-bottom: 5%;

}

}



.hr2 {

    margin-left: 15%;

    margin-top: -7px;

    margin-bottom: 1%;

    background-color: #fff;

    border-color: #fff;

}



@media only screen and (max-width: 767px){

.hr2 {

    margin-left: 32%;

}

}







.hr3 {

    margin-left: 20%;

    margin-top: -7px;

    margin-bottom: 1%;

    background-color: #fff;

    border-color: #fff;

}

@media only screen and (max-width: 767px){

.hr3 {

    margin-left: 43%;

}

}



@media only screen and (max-width: 767px){

.how-img {

    text-align: center;

}

}



.how-img img {

    width: 75%;

    position: relative;

    margin-top: 30%;

}

@media only screen and (max-width: 767px){

.how-img img {

    margin-bottom: 5%;

    margin-top: 0%;

}

}



element.style {

}

.pos-img img {

    width: 100%!important;

}

.pos-img h2 {

    text-align: center;

    position: relative;

    bottom: 100px;

    font-size: 26px;

    color: white;

}



@media only screen and (max-width: 767px){

.pos-img h2 {

    position: relative;

    bottom: 67px!important;

    font-size: 16px!important;

}

}



.outer {

    margin-left: -2%;

}

summary {

    color: black;

    padding: 16px;

    border-radius: 5px;

    cursor: pointer;

    position: relative;

    font-size: 20px;

    outline: none;

    margin: 20px 0px;

}

summary::marker {

    font-size: 0;

}



details>summary::before {

    position: absolute;

    content: "+";

    left: 0;

    color: #ff5445;

    font-weight: 900;

    margin-left: -3px;

}



.hr11 {

    margin-left: 15%;

    margin-top: -6px;

    height: 4px;

    background-color: #ff5445!important;

    border: #ff5445;

}



.hr22 {

    margin-left: 25%;

    margin-top: -6px;

    height: 4px;

    background-color: #ff5445!important;

    border: #ff5445;

}



.hr33 {

    margin-left: 27%;

    margin-top: -6px;

    height: 4px;

    background-color: #ff5445!important;

    border: #ff5445;

}

@media only screen and (max-width: 767px){

.hr11 {

    margin-left: 68%;

}

.hr22 {

    margin-left: 46%;

}

}



.faq-content {

   /*  background-color: #f1f1f1;*/ 

    padding: 3%;

    text-align: justify;

    border-radius: 5px;

    font-size: 18px;

    font-family: 'Silka-Regular';

}

.faq-content p{

color: rgba(0,0,0,0.87);

}



.form {

    background-color: #e6e8e7;

}



.form .container {

    padding: 0% 5%;

}



.desktop {

    display: block;

    font-family: 'Silka-SemiBold';

    font-size: 25px;

    margin-bottom: 2%;

}

.heading-form {

    padding-top: 20px;

    color: #3e74b0;

}



.mobile {

    display: none;

}

@media only screen and (max-width: 767px){

.desktop {

    display: none;

}

.mobile {

    display: block;

}

}



.font-weight-bold {

    padding-top: 10px;

    padding-bottom: 15px;

}

label {

    font-family: 'Silka-SemiBold';

    font-size: 18px;

    color: black;

    font-weight: 800;

}

.form-control {

    width: 100%;

    height: 35px;

    /* border-radius: 20px; */

    border-block-end-width: #95a5a6;

    border-bottom-left-radius: #95a5a6;

    border: #95a5a6;

    margin-top: 10px;

}

.form input{

    background: white!Important;

    border: 0!Important;

}



.form select{display:block;}



.custom-file-upload {

    display: inline-block;

    padding: 8px 10%;

    cursor: pointer;

    color: #80808096;

    margin-top: 10px;

    width: 39%;

    margin-bottom: 4px;

    font-family: 'Silka-Regular';

    font-size: 16px;

}



@media only screen and (max-width: 767px){

.custom-file-upload {

    border: 1px solid #ccc;

    display: inline-block;

    padding: 6px 10%;

    cursor: pointer;

    color: #cdd1cf;

    width: 100%;

}

}



.form [type="checkbox"].filled-in:checked+span:not(.lever):after {

    top: 0;

    width: 25px;

    height: 25px;

    border: 2px solid #0075ff!Important;

    background-color: #0075ff!Important;

    z-index: 0

}

.form [type="checkbox"].filled-in+span:not(.lever):after {

    top: 0;

    width: 25px;

    height: 25px;

    border: 1px solid #555!Important;

    background-color: white!Important;

    z-index: 0

}



.form-submit-button {

    background-color: #3e74b0;

    color: white;

    /* font-size: 14px; */

    border: #3e74b0;

    padding: 0 10%;

    font-size: 16px;

    border-radius: 2px;

    font-family: 'Silka-Regular';

    line-height: inherit;

    box-shadow:none;

}



.btn:hover,.btn-large:hover,.btn-small:hover {

    background-color: #3e74b0;

}



@media only screen and (max-width: 767px){

.form-submit-button {

    width: 100%;

}

}

</style>



<section>

         <div class="slideshow-container">

            <div class="mySlides fade" style="display: block;">

               <div class="numbertext"></div>

               <img src="assets/images/banner.png" style="width:100%">

               <div class="text"></div>

            </div>

         </div>

         <br>

         

      </section>

      <br>

<section>

         <div class="container">

            <div class="row">

               <div class="col m3 s12">

                  <div class="image-div">

                     <img src="assets/images/men1.png">

                  </div>

               </div>

               <div class="col m9 s12">

                  <div class="paragraph-div">

                     <div class="para">

                        <h1 class="heading-color">YOUR FIRST STEP TO <br>A BRIGHTER FUTURE</h1>

                        <h4 class="heading-2-color">Join us in Powering a Sustainable Future. Our company welcomes and supports a diverse range of innovative thinkers that share our values and are inspired by our mission.

                        </h4>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </section>

      <br>

      <section>

         <div class="container-fluid">

            <div class="row" style="overflow: hidden;">

               <div class="col m8 s12 content2">

                  <div class="content">

                     <div class="para-content">

                        <h1 style="color: white;">WORKING AT MOUNTING SOLOR KIT</h1>

                        <p style="color: white;" class="para-justify">Mounting Solar Kit is India's leading solar mounting structure manufacturer & supplier. We are an exciting work environment in one of the most important industries of the 21st century. Our success continues to be driven through our team experience and expertise that is supported by comprehensive project management principle during all stage of the design, production and quality assurance stages which helps us to deliver projects on time.</p>

                     </div>

                  </div>

               </div>

               <div class="col m4 s12">

                  <div class="image2-div">

                     <img src="assets/images/solor.png">

                  </div>

               </div>

            </div>

         </div>

      </section>

      <section>

         <div class="container">

            <div class="row">

               <div class="img3-div s12">

                  <img src="assets/images/men2.png">

               </div>

               <div class="col m12 s12">

                  <div class="para2-content">

                     <div class="paracontent">

                        <h1 class="growing-head">GROWING TOGETHER</h1>

                        <p class="growing-para para-justify">At Mounting Solar Kit, you will feel valued, appreciated and challenged, working side-by-side with some of the top minds in the industry. You will be regularly updated on the company's goals, progress and achievements. Mounting Solar Kit maintains a culture where all associates work together to provide our prestigious patrons with a remarkable range of products. We believe in employee engagement, collaboration, well-being and productivity for all generations and emerging workstyles. </p>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </section>

      <br>

      <section style="background-color: #3e74b0;">

         <div class="container-fluid">

            <div class="row">

               <div class="col m8 s12">

                  <div class="how-we-div">

                     <h1>Apply</h1>

                     <hr class="hr1">

                     <p class="para-justify">After reviewing the details of an open position, apply with your updated CV.</p>

                     <h1>Review</h1>

                     <hr class="hr2">

                     <p class="para-justify">Once your application is received and reviewed, our team will evaluate your qualifications. If your interest and experience is a potential match with the opening, a member of our team will contact you.</p>

                     <h1>Interview</h1>

                     <hr class="hr3">

                     <p class="para-justify">We value getting to know you and gaining insight into what drives you.</p>

                  </div>

               </div>

               <div class="col m4 s12">

                  <div class="how-img">

                     <img src="assets/images/we.png">

                  </div>

               </div>

            </div>

         </div>

      </section>

      <br>

      <section>

         <div class="container">

            <div class="container">

               <div class="row">

               <div class="col m12 s12">

                  <div class="pos-img">

                     <img src="assets/images/open.png">

                     <h2>OPEN POSITIONS</h2>

                  </div>

               </div>

               <div class="col m12 s12">

                  <div class="container">

                  <div class="outer">

                     <!-- <details open>

                        <summary>

                           Design Engineer

                           <hr class="hr11">

                        </summary>

                        <div class="faq-content">

                           <h2>Job brief</h2>

                           <br>

                           <p>We are looking for an experienced Design Engineer to join our innovative, fast-growing company.</p>

                           <br>

                           <p>You'll be a member of our brilliant engineering team, contributing to the design of new cutting-edge products. To be successful in this position, you should have hands-on experience using CAD software, with strong attention to detail and a creative flair. It’s also important that you have rock-solid project management skills to meet the daily demands of the role. </p>

                           <br>

                           <p>If you fit this description and you are enthusiastic about our company and its products, let’s meet.</p>

                           <br><br>

                           <h2>Job Description</h2>

                           <br>

                           <ul>

                              <li>Researching whether the design will work and be cost-effective.</li>

                              <li>Assessing the usability, environmental impact and safety of a design.</li>

                              <li>Preparing detailed layout of solar PV Modules using AutoCAD.</li>

                              <li>Preparing GA drawing of standard module mounting structure using AutoCAD.</li>

                              <li>Preparing BOM (Bill of Material) of module mounting structure.</li>

                              <li>Preparing Quotation of module mounting structure.</li>

                              <li>Preparing detailed manufacturing drawings of module mounting structure products.</li>

                              <li>3D modelling & designing of structure products using Solid Works.</li>

                              <li>Maintain existing engineering records and designs.</li>

                              <li>Providing technical support for module mounting structure installation.</li>

                              <li>Coordinate with other engineers, management, and the creative department.</li>

                           </ul>

                           <br><br>

                           <h2>Key skills</h2>

                           <br>

                           <ul>

                              <li>Strong maths and IT skills</li>

                              <li>A creative flair and design ability</li>

                              <li>Good visual and spatial awareness</li>

                              <li>Attention to detail</li>

                              <li>Problem solving</li>

                              <li>Written and oral communication</li>

                              <li>Commercial awareness</li>

                              <li>Excellent project management skills</li>

                              <li>Time management and organisational skills</li>

                           </ul>

                        </div>

                     </details> -->

                     <details>

                        <summary>

                           Sales Manager 

                           <hr class="hr11">

                        </summary>

                        <div class="faq-content">

                           <h2>Job Description:</h2>

                           <br>

                           <ul>

                              <li>Collate the estimates of existing regional market potential for rooftop/captive solar projects.</li>

                              <li>Prepare sales/revenue forecast and implement strategies to achieve sales, revenue, profit, and market-share objectives of the company and deliver on annual and quarterly sales/revenue/profit plans.</li>

                              <li>Analyse sales and industry data, market trends, and impact of changes in external and review sales plan as necessary.</li>

                              <li>Lead Generation through Exhibitions, Reneable energy Magazines, Social Media, Online EPC directory ETC</li>

                              <li>Updated and creating Accounts in Raynet</li>

                              <li>Cold calling to the customers</li>

                              <li>Customer visits</li>

                              <li>Site visits, if required installation, supports and training to the installers</li>

                              <li>Day to day follow ups</li>

                              <li>Presenting company in Campaign, conferences and training institutes</li>

                              <li>Generating revenew</li>

                              <li>Comititers study and market analysis</li>

                              <li>New products requirments from market</li>

                              <li>Preparation of marketing activities i.e. Exhibition participation, visiting cards, brochures, roll ups, Digital marketing</li>

                              <li>Organisation of training and events</li>

                           </ul>

                           <br><br>

                           <h2>Sales Manager Responsibilities:</h2>

                           <br>

                           <ul>

                              <li>Present, promote and sell products/services using solid arguments to existing and prospective customers</li>

                              <li>Perform cost-benefit and needs analysis of existing/potential customers to meet their needs</li>

                              <li>Establish, develop and maintain positive business and customer relationships</li>

                              <li>Reach out to customer leads through cold calling</li>

                              <li>Expedite the resolution of customer problems and complaints to maximize satisfaction</li>

                              <li>Achieve agreed upon sales targets and outcomes within schedule</li>

                              <li>Coordinate sales effort with team members and other departments</li>

                              <li><u>Analyze the territory</u>/market’s potential, track sales and status reports</li>

                              <li>Supply management with reports on customer needs, problems, interests, competitive activities, and potential for new products and services.</li>

                              <li>Keep abreast of best practices and promotional trends</li>

                              <li>Continuously improve through feedback </li>

                           </ul>

                           <br>

                           <h4><u>Requirements:</u></h4>

                           <br>

                           <ul>

                              <li><b>Qualification:</b>  M.B.A in Marketing, Bachelor's degree in engineering.</li>

                              <li><b>Experience:</b> 4 to 8 years of experience in product marketing or Product management    or related field (B2B software preferably). Design experience a plus.</li>

                              <li>At least 2 years of experience in Solar industries Marketing.</li>

                              <li><b>Ready to travel wherever the need arises.</b></li>

                           </ul>

                           <br>

                           <h4><u>Skills: </u></h4>

                           <br>

                           <ul>

                              <li>Networking and relationship management with client.</li>

                              <li>Negotiation Skill</li>

                              <li>Exceptional interpersonal, oral and written communication abilities (native English is a MUST)</li>

                              <li>Able to work in demanding environment.</li>

                              <li>Highly independent and self-motivated</li>

                           </ul>

                           <br>

                           <h4><u>Employment details:</u></h4>

                           <br>

                           <ul>

                              <li>Full time position</li>

                              <li>Challenging tasks that contribute to both professional and personal growth</li>

                              <li>International workplace with offices in many countries</li>

                              <li><b>Offered: 4 to 8 Lacs P.A.  (depend on last drown and final Interview)</b></li>

                           </ul>

                           <br>

                           <h4><u>About Company:</u></h4>

                           <br>

                           <p><i>Mounting Solar-kit Pvt Ltd (<a href="http://www.solar-kit.in/">http://www.solar-kit.in/</a>) is the subsidiary company of EKOTECHNIK Czech, s.r.o. based in Central Europe.</i></p>

                           <br>

                           <p><b>Mounting solar-kit Private limited engaged India for distribution of Solar product. Specially in innovative mounting Solar Structure. it has started in India since 2017.  </b></p>

                           <br>

                           <p><i>The company EKOTECHNIK was established in 1990. At first, we were engaged in installation and distribution of pipeline and sheet systems for customers from households to heavy industry. We implemented 660,000 m2 of repositories and underground structures and 396,000 m2 of roofs. We have been doing solar power since 2004. In 2006, we built one of the first large solar power plants in the Czech Republic, with a capacity of 693 kWp. In 2008-2012, we expanded abroad, where we were involved in the construction of photovoltaic power plants with a total installed capacity of 428 MWp. At present, the company is operating its own photovoltaic power plants with a capacity of 17 MWp. In addition, we have implemented installations of photovoltaic panels on roofs with a total area of 4 MWp. Since 2012, we have designed small ecological power sources for own consumption, which we see as more meaningful and a return to the natural use of renewable resources.</i>

                           </p>

                           <br>

                           <p> We have been building and servicing solar and hybrid power plants since 2006. We have customers not only in the Czech Republic but also in other countries (United Kingdom, Slovakia, Hungary, Romania, Spain, Turkey, Ukraine, Kazakhstan, Russia, India). We are a Czech company with a strong background, and we have our own team of professionals and technicians. Renewable resources are our mission</p>

                        </div>

                     </details>

                     <details>

                        <summary>

                           Telemarketing Executive

                           <hr class="hr22">

                        </summary>

                        <div class="faq-content">

                           <p><b>Sub:</b> Job Opening for <b>Telemarketing Executive</b> at Mounting Solar-kit India</p>

                           <br>

                           <p>Dear Candidate,</p>

                           <br>

                           <p>We are looking for a Telemarketing Executive in our Sales & marketing department to join our growing team. </p>

                           <br>

                           <br>

                           <p><b>For South India</b></p>

                           <br>

                           <p><b>Language</b> : Tamil,Hindi and English is Mandtory</p><br>

                           <p><b>Location</b> : Panvel Maharashtra</p><br>

                           <p><b>Number Of Openings</b> : 2</p><br><br>

                           <p><b>For North and West India</b></p>

                           <br>

                           <p><b>Language</b> : Hindi and English is Mandtory</p><br>

                           <p><b>Location</b> : Panvel Maharashtra</p><br>

                           <p><b>Number Of Openings</b> : 1</p><br>

                           <br>

                           <p><b>Your resume is shortlisted. </b></p>

                           <br>



                           <p>If you are interested then, kindly revert back with the following details</p>

                           <p>Current CTC</p>

                           <br>

                           <p>Expected CTC</p>

                           <br>

                           <p>Currently working with</p>

                           <br>

                           <p>Notice Period </p>

                           <br>

                           <h2>Job Description:</h2>

                           <br>

                           <p>You will be responsible for clearly communicating and creating awareness of our products in Solar Market. You will be working closely with Sales and marketing department.</p>

                           <br>

                           <h2><u>Roles & Responsibilities:</u></h2>

                           <ul>

                              <li>Continues calling to exiting and new customers. </li>

                              <li>Deliver promotional presentations to current or prospective customers.</li>

                              <li>Contact businesses or private individuals by telephone to solicit sales for products.</li>

                              <li>Contact current or potential customers to promote products.</li>

                              <li>Explain products, its Benefits, and answer questions from customers.</li>

                              <li>Explain technical product to customers.</li>

                              <li>Answer customer questions about Products.</li>

                              <li>Obtain customer information such as name, address / Update our database, business cards on Ray-net for products and customer list.</li>

                              <li>Maintain records of customer accounts.</li>

                              <li>Identify potential customers and Obtain names and telephone numbers of potential customers and share with sales team.</li>

                              <li>Promote our products to wide range of customers.</li>

                              <li>Customer follow-up, feedback - mails/phones (communication channel) </li>

                              <li>To persuade potential customers to purchase a product </li>

                              <li>Influences customers to buy or retain product by following a prepared script to give product reference information and products benefit.</li>

                              <li>Maintains database of daily, weekly and monthly calls, interested customer, enquiry, leads etc. and backing up data.</li>

                              <li>Checking performance of our company on online portals like India Mart and Justdial.</li>

                              <li>Share and communicate, customer queries, review and suggestion with Management time to time.</li>

                              <li>Contributes to team effort by accomplishing related results as needed.</li>

                              <li>Passing enquiry/ Lead to Sales Team.</li>

                           </ul>

                           <br><br>

                           <h2><u>Requirements:</u></h2>

                           <br>

                           <ul>

                              <li>Qualification:  Any Graduate.</li>

                              <li>Experience: 2 to 3 years of experience in Telemarketing.</li>

                              <li>Exceptional interpersonal, oral and written communication abilities (native English is a MUST)</li>

                              <li>Strategic thinker with attention to detail</li>

                              <li>Highly independent and self-motivated</li>

                              <li>Outgoing and energetic attitude. </li>

                              <li>Good listening skills. Practice active listening - don't interrupt customers, but engage them. </li>

                              <li>Multi-tasking ability</li>

                              <li>Excellent problem-solving capabilities</li>

                              <li>Computer experience.</li>

                           </ul>

                           <br>

                           <h4><u>Employment details:</u></h4>

                           <br>

                           <ul>

                              <li>Full time position</li>

                              <li>Challenging tasks that contribute to both professional and personal growth</li>

                              <li>International workplace with offices in many countries.</li>

                              <li>Offered: 2 to 3 Lacs P.A.  (depend on last drown and final Interview)</li>

                           </ul>

                           <br>

                           <h4><u>About Company:</u></h4>

                           <br>

                           <p><i>Mounting Solar-kit Pvt Ltd (<a href="http://www.solar-kit.in/">http://www.solar-kit.in/</a>) is the subsidiary company of EKOTECHNIK Czech, s.r.o. based in Central Europe.</i></p>

                           <br>

                           <p><b>Mounting solar-kit Private limited engaged India for distribution of Solar product. Specially in innovative mounting Solar Structure. it has started in India since 2017.  </b></p>

                           <br>

                           <p><i>The company EKOTECHNIK was established in 1990. At first, we were engaged in installation and distribution of pipeline and sheet systems for customers from households to heavy industry. We implemented 660,000 m2 of repositories and underground structures and 396,000 m2 of roofs. We have been doing solar power since 2004. In 2006, we built one of the first large solar power plants in the Czech Republic, with a capacity of 693 kWp. In 2008-2012, we expanded abroad, where we were involved in the construction of photovoltaic power plants with a total installed capacity of 428 MWp. At present, the company is operating its own photovoltaic power plants with a capacity of 17 MWp. In addition, we have implemented installations of photovoltaic panels on roofs with a total area of 4 MWp. Since 2012, we have designed small ecological power sources for own consumption, which we see as more meaningful and a return to the natural use of renewable resources.</i>

                           </p>

                           <br>

                           <p> We have been building and servicing solar and hybrid power plants since 2006. We have customers not only in the Czech Republic but also in other countries (United Kingdom, Slovakia, Hungary, Romania, Spain, Turkey, Ukraine, Kazakhstan, Russia, India). We are a Czech company with a strong background, and we have our own team of professionals and technicians. Renewable resources are our mission</p>

                        </div>

                     </details>

                     <details>

                        <summary>

                           Sales Support/ Back-office 

                           <hr class="hr33">

                        </summary>

                        <div class="faq-content">

                           <p><b>Sub:</b> Job Opening for <b>Sales Co-Ordinator </b> at Mounting Solar-kit India</p>

                           <br>

                           <p>Dear Candidate,</p>

                           <br>

                           <p>We are looking for a <b>Sales Co-Ordinator</b> in our <b>Sales & marketing department</b> to join our growing team. </p>

                           <br>

                           <br>

                           <p><b>For South India</b></p>

                           <br>

                           <p><b>Language</b> : Tamil,Hindi and English is Mandtory</p><br>

                           <p><b>Location</b> : Panvel Maharashtra</p><br>

                           <p><b>Number Of Openings</b> : 1</p><br><br>

                           <p><b>For North and West India</b></p>

                           <br>

                           <p><b>Language</b> : Hindi and English is Mandtory</p><br>

                           <p><b>Location</b> : Panvel Maharashtra</p><br>

                           <p><b>Number Of Openings</b> : 1</p><br>

                           <br>

                           <p><b>Your resume is shortlisted.</b> </p>

                           <br>

                           <br>

                           <p>If you are interested then, kindly revert back with the following details</p>

                           <br>

                           <p><b>Current CTC</b></p>

                           <br>

                           <p><b>Expected CTC</b></p>

                           <br>

                           <p><b>Currently working with</b></p>

                           <br>

                           <p><b>Notice Period</b> </p>

                           <br>

                           <p>You are the person who will organize sales and marketing activities, as well as develop an effective sales filing system. The Sales Coordinator will work directly with team management to ensure that all the administrative and support functions of the sales department are operating effectively, and that active client files are available to the sales group. </p>

                           <br>

                           <p>You will be the single point coordinator between sales persons and management and backend team. </p>

                           <br>

                           <p>The goal is to facilitate the Sales team’s activities so as to maximize their performance and the solid and long-lasting development of the company.</p>

                           <br>

                           <p><u><b>Roles & Responsibilities:</b></u></p>

                           <ul>

                              <li>Coordinate sales team by managing schedules, filing important documents and communicating relevant information</li>

                              <li>Preparing Sales Invoice.</li>

                              <li>Compile sales activities by coordinating with Purchase , Technical , Warehouse and logistics departments.</li>

                              <li>Collection and recordkeeping of important customer details like bank details and all. </li>

                              <li>Arranging and follow up with logistics till material reach to customer end. </li>

                              <li>Ensure the adequacy of sales-related equipment or material.</li>

                              <li>Updating sales data in required software.</li>

                              <li>Store and sort financial and non-financial data in electronic form and present reports.</li>

                              <li>Respond to complaints from customers and give after-sales support when requested.</li>

                              <li>Handle the processing of all orders with accuracy and timeliness.</li>

                              <li>Inform clients of unforeseen delays or problems.</li>

                              <li>Monitor the team’s progress, identify shortcomings and propose improvements.</li>

                              <li>Assist in the preparation and organizing of promotional material or events.</li>

                              <li>Ensure adherence to laws and policies. </li>

                              

                           </ul>

                           

                           <br>

                           <h4><u>Requirements:</u></h4>

                           <br>

                           <ul>

                              <li><b>Qualification : </b>Any Graduate.</li>

                              <li><b>Experience : </b> 3 to 5 years of experience as a Sales Co-Ordinator in Manufacturing Industries.</li>

                              <li><b>Industries Knowledge/Experience: </b>Steel and Metal (Solar Industries is + Point)</li>

                              <li>Good computer skills (MS Office)</li>

                              <li>Excellent verbal and written communication skills </li>

                              <li>Proficiency in English</li>

                              <li>Well-organized and responsible with an aptitude in problem-solving</li>

                              <li>A team player with high level of dedication</li>

                              <li>Highly independent and self-motivated</li>

                              <li>Outgoing and energetic attitude. </li>

                              <li>Good listening skills. Practice active listening - don't interrupt customers, but engage them</li>

                              <li>Multi-tasking ability. </li>

                           </ul>



                           <br>

                           <h4><u>Employment details:</u></h4>

                           <br>

                           <ul>

                              <li>Full time position</li>

                              <li>Challenging tasks that contribute to both professional and personal growth</li>

                              <li>International workplace with offices in many countries</li>

                              <li><b>Offered: 3 to 5 Lacs P.A.  (depend on last drown and final Interview)</b></li>

                           </ul>

                           <br>

                           <h4><u>About Company:</u></h4>

                           <br>

                           <p><i>Mounting Solar-kit Pvt Ltd (<a href="http://www.solar-kit.in/">http://www.solar-kit.in/</a>) is the subsidiary company of EKOTECHNIK Czech, s.r.o. based in Central Europe.</i></p>

                           <br>

                           <p><b>Mounting solar-kit Private limited engaged India for distribution of Solar product. Specially in innovative mounting Solar Structure. it has started in India since 2017.  </b></p>

                           <br>

                           <p><i>The company EKOTECHNIK was established in 1990. At first, we were engaged in installation and distribution of pipeline and sheet systems for customers from households to heavy industry. We implemented 660,000 m2 of repositories and underground structures and 396,000 m2 of roofs. We have been doing solar power since 2004. In 2006, we built one of the first large solar power plants in the Czech Republic, with a capacity of 693 kWp. In 2008-2012, we expanded abroad, where we were involved in the construction of photovoltaic power plants with a total installed capacity of 428 MWp. At present, the company is operating its own photovoltaic power plants with a capacity of 17 MWp. In addition, we have implemented installations of photovoltaic panels on roofs with a total area of 4 MWp. Since 2012, we have designed small ecological power sources for own consumption, which we see as more meaningful and a return to the natural use of renewable resources.</i>

                           </p>

                           <br>

                           <p> We have been building and servicing solar and hybrid power plants since 2006. We have customers not only in the Czech Republic but also in other countries (United Kingdom, Slovakia, Hungary, Romania, Spain, Turkey, Ukraine, Kazakhstan, Russia, India). We are a Czech company with a strong background, and we have our own team of professionals and technicians. Renewable resources are our mission</p>

                        </div>

                     </details>

                  </div>

                  </div>

               </div>

               </div>

            </div>

         </div>

      </section>

      <br>

      <section class="form">

         <div class="container">

            <h3 class="heading-form desktop">If open position does not match with your profile <br>then please apply here!</h3>

            <h3 class="heading-form mobile">If open position does not match with your profile then please apply here!</h3>

            <form>

               <div class="row">

                  <div class="col m6 s12">

                     <div class="form-group font-weight-bold">

                        <label >Name*</label>

                        <input type="text" name="Name" class="form-control" >

                        <span style="

                           font-size: 12px;color: #696c6b;

                           ">First Name</span>

                     </div>

                  </div>

                  <div class="col m6 s12 last_name">

                     <div class="form-group font-weight-bold">

                        <label >&nbsp;</label>

                        <input type="text" name="Name" class="form-control" >

                        <span style="

                           font-size: 12px;color: #696c6b;

                           ">Last Name</span>

                     </div>

                  </div>

                  <div class="col m6 s12">

                     <div class="form-group font-weight-bold">

                        <label >Email*</label>

                        <input type="text" name="Name" class="form-control" >

                     </div>

                  </div>

                  <div class="col m6 s12">

                     <div class="form-group font-weight-bold">

                        <label >Contact Number*</label>

                        <input type="text" name="Name" class="form-control" >

                     </div>

                  </div>

                  <div class="col m6 s12">

                     <div class="form-group font-weight-bold " style="display: grid;">

                        <label for="Field">Field of Interest* </label>

                        <select name="Field" id="Field" style="height: 35px;

                           margin-top: 10px;border: none;">

                           <option value="Engineering">Engineering</option>

                           <option value="Sales & Marketing">Sales & Marketing</option>

                           <option value="Finance/Accounting">Finance/Accounting</option>

                           <option value="Human Resource">Human Resource</option>

                           <option value="Manufacturing">Manufacturing</option>

                           <option value="Operations">Operations</option>

                           <option value="Maintenance">Maintenance</option>

                        </select>

                     </div>

                  </div>

                  <div class="col m6 s12">

                     <div class="form-group font-weight-bold" style="display: grid;">

                        <label>Attached CV*</label>

                        

                        <label for="file-upload" class="custom-file-upload"  style="background-color: white;">

                             Choose File

                        </label>

                        <input id="file-upload" style="display: none;" type="file"/>

                        

                        <span style="

                           font-size: 12px;

                           "><b>(PDF &amp; Word Format only)</b></span>

                     </div>

                  </div>

                 

                 

                 

                  <div class="col m6 s12">

                     <div class="form-group font-weight-bold check">

                        <label >Help us make the Talent Community better</label>

                      

    	<p>

      <label>

        <input type="checkbox"  name="Name" class="form-control checkbox2 filled-in" />

        <span style="font-size: 14px; color: #717774;font-weight: 100;letter-spacing: 0;">Yes, I'm willing to provide feedback </span>

      </label>

    </p>

    

                  </div>

                  </div>

                  

                  

                  <div class="col m6 s12 ">

                     <div class="form-group font-weight-bold">

                        <button type="submit" name="save" class="btn btn-primary font-weight-bold form-submit-button">Submit Form</button>

                     </div>

                  </div>

               </div>   </div> 

            </form>

         </div>

         <div class="extra-div" style="background-color: #ff5345;

            height: 15px;"></div>

      </section>



<?php include("footer.php");?>