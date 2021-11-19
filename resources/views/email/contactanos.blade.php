<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Correo Madajero</title>
    <style>

      body {
        font-family: "Raleway", sans-serif;
        background-color: #d8dada;
        font-size: 19px;
        max-width: 800px;
        margin: 0 auto;
        padding: 3%;
      }

      #wrapper {
        background-color: #f0f6fb;
      }


    </style>
  </head>
  <body>
    <div id="wrapper">
      
        <header>

        <div style="padding-top: 40px; padding-left:30px; padding-right:30px;">
            <a href='#' target='_blank'><img src='https://i.postimg.cc/Kz8nm81t/Grupo-1.png' alt='Grupo-1' width="250"/></a>
        </div>

        
      </header>
      
        <div style="font-family:sans-serif;line-height:17px;color:#333333; text-align: justify; padding-top: 10px; padding-left:30px; padding-right:30px;">
                    <h3>Nombre:   {{$contacto['name']}}       </h3>
                    <h3>Numero telefonico: {{$contacto['number']}}    </h3>
                    <h3>Correo electronico:   {{$contacto['email']}}       </h3>
                    <h3>Mensaje:  {{$contacto['message']}}      </h3>

        </div>


        <footer>
            <div>
                <p style="padding-top: 30px; font-family:sans-serif;line-height:17px;color:#333333;font-size:11px; text-align: center;">
                    MADAJERO GRUPO CONSTRUCTOR S.A. DE C.V., CANCUN, QUINTANA ROO
                    <br>XXX-XXX-XXXX</p>
            </div>

            <div style="padding-bottom:10px; text-align: center;">
                <p style="font-family:sans-serif;line-height:17px;color:#333333;font-size:11px">
                © MADAJERO GRUPO CONSTRUCTOR 2021
                </p>
            </div>
          
        </footer>
      </div>
  </body>
</html>