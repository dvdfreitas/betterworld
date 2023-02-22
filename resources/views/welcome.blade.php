<x-guestLayout>
    <style>
        .welcome-mainpage-div{
            background-image: url("https://cdn.mos.cms.futurecdn.net/quJFc2kidnxhbtHdNDsrna.jpg");
            opacity: 95%;
            height: 850px;
            width: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .welcome-mainpage-h1{
            font-size: 50px;
            color: rgb(8, 223, 48);
            font-weight: bold;
            text-shadow: 3px 3px black;
        }

        .welcome-mainpage-h1-p{
            font-size: 30px;
            color: white;
            font-weight: bold;
            text-shadow: 3px 3px black;
        }

        .activecountry-mainpage-div{
            background-color: rgb(185, 185, 185);
            padding-top: 50px;
            padding-bottom: 100px;
        }

        .activecountry-mainpage-h1{
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            color: black;
            margin-bottom: 20px;
        }

        .homepage-country-container{
            display: flex;
            justify-content: space-around;
        }

        .homepage-country-divsingle{
            text-align: center;
            border: 1px solid rgba(70, 70, 70, 0.353);
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            background-color: white;
        }

        .homepage-country-divsingle a p{
            font-weight: bold;
        }

        .homepage-country-flag {
            width: 350px;
            height: 185px;
            object-fit: cover;
        }

        .hompeage-country-name{
            padding: 1px;
            font-size: 25px;
            text-transform: capitalize;
        }

    </style>

    <div class="welcome-mainpage-div">
        <h1 class="welcome-mainpage-h1">Welcome to a <span>BetterWorld</span></h1>

        <p class="welcome-mainpage-h1-p">
            A Website wich shows the world as it is, in order to give vision to people, and help others.
        </p>
    </div>

    <div class="activecountry-mainpage-div">
        <h1 class="activecountry-mainpage-h1">Países Ativos</h1>
        <div class="homepage-country-container">
            @foreach($countries as $country)
                <div class="homepage-country-divsingle">
                    <a href="{{ url($country->name) }}">
                        <img src="{{$country->flag}}" class="homepage-country-flag" alt="Country Flag">
                        <p class="hompeage-country-name">{{$country->name}}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-guestLayout>