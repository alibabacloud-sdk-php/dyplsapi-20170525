<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class GetTotalPublicUrlRequest extends Model
{
    /**
     * @example 2568900****
     *
     * @var string
     */
    public $callId;

    /**
     * @example 2019-03-05 12:00:00
     *
     * @var string
     */
    public $callTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $checkSubs;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example FC12256****
     *
     * @var string
     */
    public $partnerKey;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'callId'               => 'CallId',
        'callTime'             => 'CallTime',
        'checkSubs'            => 'CheckSubs',
        'ownerId'              => 'OwnerId',
        'partnerKey'           => 'PartnerKey',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->callTime) {
            $res['CallTime'] = $this->callTime;
        }
        if (null !== $this->checkSubs) {
            $res['CheckSubs'] = $this->checkSubs;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->partnerKey) {
            $res['PartnerKey'] = $this->partnerKey;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTotalPublicUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['CallTime'])) {
            $model->callTime = $map['CallTime'];
        }
        if (isset($map['CheckSubs'])) {
            $model->checkSubs = $map['CheckSubs'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PartnerKey'])) {
            $model->partnerKey = $map['PartnerKey'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
