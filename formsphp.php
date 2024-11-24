<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            margin:10px;
            
        }
        body{
            display: flex;
            justify-content: center;
        }
        form{
            width: 100%;
            display: flex;
            flex-direction: column;
        }
        #formdiv{
            display: flex;
            flex-direction: column;
            width: 25%;
            border: solid 2px green;
            padding: 15px;
            border-radius: 10px;
            background-color: rgb(235, 235, 235);
        }
        label{
            width: 100%;
        }
        button{
            margin: 15px 0px 0px 0px;
            background-color: green;
            color: white;
            font-weight: bold;
            border: black solid 3px;
            border-radius: 10px;
            max-width: 100px;
            width: 50%;
            height: 30px;
            
            padding: 20px;
            text-align: center;
            padding: none;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .buttonwrap{

            display: flex;
            justify-content: center;
        }
        #passdesc{
            font-size: small;
        }
        #outputdiv{
            display: flex;
            flex-direction: column;
            width: 35%;
            border: solid 2px green;
            padding: 15px;
            border-radius: 10px;
            background-color: rgb(235, 235, 235);
            margin-left: 15px;
        }
    </style>
    <script>
        

        function validate(){
            let good = true;
            let name = /^[A-Za-zÀ-ÿĄąĆćĘęŁłŃńÓóŚśŹźŻż]+$/;
            let street = /^[A-Za-zÀ-ÿ0-9\s,.'/-ĄąĆćĘęŁłŃńÓóŚśŹźŻż]+$/;
            let dom = /^[A-Za-z0-9]+$/
            let numer = /^\d{9}$/
            let password = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*(),.?":{}|<>]).{8,}$/
            let city = /^[A-Za-zÀ-ÿ\s-ĄąĆćĘęŁłŃńÓóŚśŹźŻż]+$/

            document.getElementById("imie").style.border = "";
            document.getElementById("nazwisko").style.border = "";
            document.getElementById("ulica").style.border = "";
            document.getElementById("dom").style.border = "";
            document.getElementById("mieszkanie").style.border = "";
            document.getElementById("haslo").style.border = "";
            document.getElementById("miasto").style.border = "";
            document.getElementById("plecdiv").style.border = "";

            if(!name.test(document.getElementById("imie").value)){
                good = false;
                document.getElementById("imie").style.border = "red solid 3px";
            }

            if(!name.test(document.getElementById("nazwisko").value)){
                good = false;
                document.getElementById("nazwisko").style.border = "red solid 3px";
            }

            if(!street.test(document.getElementById("ulica").value)){
                good = false;
                document.getElementById("ulica").style.border = "red solid 3px";
            }

            if(!dom.test(document.getElementById("dom").value)){
                good = false;
                document.getElementById("dom").style.border = "red solid 3px";
            }


            if(!numer.test(document.getElementById("telefon").value)){
                good = false;
                document.getElementById("telefon").style.border = "red solid 3px";
            }

            if(!password.test(document.getElementById("haslo").value)){
                good = false;
                document.getElementById("haslo").style.border = "red solid 3px";
            }

            if(!city.test(document.getElementById("miasto").value)){
                good = false;
                document.getElementById("miasto").style.border = "red solid 3px";
            }

            if(!(document.getElementById("m").checked || document.getElementById("k").checked || document.getElementById("i").checked)){
                good = false;
                document.getElementById("plecdiv").style.border = "red solid 3px";
            }

            
            if(good){
                //if(!alert('Wysłano!')){
                    //window.location.reload();
                    document.getElementById("formularz").submit();
                //}
            }
        }

    </script>
</head>
<body>
    <div id="formdiv">
        <form id="formularz" method="post" action="">

        <label for="imie">Imie</label>
        <input type="text" id="imie" name="imie" value="Jarosław">
        <!--<br>-->

        <label for="nazwisko">Nazwisko</label>
        <input type="text" id="nazwisko" name="nazwisko" value="Kowalski">
        <!--<br>-->

        <label for="ulica">Ulica</label>
        <input type="text" id="ulica" name="ulica" value="Piękna">
        <!--<br>-->

        <label for="dom">Dom</label>
        <input type="text" id="dom" name="dom" value="14">
        <!--<br>-->
        
        <label for="mieszkanie">Mieszkanie</label>
        <input type="text" id="mieszkanie" name="mieszkanie" value="5">
        <!--<br>-->

        <label for="telefon">Telefon</label>
        <input type="number" id="telefon" name="telefon" max="999999999" value="884828798">
        <!--<br>-->
        
        <label for="dataur">Data urodzenia</label>
        <input type="date" id="dataur" name="dataur" value="2000-01-01">
        <!--<br>-->
        <script>
            var today = new Date().toISOString().split('T')[0];
            document.getElementById("dataur").setAttribute('max', today);
        </script>

        <label for="prawo">Czy posiadasz prawo jazdy?</label>
        <div>
        <input type="checkbox" id="prawo" name="prawo" checked="checked">Tak
        </div>
        <!--<br>-->

        <label for="haslo">Hasło</label>
        <input type="password" id="haslo" name="haslo" value="TrudneHaslo!23">
        <!--<br>-->
        <div id="passdesc">
            <ul>
                <li>Conjamniej 8 znaków</li>
                <li>Conjamniej 1 duża litera</li>
                <li>Conjamniej 1 mała litera</li>
                <li>Conajmniej 1 cyfra</li>
                <li>Conjamniej 1 znak specjalny</li>
            </ul>
        </div>

        <label for="plec">Płeć</label>
        <div id="plecdiv">
        <input type="radio" id="m" name="plec" value="mężczyzna">Mężczyzna
        <input type="radio" id="k" name="plec" value="kobieta" checked="checked">Kobieta
        <input type="radio" id="i" name="plec" value="inne">Inne
        </div>
        <!--<br>-->

        <label for="miasto">Miasto</label>
        <input type="text" id="miasto" name="miasto" value="Lądek Zdrój">
        <!--<br>-->

        <label for="kraj">Kraj</label>
        <select id="country" name="country" class="form-control">
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
            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
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
            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
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
            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
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
            <option value="Guinea-bissau">Guinea-bissau</option>
            <option value="Guyana">Guyana</option>
            <option value="Haiti">Haiti</option>
            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
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
            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
            <option value="Korea, Republic of">Korea, Republic of</option>
            <option value="Kuwait">Kuwait</option>
            <option value="Kyrgyzstan">Kyrgyzstan</option>
            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
            <option value="Latvia">Latvia</option>
            <option value="Lebanon">Lebanon</option>
            <option value="Lesotho">Lesotho</option>
            <option value="Liberia">Liberia</option>
            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
            <option value="Liechtenstein">Liechtenstein</option>
            <option value="Lithuania">Lithuania</option>
            <option value="Luxembourg">Luxembourg</option>
            <option value="Macao">Macao</option>
            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
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
            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
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
            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
            <option value="Panama">Panama</option>
            <option value="Papua New Guinea">Papua New Guinea</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Peru">Peru</option>
            <option value="Philippines">Philippines</option>
            <option value="Pitcairn">Pitcairn</option>
            <option value="Poland" selected="selected">Poland</option>
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
            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
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
            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
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
            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
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
            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
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
        <!--<br>-->
        
        </form>
        <div class="buttonwrap">
            <button onclick="validate()">Zatwierdź</button>
        </div>

    </div>
    <div id="outputdiv">
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $imie = htmlspecialchars(string: $_POST['imie']);
                $nazwisko = htmlspecialchars(string: $_POST['nazwisko']);
                $ulica = htmlspecialchars(string: $_POST['ulica']);
                $dom = htmlspecialchars(string: $_POST['dom']);
                $mieszkanie = htmlspecialchars(string: $_POST['mieszkanie']);
                $telefon = htmlspecialchars(string: $_POST['telefon']);
                $dataur = htmlspecialchars(string: $_POST['dataur']);
                $prawo = htmlspecialchars(string: $_POST['prawo']);
                $haslo = htmlspecialchars(string: $_POST['haslo']);
                $plec = htmlspecialchars(string: $_POST['plec']);
                $miasto = htmlspecialchars(string: $_POST['miasto']);
                $country = htmlspecialchars(string: $_POST['country']);

                echo "<p><strong>Imię:</strong> " . $imie . "</p>";
                echo "<p><strong>Nazwisko:</strong> " . $nazwisko . "</p>";
                echo "<p><strong>Ulica:</strong> " . $ulica . "</p>";
                echo "<p><strong>Dom:</strong> " . $dom . "</p>";
                echo "<p><strong>Mieszkanie:</strong> " . $mieszkanie . "</p>";
                echo "<p><strong>Numer telefonu:</strong> " . $telefon . "</p>";
                echo "<p><strong>Data urodzenia:</strong> " . $dataur . "</p>";
                echo "<p><strong>Czy posiadasz prawo jazdy?:</strong> ";
                if($prawo == 'on'){
                    echo "tak";
                }
                else{
                    echo "nie";
                }
                echo "</p>";
                echo "<p><strong>Hasło:</strong> " . $haslo . "</p>";

                
                echo "<p><strong>Płeć:</strong> " . $plec . "</p>";
                echo "<p><strong>Miasto:</strong> " . $miasto . "</p>";
                echo "<p><strong>Kraj:</strong> " . $country . "</p>";


                echo "<p><a href='formsphp.php'>Wprowadź ponownie</a></p>";

            } else {
                echo "<p>Wypełnij formularz.</p>";
            }
            
        ?>
    </div>
</body>
</html>