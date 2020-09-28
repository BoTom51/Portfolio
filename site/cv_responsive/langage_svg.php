   <!-- ------------------ CSS ------------------ -->
   <style>
      .svg-style {
         user-select: none;
         /* position: relative;
         top: -30px;
         left: 100px; */
         font-style: "Sawarabi Gothic", sans-serif;
         font-weight: bolder;
         font-size: 0.8rem;
         max-width: 500px;
         max-height: 500px;
      }
   </style>

   <!-- ------------------ SVG ------------------ -->
   <svg class="svg-style" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <defs>
         <!-- création couleurs dégradés -->
         <linearGradient id="versHtml" x1="100%" y1="0%" x2="0%" y2="0%">
            <stop offset="0%" style="stop-color: #e9afaf; stop-opacity: 1" />
            <stop offset="100%" style="stop-color: #ff5555; stop-opacity: 1" />
         </linearGradient>
         <linearGradient id="versJs" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color: #e9afaf; stop-opacity: 1" />
            <stop offset="100%" style="stop-color: #ffb380; stop-opacity: 1" />
         </linearGradient>
         <linearGradient id="versPhp" x1="100%" y1="0%" x2="0%" y2="0%">
            <stop offset="0%" style="stop-color: #aa87de; stop-opacity: 1" />
            <stop offset="100%" style="stop-color: #e9afaf; stop-opacity: 1" />
         </linearGradient>
         <linearGradient id="versCss" x1="100%" y1="0%" x2="0%" y2="0%">
            <stop offset="0%" style="stop-color: #e9afaf; stop-opacity: 1" />
            <stop offset="100%" style="stop-color: #80b3ff; stop-opacity: 1" />
         </linearGradient>
      </defs>
      <g>
         <!-- bulle langage -->
         <ellipse style="fill: #e9afaf" cx="250" cy="250" rx="49" ry="24" />
         <text style="fill: #000000" x="218" y="254">LANGAGE</text>
      </g>
      <!-- liaison vers html -->
      <line x1="250" x2="240" y1="227" y2="121" style="stroke: url(#versHtml); stroke-width: 3px">
         <animate id="gauche0" attributeName="x2" begin="0s; depart0.end;" from="240" to="230" dur="1s" />
         <animate id="droite0" attributeName="x2" begin="gauche0.end" from="230" to="250" dur="3s" />
         <animate id="depart0" attributeName="x2" begin="droite0.end" from="250" to="240" dur="1.5s" />
         <animate id="bas0" attributeName="y2" begin="2s; haut0.end;" from="121" to="151" dur="3s" />
         <animate id="haut0" attributeName="y2" begin="bas0.end" from="151" to="121" dur="3s" />
      </line>
      <!-- bulle html -->
      <g>
         <ellipse style="fill: #ff5555" cx="240" cy="100" rx="28" ry="22">
            <!-- animation bulle html -->
            <animate id="gauche1" attributeName="cx" begin="0s; depart1.end;" from="240" to="230" dur="1s" />
            <animate id="droite1" attributeName="cx" begin="gauche1.end" from="230" to="250" dur="3s" />
            <animate id="depart1" attributeName="cx" begin="droite1.end" from="250" to="240" dur="1.5s" />
            <animate id="bas1" attributeName="cy" begin="2s; haut1.end;" from="100" to="130" dur="3s" />
            <animate id="haut1" attributeName="cy" begin="bas1.end" from="130" to="100" dur="3s" />
            <!-- animation TEXT -->
            <animate id="gauche2" xlink:href="#htmltxt" attributeName="x" begin="0s; depart2.end;" from="222" to="212" dur="1s" />
            <animate id="droite2" xlink:href="#htmltxt" attributeName="x" begin="gauche2.end" from="212" to="232" dur="3s" />
            <animate id="depart2" xlink:href="#htmltxt" attributeName="x" begin="droite2.end" from="232" to="222" dur="1.5s" />
            <animate id="bas2" xlink:href="#htmltxt" attributeName="y" begin="2s; haut2.end;" from="104" to="134" dur="3s" />
            <animate id="haut2" xlink:href="#htmltxt" attributeName="y" begin="bas2.end" from="134" to="104" dur="3s" />
         </ellipse>
         <text id="htmltxt" style="fill: #000000" x="222" y="104">HTML</text>
      </g>
      <!-- liaison vers php -->
      <line x1="250" x2="260" y1="273" y2="370" style="stroke: url(#versPhp); stroke-width: 3px">
         <animate attributeName="x2" dur="15s" values="260; 240; 258; 240; 280; 260;" repeatCount="indefinite" />
         <animate attributeName="y2" dur="15s" values="370; 345; 358; 345; 360; 370;" repeatCount="indefinite" />
      </line>
      <g>
         <!-- bulle php -->
         <g>
            <ellipse style="fill: #aa87de" cx="260" cy="390" rx="28" ry="22">
               <!-- animation bulle php -->
               <animate attributeName="cx" dur="15s" values="260; 240; 258; 240; 280; 260;" repeatCount="indefinite" />
               <animate attributeName="cy" dur="15s" values="390; 365; 378; 365; 380; 390;" repeatCount="indefinite" />
               <!-- animation TEXT -->
               <animate xlink:href="#phptxt" attributeName="x" dur="15s" values="248; 228; 246; 228; 268; 248;" repeatCount="indefinite" />
               <animate xlink:href="#phptxt" attributeName="y" dur="15s" values="395; 370; 383; 370; 385; 395;" repeatCount="indefinite" />
            </ellipse>
            <text id="phptxt" style="fill: #000000" x="248" y="395">PHP</text>
         </g>
         <!-- liaison PHP-SQL -->
         <line x1="275" x2="310" y1="408" y2="440" style="stroke: #aa87de; stroke-width: 2px">
            <animate attributeName="x1" dur="15s" values="275; 245; 263; 240; 285; 275;" repeatCount="indefinite" />
            <animate attributeName="y1" dur="15s" values="408; 383; 396; 383; 398; 408;" repeatCount="indefinite" />
            <animate attributeName="x2" dur="15s" values="310; 245; 263; 260; 295; 310;" repeatCount="indefinite" />
            <animate attributeName="y2" dur="15s" values="440; 457; 432; 447; 463; 440;" repeatCount="indefinite" />
         </line>
         <!-- bulle sql -->
         <g>
            <ellipse style="fill: #aa87de" cx="330" cy="455" rx="28" ry="22">
               <animate attributeName="cx" dur="15s" values="330; 245; 273; 255; 295; 330;" repeatCount="indefinite" />
               <animate attributeName="cy" dur="15s" values="455; 472; 447; 462; 478; 455;" repeatCount="indefinite" />
               <!-- animation TEXT -->
               <animate xlink:href="#sqltxt" attributeName="x" dur="15s" values="319; 234; 262; 244; 284; 319;" repeatCount="indefinite" />
               <animate xlink:href="#sqltxt" attributeName="y" dur="15s" values="459; 476; 451; 466; 482; 459;" repeatCount="indefinite" />
            </ellipse>
            <text id="sqltxt" style="fill: #000000" x="320" y="459">SQL</text>
         </g>
      </g>
      <!-- liaison vers js -->
      <line x1="299" x2="353" y1="250" y2="230" style="stroke: url(#versJs); stroke-width: 3px">
         <animate attributeName="x2" dur="15s" values="353; 348; 351; 348; 353;" repeatCount="indefinite" />
         <animate attributeName="y2" dur="15s" values="230; 250; 235; 215; 230" repeatCount="indefinite" />
      </line>
      <g>
         <!-- bulle js -->
         <g>
            <ellipse style="fill: #ffb380" cx="380" cy="230" rx="28" ry="22">
               <animate attributeName="cx" dur="15s" values="380; 375; 378; 375; 380;" repeatCount="indefinite" />
               <animate attributeName="cy" dur="15s" values="230; 250; 230; 210; 230" repeatCount="indefinite" />
               <!-- animation TEXT -->
               <animate xlink:href="#jstxt" attributeName="x" dur="15s" values="373; 368; 371; 368; 373;" repeatCount="indefinite" />
               <animate xlink:href="#jstxt" attributeName="y" dur="15s" values="235; 255; 235; 215; 235" repeatCount="indefinite" />
            </ellipse>
            <text id="jstxt" style="fill: #000000" x="373" y="235">JS</text>
         </g>
         <!-- liaison JS-JQUERY -->
         <line x1="396" x2="436" y1="213" y2="149" style="stroke: #ffb380; stroke-width: 2px">
            <animate attributeName="x1" dur="15s" values="396; 391; 394; 391; 396;" repeatCount="indefinite" />
            <animate attributeName="y1" dur="15s" values="213; 233; 213; 193; 213" repeatCount="indefinite" />
            <animate attributeName="x2" dur="15s" values="436; 416; 434; 416; 436;" repeatCount="indefinite" />
            <animate attributeName="y2" dur="15s" values="149; 189; 149; 109; 149" repeatCount="indefinite" />
         </line>
         <!-- bulle jquery -->
         <g>
            <ellipse style="fill: #ffb380" cx="450" cy="130" rx="28" ry="22">
               <animate attributeName="cx" dur="15s" values="450; 430; 445; 430; 450;" repeatCount="indefinite" />
               <animate attributeName="cy" dur="15s" values="130; 170; 130; 90; 130" repeatCount="indefinite" />
               <!-- animation TEXT -->
               <animate xlink:href="#jquerytxt" attributeName="x" dur="15s" values="424; 404; 419; 404; 424;" repeatCount="indefinite" />
               <animate xlink:href="#jquerytxt" attributeName="y" dur="15s" values="134; 174; 134; 94; 134" repeatCount="indefinite" />
            </ellipse>
            <text id="jquerytxt" style="fill: #000000" x="424" y="134">JQUERY</text>
         </g>
         <!-- liaison JS-AJAX -->
         <line x1="393" x2="419" y1="244" y2="310" style="stroke: #ffb380; stroke-width: 2px">
            <animate attributeName="x1" dur="15s" values="393; 388; 391; 388; 393;" repeatCount="indefinite" />
            <animate attributeName="y1" dur="15s" values="244; 264; 244; 224; 244" repeatCount="indefinite" />
            <animate attributeName="x2" dur="15s" values="419; 429; 436; 429; 419;" repeatCount="indefinite" />
            <animate attributeName="y2" dur="15s" values="310; 340; 310; 270; 310" repeatCount="indefinite" />
         </line>
         <g>
            <!-- bulle ajax -->
            <ellipse style="fill: #ffb380" cx="420" cy="330" rx="28" ry="22">
               <animate attributeName="cx" dur="15s" values="420; 430; 445; 430; 420;" repeatCount="indefinite" />
               <animate attributeName="cy" dur="15s" values="330; 360; 330; 290; 330" repeatCount="indefinite" />
               <!-- animation TEXT -->
               <animate xlink:href="#ajaxtxt" attributeName="x" dur="15s" values="403; 413; 428; 413; 403;" repeatCount="indefinite" />
               <animate xlink:href="#ajaxtxt" attributeName="y" dur="15s" values="334; 364; 334; 294; 334" repeatCount="indefinite" />
            </ellipse>
            <text id="ajaxtxt" style="fill: #000000" x="403" y="334">AJAX</text>
         </g>
      </g>
      <!-- liaison vers css -->
      <line x1="202" x2="129" y1="250" y2="260" style="stroke: url(#versCss); stroke-width: 2px">
         <animate attributeName="x2" dur="15s" values="129; 147; 152; 147; 129;" repeatCount="indefinite" />
         <animate attributeName="y2" dur="15s" values="260; 230; 240; 275; 260" repeatCount="indefinite" />
      </line>
      <g>
         <!-- bulle css -->
         <g>
            <ellipse style="fill: #80b3ff" cx="102" cy="260" rx="28" ry="22">
               <animate attributeName="cx" dur="15s" values="102; 120; 125; 120; 102;" repeatCount="indefinite" />
               <animate attributeName="cy" dur="15s" values="260; 230; 240; 275; 260" repeatCount="indefinite" />
               <!-- animation TEXT -->
               <animate xlink:href="#csstxt" attributeName="x" dur="15s" values="90; 108; 113; 108; 90;" repeatCount="indefinite" />
               <animate xlink:href="#csstxt" attributeName="y" dur="15s" values="265; 235; 245; 280; 265" repeatCount="indefinite" />
            </ellipse>
            <text id="csstxt" style="fill: #000000" x="90" y="265">CSS</text>
         </g>
         <!-- liaison CSS-SCSS -->
         <line x1="88" x2="50" y1="242" y2="205" style="stroke: #80b3ff; stroke-width: 2px">
            <animate attributeName="x1" dur="15s" values="88; 108; 113; 108; 88;" repeatCount="indefinite" />
            <animate attributeName="y1" dur="15s" values="242; 212; 222; 257; 242" repeatCount="indefinite" />
            <animate attributeName="x2" dur="15s" values="50; 70; 55; 70; 50;" repeatCount="indefinite" />
            <animate attributeName="y2" dur="15s" values="205; 105; 145; 185; 205" repeatCount="indefinite" />
         </line>
         <g>
            <!-- bulle scss -->
            <ellipse style="fill: #80b3ff" cx="30" cy="190" rx="28" ry="22">
               <animate attributeName="cx" dur="15s" values="30; 50; 35; 50; 30;" repeatCount="indefinite" />
               <animate attributeName="cy" dur="15s" values="190; 90; 130; 170; 190" repeatCount="indefinite" />
               <!-- animation TEXT -->
               <animate xlink:href="#scsstxt" attributeName="x" dur="15s" values="15; 35; 20; 35; 15;" repeatCount="indefinite" />
               <animate xlink:href="#scsstxt" attributeName="y" dur="15s" values="194; 94; 134; 174; 194" repeatCount="indefinite" />
            </ellipse>
            <text id="scsstxt" style="fill: #000000" x="15" y="194">SCSS</text>
         </g>
         <!-- liaison CSS-SASS -->
         <line x1="88" x2="50" y1="275" y2="350" style="stroke: #80b3ff; stroke-width: 2px">
            <animate attributeName="x1" dur="15s" values="88; 108; 113; 108; 88;" repeatCount="indefinite" />
            <animate attributeName="y1" dur="15s" values="275; 245; 255; 290; 275" repeatCount="indefinite" />
            <animate attributeName="x2" dur="15s" values="50; 40; 45; 40; 50;" repeatCount="indefinite" />
            <animate attributeName="y2" dur="15s" values="350; 310; 350; 380; 350" repeatCount="indefinite" />
         </line>
         <!-- bulle sass -->
         <g>
            <ellipse style="fill: #80b3ff" cx="40" cy="367" rx="28" ry="22">
               <animate attributeName="cx" dur="15s" values="40; 30; 35; 30; 40;" repeatCount="indefinite" />
               <animate attributeName="cy" dur="15s" values="367; 327; 367; 397; 367" repeatCount="indefinite" />
               <!-- animation TEXT -->
               <animate xlink:href="#sasstxt" attributeName="x" dur="15s" values="25; 15; 20; 15; 25;" repeatCount="indefinite" />
               <animate xlink:href="#sasstxt" attributeName="y" dur="15s" values="371; 331; 371; 401; 371" repeatCount="indefinite" />
            </ellipse>
            <text id="sasstxt" style="fill: #000000" x="25" y="371">SASS</text>
         </g>
      </g>
   </svg>