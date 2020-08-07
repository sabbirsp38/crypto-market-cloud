<?php include 'inc/hader2.php'; ?>
 <!--Add Start Here-->      
   <div class="container CorsollArea" >

<div class='swipe' style='margin:10px;'>
  <ul id='slider1'>
    <li style='display:block'>
    <div class="customWidth">
      <a target="blank" href="https://nexo.io/">
        <img class="imgWidth" src="images/add1.jpg">
        <p style="line-height: 14px; padding: 5px; font-weight: bold; color: white; margin-top: 5px;">NEXO-Get an Instant Crypto-backed Loan up to 2M </p>
      </a>
    </div>
  </li>
    <li><div class="customWidth">
      <a target="blank" href="http://bitstation.co/">
        <img class="imgWidth" src="images/add2.jpg">
        <p style="line-height: 14px; padding: 5px; font-weight: bold; color: white; margin-top: 5px;">Bitstation The most advanced AL trading </p>
      </a>
    </div>
  </li>
    <li><div class="customWidth">
      <a target="blank" href="https://urunit.io/">
        <img class="imgWidth" src="images/add3.jpg">
        <p style="line-height: 14px; padding: 5px; font-weight: bold; color: white; margin-top: 5px;">U Run it. New era in gambling industry</p>
      </a>
    </div>
  </li>
    <li><div class="customWidth">
      <a target="blank" href="https://decenturion.com">
        <img class="imgWidth" src="images/add4.jpg">
        <p style="line-height: 14px; padding: 5px; font-weight: bold; color: white; margin-top: 5px;">Decenturion the decentralised nation</p>
      </a>
    </div>
  </li>
     <li><div class="customWidth">
      <a target="blank" href="http://smtecbd.com/">
        <img class="imgWidth" src="images/add.png">
        <p style="line-height: 14px; padding: 5px; font-weight: bold; color: white; margin-top: 5px;">IF YOU CAN IMAGINE IT WE CAN BUILD IT</p>
      </a>
    </div>
  </li>
    <li><div class="customWidth">
      <a target="blank" href="http://smtecbd.com/">
        <img class="imgWidth" src="images/add.png">
        <p style="line-height: 14px; padding: 5px; font-weight: bold; color: white; margin-top: 5px;">IF YOU CAN IMAGINE IT WE CAN BUILD IT</p>
      </a>
    </div>
  </li>
     <li><div class="customWidth">
      <a target="blank" href="http://smtecbd.com/">
        <img class="imgWidth" src="images/add.png">
        <p style="line-height: 14px; padding: 5px; font-weight: bold; color: white; margin-top: 5px;">IF YOU CAN IMAGINE IT WE CAN BUILD IT</p>
      </a>
    </div>
  </li>
    <li><div class="customWidth">
      <a target="blank" href="http://smtecbd.com/">
        <img class="imgWidth" src="images/add.png">
        <p style="line-height: 14px; padding: 5px; font-weight: bold; color: white; margin-top: 5px;">IF YOU CAN IMAGINE IT WE CAN BUILD IT</p>
      </a>
    </div>
  </li>
  </ul>
</div>




<br/>
<div id="pagenavi">
</div>
</div>

<script type="text/javascript">
console=window.console || {dir:new Function(),log:new Function()};
var active=0,
  as=document.getElementById('pagenavi').getElementsByTagName('a');
for(var i=0;i<as.length;i++){
  (function(){
    var j=i;
    as[i].onclick=function(){
      t4.slide(j);
      return false;
    }
  })();
}

var t11=new TouchSlider('slider1',{duration:2000, interval:100, direction:0, autoplay:true, align:'left', mousewheel:true, mouse:true, fullsize:false});
t4.on('before',function(m,n){
    as[m].className='';
  as[n].className='active';
})
</script>

   
 
