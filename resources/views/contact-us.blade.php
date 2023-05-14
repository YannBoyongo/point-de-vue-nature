@extends('layouts.main')

@section('content')
    <!--Inner Header Start-->
    <section class="wf100 p100 inner-header">
        <div class="container">
            <h1>Contactez-nous</h1>
            <ul>
                <li><a href="{{ route('welcome') }}">Accueil</a></li>
                <li><a href="#">Contactez-nous</a></li>
            </ul>
        </div>
    </section>
    <!--Inner Header End-->
    <!--Contact Start-->
    <section class="contact-page wf100 p80">
        <div class="container contact-info mb-5">
            <div class="row">
                <div class="col-md-12">
                    <h3>Contact Information</h3>
                </div>
                <!--Contact Info Start-->
                <div class="col-md-4">
                    <div class="c-info">
                        <h6>Address:</h6>
                        <p> 4700 Millenia Blvd # 175, Orlando, FL 32839, USA </p>
                    </div>
                </div>
                <!--Contact Info End-->
                <!--Contact Info Start-->
                <div class="col-md-4">
                    <div class="c-info">
                        <h6>Contact:</h6>
                        <p><strong>Phone:</strong> +1 321 2345 678-9</p>
                        <p><strong>Fax:</strong> +1 321 2345 876-7</p>
                    </div>
                </div>
                <!--Contact Info End-->
                <!--Contact Info Start-->
                <div class="col-md-4">
                    <div class="c-info">
                        <h6>For More Information:</h6>
                        <p><strong>Email:</strong> info@ecova.com</p>
                        <p>contact@ecova.com</p>
                    </div>
                </div>
                <!--Contact Info End-->
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-form">
                        <h3>Feel Free to Contact us</h3>
                        <ul class="cform">
                            <li class="half pr-15">
                                <input type="text" class="form-control" placeholder="Full Name">
                            </li>
                            <li class="half pl-15">
                                <input type="text" class="form-control" placeholder="Email">
                            </li>
                            <li class="half pr-15">
                                <input type="text" class="form-control" placeholder="Contact">
                            </li>
                            <li class="half pl-15">
                                <input type="text" class="form-control" placeholder="Subject">
                            </li>
                            <li class="full">
                                <textarea class="textarea-control" placeholder="Message"></textarea>
                            </li>
                            <li class="full">
                                <input type="submit" value="Contact us" class="fsubmit">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="google-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11418.310112375979!2d-74.00986187433132!3d40.710981182716246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2s!4v1540972202179"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact End-->
@endsection
