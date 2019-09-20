<?php

/**
 * Helper class for sanitizing input and escaping output.
 *
 * \@package Helpers
 *
 * @category Concrete
 *
 * @subpackage Security
 *
 * @author Chris Rosser <chris@bluefuton.com>
 * @copyright  Copyright (c) 2003-2008 Concrete5. (http://www.concrete5.org)
 * @license    http://www.concrete5.org/license/     MIT License
 */

//declare(strict_types=1);

namespace Concrete\Core\Validation;

class SanitizeService
{
    /**
     * @param string $string
     *
     * @return string
     */
    public function sanitizeString(string $string): string
    {
        return (string)filter_var($string, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    }

    /**
     * @param string $int
     *
     * @return int
     */
    public function sanitizeInt(string $int): int
    {
        return (int)filter_var($int, FILTER_SANITIZE_NUMBER_INT);
    }

    /**
     * @param string $url
     *
     * @return string
     */
    public function sanitizeURL(string $url): string
    {
        return (string)filter_var($url, FILTER_SANITIZE_URL);
    }

    /**
     * @param string $email
     *
     * @return string
     */
    public function sanitizeEmail(string $email): string
    {
        return (string)filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
