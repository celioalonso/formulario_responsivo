<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=devise-width;initial-scale=1.0;maximum-scale=1.0">
        <title>Responsivo</title>
        <style type="text/css"> 
        *{box-sizing: border-box;margin: 0;padding: 0;}
        /*Classes auxiliares*/
        .container{
            max-width: 960px;
            margin: 0 auto;
            padding: 0 2%;
        }
         .clear{
              clear: both;
         }
         .w50{
             float: left;
             width: 50%;
             padding: 0 10px;
         }
         .w100{
             float: left;
             width: 100%;
             padding: 0 10px;
         }
         /*Estilo próprio*/
         body{
             background: rgb(225,225,225);
         }
         h2{
             text-align: center;
             color: #4286f4;
             padding:10px 0;
             font-size: 24px;
             border-bottom: 2px solid #4286f4;
             text-transform: uppercase;
         }
         .form-group label{
             display: block;
             margin-bottom: 8px 0;
             color: #646464;
         }

         .form-group input[type=text]{
             width: 100%;
             padding-left: 8px;
             height: 40px;
             margin-top: 6px ;
             border: 1px solid #ccc;
         }

         .form-group input[type=submit]{
             width: 140px;
             height: 40px;
             background: #4286f4;
             color: white;
             border: 0;
             margin-top: 10px;
             cursor: pointer;
         }

         .form-group textarea{
             width: 100%;
             height: 120px;
             border: 1px solid #ccc;
             padding:10px;
         }

         @media screen and (max-width: 500px){
             .w50{width: 100%;}
         }

        </style>
    </head>
    <body>
        <div class="container">
            <h2>Entre em contato!</h2>
            <form>
                <div class="w50">
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" name="nome" />
                </div><!--form-group-->
              </div><!--w50-->
              <div class="w50">
                <div class="form-group">
                    <label>Sobrenome:</label>
                    <input type="text" name="nome" />
                    </div><!--form-group-->
              </div><!--w50-->
              <div class="w50">
                <div class="form-group">
                    <label>Telefone:</label>
                    <input type="text" name="nome" />
                </div><!--form-group-->
              </div><!--w50-->
              <div class="w50">
                <div class="form-group">
                    <label>Celular:</label>
                    <input type="text" name="nome" />
                    </div><!--form-group-->
              </div><!--w50-->
              <div class="w100">
                <div class="form-group">
                    <label>Mensagem:</label>
                    <textarea></textarea>
                  </div><!--form-group-->
                </div><!--w100-->
                <div class="w100">
                <div class="form-group">
                       <input type="submit" name="acao" value="Enviar!">
                  </div><!--form-group-->
                </div><!--w100-->
                <div class="clear"></div>
            </form>
        </div><!--container-->
    </body>
</html>