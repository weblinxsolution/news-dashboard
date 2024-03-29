@extends('seller.layout.main')
@section('seller-templete')
    <style>
        .form_label span {
            font-size: 14px;
        }

        .form_label i {
            font-size: 14px;
        }

        .select2-container--default .select2-selection--multiple {
            padding: 5px !important;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            margin: 0px !important;
            margin-right: 5px !important;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
            cursor: default;
            padding-left: 10px;
            padding-right: 5px;
        }
    </style>

    <!-- content start -->
    <section>
        <div class="content-wrapper wrapper-adjust">
            <form action=""{{ Route('seller.addWebCompleteDb') }} method="POST">
                @csrf
                <div class="row mx-0">
                    <div class="col-12 col-md-8 col-lg-10">
                        <div class="wrapper-header mb-5">
                            <div class="container-fluid d-flex justify-content-between">
                                <h3 class="mt-3 font-weight-bold">2. Complete the Data </h3>
                                <div class="my-auto">
                                    <a href="index2.php" class="btn text-white bg-black"><i
                                            class="fa-solid fa-arrow-left"></i>
                                        Cancel</a>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">
                                        <span class="fw-bold">Website description</span> <span class="text-black">*</span>
                                        <small class="text-black">(It is not allowed to add contact details)</small>
                                        <i class="fa-solid fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Describe your website in a few words"></i>
                                    </label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" required>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non sunt odit quibusdam quod, incidunt, laboriosam suscipit voluptas iure quisquam dignissimos obcaecati officiis accusamus laudantium laborum voluptates ducimus repellendus facilis nulla.
                                    </textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- 1 -->
                                <div class="col-6 col-lg-3 h-adj">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1" class="form_label">
                                            <span class="fw-bold ">Your main audience is from (Country)</span> <span
                                                class="text-black">*</span>
                                            <i class="fa-solid fa-info-circle" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Describe your website in a few words"></i>
                                        </label>
                                        <select class="form-control" name="countries" id="countries" name="countries"
                                            required>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Åland Islands">Åland Islands</option>
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
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                            </option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic
                                                Republic of The</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)
                                            </option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories
                                            </option>
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
                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald
                                                Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
                                            </option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic
                                                People's Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic">Lao People's Democratic
                                                Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The
                                                Former Yugoslav Republic of</option>
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
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of
                                            </option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
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
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
                                            </option>
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
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The
                                                Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and The South Sandwich Islands">South Georgia and
                                                The South Sandwich Islands</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of
                                            </option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-leste">Timor-leste</option>
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
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor
                                                Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- 2 -->
                                <div class="col-6 col-lg-3 h-adj">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1" class="form_label">
                                            <span class="fw-bold">How many images per post</span> <span
                                                class="text-black">*</span>
                                            <i class="fa-solid fa-info-circle" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Describe your website in a few words"></i>
                                        </label>
                                        <select class="form-control" name="images_per_post"
                                            id="exampleFormControlSelect1" required>
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- 3 -->
                                <div class="col-6 col-lg-3 h-adj">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1" class="form_label">
                                            <span class="fw-bold">Maximum amount of links per post</span> <span
                                                class="text-black">*</span> <i class="fa-solid fa-info-circle"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Describe your website in a few words"></i>
                                        </label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="max_links" required>
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- 4 -->
                                <div class="col-6 col-lg-3 h-adj">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1" class="form_label">
                                            <span class="fw-bold">Type of links admitted</span> <span
                                                class="text-black">*</span> <i class="fa-solid fa-info-circle"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Describe your website in a few words"></i>
                                        </label>
                                        <select class="js-example-basic-hide-search-multi js-states form-control"
                                            id="js-example-basic-hide-search-multi" multiple="multiple" name="type_of_links[]" required>
                                            <option value="Follow" selected>Follow</option>
                                            <option value="No follow">No Follow</option>
                                            <option value="Sponsored">Sponsored</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- checkboxes start -->
                            <div class="mb-3">
                                <div class="mb-2 form_label">
                                    <span class="font-weight-bold">Select your website categories (maximum 3)</span> <span
                                        class="text-black">*</span>
                                </div>

                                <div class="row">
                                    <div class="col-6 col-md-4 col-lg-3">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                                value="Activism and NGOst" name="categories[]" checked>
                                            <label class="form-check-label form_label" for="exampleCheck1">Activism and
                                                NGOst</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck2"
                                                value="Animals" name="categories[]" checked>
                                            <label class="form-check-label form_label" for="exampleCheck2">Animals</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck3"
                                                value="Beauty" name="categories[]" checked>
                                            <label class="form-check-label form_label" for="exampleCheck3">Beauty</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck4"
                                                value="Celebrities" name="categories[]">
                                            <label class="form-check-label form_label"
                                                for="exampleCheck4">Celebrities</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck5"
                                                value="Cinema and TV" name="categories[]">
                                            <label class="form-check-label form_label" for="exampleCheck5">Cinema and
                                                TV</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck6"
                                                value="Computer and Programming" name="categories[]">
                                            <label class="form-check-label form_label" for="exampleCheck6">Computer and
                                                Programming</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck7"
                                                value="Construction and Renovations" categories[]>
                                            <label class="form-check-label form_label" for="exampleCheck7">Construction
                                                and Renovations</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck8"
                                                value="Cooking, Recipes and Gastronomy" name="categories[]">
                                            <label class="form-check-label form_label" for="exampleCheck8">Cooking,
                                                Recipes and Gastronomy</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- checkboxes end -->

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" class="form_label">
                                                <span class="fw-bold">Non admitted topics</span>
                                                <i class="fa-solid fa-info-circle" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    title="Describe your website in a few words"></i>
                                            </label>
                                            <select class="js-example-basic-hide-search-multi js-states form-control"
                                                id="js-example-basic-hide-search-multi-2" multiple="multiple" name="non_admitted[]">
                                                <option value="Casino" selected>Casino</option>
                                                <option value="Dating" selected>Dating</option>
                                                <option value="Drug">Drug</option>
                                                <option value="Escort">Escort</option>
                                            </select>
                                        </div>

                                        <div class="mb-3 form-check mt-3">
                                            <input type="checkbox" class="form-check-input" id="isPublishHome"
                                                name="is_publish_home" value="1" required checked>
                                            <label class="form-check-label form_label" for="isPublishHome">Do you publish
                                                on
                                                the home
                                                of your website? <i class="fa-solid fa-info-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Describe your website in a few words"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" class="form_label">
                                                <span class="fw-bold">Sponsorship notification</span> <span
                                                    class="text-black">*</span>
                                                <i class="fa-solid fa-info-circle" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    title="Describe your website in a few words"></i>
                                            </label>
                                            <select class="form-control" name="sponsored"
                                                id="exampleFormControlSelect1" required>
                                                <option value="1" selected>Always</option>
                                                <option value="0">Only if it is noticed</option>
                                            </select>
                                        </div>

                                        <div class="mb-3 form-check mt-3">
                                            <input type="checkbox" class="form-check-input" id="isPublishRelated" name="is_related_category" value="1" required checked>
                                            <label class="form-check-label form_label" for="isPublishRelated">Do you
                                                publish in related categories? <i class="fa-solid fa-info-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Describe your website in a few words"></i></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <h3 class="mt-3 text-blue"><i class="fa-solid fa-euro-sign"></i> Price per sponsored post
                                    *
                                </h3>

                                <div class="border rounded p-4">
                                    <div class="alert bg-blue text-center mb-3" role="alert">
                                        This is the amount <span class="text-decoration-underline">you will receive</span>
                                        for each <span class="fw-bold">500 words</span> sponsored post you write. We
                                        suggest
                                        you a rate according your SEO metrics, but you can set any price and modify it once
                                        a month.
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" aria-label="Recipient's username"
                                            aria-describedby="basic-addon2" name="price" value="200" required>
                                        <span class="input-group-text" id="basic-addon2"><i
                                                class="fa-solid fa-euro-sign"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <h3 class="mt-3 text-blue">Extras (optional)</h3>
                                <div class="border p-3">

                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="card border-0 h-100 box-shadow-none">
                                                Add more words
                                                <div
                                                    class="p-3 text-center mt-3 h-100 border-dotted font-weight-bold rounded">
                                                    Posts must be a minimum
                                                    of
                                                    500 words. <br>
                                                    Set the price for expanding to 800, 1,000 and 1,200 total words or leave
                                                    it
                                                    blank if you prefer not to expand at all.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="card border-0 h-100 box-shadow-none">
                                                Diffusion in social networks
                                                <div
                                                    class="p-3 text-center mt-3 h-100 border-dotted font-weight-bold rounded">
                                                    Add your social
                                                    networks and
                                                    generate extra income by sharing sponsored posts there. <br>
                                                    Introduce also the price for spreading the post on all your networks.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-md-6">

                                            <div class="mt-3">
                                                <!-- 1 -->
                                                <div class="row my-2">
                                                    <div class="col-6 col-md-6">+300 words (800 total)</div>
                                                    <div class="col-6 col-md-6">
                                                        <div class="input-group">
                                                            <span class="input-group-text">+</span>
                                                            <input type="text" class="form-control"
                                                                aria-label="Amount (to the nearest dollar)">
                                                            <span class="input-group-text"><i
                                                                    class="fa-solid fa-euro-sign"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 2 -->
                                                <div class="row my-2">
                                                    <div class="col-6 col-md-6">+500 words (1.000 total)</div>
                                                    <div class="col-6 col-md-6">
                                                        <div class="input-group">
                                                            <span class="input-group-text">+</span>
                                                            <input type="text" class="form-control"
                                                                aria-label="Amount (to the nearest dollar)">
                                                            <span class="input-group-text"><i
                                                                    class="fa-solid fa-euro-sign"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 3 -->
                                                <div class="row my-2">
                                                    <div class="col-6 col-md-6">+700 words (1.200 total)</div>
                                                    <div class="col-6 col-md-6">
                                                        <div class="input-group">
                                                            <span class="input-group-text">+</span>
                                                            <input type="text" class="form-control"
                                                                aria-label="Amount (to the nearest dollar)">
                                                            <span class="input-group-text"><i
                                                                    class="fa-solid fa-euro-sign"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">

                                            <div class="mt-3">
                                                <!-- 1 -->
                                                <div class="row mb-2">
                                                    <div class="col-6 col-md-6"><i class="fa-brands fa-facebook"></i>
                                                        https://www.facebook.com/</div>
                                                    <div class="col-6 col-md-6">
                                                        <input type="url" class="form-control"
                                                            id="exampleFormControlInput1" placeholder="Publisuites">
                                                    </div>
                                                </div>
                                                <!-- 2 -->
                                                <div class="row mb-2">
                                                    <div class="col-6 col-md-6"><i class="fa-brands fa-twitter"></i>
                                                        https://twitter.com/</div>
                                                    <div class="col-6 col-md-6">
                                                        <input type="url" class="form-control"
                                                            id="exampleFormControlInput1" placeholder="Publisuites">
                                                    </div>
                                                </div>
                                                <!-- 3 -->
                                                <div class="row mb-2">
                                                    <div class="col-6 col-md-6"><i class="fa-brands fa-linkedin"></i>
                                                        https://www.linkedin.com/</div>
                                                    <div class="col-6 col-md-6">
                                                        <input type="url" class="form-control"
                                                            id="exampleFormControlInput1"
                                                            placeholder="company/publisuites/">
                                                    </div>
                                                </div>
                                                <!-- 4 -->
                                                <div class="row mb-2">
                                                    <div class="col-6 col-md-6">Price per diffusion</div>
                                                    <div class="col-6 col-md-6">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">+</span>
                                                            <input type="text" class="form-control"
                                                                aria-label="Amount (to the nearest dollar)">
                                                            <span class="input-group-text"><i
                                                                    class="fa-solid fa-euro-sign"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 d-flex justify-content-end">
                            <button type="submit" class="btn bg-sidebar"><i class="fa-solid fa-arrow-right"></i>
                                Next</button>
                        </div>
                    </div>
                    <div class="col-0 col-md-4 col-lg-2 mt-3 h-full">
                        <div class="fw-bold">
                            <span class="bg-sidebar text-white circle-adj vertical-line-blue">1</span>
                            Enter the URL
                        </div>
                        <div class="mt-5">
                            <span class="bg-sidebar text-white circle-adj vertical-line-gray">2</span>
                            Complete the data
                        </div>
                        <div class="mt-5">
                            <span class="bg-grey text-white circle-adj vertical-line-gray">3</span>
                            Verify your website
                        </div>
                        <div class="mt-5">
                            <span class="bg-grey text-white circle-adj">4</span>
                            Finished
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- content end -->

    <!-- <script>
        // Initialize Bootstrap tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <script>
        $('#js-example-basic-hide-search-multi').select2();

        $('#js-example-basic-hide-search-multi').on('select2:opening select2:closing', function(event) {
            var $searchfield = $(this).parent().find('.select2-search__field');
            $searchfield.prop('disabled', true);
        });

        $('#js-example-basic-hide-search-multi-2').select2();

        $('#js-example-basic-hide-search-multi-2').on('select2:opening select2:closing', function(event) {
            var $searchfield = $(this).parent().find('.select2-search__field');
            $searchfield.prop('disabled', true);
        });
    </script>
@endsection
