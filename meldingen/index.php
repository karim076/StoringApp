<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp / Meldingen</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>
    
    <div class="container">
        <h1>Meldingen</h1>
        <a href="create.php">Nieuwe melding &gt;</a>

        <?php if(isset($_GET['msg']))
        {
            echo "<div class='msg'>" . $_GET['msg'] . "</div>";
        } ?>
        
        <?php require_once 'C:\xampp\htdocs\Tweede Periode\H6 StoringApp\backend\conn.php';
            $query="SELECT * FROM meldingen";
            $statement = $conn->prepare($query);
            $statement->execute();
            $meldingen = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <?php foreach($meldingen as $item)
        {
            if($item['prioriteit'] == 0)
            {
                $txt = "Nee!";
            } else{
                $txt = "Ja";
            }
        }
        ?>
        <table>
            <tr>
                <th>Attractue</th>
                <th>Type</th>
                <th>Melder</th>
                <th>Overige info</th>
                <th>Prioriteit</th>
            </tr>
            <?php foreach($meldingen as $item):?>
                <tr>
                    <td><?php echo $item['attractie']; ?></td>
                    <td><?php echo $item['type_']; ?></td>
                    <td><?php echo $item['melder']; ?></td>
                    <td><?php echo $item['overigemelder']; ?></td>
                    <td><?php 
                        if($item['prioriteit'] == 0)
                        {
                            $txt = "Nee";
                        } else{
                            $txt = "Ja";
                        }
                        echo $txt
                        ?>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
        </div>
    </div>  

</body>

</html>
