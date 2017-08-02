<?php
final class GDO_Address extends GDO_Object
{
    public function __construct()
    {
        $this->table(GWF_Address::table());
    }
}
