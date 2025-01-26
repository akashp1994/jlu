<title>Jagran Lakecity University</title>
<link rel="stylesheet" href="login-css/style.css">

<body>
    <img class="logo" src="wp-content/uploads/2023/08/jlu-logo-70.png" alt="">
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <h1 class="opacity">REGISTER</h1>
                @if($errors->any())
                    <div class="error-message">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session('success'))
                    <div class="success-message">{{ session('success') }}</div>
                @endif
                <form method="POST" action="{{ route('register.store') }}">
                    @csrf
                    <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}"
                        required />
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"
                        required />
                    <input type="text" name="enroll_no" placeholder="Enroll No"
                        value="{{ old('enroll_no') }}" required />
                    <input type="password" name="password" placeholder="Password" required />
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required />
                    <button class="opacity" type="submit">REGISTER</button>
                </form>
                <div class="register-forget opacity">
                    <a href="{{ route('login') }}">Already have an account? Login</a>
                </div>
            </div>
            <div class="circle circle-two"></div>
        </div>
    </section>
</body>
<script src="login-js/login.js"></script>