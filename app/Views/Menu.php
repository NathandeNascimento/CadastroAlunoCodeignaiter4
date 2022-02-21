<!DOCTYPE html>

<html lang="pt-br"  dir="ltr">

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


  <!-- Boxiocns CDN Link -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


</head>

<body>
  <div class="sidebar closee">
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
            <img src="<?php echo base_url('assets/image/nn1.png')?>" alt="NN">
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
  <section class="home-section">
    <div class="home-content">


    </div>



  </section>


  <!-- JavaScript (Opcional) -->
  <script src="<?php echo base_url("assets/js/scriptMenu.js") ?>"></script>
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src=" https://unpkg.com/aos@next/dist/aos.js "> </script>
</body>

</html>