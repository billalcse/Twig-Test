<html lang="en">
    <head>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
        <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
        <style type="text/css">
            #graphForm {
                margin: 30px;
            }
        </style>
    </head>
    <body>
        <div style="width: 900px; height: 500px; text-align: center; vertical-align: middle;">

            <form id="graphForm" action="app.php" method="post">

                <div style="float: left;">
                    <input type="text" name="fb_username" placeholder="facebook user name" id="fb_username" size="30px" height="20px"/>
                </div>

                <div style="float: left;">
                    <input type="submit" name="submit" class="btn btn-primary" value="submit"/>
                </div>

                <input type="hidden" name="pagename" value="index"/>

            </form>
        </div>
    </body>
</html>