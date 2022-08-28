<form method="post" action="../view/process-insert-obj.php">
    <fieldset>
        <legend>Skriv in värden</legend>

        <!-- <p>
            <label>Id:
                <input type="text" name="id">           // Testa och se om det läggs till automatiskt!
            </label>
        </p> -->

        <p>
            <label>Titel:
                <input type="text" name="title">
            </label>
        </p>

        <p>
            <label>Kategori:
                <input type="text" name="category">
            </label>
        </p>

        <p>
            <label>Beskrivning:
                <input type="text" name="text">
            </label>
        </p>

        <p>
            <label>Filnamn:
                <input type="text" name="image">
            </label>
        </p>

        <p>
            <label>Ägare:
                <input type="text" name="owner">
            </label>
        </p>

        <p>
            <input type="reset" value="Reset">
            <input type="submit" name="insertObj" value="Add">
        </p>
    </fieldset>
</form>