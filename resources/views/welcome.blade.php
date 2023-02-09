<x-guestLayout>

    <style>
        .welcome-mainpage-div{
            background-image: url("https://cdn.mos.cms.futurecdn.net/quJFc2kidnxhbtHdNDsrna.jpg");
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
            /* color: rgb(8, 223, 48); */
            color: rgb(255, 217, 3);
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
            background-color: rgb(175, 175, 175);
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .activecountry-mainpage-h1{
            font-size: 30px;
            text-align: center;
            color: black;
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

        .homepage-country-flag {
            width: 350px;
            height: 205px;
            object-fit: fill;
        }

        .hompeage-country-name{
            padding: 1px;
            font-size: 25px;
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
            <div class="homepage-country-divsingle">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fd/Flag_of_Senegal.svg" class="homepage-country-flag" alt="Country Flag">
                <p class="hompeage-country-name">Senegal</p>
            </div>

            <div class="homepage-country-divsingle">
                <img src="https://www.estudopratico.com.br/wp-content/uploads/2016/04/bandeira-portugal-1200x675.jpg" class="homepage-country-flag" alt="Country Flag">
                <p class="hompeage-country-name">Portugal</p>
            </div>
        </div>
    </div>
</x-guestLayout>