
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>JuanBlog</title>
</head>
<body> 
    <div class="container-fluid">
        <nav class="d-flex navbar navbar-dark bg-dark text-white">
            <div class="mr-auto p-2">
                <a href="">AAA</a>

            </div>
            <div class="p-2">
                <div class="mr-4 text-white nav-item">Cadastro</div>

            </div>
            <div class="p-2">
                <div class="mr-4 text-white nav-item">Login</div>

            </div>
        </nav>
    
     
            

        </div>
        <div class="d-flex navbar-light bg-light">
            <div class="mr-auto p-2">
                juan
            </div>
            <div class="p-2">
                <?php 
                    include_once '../data/categoria.php';
                    $abrir = new Categoria;
                    $categorias = $abrir->CategoriaProgramacao();
                    foreach($categorias as $categoria):?>
                        <div class="categoria p-2"><?php echo $categoria ?></div>
                    <?php endforeach ;?>

            </div>
        </div>
        <?php include_once './info.php' ?>

    </div>
        <script src="{{ asset('js/index.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script> 
</body>
</html>
