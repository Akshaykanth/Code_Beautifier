<?php session_start();?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/dropzone.css" />
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


    <title>Code Beautifier</title>

    <script src="js/jquery.min.js" defer></script>
    <script type="text/javascript" src="js/dropzone.js"></script>
    <script src="js/jquery.color.min.js" defer></script>
    <script src="js/jquery.animate-shadow.min.js" defer></script>
    <script src="js/bootstrap.js" defer></script>
    <script src="js/javascript.js" defer></script>
    <script src="js/ie10-viewport-bug-workaround.js" defer></script>

</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" onclick="slidesidebar()">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand navlink" href="#home"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li id="sidebartitle">
                        <button type="button" class="navbar-toggle collapsed" id="closesidebar" onclick="hidesidebar()">
                          <span>&#10060;</span>
                      </button>
                    </li>
                    <li class="activetab"><a href="#home" class="navlink tablink">Home</a></li>
                    <li><a href="#about" class="navlink tablink">About</a></li>
                    <li><a href="#upload" class="navlink tablink">Upload</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container pagecontent">
        <div id="imagebg" class="bgbanner"></div>
        <div id="back" class="bgbanner"></div>

        <div id="home">
            <div id="backdrop" class="center-block">
                <div class="page-header container-fluid">
                    <h1>Code Beautifier</h1></div>
            </div>
        </div>
        <div id="wfcontent">
            <div id="about" class="section">
                <h3>Often when typing a code your indentation, spacing, and other formatting can become a bit disorganized. It is also common for multiple developers to work on a single project who have different formatting techniques.  This tool is helpful for making the formatting of a file consistent. You can use this tool to make that code look beautiful and readable so it is easier to edit.</h3>
                <br />
                <br />

                <p>Upload your messy code below to have it cleaned up and made beautiful. </p>
                <br />
                <div class="row">
                    <div class="col-md-4">
                        <h3>Step 1</h3>
                        <img src="media/images/code.png" /><br/> Type your code using an editor without worrying about any formatting.
                    </div>
                    <div class="col-md-4">
                        <h3>Step 2</h3>
                        <img src="media/images/upload.png" /><br/> Upload your code below. You can drag and drop easily.
                    </div>
                    <div class="col-md-4">
                        <h3>Step 3</h3>
                        <img src="media/images/download.png" /><br/> Download the formatted code.Done!!
                    </div>
                </div>
                <br />
                <br />
            </div>
            <hr />



            <div id="upload" class="section">

                <form action="upload.php" class="dropzone">
                </form>
                <br/>
                <button type="button" class="btn btn-primary btn-md" onclick="dissolve(this) "  name="button">Done</button>
            </div>

            <div id="download" class="section">
                <a  id= "dwnload" class="btn btn-primary btn-md" href="op.txt" download="output">Download</a>
            </div>

        </div>
    </div>

</body>

</html>
