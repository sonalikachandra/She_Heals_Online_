
body{    
  background: url("images/background.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  width: 100vw;
  height: 100vh;
}

.navbar-brand{
    font-size: 35px;
}


#form{
    background-color: rgb(255, 255, 255);
    width:28%;
    border-radius: 6px;
    margin:120px auto;
    padding:40px;
    box-shadow: 10px 10px 5px rgb(80, 11, 77);
    margin-top: 25px;
}
h1{
    text-align: center;
}
input{
    width: 90%;
    border-radius: 4px;
    border: 3px solid #f6efef;
    padding: 5px;
}

#btn{
    width: 100%;
    color:rgb(255, 255, 255);
    background-color: rgb(108, 22, 190);
    padding:10px;
    font-weight: 700;
    font-size: larger;
    border-radius: 10px;
}
form label{
    color:rgb(100, 100, 100);
    font-size: 18px;
    font-weight:500;
}
@media screen and (max-width: 1350px) {
    #form {
      width: 40%;
      margin-left:none;
      padding:40px;
    }
  }
@media screen and (max-width: 1100px) {
    #form {
      width: 50%;
      margin-left:none;
      padding:40px;
    }
  }
@media screen and (max-width: 700px) {
    #form {
      width: 80%;
      margin-left:none;
      padding:40px;
    }
  }
  