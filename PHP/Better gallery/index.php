<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Galeria</title>
    <style type="text/css">
        * {margin:0px; padding:0px;}
        body {
            width:90%;
            margin:1rem auto;
            font:100%/1.5 Tahoma;
            background:#cad0ff;
            
        }
        h1 {
            background-color:navy;
            color:white;
            padding:.5rem;
            text-align:center;
            margin-bottom:1rem;
        }
        a:hover {
            background:gold;
        }
        img {
            margin:.5rem;
            padding:.2rem;
            box-shadow:5px 5px #333;
        }
        article {display:flex;}
    </style>
    <link href='lightbox_gallery/css/lightbox.min.css' rel='stylesheet'>
    <script src='lightbox_gallery/js/lightbox-plus-jquery.min.js'></script>
</head>
<body>
    <h1>GALERIA ZDJĘĆ</h1>
    <article>
        <?php
            $gallery=array();
            for ($i=1; $i<=5; $i++)
            {
                $gallery[]=$i.'.jpg';
            }
            foreach ($gallery as $img)
            {
                echo "<a class='example-image-link' data-lightbox='example-set' data-title='Galeria' href='big/$img'><img class='example-image' src=small/$img></a>";
            }
        ?>
    </article>
</body>
</html>