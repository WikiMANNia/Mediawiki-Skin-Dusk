<?php

namespace MediaWiki\Skin\Dusk;

class DuskHooks
{
    public static function onRegistration() {
        Compat::init();
    }
}
