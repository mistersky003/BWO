<?php

$loc = getLocalization("localization/".$_COOKIE['Language']."/footer.json");

/* Link css */

echo "<link rel=\"stylesheet\" href=\"css/footer.css\">";

echo "<div id=\"footer\">
        <div id=\"footer-block\">
           </div>
            <ul>
                <li id=\"title\"><p>".$loc['company']."</p></li>
                <li id=\"link\"><a href=\"\">".$loc['contact-us']."</a></li>
                <li id=\"link\"><a href=\"\">".$loc['news']."</a></li>
                <li id=\"link\"><a href=\"\">".$loc['api']."</a></li>
            </ul>
            <ul>
                <li id=\"title\"><p>".$loc['app']."</p></li>
                <li id=\"link\"><a>".$loc['bwo-for-android']."</a></li>
            </ul>
            <div id=\"info-block\">
                <p>Copyright © BWO 2020 - <script>var d = new Date();
  var n = d.getFullYear();  document.write(n);</script></p>
            </div>
</div>";


?>