<x-guestLayout>

    <style>
        .homepage-country-container{
            display: flex;
            justify-content: space-around;
        }

        .homepage-country-divsingle{
            text-align: center;
            border: 1px solid rgba(70, 70, 70, 0.353);
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .homepage-country-flag {
            width: 250px;
            height: 150px;
            object-fit: fill;
        }

        .homepage-country-divsingle:hover .homepage-country-flag{
            width: 255px;
            height: 155px;
            transition: 0.35s;
        }   

    </style>

    <div>
        <h1 style="text-align: center; font-size: 20px;">Welcome to a <span style="font-weight: bold;">BetterWorld</span></h1>

        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
        </p>
    </div>

    <div class="homepage-country-container">
        <div class="homepage-country-divsingle">
            <img src="https://upload.wikimedia.org/wikipedia/commons/f/fd/Flag_of_Senegal.svg" class="homepage-country-flag" alt="Country Flag">
            <p>Senegal</p>
        </div>

        <div class="homepage-country-divsingle">
            <img src="https://www.estudopratico.com.br/wp-content/uploads/2016/04/bandeira-portugal-1200x675.jpg" class="homepage-country-flag" alt="Country Flag">
            <p>Portugal</p>
        </div>
    </div>
</x-guestLayout>