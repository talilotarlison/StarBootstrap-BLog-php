<?php 
//menu de navegação
$menu = [
    "Inicio",
    "Sobre", 
    "Contato",
    "Blog"    
]

?>

<html>
<head>
    <meta charset="utf-8">
    <title>myBlog - Star Bootstrap</title>
    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
		
        body{
			background-color: white;
			color: black;
            font-family: 'Roboto', sans-serif;
		}
        
        h1{
        color:white;
        font-size:20px;
        }
      
        span{
        color:gray;
        }
      
        header{
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: black;
        padding: 0 150px;
        height: 60px

        }
        nav{
        display:flex;
        gap: 0 10px;
        
        }
        nav > li >a {
        text-decoration: none;
        color: gray;
        font-size:18px;
      
        }
        [cor="white"]{
        color: white;
        }
       
        nav > li a:hover{
         color: white;
        
        }
        .capa{
        width: 100%;
        height:300px;
        background-color: #f0f8ff;
        display:flex;
        align-items:center;
        flex-direction: column;
        justify-content: center;
        
        }
       
        h2{
        margin:0;
        font-size:40px;
        }
       
        #official-info{
        padding: 20px;
        text-align:center;
        text-align: justify;
        }
       
        aside {
        
          padding: 10px 20px;

        }
       
        aside > .titulo-num-post , p{
         margin: 0;
         padding: 5px 10px;
         text-align:left;
        text-align: justify;
        
         
        }
           #official-info > div >p, #official-info > p {
             padding: 5px 0px;
           }
       
         aside > .titulo-num-post{
          color:black;
          font-weight:normal;
         }
         aside > h1.titulo-post{
         font-size:25px;
         text-align:left;
         color: black;
         padding: 0 10px;
         margin: 0;
       
        }
      
        footer{ 
          background-color:black;
           height: 60px; 
        }
     
        footer > .titulo-footer{
        color:white;
        padding:10px;
         text-align:center;
        }
      
        main{
        display:flex;
        margin: 0 5px;
          border-top: solid 1px #ececec;
        }
     
        .publicacao{
        width: 70vw;
        }
       
        .buscar{
        height: 100vh;
        }
        .buscar-sessao{
        width: 250px;
        border: solid 1px #ececec;
         padding: 15px 10px;
         margin:20px;
         display: flex;
         flex-direction:column;
         justify-content: space-between;
         gap:10px;
         border-radius: 10px;
        }
        .buscar-sessao_texto{
         width: 250px;
         border: solid 1px #ececec;
         padding: 5px 10px;
         margin:20px;
         display: flex;
         flex-direction:column;
         justify-content:center;
         border-radius: 10px;
        
        }
          .buscar-sessao_texto :is(p , h5) {
          padding: 10px !important; 
          margin:0 !important;
    
          }

         .btn {
			color: #ffffff;
			background-color: #2d63c8;
			font-size: 14px;
			border: 1px solid #2d63c8;
			padding: 5px 10px;
			cursor: pointer;
		}
		.btn:hover {
			color: #2d63c8;
			background-color: #ffffff;
		}


    </style>
</head>
<!-- corpo do projeto-->
<body style="padding:0; margin:0;">
<header>
    <h1>
        <?= 
        "<span>Star </span>Bootstrap" 
        ?>
    </h1>
    <!-- navegacao-->
    <nav>
        <li><a href="#"><?php echo $menu[0] ?></a></li>
        <li><a href="#"><?php echo $menu[1] ?></a></li>
        <li><a href="#"><?php echo $menu[2] ?></a></li>
        <li><a cor="white" href="#"><?= $menu[3] ?></a></li>
    </nav>
</header>
<!-- banner do projeto-->
<section class="capa">
    <h2>Welcome to Blog Home!</h2>
    <p>A Bootstrap 5 starter layout for your next blog homepage<p>
</section>

<!-- menu do projeto-->
<main>

