<?php
/*atividadeCpet*/
    include 'php/calendario.php';
    include 'php/conexao.php';
        
        $info = array (
            'tabela' => 'eventos',
            'data' => 'data',
            'titulo' => 'titulo',
            'link' => 'link'
        );
      
           

?>
       
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Festas de brinquedos" >
    <meta name="author" content="Matheus Miguel">
    <title>Festa de brinquedos.</title>
    <link rel="stylesheet" type="text/css" href="css/config.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <figure>
                <div id="logo">
                    <img id="img" src="img/logo.jpg">
                </div>
        </figure>
        
    </header>

    <aside>
        <div id="menuesquerda">
            <p>Menu:</p>
            <ul>
                <li><a href="">Nossos brinquedos</a></li>
                <li><a href="">Entre em Contato</a></li>
            </ul>
        </div>
    </aside>
            
        
    
    <section>
        <div id="artigo">
            <article>
                 <header>
                    <h2>Os melhores brinquedos para o seu dia.</h2>
                    <img id="bolo" src="img/bolo.jpg">
                 </header>
                    <p>Buscamos sempre fornecer o melhor brinquedo.</p>
                    <p>Promoção do dia.</p>
                 <footer id="rodapeheader">
                        <div >
                            <p>lindo e maravilhoso, feito para você.</p>
                            <a href="">Aqui temos mais opções.</a>
                        </div>
                 </footer>
            </article>
        </div>
    </section>
    
    <nav>
        <div id="menu">
            <p>
                <ul class="elemento-ul">
                    <li><a href="">Parceiros</a></li>
                    <li><a href="">Nosso aplicativos</a></li>
                    <li><a href="">Comentários</a></li>
                    <li><a href="">Avalicações</a></li>
                </ul>
            </p>
        </div>
    </nav>

    
    <footer>
        <div id="rodape">
            <p>Todos os direitos reservados</p>
            <p>Matheus Miguel Da Costa</p>

            
        </div>
    </footer>

        <div class="calendario" id="datass">
            <?php 
                
                $eventos = montaEventos($info);
                montaCalendatio($eventos);
                
            ?>
            
        </div>


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>

</body>
</html>