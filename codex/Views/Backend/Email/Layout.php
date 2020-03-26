<html>

<head>
    <style>
    body {
        background: #f1f1f1;
        margin: 0;
    }

    .container {
        max-width: 600px;
        height: 100%;
        margin: 0 auto;
        background: #fff;
        padding: 20px;
        box-shadow: 1px 1px 10px #ccc;
        text-align: center;
    }

    p {
        font-size: 20px;
    }

    .header {
        text-align: center;
        padding: 40px;
        background-color: lightcoral;
        border-radius: 5px;
        margin-bottom: 40px;
    }

    .cta {
        text-align: center;
        padding: 20px;
    }

    .btn {
        padding: 5px;
        color: lightcoral;
        font-weight: bold;
        font-size: 24px;
        border-bottom: 2px solid lightcoral;
        text-decoration: none;
    }

    .content {
        padding: 0 20px;
    }

    .code {
        background: #f1f1f1;
        border-radius: 5px;
        border: 1px #ddd solid;
        padding: 10px;
        font-size: 20px;
        margin: 10px;
        display: inline-block;
    }
    </style>
</head>

<body>
    <div class="container">
        <?=$this->renderSection('container')?>
    </div>
</body>

</html>