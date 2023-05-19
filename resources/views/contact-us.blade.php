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
                    <h3>Nos contacts</h3>
                </div>
                <!--Contact Info Start-->
                <div class="col-md-4">
                    <div class="c-info">
                        <h6>Adresse:</h6>
                        <p> {{ $setting->address }} </p>
                    </div>
                </div>
                <!--Contact Info End-->
                <!--Contact Info Start-->
                <div class="col-md-4">
                    <div class="c-info">
                        <h6>Téléphone:</h6>
                        <p><strong>Phone 1:</strong> {{ $setting->phone_1 }}</p>
                        <p>{{ $setting->phone_2 }}</p>
                    </div>
                </div>
                <!--Contact Info End-->
                <!--Contact Info Start-->
                <div class="col-md-4">
                    <div class="c-info">
                        <h6>Adresse electronique:</h6>
                        <p><strong>Email:</strong> {{ $setting->email_1 }}</p>
                        <p>{{ $setting->email_2 }}</p>
                    </div>
                </div>
                <!--Contact Info End-->
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-form">
                        <h3>Laissez-nous un message</h3>
                        <form action="{{ route('send.mail') }}" method="post">
                            @csrf
                            <ul class="cform">
                                <li class="half pr-15">
                                    <input type="text" class="form-control" name="name" placeholder="Nom complet">
                                </li>
                                <li class="half pl-15">
                                    <input type="text" name="email" class="form-control" placeholder="Email">
                                </li>
                                <x-honeypot />
                                <li class="half pr-15">
                                    <input type="text" name="phone" class="form-control" placeholder="Téléphone">
                                </li>
                                <li class="half pl-15">
                                    <input type="text" name="subject" class="form-control" placeholder="Objet">
                                </li>
                                <li class="full">
                                    <textarea class="textarea-control" name="message" placeholder="Message"></textarea>
                                </li>
                                <li class="full">
                                    <input type="submit" value="Envoyer" class="fsubmit">
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="google-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d31917.285485596854!2d25.189542695012054!3d0.5093171902759107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x1757a128313d5f9d%3A0xa8f59d873e805a48!2skinsangani%20rd%20congo%20map!3m2!1d0.5093179!2d25.1977819!5e0!3m2!1sen!2sus!4v1684071942064!5m2!1sen!2sus"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact End-->
@endsection
