<body>
    <div class="container-fluid">
    <?php
    require_once("menu.php");
     switch ($menuItem) {
        case 'home':
            require_once("home.php");
            break;
        case 'kocsik':
            require_once("kocsik.php") ;
            break;
        case 'szerkeszto':
            require_once("szerkeszto.php");
            break;

        default:
            echo "Üdv az Autó eladó oldalon!";
            break;
        }
        switch ($menuItem) {
            case 'kocsi1':
                require_once("kocsi1.php");
                break;
    
            case 'kocsi2':
                require_once("kocsi2.php") ;
                break;
    
            case 'kocsi3':
                require_once("kocsi3.php");
                break;
    
            case 'kocsi4':
                require_once("kocsi4.php") ;
                break;
    
            case 'kocsi5':
                require_once("kocsi5.php");
                break;
            }
    
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>