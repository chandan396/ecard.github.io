<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bussness Card</title>
    <link rel="stylesheet" href="style/css/style.css">
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
</head>

<body>
    <div class="wapper">

        <html>

        <head>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Shadows+Into Light&amp;display=swap" media="all" id="shr-font-shadows-into light">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
            <link href="../templates/template5/t5-style.css" rel="stylesheet">
            <link href="../templates/common/css/star-rating.css" rel="stylesheet">
            <script src="https://connect.facebook.net/en_US/sdk.js?hash=9fd289b669a723c54e0d115f45a6f418&amp;ua=modern_es6" async="" crossorigin="anonymous"></script>
            <script async="" defer="" crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&amp;version=v5.0"></script>
            <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui">
            <meta property="og:image" itemprop="image" content="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591814258111.jpeg">
            <meta property="og:type" content="website">
            <meta property="og:description" content="Mr. MANOJ KUMAR  (PROPRIETOR)" />
            <title>MYCRDSALE</title>
            <link rel="manifest" id="manifest-placeholder">
            <script>
                var dynamicManifest = {
                    "name": "MYCRDSALE",
                    "short_name": "MYCRDSALE",
                    "description": "MYCRDSALE",
                    "start_url": "https://www.mycrd.in/mycrdsale",
                    "background_color": "#000000",
                    "theme_color": "#0f4a73",
                    "icons": [{
                        "src": "https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591814258111.jpeg",
                        "sizes": "256x256",
                        "type": "image/png"
                    }],
                    "display": "standalone"
                }
                const stringManifest = JSON.stringify(dynamicManifest);
                const blob = new Blob([stringManifest], {
                    type: 'application/json'
                });
                const manifestURL = URL.createObjectURL(blob);
                document.querySelector('#manifest-placeholder').setAttribute('href', manifestURL);
            </script>
            <script>
                function ColorLuminance(hex, lum) {
                    // validate hex string
                    hex = String(hex).replace(/[^0-9a-f]/gi, '');
                    if (hex.length < 6) {
                        hex = hex[0] + hex[0] + hex[1] + hex[1] + hex[2] + hex[2];
                    }
                    lum = lum || 0;

                    // convert to decimal and change luminosity
                    var rgb = "#",
                        c, i;
                    for (i = 0; i < 3; i++) {
                        c = parseInt(hex.substr(i * 2, 2), 16);
                        c = Math.round(Math.min(Math.max(0, c + (c * lum)), 255)).toString(16);
                        rgb += ("00" + c).substr(c.length);
                    }

                    return rgb;
                }
                document.documentElement.style.setProperty('--theme-color', '#ec3835');
                document.documentElement.style.setProperty('--theme-color-light', '#ec383526');
                document.documentElement.style.setProperty('--theme-color-dark1', ColorLuminance('#ec3835', -0.20));
                document.documentElement.style.setProperty('--theme-color-dark2', ColorLuminance('#ec3835', -0.40));
                document.documentElement.style.setProperty('--theme-color-dark3', ColorLuminance('#ec3835', -0.60));
            </script>
        </head>

        <body>
            <div class="page-wrapper" id="home-section">
                <div class="corner"></div>
                <div class="views-label"><i class="fas fa-eye"></i> Views: <b>1888</b></div>
                <div class="upper">
                    <!-- User Profile Pic -->
                    <img src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591814258111.jpeg" class="profile-pic-img">
                    <!-- User Company Name -->
                    <div class="firmname">MYCRDSALE</div>
                    <div style="width: 40%;background-color: #ec3835;height:2px;margin-bottom: 10px;"></div>
                    <!-- User First Name and Last Name -->
                    <div class="name">Mr. MANOJ KUMAR <span style="margin-top: 5px;display: block"><i style="font-size: 12px;">(PROPRIETOR)</i></span></div>

                    <div class="contact-buttons">
                        <a class="contact-button" href="tel:7449229229">
                            <i class="fas fa-phone fa-flip-horizontal"></i>
                            <!-- Call -->
                        </a>
                        <a class="contact-button" target="_blank" href="https://wa.me/917449229229?text=Got reference from your Digital vCard. Want to know more about your products and services.">
                            <i class="fab fa-whatsapp"></i>
                            <!-- Whatsapp -->
                        </a>
                        <a class="contact-button" target="_blank" href="https://goo.gl/maps/uKQfANAsvw1cAouc6">
                            <i class="fas fa-map-marker-alt fa-flip-horizontal"></i>
                            <!-- Direction -->
                        </a>
                        <a class="contact-button" target="_blank" href="mailto:mycrd.in@gmail.com">
                            <i class="fas fa-envelope fa-flip-horizontal"></i>
                            <!-- Mail -->
                        </a>
                    </div>
                </div>
                <div class="lower">
                    <table class="contact-action-table">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="trapezoid">
                                        <a target="_blank" href="tel:7449229229" class="contact-action-container-icon">
                                            <i class="fas fa-phone fa-flip-horizontal"></i>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <a target="_blank" href="tel:7449229229" class="contact-action-container-text">
                                        +917449229229
                                    </a>
                                    <br /><a target="_blank" href="tel:7449229229" class="contact-action-container-text">
                                        +917449229229
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="trapezoid">
                                        <a target="_blank" href="https://goo.gl/maps/uKQfANAsvw1cAouc6" class="contact-action-container-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <a target="_blank" href="https://goo.gl/maps/uKQfANAsvw1cAouc6" class="contact-action-container-text address-text">
                                        CHENNAI
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="trapezoid">
                                        <a target="_blank" href="mailto:mycrd.in@gmail.com" class="contact-action-container-icon">
                                            <i class="fas fa-envelope"></i>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <a href="mailto:mycrd.in@gmail.com" class="contact-action-container-text">
                                        mycrd.in@gmail.com
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="trapezoid">
                                        <a target="_blank" href="http://www.mycrd.in" class="contact-action-container-icon">
                                            <i class="fas fa-globe"></i>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <a target="_blank" href="http://www.mycrd.in" class="contact-action-container-text">
                                        http://www.mycrd.in
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="padding: 15px;">
                        <div class="p-30"></div>
                        <div class="whatsapp-input">
                            <div class="input-wrapper">
                                <label>+91</label>
                                <input id="whatsapp-input" class="input" placeholder="Enter mobile number" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                            </div>
                            <a class="whatsapp-button" target="_blank" href="javascript:;" onclick="handleWhatsappShare(this)">
                                <i class="fab fa-whatsapp"></i>Share on Whatsapp
                            </a>
                        </div>
                        <div class="p-20"></div>
                        <div class="shadow-buttons">
                            <a class="shadow-button" href="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/395.vcf" download=""><i class="fas fa-download shadow-button-icon"></i>Add to Phone Book</a>
                            <a class="shadow-button" onclick="openShareModal(this, `MYCRDSALE`)"><i class="fas fa-share-alt shadow-button-icon"></i>Share</a>
                        </div>
                        <div><a class="shadow-button save-card-button"><i class="fas fa-cloud-download-alt shadow-button-icon"></i>Save Card</a></div>
                        <div class="p-30"></div>
                        <ul class="inprofile share-buttons">
                            <li class="share-button">
                                <a target="_blank" href="https://www.facebook.com/mycrd.in/"><i class="share-button-facebook fab fa-facebook-f"></i></a>
                            </li>
                            <li class="share-button">
                                <a target="_blank" href="https://twitter.com/InMycrd"><i class="share-button-twitter fab fa-twitter"></i></a>
                            </li>
                            <li class="share-button">
                                <a target="_blank" href="https://www.instagram.com/mycrd.in/"><i class="share-button-instagram fab fa-instagram"></i></a>
                            </li>
                            <li class="share-button">
                                <a target="_blank" href="https://www.youtube.com/channel/UC4np1yIVlHLagGBiPxZI1Mg?view_as=subscriber"><i class="share-button-youtube fab fa-youtube"></i></a>
                            </li>
                            <li class="share-button">
                                <a target="_blank"><i class="share-button-pinterest fab fa-pinterest-p"></i></a>
                            </li>
                            <li class="share-button">
                                <a target="_blank"><i class="share-button-linkedin fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="corner-bottom"></div>
            </div>

            <div class="section-container" id="about-us-section">
                <div class="corner"></div>
                <h2 class="section-header">About Us</h2>
                <div style="width: 20%;background-color: #ec3835;height:2px;margin: 0 auto;margin-bottom: 20px;"></div>
                <table class="about-us-table">
                    <tbody>
                        <tr>
                            <td class="table-row-label">
                                <h3 class="table-row-label-text">Company Name</h3><b class="table-row-label-separator">:</b>
                            <td>
                            <td class="table-row-value">
                                MYCRDSALE
                            <td>
                        </tr>
                        <tr>
                            <td class="table-row-label">
                                <h3 class="table-row-label-text">Year of Est.</h3><b class="table-row-label-separator">:</b>
                            <td>
                            <td class="table-row-value">
                                2019
                            <td>
                        </tr>
                        <tr>
                            <td class="table-row-label">
                                <h3 class="table-row-label-text">Nature of Business</h3><b class="table-row-label-separator">:</b>
                            <td>
                            <td class="table-row-value">
                                E COMMERCE
                            <td>
                        </tr>
                    </tbody>
                </table>
                <h3 class="speciality-label">Our Specialities</h3>
                <ul class="unorderedList">

                    <li>Knowledgeable team of professionals</li>

                    <li>Complete client satisfaction</li>

                    <li>Ethical business policies</li>

                    <li>Affordable pricing</li>

                    <li>On-time deliver/ execution</li>

                    <li>Qualitative products</li>

                    <li>Reliable services</li>

                    <li>Ability to undertake bulk orders</li>

                    <li>Live In Touch With Our Customers</li>

                    <li>Transparent dealings</li>

                    <li>Easy payment mode</li>

                    <li>Customized solutions</li>

                    <li>A great experience with Happy clients</li>

                    <li>Low Price Guarantee with best services</li>

                </ul>
                <div class="about-us-text">
                    <h3><a href="http://mycrd.in/"><strong>http://mycrd.in/</strong></a></h3>
                    <p>Design your website cum digital visiting card in 2 minutes - it's easy, elegant and affordable. Link Connect is always in your pocket, never tears and never runs out. Your DIGI-VCARD can be easily updated with our user-friendly dashboard, so you won't need to re-print a business card again.</p>
                    <p><strong>NEW WEBSITE CUM DIGITAL VISITING CARD</strong></p>
                    <ul>
                        <li>No need to worry about your paper visiting card</li>
                        <li>Your card will now always be available with your client</li>
                    </ul>
                    <p><strong>What is the benefit of Digital Business Card &nbsp;?</strong></p>
                    <ol>
                        <li>Click, Call and Business!</li>
                        <li>You can whatsapp to anyone Without saving number.</li>
                        <li>People can Share or Forward your Business Card.</li>
                        <li>They can Whatsapp you. Without saving your number!</li>
                        <li>About Us Display</li>
                        <li>Gallery (20 photos)</li>
                        <li>Upload Pdf (2 nos)</li>
                        <li>Show your products/ Services with photos</li>
                        <li>Show payment details</li>
                        <li>youtube videos (upto 5 videos)</li>
                        <li>Enquiry form to capture lead</li>
                        <li>Admin dashboard(update your card unlimited time)</li>
                        <li>Customer Rating Option</li>
                    </ol>
                    <p>*Book now your DIGITAL VISITING CARD WhatsApp&nbsp;<strong> +917449229229</strong></p>
                    <p>*Make a DIGITAL VISITING CARD for your Business,@ just <strong>Rs 299/-</strong></p>
                </div>
                <h3 class="speciality-label">Documents</h3>

                <a class="document-wrapper" href="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591814795952.pdf" download>
                    <div class="pdf-icon"><i class="fa fa-file-pdf"></i></div>
                    <div class="pdf-number">broucher.pdf</div>
                    <div class="download-icon"><i class="fa fa-download"></i></div>
                </a>



                <div class="corner-bottom"></div>
            </div>
            <div class="section-container" id="products-services-section">
                <div class="corner"></div>
                <h2 class="section-header">Our Products</h2>
                <div style="width: 20%;background-color: #ec3835;height:2px;margin: 0 auto;margin-bottom: 20px;"></div>
                <div>
                    <div class="card">
                        <h3 class="card-title">CHAIR</h3>

                        <img onclick="openImageModal(this)" alt="CHAIR" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815035985.jpg" style="width:100%;margin-bottom: 15px;">
                        <div class="product-enquiry-section">
                            <div class="product-price">
                                Price: ₹4500
                            </div>
                            <a href="https://wa.me/917449229229?text=Hi, I am interested in your product/service: CHAIR. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="card-title">ART WORKS</h3>

                        <img onclick="openImageModal(this)" alt="ART WORKS" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815043003.jpg" style="width:100%;margin-bottom: 15px;">
                        <div class="product-enquiry-section">
                            <div class="product-price">
                                Price: ₹700
                            </div>
                            <a href="https://wa.me/917449229229?text=Hi, I am interested in your product/service: ART WORKS. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="card-title">SLIPPERS</h3>

                        <img onclick="openImageModal(this)" alt="SLIPPERS" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815049935.jpg" style="width:100%;margin-bottom: 15px;">
                        <div class="product-enquiry-section">
                            <div class="product-price">
                                Price: ₹980
                            </div>
                            <a href="https://wa.me/917449229229?text=Hi, I am interested in your product/service: SLIPPERS. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="card-title">NUTRITION</h3>

                        <img onclick="openImageModal(this)" alt="NUTRITION" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815055920.jpg" style="width:100%;margin-bottom: 15px;">
                        <div class="product-enquiry-section">
                            <div class="product-price">
                                Price: ₹250
                            </div>
                            <a href="https://wa.me/917449229229?text=Hi, I am interested in your product/service: NUTRITION. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="card-title">CAMERA</h3>

                        <img onclick="openImageModal(this)" alt="CAMERA" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815063492.jpg" style="width:100%;margin-bottom: 15px;">
                        <div class="product-enquiry-section">
                            <div class="product-price">
                                Price: ₹25000
                            </div>
                            <a href="https://wa.me/917449229229?text=Hi, I am interested in your product/service: CAMERA. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="card-title">SHOES</h3>

                        <img onclick="openImageModal(this)" alt="SHOES" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815070035.jpg" style="width:100%;margin-bottom: 15px;">
                        <div class="product-enquiry-section">
                            <div class="product-price">
                                Price: ₹1200
                            </div>
                            <a href="https://wa.me/917449229229?text=Hi, I am interested in your product/service: SHOES. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="card-title">SALWAR</h3>

                        <img onclick="openImageModal(this)" alt="SALWAR" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815076528.jpg" style="width:100%;margin-bottom: 15px;">
                        <div class="product-enquiry-section">
                            <div class="product-price">
                                Price: ₹899
                            </div>
                            <a href="https://wa.me/917449229229?text=Hi, I am interested in your product/service: SALWAR. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="card-title">COSMETICS</h3>

                        <img onclick="openImageModal(this)" alt="COSMETICS" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815082856.jpg" style="width:100%;margin-bottom: 15px;">
                        <div class="product-enquiry-section">
                            <div class="product-price">
                                Price: ₹120
                            </div>
                            <a href="https://wa.me/917449229229?text=Hi, I am interested in your product/service: COSMETICS. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="card-title">SHIRTS</h3>

                        <img onclick="openImageModal(this)" alt="SHIRTS" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815089879.jpg" style="width:100%;margin-bottom: 15px;">
                        <div class="product-enquiry-section">
                            <div class="product-price">
                                Price: ₹540
                            </div>
                            <a href="https://wa.me/917449229229?text=Hi, I am interested in your product/service: SHIRTS. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="card-title">TROUSERS</h3>

                        <img onclick="openImageModal(this)" alt="TROUSERS" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815097533.jpg" style="width:100%;margin-bottom: 15px;">
                        <div class="product-enquiry-section">
                            <div class="product-price">
                                Price: ₹120
                            </div>
                            <a href="https://wa.me/917449229229?text=Hi, I am interested in your product/service: TROUSERS. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="card-title">TOYS</h3>

                        <img onclick="openImageModal(this)" alt="TOYS" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815105613.jpg" style="width:100%;margin-bottom: 15px;">
                        <div class="product-enquiry-section">
                            <div class="product-price">
                                Price: ₹300
                            </div>
                            <a href="https://wa.me/917449229229?text=Hi, I am interested in your product/service: TOYS. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="card-title">FASION JEWEL</h3>

                        <img onclick="openImageModal(this)" alt="FASION JEWEL" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815114289.jpg" style="width:100%;margin-bottom: 15px;">
                        <div class="product-enquiry-section">
                            <div class="product-price">
                                Price: ₹1600
                            </div>
                            <a href="https://wa.me/917449229229?text=Hi, I am interested in your product/service: FASION JEWEL. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="card-title">SAREE</h3>

                        <img onclick="openImageModal(this)" alt="SAREE" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815122096.jpg" style="width:100%;margin-bottom: 15px;">
                        <div class="product-enquiry-section">
                            <div class="product-price">
                                Price: ₹450
                            </div>
                            <a href="https://wa.me/917449229229?text=Hi, I am interested in your product/service: SAREE. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="card-title">SUNGLASS</h3>

                        <img onclick="openImageModal(this)" alt="SUNGLASS" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815129599.jpg" style="width:100%;margin-bottom: 15px;">
                        <div class="product-enquiry-section">
                            <div class="product-price">
                                Price: ₹100
                            </div>
                            <a href="https://wa.me/917449229229?text=Hi, I am interested in your product/service: SUNGLASS. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
                        </div>
                    </div>
                    <div class="card">
                        <h3 class="card-title">WATCH</h3>

                        <img onclick="openImageModal(this)" alt="WATCH" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815136241.jpg" style="width:100%;margin-bottom: 15px;">
                        <div class="product-enquiry-section">
                            <div class="product-price">
                                Price: ₹250
                            </div>
                            <a href="https://wa.me/917449229229?text=Hi, I am interested in your product/service: WATCH. Please provide more details." target="blank" class="product-enquiry-btn">Enquiry</a>
                        </div>
                    </div>


                </div>
                <div class="corner-bottom"></div>

            </div>
            <div class="section-container" id="payment-options-section">
                <div class="corner"></div>
                <h2 class="section-header">Payment</h2>
                <div style="width: 20%;background-color: #ec3835;height:2px;margin: 0 auto;margin-bottom: 20px;"></div>
                <div>
                    <table class="about-us-table">
                        <tbody>
                            <tr>
                                <td class="table-row-label">
                                    <h3 class="table-row-label-text">Paytm Number</h3><b class="table-row-label-separator">:</b>
                                <td>
                                <td class="table-row-value">
                                    9940402042
                                <td>
                            </tr>
                            <tr>
                                <td class="table-row-label">
                                    <h3 class="table-row-label-text">Phone Pe Number</h3><b class="table-row-label-separator">:</b>
                                <td>
                                <td class="table-row-value">
                                    9940402042
                                <td>
                            </tr>
                            <tr>
                                <td class="table-row-label">
                                    <h3 class="table-row-label-text">Google Pay Number</h3><b class="table-row-label-separator">:</b>
                                <td>
                                <td class="table-row-value">
                                    9940402042
                                <td>
                            </tr>
                        </tbody>
                    </table>
                    <h3>Account Details:</h3>
                    <table class="about-us-table">
                        <tbody>
                            <tr>
                                <td class="table-row-label">
                                    <h3 class="table-row-label-text">Bank Name</h3><b class="table-row-label-separator">:</b>
                                <td>
                                <td class="table-row-value">
                                    ICICI BANK
                                <td>
                            </tr>
                            <tr>
                                <td class="table-row-label">
                                    <h3 class="table-row-label-text">IFSC code</h3><b class="table-row-label-separator">:</b>
                                <td>
                                <td class="table-row-value">
                                    ICIC0000458
                                <td>
                            </tr>
                            <tr>
                                <td class="table-row-label">
                                    <h3 class="table-row-label-text">Account Holder Name</h3><b class="table-row-label-separator">:</b>
                                <td>
                                <td class="table-row-value">
                                    XXXXXX
                                <td>
                            </tr>
                            <tr>
                                <td class="table-row-label">
                                    <h3 class="table-row-label-text">Account Number</h3><b class="table-row-label-separator">:</b>
                                <td>
                                <td class="table-row-value">
                                    3333333555555
                                <td>
                            </tr>
                            <tr>
                                <td class="table-row-label">
                                    <h3 class="table-row-label-text">Account Type</h3><b class="table-row-label-separator">:</b>
                                <td>
                                <td class="table-row-value">
                                    CURRENT A/C
                                <td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="corner-bottom"></div>
            </div>
            <div class="section-container" id="gallery-section">
                <div class="corner"></div>
                <h2 class="section-header">Gallery</h2>
                <div style="width: 20%;background-color: #ec3835;height:2px;margin: 0 auto;margin-bottom: 20px;"></div>
                <div class="images-container">
                    <div class="image-wrapper">
                        <img onclick="openImageModal(this)" alt="Image 1" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815367571.jpg" style="width:100%">
                    </div>
                    <div class="image-wrapper">
                        <img onclick="openImageModal(this)" alt="Image 2" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815367572.jpg" style="width:100%">
                    </div>
                    <div class="image-wrapper">
                        <img onclick="openImageModal(this)" alt="Image 3" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815367573.jpg" style="width:100%">
                    </div>
                    <div class="image-wrapper">
                        <img onclick="openImageModal(this)" alt="Image 4" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815367574.jpg" style="width:100%">
                    </div>
                    <div class="image-wrapper">
                        <img onclick="openImageModal(this)" alt="Image 5" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815367575.jpg" style="width:100%">
                    </div>
                    <div class="image-wrapper">
                        <img onclick="openImageModal(this)" alt="Image 6" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815367576.jpg" style="width:100%">
                    </div>
                    <div class="image-wrapper">
                        <img onclick="openImageModal(this)" alt="Image 7" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815367577.jpg" style="width:100%">
                    </div>
                    <div class="image-wrapper">
                        <img onclick="openImageModal(this)" alt="Image 8" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815367578.jpg" style="width:100%">
                    </div>
                    <div class="image-wrapper">
                        <img onclick="openImageModal(this)" alt="Image 9" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815367579.jpg" style="width:100%">
                    </div>
                    <div class="image-wrapper">
                        <img onclick="openImageModal(this)" alt="Image 10" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815367580.jpg" style="width:100%">
                    </div>
                    <div class="image-wrapper">
                        <img onclick="openImageModal(this)" alt="Image 11" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815367581.jpg" style="width:100%">
                    </div>
                    <div class="image-wrapper">
                        <img onclick="openImageModal(this)" alt="Image 12" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815367582.jpg" style="width:100%">
                    </div>
                    <div class="image-wrapper">
                        <img onclick="openImageModal(this)" alt="Image 13" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815367583.jpg" style="width:100%">
                    </div>
                    <div class="image-wrapper">
                        <img onclick="openImageModal(this)" alt="Image 14" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815367584.jpg" style="width:100%">
                    </div>
                    <div class="image-wrapper">
                        <img onclick="openImageModal(this)" alt="Image 15" src="https://vcard-bucket.s3.us-east-2.amazonaws.com/A7/395/1591815367585.jpg" style="width:100%">
                    </div>

                </div>
                <div class="corner-bottom"></div>
            </div>
            <div class="section-container" id="video-section">
                <div class="corner"></div>
                <h2 class="section-header">Videos</h2>
                <div style="width: 20%;background-color: #ec3835;height:2px;margin: 0 auto;margin-bottom: 20px;"></div>
                <div>
                    <div class="card" style="padding: 10px">
                        <iframe src="//www.youtube.com/embed/KWwY95FwuVk?rel=0" frameborder="0" allowfullscreen style="width: 100%"></iframe>
                    </div>
                    <div class="card" style="padding: 10px">
                        <iframe src="//www.youtube.com/embed/TGb4QQcj8E8?rel=0" frameborder="0" allowfullscreen style="width: 100%"></iframe>
                    </div>
                    <div class="card" style="padding: 10px">
                        <iframe src="//www.youtube.com/embed/Umz6E6bgcPo?rel=0" frameborder="0" allowfullscreen style="width: 100%"></iframe>
                    </div>

                </div>
                <div class="corner-bottom"></div>

            </div>
            <div class="section-container" id="feedback-section">
                <div class="corner"></div>
                <h2 class="section-header">Feedbacks</h2>
                <div style="width: 20%;background-color: #ec3835;height:2px;margin: 0 auto;margin-bottom: 20px;"></div>
                <div class="feedback-list">
                    <div class="feedback-wrapper">
                        <span class="feedback-name-wrapper"><span class="feedback-name">Ram</span> on July 17, 2020 </span>
                        <div><span class="gl-star-rating-stars s40"><span data-value="1" data-text="Terrible"></span><span data-value="2" data-text="Poor"></span><span data-value="3" data-text="Average"></span><span data-value="4" data-text="Very Good"></span><span data-value="5" data-text="Excellent"></span></span></div>
                        <div>Best</div>
                        <hr />
                    </div>
                    <div class="feedback-wrapper">
                        <span class="feedback-name-wrapper"><span class="feedback-name">bharathi</span> on July 14, 2020 </span>
                        <div><span class="gl-star-rating-stars s40"><span data-value="1" data-text="Terrible"></span><span data-value="2" data-text="Poor"></span><span data-value="3" data-text="Average"></span><span data-value="4" data-text="Very Good"></span><span data-value="5" data-text="Excellent"></span></span></div>
                        <div>Good</div>
                        <hr />
                    </div>
                    <div class="feedback-wrapper">
                        <span class="feedback-name-wrapper"><span class="feedback-name">DEEPAK </span> on July 6, 2020 </span>
                        <div><span class="gl-star-rating-stars s40"><span data-value="1" data-text="Terrible"></span><span data-value="2" data-text="Poor"></span><span data-value="3" data-text="Average"></span><span data-value="4" data-text="Very Good"></span><span data-value="5" data-text="Excellent"></span></span></div>
                        <div>Dtf</div>
                        <hr />
                    </div>
                    <div class="feedback-wrapper">
                        <span class="feedback-name-wrapper"><span class="feedback-name">Test</span> on June 28, 2020 </span>
                        <div><span class="gl-star-rating-stars s30"><span data-value="1" data-text="Terrible"></span><span data-value="2" data-text="Poor"></span><span data-value="3" data-text="Average"></span><span data-value="4" data-text="Very Good"></span><span data-value="5" data-text="Excellent"></span></span></div>
                        <div>Test</div>
                        <hr />
                    </div>
                    <div class="feedback-wrapper">
                        <span class="feedback-name-wrapper"><span class="feedback-name">66</span> on June 23, 2020 </span>
                        <div><span class="gl-star-rating-stars s50"><span data-value="1" data-text="Terrible"></span><span data-value="2" data-text="Poor"></span><span data-value="3" data-text="Average"></span><span data-value="4" data-text="Very Good"></span><span data-value="5" data-text="Excellent"></span></span></div>
                        <div>6666</div>
                        <hr />
                    </div>
                </div>
                <form class="feedback-form card" novalidate>
                    <div class="feedback-form-heading">Give Feedback</div>
                    <select class="star-rating" id="rating" name="rating">
                        <option value="">Select a rating</option>
                        <option value="5">Excellent</option>
                        <option value="4">Very Good</option>
                        <option value="3">Average</option>
                        <option value="2">Poor</option>
                        <option value="1">Terrible</option>
                    </select>
                    <input type="text" name="feedbackName" id="feedbackName" placeholder="Enter Full Name" />
                    <textarea name="feedback" id="feedback" placeholder="Enter your feedback"></textarea>
                    <!-- Message:<br/> -->
                    <input type="button" value="Give Feedback" onclick="sendFeedback(this, 'mycrdsale')" />
                </form>
                <div class="corner-bottom"></div>
            </div>

            <div class="section-container" id="enquiry-section">
                <div class="corner"></div>
                <h2 class="section-header">Enquiry Form</h2>
                <div style="width: 20%;background-color: #ec3835;height:2px;margin: 0 auto;margin-bottom: 20px;"></div>
                <form class="enquiry-form" novalidate>
                    <!-- Full Name:<br/> -->
                    <input type="text" name="enquiryName" id="enquiryName" placeholder="Enter Full Name" /><br />
                    <div class="flex">
                        <div class="enquiry-phoneNumber">
                            <!-- Phone Number:<br/> -->
                            <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Enter Phone Number" /><br />
                        </div>
                        <div class="enquiry-email">
                            <!-- Email:<br/> -->
                            <input type="text" name="email" id="email" placeholder="Enter Email" /><br />
                        </div>
                    </div>
                    <!-- Message:<br/> -->
                    <textarea name="message" id="message" placeholder="Enter Message"></textarea><br />
                    <input type="button" value="Send" onclick="sendEnquiry(this, 'mycrd.in@gmail.com')" />
                </form>
                <div class="corner-bottom"></div>
            </div>

            <div class="copyright-wrapper">
                <div class="copyright-wrapper-inner">
                    © 2020 <a href="http://mycrd.in" target="_blank"><b>mycrd.in</b></a>
                </div>
            </div>
            <!-- Footer Menu -->
            <div class="footer">
                <ul class="footer-menu">
                    <li>
                        <a class="footer-menu-link" href="#home-section">
                            <i class="footer-menu-icon fas fa-home"></i>
                            <div class="footer-menu-text">HOME</div>
                        </a>
                    </li>
                    <li>
                        <a class="footer-menu-link" href="#about-us-section">
                            <i class="footer-menu-icon fas fa-briefcase"></i>
                            <div class="footer-menu-text">ABOUT US</div>
                        </a>
                    </li>
                    <li>
                        <a class="footer-menu-link" href="#products-services-section">
                            <i class="footer-menu-icon fas fa-box-open"></i>
                            <div class="footer-menu-text">PRODUCTS</div>
                        </a>
                    </li>
                    <li>
                        <a class="footer-menu-link" href="#payment-options-section">
                            <i class="footer-menu-icon fas fa-money-bill-alt"></i>
                            <div class="footer-menu-text">PAYMENT</div>
                        </a>
                    </li>
                    <li>
                        <a class="footer-menu-link" href="#gallery-section">
                            <i class="footer-menu-icon fas fa-file-image"></i>
                            <div class="footer-menu-text">GALLERY</div>
                        </a>
                    </li>
                    <li>
                        <a class="footer-menu-link" href="#video-section">
                            <i class="footer-menu-icon fas fa-video"></i>
                            <div class="footer-menu-text">VIDEOS</div>
                        </a>
                    </li>

                    <li>
                        <a class="footer-menu-link" href="#feedback-section">
                            <i class="footer-menu-icon fas fa-star"></i>
                            <div class="footer-menu-text">FEEDBACK</div>
                        </a>
                    </li>
                    <li>
                        <a class="footer-menu-link" href="#enquiry-section">
                            <i class="footer-menu-icon fas fa-comment-alt"></i>
                            <div class="footer-menu-text">ENQUIRY</div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- The image Modal -->
            <div id="imageModal" class="modal">
                <span class="close" id="imageModalClose">&times;</span>
                <img class="modal-content fadeIn" id="img01">
                <div id="caption"></div>
            </div>
            <!-- The share Modal -->
            <div id="shareModal" class="modal share-modal">
                <div class="share-form fadeInUpBig">
                    <div class="share-form-header">
                        <h3 class="share-form-header-text">Share Profile</h3>
                        <span class="close" id="shareModalClose">&times;</span>
                    </div>
                    <div class="share-form-buttons-container">
                        <p>Share my Digital vCard in your network.</p>
                        <div class="share-buttons-heading">
                            <img src="../templates/template5/tild-arrow.svg" class="share-buttons-arrow">
                            <div class="share-buttons-heading-text">Share my Digital vCard</div>
                        </div>
                        <ul class="share-buttons">
                            <li class="share-button">
                                <a href="javascript:;" onclick="handleDirectWhatsappShare(this)">
                                    <i class="share-button-whatsapp fab fa-whatsapp"></i>
                                </a>
                            </li>
                            <li class="share-button">
                                <a target="_blank" href="sms:?body=http://mycrd.in/mycrdsale">
                                    <i class="share-button-sms fas fa-comment-dots"></i>
                                </a>
                            </li>
                            <li class="share-button">
                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://mycrd.in/mycrdsale&src=sdkpreparse" class="fb-xfbml-parse-ignore">
                                    <i class="share-button-facebook fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="share-button">
                                <a target="_blank" href="https://twitter.com/intent/tweet?text=http://mycrd.in/mycrdsale" data-size="large">
                                    <i class="share-button-twitter fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="share-button">
                                <i class="share-button-skype fab fa-skype"></i>
                            </li>
                            <li class="share-button">
                                <i class="share-button-pinterest fab fa-pinterest-p"></i>
                            </li>
                            <li class="share-button">
                                <i class="share-button-linkedin fab fa-linkedin-in"></i>
                            </li>
                            <li class="share-button">
                                <i class="share-button-mail fas fa-envelope"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <script src="../templates/common/js/star-rating.js"></script>
            <script src="../templates/common/js/script.js"></script>
        </body>

        </html>


    </div>

</body>

</html>