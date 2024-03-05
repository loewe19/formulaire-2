<?php
// Serveur WebSocket
$server = new WebSocketServer("localhost",  8080);

$server->on("open", function($client) use ($server) {
    echo "Client connected\n";
});

$server->on("message", function($client, $message) use ($server) {
    echo "Received message: $message\n";
    // Broadcast message to all clients
    foreach ($server->clients as $client) {
        $client->send($message);
    }
});

$server->run();
?>