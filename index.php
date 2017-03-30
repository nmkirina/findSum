<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container well">
            <div class="hero-unit">
                <h1>Поиск наибольшей суммы подмножеств</h1>
                <p>
                    Cоздайте массив неупорядоченных целых чисел, наибольшая сумма посчитается сразу после этого. 
                </p>
                <form action="generate.php">
                    <button type="submit" class="btn btn-primary btn-large">Сгенерировать</button>
                </form>
                <?php if(isset($_SESSION['numArray'])):
                    $numArray = $_SESSION['numArray'];
                    ?>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <?php foreach ($numArray as $id => $value):?>
                                    <th><?= $id?></th>
                                <?php endforeach;?>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php foreach ($numArray as $id => $value):?>
                                    <td><?= $value?></td>
                                    <input type="hidden" name="<?= $id?>" value="<?= $value?>">
                                <?php endforeach;?>
                            </tr>
                        </tbody>
                    </table>
                <?php endif;?>
                <?php if (isset($_SESSION['bigSum'])):?>
                    <p>
                        Наибольая сумма неприрывных подмножеств:  <strong><?= $_SESSION['bigSum']?></strong>
                    </p>
                    
                <?php endif;?>
            </div>
        </div>
    </body>
</html>