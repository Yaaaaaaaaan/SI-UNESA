<meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Hotel Fazenda</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>

        	.bacana{
        		background-color: rgba(0,0,0,0.5);
        		border-radius: 10px
        	};

       
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Hotel Fazenda</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Preços</a>
        </li>
      </ul>
      <form name="login" method="POST" action="" class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="email" placeholder="email" aria-label="email" name="email">
         <input class="form-control mr-sm-2" type="password" placeholder="senha" aria-label="senha" name="senha">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Entrar</button>
      </form>
    </div>
  </nav>
</header>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class=""></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item">
        <img 
        src="https://i.pinimg.com/originals/64/ca/4f/64ca4f2aa5d9353ef1b48245c2e38549.jpg" width="100%" height="100%"><rect width="100%" height="100%" fill="#777"></rect></svg>
        <div class="container">
          <div class="bacana carousel-caption text-left">
            <h1>Hotel Fazenda</h1>
            <p>Requinte e aconchego sem perder a rusticidade do campo.</p>
            <p><a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Faça sua reserva!</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active carousel-item-left">
        <img width="100%" height="100%" src="https://ruralpecuaria.com.br/painel/img/noticias/10503/noticias_1528313833.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"></rect></svg>
        <div class="container">
          <div class="carousel-caption bacana">
            <h1>Um campo com uma vista surpreendente</h1>
            <p>Além da vista, dispõe de um belo lago para pesca</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Veja mais...</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item carousel-item-next carousel-item-left">
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://sulhotels.com.br/wp-content/uploads/2017/07/Fazenda-do-Engenho-Ibiti.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"></rect></svg>
        <div class="container">
          <div class=" bacana carousel-caption text-right">
            <h1>Café da Manhã incluso</h1>
            <p>Além do requinte e aconchego, todas as hospedagens dispõem de café da manhã incluso. </p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Veja nosso banquete!</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://q-xx.bstatic.com/xdata/images/hotel/max1000/245049606.jpg?k=86de22b837364a421c7d2daf3551f1987422a808099b941b72535704d24cf78e" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        <h2>Premium</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://media-cdn.tripadvisor.com/media/photo-s/04/9d/49/2f/hotel-fazenda-folhas.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        <h2>Master</h2>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://cf.bstatic.com/images/hotel/max1024x768/242/242125909.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        <h2>Diamond</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">O diferencial da simplicidade. <span class="text-muted">Modelo mais simples, com uma vista de tirar o fôlego.</span></h2>
        <p class="lead">Mussum Ipsum, cacilds vidis litro abertis. Casamentiss faiz malandris se pirulitá. Paisis, filhis, espiritis santis. Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. Si num tem leite então bota uma pinga aí cumpadi!</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="https://q-xx.bstatic.com/xdata/images/hotel/max1000/245049606.jpg?k=86de22b837364a421c7d2daf3551f1987422a808099b941b72535704d24cf78e" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Carambolas, esse é perfeito para você! <span class="text-muted">Realmente é a sua cara!</span></h2>
        <p class="lead">Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. Viva Forevis aptent taciti sociosqu ad litora torquent. Não sou faixa preta cumpadi, sou preto inteiris, inteiris.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="https://media-cdn.tripadvisor.com/media/photo-s/04/9d/49/2f/hotel-fazenda-folhas.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">conforto conceitual <span class="text-muted">Veja bem, esse quarto é para quem gosta de conforto mas sem perder o ar de fazenda.</span></h2>
        <p class="lead">Quem num gosta di mim que vai caçá sua turmis! Cevadis im ampola pa arma uma pindureta. Mé faiz elementum girarzis, nisi eros vermeio. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.

Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! Delegadis gente finis, bibendum egestas augue arcu ut est.</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="https://cf.bstatic.com/images/hotel/max1024x768/242/242125909.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reservas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Endereço de e-mail</label>
		    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@mail.com" name="email">
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Nome</label>
		    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="José Augusto Ferreira" name="nome">
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlSelect1">Sexo</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="sexo">
		      <option value="m">Masculino</option>
		      <option value="f">Feminino</option>
		    </select>
		  </div>
		  <div class="form-group">
		     <label for="exampleFormControlInput1">Número de noites</label>
		    <input type="number" size="10" min="2" value="2" class="form-control" id="exampleFormControlnnoites" placeholder="" name="nnoites">
		  </div>
		   <div class="form-group">
		     <label for="exampleFormControlInput1">Número de hóspedes</label>
		    <input type="number" size="10" min="1" value="1" class="form-control" id="exampleFormControlnhosp" placeholder="" name="nhosp">
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Mensagem</label>
		    <textarea class="form-control" id="exampleFormControlTextarea1" name="mensagem" rows="3"></textarea>
		  </div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Concluir reserva</button>
      </div>
    </div>
  </div>
</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Voltar ao topo</a></p>
    <p>© 2020 Yan Fonseca, Inc. · Feito com temas predefinidos de <a href="http://getbootstrap.com">Bootstrap</a></p>
  </footer>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body></html>

<!-- Café da manhã
https://img.lacadordeofertas.com.br/site/MTA1MjZfL3RtcC9waHB0Zmk5RE9fMTUzMDAzNDU0Nw==.jpg?ims=618x398
--> 