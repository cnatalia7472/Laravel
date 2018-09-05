<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => env('FILESYSTEM_CLOUD', 'tenant-primary'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3", "rackspace"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'system-localbackup' => [
            'driver' => 'local',
            'root' => storage_path('app/backups'),
        ],

        'system-cloudbackup' => [
            'driver' => 's3',
            'key' => env('STORAGE.SYSTEM.CLOUD-BACKUP_KEY'),
            'secret' => env('STORAGE.SYSTEM.CLOUD-BACKUP_SECRET'),
            'region' => env('STORAGE.SYSTEM.CLOUD-BACKUP_REGION'),
            'bucket' => env('STORAGE.SYSTEM.CLOUD-BACKUP_BUCKET'),
            'url' => env('STORAGE.SYSTEM.CLOUD-BACKUP_URL'),
        ],

        // ======== Tenant Storage ========== //

        // US Regions
        'tenant-primary' => [
            'driver' => 's3',
            'key' => env('STORAGE.TENANT.PRIMARY_KEY'),
            'secret' => env('STORAGE.TENANT.PRIMARY_SECRET'),
            'region' => env('STORAGE.TENANT.PRIMARY_REGION'),
            'bucket' => env('STORAGE.TENANT.PRIMARY_BUCKET'),
            'url' => env('STORAGE.TENANT.PRIMARY_URL'),
        ],

    ],

];
