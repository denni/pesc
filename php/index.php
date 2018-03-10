<!DOCTYPE html>
<html>
<head>
    <title>PES Collection - Player Database</title>
    <?php require './inc.head.php' ?>
</head>
<body>
    <noscript>
        <div id="noscript_note">You must have JavaScript enabled to view this page.</div>
    </noscript>
    <div class="container-fluid">
        <?php require './inc.nav.php' ?>
        <table cellspacing="0" width="100%" class="display table table-bordered table-striped responsive" id="data-table-container">
            <thead>
                <tr>
                    <th class="all">Player</th>
                    <th class="all">Cost</th>
                    <th>Pos</th>
                    <th>OFF</th>
                    <th>TEC</th>
                    <th>STA</th>
                    <th>DEF</th>
                    <th>POW</th>
                    <th>SPD</th>
                    <th class="all">Total</th>
                    <th class="all">Special Skills</th>
                    <th>Red Positions</th>
                    <th>Series</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $fileurl = "https://docs.google.com/spreadsheets/d/1pBZuNyqhH0Ldx1YbvePRDYox6fGY0bgsglI8O7opMTU/pub?gid=683031320&single=true&output=csv";
                    $filename = "pesc-players-db.csv";
                    
                    if (!file_exists($filename) || time() - filemtime($filename) > 300) {
                        file_put_contents($filename, fopen($fileurl, "r"));
                    }
                    
                    $row = 0;
                    if (($fhandle = fopen($filename, "r")) !== FALSE) {
                        while (($data = fgetcsv($fhandle, 1000, ",")) !== FALSE) {
                            if ($row++ == 0)
                                continue;

                            $num = count($data);

                            echo "<tr>";
                            for ($c=0; $c < $num; $c++) {
                                echo "<td>" . $data[$c] . "</td>";
                            }
                            echo "</tr>\n";
                            
                            $row++;
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    <?php require './inc.foot.php' ?>
</body>
</html>
