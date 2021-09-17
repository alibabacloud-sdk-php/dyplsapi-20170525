<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxnExtensionResponseBody\secretBindDTO;
use AlibabaCloud\Tea\Model;

class BindAxnExtensionResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var secretBindDTO
     */
    public $secretBindDTO;
    protected $_name = [
        'code'          => 'Code',
        'message'       => 'Message',
        'requestId'     => 'RequestId',
        'secretBindDTO' => 'SecretBindDTO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->secretBindDTO) {
            $res['SecretBindDTO'] = null !== $this->secretBindDTO ? $this->secretBindDTO->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindAxnExtensionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecretBindDTO'])) {
            $model->secretBindDTO = secretBindDTO::fromMap($map['SecretBindDTO']);
        }

        return $model;
    }
}
