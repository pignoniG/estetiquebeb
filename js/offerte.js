
            function countdownComplete(unit, value, total){
                console.log("cazzo");

                if(total<=0){

                    $("#offerta_scaduta").show();

                }
            }

jQuery(document).ready(function () {
            $("#countdownOfferta_giorni").TimeCircles({ time: { Days: { show: true } }});

            $("#countdownOfferta_ore").TimeCircles({ time: { Hours: { show: true } }});

            $("#countdownOfferta_minuti").TimeCircles({ time: { Minutes: { show: true } }})

            $("#countdownOfferta_secondi").TimeCircles({ time: {  Seconds: { show: true } }}).addListener(countdownComplete);;
})


    