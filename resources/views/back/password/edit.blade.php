@extends('layouts.back')

@section('content')
    <main class="container bg-white py-3 my-3 shadow-sm rounded-2 mt-4 shadow-lg mb-4">
        <div class="row mb-4">
            <div class="col-5 mx-auto">
                <h1 class="text-center">Change Password </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-5 mx-auto">

                <form action="{{ route('back.password.update') }}" method="POST">

                    @method('PUT')
                    @csrf


                    <div class="mb-3">
                        <label for="old_password" class="form-label">Old Password</label>
                        <input type="password" name="old_password" id="old_password"
                            class="form-control @error('old_password')
                                     is-invalid
                                @enderror"
                            value="{{ old('old_password') }}" required />

                        @error('old_password')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">New Password</label>
                        <input type="password" name="password" id="password"
                            class="form-control @error('password')
                                     is-invalid
                                @enderror"
                            value="{{ old('password') }}" required />

                        @error('password')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm New Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="form-control @error('password_confirmation')
                                     is-invalid
                                @enderror"
                            value="{{ old('password_confirmation') }}" required />

                        @error('password_confirmation')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark">
                            <i class="fa-solid fa-save"></i>
                            Save</button>
                    </div>



                </form>

            </div>
        </div>

    </main>
@endsection
