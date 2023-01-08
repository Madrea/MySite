@extends('layouts.app')
<head>
    <title>Madrea Mircea</title>
</head>
<div class="business-card">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css"
          rel="stylesheet">
    <script src="https://kit.fontawesome.com/ed99b80982.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <div class="main-person-and-company-div">
        <div class="business-card_header">

            <div class="business-card_cover">
                <img
                    src="https://upload.wikimedia.org/wikipedia/ro/thumb/b/ba/Logo_Universitatea_Babe%C8%99-Bolyai.svg/1280px-Logo_Universitatea_Babe%C8%99-Bolyai.svg.png"
                    class="preview-full-width-cover-image"
                    alt="{{__('Cover Image')}}"/>
            </div>

            <div class="business-card_profile distance-from-cover-image-full-width">
                <img class="round-profile-photo"
                     src="https://i.stack.imgur.com/l60Hf.png"
                     alt="{{__('Profile Image')}}"/>
            </div>

            <div class="home-page-buttons">

                <div class="first-pair-of-buttons">
                    <button type="button" class="btn one-home-button" style="font-size: 24px"><i class="fa-solid fa-house" style="margin-right: 10px"></i>Home</button>
                    <button type="button" class="btn one-home-button" style="font-size: 24px"><i class="fa-regular fa-address-card" style="margin-right: 10px"></i>About</button>
                    <button type="button" class="btn one-home-button" style="font-size: 24px"><i class="fa-sharp fa-solid fa-school" style="margin-right: 10px"></i>Teaching</button>
                </div>

                <div class="second-pair-of-buttons">
                    <div class="dropdown show" style="width: 30%">
                        <button class="btn dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="width: 100%; color: black; background-color: aliceblue; font-size: 24px; margin-top: 13px"
                        >
                            <i class="fa-regular fa-newspaper" style="margin-right: 10px"></i>News
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 100%;">
                            <a class="dropdown-item" href="{{route('announcements')}}" target="_blank">Announcements</a>
                            <a class="dropdown-item" href="#">News</a>
                        </div>
                    </div>
                    <button type="button" class="btn one-home-button" style="font-size: 24px"><i class="fa-solid fa-magnifying-glass" style="margin-right: 10px"></i>Research</button>
                    <button type="button" class="btn one-home-button" style="font-size: 24px"><i class="fa-regular fa-face-party" style="margin-right: 10px"></i>The fun corner</button>
                </div>

            </div>

            <div class="business-card_name">Prof. Dr. Mircea M. Madrea</div>

        </div>

    </div>

    <style>

        @media only screen
        and (min-device-width: 320px)
        and (max-device-width: 480px) {
            /* Styles */
            .round-profile-photo {
                width: 355px !important;
                height: 355px !important;
                position: relative;
                left: 0;
                right: 0;
                bottom: 0;
                margin-top: 50px;
                margin-left: auto;
                margin-right: auto;
                object-fit: contain;
                border-radius: 50%;
            }

            .preview-full-width-cover-image {
                position: absolute;
                width: 100%;
                height: 345px !important;
                right: 0px;
                left: 0px;
                top: 0px;
                object-position: 0% 50% !important;
                object-fit: cover !important;
            }

            .distance-from-cover-image-full-width {
                margin-top: 200px !important;
            }

            .business-card_name {
                position: relative;
                text-align: center;
                margin-bottom: 10px;
                font-family: Roboto;
                font-size: 50px !important;
                font-weight: 700;
                margin-top: 20px;
            }


            .main-person-and-company-div {
                min-height: 1550px !important;
            }

        }

        .first-pair-of-buttons{
            width: 50%;
            display: flex;
            justify-content: flex-start;
        }

        .second-pair-of-buttons{
            width: 50%;
            display: flex;
            justify-content: flex-end;
        }

        .one-home-button{
            width: 30%;
            color: aliceblue;
            background-color: aliceblue;
        }

        .home-page-buttons {
            height: 80px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            background-color: aliceblue;
            color: #234279;
            margin-top: -100px;
            border-top: 1px solid #4a4ab2;
        }

        .round-profile-photo {
            width: 160px;
            height: 160px;
            position: relative;
            left: 0;
            right: 0;
            bottom: 0;
            margin-top: -180px;
            margin-left: auto;
            margin-right: auto;
            object-fit: cover;
            border-radius: 50%;
        }

        .distance-from-cover-image-full-width {
            margin-top: 500px;
        }

        .preview-full-width-cover-image {
            position: absolute;
            width: 100%;
            height: 400px;
            right: 0px;
            left: 0px;
            top: 0px;
            object-fit: contain;
            background-color: aliceblue;
            padding-bottom: 70px;
        }


        .business-card_profile {
            position: relative;
            display: flex;
            justify-content: center;
            min-width: 500px;
        }

        .business-card_header,
        .business-card_buttons {
            margin: 0 auto;
        }

        .business-card_name {
            position: relative;
            text-align: center;
            margin-bottom: 10px;
            font-family: Roboto;
            font-size: 24px;
            font-weight: 700;
            margin-top: 20px;

        }

        .business-card_position {
            position: relative;
            text-align: center;
            margin-bottom: 10px;
            margin-top: 20px;
            font-family: Roboto;
            font-size: 24px;
            font-weight: 700;
        }


        .main-person-and-company-div {
            padding-bottom: 30px;
        }
    </style>
</div>
