<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Componentes/Css/FormSubmeter.css" type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../componentes/css/Upload2.css">
    </head>
    <body>
      <div class="row">
    <div class="col-md-12">
      <form action="" method="POST">
        <h1> Submissão de Artigo </h1>
        
        <fieldset>
          
          <legend><span class="number">1</span> Informaçoes do Artigo</legend>
        
          <label for="nomeartigo">Nome do Artigo:</label>
          <input type="text" id="nomeartigo" name="user_name">
        
          <label for="nomeautor">Nome dos Autores:</label>
          <input type="text" id="nomeautor" name="user_email">

          <label for="nomeorientador">Nome dos Orientadores:</label>
          <input type="text" id="nomeorientador" name="user_email">

          <label for="nomecolaborador">Nome dos Colaboradores:</label>
          <input type="text" id="nomecolaborador" name="user_email">

          <label for="descricaoartigo">Descrição do Artigo:</label>
          <input type="text" id="descricaoartigo" name="user_email">
      

        <fieldset>  
        
          <legend><span class="number">2</span> Área e Subárea</legend>
          
          <label for="job">Selecione a Área e Subarea desejadas :</label>
          <select id="job" name="user_job">
            <optgroup label="CIÊNCIAS SOCIAIS APLICADAS">
              <option value="administracao">Administração</option>
              <option value="ciencias_economicas">Ciências Econômicas</option>
              <option value="ciencias_contabeis">Ciências Contábeis</option>
              <option value="servico_social">Serviço Social</option>
              <option value="arquitetura_e_urbanismo">Arquitetura e Urbanismo</option>
              <option value="hotelaria">Hotelaria</option>
            </optgroup>
            <optgroup label="CIÊNCIAS BIOLÓGICAS E SAÚDE">
              <option value="fisioterapia">Fisioterapia</option>
              <option value="educacao_fisica">Educação Física</option>
              <option value="nutricao">Nutrição</option>
              <option value="medicina">Medicina</option>
              <option value="enfermagem">Enfermagem</option>
              <option value="farmacia">Farmácia</option>
              <option value="biomedicina">Biomedicina</option>
              <option value="medicina_veterinaria">Medicina Veterinária</option>
              <option value="ciencias_biologicas">Ciências Biológicas</option>
            </optgroup>
            <optgroup label="CIÊNCIAS HUMANAS E SOCIAIS">
              <option value="ciencias_sociais">Ciências Sociais</option>
              <option value="direito">Direito</option>
              <option value="letras">Letras</option>
              <option value="psicologiafreelancer">Psicologia</option>
            </optgroup>
            <optgroup label="CIÊNCIAS EXATAS E DA TERRA">
              <option value="computacao_e_informatica">Computação e Informática</option>
              <option value="engenharias">Engenharias</option>
              <option value="ciencias_agrarias">Ciências Agrárias</option>
            </optgroup>
          </select>
         </fieldset>
          <fieldset>  
        
            <legend><span class="number">3</span> Encaminhar artigo</legend>


          </fieldset>
           

             <!--<button type="submit">Enviar Artigo</button>-->
           
       </form>
        <div class="postagem">
             <div class="wrapper">
                  <form id="postagem" action="#">
                     <input class="file-input" type="file" name="file" hidden>
                     <i class="fas fa-cloud-upload-alt"></i>
                     <p>Mandar Artigo</p>
                  </form>
                     <section class="progress-area"></section>
                     <section class="uploaded-area"></section>
              </div>
          </div>
        </div>  
      </div>
           <script src="../componentes/js/Upload.js"></script>
    </body>
</html>