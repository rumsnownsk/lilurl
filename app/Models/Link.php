<?php

namespace App\Models;
class Link
{
    public string|null $shorty = null;
    public string|null $originLink = null;
    public string|null $ip_client = null;

    public string|null $shortLink = null;

    public function loadData(): void
    {
        $this->originLink = request()->post('longLink');
        $this->ip_client = $_SERVER['REMOTE_ADDR'];
    }

    public function validate(): bool
    {
        $regex = "((https?|ftp)\:\/\/)?"; // SCHEME
        $regex .= "([a-z0-9+!*(),;?&=\$_.-]+(\:[a-z0-9+!*(),;?&=\$_.-]+)?@)?"; // User and Pass
        $regex .= "([a-z0-9-.]*)\.([a-z]{2,3})"; // Host or IP
        $regex .= "(\:[0-9]{2,5})?"; // Port
        $regex .= "(\/([a-z0-9+\$_-]\.?)+)*\/?"; // Path
        $regex .= "(\?[a-z+&\$_.-][a-z0-9;:@&%=+\/\$_.-]*)?"; // GET Query
        $regex .= "(#[a-z_.-][a-z0-9+\$_.-]*)?"; // Anchor

        if (preg_match("/^$regex$/i", $this->originLink)) // `i` flag for case-insensitive
        {
            return true;
        } else
            return false;
    }

    public function storeLink(): void
    {
        $this->generateShorty();

        db()->query("insert into urls (`shorty`, `originlink`, `ip_client`) values (?, ?, ?)",[
            $this->shorty,
            $this->originLink,
            $this->ip_client
        ]);

        $httpHost = $_SERVER['HTTP_HOST'];

        $this->shortLink = "$httpHost/$this->shorty";
    }

    protected function generateShorty(): void
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $shorty = '';

        for ($i = 0; $i < 6; $i++) {
            $shorty .= $characters[random_int(0, $charactersLength - 1)];
        }
        $this->shorty = $shorty;
    }
}