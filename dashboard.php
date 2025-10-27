<?php
error_reporting(E_ALL & ~E_DEPRECATED);


spl_autoload_register(function ($class) {
    // Only autoload Twig classes
    if (strpos($class, 'Twig\\') !== 0) {
        return;
    }
    
    // Convert namespace to file path
    // Twig\Loader\FilesystemLoader -> Twig/Loader/FilesystemLoader.php
    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    
    if (file_exists($file)) {
        require $file;
    }
});

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader);

echo $twig->render('dashboard.html.twig',[
     'sidebardetails' => [
   [ 
     'icon'=> '<i class="fa-solid fa-list-check"></i>',
      'names'=> ' Ticket List',
   ],
   [ 
     'icon'=>'<i class="fa-solid fa-square-plus"></i>' ,
      'names'=> 'Create Ticket',
   ],
   [ 
     'icon'=> '<i class="fa-solid fa-arrow-right-from-bracket"></i>',
      'names'=> 'Log out',
   ],
  ]
]);