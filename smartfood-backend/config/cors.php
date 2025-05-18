<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    */
    'paths' => ['api/*', 'sanctum/csrf-cookie'], // Rutas a las que se aplicará CORS

    'allowed_methods' => ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'], // Métodos HTTP permitidos

    // Orígenes permitidos.
    // Para desarrollo, asumiendo que Astro corre en http://localhost:4321
    'allowed_origins' => [env('FRONTEND_URL', 'http://localhost:4321')],

    'allowed_origins_patterns' => [], // Puedes usar patrones si tienes múltiples subdominios de frontend

    // Cabeceras permitidas en la solicitud desde el frontend
    'allowed_headers' => [
        'Content-Type',
        'X-Requested-With',
        'Authorization', // Para tokens Bearer si los usas
        'Accept',
        'X-XSRF-TOKEN', // Para la protección CSRF de Laravel/Sanctum SPA

    ],

    // Cabeceras que el frontend puede leer en la respuesta del backend
    'exposed_headers' => [],

    // Tiempo (en segundos) que el navegador puede cachear los resultados de una solicitud de verificación previa (OPTIONS)
    // 0 significa que no se cachea.
    'max_age' => 0,

    //  Establecer a true cuando el frontend envía credenciales
    // (cookies, como en Sanctum SPA, o cabeceras de Authorization).
    // Si es true, 'allowed_origins' no puede ser ['*'].
    'supports_credentials' => true,

];