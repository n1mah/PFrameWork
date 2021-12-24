<?php

function site_url(string $route):string{
  return $_ENV["DOMAIN"].$route;
}

function asset_url(string $route):string{
    return site_url("assets/".$route);
}
