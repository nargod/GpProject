<body class="body">
    <div class="row">
        <div class="col-md-2 col-md-offset-0">

            <a class="{{ Request::is('진료내역') ? "active" : "" }} btn btn-primary btn-defaults btn-block" href="/진료내역" role="button">
                <div class="panel-heading", align="center">진료내역</div>
            </a>
        </div>
        <div class="col-md-2 md-offset-1">
            <a class="{{ Request::is('고객list') ? "active" : "" }} btn btn-primary btn-defaults btn-block" href="/고객list" role="button">
                <div class="panel-heading", align="center">고객List</div>
            </a>
        </div>
        <div class="col-md-2 md-offset-1">
            <a class="{{ Request::is('상담내역') ? "active" : "" }} btn btn-primary btn-defaults btn-block" href="/상담내역" role="button">
                <div class="panel-heading", align="center">상담내역</div>
            </a>
        </div>
        <div class="col-md-2 md-offset-1">
            <a class="{{ Request::is('후기조회') ? "active" : "" }} btn btn-primary btn-defaults btn-block" href="/후기조회" role="button">
                <div class="panel-heading", align="center">후기조회</div>
            </a>
        </div>
        <div class="col-md-2 md-offset-1">
            <a class="{{ Request::is('예약스케쥴') ? "active" : "" }} btn btn-primary btn-defaults btn-block" href="/예약스케쥴" role="button">
                <div class="panel-heading", align="center">예약스케쥴</div>
            </a>
        </div>
        <div class="col-md-2 md-offset-1">
            <a class="{{ Request::is('notice') ? "active" : "" }} btn btn-primary btn-defaults btn-block" href="/notice" role="button">
                <div class="panel-heading", align="center">공지사항</div>
            </a>
        </div>

    </div>
</body>