<!DOCTYPE html>

<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!--titulo da pagina-->
  <title> Menu </title>

  <!--estilo customizado-->
  <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css") ?>">
  <!--chama o arquivo-->


  <!-- Boxiocns CDN Link -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


  <style>
    body {
      overflow: hidden;
    }

    input[type='file'] {
      display: none;
    }

    .max-width {
      max-width: 500px;
      width: 100%;
    }

    .imagContainer {
      width: 100%;
      max-width: 300px;
      margin-top: 10%;
      background-color: #eee;
      border-radius: 50%;
    }

    #imgPhoto {
      margin-top: 10%;
      width: 300px;
      height: 300px;
      padding: 10px;
      background-color: #eee;
      border: 5px solid #ccc;
      border-radius: 50%;
      transition: background .3s;
    }

    #imgPhoto:hover {
      cursor: pointer;
      background-color: rgb(180, 180, 180);
      border: 5px solid #111;
    }
  </style>
</head>



<body>
  <div class="sidebar ">
    <div class="logo-details">
      <i class='bx bxl-netlify'></i>
      <span class="logo_name">Menu</span>
    </div>
    <ul class="nav-links">

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-user'></i>
            <span class="link_name">Aluno</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Aluno</a></li>
          <li>
            <p><a href="<?php echo base_url('categorias/listar') ?>">Consultar</a></p>
            <!--chama o controler com a função-->
          </li>
          <li>
            <p><a href="<?php echo base_url('categorias/inserir') ?>">Cadastrar</a></p>
            <!--chama o controler com a função-->
          </li>

        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog'></i>
          <span class="link_name">Configurações</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Configurações</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-help-circle'></i>
          <span class="link_name">Suporte</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Suporte</a></li>
        </ul>
      </li>


      <li>
        <div class="profile-details">
          <div class="profile-content">
            <img src="<?php echo base_url("assets/image/nn1.png") ?>" alt="NN">
            <!--chama o arquivo-->
          </div>
          <div class="name-job">
            <div class="profile_name">Analista/Dev.</div>
            <div class="job">Nathan Nascimento</div>
          </div>
          <div>
            &nbsp; &nbsp; &nbsp;
          </div>
        </div>
      </li>
    </ul>
  </div>
  <section class="home-section ">

    <div class="home-content">
    
      <h2 style="display:inline;margin-left:36.5% ;  "><?php echo $titulo ?></h2>
    </div>


    <div class="form-group row" style="margin-left:36.5%">


      <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo (isset($categoria) ? $categoria->id : '') ?>" />
        <!--se categoria foi setada ele manda o nam para o controler se não deixa em branco-->


        <div class="max-width">
          <div class="imagContainer">
            <img class="d-flex" src="<?php echo base_url("assets/image/pessoa.jpg") ?>" width="100px" height="100px" alt="foto" id="imgPhoto">
            <!--chama o arquivo-->
          </div>
        </div>

        <input type="file"  name="foto" id="foto" accept="image*/">



        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
          <div class="col-md-12">
            <input type="text" required class="form-control" name="nome" id="inputEmail3" placeholder="Nome do Aluno" value="<?php echo (isset($categoria) ? $categoria->nome : '') ?>">
            <!--se categoria foi setada ele manda o name para o controler se não deixa em branco-->
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
          <div class="col-md-12">
            <input type="text" required class="form-control" name="endereco" id="inputPassword3" placeholder="Endereço" value="<?php echo (isset($categoria) ? $categoria->endereco : '') ?>">
            <!--se categoria foi setada ele manda o name para o controler se não deixa em branco-->
          </div>
        </div>


        <strong><?php echo $msg ?></strong>

        <button type="submit" class="btn btn-outline-primary " style="margin-left:30%" value="<?php echo $acao ?>">Cadastrar</button>
        <!--submet a variavel acao para o controller-->
      </form>

    </div>



    <section>
      <div style="text-align: center; margin: 0px 10px; border-radius: 50px; font-size: 1em;color:gray ;"> Todos os direitos reservados &copy; NN - Nathan Nascimento - 2022</div>
    </section>



  </section>

  <!-- JavaScript (Opcional) -->
  <script src="<?php echo base_url("assets/js/jsFoto.js") ?>"></script>
  <script src="<?php echo base_url("assets/js/scriptMenu.js") ?>"></script>
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src=" https://unpkg.com/aos@next/dist/aos.js "> </script>
</body>

</html>