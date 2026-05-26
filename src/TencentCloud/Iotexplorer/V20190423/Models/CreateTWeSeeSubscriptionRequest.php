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
 * @method string getProductId() 获取产品 ID
 * @method void setProductId(string $ProductId) 设置产品 ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getServiceType() 获取算法类型。可选值：

- `VID_COMP`：视频理解
 * @method void setServiceType(string $ServiceType) 设置算法类型。可选值：

- `VID_COMP`：视频理解
 * @method string getServiceTier() 获取套餐规格。可选值：

- `BASIC`：包年包月基础版（适用于视频理解）
 * @method void setServiceTier(string $ServiceTier) 设置套餐规格。可选值：

- `BASIC`：包年包月基础版（适用于视频理解）
 * @method integer getPeriod() 获取订阅购买时长，单位：月，支持 1-60
 * @method void setPeriod(integer $Period) 设置订阅购买时长，单位：月，支持 1-60
 * @method integer getChannelId() 获取通道 ID
 * @method void setChannelId(integer $ChannelId) 设置通道 ID
 * @method string getCustomOrderId() 获取自定义订单 ID
 * @method void setCustomOrderId(string $CustomOrderId) 设置自定义订单 ID
 * @method string getRenewFlag() 获取续费标识。可选值：
- `NOTIFY_AND_MANUAL_RENEW`：到期前通知并手动续费（默认）
- `NOTIFY_AND_AUTO_RENEW`：到期前通知并自动续费
- `DISABLE_NOTIFY_AND_MANUAL_RENEW`：不通知且手动续费
 * @method void setRenewFlag(string $RenewFlag) 设置续费标识。可选值：
- `NOTIFY_AND_MANUAL_RENEW`：到期前通知并手动续费（默认）
- `NOTIFY_AND_AUTO_RENEW`：到期前通知并自动续费
- `DISABLE_NOTIFY_AND_MANUAL_RENEW`：不通知且手动续费
 */
class CreateTWeSeeSubscriptionRequest extends AbstractModel
{
    /**
     * @var string 产品 ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 算法类型。可选值：

- `VID_COMP`：视频理解
     */
    public $ServiceType;

    /**
     * @var string 套餐规格。可选值：

- `BASIC`：包年包月基础版（适用于视频理解）
     */
    public $ServiceTier;

    /**
     * @var integer 订阅购买时长，单位：月，支持 1-60
     */
    public $Period;

    /**
     * @var integer 通道 ID
     */
    public $ChannelId;

    /**
     * @var string 自定义订单 ID
     */
    public $CustomOrderId;

    /**
     * @var string 续费标识。可选值：
- `NOTIFY_AND_MANUAL_RENEW`：到期前通知并手动续费（默认）
- `NOTIFY_AND_AUTO_RENEW`：到期前通知并自动续费
- `DISABLE_NOTIFY_AND_MANUAL_RENEW`：不通知且手动续费
     */
    public $RenewFlag;

    /**
     * @param string $ProductId 产品 ID
     * @param string $DeviceName 设备名称
     * @param string $ServiceType 算法类型。可选值：

- `VID_COMP`：视频理解
     * @param string $ServiceTier 套餐规格。可选值：

- `BASIC`：包年包月基础版（适用于视频理解）
     * @param integer $Period 订阅购买时长，单位：月，支持 1-60
     * @param integer $ChannelId 通道 ID
     * @param string $CustomOrderId 自定义订单 ID
     * @param string $RenewFlag 续费标识。可选值：
- `NOTIFY_AND_MANUAL_RENEW`：到期前通知并手动续费（默认）
- `NOTIFY_AND_AUTO_RENEW`：到期前通知并自动续费
- `DISABLE_NOTIFY_AND_MANUAL_RENEW`：不通知且手动续费
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
