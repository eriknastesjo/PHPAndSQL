<form method="post" action="../view/process-insert-article.php">
    <fieldset>
        <legend>Skriv in värden</legend>

        <!-- <p>
            <label>Id:
                <input type="text" name="id">           // Testa och se om det läggs till automatiskt!
            </label>
        </p> -->

        <p>
            <label>Kategori:
                <input type="text" name="category">
            </label>
        </p>

        <p>
            <label>Titel:
                <input type="text" name="title">
            </label>
        </p>

        <p>
            <label>Innehåll:
                <input type="text" name="content">
            </label>
        </p>

        <p>
            <label>Författare:
                <input type="text" name="author">
            </label>
        </p>

        <p>
            <label>Datum:
                <input type="text" name="pubdate">
            </label>
        </p>

        <p>
            <input type="reset" value="Reset">
            <input type="submit" name="insertArticle" value="Add">
        </p>
    </fieldset>
</form>