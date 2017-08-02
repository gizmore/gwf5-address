<?php
final class Module_Address extends GWF_Module
{
    public $module_priority = 10;
    public function getClasses() { return ['GWF_Address', 'GDO_Address']; }
    public function onLoadLanguage() { $this->loadLanguage('lang/address'); }
}
