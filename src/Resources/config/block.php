<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Sonata\TranslationBundle\Block\LocaleSwitcherBlockService;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->services()

        ->set('sonata_translation.block.locale_switcher', LocaleSwitcherBlockService::class)
            ->tag('sonata.block')
            ->args([
                service('twig'),
                service('sonata_translation.admin.provider.request_locale_provider'),
            ]);
};
