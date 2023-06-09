<x-guest-layout>


    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label value="{{ __('Email') }}" />
                <x-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label value="{{ __('Password') }}" />
                <x-input class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
<div class="mt-4 block w-full mb-4">
    <x-button class="w-full text-center justify-center">
        {{ __('Login') }}
    </x-button>
</div>



            <hr>
  <div class="mt-4 block w-full mb-4" style="display: flex; justify-content: center;">
  <a href="{{ url('auth/google') }}" style="margin-top: 0px !important; background: #4285F4; color: #ffffff; padding: 8px; border-radius: 6px; margin-right: 10px;">
    <strong>Continue with Google <i class="fas fas-google" aria-hidden="true"></i></strong>
  </a>
  <a href="{{ url('/register') }}" style="margin-top: 0px !important; background: #C84130; color: #ffffff; padding: 8px; border-radius: 6px;">
    <strong>Create Account</strong>
  </a>
</div>


            <div>

                  @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
