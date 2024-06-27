<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cover Letter</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.js"></script>
    <style>
    * {
        margin: 0;
        padding: 0;
    }

    .custom-border-div {
        border: 14px solid #3737c4;
        border-bottom: 2px solid white;
        border-radius: 20px;
        margin-top: 20px;
        height: 35vh;
    }

    .main {
        padding: 0;
    }

    .inner-main {
        width: 100%;
    }

    .text-main {
        width: 95%;
    }

    .mediastar-logo {
        margin-right: 15%;
        opacity: 0.5;
    }

    .footer {
        padding: 0;
    }

    .paragraph {
        color: black;
    }
    </style>

</head>

<body class="w-100 d-flex flex-column ">
    <!-- <button class="btn-primary" id="download">Download</button> -->

    <div class="container main" id="invoice">
        <header class="text-center mb-4">
            <img class="w-100" src="http://localhost/mediastar/assets/cover-letter-image1.png">
        </header>

        <div class="container inner-main">

            <div class="d-flex justify-content-center custom-border-div">
                <div>
                    <img class="h-100 w-100" src="http://localhost/mediastar/assets/mediastar-logo.jpg">
                </div>
            </div>

            <div class="container text-main">

                <div>
                    <div>
                        <div>
                            <br>
                            <div class="d-flex justify-content-end">
                                <p><strong>DATE - 31-OCT-2023</strong></p>
                            </div>

                            <p><strong>To,</strong></p>

                            <p class="paragraph">The District Public Relation Officer</p>
                            <br>
                            <p><strong>Subject: Appointment of Reporter</strong></p>

                            <p class="paragraph">Dear Sir/Mam</p>

                            <p class="paragraph">This is to inform you that Ashish Kumar Kar s/o Abani Kar for
                                "Rashtriya News 24 Live has
                                been appointed as Reporter - Rashtriya News 24 Live. Which is transmitted on i2i
                                Network, Rock TV, Joy TV, e BABA Ent & OTT Platform. Please be informed that he is an
                                unpaid
                                employee of the Organization and the organization is not liable to pay any kind of
                                salary in
                                any mode. This freelance appointment on behalf of the organization is at U.P. </p>

                            <div class="container d-flex">

                                <div class="container">

                                    <p><strong>Address: Jhariya Jahrkhand</strong></p>
                                    <p><strong>J. - 828111</strong></p>
                                    <p><strong>MO. - 9304740034</strong></p>
                                    <p><strong>Email - <a class="text-decoration-none paragraph"
                                                href="mailto:ashishkar066@gmail.com">ashishkar066@gmail.com</a></strong>
                                    </p>
                                    <p><strong>Blood Group - B+</strong></p>

                                </div>
                                <div class="w-50 mediastar-logo">
                                    <div>
                                        <img class="h-100 w-100"
                                            src="http://localhost/mediastar/assets/mediastar-logo.jpg">
                                    </div>
                                </div>
                            </div>
                            <p><strong><strong>The&nbsp; validity&nbsp; of&nbsp; above&nbsp; appointment&nbsp; is&nbsp;
                                        from&nbsp; 31/10/23 &nbsp; to &nbsp; 31/10/2024</strong></strong></p>


                            <p class="paragraph">We look forward to your kind cooperation in making available all news,
                                press release etc <br>
                                including advertisements & Government Communications.
                            </p>

                            <p><strong>NOTE:- Rashtriya News 24 Live Channel will not be responsible for wrong
                                    news or wrong information, for this, only the journalist and district bureau will be
                                    responsible.</strong></p>

                            <div class="d-flex justify-content-center">
                                <p><strong><strong>Thanking You</strong></strong></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container d-flex flex-column">

                    <p><strong>Copy: 1. Commissioner</strong></p>
                    <p><strong>2. Collector</strong></p>
                    <p><strong>3. IG</strong></p>
                    <p><strong>4. SP</strong></p>

                </div>



                <div class="container d-flex flex-column align-items-center justify-content-center">
                    <p><strong><strong>Address: Near Teliphone Exchange, Manbad, Amtal, Dhanbad,
                                Jharia,</strong></strong></p>
                    <p><strong><strong> Jharkhand, (828111) Mob. No. 9304740034</strong></strong></p>
                </div>

            </div>


        </div>

        <div class="container footer">
            <img class="w-100" src="http://localhost/mediastar/assets/cover-letter-image2.png">

        </div>
    </div>

    <script>
    window.onload = function() {
        document.getElementById('download').addEventListener("click", () => {
            const invoice = document.getElementById('invoice');
            const opt = {
                margin: 0,
                filename: 'cover-letter.pdf',
                image: {
                    type: 'jpeg',
                    quality: 1.0
                },
                html2canvas: {
                    scale: 2,
                    dpi: 300,
                    letterRendering: true,
                    useCORS: true
                },
                jsPDF: {
                    unit: 'pt',
                    format: 'a4',
                    orientation: 'portrait'
                }
            };
            // Calculate the height of the content
            const elementHeight = invoice.scrollHeight;
            // Set jsPDF format height according to content height
            opt.jsPDF.format = [595.28, elementHeight];
            html2pdf().set(opt).from(invoice).save();
        });
    }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>