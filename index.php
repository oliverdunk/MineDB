<html>

  <head>
    <title>MineDB</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link href='http://fonts.googleapis.com/css?family=Signika:400,600,700,300' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <div class="container">
      <div class="logo">
        <h1>MineDB</h1>
        <?php require "fact.php"; ?>
        <h2>Minecraft Knowledge Database <small><?php echo $fact;?>...</small></h2>
      </div>
      MineDB is a JSON API, reading from a rich database of versions, items and more.<br><br>
      List Minecraft versions:
      <br><code>http://minedb.eu/api/version</code>
      <br><br>
      Find Minecraft version (by name):
      <br><code>http://minedb.eu/api/version/id/<b>name</b></code>
      <br><br>
      Find Minecraft version (by type):
      <br><code>http://minedb.eu/api/version/type/<b>(RELEASE/SNAPSHOT/OLDALPHA/OLDBETA)</b></code>
      <br><br>
      Find Minecraft version (by release date):
      <br><code>http://minedb.eu/api/version/date/<b>DD-MM-YY</b></code>
      <br><br>
      Further API docs will be avaliable when MineDB is complete.
      Items accessible through /api/item/
      <hr>
      Created by <a href="http://www.olivervscreeper.co.uk">OliverVsCreeper</a>.<br>
      <small>
        Created using SlimFramework, MongoDB, PHP and JSON.<br>
        <a href="http://github.com/olivervscreeper/mineDB">
          <div class='btn btn-default'>
              <span class='fa fa-github-square'></span>
              <span class='git-text'>Contribute on GitHub</span>
          </div>
        </a>
    </div>
  </body>

</html>
