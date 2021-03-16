<!doctype html>
<html>
<head>
  <meta charset="utf-8">

  <title><?php echo $title; ?></title>

  <script type="text/javascript">
  </script>

  <style type="text/css">
  </style>

</head>

<body>
    <h1>Les boissons</h1>
    
    <?php foreach($drinks as $drink){?> 

    <h2><?php echo $product['title'] ?> </h2>
    <p> 
    <?php echo $product['description'] ?> 
    </p> 
    <?php
    } 
    ?>
</body>

</html>