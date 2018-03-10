<!DOCTYPE html>
<html>
<head>
    <title>PES Collection - Match Exp.</title>
    <?php require './inc.head.php' ?>
    <style type="text/css">
        html, body { height: 100%; }
    </style>
</head>
<body>
    <noscript>
        <div id="noscript_note">You must have JavaScript enabled to view this page.</div>
    </noscript>
    <div class="container-fluid">
        <?php require './inc.nav.php' ?>
        <table cellspacing="0" width="50%" class="display table table-bordered table-striped responsive" id="exp-data-table-container">
            <thead>
                <tr>
                    <th>Stage</th>
                    <th>Exp.</th>
                    <th>GP</th>
                    <th>Exp./GP</th>
                </tr>
            </thead>
            <tbody>
                <tr><td class="text-center">49-5</td><td class="text-center">16</td><td class="text-center">7800</td><td class="text-center">487</td></tr>
                <tr><td class="text-center">49-4</td><td class="text-center">16</td><td class="text-center">3800</td><td class="text-center">237</td></tr>
                <tr><td class="text-center">49-3</td><td class="text-center">16</td><td class="text-center">5800</td><td class="text-center">362</td></tr>
                <tr><td class="text-center">49-2</td><td class="text-center">16</td><td class="text-center">4000</td><td class="text-center">250</td></tr>
                <tr><td class="text-center">49-1</td><td class="text-center">16</td><td class="text-center">5300</td><td class="text-center">331</td></tr>
                <tr><td class="text-center">48-5</td><td class="text-center">15</td><td class="text-center">6500</td><td class="text-center">433</td></tr>
                <tr><td class="text-center">48-4</td><td class="text-center">15</td><td class="text-center">3800</td><td class="text-center">253</td></tr>
                <tr><td class="text-center">48-3</td><td class="text-center">15</td><td class="text-center">7000</td><td class="text-center">466</td></tr>
                <tr><td class="text-center">48-2</td><td class="text-center">15</td><td class="text-center">5300</td><td class="text-center">353</td></tr>
                <tr><td class="text-center">48-1</td><td class="text-center">15</td><td class="text-center">5300</td><td class="text-center">353</td></tr>
                <tr><td class="text-center">47-5</td><td class="text-center">15</td><td class="text-center">5300</td><td class="text-center">353</td></tr>
                <tr><td class="text-center">47-4</td><td class="text-center">15</td><td class="text-center">3450</td><td class="text-center">230</td></tr>
                <tr><td class="text-center">47-3</td><td class="text-center">15</td><td class="text-center">5100</td><td class="text-center">340</td></tr>
                <tr><td class="text-center">47-2</td><td class="text-center">15</td><td class="text-center">5100</td><td class="text-center">340</td></tr>
                <tr><td class="text-center">47-1</td><td class="text-center">15</td><td class="text-center">5100</td><td class="text-center">340</td></tr>
                <tr><td class="text-center">46-5</td><td class="text-center">15</td><td class="text-center">5300</td><td class="text-center">353</td></tr>
                <tr><td class="text-center">46-4</td><td class="text-center">15</td><td class="text-center">5100</td><td class="text-center">340</td></tr>
                <tr><td class="text-center">46-3</td><td class="text-center">15</td><td class="text-center">3450</td><td class="text-center">230</td></tr>
                <tr><td class="text-center">46-2</td><td class="text-center">15</td><td class="text-center">3450</td><td class="text-center">230</td></tr>
                <tr><td class="text-center">46-1</td><td class="text-center">15</td><td class="text-center">5100</td><td class="text-center">340</td></tr>
                <tr><td class="text-center">45</td><td class="text-center">14</td><td class="text-center">4600</td><td class="text-center">328</td></tr>
                <tr><td class="text-center">44</td><td class="text-center">14</td><td class="text-center">4600</td><td class="text-center">328</td></tr>
                <tr><td class="text-center">43</td><td class="text-center">14</td><td class="text-center">4600</td><td class="text-center">328</td></tr>
                <tr><td class="text-center">42</td><td class="text-center">14</td><td class="text-center">4600</td><td class="text-center">328</td></tr>
                <tr><td class="text-center">41</td><td class="text-center">13</td><td class="text-center">4100</td><td class="text-center">315</td></tr>
                <tr><td class="text-center">40</td><td class="text-center">13</td><td class="text-center">4100</td><td class="text-center">315</td></tr>
                <tr><td class="text-center">39</td><td class="text-center">13</td><td class="text-center">4100</td><td class="text-center">315</td></tr>
                <tr><td class="text-center">38</td><td class="text-center">13</td><td class="text-center">4100</td><td class="text-center">315</td></tr>
                <tr><td class="text-center">37</td><td class="text-center">13</td><td class="text-center">3600</td><td class="text-center">276</td></tr>
                <tr><td class="text-center">36</td><td class="text-center">13</td><td class="text-center">3600</td><td class="text-center">276</td></tr>
                <tr><td class="text-center">35</td><td class="text-center">13</td><td class="text-center">3600</td><td class="text-center">276</td></tr>
                <tr><td class="text-center">34</td><td class="text-center">13</td><td class="text-center">3600</td><td class="text-center">276</td></tr>
                <tr><td class="text-center">33</td><td class="text-center">12</td><td class="text-center">3100</td><td class="text-center">258</td></tr>
                <tr><td class="text-center">32</td><td class="text-center">12</td><td class="text-center">3100</td><td class="text-center">258</td></tr>
                <tr><td class="text-center">31</td><td class="text-center">12</td><td class="text-center">3100</td><td class="text-center">258</td></tr>
                <tr><td class="text-center">30</td><td class="text-center">12</td><td class="text-center">3100</td><td class="text-center">258</td></tr>
                <tr><td class="text-center">29</td><td class="text-center">12</td><td class="text-center">2600</td><td class="text-center">216</td></tr>
                <tr><td class="text-center">28</td><td class="text-center">11</td><td class="text-center">2600</td><td class="text-center">236</td></tr>
                <tr><td class="text-center">27</td><td class="text-center">11</td><td class="text-center">2600</td><td class="text-center">236</td></tr>
                <tr><td class="text-center">26</td><td class="text-center">11</td><td class="text-center">2600</td><td class="text-center">236</td></tr>
                <tr><td class="text-center">25</td><td class="text-center">11</td><td class="text-center">2400</td><td class="text-center">218</td></tr>
                <tr><td class="text-center">24</td><td class="text-center">11</td><td class="text-center">2150</td><td class="text-center">195</td></tr>
                <tr><td class="text-center">23</td><td class="text-center">10</td><td class="text-center">2150</td><td class="text-center">215</td></tr>
                <tr><td class="text-center">22</td><td class="text-center">10</td><td class="text-center">2150</td><td class="text-center">215</td></tr>
                <tr><td class="text-center">21</td><td class="text-center">10</td><td class="text-center">2100</td><td class="text-center">210</td></tr>
                <tr><td class="text-center">20</td><td class="text-center">10</td><td class="text-center">1600</td><td class="text-center">160</td></tr>
                <tr><td class="text-center">19</td><td class="text-center">10</td><td class="text-center">1600</td><td class="text-center">160</td></tr>
                <tr><td class="text-center">18</td><td class="text-center">9</td><td class="text-center">1600</td><td class="text-center">177</td></tr>
                <tr><td class="text-center">17</td><td class="text-center">9</td><td class="text-center">1050</td><td class="text-center">116</td></tr>
                <tr><td class="text-center">16</td><td class="text-center">9</td><td class="text-center">1050</td><td class="text-center">116</td></tr>
                <tr><td class="text-center">15</td><td class="text-center">9</td><td class="text-center">1050</td><td class="text-center">116</td></tr>
                <tr><td class="text-center">14</td><td class="text-center">9</td><td class="text-center">1050</td><td class="text-center">116</td></tr>
                <tr><td class="text-center">13</td><td class="text-center">8</td><td class="text-center">650</td><td class="text-center">81</td></tr>
                <tr><td class="text-center">12</td><td class="text-center">8</td><td class="text-center">650</td><td class="text-center">81</td></tr>
                <tr><td class="text-center">11</td><td class="text-center">8</td><td class="text-center">650</td><td class="text-center">81</td></tr>
                <tr><td class="text-center">10</td><td class="text-center">8</td><td class="text-center">650</td><td class="text-center">81</td></tr>
                <tr><td class="text-center">9</td><td class="text-center">7</td><td class="text-center">235</td><td class="text-center">33</td></tr>
                <tr><td class="text-center">8</td><td class="text-center">7</td><td class="text-center">215</td><td class="text-center">30</td></tr>
                <tr><td class="text-center">7</td><td class="text-center">6</td><td class="text-center">215</td><td class="text-center">35</td></tr>
                <tr><td class="text-center">6</td><td class="text-center">6</td><td class="text-center">215</td><td class="text-center">35</td></tr>
                <tr><td class="text-center">5</td><td class="text-center">5</td><td class="text-center">125</td><td class="text-center">25</td></tr>
                <tr><td class="text-center">4</td><td class="text-center">5</td><td class="text-center">105</td><td class="text-center">21</td></tr>
                <tr><td class="text-center">3</td><td class="text-center">4</td><td class="text-center">75</td><td class="text-center">18</td></tr>
                <tr><td class="text-center">2</td><td class="text-center">4</td><td class="text-center">75</td><td class="text-center">18</td></tr>
                <tr><td class="text-center">1</td><td class="text-center">3</td><td class="text-center">45</td><td class="text-center">15</td></tr>
            </tbody>
        </table>
    </div>
    <?php require './inc.foot.php' ?>
    <script>
        var myDTContainer = $('#exp-data-table-container');
        
        myDT = myDTContainer.DataTable({
            autoWidth: true,
            fixedHeader: true,
            order: [],
            pageLength: -1,
            pagingType: "full_numbers",
            responsive: true
        });
    </script>
</body>
</html>
