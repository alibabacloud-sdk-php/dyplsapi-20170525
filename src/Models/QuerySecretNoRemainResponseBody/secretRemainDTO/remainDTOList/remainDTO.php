<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretNoRemainResponseBody\secretRemainDTO\remainDTOList;

use AlibabaCloud\Tea\Model;

class remainDTO extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $city;
    protected $_name = [
        'amount' => 'Amount',
        'city'   => 'City',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return remainDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        return $model;
    }
}
