<section id="contacto" class="p-5 text-center">
    <h3>Solicita una demo</h3>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <form action="/contacto" method="POST" class="mt-4">
        @csrf

        <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" required>
        <input type="email" name="email" placeholder="Correo" class="form-control mb-2" required>
        <input type="text" name="telefono" placeholder="Teléfono" class="form-control mb-2">
        <textarea name="mensaje" placeholder="Mensaje" class="form-control mb-2"></textarea>

        <button class="btn btn-primary">Enviar</button>
    </form>
</section>