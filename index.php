<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather</title>
    <script src="https://kit.fontawesome.com/1ae1db6a1d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
</head>
<body>


    <div class="container">

        <div class="header">     
            <div class="search-container">
                
                <input type="text" id="search" placeholder="Search your City" />
                <button onclick="getConnectionStatus(navigator.onLine)">
                    <span class="input-group-text border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                    </span>
                </button>
                
            </div>
        </div>   

        <div class="title" id="title">
         
        </div>
         
        <div class="content" id="weather">

           
        </div>
        <div class="button7">
            <a href="history.php">History</a>
        </div>
    
    </div>
   
    <script src="weather.js"></script>
</body>
</html>