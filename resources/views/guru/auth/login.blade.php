<x-layouts.auth>
    <x-slot:title>
        Login Guru
    </x-slot:title>
    {{-- Content --}}
    <div class="card overflow-hidden shadow shadow-lg">
        <div class="bg-success">
            <div class="text-primary text-center p-4">
                <h5 class="text-white font-size-20">Selamat datang kembali !</h5>
                <p class="text-white">Guru SIM Sekolah.</p>
                <a href="index.html" class="logo logo-admin">
                    <img src="{{ asset('assets/images/logo-sm.png') }}" height="24" alt="logo">
                </a>
            </div>
        </div>

        <div class="card-body p-4">
            <div class="p-3">
                @if($errors->has('nip'))
                    <div class="py-3">
                        <x-ui.alert type="danger" message="{{ $errors->first('nip') }}" />
                    </div>
                @endif
                <form class="mt-4" action="{{ route('guru.login') }}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label class="form-label" for="nip">NIP</label>
                        <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" id="nip" placeholder="nomor induk pegawai">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                    </div>

                    <div class="mb-3 row">
                        <div class="col-sm-6">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                        </div>
                        <div class="col-sm-6 text-end">
                            <button class="btn btn-success w-md waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>

                    <div class="mt-2 mb-0 row">
                        <div class="col-12 mt-4">
                            <a href="pages-recoverpw.html"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                        </div>
                    </div>

                </form>

            </div>
        </div>

    </div>
</x-layouts.auth>
