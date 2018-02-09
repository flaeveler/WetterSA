<main class="container text-center">

    <h1 class="display-1">Wettervorhersage</h1>

    <form class="form-inline">

        <div class="form-group my-5" style="margin: 0 auto">
            <label for="ort">Ort eingeben: </label>
            <input type="text" class="form-control" id="ort" placeholder="Ort eingeben">
            <button class="btn btn-primary" type="submit">Suche</button>
        </div>
    </form>
    <?php
    require './current_forecast.php';

    require './hourly.php';

    require './daily.php';
    ?>
</main>
