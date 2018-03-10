<!DOCTYPE html>
<html>
<head>
    <title>PES Collection - Challenge Matches Experience Table</title>
    <?php require './inc.head.php' ?>
    <style type="text/css">
        html, body { height: 100%; }
    </style>
</head>
<body>
    <noscript>
        <div id="noscript_note">You must have JavaScript enabled to view this page.</div>
    </noscript>
    <div class="container-fluid" style="height: 100%">
        <?php require './inc.nav.php' ?>
        
        <ul class="nav nav-tabs">
            <li role="presentation"><a href="./match-exp.php">Skill and Event Matches</a></li>
            <li role="presentation" class="active"><a href="./match-exp-challenge.php">Challenge Matches</a></li>
        </ul>
        <div class="page-header">
            <h2>Challenge Matches Experience Table</h2>
        </div>

        <div style="height: 100%">
            <iframe style="border: none; position: relative; width: 100%; height: 100%"
                src="https://docs.google.com/spreadsheets/d/1pBZuNyqhH0Ldx1YbvePRDYox6fGY0bgsglI8O7opMTU/pubhtml?gid=1690757618&gridlines=false&chrome=false"></iframe>
        </div>
    </div>
    <?php require './inc.foot.php' ?>
</body>
</html>
