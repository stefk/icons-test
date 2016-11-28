<html>
<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<body>
  <h2>Exemple 1</h2>
  <hr/>
  <div class="panel panel-default example-1">
    <div class="panel-heading">
      <h3 class="panel-title">Créer une nouvelle question</h3>
    </div>
    <div class="panel-body">

    <?php foreach($icons as $icon): ?>
      <div>
        <div class="icon-large">
          <img src="<?php echo $icon['path'] ?>" />
        </div>
        <div class="explanation">
          <h3><?php echo $icon['title'] ?></h3>
          <p>
            <?php echo $icon['desc'] ?>
          </p>
        </div>
        <hr/>
      </div>
    <?php endforeach; ?>

   </div>
  </div>

  <h2>Exemple 2</h2>
  <hr/>
  <div class="panel panel-default example-2">
    <div class="panel-heading">
      <h2 class="panel-title">Questions</h2>
    </div>
    <div class="panel-body">

    <?php foreach($icons as $icon): ?>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">
            <div class="icon-small">
              <img src="<?php echo $icon['path'] ?>" />
            </div>
            <?php echo $icon['question'] ?>
          </h3>
        </div>
      </div>
    <?php endforeach; ?>

  <style>
    body {
      padding: 20px;
    }
    .example-1 {
      width: 800px;
    }
    .icon-large {
      display: inline-block;
      width: 70px;
      height: 70px;
      margin-top: 12px;
      margin-right: 20px;
      padding: 10px;
      border: solid 2px #555;
      border-radius: 16px;
      vertical-align: top;
      padding: 10px;
      opacity: 0.6;
    }
    .icon-large img {
      width: 48px;
      height: 48px;
    }
    .explanation {
      display: inline-block;
      width: 600px;
    }
    .example-2 {
      width: 720px;
    }
    .example-2 .panel {
      margin-bottom: 0;
    }
    .icon-small {
      display: inline;
      margin-right: 12px;
    }
    .icon-small img {
      width: 16px;
      height: 16px;
    }
  </style>

</body>
</html>

