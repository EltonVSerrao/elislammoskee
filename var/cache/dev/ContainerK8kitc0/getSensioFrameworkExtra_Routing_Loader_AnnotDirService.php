<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sensio_framework_extra.routing.loader.annot_dir' shared service.

@trigger_error('The "sensio_framework_extra.routing.loader.annot_dir" service is deprecated since version 5.2', E_USER_DEPRECATED);

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Config\\FileLocatorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Config\\FileLocator.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\Config\\FileLocator.php';

return $this->services['sensio_framework_extra.routing.loader.annot_dir'] = new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader(${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ($this->targetDirs[3].'\\app/Resources'), array(0 => ($this->targetDirs[3].'\\app')))) && false ?: '_'}, ${($_ = isset($this->services['sensio_framework_extra.routing.loader.annot_class']) ? $this->services['sensio_framework_extra.routing.loader.annot_class'] : $this->load('getSensioFrameworkExtra_Routing_Loader_AnnotClassService.php')) && false ?: '_'});