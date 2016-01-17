<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Split multi-image RSS entries into single-image ones">
    <meta name="author" content="notapresent@gmail.com">
    <title>Split multi-image RSS entries into single-image ones</title>

    <link rel="icon" href="static/favicon.ico">
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="static/styles.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="inner cover">

            <!--<h1 class="cover-heading"></h1>-->

            <p class="lead">

                <form method=get action=feed.php>

                    <div class="input-group">
                        <input type="text" class="form-control" name=url placeholder="Source feed URL.">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">Go!</button>
                        </span>
                    </div><!-- /input-group -->

                </form>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>. Background photo by <a href="https://unsplash.com/matthewwiebe">Matthew Wiebe</a></a></p>
            </div>
          </div>

        </div>
      </div>

    </div>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="static/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
