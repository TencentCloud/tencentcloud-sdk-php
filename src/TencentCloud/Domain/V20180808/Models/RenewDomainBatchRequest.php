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
 * RenewDomainBatch请求参数结构体
 *
 * @method integer getPeriod() 获取域名续费的年限。
 * @method void setPeriod(integer $Period) 设置域名续费的年限。
 * @method array getDomains() 获取批量续费的域名。
 * @method void setDomains(array $Domains) 设置批量续费的域名。
 * @method integer getPayMode() 获取付费模式 0手动在线付费，1使用余额付费，2使用特惠包。
 * @method void setPayMode(integer $PayMode) 设置付费模式 0手动在线付费，1使用余额付费，2使用特惠包。
 * @method integer getAutoRenewFlag() 获取自动续费开关。有三个可选值：
0 表示关闭，不自动续费
1 表示开启，将自动续费
2 表示不处理，保留域名原有状态（默认值）
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费开关。有三个可选值：
0 表示关闭，不自动续费
1 表示开启，将自动续费
2 表示不处理，保留域名原有状态（默认值）
 * @method string getPackageResourceId() 获取特惠包ID
 * @method void setPackageResourceId(string $PackageResourceId) 设置特惠包ID
 * @method string getChannelFrom() 获取渠道来源，pc/miniprogram/h5等
 * @method void setChannelFrom(string $ChannelFrom) 设置渠道来源，pc/miniprogram/h5等
 * @method string getOrderFrom() 获取订单来源，common正常/dianshi_active点石活动等
 * @method void setOrderFrom(string $OrderFrom) 设置订单来源，common正常/dianshi_active点石活动等
 * @method string getActivityId() 获取活动id
 * @method void setActivityId(string $ActivityId) 设置活动id
 */
class RenewDomainBatchRequest extends AbstractModel
{
    /**
     * @var integer 域名续费的年限。
     */
    public $Period;

    /**
     * @var array 批量续费的域名。
     */
    public $Domains;

    /**
     * @var integer 付费模式 0手动在线付费，1使用余额付费，2使用特惠包。
     */
    public $PayMode;

    /**
     * @var integer 自动续费开关。有三个可选值：
0 表示关闭，不自动续费
1 表示开启，将自动续费
2 表示不处理，保留域名原有状态（默认值）
     */
    public $AutoRenewFlag;

    /**
     * @var string 特惠包ID
     */
    public $PackageResourceId;

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
     * @param integer $Period 域名续费的年限。
     * @param array $Domains 批量续费的域名。
     * @param integer $PayMode 付费模式 0手动在线付费，1使用余额付费，2使用特惠包。
     * @param integer $AutoRenewFlag 自动续费开关。有三个可选值：
0 表示关闭，不自动续费
1 表示开启，将自动续费
2 表示不处理，保留域名原有状态（默认值）
     * @param string $PackageResourceId 特惠包ID
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("PackageResourceId",$param) and $param["PackageResourceId"] !== null) {
            $this->PackageResourceId = $param["PackageResourceId"];
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
