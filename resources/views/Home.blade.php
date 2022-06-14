<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

<style>
    #navbar{
    background-color: yellowgreen;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

ul{
    color: white;
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
    font-weight: bold;
    color: green;
    text-decoration: none;
    display: flex;
    align-items: center;
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

<div id="navbar">
        <ul>
        <a href="/home"><li>Home</li></a>
        <a href="/login"><li>login</li></a>
        <a href="/create/bid"><li>Buy Item</li></a>
        <a href="/create/adds"><li>Sel Item</li></a>
        <a href="/about"><li>about us</li></a>
        </ul>
      </div>

    <div id="picture-selection">
        <img src="../assets/Beedie.png" alt="" style="width: 400px; height: 300px" class="floatRight">
    </div>  

    <div id="hero-section">
            <h1>Welcome to Beddie</h1>
        <div id="pre-selection">
            <h3>
                digital-based auction
            </h3>
        </div>
        <p>Not a member? <a href="/register">Create Account</a> </p>
    </div>

</body>
</html>
</body>
</html>