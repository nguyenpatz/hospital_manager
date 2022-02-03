<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./styles/landingPage.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="logo_container">
                <img src="./images/logo.jpg" class="logo" alt="">
            </div>
            <div>
                <h1>Hospital</h1>
            </div>
            <ul class="navbar">
                <li><a href="">Home</a></li>                
                <li><a href="#service_container">Service</a></li>          
                <li><a href="#about">About</a></li>          
                <li><a href="./login/login_form.php">Login</a></li>          
            </ul>
        </header>
        <main class="main">
            <!-- start slider -->
            <div class="slider_container">
                <div class="slider_btn">
                    <div class="btn btn__left">
                        <img src="./images/icon-arrow-down.svg" alt="">
                    </div>
                </div>
                <div class="slider">
                    <img src="./person/doctor1.jpg" alt="" class="slider__image">
                </div>
                <div class="slider_btn">
                    <div class="btn btn__right">
                        <img src="./images/icon-arrow-down.svg"  alt="">
                    </div>
                </div>
            </div>
            <!-- end slider -->

            <!-- start service -->
            <div id="service_container" class="grid__container">
                <div class="grid grid1">
                    <div><img src="./images/icon-karma.svg" alt=""></div>
                    <h2 class="grid__title">
                    CHUYÊN KHOA NHI
                    </h2>
                    <p class="grid__content">Khám, đánh giá, thiết lập chẩn đoán và lên kế hoạch và thực hiện điều trị cho trẻ em có các vấn đề liên quan tới sức khỏe tâm thần.

                    Thực hiện các trắc nghiệm tâm lý về phát triển tâm thần vận động, trí tuệ, hành vi và cảm xúc của trẻ; các trắc nghiệm đánh giá tự kỷ, tăng động giảm chú ý, lo âu, trầm cảm…</p>
                </div>
                <div class="grid grid2">
                    <div><img src="./images/icon-karma.svg" alt=""></div>
                    <h2 class="grid__title">
                    KỸ THUẬT CAO
                    </h2>
                    <ul class="grid__content grid__list">
                        <li>Chụp cộng hưởng từ.</li>
                        <li>Siêu âm doppler xuyên sọ.</li>
                        <li>Kích thích từ xuyên sọ điều trị các rối loạn tâm thần.</li>
                        <li>Điện não video.</li>
                        <li>Định lượng Ethanol và Methanol trong máu.</li>
                    </ul>
                </div>
                <div class="grid grid3">
                    <div><img src="./images/icon-karma.svg" alt=""></div>
                    <h2 class="grid__title">
                    PHÒNG ĐIỀU TRỊ THEO YÊU CẦU
                    </h2>
                    <ul class="grid__content grid__list">Bệnh viện có các loại phòng theo yêu cầu:
                        <li>Phòng không có người nhà ở lại.</li>
                        <li>Phòng có người nhà ở lại (có nhiều loại phòng với các mức giá khác nhau).</li>
                    </ul>
                </div>
                <div class="grid grid4">
                    <div><img src="./images/icon-karma.svg" alt=""></div>
                    <h2 class="grid__title">
                    DỊCH VỤ HỖ TRỢ CHĂM SÓC
                    </h2>
                    <p class="grid__content">Áp dụng đối với người bệnh không tự chăm sóc tối thiểu và theo yêu cầu của gia đình</p>
                </div>
            </div>
            <!-- end service -->

            <!-- start about -->
            <div id="about">
                <h2 class="about__title">About</h2>
                <div class="about__container">
                    <!-- grid item 1 -->
                    <div class="about__grid">
                        <div class="about__item">
                            <div>
                                <img src="./person/image-emily.jpg" alt="">
                            </div>
                            <h3>Emily</h3>
                            <p>Thật tuyệt vời dịch vụ ở đây còn trên cả mức tưởng tượng của tôi
                                .   Bệnh viện rất tốt.
                            </p>
                        </div>
                    </div>
                    <!-- grid item 2 -->
                    <div class="about__grid">
                        <div class="about__item">
                            <div>
                                <img src="./person/image-jennie.jpg" alt="">
                            </div>
                            <h3>Jennie</h3>
                            <p>Tôi luôn tin tưởng bệnh viện. Bệnh tình của tôi khá nặng, sau khi 
                                chữa trị ở đâu nó trở lên tốt hơn. 
                                <br>Tôi thấy rất an tâm.</br>
                            </p>
                        </div>
                    </div>
                    <!-- grid item 3 -->
                    <div class="about__grid">
                        <div class="about__item">
                            <div>
                                <img src="./person/image-thomas.jpg" alt="">
                            </div>
                            <h3>Thomas</h3>
                            <p>Tôi đã được những người bạn giới thiệu bệnh viện này. <br>
                            Và thật tuyệt vời, bệnh viện rất tốt với giá cả rất hợp lý.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end about -->

            <!-- start footer -->
            <footer class="footer">
                <p>Coded by Nguyen</p>
                <div class="footer__contact">
                    <a href="https://www.facebook.com/profile.php?id=100027709310564"><img src="./images/icon-facebook.svg" alt=""></a>
                    <a href="https://github.com/nguyenpatz"><img src="./images/icon-github.svg" alt=""></a>
                </div>
            </footer>
            <!-- end footer -->
        </main>
    </div>
    <script src="./app/slider.js"></script>
</body>
</html>