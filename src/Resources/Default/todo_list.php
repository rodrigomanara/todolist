<html>
    <base  href="<?php echo $args['base']; ?>">
    <head>
        <link href="./src/Resources/public/css/style.css" rel="stylesheet"/>
        <link  href="http://fonts.googleapis.com/css?family=Reenie+Beanie:regular" rel="stylesheet" type="text/css"> 
    </head>

    <body>
        <div ><button onclick="window.location.href = '/'">Add New </button></div>
        <?php foreach ($args as $values) { ?>

        <?php if(isset($values['title'])){ ?> 
             <div class="notes"">
                 <div class="nav">
                     <span class="button left" onclick="window.location='/update/<?php echo $values['id'];?>'">Update</span>
                     <span class="button right" onclick="window.location='/delete/<?php echo $values['id'];?>'">Delete</span>
                 </div>
                <h3><?= $values['title'] ?></h3>
                <h5><?= $values['tags'] ?></h5>
                <span><?= $values['create_date'] ?></span>
                <p><?= $values['description']; ?></p>
            </div>
        <?php } ?>
        <?php } ?>
    </body>
    <footer>

    </footer>
    <script src="src/Resources/public/js/init.js"></script>
</html>

