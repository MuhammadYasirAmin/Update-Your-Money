@section('title', 'My Affilates')

<div class="main__content">
    <div class="collapse__sidebar">
        <h4>Dashboard</h4>
        <a href="javascript:void(0)" class="collapse__sidebar__btn">
            <i class="fas fa-bars"></i>
        </a>
    </div>
    <div class="dashboard__head">
        <h5>Affiliate Program</h5>
    </div>
    <div class="affiliate__links">
        <div class="row">
            <div class="col-lg-8">
                <div class="affiliate__link column__space">
                    <h5>Your Affiliate Link</h5>
                    <div class="copy">
                        <p>https://Spoment.net/?ref=Jeffrey Morgan</p>
                        <a href="javascript:void(0)" class="button">Copy link</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="rank">
                    <h6>Your Rank</h6>
                    <h5>01</h5>
                    <img src="{{ asset('assets/images/dashboard/hands.png') }}" alt="Ranks" />
                </div>
            </div>
        </div>
    </div>
    <div class="level">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="level__single column__space">
                    <a href="#" class="button">1 Level</a>
                    <p>0 / 0</p>
                    <p class="tertiary">Partners / Active</p>
                    <hr />
                    <h5>$0.00</h5>
                    <p class="tertiary">Earned</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="level__single column__space">
                    <a href="#" class="button">2 Level</a>
                    <p>0 / 0</p>
                    <p class="tertiary">Partners / Active</p>
                    <hr />
                    <h5>$0.00</h5>
                    <p class="tertiary">Earned</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="level__single">
                    <a href="#" class="button">3 Level</a>
                    <p>0 / 0</p>
                    <p class="tertiary">Partners / Active</p>
                    <hr />
                    <h5>$0.00</h5>
                    <p class="tertiary">Earned</p>
                </div>
            </div>
        </div>
    </div>
</div>
