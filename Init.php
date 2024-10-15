<?php
/**
 * This file is part of Backup plugin for FacturaScripts
 * Copyright (C) 2021 Carlos Garcia Gomez <carlos@facturascripts.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
namespace FacturaScripts\Plugins\Backup;

/**
 * Composer autoload.
 */
require_once __DIR__ . '/vendor/autoload.php';

use FacturaScripts\Core\Template\InitClass;

class Init extends InitClass
{

    public function init() : void
    {
        $this->loadExtension(new Extension\Controller\ListFacturaCliente());
    }

    public function update(): void
    {
        ;
    }

    public function uninstall(): void
    {
        // TODO: Implement uninstall() method.
    }
}
