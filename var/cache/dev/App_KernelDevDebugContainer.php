<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTAAHxOW\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTAAHxOW/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTAAHxOW.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTAAHxOW\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTAAHxOW\App_KernelDevDebugContainer([
    'container.build_hash' => 'TAAHxOW',
    'container.build_id' => 'b83f8d30',
    'container.build_time' => 1650625868,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTAAHxOW');
