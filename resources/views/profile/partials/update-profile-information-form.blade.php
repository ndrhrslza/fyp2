<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>


    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full max-w-md p-2 border border-gray-550 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full max-w-md p-2 border border-gray-550 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

           <!-- @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md  focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif-->
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="bg-green-500 text-black py-2 px-4 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                {{ __('Save') }}
            </button>
            <!--<x-primary-button>{{ __('Save') }}</x-primary-button>-->

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-black-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
<style>
    /* General Styling */
body {
    font-family: Poppins, sans-serif;
    background-color: #f9fafb;
    margin: 0;
    padding: 20px;
}

/*Section Styling
section {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: 20px auto;
}

Header Styling */
header {
    border-bottom: 1px solid #e5e7eb;
    padding-bottom: 10px;
    margin-bottom: 20px;
}

header h2 {
    font-size: 1.5rem;
    color: #111827;
    margin: 0;
}

header p {
    font-size: 0.875rem;
    color: #6b7280;
    margin-top: 5px;
}

/* Form Elements Styling */
form {
    display: flex;
    flex-direction: column;
}

form div {
    margin-bottom: 20px;
}

.x-input-label {
    font-weight: 500;
    color: #374151;
    margin-bottom: 5px;
    display: block;
}

.x-text-input {
    width: 100%; /* Increase the width to 100% of the parent container */
    max-width: 500px; /* Optionally set a maximum width */
    padding: 15px; /* Increase padding for a larger input box */
    border: 1px solid #d1d5db;
    border-radius: 6px;
    font-size: 1rem;
    color: #374151;
    transition: border-color 0.3s ease;
    box-sizing: border-box;
}

.x-text-input:focus {
    outline: none;
    border-color: #6366f1;
    box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.3);
}

.x-input-error {
    font-size: 0.875rem;
    color: #f87171;
    margin-top: 5px;
}

/* Button Styling */
.flex items-center gap-4  {
    background-color: #6366f1;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 6px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.x-primary-button:hover {
    background-color: #4f46e5;
}

.flex.items-center.gap-4 p {
    margin-left: 10px;
    font-size: 0.875rem;
    color: #10b981;

}

.flex.items-center.gap-4 p[x-show="show"] {
    transition: opacity 0.5s ease;
}

    </style>
