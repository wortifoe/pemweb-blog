<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Artikel Terbaru</h1>
    <a href="<?php echo site_url('Blog/add') ?>"> Tambah Artikel</a>
    <?php foreach($blog as $key=>$blog):?>
    <div class="blog">
        <h2>
          <a href="<?php echo site_url('blog/detail/'.$blog['url']);?>">
            <?php echo $blog['title'];?>
          </a>
        </h2>
        <a href="<?php echo site_url('blog/edit/' . $blog['id']); ?>"> Edit</a>
        <br>
        <?php echo $blog['content'];
        
        endforeach;
        ?>
   
</body>
</html>