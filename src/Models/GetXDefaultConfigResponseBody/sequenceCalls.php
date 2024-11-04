<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetXDefaultConfigResponseBody;

use AlibabaCloud\Tea\Model;

class sequenceCalls extends Model
{
    /**
     * @description 顺振提示音放音编号，格式如callNoPlayCode
     *
     * @example 01
     *
     * @var string
     */
    public $sequenceCallNoPlayCode;

    /**
     * @description 顺振被叫号码
     *
     * @example 18*******33
     *
     * @var string
     */
    public $sequenceCalledNo;

    /**
     * @description 接通后主被叫放音编号，格式如calledPlayCode
     *
     * @example 02
     *
     * @var string
     */
    public $sequenceCalledPlayCode;
    protected $_name = [
        'sequenceCallNoPlayCode' => 'SequenceCallNoPlayCode',
        'sequenceCalledNo'       => 'SequenceCalledNo',
        'sequenceCalledPlayCode' => 'SequenceCalledPlayCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sequenceCallNoPlayCode) {
            $res['SequenceCallNoPlayCode'] = $this->sequenceCallNoPlayCode;
        }
        if (null !== $this->sequenceCalledNo) {
            $res['SequenceCalledNo'] = $this->sequenceCalledNo;
        }
        if (null !== $this->sequenceCalledPlayCode) {
            $res['SequenceCalledPlayCode'] = $this->sequenceCalledPlayCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sequenceCalls
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SequenceCallNoPlayCode'])) {
            $model->sequenceCallNoPlayCode = $map['SequenceCallNoPlayCode'];
        }
        if (isset($map['SequenceCalledNo'])) {
            $model->sequenceCalledNo = $map['SequenceCalledNo'];
        }
        if (isset($map['SequenceCalledPlayCode'])) {
            $model->sequenceCalledPlayCode = $map['SequenceCalledPlayCode'];
        }

        return $model;
    }
}