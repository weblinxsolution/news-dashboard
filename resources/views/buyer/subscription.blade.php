@extends('buyer.layout.main')
@section('buyer-template')

<style>
    .subscription_ .title {
        text-align: center;
        margin: 10px auto 50px auto;
        z-index: 1;
    }

    .subscription_ h2 {
        margin-top: 20px;
    }

    .subscription_ h3 {
        margin-top: 40px;
    }

    .subscription_ p {
        margin: 20px 30px;
        font-size: 16px;
    }

    .subscription_ small {
        font-size: 12px;
        color: gray;
    }

    .subscription_ .small-colored {
        color: #47cf73;
    }


    .subscription_ .offers {
        position: relative;
        text-align: center;
        background: #fff;
        padding: 1%;
        margin: 10px;
        width: 300px;
        height: auto;
        top: 0;
        border: 1px solid #eaeaea;
        z-index: 1;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
    }

    .subscription_ .offers:hover {
        position: relative;
        top: -20px;
        box-shadow: 0px 14px 6px 0px #0000004d;
    }

    .subscription_ .offers:nth-child(2) {
        border-top: 2px solid #47cf73;
        box-shadow: 0 0 10px 0px #0000001c;
    }

    .subscription_ .offers:nth-child(2) h3 {
        margin-top: 20px;
    }

    .subscription_ .offers:nth-child(2):hover {
        box-shadow: 0px 14px 6px 0px #0000004d;
    }

    .subscription_ button {
        font-size: 22px;
        font-weight: 500;
        background-color: #4169e1 !important;
        color: #fff;
        margin: 30px auto 20px auto;
        padding: 4% 8%;
        border: 0;
        transition-duration: 0.5s;
    }

    .subscription_ button:hover {
        background: #47cf73;
    }
</style>

<div class="content-wrapper wrapper-adjust">
    <div class="container-fluid mt-2">
        <div class="card">
            <div class="card-body">
                <h1 class="title text-center py-4">Subscription Plans</h1>
                <div class="container subscription_ d-flex flex-wrap justify-content-center">
                    <div class="offers">
                        <h2>Standard</h2>
                        <h3 class="price">$50</h3>
                        <small>Annually</small>
                        <p>Up to 3 Websites</p>
                        <p>Basic technical support</p>
                        <p>Basic access to analytics</p>
                        <button>Subscribe</button>
                    </div>
                    <div class="offers">
                        <h2>Premium</h2>
                        <small class="small-colored">Best offer!</small>
                        <h3 class="price">$80</h3>
                        <small>Annually</small>
                        <p>Up to 50 Websites</p>
                        <p>14/7 Support</p>
                        <p>Limited analytics</p>
                        <button>Subscribe</button>
                    </div>
                    <div class="offers">
                        <h2>Enterprise</h2>
                        <h3 class="price">$200</h3>
                        <small>Annually</small>
                        <p>Unlimited Websites</p>
                        <p>24/7 Support</p>
                        <p>Full Access to analytics</p>
                        <button>Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer-2.php') ?>
</div>
@endsection

