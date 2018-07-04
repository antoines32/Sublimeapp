<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'services_resetter' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\DependencyInjection\\ServicesResetter.php';

return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
    if (isset($this->services['profiler'])) {
        yield 'profiler' => ${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : null) && false ?: '_'};
    }
    if (isset($this->services['validator'])) {
        yield 'debug.validator' => ${($_ = isset($this->services['validator']) ? $this->services['validator'] : null) && false ?: '_'};
    }
    if (isset($this->services['debug.stopwatch'])) {
        yield 'debug.stopwatch' => ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : null) && false ?: '_'};
    }
    if (isset($this->services['security.token_storage'])) {
        yield 'security.token_storage' => ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : null) && false ?: '_'};
    }
    if (isset($this->services['form.type.entity'])) {
        yield 'form.type.entity' => ${($_ = isset($this->services['form.type.entity']) ? $this->services['form.type.entity'] : null) && false ?: '_'};
    }
}, function () {
    return 0 + (int) (isset($this->services['profiler'])) + (int) (isset($this->services['validator'])) + (int) (isset($this->services['debug.stopwatch'])) + (int) (isset($this->services['security.token_storage'])) + (int) (isset($this->services['form.type.entity']));
}), array('profiler' => 'reset', 'debug.validator' => 'reset', 'debug.stopwatch' => 'reset', 'security.token_storage' => 'setToken', 'form.type.entity' => 'reset'));
