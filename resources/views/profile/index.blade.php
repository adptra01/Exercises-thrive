<x-auth>
    <div class="container">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Profile</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-password-tab" data-bs-toggle="pill" data-bs-target="#pills-password"
                    type="button" role="tab" aria-controls="pills-password" aria-selected="true">Password</button>
            </li>

        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                aria-labelledby="pills-profile-tab" tabindex="0">
                <!-- Start Authentication -->
                <form action="{{ route('profile.update') }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="text" class="form-label">Nama Pengguna</label>
                        <input type="text" class="form-control" value="{{ $auth->name }}" name="name"
                            id="name" aria-describedby="helpId" placeholder="name">
                        @error('name')
                            <small class="text-danger fw-bold">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Pengguna</label>
                        <input type="text" class="form-control" value="{{ $auth->email }}" name="email"
                            id="email" aria-describedby="helpId" placeholder="email">
                        @error('email')
                            <small class="text-danger fw-bold">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-outline-success">Update Profil Pengguna</button>
                </form>
                <!-- End Authentication  -->
            </div>
            <div class="tab-pane fade" id="pills-password" role="tabpanel" aria-labelledby="pills-password-tab"
                tabindex="0">
                <form method="POST" action="{{ route('profile.password') }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="password" class="form-label">Password Baru</label>
                        <input id="password" type="password" class="form-control" name="password" required
                            autocomplete="new-password">
                        @error('password')
                            <small class="text-danger fw-bold">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                        <input id="password_confirmation" class="form-control" type="password"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-outline-success">Update Password</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</x-auth>
