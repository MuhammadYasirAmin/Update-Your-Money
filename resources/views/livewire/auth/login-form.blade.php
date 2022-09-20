@section('title', 'Login Form')

<!-- ==== page wrapper start ==== -->
    <div class="page__wrapper bg__img" data-background="{{ asset('assets/images/register/register-bg.png') }}">
        <!-- ==== #page animation start ==== -->
        <div class="page__animation">
            <img src="{{ asset('assets/images/register/basketball-player.png') }}" alt="Basketball-player" class="basket" />
            <img src="{{ asset('assets/images/register/football-player.png') }}" alt="Football-player" class="football" />
            <img src="{{ asset('assets/images/register/bitcoin.png') }}" alt="Bitcoin" class="bitcoin" />
            <img src="{{ asset('assets/images/register/litecoin.png') }}" alt="Litecoin" class="litecoin" />
            <img src="{{ asset('assets/images/register/ethereum.png') }}" alt="Ethereum" class="ethereum" />
        </div>
        <!-- ==== #page animation end ==== -->
    </div>
    <!-- ==== #page wrapper end ==== -->

    <!-- ==== login form start ==== -->
    <section class="register">
        <div class="container">
            <div class="register__area login__area">
                <h3 class="content__space--small text-center">Welcome Back!</h3>
                <p class="text-center mb-55">Enter your details below.</p>
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <div class="input__area text-start content__space">
                        <label for="loginMail" class="content__space--small">Your Name</label>
                        <input type="email" name="email" id="loginMail" placeholder="Enter Email"
                            required="required" />
                    </div>
                    <div class="input__area text-start content__space--small">
                        <label for="loginMail" class="content__space--small">Enter Password</label>
                        <div class="show__hide__password">
                            <input type="password" name="password" id="loginPass" placeholder="Enter Password"
                                required="required" />
                            <i class="fas fa-eye-slash login__toggle__password"></i>
                        </div>
                    </div>
                    <div class="input__area__alt cta__space">
                        <div class="input__area__alt__inner">
                            <input type="checkbox" name="remember__me" id="rememberPass" checked="checked" />
                            <label for="rememberPass">Remember Me</label>
                        </div>
                        <a href="javascript:void(0)">Forget Your Password</a>
                    </div>
                    <button type="submit" class="button content__space">LOG IN</button>
                    <p class="text-center">Don't have an account? <a href="/Authentication/Registeration">SIGN UP</a></p>
                </form>
            </div>
        </div>
    </section>
    <!-- ==== #login form end ==== -->
