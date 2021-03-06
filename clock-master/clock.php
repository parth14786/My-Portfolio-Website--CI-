<!doctype html>
<html>
    <head>

        <title>jClocksGMT v. 2.0</title>

        <link rel="shortcut icon" type="image/png" href="images/favicon.png">
        
        <link rel="stylesheet" href="css/jClocksGMT.css">
        
        <style>
            body { font-family: Arial, sans-serif; }
        </style>

    </head>
    <body>

        <div id="clock_hou"></div>
        <div id="clock_india"></div>
        <div id="clock_korea"></div>
        <div id="clock_uk"></div>
        <div id="clock_tokyo"></div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

        <script src="js/jClocksGMT.js"></script>
        <script src="js/jquery.rotate.js"></script>

        <script>
            $(document).ready(function(){

                $('#clock_hou').jClocksGMT(
                {
                    title: 'Houston, TX, USA', 
                    offset: '-6',
                    dateformat: 'DD/MM/YYYY',
                    date:true
                });

                $('#clock_india').jClocksGMT(
                {
                    title: 'New Delhi, India', 
                    offset: '+5.5', 
                    dst: false, 
                    skin: 2, 
                    dateformat: 'DD/MM/YYYY',
                    date:true
                });

                $('#clock_korea').jClocksGMT(
                {
                    title: 'Seoul, S. Korea', 
                    offset: '+8', 
                    skin: 3,
                    dateformat: 'DD/MM/YYYY',
                    date: true
                });

                $('#clock_uk').jClocksGMT(
                {   
                    date: true, 
                    dateformat: 'DD/MM/YYYY', 
                    skin: 4
                });

                $('#clock_tokyo').jClocksGMT(
                {
                    title: 'Tokyo, Japan',
                    offset: '+9',
                    skin: 5,
                    dateformat: 'DD/MM/YYYY',
                    date: true
                });

            });
        </script>

    </body>
</html>
