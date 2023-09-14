<?php

return [
    'drivers' => explode(
        ',',
        env('NOTIFICATION_DRIVERS', 'database')
    ),
];
