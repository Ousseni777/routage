<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../IMG/fontawesome/css/all.css">
    <link rel="stylesheet" href="../CSS/styles.css">
    
    <title>innov</title>
</head>

<body>
    <div class="side_bar">
        <div id="toogle" class="toogle"><i id="icon_toogle" class="fas fa-toggle-off fa-3x"></i></div>
        <div class="menu">
            <div class="option"><a href="" target="page"><i class="fas fa-home fa-1x"></i></i><span>Home</span></a></div>
            <div class="option"><a href="./members/speaker.php" target="page"><i class="far fa-calendar-alt fa-1x"></i><span>Agenda</span></a></div>
            <div class="option"><a href="" target="page"><i class="fas fa-desktop fa-1x"></i><span>Conference Room</span></a></div>
            <div class="option"><a href="" target="page"><i class="fas fa-laptop-medical fa-1x"></i><span>Exhibitor Show</span></a></div>
            <div class="option"><a href="../wef_nexus_Exhibition.php" target="page"><i class="fas fa-laptop-house fa-1x"></i><span>WEF Exhibition</span></a></div>
            <div class="option"><a href="../wef_fair_innovation.php" target="page"><i class="fas fa-laptop-house fa-1x"></i><span>WEF Innov Fair</span></a></div>
            <div class="option"><a href="./members/speaker.php" target="page"><i class="fas fa-users fa-1x"></i><span>Participants</span></a></div>
            <div class="option"><a href="" target="page"><i class="fas fa-users-cog fa-1x"></i><span>Networking</span></a></div>
            <div class="option"><a href="" target="page"><i class="fas fa-user fa-1x"></i><span>My Profil Config</span></a></div>
            <div class="option"><a href="" target="page"><i class="fas fa-star fa-1x"></i><span>My Visit</span></a></div>
            <div class="option"><a href="" target="page"><i class="fas fa-question-circle fa-1x"></i><span>How It works ?</span></a></div>
            <div class="option"><a href="" target="page"><i class="fas fa-guilded fa-1x"></i><span>User guides</span></a></div>
            <div class="option"><a href="" target="page"><i class="fas fa-paper-plane fa-1x"></i><span>Contact Us</span></a></div>
            <div class="option"><a href="../access/zoom/CDN/index.html" target="page"><i class="fas fa-desktop fa-1x"></i><span>Publish your meeting</span></a></div>
            <div class="option"><a id="logout" href="./frame_innov.php?id=2"><i class="fas fa-sign-out-alt fa-1x"></i><span>Logout</span></a></div>
        </div>

    </div>
    <script>
        let toogle = document.getElementById('toogle');
        let icon = document.getElementById("icon_toogle");
        let side_bar = document.querySelector('.side_bar');
        let = side = document.querySelector('.side_bar');
        var glo=0;

        side_bar.onmouseover = function() {
            // side_bar.classList.toggle('active');
            
            
                 
                icon.style.color = 'white';
                icon.classList.replace('fa-toggle-off', 'fa-toggle-on');
                side_bar.classList.replace('side_bar','side_bar2');                           
                 
        }
        
        side_bar.onmouseout=function(){
            icon.classList.replace('fa-toggle-on', 'fa-toggle-off');
                side_bar.classList.replace('side_bar2','side_bar');
              
        }
      
    </script>
</body>

</html>