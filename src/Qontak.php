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

    public static function send()
    {
        $data = (new Broadcast);
        $data->direct(
            '6281319404409',
            'Hasan',
            '951a091a-fc1a-4170-acc6-e2496ea0fc7b',
            [
                [
                    'key' => '1',
                    'value' => 'full_name',
                    'value_text' => 'Doni'
                ],
                [
                    'key' => '3',
                    'value' => 'total',
                    'value_text' => 'Rp2700'
                ],
                [
                    'key' => '5',
                    'value' => 'link',
                    'value_text' => 'https://asdf.com'
                ]
            ]
        );

        return $data->getResponse();
    }
}
