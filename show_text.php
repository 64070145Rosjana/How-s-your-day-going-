<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Itim&display=swap');
        body {
            margin: 40px 0 0;
            background: #91D1D3;
            font-family: 'Itim', cursive;
        }
        
        .paper {
            position: relative;
            width: 90%;
            max-width: 800px;
            min-width: 400px;
            height: 480px;
            margin: 0 auto;
            background: #fafafa;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .3);
            overflow: hidden;
        }
        
        .paper:before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 50px;
            background: radial-gradient(#575450 6px, transparent 7px) repeat-y;
            background-size: 30px 30px;
            border-right: 3px solid #D44147;
            box-sizing: border-box;
        }
        
        .paper-content {
            position: absolute;
            top: 30px;
            right: 0;
            bottom: 30px;
            left: 60px;
            background: linear-gradient(transparent, transparent 28px, #91D1D3 28px);
            background-size: 30px 30px;
        }
        
        .paper-head {
            display: grid;
            grid-template-columns: 1fr 1fr 200px;
        }
        
        .paper-items-text {
            grid-column-start: 1;
            grid-column-end: 4;
        }
        
        .paper-content textarea {
            width: 100%;
            max-width: 100%;
            height: 400px;
            max-height: 100%;
            line-height: 30px;
            padding: 30px;
            text-indent: 20px;
            border: 0;
            outline: 0;
            background: transparent;
            color: #000000;
            font-family: 'Itim', cursive;
            font-weight: bold;
            font-size: 18px;
            box-sizing: border-box;
            z-index: 1;
        }
        
        .paper-items {
            font-family: 'Itim', cursive;
            line-height: 30px;
            color: #000000;
        }
    </style>
</head>

<body>
    <div class="paper">
        <div class="paper-content">
            <div class="paper-head">
                <div class="paper-items">
                    <b>Diary : <?php $_POST['Diary']?></b>
                </div>
                <div class="paper-items">
                    <b> by : <?php $_POST['name']?></b>
                </div>
                <div class="paper-items">
                    <b> Date : <?php $_POST['Date']?></b>
                </div>
                <div class="paper-items-text">
                    <textarea readonly><?php $_POST['Story']?></textarea>
                </div>
            </div>
        </div>
    </div>
</body>

</html>