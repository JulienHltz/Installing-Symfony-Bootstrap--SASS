<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYicLFws\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYicLFws/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYicLFws.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYicLFws\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYicLFws\App_KernelDevDebugContainer([
    'container.build_hash' => 'YicLFws',
    'container.build_id' => 'af5f5b31',
    'container.build_time' => 1668006506,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYicLFws');
