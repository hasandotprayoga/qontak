<?php

namespace Hasandotprayoga\Qontak;

class Qontak extends Singleton
{
    public static function getTemplate()
    {
        $data = (new Template);
        $data->get();

        return $data->getResponse();
    }

    public static function send($phone, $name, $params)
    {
        $data = (new Broadcast);
        $data->direct(
            self::cleanPhone($phone),
            $name,
            '951a091a-fc1a-4170-acc6-e2496ea0fc7b',
            $params
        );

        return $data->getResponse();
    }

    protected static function cleanPhone($phone)
    {

        $phone = preg_replace('/[^0-9]/', '', $phone);

        if (strlen($phone) > 0) {
            $cleanChars = [
                '+',
                '0',
                '62',
            ];

            foreach ($cleanChars as $value) {
                $phone = ltrim($phone, $value);
            }

            $phone = '62' . $phone;
        }

        return $phone;
    }
}
