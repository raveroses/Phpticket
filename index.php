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

echo $twig->render('home.html.twig', [
    'ticketTestimonials' => [
        [
            'id' => 1,
            'name' => "Alice Johnson",
            'testimonial' => "Booking my concert ticket was seamless! The process was quick and easy.",
            'event' => "Rock Concert 2025",
        ],
        [
            'id' => 2,
            'name' => "Michael Smith",
            'testimonial' => "I loved how I could choose my seat online. Definitely booking again!",
            'event' => "Broadway Musical",
        ],
        [
            'id' => 3,
            'name' => "Sophia Lee",
            'testimonial' => "The ticket confirmation was instant, and the app reminded me of the event. Very convenient.",
            'event' => "Tech Conference",
        ],
    ]
]);