<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetXDefaultConfigResponseBody\reachJson;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetXDefaultConfigResponseBody\sequenceCalls;
use AlibabaCloud\Tea\Model;

class GetXDefaultConfigResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @description 开/关呼叫能力状态： ‘0’：禁用； ‘1’：开启；
     *
     * @example 0
     *
     * @var string
     */
    public $callAbility;

    /**
     * @description 返回状态码 0000表示成功 其他表示失败
     *
     * @example 0000
     *
     * @var string
     */
    public $code;

    /**
     * @description 是否透传来显为真实主叫： 00-非透传：互相拨打时都显示工作号; 10-透传：A客户为主叫时,B员工的来显为客户A号码;B员工为主叫时,A客户的来显为工作号; 默认为 00
     *
     * @example 00
     *
     * @var string
     */
    public $GNFlag;

    /**
     * @description 返回信息
     *
     * @example 成功
     *
     * @var string
     */
    public $message;

    /**
     * @description 企业名片规则控制参数
     *
     * @var reachJson[]
     */
    public $reachJson;

    /**
     * @description 顺振控制参数
     *
     * @var sequenceCalls[]
     */
    public $sequenceCalls;

    /**
     * @description 顺振结束时间 格式：HH:mm:ss 18:00:00
     *
     * @example 09:01:00
     *
     * @var string
     */
    public $sequenceEndTime;

    /**
     * @description 顺振开启时间 格式：HH:mm:ss 09:00:00
     *
     * @example 09:00:00
     *
     * @var string
     */
    public $sequenceStartTime;

    /**
     * @description 开/关短信功能状态： ‘0’：禁用； ‘1’：开启；
     *
     * @example 0
     *
     * @var string
     */
    public $smsAbility;

    /**
     * @description 是否透传来显为真实用户 0：不透传; 1：透传 默认：0不透传
     *
     * @example 0
     *
     * @var string
     */
    public $smsSignMode;

    /**
     * @description 返回是否成功 true  表示成功 false表示失败
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'callAbility'        => 'CallAbility',
        'code'               => 'Code',
        'GNFlag'             => 'GNFlag',
        'message'            => 'Message',
        'reachJson'          => 'ReachJson',
        'sequenceCalls'      => 'SequenceCalls',
        'sequenceEndTime'    => 'SequenceEndTime',
        'sequenceStartTime'  => 'SequenceStartTime',
        'smsAbility'         => 'SmsAbility',
        'smsSignMode'        => 'SmsSignMode',
        'success'            => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }
        if (null !== $this->callAbility) {
            $res['CallAbility'] = $this->callAbility;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->GNFlag) {
            $res['GNFlag'] = $this->GNFlag;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->reachJson) {
            $res['ReachJson'] = [];
            if (null !== $this->reachJson && \is_array($this->reachJson)) {
                $n = 0;
                foreach ($this->reachJson as $item) {
                    $res['ReachJson'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sequenceCalls) {
            $res['SequenceCalls'] = [];
            if (null !== $this->sequenceCalls && \is_array($this->sequenceCalls)) {
                $n = 0;
                foreach ($this->sequenceCalls as $item) {
                    $res['SequenceCalls'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sequenceEndTime) {
            $res['SequenceEndTime'] = $this->sequenceEndTime;
        }
        if (null !== $this->sequenceStartTime) {
            $res['SequenceStartTime'] = $this->sequenceStartTime;
        }
        if (null !== $this->smsAbility) {
            $res['SmsAbility'] = $this->smsAbility;
        }
        if (null !== $this->smsSignMode) {
            $res['SmsSignMode'] = $this->smsSignMode;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetXDefaultConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }
        if (isset($map['CallAbility'])) {
            $model->callAbility = $map['CallAbility'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['GNFlag'])) {
            $model->GNFlag = $map['GNFlag'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ReachJson'])) {
            if (!empty($map['ReachJson'])) {
                $model->reachJson = [];
                $n                = 0;
                foreach ($map['ReachJson'] as $item) {
                    $model->reachJson[$n++] = null !== $item ? reachJson::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SequenceCalls'])) {
            if (!empty($map['SequenceCalls'])) {
                $model->sequenceCalls = [];
                $n                    = 0;
                foreach ($map['SequenceCalls'] as $item) {
                    $model->sequenceCalls[$n++] = null !== $item ? sequenceCalls::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SequenceEndTime'])) {
            $model->sequenceEndTime = $map['SequenceEndTime'];
        }
        if (isset($map['SequenceStartTime'])) {
            $model->sequenceStartTime = $map['SequenceStartTime'];
        }
        if (isset($map['SmsAbility'])) {
            $model->smsAbility = $map['SmsAbility'];
        }
        if (isset($map['SmsSignMode'])) {
            $model->smsSignMode = $map['SmsSignMode'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
