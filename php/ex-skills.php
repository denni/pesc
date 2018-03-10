<!DOCTYPE html>
<html>
<head>
    <title>PES Collection - EX Skills</title>
    <?php require './inc.head.php' ?>
    <style type="text/css">
    </style>
</head>
<body>
    <noscript>
        <div id="noscript_note">You must have JavaScript enabled to view this page.</div>
    </noscript>

    <div class="container-fluid">
        <?php require './inc.nav.php' ?>
        
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="./ex-skills.php">EX Skills List</a></li>
            <li role="presentation"><a href="./ex-skills-faq.php">EX Skills FAQ</a></li>
        </ul>
        <div class="page-header">
            <h2>EX Skills List</h2>
        </div>
        <table cellspacing="0" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-nowrap">EX Skill Name</th>
                    <th class="text-nowrap">Target [Pos]</th>
                    <th class="text-nowrap">Effect at Lv. 1</th>
                    <th class="text-nowrap">Effect at Lv. 10</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="info" colspan="4"><h4>EX Skill A</h4></td>
                </tr>
                <tr>
                    <td>
                        Striking Disable/Guard
                        <p class="text-info"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                            Disables Striker's Instinct (Prolific Striker),  First Time Volley (Perfect Volley), Unstoppable Header (Turbo Header), and Trick Shot (Perfect Lob).
                        </p>
                    </td>
                    <td class="text-center"><span class="pos-fw">CF</span></td>
                    <td>Chance to disable opponent <span class="pos-fw">CF</span>'s Striker Special Skills.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        Power LShot Disable/Guard
                        <p class="text-info"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                            Disables Bullet Shot (Turbo Shot) and Block Buster (Knuckle Shot).
                        </p>
                    </td>
                    <td class="text-center">
                        <span class="text-nowrap"><span class="pos-fw">CF</span>, <span class="pos-fw">RWG</span>, <span class="pos-fw">LWG</span></span><br>
                        <span class="pos-mf">RMF</span>, <span class="pos-mf">LMF</span>
                    </td>
                    <td>Chance to disable opponent <var>[Pos]</var>' Power LShot Special Skills.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        TECH LShot Disable/Guard
                        <p class="text-info"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                            Disables Long Ranger (Driven Shot).
                        </p>
                    </td>
                    <td class="text-center">
                        <span class="text-nowrap"><span class="pos-fw">CF</span>, <span class="pos-fw">RWG</span>, <span class="pos-fw">LWG</span></span><br>
                        <span class="pos-mf">RMF</span>, <span class="pos-mf">LMF</span>
                    </td>
                    <td>Chance to disable opponent <var>[Pos]</var>' technical LShot Special Skills.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        Spd Dribble Disable/Guard
                        <p class="text-info"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                            Disables Speed Dribble (Turbo Dribble) and Speedster (Ray of Light).
                        </p>
                    </td>
                    <td class="text-center">
                        <span class="pos-fw">RWG</span>, <span class="pos-fw">LWG</span><br>
                        <span class="pos-mf">RMF</span>, <span class="pos-mf">LMF</span>
                    </td>
                    <td>Chance to disable opponent <var>[Pos]</var>' Speed Dribble Special Skills.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        Stealth Pass Disable/Guard
                        <p class="text-info"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                            Disables Stealth Pass (Ya Beauty) and Killer Pass (Glorious Pass).
                        </p>
                    </td>
                    <td class="text-center"><span class="pos-mf">OMF</span></td>
                    <td>Chance to disable opponent <span class="pos-mf">OMF</span>'s Stealth Pass Special Skills.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        Chasing Disable/Guard
                        <p class="text-info"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                            Disables Chasing (Back Tracking) and Destroyer (Ace Killer).
                        </p>
                    </td>
                    <td class="text-center">
                        <span class="pos-mf">DMF</span>, <span class="pos-df">CB</span>
                    </td>
                    <td>Chance to disable opponent <var>[Pos]</var>' Chasing Special Skills.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        Crossing Disable/Guard
                        <p class="text-info"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                            Disables Early Cross (Pinpoint Cross) and Elegant Cross (Rainbow Cross).
                        </p>
                    </td>
                    <td class="text-center">
                        <span class="pos-df">RSB</span>, <span class="pos-df">LSB</span>
                    </td>
                    <td>Chance to disable opponent <var>[Pos]</var>' Cross Special Skills.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        Saving Disable/Guard
                        <p class="text-info"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                            Disables Quick Save (Cool Head) and Shield of Iron (Miraculous Saves).
                        </p>
                    </td>
                    <td class="text-center">
                        <span class="pos-gk">GK</span>
                    </td>
                    <td>Chance to disable opponent <span class="pos-gk">GK</span>'s Saving Special Skills.</td>
                    <td></td>
                </tr>
                <tr>
                    <td rowspan="3">OFFENCE Down/Guard (High)</td>
                    <td class="text-center"><span class="pos-fw">CF</span></td>
                    <td>Reduce opponent <span class="pos-fw">CF</span>'s OFFENCE by 2%.</td>
                    <td>20% down</td>
                </tr>
                <tr>
                    <td class="text-center"><span class="pos-mf">OMF</span></td>
                    <td>Reduce opponent <span class="pos-mf">OMF</span>'s OFFENCE by 3%.</td>
                    <td>30% down</td>
                </tr>
                <tr>
                    <td class="text-center">
                        <span class="text-nowrap"><span class="pos-fw">RWG</span>, <span class="pos-fw">LWG</span></span><br>
                        <span class="pos-mf">RMF</span>, <span class="pos-mf">LMF</span>
                    </td>
                    <td>Reduce opponent <var>[Pos]</var>' OFFENCE by 4%.</td>
                    <td>40% down</td>
                </tr>
                <tr>
                    <td rowspan="3">DEFENCE Down/Guard (High)</td>
                    <td class="text-center"><span class="pos-gk">GK</span>, <span class="pos-df">CB</span></td>
                    <td>Reduce opponent <var>[Pos]</var>' DEFENCE by 1.5%.</td>
                    <td>15% down</td>
                </tr>
                <tr>
                    <td class="text-center"><span class="pos-mf">DMF</span></td>
                    <td>Reduce opponent <span class="pos-mf">DMF</span>'s DEFENCE by 2%.</td>
                    <td>20% down</td>
                </tr>
                <tr>
                    <td class="text-center">
                        <span class="pos-df">RSB</span>, <span class="pos-df">LSB</span>
                    </td>
                    <td>Reduce opponent <var>[Pos]</var>' DEFENCE by 4%.</td>
                    <td>40% down</td>
                </tr>
                <tr>
                    <td class="info" colspan="4"><h4>EX Skill B</h4></td>
                </tr>
                <tr>
                    <td rowspan="4">TECH Down/Guard (Med)</td>
                    <td class="text-center"><span class="pos-gk">GK</span></td>
                    <td>Reduce opponent <span class="pos-gk">GK</span>'s TECHNIQUE by 1%.</td>
                    <td>10% down</td>
                </tr>
                <tr>
                    <td class="text-center"><span class="pos-fw">CF</span></td>
                    <td>Reduce opponent <span class="pos-fw">CF</span>'s TECHNIQUE by 1.5%.</td>
                    <td>15% down</td>
                </tr>
                <tr>
                    <td class="text-center"><span class="pos-mf">OMF</span></td>
                    <td>Reduce opponent <span class="pos-mf">OMF</span>'s TECHNIQUE by 2%.</td>
                    <td>20% down</td>
                </tr>
                <tr>
                    <td class="text-center"><span class="pos-mf">RMF</span>, <span class="pos-mf">LMF</span></td>
                    <td>Reduce opponent <var>[Pos]</var>' TECHNIQUE by 3%.</td>
                    <td>30% down</td>
                </tr>
                <tr>
                    <td>SPEED Down/Guard (Med)</td>
                    <td class="text-center">
                        <span class="text-nowrap"><span class="pos-fw">CF</span>, <span class="pos-fw">RWG</span>, <span class="pos-fw">LWG</span></span><br>
                        <span class="pos-mf">RMF</span>, <span class="pos-mf">LMF</span><br>
                        <span class="pos-df">RSB</span>, <span class="pos-df">LSB</span>
                    </td>
                    <td>Reduce opponent <var>[Pos]</var>' SPEED by 3%.</td>
                    <td>30% down</td>
                </tr>
                <tr>
                    <td rowspan="3">STAM Down/Guard (Med)</td>
                    <td class="text-center"><span class="pos-df">CB</span></td>
                    <td>Reduce opponent <span class="pos-df">CB</span>'s STAMINA by 1%.</td>
                    <td>10% down</td>
                </tr>
                <tr>
                    <td class="text-center"><span class="pos-mf">DMF</span></td>
                    <td>Reduce opponent <span class="pos-mf">DMF</span>'s STAMINA by 1.5%.</td>
                    <td>15% down</td>
                </tr>
                <tr>
                    <td class="text-center"><span class="text-nowrap"><span class="pos-fw">CF</span>, <span class="pos-fw">RWG</span>, <span class="pos-fw">LWG</span></span></td>
                    <td>Reduce opponent <var>[Pos]</var>' STAMINA by 3%.</td>
                    <td>30% down</td>
                </tr>
                <tr>
                    <td rowspan="2">POWER Down/Guard (Med)</td>
                    <td class="text-center"><span class="pos-fw">CF</span>, <span class="pos-mf">DMF</span></td>
                    <td>Reduce opponent <var>[Pos]</var>' POWER by 1.5%.</td>
                    <td>15% down</td>
                </tr>
                <tr>
                    <td class="text-center">
                        <span class="text-nowrap"><span class="pos-fw">CF</span>, <span class="pos-fw">RWG</span>, <span class="pos-fw">LWG</span></span><br>
                        <span class="pos-df">RSB</span>, <span class="pos-df">LSB</span>
                    </td>
                    <td>Reduce opponent <var>[Pos]</var>' POWER by 3%.</td>
                    <td>30% down</td>
                </tr>
                <tr>
                    <td class="info" colspan="4"><h4>EX Skill C</h4></td>
                </tr>
                <tr>
                    <td rowspan="2">OFFENCE Down/Guard (Low)</td>
                    <td class="text-center">All <span class="pos-mf">MF</span></td>
                    <td>Reduce all opponent <span class="pos-mf">MF</span>'s OFFENCE by 0.5%.</td>
                    <td rowspan="17">5% down</td>
                </tr>
                <tr>
                    <td class="text-center">All <span class="pos-df">DF</span></td>
                    <td>Reduce all opponent <span class="pos-df">DF</span>'s OFFENCE by 0.5%.</td>
                </tr>
                <tr>
                    <td rowspan="3">TECHNIQUE Down/Guard (Low)</td>
                    <td class="text-center">All <span class="pos-fw">FW</span></td>
                    <td>Reduce opponent <span class="pos-fw">FW</span>'s TECHNIQUE by 0.5%.</td>
                </tr>
                <tr>
                    <td class="text-center">All <span class="pos-mf">MF</span></td>
                    <td>Reduce opponent <span class="pos-mf">MF</span>'s TECHNIQUE by 0.5%.</td>
                </tr>
                <tr>
                    <td class="text-center">All <span class="pos-df">DF</span></td>
                    <td>Reduce opponent <span class="pos-df">DF</span>'s TECHNIQUE by 0.5%.</td>
                </tr>
                <tr>
                    <td rowspan="3">STAMINA Down/Guard (Low)</td>
                    <td class="text-center">All <span class="pos-fw">FW</span></td>
                    <td>Reduce opponent <span class="pos-fw">FW</span>'s STAMINA by 0.5%.</td>
                </tr>
                <tr>
                    <td class="text-center">All <span class="pos-mf">MF</span></td>
                    <td>Reduce opponent <span class="pos-mf">MF</span>'s STAMINA by 0.5%.</td>
                </tr>
                <tr>
                    <td class="text-center">All <span class="pos-df">DF</span></td>
                    <td>Reduce opponent <span class="pos-df">DF</span>'s STAMINA by 0.5%.</td>
                </tr>
                <tr>
                    <td rowspan="3">DEFENCE Down/Guard (Low)</td>
                    <td class="text-center">All <span class="pos-fw">FW</span></td>
                    <td>Reduce opponent <span class="pos-fw">FW</span>'s DEFENCE by 0.5%.</td>
                </tr>
                <tr>
                    <td class="text-center">All <span class="pos-mf">MF</span></td>
                    <td>Reduce opponent <span class="pos-mf">MF</span>'s DEFENCE by 0.5%.</td>
                </tr>
                <tr>
                    <td class="text-center">All <span class="pos-df">DF</span></td>
                    <td>Reduce opponent <span class="pos-df">DF</span>'s DEFENCE by 0.5%.</td>
                </tr>
                <tr>
                    <td rowspan="3">POWER Down/Guard (Low)</td>
                    <td class="text-center">All <span class="pos-fw">FW</span></td>
                    <td>Reduce opponent <span class="pos-fw">FW</span>'s POWER by 0.5%.</td>
                </tr>
                <tr>
                    <td class="text-center">All <span class="pos-mf">MF</span></td>
                    <td>Reduce opponent <span class="pos-mf">MF</span>'s POWER by 0.5%.</td>
                </tr>
                <tr>
                    <td class="text-center">All <span class="pos-df">DF</span></td>
                    <td>Reduce opponent <span class="pos-df">DF</span>'s POWER by 0.5%.</td>
                </tr>
                <tr>
                    <td rowspan="3">SPEED Down/Guard (Low)</td>
                    <td class="text-center">All <span class="pos-fw">FW</span></td>
                    <td>Reduce opponent <span class="pos-fw">FW</span>'s SPEED by 0.5%.</td>
                </tr>
                <tr>
                    <td class="text-center">All <span class="pos-mf">MF</span></td>
                    <td>Reduce opponent <span class="pos-mf">MF</span>'s SPEED by 0.5%.</td>
                </tr>
                <tr>
                    <td class="text-center">All <span class="pos-df">DF</span></td>
                    <td>Reduce opponent <span class="pos-df">DF</span>'s SPEED by 0.5%.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php require './inc.foot.php' ?>
</body>
</html>
