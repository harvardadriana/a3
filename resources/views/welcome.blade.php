<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Scrabble</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>

            /*  RESET CSS  
             *****************/
            body, img, label, input, legend, fieldset  {
                padding: 0;
                margin: 0;
            }


            /*  LAYOUT  
             *****************/
            #left {
                float: left;
                width: 50%;
                height: 100vh;
                color: #fff;
                background-color: #3B3E71;
                text-align: center; 
            }

            #right {    
                float: right;
                width: 50%;
                height: 100vh;
                background-color: #fafafa;
            }


            /*  GENERAL STYLES  
             *****************/
            h1 {
                margin-top: 90px;
                font-size: 43px;
                letter-spacing: 0.4em;
            }

            h2 {
                font-size: 32px;
                margin-bottom: 45px;
            }

            img {
                width: 400px;
                height: auto;
                margin-bottom: 16px;
            }


            /*  FORMS
             *****************/
            label.textinput, 
            input.textinput, 
            legend, fieldset {
                display: block;
                margin: 0 auto; 
            }

            label.textinput {
                width: 250px;
                margin-top: 5em;
                text-align: center; 
                font-weight: bold;
            }

            input.textinput {
                margin-top: .5em;
                width: 250px;
                height: 50px;
                border-radius: 5px;
                font-size: 1.8em;
                padding: 8px;
            }

            fieldset {
                width: 250px;
                margin-top: 32px;
                background-color: #fff;
                padding: 18px 8px;
                border-radius: 5px;
                color: #54555b;
            }

            #bonus label {
                display: block;
            }

            #bonus input, #bingo input {
                margin-right: 10px;
                margin-left: 30px;
            }

            #note {
                font-size: small;
            }

            input[type="submit"] {
                display: block;
                margin: 0 auto;
                margin-top: 25px;
                width: 130px;
                height: 40px;
                background-color: #d7d8e2;
                border-radius: 10px;
            }


            /*  WARNINGS/MESSAGES
             *****************/
            .required {
                color: red;
                font-style: italic;
            }

            .errors {
                color: red;
                font-style: italic;
                text-align: center;
                font-weight: bold;
            }

            .results {
                width: 350px;
                margin: 0 auto;
                margin-top: 50px;
                padding: 7px 40px;
                color: #fff;
                font-size: 150%;
                background-color: #75779b;
                border-radius: 15px;
                text-align: center;
            }


            /* MEDIA QUERIES
             *******************/
            @media only screen and (max-width: 1200px) {
                body {
                    min-width: 1200px;
                }

                label.textinput {
                    margin-top: 2em;
                }

                fieldset {
                    margin-top: 20px;
                }
            }

        </style>
    </head>
    <body>

        <main>

            <h1>Hello world</h1>

        </main>

    </body>
</html>
