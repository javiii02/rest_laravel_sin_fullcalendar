<x-guest-layout>
    <section class="mt-8 bg-white">
        <center>
            <div class="card" style="width: 18rem; background-color: rgba(228, 228, 228, 0.441); border-radius: 5%;">
                <div class="card-body">
                    <div class="mt-4 text-center">
                        <h2 style="color: black" class="text-3xl font-bold text-transparent bg-clip-text ">
                            Contacto</h2>
                    </div>
                    <div>

                        <div class="contact1">
                            <div class="container-contact1">

                                <form class="contact1-form validate-form">
                                    <span class="contact1-form-title">
                                        ¡Rellena tus datos y nos pondremos en contacto contigo!
                                    </span><br><br>

                                    <div class="wrap-input1 validate-input" data-validate="Name is required">
                                        <input class="input1" type="text" name="name" placeholder="Nombre">
                                        <span class="shadow-input1"></span>
                                    </div><br>

                                    <div class="wrap-input1 validate-input"
                                        data-validate="Valid email is required: ex@abc.xyz">
                                        <input class="input1" type="text" name="email" placeholder="Email">
                                        <span class="shadow-input1"></span>
                                    </div><br>

                                    <div class="wrap-input1 validate-input" data-validate="Subject is required">
                                        <input class="input1" type="text" name="subject" placeholder="Asunto">
                                        <span class="shadow-input1"></span>
                                    </div><br>

                                    <div class="wrap-input1 validate-input" data-validate="Message is required">
                                        <textarea class="input1" name="message" placeholder="Descripción"></textarea>
                                        <span class="shadow-input1"></span>
                                    </div><br>

                                    <div class="container-contact1-form-btn">
                                        <button class="contact1-form-btn">
                                            <span>
                                                Enviar
                                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </section>
</x-guest-layout>
