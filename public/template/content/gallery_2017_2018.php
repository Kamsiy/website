<section id="gallery_2017_2018">
    <style>
    * {
        box-sizing: border-box;
    }

    body {
    margin: 0;
        font-family: Arial;
    }

    .header {
        text-align: center;
    padding: 32px;
    }

    .row {
    display: -ms-flexbox; /* IE 10 */
    display: flex;
        -ms-flex-wrap: wrap; /* IE 10 */
        flex-wrap: wrap;
    padding: 0 4px;
    }

    /* Create two equal columns that sits next to each other */
    .column {
        -ms-flex: 50%; /* IE 10 */
    flex: 50%;
    padding: 0 4px;
    }

    .column img {
        margin-top: 8px;
        vertical-align: middle;
    }

    /* Style the buttons */
    .btn {
    border: none;
    outline: none;
    padding: 10px 16px;
        background-color: #f1f1f1;
    cursor: pointer;
        font-size: 18px;
    }

    .btn:hover {
        background-color: #ddd;
    }

    .btn.active {
        background-color: #666;
    color: white;
    }
    </style>
    <body>

    <!-- Header -->
    <div class="header" id="myHeader">
        <h1 style="margin-bottom: 20px;"> 2017 - 2018 </h1>
            <button class="btn" onclick="one()" >1</button>
            <button class="btn" onclick="two()">2</button>
            <button class="btn" onclick="four()">4</button>
    </div>

    <!-- Photo Grid -->
    <div class="row">
    <div class="column">
        <img src="public/img/gallery_2017_2018/plow1.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow2.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow3.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/team_before_semester.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow13.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow14.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow15.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow16.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow17.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow18.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/batbot_11.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/batbot_12.png" style="width:100%">
    </div>
    <div class="column">
        <img src="public/img/gallery_2017_2018/batbot_13.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/batbot_14.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow7.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow8.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow9.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow19.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow20.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow21.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow22.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow23.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow24.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/alex.png" style="width:100%">
    </div>
    <div class="column">
        <img src="public/img/gallery_2017_2018/plow4" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow5" style="width:100%">
        <img src="public/img/gallery_2017_2018/batbot_1.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/batbot_2.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow6" style="width:100%">
        <img src="public/img/gallery_2017_2018/and_lo_a_pale_horse.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow25.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow26.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow27.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/batbot_3.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/batbot_15.png" style="width:100%">
    </div>
    <div class="column">
        <img src="public/img/gallery_2017_2018/batbot_4.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/batbot_5.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/batbot_6.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/batbot_7.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/batbot_8.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow10" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow11" style="width:100%">
        <img src="public/img/gallery_2017_2018/plow12" style="width:100%">
        <img src="public/img/gallery_2017_2018/batbot_9.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/batbot_10.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/dank_meal_everyone_missed.png" style="width:100%">
        <img src="public/img/gallery_2017_2018/muzzy_bot.png" style="width:100%">
    </div>
    </div>

    <script>
    // Get the elements with class="column"
    var elements = document.getElementsByClassName("column");

    // Declare a loop variable
    var i;

    // Full-width images
    function one() {
        for (i = 0; i < elements.length; i++) {
            elements[i].style.msFlex = "100%";  // IE10
            elements[i].style.flex = "100%";
        }
    }

    // Two images side by side
    function two() {
        for (i = 0; i < elements.length; i++) {
            elements[i].style.msFlex = "50%";  // IE10
            elements[i].style.flex = "50%";
        }
    }

    // Four images side by side
    function four() {
        for (i = 0; i < elements.length; i++) {
            elements[i].style.msFlex = "25%";  // IE10
            elements[i].style.flex = "25%";
        }
    }

    // Add active class to the current button (highlight it)
    var header = document.getElementById("myHeader");
    var btns = header.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
                                 var current = document.getElementsByClassName("active");
                                 current[0].className = current[0].className.replace(" active", "");
                                 this.className += " active";
                                 });
    }
    </script>

    </body>

</section>
