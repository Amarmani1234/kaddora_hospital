<?php
// our-branches.php
include './forms/header.php';
?>

<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold text-primary">Our Branches</h1>
        <p class="text-muted">Find a Kaddora Medical branch near you. We are expanding to bring quality healthcare closer to you.</p>
    </div>

    <div class="row g-4">
        <!-- Branch 1 -->
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm h-100">
                <img src="assets/img/branch1.jpg" class="card-img-top" alt="Branch 1">
                <div class="card-body">
                    <h5 class="card-title">Kaddora Medical – New Delhi</h5>
                    <p class="card-text">
                        123 Health Street, Connaught Place, New Delhi – 110001  
                        Phone: +91 9876543210  
                        Email: delhi@kaddoramedical.com
                    </p>
                    <a href="https://maps.google.com/?q=123+Health+Street+New+Delhi" target="_blank" class="btn btn-outline-primary btn-sm">View on Map</a>
                </div>
            </div>
        </div>

        <!-- Branch 2 -->
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm h-100">
                <img src="assets/img/branch2.jpg" class="card-img-top" alt="Branch 2">
                <div class="card-body">
                    <h5 class="card-title">Kaddora Medical – Mumbai</h5>
                    <p class="card-text">
                        45 Wellness Road, Bandra West, Mumbai – 400050  
                        Phone: +91 9123456780  
                        Email: mumbai@kaddoramedical.com
                    </p>
                    <a href="https://maps.google.com/?q=45+Wellness+Road+Mumbai" target="_blank" class="btn btn-outline-primary btn-sm">View on Map</a>
                </div>
            </div>
        </div>

        <!-- Branch 3 -->
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm h-100">
                <img src="assets/img/branch3.jpg" class="card-img-top" alt="Branch 3">
                <div class="card-body">
                    <h5 class="card-title">Kaddora Medical – Bengaluru</h5>
                    <p class="card-text">
                        78 Care Avenue, Whitefield, Bengaluru – 560066  
                        Phone: +91 9988776655  
                        Email: bengaluru@kaddoramedical.com
                    </p>
                    <a href="https://maps.google.com/?q=78+Care+Avenue+Bengaluru" target="_blank" class="btn btn-outline-primary btn-sm">View on Map</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional: Google Map showing all branches -->
    <div class="mt-5">
        <h4 class="fw-bold text-primary mb-3">Find Us on the Map</h4>
        <iframe 
        
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.3964932834683!2d77.37640957461693!3d28.617876575672714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cef4488ca8681%3A0xda9b2c317d42fd66!2sKaddora%20Tech!5e0!3m2!1sen!2sin!4v1754991985119!5m2!1sen!2sin" 
            width="100%" height="400" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </div>
</div>

<?php
include 'footer.php';
?>
