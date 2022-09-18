@section('title', 'User-Settings')

<div class="main__content">
    <div class="collapse__sidebar">
        <h4>Dashboard</h4>
        <a href="javascript:void(0)" class="collapse__sidebar__btn">
            <i class="fas fa-bars"></i>
        </a>
    </div>
    <div class="dashboard__head">
        <h5>Settings</h5>
    </div>
    <div class="settings__tab__wrapper">
        <div class="settings__tab__btn__wrapper">
            <a href="#personalData" class="settings__tab__btn settings__tab__btn__active">Personal Data</a>
            <a href="#contactInformation" class="settings__tab__btn">Contact Information</a>
            <a href="#changePassword" class="settings__tab__btn">Password</a>
            <a href="#twoFactor" class="settings__tab__btn">Two - Factor - Authentication</a>
        </div>
        <div class="settings__tab__content__wrapper">
            <div class="settings__tab__content" id="personalData">
                <form action="#" method="post" class="personalInformationForm">
                    <div class="profilePicInfo">
                        <input type="file" name="profile__pic" id="profilePic" />
                        <label for="profilePic">
                            <img src="{{ asset('assets/images/profile.png') }}" alt="Profile Picture" />
                        </label>
                        <p class="tertiary">Change Photo</p>
                        <h5>Roger Smith</h5>
                        <p class="tertiary"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="0f7d60686a7d373b4f68626e6663216c6062">[email&#160;protected]</a></p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input__area text-start content__space">
                                <label for="pfirstName" class="content__space--extra--small">First Name *</label>
                                <input type="text" name="first_name" id="pfirstName" placeholder="Roger" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input__area text-start content__space">
                                <label for="plastName" class="content__space--extra--small">Last
                                    Name *</label>
                                <input type="text" name="first_name" id="plastName" placeholder="Smith" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input__area text-start content__space">
                                <label for="birthDate" class="content__space--extra--small">Date
                                    of Birth *</label>
                                <input type="date" name="birth_date" id="birthDate" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input__area text-start content__space">
                                <label for="zipCode" class="content__space--extra--small">ZIP
                                    Code *</label>
                                <input type="text" name="zip_code" id="zipCode" placeholder="Zip Code" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input__area text-start content__space">
                                <label for="personalAddress" class="content__space--extra--small">Address Line 1
                                    *</label>
                                <input type="text" name="personal_address2" id="personalAddress"
                                    placeholder="Address" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input__area text-start content__space">
                                <label for="personalAddress2" class="content__space--extra--small">Address Line 2
                                    (Optional)</label>
                                <input type="text" name="personal_address2" id="personalAddress2"
                                    placeholder="Address" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input__area text-start column__space">
                                <label for="personalCity" class="content__space--extra--small">City *</label>
                                <input type="text" name="personal_city" id="personalCity" placeholder="City" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input__area text-start">
                                <label for="selectCountry" class="content__space--extra--small">Country *</label>
                                <select id="selectCountry">
                                    <option data-display="Select Country">Nothing</option>
                                    <option value="australia">Australia</option>
                                    <option value="brazil">Brazil</option>
                                    <option value="argentina">Argentina</option>
                                    <option value="japan">Japan</option>
                                    <option value="china">China</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="btn__group">
                        <button type="reset" class="button">Discard</button>
                        <button type="submit" class="button">Submit</button>
                    </div>
                </form>
            </div>
            <div class="settings__tab__content" id="contactInformation">
                <div class="settings__tab__content__inner">
                    <form action="#" method="post">
                        <div class="input__area text-start content__space">
                            <label for="pEmail" class="content__space--extra--small">Email</label>
                            <input type="email" name="p_email" id="pEmail" placeholder="roger84@gmail.com" />
                        </div>
                        <div class="input__area text-start content__space">
                            <label for="pnumber" class="content__space--extra--small">Phone
                                Number (Optional)</label>
                            <input type="number" name="p_number" id="pnumber"
                                placeholder="e.g. 004916112345678" />
                        </div>
                        <div class="input__area text-start content__space alt">
                            <label for="pLanguage" class="content__space--extra--small">Country
                                *</label>
                            <select id="pLanguage">
                                <option value="english">English</option>
                                <option value="brazil">Brazil</option>
                                <option value="argentina">Argentina</option>
                                <option value="japan">Japan</option>
                                <option value="china">China</option>
                                <option value="spain">Spanish</option>
                            </select>
                        </div>
                        <div class="btn__group">
                            <button type="reset" class="button">Discard</button>
                            <button type="submit" class="button">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="settings__tab__content" id="changePassword">
                <div class="settings__tab__content__inner">
                    <form action="#" method="post">
                        <div class="input__area text-start content__space">
                            <label for="curPass" class="content__space--extra--small">Current
                                Password *</label>
                            <div class="show__hide__password">
                                <input type="password" name="cur__password" id="curPass"
                                    placeholder="Current Password" required="required" />
                            </div>
                        </div>
                        <div class="input__area text-start content__space">
                            <label for="newPass" class="content__space--extra--small">New
                                Password *</label>
                            <div class="show__hide__password">
                                <input type="password" name="new__password" id="newPass"
                                    placeholder="New Password" required="required" />
                                <i class="fas fa-eye-slash login__toggle__password2"></i>
                            </div>
                        </div>
                        <div class="input__area text-start content__space">
                            <label for="conNewPass" class="content__space--extra--small">Confirm
                                New Password *</label>
                            <div class="show__hide__password">
                                <input type="password" name="confirm__new__password" id="conNewPass"
                                    placeholder="Confirm New Password" required="required" />
                                <i class="fas fa-eye-slash login__toggle__password3"></i>
                            </div>
                        </div>
                        <div class="btn__group">
                            <button type="reset" class="button">Discard</button>
                            <button type="submit" class="button">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="settings__tab__content" id="twoFactor">
                <div class="settings__tab__content__inner">
                    <form action="#" method="post" id="twoFactForm">
                        <img src="{{ asset('assets/images/bar-code.png') }}" alt="Two-Factor-Authentication" />
                        <h6>Your secret key: <span>TEBNZGJVK75FOADT</span></h6>
                        <p class="tertiary">Generate new code</p>
                        <div class="btn__group">
                            <button type="reset" class="button">Discard</button>
                            <button type="submit" class="button">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
