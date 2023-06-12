<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap");

        header {
            background-color: whitesmoke;
            text-align: center;
            font-size: 70px;
            font-family: impact;
        }

        .logbtn {
            height: 30px;
            width: 70px;
            float: right;
        }

        .breadcrumb {
            display: flex;
            flex-direction: row;
            width: 100%;
            margin: 10px;
            padding: 1px;
            background-color: white;
            list-style-type: none;
        }

        .nav-item {
            padding: 7px;
            cursor: pointer;
        }

        .nav-item a {
            text-align: center;
            text-decoration: none;
            color: black;
            font-size: medium;
            font-weight: 900;
        }

        .vac {
            text-align: right;
        }

        section {
            height: 300%;
        }

        .hos {
            height: 100%;
            border: solid black;
            margin: 15px;
        }

        .name {
            font-size: 45px;
            display: inline-block;
            width: 30%;
        }

        #sev,
        #as,
        #ha,
        #sa {
            width: 190px;
            height: 57px;
            text-align: center;
            margin-left: 200px;
            margin-right: 100px;
            margin-bottom: 50px;
            display: inline-block;
            border: solid gray;
            line-height: 50px;
            font-size: 50px;
        }

        #success1,
        #success2,
        #success3,
        #success4 {
            display: flex;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
            padding: 0.5rem 1rem;
            font-family: "Noto Sans KR", sans-serif;
            font-size: 1rem;
            font-weight: 400;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            width: auto;
            border: none;
            border-radius: 4px;
            background: rgb(138, 193, 57);
            color: white;
            float: right;
            margin-top: 57px;
            margin-right: 20px;
            display: inline-block;
            --button-bg-color: #28a745;
            --button-hover-bg-color: #218838;
            display: inline-block;
            outline: 0;
        }

        footer {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            clear: both;
            font-size: large;
            background-color: rgb(182, 182, 182);
        }
    </style>
</head>

<body>
    <header>vaccine reservation</header>
    <ul class="breadcrumb">
        <li class="nav-item"><a href="">vaccine</a></li>
        <li class="nav-item"><a href="">hospital</a></li>
        <li class="nav-item"><a href="">detail</a></li>
        <li class="nav-item"><a href="">mypage</a></li>
        <button type="button" class="logbtn" onclick="location.href='login.php'">Login</button>&nbsp;&nbsp;
        <button type="button" class="logbtn" onclick="location.href='action.php'">location</button>
    </ul>


    <section>
        <div class="hos">
            <p class="name">Severance</p>
            <button id="success1" onclick="minus0()">accept</button>
            <div id="sev">num</div>
        </div>
        <div class="hos">
            <p class="name">Asan</p>
            <button id="success2" onclick="minus1()">accept</button>
            <div id="as">num</div>
        </div>
        <div class="hos">
            <p class="name">Hanyang</p>
            <button id="success3" onclick="minus2()">accept</button>
            <div id="ha">num</div>
        </div>
        <div class="hos">
            <p class="name">Samsung</p>
            <button id="success4" onclick="minus3()">accept</button>
            <div id="sa">num</div>
        </div>
    </section>

    <footer>
        <ul>
            <li>adress : <b>Seoul</b></li><br>
            <li>P.N : <b>010-9666-8808</b></li>
        </ul>
    </footer>
    <script>
        var cnt = new Array();
        for (var i = 0; i < 4; i++) {
            cnt[i] = 100;
        }
        document.getElementById("sev").innerHTML = cnt[0];
        document.getElementById("as").innerHTML = cnt[1];
        document.getElementById("ha").innerHTML = cnt[2];
        document.getElementById("sa").innerHTML = cnt[3];

        if (cnt[0] > 70) {
            document.getElementById("success1").style.backgroundColor = "rgb(138, 193, 57)";
        } else if (cnt[0] <= 70 && cnt[0] >= 30) {
            document.getElementById("success1").style.backgroundColor = "orange";
        } else if (cnt[0] < 30 && cnt[0] > 0) {
            document.getElementById("success1").style.backgroundColor = "rgb(235, 102, 102)";
        } else {
            document.getElementById("success1").style.backgroundColor = "red";
            document.getElementById("success1").onclick = function() {
                alert("no vaccine");
            }
        }

        if (cnt[1] > 70) {
            document.getElementById("success2").style.backgroundColor = "rgb(138, 193, 57)";
        } else if (cnt[1] <= 70 && cnt[1] >= 30) {
            document.getElementById("success2").style.backgroundColor = "orange";
        } else if (cnt[1] < 30 && cnt[1] > 0) {
            document.getElementById("success2").style.backgroundColor = "rgb(235, 102, 102)";
        } else {
            document.getElementById("success2").style.backgroundColor = "red";
            document.getElementById("success2").onclick = function() {
                alert("no vaccine");
            }
        }

        if (cnt[2] > 70) {
            document.getElementById("success3").style.backgroundColor = "rgb(138, 193, 57)";
        } else if (cnt[2] <= 70 && cnt[2] >= 30) {
            document.getElementById("success3").style.backgroundColor = "orange";
        } else if (cnt[2] < 30 && cnt[2] > 0) {
            document.getElementById("success3").style.backgroundColor = "rgb(235, 102, 102)";
        } else {
            document.getElementById("success3").style.backgroundColor = "red";
            document.getElementById("success3").onclick = function() {
                alert("no vaccine");
            }
        }

        if (cnt[3] > 70) {
            document.getElementById("success4").style.backgroundColor = "rgb(138, 193, 57)";
        } else if (cnt[3] <= 70 && cnt[3] >= 30) {
            document.getElementById("success4").style.backgroundColor = "orange";
        } else if (cnt[3] < 30 && cnt[3] > 0) {
            document.getElementById("success4").style.backgroundColor = "rgb(235, 102, 102)";
        } else {
            document.getElementById("success4").style.backgroundColor = "red";
            document.getElementById("success4").onclick = function() {
                alert("no vaccine");
            }
        }

        function minus0() {
            cnt[0] = cnt[0] - 1;
            document.getElementById("sev").innerText = cnt[0];
        }

        function minus1() {
            cnt[1] = cnt[1] - 1;
            document.getElementById("as").innerText = cnt[1];
        }

        function minus2() {
            cnt[2] = cnt[2] - 1;
            document.getElementById("ha").innerText = cnt[2];
        }

        function minus3() {
            cnt[3] = cnt[3] - 1;
            document.getElementById("sa").innerText = cnt[3];
        }
    </script>
</body>

</html>