<main class="container text-center">

    <h1 class="display-1">Wettervorhersage</h1>

    <form class="form-inline" method="post">

        <div class="form-group my-5" style="margin: 0 auto">
            <label class="sr-only" for="ort">Ort eingeben: </label>
            <input type="text" class="form-control" id="ort" placeholder="Ort eingeben" name="ort">
            <button class="btn btn-primary" type="submit">Suche</button>
        </div>
    </form>
    <?php
    if (isset($_POST['ort'])) {
        echo '<h2 class = "display-4 my-5">Wetter für: '
        .$city_name.'</h2>';
        
        require './current_forecast.php';

        require './hourly.php';

        require './daily.php';
    }
    ?>
</main>
