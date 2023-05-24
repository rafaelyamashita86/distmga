<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=devide-width, inicial-scale=1"/>
        <title>Distribuidora Maringá</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <style>
            #contact{
                padding-top: 1%; 
            }
            #faleconosco{
                padding-left: 1%;
            }
           
        </style>
    </head>
    <body>
        <center><img src="imagens/logo_dist.png"width="10%" height="10%"/></center>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #008000;">
                <div class="container-fluid">
                    <a class="navbar-brand"></a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            <a class="nav-link" href="quemsomos.php">Quem somos</a>
                            <a class="nav-link" href="marcas.php">Marcas</a>
                            <a class="nav-link" href="contato.php">Contato</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
            <div class="row justify-content-center row-cols-1 row-cols-md-3 mb-3 text-justify" id="contact">
                <div class="col"  >
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 text-center">
                            <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chat-square-text-fill" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                            </svg><b>Contato</b></h4>
                        </div>
                        <div class="card-body">
                            <form action=".php" method="POST">
                                <div class="form-group">
                                    <label><b>Nome</b></label>
                                    <input type="text" class="form-control" name="nome" required/>
                                    <label><b>Email</b></label>
                                    <input type="email" class="form-control" name="email" required/>                       
                                    <label><b>Telefone</b></label>
                                    <input type="number" class="form-control" name="telefone" required/>
                                    <label><b>Mensagem</b></label>
                                    <textarea class="form-control"></textarea>
                                    <br>
                                    <button type="submit" class="btn btn-success">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> 
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 text-center">
                            <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chat-square-text-fill" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                            </svg><b>Fale conosco</b></h4>
                        </div>
                        <ul class="list-unstyled mt-3 mb-4" id="faleconosco">
                            <li><h3>Distribuidora Maringá</h3></li><br>
                            <li><b>Endereço:</b><br>
                            Av. Dr Alexandre Rasgulaeff, 113<br>
                            Jd Alvorada<br>
                            Maringá - PR</li><br>
                            <li><b>Telefone:</b><br>
                            (44)3029-2626<br>
                            (44)99822-7999</li><br>
                            <li><b>Email:</b><br>
                            distribuidoramaringa@hotmail.com</li>
                        </ul>
                    </div>
                </div>  
            </div> 
        <footer>
        <hr/>
            <center><b>Desenvolvido por Rafael A. Yamashita - 2021</b></center>        
        </footer>  
    </body>
    
</html>