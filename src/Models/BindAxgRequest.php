<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class BindAxgRequest extends Model
{
    /**
     * @description The ID of the ASR model.
     *
     * @example 980abddb908f48e8b987cb2cd303****
     *
     * @var string
     */
    public $ASRModelId;

    /**
     * @description Specifies whether to enable automatic speech recognition (ASR). Valid values:
     *
     *   **False** (default): disables ASR.
     *   **True**: enables ASR.
     *
     * @example False
     *
     * @var bool
     */
    public $ASRStatus;

    /**
     * @description Re-sets the phone number display logic in the AXG binding. Fixed value: **1**, indicating that phone number X is displayed on both the calling phone and the called phone.
     *
     * >  Due to the regulatory restrictions imposed by carriers, the setting to display real phone numbers during calls does not take effect.
     * @example 1
     *
     * @var int
     */
    public $callDisplayType;

    /**
     * @description The status of call restrictions. Valid values:
     *
     *   **CONTROL_AX_DISABLE**: Phone number A cannot be used to call phone number X.
     *   **CONTROL_BX_DISABLE**: Phone number B cannot be used to call phone number X.
     *
     * @example CONTROL_AX_DISABLE
     *
     * @var string
     */
    public $callRestrict;

    /**
     * @description Specifies the city to which phone number X to be selected belongs.
     *
     *   If no phone number for the specified city is available in the current phone number pool or this parameter is not specified, a phone number that belongs to another city is randomly selected from the current phone number pool and assigned as phone number X.
     *   If Number X Assignment Mode is set to Strict Matching Mode and no phone number meets the requirement, the system displays an allocation error.
     *
     * @example hangzhou
     *
     * @var string
     */
    public $expectCity;

    /**
     * @description The expiration time of the AXG binding. The value is accurate to seconds.
     *
     * This parameter is required.
     * @example 2019-09-05 12:00:00
     *
     * @var string
     */
    public $expiration;

    /**
     * @description The group ID in the AXG binding. You can view the group ID by using either of the following methods:
     *
     *   On the **Number Pool Management** page in the [Phone Number Protection console](https://dypls.console.aliyun.com/dypls.htm#/account), filter AXG privacy numbers and click **Number Group G Management** to view the group IDs of number groups G.****
     *   If the [CreateAxgGroup](https://help.aliyun.com/document_detail/110250.html) operation is called to create number group G, the value of **GroupId** in the response of the CreateAxgGroup operation is specified as the value of the request parameter **GroupId** of the BindAxg operation.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var string
     */
    public $groupId;

    /**
     * @description Specifies whether to record all calls made by the bound phone numbers.
     *
     * @example true
     *
     * @var bool
     */
    public $isRecordingEnabled;

    /**
     * @description The extension field for the external business. This parameter is returned in a call record receipt.
     *
     * @example abcdef
     *
     * @var string
     */
    public $outId;

    /**
     * @description The ID of the external business.
     *
     * @example abcdef
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Phone number A in the AXG binding. Phone number A can be set to a mobile phone number or a landline phone number. The landline phone number must be added with an area code, and no hyphen is required between the area code and the landline phone number.
     *
     * This parameter is required.
     * @example 139****0000
     *
     * @var string
     */
    public $phoneNoA;

    /**
     * @description Phone number B in the AXG binding. If phone number A is used to call phone number X, the call is forwarded to phone number B. If you need to update phone number B, call the [UpdateSubscription](https://help.aliyun.com/document_detail/110253.html) operation.
     *
     * Phone number B can be set to a mobile phone number or a landline phone number. The landline phone number must be added with an area code, and no hyphen is required between the area code and the landline phone number.
     * @example 139****0000
     *
     * @var string
     */
    public $phoneNoB;

    /**
     * @description Phone number X in the AXG binding. If you do not specify this parameter, a random phone number is selected from the phone number pool based on the value of the **ExpectCity** parameter and is used as phone number X.
     *
     * >  Phone number X is the phone number that you purchased in the Phone Number Protection console or by using the [BuySecretNo](https://help.aliyun.com/document_detail/110266.html) operation before you bind a phone number. Phone number X is used to forward calls.
     * @example 139****0000
     *
     * @var string
     */
    public $phoneNoX;

    /**
     * @description The key of the phone number pool. Log on to the [Phone Number Protection console](https://dypls.console.aliyun.com/dypls.htm#/account) and view the key of the phone number pool on the **Number Pool Management** page.
     *
     * @example FC123456
     *
     * @var string
     */
    public $poolKey;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Sets the ringtone for enterprise Color Ring Back Tone (CRBT) in the AXG binding.
     *
     *   Ringtone setting (with a callback number) when phone number A is used to call phone number X in the AXG binding: AXGRing_AB
     *   Ringtone setting (without a callback number) when phone number A is used to call phone number X in the AXG binding: AXGRing_A
     *   Ringtone setting when a phone number in number group G is used to call phone number X in the AXG binding: AXGRing_G
     *   Enterprise CRBT codes: Enterprise CRBT codes can be queried in the Phone Number Protection console. You can choose **Number Pool Management > Enterprise CRBT Management** to view and manage enterprise CRBT codes. You can also upload, delete, or perform other operations on enterprise CRBT codes.
     *
     * >  The bound enterprise CRBTs are preferentially used. If no enterprise CRBT is set or the setting does not take effect, the enterprise CRBTs at the phone number pool level are used.
     * @example {"AXGRing_AB":"100000001","AXGRing_A":"100000002","AXGRing_G":"100000003"}
     *
     * @var string
     */
    public $ringConfig;
    protected $_name = [
        'ASRModelId'           => 'ASRModelId',
        'ASRStatus'            => 'ASRStatus',
        'callDisplayType'      => 'CallDisplayType',
        'callRestrict'         => 'CallRestrict',
        'expectCity'           => 'ExpectCity',
        'expiration'           => 'Expiration',
        'groupId'              => 'GroupId',
        'isRecordingEnabled'   => 'IsRecordingEnabled',
        'outId'                => 'OutId',
        'outOrderId'           => 'OutOrderId',
        'ownerId'              => 'OwnerId',
        'phoneNoA'             => 'PhoneNoA',
        'phoneNoB'             => 'PhoneNoB',
        'phoneNoX'             => 'PhoneNoX',
        'poolKey'              => 'PoolKey',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ringConfig'           => 'RingConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ASRModelId) {
            $res['ASRModelId'] = $this->ASRModelId;
        }
        if (null !== $this->ASRStatus) {
            $res['ASRStatus'] = $this->ASRStatus;
        }
        if (null !== $this->callDisplayType) {
            $res['CallDisplayType'] = $this->callDisplayType;
        }
        if (null !== $this->callRestrict) {
            $res['CallRestrict'] = $this->callRestrict;
        }
        if (null !== $this->expectCity) {
            $res['ExpectCity'] = $this->expectCity;
        }
        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->isRecordingEnabled) {
            $res['IsRecordingEnabled'] = $this->isRecordingEnabled;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->outOrderId) {
            $res['OutOrderId'] = $this->outOrderId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->phoneNoA) {
            $res['PhoneNoA'] = $this->phoneNoA;
        }
        if (null !== $this->phoneNoB) {
            $res['PhoneNoB'] = $this->phoneNoB;
        }
        if (null !== $this->phoneNoX) {
            $res['PhoneNoX'] = $this->phoneNoX;
        }
        if (null !== $this->poolKey) {
            $res['PoolKey'] = $this->poolKey;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ringConfig) {
            $res['RingConfig'] = $this->ringConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindAxgRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ASRModelId'])) {
            $model->ASRModelId = $map['ASRModelId'];
        }
        if (isset($map['ASRStatus'])) {
            $model->ASRStatus = $map['ASRStatus'];
        }
        if (isset($map['CallDisplayType'])) {
            $model->callDisplayType = $map['CallDisplayType'];
        }
        if (isset($map['CallRestrict'])) {
            $model->callRestrict = $map['CallRestrict'];
        }
        if (isset($map['ExpectCity'])) {
            $model->expectCity = $map['ExpectCity'];
        }
        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['IsRecordingEnabled'])) {
            $model->isRecordingEnabled = $map['IsRecordingEnabled'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['OutOrderId'])) {
            $model->outOrderId = $map['OutOrderId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PhoneNoA'])) {
            $model->phoneNoA = $map['PhoneNoA'];
        }
        if (isset($map['PhoneNoB'])) {
            $model->phoneNoB = $map['PhoneNoB'];
        }
        if (isset($map['PhoneNoX'])) {
            $model->phoneNoX = $map['PhoneNoX'];
        }
        if (isset($map['PoolKey'])) {
            $model->poolKey = $map['PoolKey'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RingConfig'])) {
            $model->ringConfig = $map['RingConfig'];
        }

        return $model;
    }
}
