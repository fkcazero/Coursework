<div class="row">
    <?php

    while ($row = mysqli_fetch_assoc($query))

    {?>

        <div class="6u 12u(narrower)">

            <section class="box special">
                <span class="image featured"><img src="img/<?php echo $row['file']?>" alt="" class="height335"/></span>
                <h3><?php echo $row['title']?></h3>
                <p>Дата публикации: <?php echo $row['date']?> / <?php echo $row['time']?></p>
                <p>Автор новости: <?php echo $row['author']?></p>
                <ul class="actions">

                    <li><a href="text.php" class="button alt">Читать</a></li>

                </ul>
            </section>

        </div>

    <?php }?>

</div>
