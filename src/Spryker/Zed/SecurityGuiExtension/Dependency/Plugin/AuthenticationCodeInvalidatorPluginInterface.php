<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SecurityGuiExtension\Dependency\Plugin;

use Generated\Shared\Transfer\MultiFactorAuthTransfer;

/**
 * Provides capability to invalidate multi-factor authentication codes for users.
 *
 * Implement this interface to add code invalidation functionality to your authentication handler plugin.
 */
interface AuthenticationCodeInvalidatorPluginInterface
{
    /**
     * Specification:
     * - Invalidates all active multi-factor authentication codes for the provided user.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\MultiFactorAuthTransfer $multiFactorAuthTransfer
     *
     * @return void
     */
    public function invalidateUserCodes(MultiFactorAuthTransfer $multiFactorAuthTransfer): void;
}
