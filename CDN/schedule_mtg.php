<!DOCTYPE html>

<head>
    <title>zoom</title>
    <meta charset="utf-8" />

    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.1.1/css/bootstrap.css" />
    <link rel="stylesheet" href="./css/schedule.css">
    <link rel="stylesheet" href="../../../IMG/fontawesome/css/all.css">
</head>

<body>
    <div class="container">

        <form class="" method="POST" action="./save_info.php" id="meeting_form">

            <div class="s_form">
                <div class="form-group">
                    <input type="text" name="meeting_topic" id="meeting_topic" value="" maxLength="200" placeholder="Meeting Topic" class="form-control" required>
                </div>

                <div class="form-group">
                    <input type="date" name="meeting_date" id="meeting_date" maxLength="200" class="form-control" required>
                </div>
                <div class="form-group time">
                    <span href="" onclick="setStartingH();">
                        <div>
                        <i class="far fa-clock fa-3x"></i>
                        </div>
                        <div>
                        <span name="" id="meeting_starts">Set time</span>
                        </div>
                    </span>
                    
                </div>

            </div>
            <div class="s_form">
                <div class="form-group group" id="start">

                </div>
                <div class="form-group group" id="end">

                </div>
            </div>


            <div class="s_form action">
                <input class="btn btn-danger" type="reset" id="reset" value="Clear" onclick="hide()">                
                <input class="btn btn-success" type="submit" value="ADD" class="btn" id="join_meeting">
            </div>

        </form>
    </div>
    <script>
        function hide(){
            document.getElementById('start').style.visibility='hidden';
            document.getElementById('end').style.visibility='hidden';
        }
        function setStartingH() {

            let hours = Number(prompt("Meeting start at : (hours) ?"));
            while (isNaN(hours) || hours < 0 || hours > 24) {
                hours = Number(prompt("Hours invalide"));
            }
            let minutes = Number(prompt("Meeting start at : (minutes) ?"));
            while (isNaN(minutes) || minutes < 0 || minutes >= 60) {
                minutes = Number(prompt("Minute invalide"));
            }
            let hours_end = Number(prompt("Meeting ends at : (hours) ?"));
            while (isNaN(hours_end) || hours_end < hours || hours_end > 24) {
                if (hours_end < hours)
                    hours_end = Number(prompt("Confusion"));
                else
                    hours_end = Number(prompt("Hours invalide retry !"));
            }
            let minutes_end = Number(prompt("Meeting ends at : (minutes) ?"));
            while (isNaN(minutes_end) || minutes_end < 0 || minutes_end >= 60) {
                if (hours = hours_end && minutes > minutes_end)
                    minutes_end = Number(prompt("Confusion"));
                else
                    minutes_end = Number(prompt("Minute invalide"));
            }
            let div = document.createElement('div');
            let div2 = document.createElement('div');

            div.setAttribute('class', 'horloge');
            div2.setAttribute('class', 'horloge');

            let label = document.createElement('label');
            let label2 = document.createElement('label');
            label.textContent = 'Meeting starts at : ';
            label2.textContent = 'Meeting ends at : ';

            let start_h = document.createElement('input');
            let start_m = document.createElement('input');
            let end_h = document.createElement('input');
            let end_m = document.createElement('input');

            let span = document.createElement('span');
            let gmt = document.createElement('span');

            let span2 = document.createElement('span');
            let gmt2 = document.createElement('span');

            span.setAttribute('class', 'dotte');
            gmt.setAttribute('class', 'gmt');

            span2.setAttribute('class', 'dotte');
            gmt2.setAttribute('class', 'gmt');

            start_h.setAttribute('name', 'meeting_start_h');
            start_h.setAttribute('class', 'control');
            start_m.setAttribute('name', 'meeting_start_m');
            start_m.setAttribute('class', 'control');

            end_h.setAttribute('name', 'meeting_ends_h');
            end_h.setAttribute('class', 'control');
            end_m.setAttribute('name', 'meeting_ends_m');
            end_m.setAttribute('class', 'control');

            start_h.value = hours;
            start_m.value = minutes;
            end_h.value = hours_end;
            end_m.value = minutes_end;

            span.textContent = 'h : ';
            gmt.innerHTML = 'mn GMT+1';
            span2.textContent = 'h : ';
            gmt2.innerHTML = 'mn GMT+1';

            document.getElementById('start').appendChild(div);
            div.appendChild(label);
            div.appendChild(start_h);
            div.appendChild(span);
            div.appendChild(start_m);
            div.appendChild(gmt);

            document.getElementById('end').appendChild(div2);
            div2.appendChild(label2);
            div2.appendChild(end_h);
            div2.appendChild(span2);
            div2.appendChild(end_m);
            div2.appendChild(gmt2);


        }
    </script>
</body>

</html>