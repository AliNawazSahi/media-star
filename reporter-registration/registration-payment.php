<?php include '../header.php';?>
<style>
.registration-payment-gif-img {
    max-width: 50%;
    margin-bottom: 20px;
}

.registration-payment-qr-img {
    max-width: 200px;
    border-radius: 1.25rem;
    margin:0;
}

#qr_payment_div {
    border-radius: 10px;
}
</style>

<section class="container my-4">
    <div class="row d-flex justify-content-center align-items-center">
        <!-- Left Div -->
        <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-justify">
            <img src="<?php echo $base_url;?>mediastar/assets/tick-gif.gif" alt="Success GIF"
                class="registration-payment-gif-img img-fluid">
            <h6 class="fw-bold text-xl text-start">आपका आवेदन सफलता पूर्वक दर्ज कर लिया गया है, 250/- रु का भुगतान करने
                के बाद उसका स्क्रीनशॉट 7691999222 पर भेजें,</h6>
            <p class="mt-3 text-start">आवेदन को पूरा करने के लिए Rs. 250/- Phone Pe/ Google Pay के माध्यम से 7489596685
                पर जमा करे एवं स्क्रीनशॉट "7691999222" पर भेजे.</p>
            <h6 class="px-2 mt-2 py-2 bg-dark text-white rounded text-center">Whatsapp Number +917691999222</h6>
        </div>
        <!-- Right Div -->
        <div class="col-md-6 pb-4 d-flex border border-danger flex-column justify-content-center align-items-center text-center"
            id="qr_payment_div">
            <img src="<?php echo $base_url;?>mediastar/assets/phonepe-icon.svg" alt="PhonePe Logo" class="phonepe-logo img-fluid w-25 mt-2">
            <p class="mb-0 mt-1" style="color:red;">Scan and Pay using Phone</p>
            <img src="<?php echo $base_url;?>mediastar/assets/qrcode.png" alt="QR Code"
                class="registration-payment-qr-img mb-3 img-fluid qr-img">
            <p style="color:red;">Mediastar PhonePe Account</p>
            <p>QR स्कैन से Application Fee जमा करे</p>
            <a class="btn btn-dark mt-3" href="esopraveen@axl" target="_blank">UPI के माध्यम से पेमेंट करने लिए क्लिक
                करे</a>
        </div>
    </div>
</section>


<?php include '../footer.php';?>