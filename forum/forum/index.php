<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="./images/favicon.png" type="image/png" sizes="16x16">
<title>forum</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
  <style>
    body{

      background-color:#f8e9e6;
    }
    .logo {
    width: 100;
    height: 30px;
    margin-left: 10px;
    margin-right: auto;
    margin-top: 10px;
    
}

.container { 
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: black;
    font-size: 20px;
    width: 100vw;
    height: 8vh;

}

.items {
    padding-right: 30px;
    padding-top: 5px;
}

.items a {
    color: azure;
    text-decoration: none;

}

.items a:hover {
    font-weight: 900;
    color: white;
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.7); 
}

footer{
  background-color: #111;
}
.footerContainer{
  width: 100%;
  padding: 70px 30px 20px ;
}
.socialIcons{
  display: flex;
  justify-content: center;
}
.socialIcons a{
  text-decoration: none;
  padding:  10px;
  background-color: white;
  margin: 10px;
  border-radius: 50%;
}
.socialIcons a i{
  font-size: 2em;
  color: black;
  opacity: 0,9;
}
/* Hover affect on social media icon */
.socialIcons a:hover{
  background-color: #111;
  transition: 0.5s;
}
.socialIcons a:hover i{
  color: white;
  transition: 0.5s;
}
.footerNav{
  margin: 30px 0;
}
.footerNav ul{
  display: flex;
  justify-content: center;
  list-style-type: none;
}
.footerNav ul li a{
  color:white;
  margin: 20px;
  text-decoration: none;
  font-size: 1.3em;
  opacity: 0.7;
  transition: 0.5s;

}
.footerNav ul li a:hover{
  opacity: 1;
}
.footerBottom{
  background-color: #000;
  padding: 20px;
  text-align: center;
}
.footerBottom p{
  color: white;
}
.designer{
  opacity: 0.7;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-weight: 400;
  margin: 0px 5px;
}
@media (max-width: 700px){
  .footerNav ul{
      flex-direction: column;
  } 
  .footerNav ul li{
      width:100%;
      text-align: center;
      margin: 10px;
  }
  .socialIcons a{
      padding: 8px;
      margin: 4px;
  }
}
</style>
</head>
<body>
<section class="Introduction">
    <ul class="container">
    <img src="logo.png" class="logo">
      <li class="items"><a href="../introPage.php"> Home</a></li>
      <li class="items"><a href="forum\forum"> Forum </a></li>
      <li class="items"><a href="../doctor2.html"> Doctors </a> </li>
      <li link="About-us" class="items"><a href="../introPage.phps"> About Us </a> </li>
    </ul>
  </section>
  <!-- <div class="container"> -->
<div class="main">
<div class="panel panel-default" style="margin-top:50px">
  <div class="panel-body">
    <h3>Community forum</h3>
    <hr>
    <form name="frm" method="post">
        <input type="hidden" id="commentid" name="Pcommentid" value="0">
	<div class="form-group">
	  <label for="usr">Write your name:</label>
	  <input type="text" class="form-control" name="name" required>
	</div>
    <div class="form-group">
      <label for="comment">Write your question:</label>
      <textarea class="form-control" rows="5" name="msg" required></textarea>
    </div>
	 <input type="button" id="butsave" name="save" class="btn btn-primary" value="Send">
  </form>
  </div>
</div>
  

<div class="panel panel-default">
  <div class="panel-body">
    <h4>Recent questions</h4>           
	<table class="table" id="MyTable" style="background-color: #edfafa; border:0px;border-radius:10px">
	  <tbody id="record">
		
	  </tbody>
	</table>
  </div>
</div>

</div>

<!-- Modal -->
<div id="ReplyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reply Question</h4>
      </div>
      <div class="modal-body">
        <form name="frm1" method="post">
            <input type="hidden" id="commentid" name="Rcommentid">
        	<div class="form-group">
        	  <label for="usr">Write your name:</label>
        	  <input type="text" class="form-control" name="Rname" required>
        	</div>
            <div class="form-group">
              <label for="comment">Write your reply:</label>
              <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
            </div>
        	 <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply">
      </form>
      </div>
    </div>

  </div>
</div>


</div>
</div>
<footer>
  <div class="footerContainer">
      <div class="socialIcons">
          <a href=""><i class="fa-brands fa-facebook"></i></a>
          <a href=""><i class="fa-brands fa-instagram"></i></a>
          <a href=""><i class="fa-brands fa-twitter"></i></a>
          <a href=""><i class="fa-brands fa-google-plus"></i></a>
          <a href=""><i class="fa-brands fa-youtube"></i></a>
      </div>
      <div class="footerNav">
          <ul><li><a href="">Home</a></li>
              <li><a href="">News</a></li>
              <li><a href="">About</a></li>
              <li><a href="">Contact Us</a></li>
              <li><a href="">Our Team</a></li>
          </ul>
      </div>
      
  </div>
</footer>
</body>
</html>