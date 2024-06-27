<?php include '../header.php';?>
<link rel="stylesheet" href="../style.css">


<section class="container-fluid m-0">
    <div class="row d-flex justify-content-center">
        <div id="card_download_container"
            class="p-5 col-md-6 d-flex flex-column justify-content-center text-light">
            <h2 class="fw-bold text-start">ID Card Download</h2>
            <p>कार्ड डाउनलोड करने के लिए अपना रजिस्टर्ड मोबाइल नंबर एवं जन्म दिनांक प्रविष्ट करे</p>
        </div>
        <div class="p-5 col-md-6">
            <form class="p-5">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="mb-3 w-100">
                        <label for="registeredMobile" class="form-label p-1">Registered Mobile Number</label>
                        <input type="text" class="form-control border-danger" id="registeredMobile"
                            placeholder="Registered Mobile Number">
                    </div>
                    <div class="mb-3 w-100">
                        <label for="dob" class="form-label p-1">Date of Birth</label>
                        <input type="date" class="form-control border-danger" id="dob">
                    </div>
                </div>
                <button type="submit" class="btn btn-dark d-flex align-items-start mb-3">Download ID Card</button>
            </form>
        </div>
    </div>
</section>



<?php include '../footer.php';?>