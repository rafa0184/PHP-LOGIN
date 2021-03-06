<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
  
  <style>
    body{
      background-color:#11a6d4;
    }
    #login-box{
      background-color: #1992b7;
      width: 360px;
      height:260px;
      margin: 140px auto 0px;
      border-radius: 5px;
      
    }
    #login-box-interno{
      width:360px;
      height: 240px;
      background-color: #fdfdfd;
      position:absolute;
      margin:10px;
      border-radius: 5px;
      box-shadow: 0px 0px 5px black;
      overflow: hidden;
    }
    #login-box-label{
      background-color: blue;
      height: 45px;
      text-align: center;
      font:bold  14px/45px sans-serif;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
      color: white;
      border-bottom: 1px solid white;
      box-shadow: 1px 1px 3px black;
      text-shadow: 1px 1px 1px wihte;
    }
    .input-div{
      margin: 20px;
      padding: 5px;
      background-color: #f2f5f7;
      border-radius: 3px;
    }
    .input-div input{
      width: 310px;
      height: 35px;
      padding-left: 5px;
      font: normal 15px sans-serif;
      color: #aeaeae;
      border-radius: 3px;
      border: 1px solid #bfc4c6;
      outline: none;
    }
    .input-div:hover{
      background-color: #e0f1fc;
    }
    .input-div:hover input{
      background-color: #7dc6dd;
      color: white;
    }
    #input-senha{
      margin-top: -10px;
    }
    #botoes{
      width: 310px;
      margin-left: 25px;
    }
    #botao{
      background-color: #7dc6dd;
      float: right;
      padding: 5px 15px;
      font: bold 15px sans-serif;
      border-radius: 20px;
      text-shadow: 0px 1px 0px white;
      border: 1px solid #93b9c3;
      color: #808080;
      box-shadow: 0px 0px 10px #c9c9c9;
      cursor:pointer;
    }
  </style>
</head>
<body>
  <div id="login-box">
    <div id="login-box-interno">
        <div id="login-box-label">
            Login - Intranet Grupo Zelo
        </div> 
      
        <div class="input-div" id="input-usuario">
            <input type="text" placeholder="Informe seu usuario">
        </div>
      
        <div class="input-div" id="input-senha">
            <input type="text" placeholder="Digite sua senha">
        </div>
      
        <div id="botoes">
          <div id="botao">Entrar</div>  
        </div>
     </div>
  </div>
</body>
</html>