<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    
    <form dir="rtl" method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('البريد الإلكتروني')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('كلمة المرور')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-start mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-blue-600 shadow-sm focus:ring-blue-600 dark:focus:ring-blue-500 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('تذكرني') }}</span>
            </label>&numsp;&numsp;&numsp;&numsp;&numsp;&numsp;&numsp;&numsp;&numsp;&numsp;
            @if (Route::has('password.request'))
            <a class="ms-24 underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                {{ __('هل نسيت كلمة المرور؟') }}
            </a>
            @endif
        </div>

        <div class="block mt-4">
            <x-primary-button class="ms-3">
                {{ __('دخول') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
{{-- <!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تسجيل الدخول</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('admin/auth/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('admin/auth/css/style.css')}}">
</head>
<body>

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{asset('admin/auth/images/signin-image.jpg')}}" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">تسجيل الدخول</h2>
                        <form method="POST" class="register-form" id="login-form" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" value="{{old('email')}}" id="email" placeholder="البريد الالكتروني"/>
                                <x-input-error :messages="$errors->get('email')" style="color: red" />
                            </div>
                            <div class="form-group">
                                <label  for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="كلمة المرور"/>
                                <x-input-error :messages="$errors->get('password')"  style="color: red"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember" id="remember_me" class="agree-term" />
                                <label for="remember_me" class="label-agree-term"><span><span></span></span>تذكرني</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="دخول"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


    <!-- JS -->
    <script src="{{asset('admin/auth/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/auth/js/main.js')}}"></script>
</body>
</html> --}}
