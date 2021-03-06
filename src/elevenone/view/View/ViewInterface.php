<?php

declare(strict_types = 1);

namespace elevenone\View;

interface ViewInterface
{
    /**
     * Assigns template variables.
     *
     * @param array $pairs
     * @return void
     */
    public function assign(array $pairs) : void;

    /**
     * Renders given view and return html-code.
     *
     * @param string $view
     * @param array $data
     * @return string
     */
    public function render(string $view = '', array $data = []) : string;
}
