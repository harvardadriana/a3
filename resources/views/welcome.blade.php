<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Scrabble</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css" />

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="css/styles.css" />

    </head>
    <body>

        <main>

            <div id="left">
                <h1>DWA SCRABBLE </h1>
                <h2>Word Score Calculator</h2>
                <!-- <img> wrapped in <p> tag for semantic reasons -->
                <p><img src="images/scrabble.jpg" alt="Tiles - Wooden Letters" /></p>
            </div>
 
            <div id="right">
                <form method="GET" action="/">

                    <!-- YOUR WORD: get user input -->
                    <label for="word" class="textinput required" >&#42;Required</label>
                    <input type="text" name="word" id="word" class="textinput" maxlength="15" placeholder="Type your word" value="{{ $word or '' }}" /><br />

                    <!-- ERROR MESSAGES TO THE USER -->
                    @if(count($errors) > 0)
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <!-- BONUS POINT -->
                    <fieldset>
                        <legend>Bonus point</legend>
                        <div id="bonus">
                            <label><input type="radio" name="bonus" value="none" {{ ($bonus == 'none') ? 'CHECKED' : '' }} />None</label>
                            <label><input type="radio" name="bonus" value="double" {{ ($bonus == 'double') ? 'CHECKED' : '' }} />Double word score</label>
                            <label><input type="radio" name="bonus" value="triple" {{ ($bonus == 'triple') ? 'CHECKED' : '' }} />Triple word score</label>
                        </div>
                    </fieldset>

                    <!-- 50 POINT BINGO -->
                    <fieldset id="addPoints" class={{ $Hidden }} >
                        <legend>Include 50 point &#34;bingo&#34;&#63;<br /><span class="note">&#40;word that uses all 7 tiles&#41;</span></legend>
                        <label id="bingo"><input type="checkbox" name="bingo" {{ ($bingo) ? 'CHECKED' : '' }} >Yes</label>
                    </fieldset>

                    <!-- SUBMIT BUTTON -->
                    <input type="submit" name="calculate" value="Calculate" />

                    <!-- DISPLAY SCORE  -->
                    <p class="results">Score: {{ $score }} </p>

                </form>
            </div>

        </main>

        <script src="js/scripts.js"></script>

    </body>
</html>
