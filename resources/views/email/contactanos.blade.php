<!DOCTYPE html>

<style>

@media only screen and (max-width:600px) {
      .es-content table,
      .es-footer table, 
      .adapt-img { width:100%!important; height:auto!important }
      }

.margin{
    margin: 30%;
}
</style>

<head>
    <title>
        Madajero Correo
    </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<body bgcolor="black">

    <section style="margin-left: 20%; margin-right: 20%;">
        <div align-item="center">
            <div style="background-color: white; padding-left:60px; padding-right:60px; width: 600px; height: auto; align-items: center">

                <div style="padding-top: 40px;">
                    <img src="{{url('img/logos/correologo.png')}}" alt="madajero" width="300">
                </div>
            
                <div style="font-family:sans-serif;line-height:17px;color:#333333; text-align: justify; padding-top: 10px;">
                    <h3>Nombre:   {{$contacto['name']}}       </h3>
                    <h3>Numero telefonico: {{$contacto['number']}}    </h3>
                    <h3>Correo electronico:   {{$contacto['email']}}       </h3>
                    <h3>Mensaje:  {{$contacto['message']}}      </h3>

                </div>

    
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

    
                

            </div>
        </div>
    </section>

</body>
</html>