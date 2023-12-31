@extends('front_layout.template')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contactos</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <h4>Telefone</h4>
                        <p>244 820 300</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <h4>Morada</h4>
                        <p>Morro do Lena, Apt 4163, Lra</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        <h4>Horário</h4>
                        <p>09:00 às 18:00 </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <h4>Email</h4>
                        <p>help@imagineshirt.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->

    <div class="container">
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3068.2133614926406!2d-8.822399533675403!3d39.73485790675203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd22735b976bb559%3A0x5a7838e41441a2a6!2sLeiria!5e0!3m2!1spt-PT!2spt!4v1621932398156!5m2!1spt-PT!2spt"
                height="500" width="1000" style="border:0; display:block; margin: 50px auto;" allowfullscreen="true"
                aria-hidden="false" tabindex="0"></iframe>
            <div class="map-inside">
                <i class="fa fa-map-pin" aria-hidden="true"></i>
                <div class="inside-widget">
                    <h4>Imagine Shirt</h4>
                    <ul>
                        <li>Telefone: 244 820 300</li>
                        <li>Morada: Morro do Lena, Apt 4163, Lra</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-1">
                    <div class="contact__form__title">
                        <h2>Fale Connosco</h2>
                    </div>
                </div>
            </div>
            <form action="{{ route('contact_email') }}" method="post">
                @csrf
                <div class="row">
                    <div style="width: 25%;">

                        <input type="text" placeholder="Nome" id="name" name="name">


                        <input type="email" placeholder="Email" id="email" name="email">


                        <textarea placeholder="Mensagem" id="message" name="message"></textarea>
                        <button type="submit" class="site-btn">ENVIAR</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->
@endsection
