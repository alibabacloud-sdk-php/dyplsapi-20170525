<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\ListXTelephonesResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description 绑定失败原因
     *
     * @example 绑定失败用户身份证黑名单
     *
     * @var string
     */
    public $authMsg;

    /**
     * @description 绑定时间
     *
     * @example 2024-08-29 17:23:58
     *
     * @var string
     */
    public $bindTime;

    /**
     * @description 购买时间
     *
     * @example 2024-08-29 17:23:58
     *
     * @var string
     */
    public $buyTime;

    /**
     * @description 客户号码池key
     *
     * @example FC533e6eeb81f4400c87ef3745a21a1a
     *
     * @var string
     */
    public $customerPoolKey;

    /**
     * @description 号码池名称
     *
     * @example 测试号码池
     *
     * @var string
     */
    public $customerPoolName;

    /**
     * @description 释放时间
     *
     * @example 2024-08-29 17:23:58
     *
     * @var string
     */
    public $releaseTime;

    /**
     * @description 短信开通状态：0 未开通 1已开通
     *
     * @example 0
     *
     * @var string
     */
    public $smsStatus;

    /**
     * @description X号码
     *
     * @example 17816876546
     *
     * @var string
     */
    public $telephone;

    /**
     * @description 号码状态：0 空闲中 1 调拨完成待购买 2购买完成待认证  3 实名认证中  4 实名认证成功  5 认证失败  6 解绑中 7 解绑失败 8已释放 99 超时释放
     *
     * @example 0
     *
     * @var string
     */
    public $telephoneStatus;

    /**
     * @description 解绑时间
     *
     * @example 2024-08-29 17:23:58
     *
     * @var string
     */
    public $unbindTime;
    protected $_name = [
        'authMsg'          => 'AuthMsg',
        'bindTime'         => 'BindTime',
        'buyTime'          => 'BuyTime',
        'customerPoolKey'  => 'CustomerPoolKey',
        'customerPoolName' => 'CustomerPoolName',
        'releaseTime'      => 'ReleaseTime',
        'smsStatus'        => 'SmsStatus',
        'telephone'        => 'Telephone',
        'telephoneStatus'  => 'TelephoneStatus',
        'unbindTime'       => 'UnbindTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authMsg) {
            $res['AuthMsg'] = $this->authMsg;
        }
        if (null !== $this->bindTime) {
            $res['BindTime'] = $this->bindTime;
        }
        if (null !== $this->buyTime) {
            $res['BuyTime'] = $this->buyTime;
        }
        if (null !== $this->customerPoolKey) {
            $res['CustomerPoolKey'] = $this->customerPoolKey;
        }
        if (null !== $this->customerPoolName) {
            $res['CustomerPoolName'] = $this->customerPoolName;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->smsStatus) {
            $res['SmsStatus'] = $this->smsStatus;
        }
        if (null !== $this->telephone) {
            $res['Telephone'] = $this->telephone;
        }
        if (null !== $this->telephoneStatus) {
            $res['TelephoneStatus'] = $this->telephoneStatus;
        }
        if (null !== $this->unbindTime) {
            $res['UnbindTime'] = $this->unbindTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthMsg'])) {
            $model->authMsg = $map['AuthMsg'];
        }
        if (isset($map['BindTime'])) {
            $model->bindTime = $map['BindTime'];
        }
        if (isset($map['BuyTime'])) {
            $model->buyTime = $map['BuyTime'];
        }
        if (isset($map['CustomerPoolKey'])) {
            $model->customerPoolKey = $map['CustomerPoolKey'];
        }
        if (isset($map['CustomerPoolName'])) {
            $model->customerPoolName = $map['CustomerPoolName'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['SmsStatus'])) {
            $model->smsStatus = $map['SmsStatus'];
        }
        if (isset($map['Telephone'])) {
            $model->telephone = $map['Telephone'];
        }
        if (isset($map['TelephoneStatus'])) {
            $model->telephoneStatus = $map['TelephoneStatus'];
        }
        if (isset($map['UnbindTime'])) {
            $model->unbindTime = $map['UnbindTime'];
        }

        return $model;
    }
}