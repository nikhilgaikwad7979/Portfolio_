<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px; /* Space between cards */
            padding: 20px; /* Padding around the container */
        }

        .flip-card {
            background-color: transparent;
            width: 300px;
            height: 300px;
            perspective: 1000px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-card-front {
            background-color: #bbb;
            color: black;
        }

        .flip-card-back {
            background-color: #2980b9;
            color: white;
            transform: rotateY(180deg);
        }
    </style>
</head>
<body> 

    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-back">
                <img src="images/html.png" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-front">
                <h1>HTML</h1> 
              
            </div>
        </div>
    </div>
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-back">
                <img src="images/css.png" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-front">
                <h1>CSS</h1> 
              
            </div>
        </div>
    </div>

    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-back">
                <img src="images/javascript.png" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-front">
                <h1>JavaScript</h1> 
              
            </div>
        </div>
    </div>
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-back">
                <img src="images/boostrap.jpeg" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-front">
                <h1>Boostrap5</h1> 
              
            </div>
        </div>
    </div>
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-back">
               
                <img src="images/sql.png" alt="Avatar" style="width:300px;height:300px;"></div>
            <div class="flip-card-front">
                <h1>SQL</h1> 
               
            </div>
        </div>
    </div>
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-back">
                <img src="images/c.png" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-front">
                <h1>C</h1> 
              
            </div>
        </div>
    </div>
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-back">
                <img src="images/c++.png" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-front">
                <h1>C++</h1>               
            </div>
        </div>
    </div>
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-back">
                <img src="images/java.png" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-front">
                <h1>Java</h1>               
            </div>
        </div>
    </div>
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-back">
                <img src="images/php.png" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-front">
                <h1>Php</h1>               
            </div>
        </div>
    </div>
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-back">
                <img src="images/android.jpeg" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-front">
                <h1>Android</h1>               
            </div>
        </div>
    </div>
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-back">
                <img src="images/csharp.png" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-front">
                <h1>C#</h1>               
            </div>
        </div>
    </div>
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-back">
                <img src="images/github.png" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-front">
                <h1>GitHub</h1>               
            </div>
        </div>
    </div>
</body>
</html>