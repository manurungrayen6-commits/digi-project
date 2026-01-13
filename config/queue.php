<?php

return [
    'default' => env('QUEUE_CONNECTION', 'database'),
    'connections' => [
        'sync' => [
            'driver' => 'sync',
        ],
        'database' => [
            'driver' => 'database',
            'connection' => null,
            'table' => 'jobs',
            'queue' => 'default',
            'retry_after' => 90,
            'after_commit' => false,
        ],
        'file' => [
            'driver' => 'file',
            'path' => storage_path('framework/queue'),
        ],
    ],
    'batches' => [
        'database' => 'default',
        'table' => 'job_batches',
        'connection' => null,
    ],
    'failed' => [
        'database' => 'default',
        'table' => 'failed_jobs',
    ],
];
