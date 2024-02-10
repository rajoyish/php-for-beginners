<?php

namespace Core\Middleware;

class Authenticated
{
    public function handle()
    {
        $user = $_SESSION['user'] ?? false;

        if (! $user) {
            header('location: /');
            exit();
        }
    }
}
