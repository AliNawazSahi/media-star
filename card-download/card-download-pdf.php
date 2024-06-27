<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            height: 100vh;
            background-color: #fff;
            margin: 0;
        }

        .id-card {
            width: 300px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color: #fff7f782;
            position: relative;
            border-radius: 4px;
            overflow: hidden;
        }

        .logo img {
            width: 100%;
            max-width: 100px;
            display: block;
            margin: 0 auto;
        }

        .reporter-title {
            text-align: center;
            margin: 10px 0;
        }

        .reporter-title h2 {
            margin: 0;
            color: #fff;
            font-size: 25px;
            background-color: red;
            border-radius: 7px;
            padding: 1%;
            font-weight: 800;
        }

        .reporter-title p {
            margin: 2%;
            font-size: 13px;
            color: red;
        }

        .photo {
            display: flex;
        }

        .photo img {
            height: 142px;
            border: 2px solid #ff0000;
            display: inline-block;
            border-radius: 10px;
            background-color: #e0e0e0;
        }

        #reporter_photo {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #reporter_name {
            flex: 1;
            display: inline-block;
            padding-left: 6%;
            margin-top: 18.5%;
        }

        #reporter_name h3 {
            margin: 0;
        }

        #reporter_name p {
            margin: 2% 0 0 0;
            text-align: center;
            color: #686868;
        }

        .info {
            text-align: center;
            margin-top: 20px;
            padding-left: 7%;
        }

        .info h3 {
            margin: 0;
            font-size: 18px;
        }

        .info p {
            margin: 0;
            font-size: 14px;
            color: #555;
        }

        .info table {
            width: 100%;
            margin: 10px 0;
            font-size: 14px;
            border-collapse: collapse;
        }

        .info table td {
            padding: 2px 0;
            vertical-align: top;
            text-align: start;
        }

        .qr-code {
            position: absolute;
            bottom: 100px;
            left: 50%;
            transform: translateX(-50%);
        }

        .qr-code img {
            width: 65px;
            height: 65px;
        }

        .bottom-banner {
            position: relative;
            bottom: -20px;
            width: 114%;
            height: 77px;
            background-color: #f00;
            display: flex;
            justify-content: center;
            align-items: center;
            left: -20px;
        }

        .bottom-curve {
            position: absolute;
            top: -24px;
            left: 0;
            width: 100%;
            height: 51px;
            background-color: #fff6f6;
            border-bottom-left-radius: 50%;
            border-bottom-right-radius: 50%;
            z-index: 2;
            border-bottom: 2px solid blue;
            border-top-left-radius: 43%;
            border-top-right-radius: 43%;
        }

        .bottom-content {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            width: 90%;
            z-index: 2;
            color: #fff;
            font-size: 14px;
            margin-bottom: 6%;
        }

        .bottom-content p {
            margin: 0;
        }

        .bottom-content img {
            width: 60px;
            height: 60px;
        }

        #bottom_content_back {
            display: block;
            text-align: center;
            margin: 7% 0 0 0;
        }

        #bottom_content_back p {
            font-size: 1.5rem;
        }

        #term_conditions p {
            margin: 0;
            font-size: 13.9px;
        }

        .contact-info {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .contact-item svg {
            width: 20px;
            height: 20px;
            fill: red;
            margin-right: 10px;
        }

        .contact-item:last-child {
            margin-bottom: 0;
        }

        .contact-text {
            font-size: 14px;
            color: #333;
        }

        .contact-text a {
            color: #333;
            text-decoration: none;
        }

        .contact-text a:hover {
            text-decoration: underline;
        }

        #contact_info {
            margin: 2.2%;
            padding-left: 18%;
        }
    </style>
</head>

