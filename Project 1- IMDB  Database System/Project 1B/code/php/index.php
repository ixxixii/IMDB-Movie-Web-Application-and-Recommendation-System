<html>
<head>
	<title>CS143:Project-1B Movie Database</title>
	<style>  
        html,body {
        	margin:0;
        	padding:0;  
        	background-color:DEB887;
        }  
        #mainContainer {  
            height:100%;  
            width:100%;  
        }  
        #header {  
            height:15%;  
            width:100%;  
            background-color:DEB887;  
        }  
        #center {  
            height:85%;  
            width:100%;  
            background-color:white;  
        }
        #nav {
        	margin-top: 5%;
        	margin-left: 5%;
        	float: left;
        	width: 20%
        }
        #window {
        	margin-left: 25%;
        	width: 75%
        }
    </style>  
</head>

<body>
	<div id="mainContainer">
		<div id="header">
			<h2><br/>CS143 Project-1B MOVIE DATABASE<br/><h4>By Zihao Zhang(004593253)</h4></h2>
		</div>
	    <div id="center">
	        <div id="nav"
	            <ul>
	                <li><a href="search.php" target="iframe_a">Search</a ></li>
	                <li><a href="showMovie.php?id=234" target="iframe_a">MovieInfo</a ></li>
	                <li><a href="showActor.php?id=3521" target="iframe_a">ActorInfo</a ></li>
	                <li><a href="addActorDirector.php" target="iframe_a">Add Person</a ></li>
	                <li><a href="addMovieInfo.php" target="iframe_a">Add Movie</a ></li>
	                <li><a href="addMovieActor.php" target="iframe_a">Add Movie/Actor</a ></li>
	                <li><a href="addMovieDirector.php" target="iframe_a">Add Movie/Director</a ></li>
	            </ul>
	        </div>

	        <div id="window">
	        	<iframe src="Search.php" name="iframe_a" width="100%" height="100%" frameborder="0"></iframe>
	    	</div>

	    </div>
	</div>
</body>

</html>

