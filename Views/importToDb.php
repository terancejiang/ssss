<?php

?>


<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>seaPluz</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/jquery.fileupload.css">

    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">SeaPluz</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li ><a href="index.php">Home</a></li>
                <li><a href="search.php">查找</a></li>
                <li><a href="#contact">index1</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="active"><a href="importToDb.php">上传</a></li>
                        <li><a href="#">more action</a></li>
                        <li><a href="#">more more here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">some small thing</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="../">Fixed top <span class="sr-only">(current)</span></a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<br><br><br>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">上传须知：</h3>
        </div>
        <div class="panel-body">
            <ul>
                <li><strong>1</strong> </li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>6</li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <form id="fileupload" action="" method="POST" enctype="multipart/form-data">
        <noscript><input type="hidden" name="redirect" value=""></noscript>
        <div class="row fileupload-buttonbar">
            <div class="col-lg-7">
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>添加文件</span>
                    <input id="fileinput"type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn btn-primary start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>开始上传</span>
                </button>
                <button type="button" class="btn btn-danger delete">
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>删除文件</span>
                </button>
            </div>

        </div>
        <table id="respond" class="table table-striped">
        </table>
    </form>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>


<script>
//    $(function() {
//        $(document).on('change', ':file', function() {
//            var input = $(this),
//                numFiles = input.get(0).files ? input.get(0).files.length : 1,
//                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
//            input.trigger('fileselect', [numFiles, label]);
//        });
//
//        $(document).ready( function() {
//            $(':file').on('fileselect', function(event, numFiles, label) {
//
////                var input = $(this).parents('.input-group').find(':text'),
////                    log = numFiles > 1 ? numFiles + ' files selected' : label;
////
////                if( input.length ) {
////                    input.val(log);
////                } else {
////                    if( log ) alert(log);
////                }
//                var files = event.target;
//                var content = "<tbody>";
//                for(var i=1; i<=numFiles; i++){
//                    content +="<tr>";
//                    content += '<td>' + files[i].name  + '</td>';
//                    content +="</tr>";
//                }
//                content+="</tbody>";
//                $('#respond').html(content);
//            });
//        });
//
//    });
    var fileInput = document.getElementById('fileinput');
    fileInput.addEventListener('change', function(event) {
        var input = event.target;
        var content="<thead>";
        content +="<tr>";
        content += '<th>'+'#'+'</th>';
        content +='<th>'+'文件名'+'</th>';
        content += '<th>'+'文件大小 (KB)'+'</th>';
        content += '<th>'+'删除'+'</th>';
        content +="</tr>";
        content += "</thead>";
        content += "<tbody>";
        for (var i = 0; i < input.files.length; i++) {
            var n = input.files[i].size/1024;

            content +="<tr>";
            content += '<th scope="row">'+i+'</th>';
            content += '<td>' + input.files[i].name  + '</td>';
            content += '<td>' +  n.toFixed(0) + '</td>';
            content += '<td><button class="btn btn-danger" data-key="'+ i +'">Delete</button></td>';
            content +="</tr>";
        }
        content+="</tbody>";
        $('#respond').html(content);
    });
    $('#upload').on('click',function () {
        var file_data = $('#xlsfile').prop('file')[0];
        var form_data = new FormData();
        form_data.append('file', file_data);
        alert(form_data);
        $.ajax({
            url: '../Controller/importxls.php', // point to server-side PHP script
            dataType: 'text',  // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function(php_script_response){
                alert(php_script_response); // display response from the PHP script, if any
            }
        });
    });
</script>