<!--- End ADspace 2 ---->
          <div class="container-fluid">
            <div class="container">
                 <div class="FROMCOUSTOM">
                    <h1 id="FROMCOUSTOM">Publish Your ICO</h1>
                  </div>

                  <!-- From Start Here-->

                  <form data-provide="validation" data-disable="false" method="post" autocomplete="off" enctype="multipart/form-data" novalidate="true"  action="dbconnceticomambermp.php" >
                <div class="card">
                <center><header class="card-header">
                <h1 class="card-title">
                <strong>General ICO information</strong>
                </h1>
                </header></center>
                <div class="card-body">
                <div class="row">
                  <div class="col-md-6"> 
                    <div class="row"> 
                        <div class="col-12"> 
                          <div id="div_id_title" class="form-group"> 
                              <label for="id_title" class="col-form-label text-uppercase text-fader fw-500 fs-11 require">ICO Name
                              </label> 
                            <div class=""> 
                              <input type="text" name="title" maxlength="256" class="textinput textInput form-control" required="" id="id_title"> 
                              <div class="invalid-feedback">
                                
                              </div> 
                            </div> 
                          </div> 
                        </div>
                        <div class="col-4">
                            <div id="div_id_email" class="form-group"> 
                              <label for="id_email" class="col-form-label text-uppercase text-fader fw-500 fs-11 require">
                                     Contact E-mail
                               </label>
                               <div class="">

                                <div class="input-group"> 
                                    <div class="input-group-prepend"> 
                                    </div> 
                                    <input type="email" name="email" maxlength="254" class="emailinput form-control" required="" id="id_email"> 
                                  </div> 

                                  <div class="invalid-feedback">
                                    
                                  </div> 
                                  <small id="hint_id_email" class="form-text text-muted">We'll use this e-mail to contact you if some information needs clarification and inform you about your ICO status.</small> </div>
                            </div>
                        </div>
                         <div class="col-4">
                            <div id="div_id_email" class="form-group"> 
                              <label  class="col-form-label text-uppercase text-fader fw-500 fs-11 require">
                                     Status
                               </label>
                               <div class="">

                                <div class="input-group"> 
                                    <div class="input-group-prepend"> 
                                    </div> 
                                    <input type="text" name="status"  class="t form-control"  id="id_email"> 
                                  </div> 

                                  <div class="invalid-feedback">
                                    
                                  </div> 
                                  <small id="hint_id_email" class="form-text text-muted">For Example, It can be closed, pre-sell.</small> </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div id="div_id_email" class="form-group"> 
                              <label  class="col-form-label text-uppercase text-fader fw-500 fs-11 require">
                                     Company Tagline
                               </label>
                               <div class="">

                                <div class="input-group"> 
                                    <div class="input-group-prepend"> 
                                    </div> 
                                    <input type="text" name="company_tagline"  class="t form-control"  id=""> 
                                  </div> 

                                  <div class="invalid-feedback">
                                    
                                  </div> 
                                  </div>
                            </div>
                        </div>
                        <div class="col-12">
                             
                        </div>
                    </div>
                </div>
                <div class="col-md-6"> 
                  <div id="div_id_image" class="form-group"> 
                    <label for="id_image" class="col-form-label text-uppercase text-fader fw-500 fs-11"> ICO Logo</label>
                       <div class=""> 
                          <div class="dropify-wrapper">
                              <div class="dropify-loader">
                              </div>
                              <div class="dropify-errors-container"><ul></ul>
                              </div>
                                <input type="file" name="image" data-provide="dropify" data-allowed-file-extensions="png jpg jpeg JPG PNG JEPG" data-allowed-formats="square" class="clearablefileinput" id="id_image">
                                  <div class="dropify-preview">
                                    <span class="dropify-render"></span>
                                       <div class="dropify-infos">
                                           <div class="dropify-infos-inner">
                                              <p class="dropify-filename">
                                                 <span class="file-icon"></span> 
                                                   <span class="dropify-filename-inner"></span>
                                              </p>
                                              <p class="dropify-infos-message">Drag and drop or click to replace
                                              </p>
                                            </div>
                                        </div>
                                  </div>
                          </div> 
                          <div class="invalid-feedback"></div> 
                      </div> 
                  </div> 
                </div>
                <div class="col-md-6"> 
                  <div id="div_id_country" class="form-group"> 
                    <label for="id_country" class="col-form-label text-uppercase text-fader fw-500 fs-11"> Registration country
                     </label>
                       <div class=""> 
                          <select name="country" class="select form-control select2-hidden-accessible" id="id_country" tabindex="-1" aria-hidden="true" type="text"> 
                            <option value="" selected="">---------</option> 
                            <option value="Afghanistan">Afghanistan</option> 
                            <option value="Albania">Albania</option> 
                            <option value="Algeria">Algeria</option> 
                            <option value="American Samoa">American Samoa</option> 
                            <option value="Andorra">Andorra</option> 
                            <option value="Angola">Angola</option> 
                            <option value="Anguilla">Anguilla</option> 
                            <option value="Antarctica">Antarctica</option> 
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
                            <option value="Argentina">Argentina</option> 
                            <option value="Armenia">Armenia</option> 
                            <option value="Aruba">Aruba</option> 
                            <option value="Australia">Australia</option> 
                            <option value="Austria">Austria</option> 
                            <option value="Azerbaijan">Azerbaijan</option> 
                            <option value="Bahamas">Bahamas</option> 
                            <option value="Bahrain">Bahrain</option> 
                            <option value="Bangladesh">Bangladesh</option> 
                            <option value="Barbados">Barbados</option> 
                            <option value="Belarus">Belarus</option> 
                            <option value="Belgium">Belgium</option> 
                            <option value="Belize">Belize</option> 
                            <option value="Benin">Benin</option> 
                            <option value="Bermuda">Bermuda</option> 
                            <option value="Bhutan">Bhutan</option> 
                            <option value="Bolivia">Bolivia</option> 
                            <option value="Bonaire">Bonaire</option> 
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                            <option value="Botswana">Botswana</option> 
                            <option value="Bouvet Island">Bouvet Island</option> 
                            <option value="Brazil">Brazil</option> 
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                            <option value="Brunei Darussalam">Brunei Darussalam</option> 
                            <option value="Bulgaria">Bulgaria</option> 
                            <option value="Burkina">Burkina Faso</option> 
                            <option value="Burundi">Burundi</option> 
                            <option value="Cabo Verde">Cabo Verde</option> 
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option> 
                            <option value="Canada">Canada</option> 
                            <option value="Cayman Islands">Cayman Islands</option> 
                            <option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option> 
                            <option value="Chile">Chile</option> 
                            <option value="China">China</option> 
                            <option value="Christmas Island">Christmas Island</option> 
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                            <option value="Colombia">Colombia</option> 
                            <option value="Comoros">Comoros</option> 
                            <option value="Congo">Congo</option> 
                            <option value="Cook Islands">Cook Islands</option> 
                            <option value="Costa Rica">Costa Rica</option> 
                            <option value="Croatia">Croatia</option> 
                            <option value="Cuba">Cuba</option> 
                            <option value="Curaçao">Curaçao</option> 
                            <option value="Cyprus">Cyprus</option> 
                            <option value="Czech Republic">Czech Republic</option> 
                            <option value="Denmark">Denmark</option> 
                            <option value="Djibouti">Djibouti</option> 
                            <option value="Dominica">Dominica</option> 
                            <option value="Dominican Republic">Dominican Republic
                            </option> 
                            <option value="Ecuador">Ecuador</option> 
                            <option value="Egypt">Egypt</option> 
                            <option value="El Salvador">El Salvador</option> 
                            <option value="Equatorial">Equatorial Guinea</option> 
                            <option value="Eritrea">Eritrea</option> 
                            <option value="Estonia">Estonia</option> 
                            <option value="Ethiopia">Ethiopia</option> 
                            <option value="Falkland Islands">Falkland Islands</option> 
                            <option value="Faroe Islands">Faroe Islands</option> 
                            <option value="Fiji">Fiji</option> 
                            <option value="Finland">Finland</option> 
                            <option value="France">France</option> 
                            <option value="French Guiana">French Guiana</option> 
                            <option value="French Polynesia">French Polynesia</option> 
                            <option value="French Southern Territories">French Southern Territories</option> 
                            <option value="Gabon">Gabon</option> 
                            <option value="Gambia">Gambia</option> 
                            <option value="Georgia">Georgia</option> 
                            <option value="Germany">Germany</option> 
                            <option value="Ghana">Ghana</option> 
                            <option value="Gibraltar">Gibraltar</option> 
                            <option value="Greece">Greece</option> 
                            <option value="Greenland">Greenland</option> 
                            <option value="Grenada">Grenada</option> 
                            <option value="Guadeloupe">Guadeloupe</option> 
                            <option value="Guam">Guam</option> 
                            <option value="Guatemala">Guatemala</option> 
                            <option value="Guernsey">Guernsey</option> 
                            <option value="Guinea">Guinea</option> 
                            <option value="Guinea-Bissau">Guinea-Bissau</option> 
                            <option value="Guyana">Guyana</option> 
                            <option value="Haiti">Haiti</option> 
                            <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option> 
                            <option value="Holy See">Holy See</option> 
                            <option value="Honduras">Honduras</option> 
                            <option value="Hong Kong">Hong Kong</option> 
                            <option value="Hungary">Hungary</option> 
                            <option value="Iceland">Iceland</option> 
                            <option value="India">India</option> 
                            <option value="Indonesia">Indonesia</option> 
                            <option value="Indonesia">Indonesia</option> 
                            <option value="Iran">Iran</option> 
                            <option value="Iraq">Iraq</option> 
                            <option value="Ireland">Ireland</option> 
                            <option value="Isle of Man">Isle of Man</option> 
                            <option value="Israel">Israel</option> 
                            <option value="Italy">Italy</option> 
                            <option value="Ivory Coast">Ivory Coast</option> 
                            <option value="Jamaica">Jamaica</option> 
                            <option value="Japan">Japan</option> 
                            <option value="Jersey">Jersey</option> 
                            <option value="Jordan">Jordan</option>
                             <option value="Kazakhstan">Kazakhstan</option> 
                             <option value="Kenya">Kenya</option> 
                             <option value="Kiribati">Kiribati</option> 
                             <option value="Kuwait">Kuwait</option> 
                             <option value="Kyrgyzstan">Kyrgyzstan</option> 
                             <option value="Laos">Laos</option> 
                             <option value="Latvia">Latvia</option> 
                             <option value="Lebanon">Lebanon</option> 
                             <option value="Lesotho">Lesotho</option> 
                             <option value="Liberia">Liberia</option> 
                             <option value="Libya">Libya</option> 
                             <option value="Liechtenstein">Liechtenstein</option> 
                             <option value="Lithuania">Lithuania</option> 
                             <option value="Luxembourg">Luxembourg</option> 
                             <option value="Macao">Macao</option> 
                             <option value="Macedonia">Macedonia</option> 
                             <option value="Madagascar">Madagascar</option> 
                             <option value="Malawi">Malawi</option> 
                             <option value="Malaysia">Malaysia</option> 
                             <option value="Maldives">Maldives</option> 
                             <option value="Mali">Mali</option> 
                             <option value="Malta">Malta</option> 
                             <option value="Marshall Islands">Marshall Islands</option> 
                             <option value="Martinique">Martinique</option> 
                             <option value="Mauritania">Mauritania</option> 
                             <option value="Mauritius">Mauritius</option> 
                             <option value="Mayotte">Mayotte</option> 
                             <option value="Mexico">Mexico</option> 
                             <option value="Micronesia">Micronesia</option>
                             <option value="Moldova">Moldova</option>
                             <option value="Monaco">Monaco</option> 
                             <option value="Mongolia">Mongolia</option> 
                             <option value="Montenegro">Montenegro</option> 
                             <option value="Montserrat">Montserrat</option> 
                             <option value="Morocco">Morocco</option> 
                             <option value="Mozambique">Mozambique</option> 
                             <option value="Myanmar">Myanmar</option> 
                             <option value="Namibia">Namibia</option> 
                             <option value="Nauru">Nauru</option> 
                             <option value="Nepal">Nepal</option> 
                             <option value="Netherlands">Netherlands</option> 
                             <option value="New Caledonia">New Caledonia</option> 
                             <option value="New Zealand">New Zealand</option> 
                             <option value="Nicaragua">Nicaragua</option> 
                             <option value="Niger">Niger</option> 
                             <option value="Nigeria">Nigeria</option> 
                             <option value="Niue">Niue</option> 
                             <option value="Norfolk Island">Norfolk Island</option> 
                             <option value="Northern Mariana Islands">Northern Mariana Islands</option> <option value="North Korea">North Korea</option> 
                             <option value="Norway">Norway</option> 
                             <option value="Oman">Oman</option> 
                             <option value="Pakistan">Pakistan</option> 
                             <option value="Palau">Palau</option> 
                             <option value="Palestine, State of">Palestine, State of</option> 
                             <option value="Panama">Panama</option> 
                             <option value="Papua New Guinea">Papua New Guinea</option> 
                             <option value="Paraguay">Paraguay</option> 
                             <option value="Peru">Peru</option> 
                             <option value="Philippines">Philippines</option> 
                             <option value="Pitcairn">Pitcairn</option> 
                             <option value="Poland">Poland</option> 
                             <option value="Portugal">Portugal</option> 
                             <option value="Puerto Rico">Puerto Rico</option> 
                             <option value="Qatar">Qatar</option> 
                             <option value="Réunion">Réunion</option> 
                             <option value="Romania">Romania</option> 
                             <option value="Russia">Russia</option> 
                             <option value="Rwanda">Rwanda</option> 
                             <option value="Saint Barthélemy">Saint Barthélemy</option> 
                             <option value="Saint Helena">Saint Helena</option> 
                             <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                             <option value="Saint Lucia">Saint Lucia</option> 
                             <option value="Saint Martin">Saint Martin</option> 
                             <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                             <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option> 
                             <option value="Samoa">Samoa</option> 
                             <option value="San Marino">San Marino</option> 
                             <option value="Sao Tome and Principe">Sao Tome and Principe</option> <option value="Saudi Arabia">Saudi Arabia</option> 
                             <option value="Senegal">Senegal</option> 
                             <option value="Serbia">Serbia</option> 
                             <option value="Seychelles">Seychelles</option> 
                             <option value="Sierra Leone">Sierra Leone</option> 
                             <option value="Singapore">Singapore</option> 
                             <option value="Sint Maarten">Sint Maarten</option> 
                             <option value="Slovakia">Slovakia</option> 
                             <option value="Slovenia">Slovenia</option> 
                             <option value="Solomon Islands">Solomon Islands</option> 
                             <option value="Somalia">Somalia</option> 
                             <option value="South Africa">South Africa</option> 
                             <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option> 
                             <option value="South Korea">South Korea</option> 
                             <option value="South Sudan">South Sudan</option> 
                             <option value="Spain">Spain</option> 
                             <option value="Sri Lanka">Sri Lanka</option> 
                             <option value="Sudan">Sudan</option> 
                             <option value="Suriname">Suriname</option> 
                             <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                             <option value="Swaziland">Swaziland</option> 
                             <option value="Sweden">Sweden</option> 
                             <option value="Switzerland">Switzerland</option> 
                             <option value="Syria">Syria</option> 
                             <option value="Taiwan">Taiwan</option> 
                             <option value="Tajikistan">Tajikistan</option> 
                             <option value="Tanzania">Tanzania</option> 
                             <option value="Thailand">Thailand</option> 
                             <option value="Timor-Leste">Timor-Leste</option>
                              <option value="Togo">Togo</option> 
                             <option value="Tokelau">Tokelau</option> 
                             <option value="Tonga">Tonga</option> 
                             <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                             <option value="Tunisia">Tunisia</option> 
                             <option value="Turkey">Turkey</option>
                             <option value="Turkmenistan">Turkmenistan</option> 
                             <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                             <option value="Tuvalu">Tuvalu</option> 
                             <option value="Uganda">Uganda</option> 
                             <option value="Ukraine">Ukraine</option> 
                             <option value="United Arab Emirates">United Arab Emirates</option> 
                             <option value="United Kingdom">United Kingdom</option> 
                             <option value="United States of America">United States of America</option> 
                             <option value="Uruguay">Uruguay</option> 
                             <option value="Uzbekistan">Uzbekistan</option> 
                             <option value="Vanuatu">Vanuatu</option> 
                             <option value="Venezuela">Venezuela</option> 
                             <option value="Vietnam">Vietnam</option> 
                             <option value="Virgin Islands (British)">Virgin Islands (British)</option> 
                             <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option> 
                             <option value="Wallis and Futuna">Wallis and Futuna</option> 
                             <option value="Western Sahara">Western Sahara</option> 
                             <option value="Yemen">Yemen</option> 
                             <option value="Zambia">Zambia</option> 
                             <option value="Zimbabwe">Zimbabwe</option>
                      </select>
                      <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 520px;">
                        <span class="selection">
                          <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-id_country-container">
                            <span class="select2-selection__rendered" id="select2-id_country-container">
                              <span class="select2-selection__placeholder">Choose country...
                              </span>
                          </span>
                          <span class="select2-selection__arrow" role="presentation">
                            <b role="presentation"></b>
                          </span>
                        </span>
                      </span>
                      <span class="dropdown-wrapper" aria-hidden="true"></span>
                    </span>
                     <div class="invalid-feedback">
                       
                     </div> 
                   </div> 
                 </div> 
               </div>
              <div class="col-md-6"> 
                <div id="div_id_chain" class="form-group"> 
                  <label for="id_chain" class="col-form-label text-uppercase text-fader fw-500 fs-11">Platform</label> 
                  <div class=""> 
                    <select name="chain" class="select form-control select2-hidden-accessible" id="id_chain" tabindex="-1" aria-hidden="true" type="text"> 
                      <option value="" selected="">---------</option> 
                      <option value="Ardor">Ardor</option> 
                      <option value="Bitcoin">Bitcoin</option> 
                      <option value="Bitshares">Bitshares</option> 
                      <option value="Blockchain">Blockchain</option> 
                      <option value="Counterparty">Counterparty</option> 
                      <option value="CryptoNote">CryptoNote</option> 
                      <option value="DAG">DAG</option> 
                      <option value="EOS">EOS</option> 
                      <option value="Ethereum">Ethereum</option> 
                      <option value="Graphene">Graphene</option> 
                      <option value="Hyperledger">Hyperledger</option> 
                      <option value="ICON">ICON</option> 
                      <option value="Komodo">Komodo</option> 
                      <option value="Lisk">Lisk</option> 
                      <option value="Litecoin">Litecoin</option> 
                      <option value="Neblio">Neblio</option> 
                      <option value="NEM">NEM</option> 
                      <option value="NEM">NEO</option> 
                      <option value="Nxt">Nxt</option> 
                      <option value="Omni">Omni</option> 
                      <option value="Ontology">Ontology</option> 
                      <option value="Own Blockchai">Own Blockchain</option> 
                      <option value="QTUM">QTUM</option> 
                      <option value="Ripple">Ripple</option> 
                      <option value="Scrypt">Scrypt</option> 
                      <option value="Steem">Steem</option> 
                      <option value="Stellar">Stellar</option> 
                      <option value="Stratis">Stratis</option> 
                      <option value="Wanchain">Wanchain</option> 
                      <option value="Waves">Waves</option>
                      <option value="Others">Others</option>
                    </select>
                  <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 520px;">
                    <span class="selection">
                      <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-id_chain-container">
                        <span class="select2-selection__rendered" id="select2-id_chain-container">
                          <span class="select2-selection__placeholder">Choose platform...
                          </span>
                        </span>
                        <span class="select2-selection__arrow" role="presentation">
                          <b role="presentation">
                            
                          </b>
                        </span>
                      </span>
                    </span>
                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                  </span> <div class="invalid-feedback"></div> 
              </div> 
            </div> 
          </div>
                <div class="col-md-6"> 
                  <div id="div_id_symbol" class="form-group"> 
                    <label for="id_symbol" class="col-form-label text-uppercase text-fader fw-500 fs-11">Ticker</label> 
                    <div class=""> 
                       <input type="text" name="symbol" maxlength="30" class="textinput textInput form-control" id="id_symbol"> <div class="invalid-feedback">
                         
                       </div> 
                     </div> 
                   </div> 
                 </div>
                <div class="col-md-6"> 
                  <div id="div_id_address" class="form-group"> 
                    <label for="id_address" class="col-form-label text-uppercase text-fader fw-500 fs-11">Smart contract address</label> 
                    <div class=""> 
                      <input type="text" name="address" maxlength="180" class="textinput textInput form-control" id="id_address"> 
                      <div class="invalid-feedback">
                        
                      </div> 
                    </div> 
                  </div> 
                </div>
                <div class="col-md-6 ico-date"> 
                  <div id="div_id_pre_ico_start" class="form-group"> 
                    <label for="id_pre_ico_start" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Pre-Sale start (UTC)
                </label> 
                <div class=""> 
                  <div class="input-group"> 
                    <div class="input-group-prepend">  
                    </div> 
                    <input type="text" name="pre_ico_start" class="datetimeinput form-control" id="id_pre_ico_start"> 
                  </div> 
                  <div class="invalid-feedback">
                    
                  </div> 
                </div>
                 </div> 
               </div>
                <div class="col-md-6 ico-date"> 
                  <div id="div_id_pre_ico_end" class="form-group"> 
                    <label for="id_pre_ico_end" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Pre-Sale end (UTC)
                </label> 
                <div class=""> 
                  <div class="input-group"> 
                    <div class="input-group-prepend">  
                    </div> 
                    <input type="text" name="pre_ico_end" class="datetimeinput form-control" id="id_pre_ico_end"> 
                  </div> 
                  <div class="invalid-feedback">
                    
                  </div> 
                </div>
                 </div> 
               </div>
                <div class="col-md-6 ico-date"> 
                  <div id="div_id_ico_start" class="form-group"> 
                    <label for="id_ico_start" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Token Sale start (UTC)
                </label> 
                <div class=""> 
                  <div class="input-group"> 
                    <div class="input-group-prepend">  
                    </div> 
                    <input type="text" name="ico_start" class="datetimeinput form-control" id="id_ico_start"> 
                  </div> 
                  <div class="invalid-feedback">
                    
                  </div> 
                </div> 
              </div> 
            </div>
            <div class="col-md-6 ico-date"> 
              <div id="div_id_ico_end" class="form-group"> 
                <label for="id_ico_end" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Token Sale end (UTC)
                </label> 
                <div class=""> 
                  <div class="input-group"> 
                    <div class="input-group-prepend"> 
                    </div> 
                    <input type="text" name="ico_end" class="datetimeinput form-control" id="id_ico_end"> 
                  </div> 
                  <div class="invalid-feedback">
                    
                  </div> 
                </div> 
              </div> 
            </div>
                <div class="col-12"> 
                  <div id="div_id_description" class="form-group"> 
                    <label for="id_description" class="col-form-label text-uppercase text-fader fw-500 fs-11 require">
                Description
                </label> 
                <div class=""> 
                  <textarea name="description" cols="40" rows="10" maxlength="32000" class="textarea form-control" required="" id="id_description"></textarea> 
                  <div class="invalid-feedback">
                        
                      </div> 
                    </div> 
                  </div> 
                </div>
               </div>
                </div>
                </div>
                <!--Link Start Hare-->
                <div class="card">
                <center><header class="card-header">
                <h1 class="card-title">
                <strong>ICO Links</strong>
                </h1>
                </header></center>
                <div class="card-body">
                <input type="hidden" name="csrfmiddlewaretoken" value="HEN4WPfclZil6Swrx2ykzcbh7pmFZu9KQDeF4R0LDClYwkSQdHEbYlXaWtyrtjMb"> <div> <input type="hidden" name="ico_links-TOTAL_FORMS" value="1" id="id_ico_links-TOTAL_FORMS"> <input type="hidden" name="ico_links-INITIAL_FORMS" value="0" id="id_ico_links-INITIAL_FORMS"> <input type="hidden" name="ico_links-MIN_NUM_FORMS" value="0" id="id_ico_links-MIN_NUM_FORMS"> <input type="hidden" name="ico_links-MAX_NUM_FORMS" value="1" id="id_ico_links-MAX_NUM_FORMS"> </div> <div class="row"> 
                  <div class="col-md-4 col-lg-4 col-sm-6"> <div id="div_id_ico_links-0-website" class="form-group"> <label for="id_ico_links-0-website" class="col-form-label text-uppercase text-fader fw-500 fs-11 require">
                Website
                </label> <div class=""> <div class="input-group"> <div class="input-group-prepend">  </div> <input type="url" name="ico_links-0-website" maxlength="200" class="urlinput form-control" id="id_ico_links-0-website"> </div> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-md-4 col-lg-4 col-sm-6"> <div id="div_id_ico_links-0-whitepaper" class="form-group"> <label for="id_ico_links-0-whitepaper" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Whitepaper
                </label> <div class=""> <div class="input-group"> <div class="input-group-prepend">  </div> <input type="url" name="ico_links-0-whitepaper" maxlength="200" class="urlinput form-control" id="id_ico_links-0-whitepaper"> </div> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-md-4 col-lg-4 col-sm-6"> <div id="div_id_ico_links-0-whitepaper" class="form-group"> <label for="id_ico_links-0-whitepaper" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Telegram
                </label> <div class=""> <div class="input-group"> <div class="input-group-prepend">  </div> 
                <input type="url" name="ico_real_links_telegram" maxlength="200" class="urlinput form-control" id="id_ico_links-0-Telegram"> </div> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-md-4 col-lg-4 col-sm-6"> <div id="div_id_ico_links-0-telegram" class="form-group"> <label for="id_ico_links-0-telegram" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Medium
                </label> <div class=""> <div class="input-group"> <div class="input-group-prepend">  </div> <input type="url" name="ico_links-0-telegram" maxlength="200" class="urlinput form-control" id="id_ico_links-0-telegram"> </div> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-md-6 col-lg-4"> <div id="div_id_ico_links-0-twitter" class="form-group"> <label for="id_ico_links-0-twitter" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Twitter
                </label> <div class=""> <div class="input-group"> <div class="input-group-prepend">  </div> <input type="url" name="ico_links-0-twitter" maxlength="200" class="urlinput form-control" id="id_ico_links-0-twitter"> </div> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-md-6 col-lg-4"> <div id="div_id_ico_links-0-bitcointalk" class="form-group"> <label for="id_ico_links-0-bitcointalk" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Bitcointalk ANN thread
                </label> <div class=""> <div class="input-group"> <div class="input-group-prepend">  </div> <input type="url" name="ico_links-0-bitcointalk" maxlength="200" class="urlinput form-control" id="id_ico_links-0-bitcointalk"> </div> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-md-6 col-lg-4"> <div id="div_id_ico_links-0-github" class="form-group"> <label for="id_ico_links-0-github" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Github
                </label> <div class=""> <div class="input-group"> <div class="input-group-prepend">  </div> <input type="url" name="ico_links-0-github" maxlength="200" class="urlinput form-control" id="id_ico_links-0-github"> </div> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-md-6 col-lg-4"> <div id="div_id_ico_links-0-linkedin" class="form-group"> <label for="id_ico_links-0-linkedin" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Linkedin
                </label> <div class=""> <div class="input-group"> <div class="input-group-prepend">  </div> <input type="url" name="ico_links-0-linkedin" maxlength="200" class="urlinput form-control" id="id_ico_links-0-linkedin"> </div> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-md-6 col-lg-4"> <div id="div_id_ico_links-0-facebook" class="form-group"> <label for="id_ico_links-0-facebook" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Facebook
                </label> <div class=""> <div class="input-group"> <div class="input-group-prepend">  </div> <input type="url" name="ico_links-0-facebook" maxlength="200" class="urlinput form-control" id="id_ico_links-0-facebook"> </div> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-md-6 col-lg-4"> <div id="div_id_ico_links-0-bounty" class="form-group"> <label for="id_ico_links-0-bounty" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Bounty campaign
                </label> <div class=""> <div class="input-group"> <div class="input-group-prepend">  </div> <input type="url" name="ico_links-0-bounty" maxlength="200" class="urlinput form-control" id="id_ico_links-0-bounty"> </div> <div class="invalid-feedback"></div> </div> </div> </div>
                
                <div class="col-md-6 col-lg-4"> <div id="div_id_ico_links-0-youtube" class="form-group"> <label for="id_ico_links-0-youtube" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Youtube <small>***Please Enter Embed Video link***</small>
                </label> <div class=""> <div class="input-group"> <div class="input-group-prepend">  </div> <input type="url" name="ico_links-0-youtube" maxlength="200" class="urlinput form-control" id="id_ico_links-0-youtube"> </div> <div class="invalid-feedback"></div> </div> </div> </div></div></div></div>

                
                

               <!--  Team SEction -->

               <div class="card" >
                <center><header class="card-header">
                <h1 class="card-title">
                <strong >ICO Team</strong>
                </h1>
                </header></center>
                <div class="card-body">
                <input name="csrfmiddlewaretoken" type="hidden" value="BRZOlGdpgYZFu1x6T90sQfEkEYzq55zdbQKJTnEWMEFIshDNwnKHoG5BPEiwlsQL"> <div> <input name="ico_members-TOTAL_FORMS" id="id_ico_members-TOTAL_FORMS" type="hidden" value="4"> <input name="ico_members-INITIAL_FORMS" id="id_ico_members-INITIAL_FORMS" type="hidden" value="0"> <input name="ico_members-MIN_NUM_FORMS" id="id_ico_members-MIN_NUM_FORMS" type="hidden" value="0"> <input name="ico_members-MAX_NUM_FORMS" id="id_ico_members-MAX_NUM_FORMS" type="hidden" value="1000"> </div> <div class="row team-member-row mb-2"> <div class="col-md-4"> <div class="form-group" id="div_id_ico_members-0-image"> <label class="col-form-label text-uppercase text-fader fw-500 fs-11" for="id_ico_members-0-image">Image</label> <div> <div class="dropify-wrapper">
                <input name="ico_members-0-image" class="member_image clearablefileinput" id="id_ico_members-0-image" type="file" data-allowed-formats="square" data-allowed-file-extensions="png jpg jpeg">

                </div> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-md-4"> <div class="row"> <div class="col-12"> <div class="form-group" id="div_id_ico_members-0-name"> <label class="col-form-label text-uppercase text-fader fw-500 fs-11 require" for="id_ico_members-0-name"> Name </label> <div> 

                <input name="ico_members-0-name" class="textinput textInput form-control" id="id_ico_members-0-name" type="text" maxlength="1000"> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-12"> <div class="form-group" id="div_id_ico_members-0-role"> <label class="col-form-label text-uppercase text-fader fw-500 fs-11" for="id_ico_members-0-role">
                Role
                </label> <div> <input name="ico_members-0-role" class="textinput textInput form-control" id="id_ico_members-0-role" type="text" maxlength="1000"> <div class="invalid-feedback"></div> </div> </div> </div>
                
               
                </div>
                </div>
                <div class="col-md-4"> <div class="row"> <div class="col-12"> <div class="form-group" id="div_id_ico_members-0-linkedin_url"> <label class="col-form-label text-uppercase text-fader fw-500 fs-11" for="id_ico_members-0-linkedin_url">
                Linkedin url
                </label> <div> <div class="input-group"> <div class="input-group-prepend"> </div> 
                <input name="ico_members-0-linkedin_url" class="urlinput form-control" id="id_ico_members-0-linkedin_url" type="url" maxlength="200"> </div> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-12"> <div class="form-group" id="div_id_ico_members-0-twitter_url"> <label class="col-form-label text-uppercase text-fader fw-500 fs-11" for="id_ico_members-0-twitter_url">
                Twitter url
                </label> <div> <div class="input-group"> <div class="input-group-prepend"> </div> 
                <input name="ico_members-0-twitter_url" class="urlinput form-control" id="id_ico_members-0-twitter_url" type="url" maxlength="200"> </div> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-12"> <div class="form-group" id="div_id_ico_members-0-facebook_url">

                </div> </div>
                </div>
                </div> 
                </div> <div class="row team-member-row mb-2"> <div class="col-md-4"> <div class="form-group" id="div_id_ico_members-1-image"> <label class="col-form-label text-uppercase text-fader fw-500 fs-11" for="id_ico_members-1-image">
                Image
                </label> <div> <div class="dropify-wrapper"><div class="dropify-errors-container"><ul></ul></div><input name="ico_members_tow_image" class="member_image clearablefileinput" id="id_ico_members-1-image" type="file" data-allowed-formats="square" data-allowed-file-extensions="png jpg jpeg"></div> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-md-4"> <div class="row"> <div class="col-12"> <div class="form-group" id="div_id_ico_members-1-name"> <label class="col-form-label text-uppercase text-fader fw-500 fs-11 require" for="id_ico_members-1-name">
                Name
                </label> <div> <input name="ico_members_tow_name" class="textinput textInput form-control" id="id_ico_members-1-name" type="text" maxlength="1000"> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-12"> <div class="form-group" id="div_id_ico_members-1-role"> <label class="col-form-label text-uppercase text-fader fw-500 fs-11" for="id_ico_members-1-role">
                Role
                </label> <div> <input name="ico_members_tow_role" class="textinput textInput form-control" id="id_ico_members-1-role" type="text" maxlength="1000"> <div class="invalid-feedback"></div> </div> </div> </div>
               
                
                </div>
                </div>
                <div class="col-md-4"> <div class="row"> <div class="col-12"> <div class="form-group" id="div_id_ico_members-1-linkedin_url"> <label class="col-form-label text-uppercase text-fader fw-500 fs-11" for="id_ico_members-1-linkedin_url">
                Linkedin url
                </label> <div> <div class="input-group"> <div class="input-group-prepend"> </div> <input name="ico_members_tow_linkedin_url" class="urlinput form-control" id="id_ico_members-1-linkedin_url" type="url" maxlength="200"> </div> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-12"> <div class="form-group" id="div_id_ico_members-1-twitter_url"> <label class="col-form-label text-uppercase text-fader fw-500 fs-11" for="id_ico_members-1-twitter_url">
                Twitter url
                </label> <div> <div class="input-group"> <div class="input-group-prepend"> </div> <input name="ico_members_tow_twitter_url" class="urlinput form-control" id="id_ico_members-1-twitter_url" type="url" maxlength="200"> </div> <div class="invalid-feedback"></div> </div> </div> </div>
                
                </div>
                </div> <input name="ico_members-1-ico" id="id_ico_members-1-ico" type="hidden"> <input name="ico_members-1-id" id="id_ico_members-1-id" type="hidden">
                </div> <div class="row team-member-row mb-2"> <div class="col-md-4"> <div class="form-group" id="div_id_ico_members-2-image"> <label class="col-form-label text-uppercase text-fader fw-500 fs-11" for="id_ico_members-2-image">
                Image</label> <div> <div class="dropify-wrapper">

                  <input name="ico_members_three_image" class="member_image clearablefileinput" id="id_ico_members-2-image" type="file" data-allowed-formats="square" data-allowed-file-extensions="png jpg jpeg"></div> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-md-4"> <div class="row"> <div class="col-12"> <div class="form-group" id="div_id_ico_members-2-name"> <label class="col-form-label text-uppercase text-fader fw-500 fs-11 require" for="id_ico_members-2-name">
                Name
                </label> <div> <input name="ico_members_three_name" class="textinput textInput form-control" id="id_ico_members-2-name" type="text" maxlength="1000"> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-12"> <div class="form-group" id="div_id_ico_members-2-role"> <label class="col-form-label text-uppercase text-fader fw-500 fs-11" for="id_ico_members-2-role">
                Role
                </label> <div> <input name="ico_members_three_role" class="textinput textInput form-control" id="id_ico_members-2-role" type="text" maxlength="1000"> <div class="invalid-feedback"></div> </div> </div> </div>
                
               
                </div>
                </div>
                <div class="col-md-4"> <div class="row"> <div class="col-12"> <div class="form-group" id="div_id_ico_members-2-linkedin_url"> <label class="col-form-label text-uppercase text-fader fw-500 fs-11" for="id_ico_members-2-linkedin_url">
                Linkedin url
                </label> <div> <div class="input-group"> <div class="input-group-prepend">  </div> <input name="ico_members_three_linkedin_url" class="urlinput form-control" id="id_ico_members-2-linkedin_url" type="url" maxlength="200"> </div> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-12"> <div class="form-group" id="div_id_ico_members-2-twitter_url"> <label class="col-form-label text-uppercase text-fader fw-500 fs-11" for="id_ico_members-2-twitter_url">
                Twitter url
                </label> <div> <div class="input-group"> <div class="input-group-prepend">  </div> <input name="ico_members_three_twitter_url" class="urlinput form-control" id="id_ico_members-2-twitter_url" type="url" maxlength="200"> </div> <div class="invalid-feedback"></div> </div> </div> </div>
               
                </div>
                </div> 
                </div>
                </div>
                </div>
              


    <!-- end team section  -->


               


               <!-- Road Map -->


               <div class="card">
              <center><header class="card-header">
              <h1 class="card-title">
              <strong>ICO Roadmap</strong>
              </h1>
              </header></center>
              <div class="card-body">
              <input name="csrfmiddlewaretoken" type="hidden" value="BRZOlGdpgYZFu1x6T90sQfEkEYzq55zdbQKJTnEWMEFIshDNwnKHoG5BPEiwlsQL"> <div> <input name="milestones-TOTAL_FORMS" id="id_milestones-TOTAL_FORMS" type="hidden" value="3"> <input name="milestones-INITIAL_FORMS" id="id_milestones-INITIAL_FORMS" type="hidden" value="0"> <input name="milestones-MIN_NUM_FORMS" id="id_milestones-MIN_NUM_FORMS" type="hidden" value="0"> <input name="milestones-MAX_NUM_FORMS" id="id_milestones-MAX_NUM_FORMS" type="hidden" value="1000"> </div> <div class="row milestone-row mb-2"> <div class="col-12"> <div class="form-group" id="div_id_milestones-0-name"> <label class="col-form-label text-uppercase text-fader fw-500 fs-11 require" for="id_milestones-0-name">
              Milestone title
              </label> <div> <input name="milestones_first_name" class="textinput textInput form-control" id="id_milestones-0-name" type="text" maxlength="256"> <div class="invalid-feedback"></div> </div> </div> </div>
              <div class="col-12"> <div class="form-group" id="div_id_milestones-0-description"> <label class="col-form-label text-uppercase text-fader fw-500 fs-11 require" for="id_milestones-0-description">
              Milestone description
              </label> <div> <textarea name="milestones_first_description" class="textarea form-control" id="id_milestones-0-description" maxlength="8192" rows="4" cols="40"></textarea> <div class="invalid-feedback"></div> </div> </div> </div>
             

              <input name="milestones-0-ico" id="id_milestones-0-ico" type="hidden"> <input name="milestones-0-id" id="id_milestones-0-id" type="hidden">
              </div> <div class="row milestone-row mb-2"> <div class="col-12"> <div class="form-group" id="div_id_milestones-1-name"> <label class="col-form-label text-uppercase text-fader fw-500 fs-11 require" for="id_milestones-1-name">
              Milestone title
              </label> <div> <input name="milestones_tow_name" class="textinput textInput form-control" id="id_milestones-1-name" type="text" maxlength="256"> <div class="invalid-feedback"></div> </div> </div> </div>
              <div class="col-12"> <div class="form-group" id="div_id_milestones-1-description"> <label class="col-form-label text-uppercase text-fader fw-500 fs-11 require" for="id_milestones-1-description">
              Milestone description
              </label> <div> <textarea name="milestones_tow_description" class="textarea form-control" id="id_milestones-1-description" maxlength="8192" rows="4" cols="40"></textarea> <div class="invalid-feedback"></div> </div> </div> </div>
               <input name="milestones-1-ico" id="id_milestones-1-ico" type="hidden"> <input name="milestones-1-id" id="id_milestones-1-id" type="hidden">
              </div> <div class="row milestone-row mb-2"> <div class="col-12"> <div class="form-group" id="div_id_milestones-2-name"> <label class="col-form-label text-uppercase text-fader fw-500 fs-11 require" for="id_milestones-2-name">
              Milestone title
              </label> <div> <input name="milestones_three_name" class="textinput textInput form-control" id="id_milestones-2-name" type="text" maxlength="256"> <div class="invalid-feedback"></div> </div> </div> </div>
              <div class="col-12"> <div class="form-group" id="div_id_milestones-2-description"> <label class="col-form-label text-uppercase text-fader fw-500 fs-11 require" for="id_milestones-2-description">
              Milestone description
              </label> <div> <textarea name="milestones_three_description" class="textarea form-control" id="id_milestones-2-description" maxlength="8192" rows="4" cols="40"></textarea> <div class="invalid-feedback"></div> </div> </div> </div>
               <input name="milestones-2-ico" id="id_milestones-2-ico" type="hidden"> <input name="milestones-2-id" id="id_milestones-2-id" type="hidden">
              </div>
              <div class="text-center" id="one-more-milestone">
             
              </div>
              </div>
              </div>


            <!-- End Read Map -->




                
                <div class="card">
                <center><header class="card-header">
                <h1 class="card-title">
                <strong>ICO Financial information</strong>
                </h1>
                </header></center>
                <div class="card-body">
                <input type="hidden" name="csrfmiddlewaretoken" value="HEN4WPfclZil6Swrx2ykzcbh7pmFZu9KQDeF4R0LDClYwkSQdHEbYlXaWtyrtjMb"> <div> 

                  <input type="hidden" name="icofinance-TOTAL_FORMS" value="1" id="id_icofinance-TOTAL_FORMS"> 
                  <input type="hidden" name="icofinance-INITIAL_FORMS" value="0" id="id_icofinance-INITIAL_FORMS"> 
                  <input type="hidden" name="icofinance-MIN_NUM_FORMS" value="0" id="id_icofinance-MIN_NUM_FORMS"> 
                  <input type="hidden" name="icofinance-MAX_NUM_FORMS" value="1" id="id_icofinance-MAX_NUM_FORMS"> </div> <div class="row"> <div class="col-md-6"> <div id="div_id_icofinance-0-token_supply" class="form-group"> <label for="id_icofinance-0-token_supply" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Total token supply
                </label> <div class=""> 

                  <input type="number" name="icofinance-0-token_supply" min="-9223372036854775808" max="9223372036854775807" class="numberinput form-control" id="id_icofinance-0-token_supply"> <div class="invalid-feedback">
                    
                  </div> 
                  <small id="hint_id_icofinance-0-token_supply" class="form-text text-muted">Amount of tokens issued in total</small> </div> </div> 
                </div>
                <div class="col-md-6"> <div id="div_id_icofinance-0-token_for_sale" class="form-group"> <label for="id_icofinance-0-token_for_sale" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Tokens for sale
                </label> 
                <div class=""> 
                  <input type="number" name="icofinance-0-token_for_sale" min="-9223372036854775808" max="9223372036854775807" class="numberinput form-control" id="id_icofinance-0-token_for_sale"> <div class="invalid-feedback"></div> 
                  <small id="hint_id_icofinance-0-token_for_sale" class="form-text text-muted">Amount of tokens that will be allocated to investors</small> 
                </div> 
              </div> 
            </div>
                <div class="col-6 col-md-3"> <div id="div_id_icofinance-0-token_total_soft_cap" class="form-group"> <label for="id_icofinance-0-token_total_soft_cap" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                SOFT CAP
                </label> <div class=""> 

                  <input type="number" name="icofinance-0-token_total_soft_cap" min="-9223372036854775808" max="9223372036854775807" class="numberinput form-control" id="id_icofinance-0-token_total_soft_cap"> <div class="invalid-feedback"></div> <small id="hint_id_icofinance-0-token_total_soft_cap" class="form-text text-muted">Minimum amount of funds aimed to gather in the ICO</small> 
                </div> 
              </div> 
            </div>
                <div class="col-6 col-md-3"> <div id="div_id_icofinance-0-token_total_soft_cap_currency" class="form-group"> <label for="id_icofinance-0-token_total_soft_cap_currency" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                SOFT CAP currency
                </label> <div class=""> 


                   <input type="text" name="icofinance-0-token_total_soft_cap_currency"  class="numberinput form-control" id="icofinance-0-token_total_soft_cap_currency">

                   <div class="invalid-feedback">
                     
                   </div> 
                 </div> 
               </div> 
             </div>
                <div class="col-6 col-md-3"> 
                  <div id="div_id_icofinance-0-token_total_hard_cap" class="form-group"> <label for="id_icofinance-0-token_total_hard_cap" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                      HARD CAP
                      </label> 
                <div class=""> 

                  <input type="number" name="icofinance-0-token_total_hard_cap" min="-9223372036854775808" max="9223372036854775807" class="numberinput form-control" id="id_icofinance-0-token_total_hard_cap"> 
                  <div class="invalid-feedback"></div> <small id="hint_id_icofinance-0-token_total_hard_cap" class="form-text text-muted">Maximum amount of funds aimed to gather in the ICO</small> 
                </div> 
              </div> 
            </div>
                <div class="col-6 col-md-3"> 
                  <div id="div_id_icofinance-0-token_total_hard_cap_currency" class="form-group"> <label for="id_icofinance-0-token_total_hard_cap_currency" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                HARD CAP currency
                </label> <div class=""> 
                  


                <input type="text" name="icofinance-0-token_total_hard_cap_currency"  class="numberinput form-control" id="icofinance-0-token_total_hard_cap_currency">




                <div class="invalid-feedback">
                  
                </div> 
              </div> 
            </div> 
          </div>
                <div class="col-6 col-md-3"> <div id="div_id_icofinance-0-token_price" class="form-group"> <label for="id_icofinance-0-token_price" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Token price
                </label> <div class=""> 

                  <input type="number" name="icofinance-0-token_price" step="1e-8" class="numberinput form-control" id="id_icofinance-0-token_price"> <div class="invalid-feedback"></div> <small id="hint_id_icofinance-0-token_price" class="form-text text-muted">Price of one token (without any bonus)</small> 
              </div> 
            </div> 
          </div>
                <div class="col-6 col-md-3"> 
                  <div id="div_id_icofinance-0-token_price_currency" class="form-group"> <label for="id_icofinance-0-token_price_currency" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                CURRENCY ACCEPTED
                </label> <div class=""> 
                 

                  <input type="text" name="icofinance-0-token_price_currency"  class="numberinput form-control" id="icofinance-0-token_price_currency">
                  <div class="invalid-feedback">
                    
                  </div> 
                </div> 
              </div> 
            </div>
                <div class="col-6 col-md-3"> <div id="div_id_icofinance-0-is_whitelist_required" class="form-group"> <label for="id_icofinance-0-is_whitelist_required" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Whitelist required
                </label> <div class=""> 

                  <select name="icofinance-0-is_whitelist_required" class="nullbooleanselect form-control" id="id_icofinance-0-is_whitelist_required" type="text"> 
                          <option value="Unknown" selected="">Unknown</option> 
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                </select>
                 <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-6 col-md-3"> <div id="div_id_icofinance-0-is_kyc_required" class="form-group"> <label for="id_icofinance-0-is_kyc_required" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                KYC required
                </label> <div class=""> <select name="icofinance-0-is_kyc_required" class="nullbooleanselect form-control" id="id_icofinance-0-is_kyc_required"> <option value="1" selected="">Unknown</option> <option value="2">Yes</option> <option value="3">No</option>
                </select> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-md-6"> <div class="row"> <div class="col-12"> <div id="div_id_icofinance-0-accepted_currencies" class="form-group"> <label for="id_icofinance-0-accepted_currencies" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Accepted currencies
                </label> <div class=""> 


                <input type="text" name="icofinance-0-accepted_currencies"  class="numberinput form-control" id="icofinance-0-accepted_currencies">






                <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 520px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-12"> <div id="div_id_icofinance-0-restricted_countries" class="form-group"> <label for="id_icofinance-0-restricted_countries" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Restricted countries
                </label> <div class="">

                <input type="text" name="icofinance-0-restricted_countries"  class="numberinput form-control" id="icofinance-0-restricted_countries"> 

                  <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 520px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> <div class="invalid-feedback"></div> <small id="hint_id_icofinance-0-restricted_countries" class="form-text text-muted">Countries whose citiziens are not allowed to participate in the ICO</small> </div> </div> </div>
                </div>
                </div>
                <div class="col-md-6"> <div id="div_id_icofinance-0-bonus" class="form-group"> <label for="id_icofinance-0-bonus" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Token sale bonus
                </label> <div class=""> <textarea name="icofinance-0-bonus" cols="40" rows="10" maxlength="1024" class="textarea form-control" id="id_icofinance-0-bonus"></textarea> <div class="invalid-feedback"></div> </div> </div> </div>
                </div> <input type="hidden" name="icofinance-0-ico" id="id_icofinance-0-ico"> <input type="hidden" name="icofinance-0-id" id="id_icofinance-0-id">
                </div>
                </div>
                <!--Bounty Coumping Start-->
                <div class="card">
                <center><header class="card-header">
                <h1 class="card-title">
                <strong>ICO Bounty Campaign</strong>
                </h1>
                </header></center>
                <div class="card-body">
                <input type="hidden" name="csrfmiddlewaretoken" value="HEN4WPfclZil6Swrx2ykzcbh7pmFZu9KQDeF4R0LDClYwkSQdHEbYlXaWtyrtjMb"> <div> <input type="hidden" name="bounty-TOTAL_FORMS" value="1" id="id_bounty-TOTAL_FORMS"> <input type="hidden" name="bounty-INITIAL_FORMS" value="0" id="id_bounty-INITIAL_FORMS"> <input type="hidden" name="bounty-MIN_NUM_FORMS" value="0" id="id_bounty-MIN_NUM_FORMS"> <input type="hidden" name="bounty-MAX_NUM_FORMS" value="1" id="id_bounty-MAX_NUM_FORMS"> </div> <div class="row"> <div class="col-md-6 bounty-date"> <div id="div_id_bounty-0-start" class="form-group"> <label for="id_bounty-0-start" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Bounty campaign start
                </label> <div class=""> <div class="input-group"> <div class="input-group-prepend">  </div> <input type="text" name="bounty-0-start" class="dateinput form-control" id="id_bounty-0-start"> </div> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-md-6 bounty-date"> <div id="div_id_bounty-0-end" class="form-group"> <label for="id_bounty-0-end" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Bounty campaign end
                </label> <div class=""> <div class="input-group"> <div class="input-group-prepend">  </div> <input type="text" name="bounty-0-end" class="dateinput form-control" id="id_bounty-0-end"> </div> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-md-6"> <div id="div_id_bounty-0-types" class="form-group"> <label for="id_bounty-0-types" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Bounty types
                </label> <div class=""> <select name="bounty-0-types" class="selectmultiple form-control select2-hidden-accessible" id="id_bounty-0-types" multiple="" tabindex="-1" aria-hidden="true" type="text"> 
                          <option value="Twitter">Twitter</option> 
                          <option value="Telegram">Telegram</option> 
                          <option value="Bitcointalk">Bitcointalk</option> 
                          <option value="Reddit">Reddit</option> 
                          <option value="LinkedIn">LinkedIn</option> 
                          <option value="Facebook">Facebook</option> 
                          <option value="Blog">Blog</option> 
                          <option value="Video">Video</option> 
                          <option value="Article">Article</option> 
                          <option value="Translation">Translation</option> 
                          <option value="Scammer Hunting">Scammer Hunting</option> 
                          <option value="Bug Hunting">Bug Hunting</option> 
                          <option value="Moderation">Moderation</option> 
                          <option value="Referral">Referral</option>
                          <option value="Others">Others</option>
                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 520px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> <div class="invalid-feedback"></div> </div> </div> </div>
                <div class="col-md-6"> <div id="div_id_bounty-0-total_tokens" class="form-group"> <label for="id_bounty-0-total_tokens" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Tokens for bounty
                </label> <div class=""> <input type="number" name="bounty-0-total_tokens" min="-9223372036854775808" max="9223372036854775807" class="numberinput form-control" id="id_bounty-0-total_tokens"> <div class="invalid-feedback"></div> </div> </div> </div>
                </div> <input type="hidden" name="bounty-0-ico" id="id_bounty-0-ico"> <input type="hidden" name="bounty-0-id" id="id_bounty-0-id">
                </div>
                </div>
                <div class="card">
                <center><header class="card-header">
                <h1 class="card-title">
                <strong>Confirmation</strong>
                </h1>
                </header></center>
                <div class="card-body">
                <input type="hidden" name="csrfmiddlewaretoken" value="HEN4WPfclZil6Swrx2ykzcbh7pmFZu9KQDeF4R0LDClYwkSQdHEbYlXaWtyrtjMb"> <div class="row"> <div class="col-md-12 col-lg-12 "> <div id="div_id_review_note" class="form-group"> <label for="id_review_note" class="col-form-label text-uppercase text-fader fw-500 fs-11">
                Additional comments
                </label> <div class=""> <textarea name="review_note" cols="40" rows="5" class="textarea form-control" id="id_review_note"></textarea> <div class="invalid-feedback"></div> <small id="hint_id_review_note" class="form-text text-muted">Any additional comments and notes for reviewer.</small> 
              </div> 
            </div> 
          </div>
                <div class="col-12"> <input type="submit" name="save" value="Submit ICO" class="btn btn-primary btn btn-bold btn-round btn-w-xl btn-primary float-right" id="submit-id-save">
                </div>
                </div>
                </div>
                </div>
                </form>




              </div>

            </div>



</form>
</div>
</div>









<?php include 'inc/foter.php'; ?> 