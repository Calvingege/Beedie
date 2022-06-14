<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../assets/Biddie.png">
        <!-- Styles -->
        <style>
            div {
          margin-top: 10px;
          margin-bottom: 10px;
          margin-right: 20px;
          margin-left: 20px;
            }
    
            #navbar{
            background-color: #222831;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .logo img{
            height: 50px;
        }
    
        .profile img{
            height: 50px;
        }
    
        ul{
            color: #B67300;
            display: flex;
            height: 10vh;
            /* align-items: center; */
        }
        
        li{
            list-style: none;
            margin: 0 30px;
            font-size: 25px;
        }
        
        a{
            font-weight: bolder; 
            color: #B67300;
            text-decoration: none;
            display: flex;
            align-items: center;
        }
    
        a:hover{
            color: #7e5102
        }
        
        #hero-section{
            height: 70vh;
            background-color: white;
            background-size: cover;
            /* background-repeat: ; */
            display: flex;  
            justify-content: center;
            flex-direction: column;
            padding-left: 200px;
        }
        
        #picture-selection{
            float: right;
            padding: 10px;
            padding-top: 120px;
            padding-right: 250px;
        }
        
        #pre-selection{
            padding-left: 88px;
        }
            </style>
        
        </head>
        <body>
        <div id="navbar">
            <div class="logo">
                <a href="/home"><img src="/assets/biddie.png" alt=""></a>
            </div>
    
              <div>
                <ul>
                <a href="/home"><li>Home</li></a>
                <a href="/login">Login</a>
                <a href="/create/bid"><li>Buy Item</li></a>
                <a href="/create/adds"><li>Sell Item</li></a>
                <a href="/about"><li>about us</li></a>
                </ul>
              </div>
                
              <div class="profile">
                <a href="/dashboard"><img src="/assets/profile.svg" alt=""></a>
              </div>
              
        </div>
            
                <div id="picture-selection">
                    <img src="../assets/Beedie.png" alt="" style="width: 400px; height: 300px" class="floatRight">
                </div>  
            
                <div id="hero-section">
                        <h1>Welcome to Biddie</h1>
                    <div id="pre-selection">
                        <h3>
                            digital-based auction
                        </h3>
                    </div>
                    <p>Not a member? <a href="/register">Create Account</a> </p>
                </div>
            
            </body>
        </div>
    </body>
</html>
