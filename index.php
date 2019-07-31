<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nivel de Tanque</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <p>Nivel de Tanque</p>
    <div class="tanque">
        <div class="agua"></div>
    </div>

    <p class="valor_nivel"><span>0</span> %</p>

    <script src="jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            setInterval(function(){
                Nivel();
            }, 2000);
        })

        function Nivel(){
            $.ajax({
                url: "php/busca_nivel.php",		
                dataType: 'json',
                type: 'POST',                                
                success: function(datos) {
                    console.log(datos);
                    if (datos['estado']){
                        var tamano = (datos['nivel'] * 300) / 100;
                        $(".valor_nivel span").html(tamano.toFixed(2));
                        $(".tanque .agua").css("height", tamano+"px");
                    }
                },
                error:function(e){
                    console.log(e.responseText);
                }
            });
        }
    </script>
</body>
</html>