<section class="publicacao">
<!-- numero de publicacao do projeto-->
<aside>
    <h1 class="titulo-post">
        <?= 
        "Publicações mais recentes!" ;
        ?>
    </h1>
    <p class="titulo-num-post">
    <?php
        //numero total de post do site

        $numPost = 20;

        //funçao
        function dividir($post_1, $week_2){

        $operacao = $post_1 / $week_2;

        return $operacao;
        }

        $resultado =  dividir($numPost,4);

        //Chamada da função
        echo "O numero de publicação por semana é " . $resultado; "."

        ?>
    </p>
</aside>
<!-- postagens do projeto-->
    <?php 

    //laço de repetição for
    for ($i=0; $i < $numPost; $i++) {
        
        //jogar repetição na tela
    
        echo  "
        <div id='official-info'>".
        "<h4>" . date('l jS \of F Y h:i:s A') . " </h4>".
        "<img id='cute-cat' src='https://www.kasandbox.org/programming-images/animals/cat.png'> 
        <div>
        <h3>Official Info on Cats</h3>
        <p>
        The cat (Felis catus), also known as the domestic cat or housecat to distinguish it from other felines and felids, is a small domesticated carnivorous mammal that is valued by humans for its companionship and ability to hunt vermin and household pests. Cats have been associated with humans for at least 9,500 years, and are currently the most popular pet in the world. Owing to their close association with humans, cats are now found almost everywhere on Earth.
        </p>
        </div>
        <p>
        Cats are similar in anatomy to the other felids, with strong, flexible bodies, quick reflexes, sharp retractable claws, and teeth adapted to killing small prey. As nocturnal predators, cats use their acute hearing and ability to see in near darkness to locate prey. Not only can cats hear sounds too faint for human ears, they can also hear sounds higher in frequency than humans can perceive. This is because cats' usual prey (particularly rodents such as mice) make high frequency noises, so cats' hearing has evolved to pinpoint these faint high-pitched sounds. Cats rely more on smell than taste, and have a vastly better sense of smell than humans.
        </p>
        <p>
        Despite being solitary hunters, cats are a social species and use a variety of vocalizations, pheromones and types of body language for communication. These include meowing, purring, trilling, hissing, growling, and grunting.
        </p>
        <p>
        Cats have a rapid breeding rate. Under controlled breeding, they can be bred and shown as registered pedigree pets, a hobby known as cat fancy. Failure to control the breeding of pet cats by spaying and neutering and the abandonment of former household pets has resulted in problems caused by large numbers of feral cats worldwide, with a population of up to 60 million of these animals in the United States alone.
        </p>
        </div>
        ";
    }
    ?>
</section>
<section class="buscar">

    <div class="buscar-sessao">
    <label for="pesquisa">Pesquisar:</label>
       <div>
            <input id="pesquisa"> 
            <button class="btn" type="button">Buscar</button>
        </div>
    </div>

     <div class="buscar-sessao_texto">
        <h5>Conteudo 01:</h5>
            <p>
            Cats have a rapid breeding rate. Under controlled breeding, they can be bred and shown as registered pedigree pets, a hobby known as cat fancy. 
            </p>
    </div>
      <div class="buscar-sessao_texto">
        <h5>Conteudo 02:</h5>
            <p>
            Cats have a rapid breeding rate. Under controlled breeding, they can be bred and shown as registered pedigree pets, a hobby known as cat fancy. 
            </p>
    </div>
      <div class="buscar-sessao_texto">
        <h5>Conteudo 03:</h5>
            <p>
            Cats have a rapid breeding rate. Under controlled breeding, they can be bred and shown as registered pedigree pets, a hobby known as cat fancy. 
            </p>
    </div>
    <div class="buscar-sessao_texto">
        <h5>Conteudo 04:</h5>
            <p>
            Cats have a rapid breeding rate. Under controlled breeding, they can be bred and shown as registered pedigree pets, a hobby known as cat fancy. 
            </p>
    </div>
    <div class="buscar-sessao_texto">
        <h5>Conteudo 05:</h5>
            <p>
            Cats have a rapid breeding rate. Under controlled breeding, they can be bred and shown as registered pedigree pets, a hobby known as cat fancy. 
            </p>
    </div>
</section>
</main>

<footer>
<p class='titulo-footer'> Todos direitos reservado a myBlog</p>
</footer>
</body>
</html>
