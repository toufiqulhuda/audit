@include('layouts.header')
@if (Auth::user() && Auth::user()->isactive == '1') 
    @include('layouts.sidebar')
    
@endif
@yield('content')
<style type="text/css">
    .service_col_stmt {
        width: 100%;
    }
    .service_col_balance{
        width: 673px;
        min-height: 61px;
    }
    .tg {
        border: 1px solid #ccc;
        border-collapse: collapse;
        border-spacing: 0;
        margin: 0 auto;
        width: 700px;
    }
    .tg td {
        border: 1px solid #ccc;
        color: #006499;
        font-family: Arial,sans-serif;
        font-size: 11px;
        font-weight: bold;
        line-height: 15px;
        overflow: hidden;
        padding: 0 7px 0 4px;
        word-break: normal;
    }
    .tg th {
        border: 1px solid #ccc;
        color: #006433;
        font-family: Arial,sans-serif;
        font-size: 11px;
        font-weight: bold;
        line-height: 16px;
        overflow: hidden;
        padding: 0 4px 0 5px;
        word-break: normal;
    }
    .tg .tg-yw4l{vertical-align:top}
    .service_col {
        position: relative;
    }
</style>

    <!--<style type="text/css">
    .jslbl {
        width: 207px !important;
    }
    .jsblnc{

    }
    .cbinfo div {
        float: left;
        padding: 0 0 4px;
        text-align: left;
        width: 96%;
    }
    .cbinfo {
        float: left;
        padding: 15px 6px 0 4px;
        width: 100%;
    }   
    .cbinfo span {
        border-bottom: 1px dotted #ccc;
        color: #333;
        display: block;
        float: left;
        font-size: 12px;
        line-height: 13px;
        padding: 0 0 4px 12px;
        text-align: left;
        width: 122px;
    }
    .infttl {
        color: #006499 !important;
    }
    .tg {
        border: 1px solid #ccc;
        border-collapse: collapse;
        border-spacing: 0;
        margin: 0 auto;
        width: 649px;
    }
    .tg td {
        border: 1px solid #ccc;
        color: #006499;
        font-family: Arial,sans-serif;
        font-size: 10px;
        font-weight: bold;
        line-height: 15px;
        overflow: hidden;
        padding: 0 7px 0 4px;
        word-break: normal;
    }
    .tg th {
        border: 1px solid #ccc;
        color: #006433;
        font-family: Arial,sans-serif;
        font-size: 9px;
        font-weight: bold;
        line-height: 16px;
        overflow: hidden;
        padding: 0 4px 0 5px;
        word-break: normal;
    }
    .tg .tg-yw4l{vertical-align:top}
</style>
<style type="text/css">
    .short_desc_panel {
        height: 201px;
        width: 668px;
    }
    .loader, .loader1,.loader2{
        float: right; top: -4px; margin: -10px 0px 0px;
    }
    .accountdp,.accountdpstmt {
        border-bottom: 1px dashed #cecece;
        color: #006400;
        float: left;
        font-size: 11px;
        margin: 0 0 4px 8px;
        padding: 0 0 4px 11px;
        width: 95%;
    }
    .info_box_right {
        border-left: 1px dashed #ccc;
        float: left;
        height: 157px;
        margin: -5px 0 0 7px;
        width: 395px;
    }
    .totalcBalance {
        color: #006400;
        display: block;
        float: left;
        font-size: 11px;
        left: 14px;
        padding: 35px 0 0 15px;
        width: 100%;
    }
    .updateTimeBalance {
        bottom: 0;
        color: #003300;
        display: block;
        float: left;
        font-size: 11px;
        padding: 0 23px 4px 15px;
        text-align: right;
        width: 100%;
    }
    .service_col {
        position: relative;
    }
</style>
    </div>
  </div>-->
</div>

@include('layouts.footer')
            </div>

            <div id="body-bottom"></div>
        </div>


        <script type="text/javascript">

            $(document).ready(function() {
                document.title = 'Welcome To National Bank Limited';
            });

        </script>
    

</body>
</html>