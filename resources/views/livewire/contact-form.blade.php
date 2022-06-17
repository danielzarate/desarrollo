<div>

    <section class="section mt-n7">
        <div class="container bring-to-front pt-0">
            <div class="row align-items-center gap-y">
                <div class="col-md-6">
                    <div class="shadow bg-contrast p-4 rounded">
                        <form wire:submit.prevent="save" class="form form-contact" name="form-contact" data-response-message-animation="slide-in-up">

                            <div class="mb-4"><label for="contact_email" class="text-dark bold mb-0">Correo Electrónico</label>
                                <div id="emailHelp" class="small form-text text-secondary mt-0 mb-2 italic"></div>
                                <input wire:model.defer="email" type="email" name="email" id="contact_email" class="form-control bg-contrast" placeholder="Correo Electrónico">
                                @error('email')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror

                            </div>

                            <div class="mb-4"><label for="contact_email" class="text-dark bold">Nombres</label> <input wire:model.defer="name" type="text" name="nombres" id="nombres" class="form-control bg-contrast" placeholder="Nombres y Apellidos">
                            @error('name')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                            </div>


                            <div class="mb-4"><label for="contact_email" class="text-dark bold">Telefono</label> <input wire:model.defer="phone" type="text" name="Contact[subject]" id="contact_subject" class="form-control bg-contrast" placeholder="Telefono">
                            @error('phone')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                            </div>


                            <div class="mb-4"><label for="contact_email" class="text-dark bold">Mensaje</label> <textarea wire:model.defer="message" name="message" id="contact_message" class="form-control bg-contrast" placeholder="Expliquenos su proyecto?" rows="8"></textarea>
                            @error('message')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                            </div>


                            <div class="d-grid gap-2"><button wire:click="save" id="contact-submit" data-loading-text="Sending..." name="submit" type="submit" class="btn btn-primary btn-rounded">Enviar Mensaje</button></div>
                        </form>

                        <div class="response-message">
                            <div class="section-heading"><i class="fas fa-check font-lg"></i>
                                <p class="font-md m-0">Thank you!</p>
                                <p class="response">Your message has been send, we will contact you as soon as possible.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 ms-md-auto">
                    {{-- <div class="d-flex mt-md-5"><i class="fas fa-map-marker font-l text-primary me-3"></i>
                        <div class="flex-fill">Tr, Your City,<span class="d-block">YC Country</span></div>
                    </div> --}}
                    <div class="d-flex my-4"><i class="fas fa-phone font-l text-primary me-3"></i>
                        <div class="flex-fill"><span class="d-block"><a href="tel:+573013809957">(+573013809957)</a></span> <span class="d-block"><a href="tel:+1-987-654-3201">+573013809957</a></span></div>
                    </div>
                    <div class="d-flex"><i class="fas fa-envelope font-l text-primary me-3"></i>
                        <div class="flex-fill"><a href="mailto:support@5studios.net">desarroweb501@gmail.com</a></div>
                    </div>
                    <hr class="my-4">
                    <nav class="nav justify-content-center justify-content-md-start"><a href="#" class="btn btn-circle btn-secondary btn-sm me-3"><i class="fab fa-facebook"></i></a> <a href="#" class="btn btn-circle btn-secondary btn-sm me-3"><i class="fab fa-twitter"></i></a> <a href="#" class="btn btn-circle btn-secondary btn-sm"><i class="fab fa-instagram"></i></a></nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ./Other contact channels -->
</div>
