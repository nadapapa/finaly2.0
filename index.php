<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        Finály 2.0
    </title>

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Finály 2.0</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li role="presentation"><a href="#home" aria-controls="profile" role="tab" data-toggle="tab">finály2</a></li>
                <li role="presentation"><a href="#text" aria-controls="profile" role="tab" data-toggle="tab">Szöveg</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- Tab panes -->
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form id="searchForm">
                    <div class="form-group">
                        <label for="searchInput">Keresés: </label>
                        <input type="text" class="form-control" id="searchInput" placeholder="">
                    </div>
                    <input onclick="clickSearchButton()" id="searchButton" class="btn btn-success" type="button" value="Keresés">
                </form>

                <div id="answer">
                </div>

            </div>

        </div>
    </div>

    <div role="tabpanel" class="tab-pane" id="text">
        .szöveg.
    </div>
</div>



<script>
    $('#home').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });

    $('#text').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
</script>
<script src="script.js"></script>
</body>
</html>