<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;

//FILTER CUSTOM
use App\Filters\FilterAuth;
use App\Filters\FilterSuperAdmin;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array
     */
    public $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'filtersuperadmin' => FilterSuperAdmin::class,
        'filterauth' => FilterAuth::class
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array
     */
    public $globals = [
        'before' => [
            // 'honeypot',
            // 'invalidchars',
            'csrf',
            'filterauth' => [
                'except' => [
                    '/', '/tentang', '/list', '/berita', '/kontak', 'auth', 'auth/*', 'responden/*'
                ]
            ],
        ],
        'after' => [
            'toolbar',
            // 'honeypot',
            // 'secureheaders',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['csrf', 'throttle']
     *
     * @var array
     */
    public $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     *
     * @var array
     */
    public $filters = [
        'filtersuperadmin' => [
            'before' => [
                'opd', 'opd/add', 'opd/create', 'opd/edit', 'opd/update', 'opd/detail',
                'users', 'users/add', 'users/create', 'users/edit', 'users/update', 'users/detail',
                'opsi', 'opsi/addopsi', 'opsi/createopsi', 'opsi/edit', 'opsi/update',
                'laporan/listopd', 'berita/listopd'
            ]
        ]
    ];
}
