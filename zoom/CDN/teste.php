<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #favDialog{
            width: 250px;
            height: 80px;
            padding: 2% 2% 0% 2%;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, .3);
            border: rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            box-shadow: -1px -1px 1px 1px rgba(0, 0, 0, 0.2), 1px 1px 1px 1px rgba(0, 0, 0, 0.19);
            -webkit-box-shadow:  -1px -1px 1px 1px rgba(0, 0, 0, 0.2), 1px 1px 1px 1px rgba(0, 0, 0, 0.19);
            -moz-box-shadow:-1px -1px 1px 1px rgba(0, 0, 0, 0.2), 1px 1px 1px 1px rgba(0, 0, 0, 0.19);
        }
        .message{
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-left: 18%;
        }

        .menu button{
            width: 40%;
            font-weight: bold;
            margin-bottom: 0;
            padding-bottom: 0;
            box-shadow: -1px -1px 1px 1px rgba(0, 0, 0, 0.2), 1px 1px 1px 1px rgba(0, 0, 0, 0.19);
            -webkit-box-shadow:  -1px -1px 1px 1px rgba(0, 0, 0, 0.2), 1px 1px 1px 1px rgba(0, 0, 0, 0.19);
            -moz-box-shadow:-1px -1px 1px 1px rgba(0, 0, 0, 0.2), 1px 1px 1px 1px rgba(0, 0, 0, 0.19);
        }
    </style>
</head>

<body>
    <!-- Boîte de dialogue contextuelle simple contenant un formulaire -->
    <dialog id="favDialog">
        <form method="dialog">
            <span class="message">Validation de l'inscription</span>
            <menu class="menu">
                <button value="cancel">Annuler</button>
                <button id="confirmBtn" value="default">Confirmer</button>
            </menu>
        </form>
    </dialog>

    <menu>
        <button id="updateDetails">Mettre à jour les détails</button>
    </menu>

    <output aria-live="polite"></output>
    <script>
        // alert('bonnj',)
        // confirm('bor',)
        let updateButton = document.getElementById('updateDetails');
        let favDialog = document.getElementById('favDialog');
        let outputBox = document.querySelector('output');        
        let confirmBtn = document.getElementById('confirmBtn');

        // Le bouton "Mettre à jour les détails" ouvre le <dialogue> ; modulaire
        updateButton.addEventListener('click', function onOpen() {
            if (typeof favDialog.showModal === "function") {
                favDialog.showModal();
            } else {
                console.error("L'API <dialog> n'est pas prise en charge par ce navigateur.");
            }
        });
       
        // Le bouton "Confirmer" du formulaire déclenche la fermeture
        // de la boîte de dialogue en raison de [method="dialog"]
        favDialog.addEventListener('close', function onClose() {
            outputBox.value = favDialog.returnValue + " bouton cliqué - " + (new Date()).toString();
        });
    </script>
</body>

</html>