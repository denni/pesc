
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand">
                    <span><img src="./favicon-32x32.png"></img></span>
                    PES Collection
                </div>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li<?= (preg_match("/\/index\.php$/", $_SERVER["SCRIPT_NAME"]) == 1)? " class=\"active\"" : "" ?>><a href="./">Player Database</a></li>
                    <li id="game-info-dropdown" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Game Information<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li<?= (preg_match("/\/advanced\-formations\.php$/", $_SERVER["SCRIPT_NAME"]) == 1)? " class=\"active\"" : "" ?>><a href="./advanced-formations.php">Advanced Formations</a></li>
                            <li<?= (preg_match("/\/ex\-skills(.+)?\.php$/", $_SERVER["SCRIPT_NAME"]) == 1)? " class=\"active\"" : "" ?>><a href="./ex-skills.php">EX Skills</a></li>
                            <li<?= (preg_match("/\/match\-exp(.+)?\.php$/", $_SERVER["SCRIPT_NAME"]) == 1)? " class=\"active\"" : "" ?>><a href="./match-exp.php">Match Exp.</a></li>
                            <li<?= (preg_match("/\/player\-exp\.php$/", $_SERVER["SCRIPT_NAME"]) == 1)? " class=\"active\"" : "" ?>><a href="./player-exp.php">Player Exp.</a></li>
                            <li<?= (preg_match("/\/tower\-of\-pes\.php$/", $_SERVER["SCRIPT_NAME"]) == 1)? " class=\"active\"" : "" ?>><a href="./tower-of-pes.php">Tower of PES</a></li>
                        </ul>
                    </li>
                    <li><a href="https://goo.gl/GmQY10" onclick="trackOutboundLink(this)" rel="external">Edit Database <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li id="pescherald" style="display: none"></li>
                            <li><a href="http://www.neoseeker.com/forums/77020/t2130819-crowdsourced-player-database" onclick="trackOutboundLink(this)" rel="external">Discuss at Neoseeker <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
