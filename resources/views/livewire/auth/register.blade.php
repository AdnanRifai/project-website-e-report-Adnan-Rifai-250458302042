<div id="auth-left">
    <div class="auth-logo">
        <a href="index.html"><img src="{{ asset('dist/assets/compiled/svg/logo.svg') }}" alt="Logo"></a>
    </div>
    <h1 class="auth-title">Register.</h1>
    <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>

    <form wire:submit.prevent="save">
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" wire:model="name" class="form-control form-control-xl" placeholder="Name">
            <div class="form-control-icon">
                <i class="bi bi-person"></i>
            </div>
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="email" wire:model="email" class="form-control form-control-xl" placeholder="Email">
            <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
            </div>
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="number" wire:model="no_whatsapp" class="form-control form-control-xl"
                placeholder="Number Whatsapp">
            <div class="form-control-icon">
                <i class="bi bi-whatsapp"></i>
            </div>
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" wire:model="password" class="form-control form-control-xl" placeholder="Password">
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="file" wire:model="foto" class="form-control form-control-xl"
                placeholder="Upload your photo">
            <div class="form-control-icon">
                <i class="bi bi-image"></i>
            </div>

            @if ($foto)
                <img src="{{ $foto->temporaryUrl() }}" alt="Foto" class="img-fluid w-25">
            @endif
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <textarea name="alamat" wire:model="alamat" class="form-control form-control-xl" placeholder="Alamat"></textarea>
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
        </div>
        <div class="form-check form-check-lg d-flex align-items-end">
            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                Keep me logged in
            </label>
        </div>
        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
    </form>
    <div class="text-center mt-5 text-lg fs-4">
        <p class="text-gray-600">Don't have an account? <a href="auth-register.html" class="font-bold">Sign
                up</a>.</p>
        <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>
    </div>
</div>