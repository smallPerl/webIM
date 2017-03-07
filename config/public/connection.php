<?php
    return array(
        'connection'=>array(
            'adapter' => 'Redis',
            'name' => 'cr',
            'pconnect' => true,
            'host' => '192.168.182.137',
            'port' => 6379,
            'timeout' => 5,
            'prefix' => 'chat'
        )
    );