{{-- Copyright (C) 2018 Panobit, Inc - All rights reserved.
Unauthorized duplication, transmission, or modification by any means is strictly prohibited.
Proprietary and confidential. This file belongs to the Revohub SaaS (Software-as-a-Service)
Panobit, Inc | legal@panobit.com | www.panobit.com --}}
@extends('frontend.layouts.frontend')
@section('page-title', ' - Support')
@section('content')
    <div role="main" class="main">

        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
        </section>

        {{--
        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
        <div id="googlemaps" class="google-map"></div>
        --}}
        <div class="container">

            <div class="row">
                <div class="col-lg-6">

                    <div class="alert alert-success d-none mt-4" id="contactSuccess">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>

                    <div class="alert alert-danger d-none mt-4" id="contactError">
                        <strong>Error!</strong> There was an error sending your message.
                        <span class="text-1 mt-2 d-block" id="mailErrorMessage"></span>
                    </div>

                    <h2 class="mb-3 mt-2"><strong>Contact</strong> Us</h2>

                    <form id="contactForm" action="php/contact-form.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label>Your name *</label>
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Your email address *</label>
                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label>Subject</label>
                                <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label>Message *</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <input type="submit" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">

                    <h4 class="heading-primary mt-4">Get in <strong>Touch</strong></h4>
                    <p>If you have questions, or need assistance with {{ config('app.name') }}, please use the form below or e-mail us directly.</p>

                    <hr>

                    <ul class="list list-icons list-icons-style-3 mt-4">
                        <li><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
                        <li><i class="fas fa-phone"></i> <strong>Phone:</strong> (123) 456-789</li>
                        <li><i class="far fa-envelope"></i> <strong>Sales E-Mail:</strong> <a href="mailto:sales@panobit.com">mail@example.com</a></li>
                        <li><i class="far fa-envelope"></i> <strong>Billing E-Mail:</strong> <a href="mailto:billing@panobit.com">mail@example.com</a></li>
                        <li><i class="far fa-envelope"></i> <strong>Support E-Mail:</strong> <a href="mailto:support@panobit.com">mail@example.com</a></li>
                    </ul>

                    <hr>

                    <h4 class="heading-primary">Business <strong>Hours</strong></h4>
                    <ul class="list list-icons list-dark mt-4">
                        <li><i class="far fa-clock"></i> Monday - Friday - 9am to 5pm</li>
                        <li><i class="far fa-clock"></i> Saturday - 9am to 2pm</li>
                        <li><i class="far fa-clock"></i> Sunday - Closed</li>
                    </ul>

                </div>

            </div>

        </div>

    </div>

    <section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="call-to-action-content">
                        <h3>{{ config('app.name') }} is <strong>everything</strong> you need to <strong>successfully</strong> manage your IT business.  </h3>
                        <p class="mb-0">Learn more about how  <strong>{{ config('app.name') }}</strong> can help you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
