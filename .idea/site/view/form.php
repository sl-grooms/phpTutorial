<main class="main-entry">
    <h2 id="enterNumber">Enter a number:</h2>
    <form action="<? $_SERVER["PHP_SELF"] ?>" class="main-entry__form" method="GET">
        <input
            type="text"
            class="main-entry__input"
            id="num"
            name="num"
            aria-labelledby="enterNumber"
            maxlength="2"
            autofocus
            required>
        <button class="main-entry__button">Go!</button>
    </form>
</main>

<?php
