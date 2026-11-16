<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SecurityGuiExtension\Dependency\Plugin;

use Symfony\Component\Form\FormBuilderInterface;

/**
 * Use this plugin interface for expanding the Back Office user login form with additional fields.
 */
interface UserLoginFormExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands the Back Office user login form with additional fields (e.g. a CAPTCHA challenge field).
     * - Executed when the login form is built, must not change the existing fields.
     *
     * @api
     *
     * @param array<string, mixed> $options
     */
    public function expand(FormBuilderInterface $builder, array $options): FormBuilderInterface;
}