<body id="invoice">

    <div class="id-card" id="card_front_side">
        <div class="logo">
            <img src="http://localhost/mediastar/assets/mediastar-logo.jpg" alt="ABB News Live Logo">
        </div>
        <div class="reporter-title">
            <h2>REPORTER</h2>
            <p>UDYAM-CG-14-0058352</p>
        </div>
        <div class="photo">
            <div id="reporter_photo">
                <img src="http://localhost/mediastar/assets/profile-photo-demo.jpg" alt="Reporter Photo">
            </div>
            <div id="reporter_name">
                <h3>DINESHKUMAR</h3>
                <p>Reporter</p>
            </div>
        </div>
        <div class="info">
            <table>
                <tr>
                    <td><b>ID No.</b></td>
                    <td>:&nbsp;&nbsp;&nbsp; ABB/2023/01</td>
                </tr>
                <tr>
                    <td><b>Phone</b></td>
                    <td>:&nbsp;&nbsp;&nbsp; 08329147068</td>
                </tr>
                <tr>
                    <td><b>Aadhar No.</b></td>
                    <td>:&nbsp;&nbsp;&nbsp; 796023638460</td>
                </tr>
                <tr>
                    <td><b>Work Area</b></td>
                    <td>:&nbsp;&nbsp;&nbsp; Jhansi/Jalaun</td>
                </tr>
                <tr>
                    <td><b>State</b></td>
                    <td>:&nbsp;&nbsp;&nbsp; Uttar Pradesh</td>
                </tr>
            </table>
        </div>
        <div class="bottom-banner">
            <div class="bottom-curve"></div>
            <div class="bottom-content">
                <p>Expiry: 01-Dec-2024</p>
                <img src="http://localhost/mediastar/assets/qrcode.png" alt="QR Code">
            </div>
        </div>
    </div>


    <br><br><br>

    <div class="id-card" id="card_back_side">
        <div class="logo">
            <img src="http://localhost/mediastar/assets/mediastar-logo.jpg" alt="ABB News Live Logo">
        </div>
        <div class="reporter-title">
            <h2>Terms & Conditions</h2>
        </div>
        <div id="term_conditions">
            <p>&bull; This card is non-transferable.</p>
            <p>&bull; In case of lost please contact our office &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                address or Nearest Police Station.</p>

            <p> &bull; If the card holder is involved in any kind of &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; illegel,
                criminal or anti-social activity. Card is &nbsp; &nbsp;&nbsp; &nbsp; cancelled immediately and that
                person is only &nbsp; &nbsp; responsible for all this.</p>

            <p> &bull; Card holder use this card only for news &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                collection.</p>
            <p> &bull; Mediastar is not responsible for any anti social &nbsp; or criminal activity done by card holder.
            </p>
        </div>
        <div id="contact_info">
            <div class="contact-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path
                        d="M12 0C7.34 0 3 4.34 3 9c0 5.25 8.4 14.55 8.69 14.88a1 1 0 0 0 1.31 0C12.6 23.55 21 14.25 21 9c0-4.66-4.34-9-9-9zm0 13c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z" />
                </svg>

                <div class="contact-text">
                    Pankaj Vikram parishar,<br>Shailendra Nagar Raipur Chhattisgarh.492001
                </div>
            </div>
            <div class="contact-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                </svg>

                <div class="contact-text">
                    <a href="mailto:deekay826@gmail.com">deekay826@gmail.com</a>
                </div>
            </div>
            <div class="contact-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M6.62 10.79a15.533 15.533 0 0 0 6.59 6.59l2.2-2.2a1.99 1.99 0 0 1 2.01-.44c1.12.37 2.33.56 3.58.56.77 0 1.39.62 1.39 1.39V20a1.39 1.39 0 0 1-1.39 1.39c-9.94 0-18-8.06-18-18A1.39 1.39 0 0 1 4 2.61H6.61c.77 0 1.39.62 1.39 1.39 0 1.25.19 2.46.56 3.58a1.99 1.99 0 0 1-.44 2.01l-2.2 2.2z" />
                </svg>
                <div class="contact-text">
                    <a href="tel:+917000085758">+91 70000 85758</a>
                </div>
            </div>
        </div>
        <div class="bottom-banner" id="bottom_banner_back">
            <div class="bottom-curve" id="bottom_curve_back"></div>
            <div class="bottom-content" id="bottom_content_back">
                <b>
                    <p>https:mediastart11.com</p>
                </b>

            </div>
        </div>
    </div>

    <!-- <button id="downloadBtn">
        Download PDF
    </button> -->

    <script>

        window.onload = function () {
            document.getElementById('downloadBtn')
                .addEventListener("click", () => {

                    const invoice = this.document.getElementById('invoice');

                    html2pdf().from(invoice).save();

                })
        }

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.js"></script>

</body>

</html>