<section>

    <!-- Floating Button -->
    <div class="fixed bottom-28 right-2 z-20">
        <button onclick="togglePopup()" class="inline-flex items-center justify-center px-6 py-4 bg-gradient-to-r from-blue-500 to-blue-700 text-white font-semibold text-sm sm:text-base md:text-lg rounded-full shadow-md hover:bg-blue-800 transition-all duration-300 transform hover:scale-105">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 sm:w-6 sm:h-6 md:w-7 md:h-7 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            New Account Set Up
        </button>
    </div>

    <!-- Popup Modal -->
    <div id="popupModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50 overflow-y-auto md:p-4 transition-opacity duration-300 ease-out" aria-hidden="true" role="dialog" aria-labelledby="popupTitle">
        <div class="w-full max-w-6xl relative transform transition-transform duration-300 ease-out scale-95 lg:mt-[20%] md:mt-[90%] mt-[1550px]">

            <!-- Form Section -->
            <div class="bg-white rounded-lg shadow-lg w-full max-w-6xl md:p-8 p-8 relative transform transition-transform duration-300 ease-out scale-95 md:mt-[30%]">
                <!-- Close Button -->
                <button onclick="togglePopup()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <h2 id="popupTitle" class="md:text-2xl text-2xl font-bold text-gray-800 mb-4 text-center">Set Up Your Account for Trial Case and <br> Get Your few First Design Free!</h2>
                <p class="text-gray-600 text-center mb-8">Register Your Account</p>

                <!-- Form -->
                <form class="flex flex-wrap gap-6" id="samplerequest">
                    <!-- Name, Email, Phone in one line -->
                    <div class="w-full md:flex md:space-x-6 flex-col md:flex-row">
                        <div class="w-full md:w-1/3">
                            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                            <input type="text" id="name" name="name" placeholder="Enter your name" required
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm">
                        </div>

                        <div class="w-full md:w-1/3">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email address" required
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm">
                        </div>

                        <div class="w-full md:w-1/3">
                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                            <div class="flex flex-col md:flex-row mt-1 space-y-2 md:space-y-0 md:space-x-2">
                                <!-- Country Code Dropdown -->
                                <select id="country-code" name="country-code" required
                                    class="p-3 border border-gray-300 rounded-l-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm w-full md:w-[30%]">
                                    <!-- Options will be dynamically added by JavaScript -->
                                </select>

                                <!-- Phone Number Input -->
                                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required
                                    class="flex-1 p-3 border-t border-b border-r border-gray-300 rounded-r-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm w-full">
                            </div>
                        </div>

                        <script>
                            // Array of country codes and names
                            const countryCodes = [{
                                    code: "+1",
                                    name: "USA"
                                },
                                {
                                    code: "+7",
                                    name: "Russia"
                                },
                                {
                                    code: "+20",
                                    name: "Egypt"
                                },
                                {
                                    code: "+27",
                                    name: "South Africa"
                                },
                                {
                                    code: "+30",
                                    name: "Greece"
                                },
                                {
                                    code: "+31",
                                    name: "Netherlands"
                                },
                                {
                                    code: "+32",
                                    name: "Belgium"
                                },
                                {
                                    code: "+33",
                                    name: "France"
                                },
                                {
                                    code: "+34",
                                    name: "Spain"
                                },
                                {
                                    code: "+36",
                                    name: "Hungary"
                                },
                                {
                                    code: "+39",
                                    name: "Italy"
                                },
                                {
                                    code: "+40",
                                    name: "Romania"
                                },
                                {
                                    code: "+41",
                                    name: "Switzerland"
                                },
                                {
                                    code: "+43",
                                    name: "Austria"
                                },
                                {
                                    code: "+44",
                                    name: "UK"
                                },
                                {
                                    code: "+45",
                                    name: "Denmark"
                                },
                                {
                                    code: "+46",
                                    name: "Sweden"
                                },
                                {
                                    code: "+47",
                                    name: "Norway"
                                },
                                {
                                    code: "+48",
                                    name: "Poland"
                                },
                                {
                                    code: "+49",
                                    name: "Germany"
                                },
                                {
                                    code: "+51",
                                    name: "Peru"
                                },
                                {
                                    code: "+52",
                                    name: "Mexico"
                                },
                                {
                                    code: "+53",
                                    name: "Cuba"
                                },
                                {
                                    code: "+54",
                                    name: "Argentina"
                                },
                                {
                                    code: "+55",
                                    name: "Brazil"
                                },
                                {
                                    code: "+56",
                                    name: "Chile"
                                },
                                {
                                    code: "+57",
                                    name: "Colombia"
                                },
                                {
                                    code: "+58",
                                    name: "Venezuela"
                                },
                                {
                                    code: "+60",
                                    name: "Malaysia"
                                },
                                {
                                    code: "+61",
                                    name: "Australia"
                                },
                                {
                                    code: "+62",
                                    name: "Indonesia"
                                },
                                {
                                    code: "+63",
                                    name: "Philippines"
                                },
                                {
                                    code: "+64",
                                    name: "New Zealand"
                                },
                                {
                                    code: "+65",
                                    name: "Singapore"
                                },
                                {
                                    code: "+66",
                                    name: "Thailand"
                                },
                                {
                                    code: "+81",
                                    name: "Japan"
                                },
                                {
                                    code: "+82",
                                    name: "South Korea"
                                },
                                {
                                    code: "+84",
                                    name: "Vietnam"
                                },
                                {
                                    code: "+90",
                                    name: "Turkey"
                                },
                                {
                                    code: "+92",
                                    name: "Pakistan"
                                },
                                {
                                    code: "+93",
                                    name: "Afghanistan"
                                },
                                {
                                    code: "+94",
                                    name: "Sri Lanka"
                                },
                                {
                                    code: "+95",
                                    name: "Myanmar"
                                },
                                {
                                    code: "+98",
                                    name: "Iran"
                                },
                                {
                                    code: "+212",
                                    name: "Morocco"
                                },
                                {
                                    code: "+213",
                                    name: "Algeria"
                                },
                                {
                                    code: "+216",
                                    name: "Tunisia"
                                },
                                {
                                    code: "+218",
                                    name: "Libya"
                                },
                                {
                                    code: "+971",
                                    name: "UAE"
                                },
                                {
                                    code: "+972",
                                    name: "Israel"
                                }
                            ];

                            // Function to populate the dropdown dynamically
                            function populateCountryCodes() {
                                const selectElement = document.getElementById('country-code');

                                // Clear any existing options
                                selectElement.innerHTML = '';

                                // Add options dynamically
                                countryCodes.forEach(country => {
                                    const option = document.createElement('option');
                                    option.value = country.code;
                                    option.textContent = `${country.code} (${country.name})`;
                                    selectElement.appendChild(option);
                                });
                            }

                            // Call the function on page load
                            document.addEventListener('DOMContentLoaded', populateCountryCodes);
                        </script>


                    </div>


                    <div class="w-full md:flex md:space-x-6 flex-col md:flex-row">
                        <div class="w-full md:w-1/1">
                            <label for="phone" class="block text-sm font-medium text-gray-700">Lab or Clinic Name</label>
                            <input type="text" id="clinic" name="clinic" placeholder=" Enter the name of your lab or clinic" required
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm">
                        </div>

                        <div class="w-full md:w-1/1">
                            <label for="country" class="block text-sm font-medium text-gray-700">Your Country</label>
                            <select id="country" name="country" required
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm">
                                <!-- Options will be dynamically added by JavaScript -->
                            </select>
                        </div>

                        <script>
                            // Array of all country names
                            const countries = [
                                "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia",
                                "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium",
                                "Belize", "Benin", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria",
                                "Burkina Faso", "Burundi", "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Central African Republic", "Chad",
                                "Chile", "Colombia", "Comoros", "Congo (Congo-Brazzaville)", "Costa Rica", "Croatia", "Cuba", "Cyprus",
                                "Czechia (Czech Republic)", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt",
                                "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini (fmr. \"Swaziland\")", "Ethiopia",
                                "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada",
                                "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Holy See", "Honduras", "Hungary", "Iceland",
                                "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan",
                                "Kenya", "Kiribati", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya",
                                "Liechtenstein", "Lithuania", "Luxembourg", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta",
                                "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia",
                                "Montenegro", "Morocco", "Mozambique", "Myanmar (formerly Burma)", "Namibia", "Nauru", "Nepal",
                                "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea", "North Macedonia (formerly Macedonia)",
                                "Norway", "Oman", "Pakistan", "Palau", "Palestine State", "Panama", "Papua New Guinea", "Paraguay", "Peru",
                                "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis",
                                "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe",
                                "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia",
                                "Solomon Islands", "Somalia", "South Africa", "South Korea", "South Sudan", "Spain", "Sri Lanka", "Sudan",
                                "Suriname", "Sweden", "Switzerland", "Syria", "Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo",
                                "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine",
                                "United Arab Emirates", "United Kingdom", "United States of America", "Uruguay", "Uzbekistan", "Vanuatu",
                                "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
                            ];

                            // Exclude specific countries
                            const excludedCountries = ["India", "China"];

                            // Filter out excluded countries
                            const filteredCountries = countries.filter(country => !excludedCountries.includes(country));

                            // Function to populate the dropdown
                            function populateCountryDropdown() {
                                const countrySelect = document.getElementById('country');

                                // Clear existing options
                                countrySelect.innerHTML = '';

                                // Add a default placeholder option
                                const placeholderOption = document.createElement('option');
                                placeholderOption.value = '';
                                placeholderOption.textContent = 'Select your country';
                                placeholderOption.disabled = true;
                                placeholderOption.selected = true;
                                countrySelect.appendChild(placeholderOption);

                                // Add filtered countries to the dropdown
                                filteredCountries.forEach(country => {
                                    const option = document.createElement('option');
                                    option.value = country;
                                    option.textContent = country;
                                    countrySelect.appendChild(option);
                                });
                            }

                            // Call the function on page load
                            document.addEventListener('DOMContentLoaded', populateCountryDropdown);
                        </script>

                    </div>

                    <!-- Service You Need -->
                    <div class="w-full mt-6">
                        <label for="services" class="block text-sm font-medium text-gray-700 mb-3">Select the services you need</label>
                        <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="service1" value="Crown and Bridge" class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                                <span class="text-gray-700">Crown & Bridge</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="service2" value="Temp Crown and Bridge" class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                                <span class="text-gray-700">Temp Crown & Bridge</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="service3" value="Partial Denture" class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                                <span class="text-gray-700">Partial Denture</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="service4" value="Full Denture" class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                                <span class="text-gray-700">Full Denture</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="service5" value="Model" class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                                <span class="text-gray-700">Models</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="service6" value="Implant Prosthetics" class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                                <span class="text-gray-700">Implant Prosthetics</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="service7" value="Smile Makeover Design" class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                                <span class="text-gray-700">Smile Makeover Design</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="service8" value="Clear Aligners" class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                                <span class="text-gray-700">Clear Aligners</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="service9" value="Bite Splints and Night Guards" class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                                <span class="text-gray-700">Bite Splints and Night Guards</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="service10" value="Custom Requests" class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                                <span class="text-gray-700">Custom Requests</span>
                            </label>
                        </div>
                    </div>


                    <!-- Default Preference -->
                    <div class="w-full mt-6 space-y-8">
                        <label for="services" class="block text-lg font-semibold text-gray-800">Default Preferences</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <!-- Contact Value -->
                            <div>
                                <label for="contact-value" class="block text-sm font-medium text-gray-700">
                                    Contact Value
                                </label>
                                <p class="text-xs text-gray-500 mb-2">(Specify contact tightness or fit preferences.)</p>
                                <input type="text" id="contact-value" name="contact-value" placeholder="Enter Contact Value or Type"
                                    class="mt-1 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm"
                                    required>
                            </div>

                            <!-- Occlusion Value -->
                            <div>
                                <label for="occlusion-value" class="block text-sm font-medium text-gray-700">
                                    Occlusion Value
                                </label>
                                <p class="text-xs text-gray-500 mb-2">(Share occlusal value or specifications.)</p>
                                <input type="text" id="occlusion-value" name="occlusion-value" placeholder="Enter Occlusion Value or Type"
                                    class="mt-1 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm"
                                    required>
                            </div>

                            <!-- Anatomy -->
                            <div>
                                <label for="anatomy" class="block text-sm font-medium text-gray-700">
                                    Anatomy Type
                                </label>
                                <p class="text-xs text-gray-500 mb-2">(Match with adjacent, primary, or secondary anatomy.)</p>
                                <input type="text" id="anatomy" name="anatomy" placeholder="Enter Anatomy Type"
                                    class="mt-1 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm"
                                    required>
                            </div>
                        </div>

                        <div class="w-full md:flex md:space-x-6 flex-col md:flex-row">
                            <!-- Pontic Types -->
                            <div class="w-full md:w-1/1">
                                <label for="pontic-types" class="block text-sm font-medium text-gray-700">
                                    Pontic Types
                                </label>
                                <p class="text-xs text-gray-500 mb-2">(Indicate the type of pontics needed for your design.)</p>
                                <input type="text" id="pontic-types" name="pontic-types" placeholder="Enter pontic type preferences"
                                    class="mt-1 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm"
                                    required>
                            </div>

                            <!-- Design Types -->
                            <div class="w-full md:w-1/1">
                                <label for="design-types" class="block text-sm font-medium text-gray-700">
                                    Design Types
                                </label>
                                <p class="text-xs text-gray-500 mb-2">(Provide design instructions or specific preferences.)</p>
                                <input type="text" id="design-types" name="design-types" placeholder="Enter design preferences"
                                    class="mt-1 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm"
                                    required>
                            </div>
                        </div>

                        <!-- Additional Requirements -->
                        <div>
                            <label for="additional-requirements" class="block text-sm font-medium text-gray-700">
                                Additional Requirements
                            </label>
                            <p class="text-xs text-gray-500 mb-2">(If unsure, describe your needs, and we'll assist you with the rest.)</p>
                            <textarea id="additional-requirements" name="additional-requirements" rows="4"
                                class="mt-1 block w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm"
                                placeholder="Enter any additional requirements..."></textarea>
                        </div>
                    </div>



                    <!-- You Are -->
                    <div class="w-full mt-6">
                        <label for="youAre" class="block text-sm font-medium text-gray-700 mb-3">We only work with dental professionals. <br> Choose one:</label>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="need1" value="Dentist" class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                                <span class="text-gray-700">Dentist</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="need2" value="Dental Clinic" class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                                <span class="text-gray-700">Dental Clinic</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="need3" value="Dental Lab" class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                                <span class="text-gray-700">Dental Lab</span>
                            </label>
                        </div>
                    </div>

                    <!-- Consent -->
                    <div class="w-full mt-6">
                        <label class="flex items-start space-x-2">
                            <input type="checkbox" name="user_permission" required
                                class="h-5 w-5 text-green-500 border-gray-300 rounded focus:ring-green-500">
                            <span class="text-gray-700">I consent to have this website store my submitted information so they can respond to my inquiry.</span>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <div class="w-full mt-6 text-center">
                        <?php
                        echo view('LoaderGif');
                        ?>
                        <button type="submit" id="sendrequest"
                            class="px-6 py-3 bg-green-500 text-white font-semibold rounded-lg shadow-lg hover:bg-green-600 focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                            Submit Your Request
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    echo view('PopupModal');
    ?>

</section>

<script>
    // Toggle popup visibility
    function togglePopup() {
        const popup = document.getElementById("popupModal");
        popup.classList.toggle("hidden");
    }

    // Show/Hide Popup Every 2 Seconds
    // document.addEventListener("DOMContentLoaded", () => {
    //     setTimeout(() => {
    //         const popup = document.getElementById("popupModal");
    //         if (popup.classList.contains("hidden")) {
    //             popup.classList.remove("hidden");
    //         }
    //     }, 10000);
    // });

    window.openModal = function(modalId) {
        document.getElementById(modalId).style.display = 'block'
        document.getElementsByTagName('body')[0].classList.add('overflow-y-hidden')
    }

    window.closeModal = function(modalId) {
        document.getElementById(modalId).style.display = 'none'
        document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
    }


    $(document).ready(function() {
        $('#samplerequest').submit(function(e) {
            e.preventDefault();
            $('#loader').removeClass('hidden');
            $('#sendrequest').addClass('hidden');

            let form = this;
            const form_data = new FormData(form);
            const formobject = {};


            form_data.forEach((value, key) => {
                formobject[key] = value;
            });


            $.ajax({
                url: "<?php echo base_url('sampleRequest'); ?>",
                type: "POST",
                data: JSON.stringify(formobject),
                contentType: "application/json",
                success: function(response) {
                    $('#loader').addClass('hidden');
                    $("#samplerequest")[0].reset();

                    const popup = document.getElementById("popupModal");
                    popup.classList.toggle("hidden");

                    if (response.status === 'success') {
                        $('#modelConfirm').removeClass('hidden');
                        $('#sendrequest').removeClass('hidden');
                        setInterval(function() {
                            $('#modelConfirm').addClass('hidden');
                        }, 10000);
                    }
                },
                error: function(xhr, error) {
                    $('#sendrequest').prop('disabled', false);
                }
            });
        });
    });
</script>