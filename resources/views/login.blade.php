<title>Jagran Lakecity University</title>
<link rel="stylesheet" href="login-css/style.css">

<body>
    <a href="{{url('/')}}"><img class="logo" src="wp-content/uploads/2023/08/jlu-logo-70.png" alt=""></a>
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <h1 class="opacity">LOGIN</h1>
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
                <form method="POST" action="{{ route('authenticate') }}">
                    @csrf
                    <input type="text" name="email_or_enroll_no" placeholder="Email/Enroll No"
                        value="{{ old('email_or_enroll_no') }}" />
                    <input type="password" name="password" placeholder="Password" />
                    <button class="opacity" type="submit">LOGIN</button>
                </form>
                <div class="register-forget opacity">
                    <a href="{{ route('register') }}">Register</a>
                    <a href="">Forgot Password</a>
                </div>
            </div>
            <div class="circle circle-two"></div>
        </div>
    </section>
</body>
<script src="login-js/login.js"></script>