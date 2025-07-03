<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TransferInDomainBatch请求参数结构体
 *
 * @method array getDomains() 获取转入的域名名称数组。
一次提交不大于4000个
 * @method void setDomains(array $Domains) 设置转入的域名名称数组。
一次提交不大于4000个
 * @method array getPassWords() 获取域名转移码数组。
 * @method void setPassWords(array $PassWords) 设置域名转移码数组。
 * @method string getTemplateId() 获取模板ID。 
可通过[DescribeTemplateList](https://cloud.tencent.com/document/api/242/48940)接口获取
 * @method void setTemplateId(string $TemplateId) 设置模板ID。 
可通过[DescribeTemplateList](https://cloud.tencent.com/document/api/242/48940)接口获取
 * @method integer getPayMode() 获取付费模式 0手动在线付费，1使用余额付费。
 * @method void setPayMode(integer $PayMode) 设置付费模式 0手动在线付费，1使用余额付费。
 * @method integer getAutoRenewFlag() 获取自动续费开关。有两个可选值：
0 表示关闭，不自动续费（默认值）
1 表示开启，将自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费开关。有两个可选值：
0 表示关闭，不自动续费（默认值）
1 表示开启，将自动续费
 * @method boolean getLockTransfer() 获取true： 开启60天内禁止转移注册商锁定
false：关闭60天内禁止转移注册商锁定
默认 true
 * @method void setLockTransfer(boolean $LockTransfer) 设置true： 开启60天内禁止转移注册商锁定
false：关闭60天内禁止转移注册商锁定
默认 true
 * @method integer getUpdateProhibition() 获取是否开启更新锁：0=默认不开启，1=开启
 * @method void setUpdateProhibition(integer $UpdateProhibition) 设置是否开启更新锁：0=默认不开启，1=开启
 * @method integer getTransferProhibition() 获取是否开启转移锁：0=默认不开启，1=开启
 * @method void setTransferProhibition(integer $TransferProhibition) 设置是否开启转移锁：0=默认不开启，1=开启
 * @method string getChannelFrom() 获取渠道来源，pc/miniprogram/h5等
 * @method void setChannelFrom(string $ChannelFrom) 设置渠道来源，pc/miniprogram/h5等
 * @method string getOrderFrom() 获取订单来源，common正常/dianshi_active点石活动等
 * @method void setOrderFrom(string $OrderFrom) 设置订单来源，common正常/dianshi_active点石活动等
 * @method string getActivityId() 获取活动id
 * @method void setActivityId(string $ActivityId) 设置活动id
 */
class TransferInDomainBatchRequest extends AbstractModel
{
    /**
     * @var array 转入的域名名称数组。
一次提交不大于4000个
     */
    public $Domains;

    /**
     * @var array 域名转移码数组。
     */
    public $PassWords;

    /**
     * @var string 模板ID。 
可通过[DescribeTemplateList](https://cloud.tencent.com/document/api/242/48940)接口获取
     */
    public $TemplateId;

    /**
     * @var integer 付费模式 0手动在线付费，1使用余额付费。
     */
    public $PayMode;

    /**
     * @var integer 自动续费开关。有两个可选值：
0 表示关闭，不自动续费（默认值）
1 表示开启，将自动续费
     */
    public $AutoRenewFlag;

    /**
     * @var boolean true： 开启60天内禁止转移注册商锁定
false：关闭60天内禁止转移注册商锁定
默认 true
     */
    public $LockTransfer;

    /**
     * @var integer 是否开启更新锁：0=默认不开启，1=开启
     */
    public $UpdateProhibition;

    /**
     * @var integer 是否开启转移锁：0=默认不开启，1=开启
     */
    public $TransferProhibition;

    /**
     * @var string 渠道来源，pc/miniprogram/h5等
     */
    public $ChannelFrom;

    /**
     * @var string 订单来源，common正常/dianshi_active点石活动等
     */
    public $OrderFrom;

    /**
     * @var string 活动id
     */
    public $ActivityId;

    /**
     * @param array $Domains 转入的域名名称数组。
一次提交不大于4000个
     * @param array $PassWords 域名转移码数组。
     * @param string $TemplateId 模板ID。 
可通过[DescribeTemplateList](https://cloud.tencent.com/document/api/242/48940)接口获取
     * @param integer $PayMode 付费模式 0手动在线付费，1使用余额付费。
     * @param integer $AutoRenewFlag 自动续费开关。有两个可选值：
0 表示关闭，不自动续费（默认值）
1 表示开启，将自动续费
     * @param boolean $LockTransfer true： 开启60天内禁止转移注册商锁定
false：关闭60天内禁止转移注册商锁定
默认 true
     * @param integer $UpdateProhibition 是否开启更新锁：0=默认不开启，1=开启
     * @param integer $TransferProhibition 是否开启转移锁：0=默认不开启，1=开启
     * @param string $ChannelFrom 渠道来源，pc/miniprogram/h5等
     * @param string $OrderFrom 订单来源，common正常/dianshi_active点石活动等
     * @param string $ActivityId 活动id
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("PassWords",$param) and $param["PassWords"] !== null) {
            $this->PassWords = $param["PassWords"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("LockTransfer",$param) and $param["LockTransfer"] !== null) {
            $this->LockTransfer = $param["LockTransfer"];
        }

        if (array_key_exists("UpdateProhibition",$param) and $param["UpdateProhibition"] !== null) {
            $this->UpdateProhibition = $param["UpdateProhibition"];
        }

        if (array_key_exists("TransferProhibition",$param) and $param["TransferProhibition"] !== null) {
            $this->TransferProhibition = $param["TransferProhibition"];
        }

        if (array_key_exists("ChannelFrom",$param) and $param["ChannelFrom"] !== null) {
            $this->ChannelFrom = $param["ChannelFrom"];
        }

        if (array_key_exists("OrderFrom",$param) and $param["OrderFrom"] !== null) {
            $this->OrderFrom = $param["OrderFrom"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }
    }
}
