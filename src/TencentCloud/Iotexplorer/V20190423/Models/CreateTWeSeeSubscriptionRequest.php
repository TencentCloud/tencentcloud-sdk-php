<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTWeSeeSubscription请求参数结构体
 *
 * @method string getProductId() 获取<p>产品 ID</p>
 * @method void setProductId(string $ProductId) 设置<p>产品 ID</p>
 * @method string getDeviceName() 获取<p>设备名称</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名称</p>
 * @method string getServiceType() 获取<p>算法类型</p><p>枚举值：</p><ul><li>VID_COMP： 视频理解</li></ul>
 * @method void setServiceType(string $ServiceType) 设置<p>算法类型</p><p>枚举值：</p><ul><li>VID_COMP： 视频理解</li></ul>
 * @method string getServiceTier() 获取<p>套餐规格</p><p>枚举值：</p><ul><li>BASIC： 包年包月基础版</li><li>ADVANCED： 包年包月高级版</li></ul>
 * @method void setServiceTier(string $ServiceTier) 设置<p>套餐规格</p><p>枚举值：</p><ul><li>BASIC： 包年包月基础版</li><li>ADVANCED： 包年包月高级版</li></ul>
 * @method integer getPeriod() 获取<p>订阅购买时长，单位：月，支持 1-60</p>
 * @method void setPeriod(integer $Period) 设置<p>订阅购买时长，单位：月，支持 1-60</p>
 * @method integer getChannelId() 获取<p>通道 ID</p>
 * @method void setChannelId(integer $ChannelId) 设置<p>通道 ID</p>
 * @method string getCustomOrderId() 获取<p>自定义订单 ID</p>
 * @method void setCustomOrderId(string $CustomOrderId) 设置<p>自定义订单 ID</p>
 * @method string getRenewFlag() 获取<p>续费标识。可选值：</p><ul><li><code>NOTIFY_AND_MANUAL_RENEW</code>：到期前通知并手动续费（默认）</li><li><code>NOTIFY_AND_AUTO_RENEW</code>：到期前通知并自动续费</li><li><code>DISABLE_NOTIFY_AND_MANUAL_RENEW</code>：不通知且手动续费</li></ul>
 * @method void setRenewFlag(string $RenewFlag) 设置<p>续费标识。可选值：</p><ul><li><code>NOTIFY_AND_MANUAL_RENEW</code>：到期前通知并手动续费（默认）</li><li><code>NOTIFY_AND_AUTO_RENEW</code>：到期前通知并自动续费</li><li><code>DISABLE_NOTIFY_AND_MANUAL_RENEW</code>：不通知且手动续费</li></ul>
 */
class CreateTWeSeeSubscriptionRequest extends AbstractModel
{
    /**
     * @var string <p>产品 ID</p>
     */
    public $ProductId;

    /**
     * @var string <p>设备名称</p>
     */
    public $DeviceName;

    /**
     * @var string <p>算法类型</p><p>枚举值：</p><ul><li>VID_COMP： 视频理解</li></ul>
     */
    public $ServiceType;

    /**
     * @var string <p>套餐规格</p><p>枚举值：</p><ul><li>BASIC： 包年包月基础版</li><li>ADVANCED： 包年包月高级版</li></ul>
     */
    public $ServiceTier;

    /**
     * @var integer <p>订阅购买时长，单位：月，支持 1-60</p>
     */
    public $Period;

    /**
     * @var integer <p>通道 ID</p>
     */
    public $ChannelId;

    /**
     * @var string <p>自定义订单 ID</p>
     */
    public $CustomOrderId;

    /**
     * @var string <p>续费标识。可选值：</p><ul><li><code>NOTIFY_AND_MANUAL_RENEW</code>：到期前通知并手动续费（默认）</li><li><code>NOTIFY_AND_AUTO_RENEW</code>：到期前通知并自动续费</li><li><code>DISABLE_NOTIFY_AND_MANUAL_RENEW</code>：不通知且手动续费</li></ul>
     */
    public $RenewFlag;

    /**
     * @param string $ProductId <p>产品 ID</p>
     * @param string $DeviceName <p>设备名称</p>
     * @param string $ServiceType <p>算法类型</p><p>枚举值：</p><ul><li>VID_COMP： 视频理解</li></ul>
     * @param string $ServiceTier <p>套餐规格</p><p>枚举值：</p><ul><li>BASIC： 包年包月基础版</li><li>ADVANCED： 包年包月高级版</li></ul>
     * @param integer $Period <p>订阅购买时长，单位：月，支持 1-60</p>
     * @param integer $ChannelId <p>通道 ID</p>
     * @param string $CustomOrderId <p>自定义订单 ID</p>
     * @param string $RenewFlag <p>续费标识。可选值：</p><ul><li><code>NOTIFY_AND_MANUAL_RENEW</code>：到期前通知并手动续费（默认）</li><li><code>NOTIFY_AND_AUTO_RENEW</code>：到期前通知并自动续费</li><li><code>DISABLE_NOTIFY_AND_MANUAL_RENEW</code>：不通知且手动续费</li></ul>
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ServiceTier",$param) and $param["ServiceTier"] !== null) {
            $this->ServiceTier = $param["ServiceTier"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("CustomOrderId",$param) and $param["CustomOrderId"] !== null) {
            $this->CustomOrderId = $param["CustomOrderId"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
