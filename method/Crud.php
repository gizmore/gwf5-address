<?php
final class Address_Crud extends GWF_MethodCrud
{
    public function hrefList() { return href('Address', 'List'); }

    public function gdoTable() { return GWF_Address::table(); }
    
}
