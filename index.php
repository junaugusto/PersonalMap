<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- This stylesheet contains specific styles for displaying the map
         on this page. Replace it with your own styles as described in the
         documentation:
         https://developers.google.com/maps/documentation/javascript/tutorial -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Personal Map</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">    
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <!--<div id="map" style="height: 500px; width: 700px"></div>-->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Personal Map</h1>
            </div>
            <div class="col-md-6">
                
            </div>
        </div>
        <div class="row">
            <div id="map" class="col-md-6">
                
            </div>
            <div class="col-md-6 ">                
                <div class="col-md-6 col-md-offset-2">
                <!-- 
                1 - Criar um crud em php para localidades com nome, estado, cidade, latitude e longitude e imagem para o pin no mapa.
                2 - Depois criar um mapa do google maps em página em separado e retornar com os pins cadastrados no crud.
                3 - O marcador exibido deve ser o escolhido ou um definido como padrão, caso não tenha sido escolhido um. 
                4 - Ao clicar no pin, deve mostrar os dados do local colocado no crud dentro do balão no mapa.

                O prazo para devolução é dia 12/01, até o meio-dia
                 -->
                    <form>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nome:</label>
                        <input type="text" class="form-control" id="nome" placeholder="Escreva seu nome...">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Estado:</label>
                        <input type="text" class="form-control" id="estado" placeholder="Escreva seu estado...">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Cidade:</label>
                        <input type="text" class="form-control" id="cidade" placeholder="Escreva sua cidade...">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Latitude:</label>
                        <input type="text" class="form-control" id="latitude" placeholder="Escreva sua latitude...">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Longitude:</label>
                        <input type="text" class="form-control" id="longitude" placeholder="Escreva sua longitude...">
                      </div>                      
                      <div class="form-group">
                        <label for="exampleInputFile">Envie uma Imagem</label>
                        <input type="file" id="InputFile">
                      </div>                      
                      <button type="submit" class="btn btn-default">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script <script src="js/mapa.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyCuzuj1UynAM-jb8WV27BGseFblFCjXKpA&callback=initMap"async defer></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
   