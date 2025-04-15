<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    /* Дополнительные стили для боковой панели */
    .aside {
        background-color: #1368be;
        padding: 15px;
    }
</style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col"><h1>Оставьте ваши контакты</h1></div>

        <div class="col-md-4">
            @section('aside')
                <div class="aside">
                    <h4>Боковая панель</h4>
                    <p>Lorem Ipsum</p>
                </div>
            @show
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

