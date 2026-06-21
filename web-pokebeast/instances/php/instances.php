<?php
$instance['Pokebeast'] = array_merge($instance['Pokebeast'], array(
    "loader" => array(
        "minecraft_version" => "1.21.1",
        "loader_type" => "fabric",
        "loader_version" => "0.16.10"
    ),
    "verify" => true,
    "ignored" => array(
        'logs',
        'resourcepacks',
        'saves',
        'screenshots',
        'shaderpacks',
        'options.txt',
        'servers.dat'
    ),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "Pokebeast",
        "ip" => "SEU-IP-AQUI",
        "port" => 25565
    )
));
?>
