<x-layout-main>

    <div class="mt-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">                

                <h1>Contattaci</h1>
                <p class="text-secondary">...</p>

                <x-success />

                <x-errors />

                <form action="{{ route('contacts.send') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="col-12">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="col-12">
                            <label for="message">Messaggio</label>
                            <textarea name="message" id="message" class="form-control" rows="6"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Invia messaggio</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</x-layout-main>