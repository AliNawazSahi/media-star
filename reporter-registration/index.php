<?php include '../header.php';?>
<link rel="stylesheet" href="../style.css">
<section class="container-fluid m-0">
    <div class="row">
        <div id="reporter_registration_left_container" class="col-md-6 d-flex flex-column justify-content-center align-items-center text-center">
            <h2 class="text-light fw-bold">Reporter Registration</h2>
            <p class="text-light">जुड़िये भारत के तेज़ी बढ़ते हुए न्यूज़ नेटवर्क से...</p>
            <p class="bg-light rounded p-2"><strong>फॉर्म केवल इंग्लिश में भरे!</strong></p>
        </div>
        <div class="col-md-6 py-3 px-4 ">
        <form method="POST" enctype="multipart/form-data" action="form-submit.php">
                <!-- Your form fields remain the same -->
                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <label for="firstName" class="form-label">First Name</label>
                        <input required type="text" class="form-control border-danger" id="firstName" name="firstName" placeholder="First Name">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input required type="text" class="form-control border-danger" id="lastName" name="lastName" placeholder="Last Name">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="fatherName" class="form-label">Father's Name</label>
                    <input required type="text" class="form-control border-danger" id="fatherName" name="fatherName" placeholder="Father's Name">
                </div>

                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <label class="form-label">Gender</label>
                        <div class="d-flex justify-content-center rounded py-1 flex-wrap border border-danger">
                            <div class="form-check me-3">
                                <input required class="form-check-input" type="radio" name="gender" id="male" value="male">
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check me-3">
                                <input required class="form-check-input" type="radio" name="gender" id="female" value="female">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                            <div class="form-check">
                                <input required class="form-check-input" type="radio" name="gender" id="other" value="other">
                                <label class="form-check-label" for="other">Other</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="date_of_birth" class="form-label">Date of Birth</label>
                        <input required type="date" class="form-control border-danger" id="date_of_birth" name="date_of_birth">
                    </div>
                </div>
                <hr class="border border-danger border-1 mb-2 opacity-100 m-0">
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea required class="form-control border-danger" id="address" name="address" rows="3"></textarea>
                </div>

                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <label for="state" class="form-label">State</label>
                        <select required class="form-select border-danger" id="state" name="state">
                            <option selected>Choose...</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="city" class="form-label">City</label>
                        <select required class="form-select border-danger" id="city" name="city">
                            <option selected>Choose...</option>
                        </select>
                    </div>
                </div>

                <input type="hidden" id="stateName" name="stateName">
                <input type="hidden" id="cityName" name="cityName">

                <div class="row mb-3">
                    <div class="col-12 col-md-4">
                        <label for="pincode" class="form-label">Pincode</label>
                        <input required type="text" class="form-control border-danger" id="pincode" name="pincode" placeholder="Pincode">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="mobileNumber" class="form-label">Mobile Number</label>
                        <input required type="text" class="form-control border-danger" id="mobileNumber" name="mobileNumber" placeholder="Mobile Number">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="email" class="form-label">Email</label>
                        <input required type="email" class="form-control border-danger" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <hr class="border border-danger border-1 mb-2 opacity-100 m-0">
                <div class="mb-3">
                    <label for="photo" class="form-label">Upload Photo</label>
                    <input required class="form-control border-danger" type="file" id="photo" name="photo">
                </div>

                <hr class="border border-danger border-1 mb-3 opacity-100 m-0">

                <div class="mb-3 form-check">
                    <input required type="checkbox" class="form-check-input" id="terms">
                    <label class="form-check-label" for="terms">I accept the terms and conditions</label>
                </div>

                <button type="submit" class="btn btn-dark" name="submit">Register</button>
            </form>
        </div>
    </div>
</section>

<?php include '../footer.php';?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const stateSelect = document.getElementById('state');
    const citySelect = document.getElementById('city');
    const stateNameInput = document.getElementById('stateName');
    const cityNameInput = document.getElementById('cityName');
    const apiKey = 'TU1pd3JTbVVZbmFBeWpoTEtBVGhGUzhyZmYwZlNwek9NWHNQQ1FUeA=='; // Correct API key

    // Fetch states from the API
    fetch('https://api.countrystatecity.in/v1/countries/IN/states', {
        method: 'GET',
        headers: {
            'X-CSCAPI-KEY': apiKey
        }
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
    })
    .then(data => {
        if (!Array.isArray(data)) {
            throw new Error('Expected data to be an array');
        }
        data.forEach(state => {
            const option = document.createElement('option');
            option.value = state.iso2;
            option.textContent = state.name;
            stateSelect.appendChild(option);
        });
    })
    .catch(error => console.error('Error fetching states:', error));

    // Fetch cities based on selected state
    stateSelect.addEventListener('change', function() {
        const stateCode = stateSelect.value;
        const stateName = stateSelect.options[stateSelect.selectedIndex].text;
        stateNameInput.value = stateName; // Set the hidden state name field

        // Clear previous cities
        citySelect.innerHTML = '<option selected>Choose...</option>';

        fetch(`https://api.countrystatecity.in/v1/countries/IN/states/${stateCode}/cities`, {
            method: 'GET',
            headers: {
                'X-CSCAPI-KEY': apiKey
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            if (!Array.isArray(data)) {
                throw new Error('Expected data to be an array');
            }
            data.forEach(city => {
                const option = document.createElement('option');
                option.value = city.id;
                option.textContent = city.name;
                citySelect.appendChild(option);
            });
        })
        .catch(error => console.error('Error fetching cities:', error));
    });

    citySelect.addEventListener('change', function() {
        const cityName = citySelect.options[citySelect.selectedIndex].text;
        cityNameInput.value = cityName; // Set the hidden city name field
    });
});



</script>
