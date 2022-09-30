@section('title', 'SignUp Form')

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

<!-- ==== register form start ==== -->
<section class="register">
    <div class="container">
        <div class="register__area">
            <h3 class="content__space--small text-center">Become a New Investor</h3>
            <p class="text-center mb-55">Become one of our investors and start making money</p>
            <form method="POST" action="{{ route('referal.register.post', ['UserId' => $UserId, 'UserName' => $UserName]) }}"
                >
                @csrf
                <input hidden type="text" name="UserId" value="{{ $UserId }}">
                <input hidden type="text" name="UserName" value="{{ $UserName }}">
                <div class="input__grp content__space">
                    <div class="row d-flex align-items-start">
                        <div class="col-md-6">
                            <div class="input__area text-start">
                                <label for="fullName" class="content__space--small">Your Name</label>
                                <input type="text" name="Reg_Name" id="fullName" placeholder="Your Full Name"
                                    required="required" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input__area text-start">
                                <label for="userPhone" class="content__space--small">Your Phone</label>
                                <input type="number" name="Reg_Phone" id="userName" placeholder="Enter Phone Number"
                                    required="required" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input__grp cta__space">
                    <div class="row d-flex align-items-start">
                        <div class="col-md-6">
                            <div class="input__area text-start">
                                <label for="mail" class="content__space--small">Your E-mail</label>
                                <input type="email" name="Reg_Email" id="mail" placeholder="Your E-mail Address"
                                    required="required" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input__grp content__space">
                    <div class="row d-flex align-items-start">
                        <div class="col-md-6">
                            <div class="input__area text-start">
                                <label for="regiPass" class="content__space--small">Define Password</label>
                                <div class="show__hide__password">
                                    <input type="password" name="Reg_Pass" id="regiPass" placeholder="Define Password"
                                        required="required" />
                                    <i class="fas fa-eye-slash toggle__password"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input__area text-start">
                                <label for="retypePass" class="content__space--small">Retype Password</label>
                                <div class="show__hide__password">
                                    <input type="password" name="Reg_CPass" id="retypePass"
                                        placeholder="Retype Password" required="required" />
                                    <i class="fas fa-eye-slash retype__toggle__password"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="button content__space">SIGN UP</button>
                <p class="text-center">Already have an account? <a href="/Authentication/LoginForm">LOGIN</a></p>
            </form>
        </div>
    </div>
</section>
<!-- ==== #register form end ==== -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
    integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if (Session::has('User_Registerd'))
    <script>
        toastr.success("{!! Session::get('User_Registerd') !!}");
    </script>
@endif
@if (Session::has('User_Not_Registerd'))
    <script>
        toastr.error("{!! Session::get('User_Not_Registerd') !!}");
    </script>
@endif
