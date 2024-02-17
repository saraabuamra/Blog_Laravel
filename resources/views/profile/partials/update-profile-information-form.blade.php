<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('السيرة الذاتية') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("اذا كنت ترغب في تعديل سيرتك الذاتية وبريدك الإلكتروني.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('الاسم')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('البريد الإلكتروني')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <x-input-label for="mobile" :value="__('رقم الجوال')" />
            <x-text-input id="mobile" name="mobile" type="text" class="mt-1 block w-full" :value="old('mobile', $user->mobile)" required autofocus autocomplete="mobile" />
            <x-input-error class="mt-2" :messages="$errors->get('mobile')" />
        </div>

        <div>
            <x-input-label for="experience" :value="__('الخبرات')" />
            <x-text-input id="experience" name="experience" type="text" class="mt-1 block w-full" :value="old('experience', $user->experience)" required autofocus autocomplete="experience" />
            <x-input-error class="mt-2" :messages="$errors->get('experience')" />
        </div>

        <div>
            <x-input-label for="qualification" :value="__('المؤهلات')" />
            <x-text-input id="qualification" name="qualification" type="text" class="mt-1 block w-full" :value="old('qualification', $user->qualification)" required autofocus autocomplete="qualification" />
            <x-input-error class="mt-2" :messages="$errors->get('qualification')" />
        </div>

        <div>
            <x-input-label for="certificate" :value="__('الشهادات')" />
            <x-text-input id="certificate" name="certificate" type="text" class="mt-1 block w-full" :value="old('certificate', $user->certificate)" required autofocus autocomplete="certificate" />
            <x-input-error class="mt-2" :messages="$errors->get('certificate')" />
        </div>

        <div>
            <x-input-label for="hobbies" :value="__('الهوايات')" />
            <x-text-input id="hobbies" name="hobbies" type="text" class="mt-1 block w-full" :value="old('hobbies', $user->hobbies)" required autofocus autocomplete="hobbies" />
            <x-input-error class="mt-2" :messages="$errors->get('hobbies')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('حفظ') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
