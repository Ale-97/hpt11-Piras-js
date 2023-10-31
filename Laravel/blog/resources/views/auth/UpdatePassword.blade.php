<x-layout-main>

    <x-success />
    <div class="row">
        <div class="col-lg-4 mx-auto">
            <div class="card">
                <div class="card-header">
                    Aggiona Password
                </div>
                <div class="card-body">
                    <form action="{{ route('updatePassword.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="current_password">Password corrente</label>
                                <input type="password" name="current_password" id="current_password" class="form-control">
                                @error('current_password', 'updatePassword') {{ $message }} @enderror
                            </div>
                            <div class="col-12">
                                <label for="password">Nuova Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                                @error('password', 'updatePassword') {{ $message }} @enderror
                            </div>
                            <div class="col-12">
                                <label for="password_confirmation">Conferma Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Accedi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout-main>