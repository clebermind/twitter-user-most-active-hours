<?php

namespace TwitterSummariser\app;

use TwitterSummariser\src\Controller\Summariser;

/**
 * Responsible for instantiate and start the app.
 * First settings can be loaded and done here.
 */
class AppKernel
{
    /**
     * @var AppKernel
     */
    private static $instance;

    /**
     * Get active instance
     *
     * @return AppKernel
     */
    public static function instance(): AppKernel
    {
        if (!self::$instance) {
            self::$instance = new self();
            self::$instance->run();
        }

        return self::$instance;
    }

    /**
     * Run action
     *
     * @return void
     */
    private function run()
    {
        (new Summariser())->display();
    }
}
