<?php
/**
 * The contact section for the theme
 *
 * Displays a contact form and contact information.
 *
 * @package Shepmates
 */
?>

<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-header">
                    <h2 class="section-title">Get In Touch</h2>
                    <p>Let's discuss your next project</p>
                </div>
            </div>
        </div>
        <div class="row contact-row">
            <div class="col-md-6 contact-info">
                <div class="contact-card">
                    <h3 class="contact-title">Contact Information</h3>
                    <ul class="contact-list">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Shibin Al Qanatir, Al Qalyubiyah, Egypt</span>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <span>+20 010 1205 3819</span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>abdulrahmanelmessiri@gmail.com</span>
                        </li>
                    </ul>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-github"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 contact-form">
                <div class="contact-card">
                    <h3 class="contact-title">Send Us a Message</h3>
                    <form id="contactForm">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> 