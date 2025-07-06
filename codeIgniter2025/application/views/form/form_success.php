<html>

<head>
    <title>My Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        :root {
            --primary: --bs-success;
        }
        * {
            padding: 0;
            margin: 0;
        }

        .container {
            border: none;
            border-radius: 10px;

            position: absolute;
            top: 50%;
            left: 50%;
            width: 600px;
            padding: 70px;
            transform: translate(-50%, -50%);
            background: rgba(24, 79, 218, 0.5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
        }

        .section1 {
            border: none;
            color: white;
            border-radius: 10px;
            width: 100%;
            height: 50%;
        }

        .section2 {
            color: white;
            width: 100%;
            height: 50%;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="section1">
            <div class="content">
                <img src="https://img.icons8.com/?size=100&id=11695&format=png&color=000000" alt="tick logo">
                <h3>Your form was successfully submitted!</h3>
            </div>

        </div>

        <div class="section2">
            <p><?php echo anchor('form/validateController/index', 'Try it again!'); ?></p>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>

</body>

</html>