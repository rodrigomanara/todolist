<html>
    <base  href="<?php echo $args['base']; ?>">
    <head>
        <link href="./src/Resources/public/css/style.css" rel="stylesheet"/>
        <link  href="http://fonts.googleapis.com/css?family=Reenie+Beanie:regular" rel="stylesheet" type="text/css"> 
    </head>

    <body>
        <div class="container">
            <h1> Todo list</h1>
            <form method="post" action="/">
                <div>
                    <label>Title</label>
                    <input name="title" id="title" placeholder="Title" value="<?= $args['title'] ?>">
                </div>
                <div>
                    <label>tags</label>
                    <input name="tags" id="tags" placeholder="tags separeted by comma" value="<?= $args['tags'] ?>">
                </div>
                <div>
                    <label>Description</label>
                    <textarea name="description" id="description" rows="10" cols="35"><?= $args['description'] ?></textarea> 
                </div>
                <div>
                    <button>Update</button>
                </div>
            </form>
        </div>
    </body>
    <footer>

    </footer>
    <script src="src/Resources/public/js/init.js"></script>
</html>

