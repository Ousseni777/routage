<!DOCTYPE html>

<head>
    <title>zoom</title>
    <meta charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.1.1/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.1.1/css/react-select.css" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

</head>

<body style="margin-top: 100px;">
    <style>
        body {
            padding: 100px;

            margin-top: 300px;
        }

        .container {
            padding: 20px;
            padding-top: 100px;
            margin: 0;
            text-align: center;
        }

        .form-group {
            margin: 1%;
        }

        .sdk-select {
            height: 34px;
            border-radius: 4px;
        }

        #nav-tool {
            margin-bottom: 0px;
        }

        #show-test-tool {
            position: absolute;
            top: 100px;
            left: 0;
            display: block;
            z-index: 99999;
        }

        label {
            color: #fff;
            font-weight: bold;
        }

        #display_name {
            width: 250px;
        }


        #websdk-iframe {
            width: 700px;
            height: 500px;
            border: 1px;
            border-color: red;
            border-style: dashed;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            left: 50%;
            margin: 0;
        }
    </style>
    <?php
    session_start();
    include('../../account/connectToDB.php');

    $sql = "SELECT topic FROM `infos` WHERE 1 ORDER BY mtg_date, mtg_starts_h LIMIT 1";
    $queru_sql = mysqli_query($bdd, $sql);

    ?>
    <nav id="nav-tool" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div id="navbar" class="websdktest">
                <form class="navbar-form navbar-right" id="meeting_form">
                    <div class="form-group" style="visibility: hidden;">
                        <input type="text" name="display_name" id="display_name" value="B" maxLength="100" placeholder="Name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <select name="topic" id="topic" style="width:250px" placeholder="Meeting Topic" class="form-control">
                            <?php while ($table = mysqli_fetch_assoc($queru_sql)) { ?>
                                <option value="<?php echo $table['topic'] ?>"><?php echo $table['topic'] ?></option>
                            <?php $_SESSION['topic']=$table['topic'];} ?>
                        </select>
                        <!-- <input type="text" name="topic" id="topic" value="" maxLength="200" style="width:250px" placeholder="Meeting Topic" class="form-control" required> -->
                    </div>
                    <div class="form-group">
                        <input type="text" name="meeting_number" id="meeting_number" value="" maxLength="200" style="width:250px" placeholder="Meeting Number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="meeting_pwd" id="meeting_pwd" value="" style="width:250px" maxLength="32" placeholder="Meeting Password" class="form-control">
                    </div>
                    <div class="form-group" style="visibility: hidden;">
                        <input type="text" name="meeting_email" id="meeting_email" value="" style="width:250px" maxLength="32" placeholder="Email option" class="form-control">
                    </div>


                    <div class="form-group">
                        <select id="meeting_role" class="sdk-select">
                            <option value=0>Attendee</option>
                            <option value=1>Host</option>
                            <option value=5>Assistant</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select id="meeting_china" class="sdk-select">
                            <option value=0>Global</option>
                            <option value=1>China</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select id="meeting_lang" class="sdk-select">
                            <option value="en-US">English</option>
                            <option value="de-DE">German Deutsch</option>
                            <option value="es-ES">Spanish Español</option>
                            <option value="fr-FR">French Français</option>
                            <option value="jp-JP">Japanese 日本語</option>
                            <option value="pt-PT">Portuguese Portuguese</option>
                            <option value="ru-RU">Russian Русский</option>
                            <option value="zh-CN">Chinese 简体中文</option>
                            <option value="zh-TW">Chinese 繁体中文</option>
                            <option value="ko-KO">Korean 한국어</option>
                            <option value="vi-VN">Vietnamese Tiếng Việt</option>
                            <opftion value="it-IT">Italian italiano</option>
                        </select>
                    </div>
                    <div class="control">
                        <input type="hidden" value="" id="copy_link_value" />
                        <button type="submit" class="btn btn-warning" style="width:200px; padding: 10px; margin: 100px 1px 20px 1px; font-size:25px;" id="clear_all">Clear</button>
                        <input type="submit" value="START" class="btn btn-primary" style="width:200px; padding: 10px;margin: 100px 1px 20px 1px; font-size:25px;" id="join_meeting">
                        <button style="visibility:hidden;" type="button" link="" onclick="window.copyJoinLink('#copy_join_link')" class="btn btn-primary" id="copy_join_link">Copy Direct join link</button>
                    </div>


                </form>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </nav>

    <!-- http://localhost/myproject/innovation/access/zoom/CDN/meeting.php?
    name=Ym9ybw%3D%3D&
    mn=482307&
    email=Ym9ybzdvdXNzZW5pQGdtYWlsLmNvbQ%3D%3D&
    pwd=Boro2020&
    role=0&
    lang=en-US&
    signature=cC1YOTZRQWNUVmFMcVRkYkRsQ0xsZy40ODIzMDcuMTY0MzI3NTk4NzgwNy4wLnNQeGdhL05GeVhTbGVpbGFGeWNaMDU5L2tXTXR6YUJHMFZ5NDVta1JiZ1U9&
    china=0&
    apiKey=p-X96QAcTVaLqTdbDlCLlg -->


    <div id="show-test-tool" style="visibility: hidden">
        <button type="submit" class="btn btn-primary" id="show-test-tool-btn" title="show or hide top test tool">Show</button>
    </div>
    <script>
        document.getElementById('show-test-tool-btn').addEventListener("click", function(e) {
            var textContent = e.target.textContent;
            if (textContent === 'Show') {
                document.getElementById('nav-tool').style.display = 'block';
                document.getElementById('show-test-tool-btn').textContent = 'Hide';
            } else {
                document.getElementById('nav-tool').style.display = 'none';
                document.getElementById('show-test-tool-btn').textContent = 'Show';
            }
        })
    </script>

    <script src="https://source.zoom.us/2.1.1/lib/vendor/react.min.js"></script>
    <script src="https://source.zoom.us/2.1.1/lib/vendor/react-dom.min.js"></script>
    <script src="https://source.zoom.us/2.1.1/lib/vendor/redux.min.js"></script>
    <script src="https://source.zoom.us/2.1.1/lib/vendor/redux-thunk.min.js"></script>
    <script src="https://source.zoom.us/2.1.1/lib/vendor/lodash.min.js"></script>
    <script src="https://source.zoom.us/zoom-meeting-2.1.1.min.js"></script>
    <script src="js/tool.js"></script>
    <script src="js/vconsole.min.js"></script>
    <script src="js/index.js"></script>

    <script>


    </script>
</body>

</html>