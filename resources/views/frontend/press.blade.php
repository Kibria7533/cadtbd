@extends('frontend.master')
@section('press')
<div class="container">
    <div class="row justify-content-center headline-container" style="padding-top:20px">
        <div class="col-8 headline">
            <h1 class="hed">Our Insight, Your Advantage</h1>
            <p class="dek">WSJ Pro is a premium suite of products for elite practitioners, powered by The Wall Street Journal’s peerless reporting and Dow Jones’ unrivaled data.</p>
        </div>
    </div>
    <div class="card-deck">

        <div class="card my-3">
            <a class="btn card-link" data-url="https://wsj.com/pro/ai">Artificial Intelligence</a>
            <img src="https://images.wsj.net/im-45878?width=1260&aspect_ratio=1.5" class="card-img-top">
            <div class="card-body d-flex flex-column">
                <h4 class="card-title">AI, Machine Learning Jobs Among Highest Paid in Tech</h4>
                <p class="card-text">Artificial-intelligence and machine-learning professionals are expected to earn some of the highest salaries for information-technology jobs in the year ahead.</p>
                <button class="btn btn-primary mt-auto" type="button" data-url="https://www.wsj.com/articles/ai-machine-learning-jobs-among-highest-paid-in-tech-11548325180">Read</button>
            </div>
        </div>
        <div class="card my-3">
            <a class="btn card-link" data-url="https://wsj.com/pro/bankruptcy">Bankruptcy</a>
            <img src="https://s.wsj.net/public/resources/images/S1-BT897_pgande_G_20190124144930.jpg" class="card-img-top">
            <div class="card-body d-flex flex-column">
                <h4 class="card-title">BlueMountain Seeks to Replace PG&E’s Board</h4>
                <p class="card-text">A hedge fund that recently raised its stake in PG&E Corp.’s stock is pushing to oust the California utility’s board of directors and says the shares, now trading around $7, could be worth more than $50 with the right corporate governance.</p>
                <button class="btn btn-primary mt-auto" type="button" data-url="https://www.wsj.com/articles/bluemountain-seeks-to-replace-pg-es-board-11548360742">Read</button>
            </div>
        </div>
        <div class="card my-3">
            <a class="btn card-link" data-url="https://wsj.com/pro/centralbanking">Central Banking</a>
            <img src="https://s.wsj.net/public/resources/images/S1-BT788_0124ec_G_20190124044813.jpg" class="card-img-top">
            <div class="card-body d-flex flex-column">
                <h4 class="card-title">ECB Worries Over Economy Mount, But Officials Stand Pat on Rates</h4>
                <p class="card-text">The European Central Bank opened the door to new stimulus measures to prop up the region’s economy, as policy makers navigate fractious U.S.-China trade negotiations and disruptive political events such as Brexit.</p>
                <button class="btn btn-primary mt-auto" type="button" data-url="https://www.wsj.com/articles/bluemountain-seeks-to-replace-pg-es-board-11548360742">Read</button>
            </div>
        </div>
        <div class="card my-3">
            <a class="btn card-link" data-url="https://wsj.com/pro/cybersecurity">Cybersecurity</a>
            <img src="https://si.wsj.net/public/resources/images/BN-WO705_WSJCyb_M_20171213113859.jpg" class="card-img-top">
            <div class="card-body d-flex flex-column">
                <h4 class="card-title">Cybersecurity</h4>
                <p class="card-text">A product designed to help executives monitor the ever-changing landscape of cybersecurity through a business lens. Our dedicated team of Pro journalists delivers unique, actionable insight on the wide-ranging challenges of cybercrime risk.</p>
                <button class="btn btn-primary mt-auto" type="button" data-url="https://buy.wsj.com/wsjprocs">Subscribe</button>
            </div>
        </div>
        <div class="card my-3">
            <a class="btn card-link" data-url="https://wsj.com/pro/privateequity">Private Equity</a>
            <img src="https://s.wsj.net/public/resources/images/S1-BT788_0124ec_G_20190124044813.jpg" class="card-img-top">
            <div class="card-body d-flex flex-column">
                <h4 class="card-title">Headline here</h4>
                <p class="card-text">Body here</p>
                <button class="btn btn-primary mt-auto" type="button" data-url="https://www.wsj.com/articles/bluemountain-seeks-to-replace-pg-es-board-11548360742">Read</button>
            </div>
        </div>
        <div class="card my-3">
            <a class="btn card-link" data-url="https://wsj.com/pro/centralbanking">Venture Capital</a>
            <img src="https://s.wsj.net/public/resources/images/S1-BT788_0124ec_G_20190124044813.jpg" class="card-img-top">
            <div class="card-body d-flex flex-column">
                <h4 class="card-title">Headline here</h4>
                <p class="card-text">Body here</p>
                <button class="btn btn-primary mt-auto" type="button" data-url="https://www.wsj.com/articles/bluemountain-seeks-to-replace-pg-es-board-11548360742">Read</button>
            </div>
        </div>



    </div>
</div>
    <style>
        .headline-container {
            padding-top: 20px;
        }
        .headline-container .headline {
            text-align: center;
        }
        .headline-container .headline .hed {
            font-family: "Whitney SSm", Helvetica, Arial, sans-serif;
        }
        .card {
            border-color: #c7b78f;
            border-radius: 0;
            border: none;
        }
        .card img {
            padding: 10px;
        }
        .card .card-link {
            font-weight: 600;
            text-transform: uppercase;
            font-family: "Whitney SSm", Helvetica, Arial, sans-serif;
            border-bottom: 1px solid #c7b78f;
            border-radius: 0;
        }
        .card .card-title, .card .card-text {
            font-family: "Whitney SSm", Helvetica, Arial, sans-serif;
        }
        .card .card-text {
            font-weight: 300;
        }

        .btn-primary {
            background-color: #328890;
            border: none;
            border-radius: 0;
            cursor: pointer;
            text-transform: uppercase;
            font-size: 12px;
            padding: 8px 12px;
        }
        .btn-primary:hover {
            background-color: black;
        }

        @media (min-width: 0) {
            .card-deck .card {
                flex: 0 0 calc(100% - 30px);
            }
        }
        @media (min-width: 576px) {
            .card-deck .card {
                flex: 0 0 calc(50% - 30px);
            }
        }
        @media (min-width: 768px) {
            .card-deck .card {
                flex: 0 0 calc(50% - 30px);
            }
        }
        @media (min-width: 992px) {
            .card-deck .card {
                flex: 0 0 calc(33.3333333333% - 30px);
            }
        }
        @media (min-width: 1200px) {
            .card-deck .card {
                flex: 0 0 calc(33.3333333333% - 30px);
            }
        }
    </style>
@endsection()
