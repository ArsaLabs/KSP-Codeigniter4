<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Twig extends \Daycry\Twig\Config\Twig
{
    public $functions_safe = ['form_open', 'form_close', 'form_hidden', 'json_decode', 'form_error', 'form_hidden', 'set_value', 'csrf_field'];
    public $functions_asis = ['current_url', 'base_url', 'site_url'];
    public $paths          = [];
}
