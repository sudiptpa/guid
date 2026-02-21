<?php

declare(strict_types=1);

namespace Sujip\Guid;

final class DefaultGenerator implements GeneratorInterface
{
    /**
     * @link http://php.net/manual/en/function.com-create-guid.php#119168
     */
    public function generate(bool $trim = true): string
    {
        if (function_exists('com_create_guid')) {
            $guid = com_create_guid();

            if (is_string($guid)) {
                return $trim ? trim($guid, '{}') : $guid;
            }
        }

        $data = $this->randomBytes16();

        if ($data !== null) {
            $data[6] = chr((ord($data[6]) & 0x0f) | 0x40);
            $data[8] = chr((ord($data[8]) & 0x3f) | 0x80);

            $uuid = vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));

            return $trim ? $uuid : '{' . $uuid . '}';
        }

        $charId = strtolower(md5(uniqid('', true)));
        $uuid = sprintf(
            '%s-%s-%s-%s-%s',
            substr($charId, 0, 8),
            substr($charId, 8, 4),
            substr($charId, 12, 4),
            substr($charId, 16, 4),
            substr($charId, 20, 12)
        );

        return $trim ? $uuid : '{' . $uuid . '}';
    }

    private function randomBytes16(): ?string
    {
        try {
            $data = random_bytes(16);
        } catch (\Throwable) {
            $data = null;
        }

        if (is_string($data) && strlen($data) === 16) {
            return $data;
        }

        if (function_exists('openssl_random_pseudo_bytes')) {
            $openssl = openssl_random_pseudo_bytes(16);

            if (is_string($openssl) && strlen($openssl) === 16) {
                return $openssl;
            }
        }

        return null;
    }
}
