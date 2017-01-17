<?php namespace Sereno\Extensions;

use Sereno\AbstractExtension;

class ProjectsExtension extends AbstractExtension
{
    public function provide()
    {
        $this->registerConfig('projects', (require __DIR__.'/config.php') + (array) config('project'));
    }

    public function getBuilders(): array
    {
        return [
            Projects\ProjectsBuilder::class,
        ];
    }

    public function getViewsDirectory(): array
    {
        return [dirname(__DIR__).'/resources/views'];
    }

    public function getContentDirectory(): array
    {
        return (array) config('projects.directory');
    }
}
