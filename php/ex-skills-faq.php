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
            <li role="presentation"><a href="./ex-skills.php">EX Skills List</a></li>
            <li role="presentation" class="active"><a href="./ex-skills-faq.php">EX Skills FAQ</a></li>
        </ul>
        <div class="page-header">
            <h2>EX Skills FAQ</h2>
        </div>
        
        <div>
            <h4>1. What are EX Skills?</h4>
            <p>EX Skills are special abilities that will give you an extra advantage in matches.
            Some EX Skills may disable certain opponent's special skills while some others reduce certain opponent's stats.</p>
            <br>
            
            <h4>2. Do we need to place a player with an EX Skill in a specific position to make it work?</h4>
            <p>No, the player with an EX Skill can be anywhere on the field (not in the bench) to put the EX Skill into effect.</p>
            <br>
            
            <h4>3. How do I level up an EX Skill?</h4>
            <p>You must train a player with the EX Skill you want to level up with another player with the identical EX Skill:
                <ul>
                    <li>Both EX Skills must have identical name. For examples:
                        <ul>
                            <li><code>DEFENCE Down (High) [GK]</code> is identical to <code>DEFENCE Down (High) [GK]</code></li>
                            <li><code>DEFENCE Down (High) [GK]</code> is <strong class="text-danger">not</strong> identical to <code>DEFENCE Down (High) [CB]</code></li>
                            <li><code>DEFENCE Down (High) [GK]</code> is <strong class="text-danger">not</strong> identical to <code>DEFENCE Down (Low) [All DF]</code></li>
                        </ul>
                    </li>
                    <li>The base badge must be in the same position (e.g., <abbr title="Goal Keeper">GK</abbr>, <abbr title="Defender">DF</abbr>, <abbr title="Midfielder">MF</abbr>, or <abbr title="Forward">FW</abbr>) as the trainer badge.</li>
                </ul>
                Alternatively, certain events like Training Camp offer rewards that can train EX Skills.
            </p>
            <div class="bs-callout bs-callout-danger">
                <h4>You may fail to level up an EX Skill and lose your trainer badge in the process.</h4>
                There is a chance that your base player's EX Skill may fail to level up during the training&mdash;and you will still lose your trainer badge.
                The higher the base player's EX Skill level and the lower the trainer's EX Skill level, the higher the chance that the EX Skill training may fail.
            </div>
            <div class="bs-callout bs-callout-info">
                <h4>Tips on training EX Skill.</h4>
                <ul>
                    <li>Ensure that your base player's EX Skill level is lower than your trainer's EX Skill level.</li>
                    <li>Level up your trainer's EX Skill first before training it to your target player.</li>
                    <li>Once you reach higher EX Skill level (5 or above), consider using Training Camp's rewards to level up your EX Skill.
                    This will guarantee the training success and you will not lose precious player badges in the process.</li>
                </ul>
            </div>
            <br>
            
            <h4>4. What is the difference of Striking Disable and Striking Guard, or OFFENCE Down and OFFENCE Guard, etc.?</h4>
            <p>There is no difference in effect. Only EX Skills that are attached to <abbr title="Goal Keeper">GK</abbr> end with the word "Guard".</p>
            <br>
            
            <h4>5. Which are the best EX Skills?</h4>
            <p>EX Skills are situational as they are targeted to certain position or skill that may or may not effective depending on your opponent's players and formation.
                For example, <code>Power LShot Disable [RWG]</code> will have no effect if the opponent is not playing a right winger with a power long shot skill.
                But it can be very effective to disable Robben's bullet shot if the opponent is playing one at <abbr title="Right Wing">RWG</abbr>.
                Therefore, it is good to use EX Skills that target common possitions and/or special skills such as:
                <ul>
                    <li>Striking Disable/Guard [CF]&mdash;most formations (except some certain advanced have at least a <abbr title="Center Forward">CF</abbr>.
                    And most CF have either <code>Striker's Instinct (Prolific Striker)</code>, <code>First Time Volley (Perfect Volley)</code>, <code>Unstoppable Header (Turbo Header)</code>, or <code>Trick Shot (Perfect Lob)</code>.</li>
                    <li>Chasing Disable/Guard [CB]</li>
                    <li>Chasing Disable/Guard [DMF]</li>
                    <li>Saving Disable [GK]</li>
                    <li>OFFENCE Down/Guard (High) [CF]</li>
                    <li>DEFENCE Down/Guard (High) [DMF]</li>
                    <li>DEFENCE Down/Guard (High) [CB]</li>
                    <li>DEFENCE Down/Guard (High) [GK]</li>
                </ul>                
            </p>
            <div class="bs-callout bs-callout-info">
                <h4>What about EX Skill B and EX Skill C?</h4>
                EX Skill B and EX Skill C has lower stats reduction effect compared to EX Skill A, so the effect is rather negligible.
                On the other hand, they comes with lower cost badge and cost less Training Camp points to upgrade, so they are cheaper to train.
                EX Skill B also affect different stats from EX Skill A or EX Skill C, so they complement EX Skill A.
                EX Skill C is special in that it affects all players in the same position (DF, MF, or FW).
                But due to its low reduction rate, you may need to field some players with the same level 10 EX Skill C for its effect to be devastating. EX Skill effects are stackable.
            </div>
            <br>
            
            <h4>I have more questions.</h4>
            <p>Please join our discussion at <a href="http://www.neoseeker.com/forums/77020/t2149547-all-about-ex-skills-database-added/" onclick="trackOutboundLink(this)" rel="external">Neoseeker forum <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span></a></p>
            <br>
        </div>
    </div>
    <?php require './inc.foot.php' ?>
</body>
</html>
