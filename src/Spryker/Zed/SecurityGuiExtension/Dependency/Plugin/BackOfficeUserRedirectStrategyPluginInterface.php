<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SecurityGuiExtension\Dependency\Plugin;

use Symfony\Component\HttpFoundation\Request;

interface BackOfficeUserRedirectStrategyPluginInterface
{
    /**
     * Specification:
     * - Returns `true` if this plugin can provide a post-login redirect URL for the given Back Office request.
     *
     * @api
     */
    public function isApplicable(Request $request): bool;

    /**
     * Specification:
     * - Returns the URL to redirect to after a successful Back Office login.
     *
     * @api
     */
    public function getRedirectUrl(Request $request): string;
}
