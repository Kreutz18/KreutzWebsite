<!DOCTYPE html>
<html>
    <head>
        <title>MyWebsite</title>
        <link rel = "stylesheet" href = "website.css"/>
        <script type = "text/javascript" src = "website.js"></script>
    </head>
    <body id = "home">
        <div id = "header">
            <h1 id = "nameTitle">Jesse Kreutzberger</h1>
            <h2 id = "proTitle">Software Engineer</h2>
            <?php 
              session_start();
              $user = $_SESSION['username'];?>
              <p id = "user"><?php echo "Logged as: "?><b>
              <?php echo  "$user";?></b></p>
            <br/>
            <a href = "adminHome.php">Home</a>
            <a href = "#" onclick = "myAdminFunction('1')">Contact</a>
            <a href = "#" onclick = "myAdminFunction('2')">Jobs</a>
            <a href = "https://github.com/Kreutz18" target = "_blank">GitHub</a>
            <a href = "home.html">Sign Out</a>
            <hr />
        </div>
        <div id = "adminContactFormDiv" style = "display: none;">
            <div class = "pExplanation">
                <p><b>If you wish to contact me please provide the following information and a message describing your reason for contact.</b></p>
            </div>
            <form action = "contactPage.php" id = "contactForm" method = "post">
                <div id = "formDiv">
                    <input class = "contactBox" name = "fName" type = "text" placeholder = "First Name"/></br>
                    <input class = "contactBox" name = "lName" type = "text" placeholder = "Last Name"/>
                    <br/>
                    <input class = "contactBox" name = "email" type = "text" placeholder = "E-mail"/>
                    <br/>
                    <textarea  rows = "4" cols = "35" class = "messageBox" name = "message" form = "contactForm" placeholder = "Leave a Message"></textarea>
                    <input id = "submitButton" type = "submit" />
                </div>
        </div>
        <div id = "jobsDiv" style = "display: none;">
            <div class = "pExplanation">
                <p><b>This page allows me to enter information about jobs that I've applied to into the database. This is just to help keep track of where I applied.</b></p>
            </div>
            <form action = "jobsPage.php" id = "contactForm" method = "post">
                <div id = "formDiv">
                    <input class = "contactBox" name = "companyName" type = "text" placeholder = "Company Name"/></br>
                    <input class = "contactBox" name = "positionName" type = "text" placeholder = "Position"/>
                    <br/>
                    <input class = "contactBox" name = "city" type = "text" placeholder = "City"/>
                    <br/>
                    <input class = "contactBox" name = "state" type = "text" placeholder = "State"/>
                    <br/>
                    <textarea  rows = "4" cols = "35" class = "messageBox" name = "description" form = "contactForm" placeholder = "Description"></textarea>
                    <input id = "submitButton" type = "submit" />
                </div>
            </form>
        </div>
        
    </body>
</html>