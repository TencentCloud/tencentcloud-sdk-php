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
 * CreateCloudStorageAIService请求参数结构体
 *
 * @method string getProductId() 获取产品 ID
 * @method void setProductId(string $ProductId) 设置产品 ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getPackageId() 获取云存 AI 套餐 ID。可选值：

- `1m_low_od`：低功耗目标检测月套餐
- `1y_low_od`：低功耗目标检测年套餐
- `1m_ev_od`：事件目标检测月套餐
- `1y_ev_od`：事件目标检测年套餐
- `1m_ft_od`：全时目标检测月套餐
- `1y_ft_od`：全时目标检测年套餐
- `1m_low_hl`：低功耗视频浓缩月套餐
- `1y_low_hl`：低功耗视频浓缩年套餐
- `1m_ev_hl`：事件视频浓缩月套餐
- `1y_ev_hl`：事件视频浓缩年套餐
- `1m_ft_hl`：全时视频浓缩月套餐
- `1y_ft_hl`：全时视频浓缩年套餐
 * @method void setPackageId(string $PackageId) 设置云存 AI 套餐 ID。可选值：

- `1m_low_od`：低功耗目标检测月套餐
- `1y_low_od`：低功耗目标检测年套餐
- `1m_ev_od`：事件目标检测月套餐
- `1y_ev_od`：事件目标检测年套餐
- `1m_ft_od`：全时目标检测月套餐
- `1y_ft_od`：全时目标检测年套餐
- `1m_low_hl`：低功耗视频浓缩月套餐
- `1y_low_hl`：低功耗视频浓缩年套餐
- `1m_ev_hl`：事件视频浓缩月套餐
- `1y_ev_hl`：事件视频浓缩年套餐
- `1m_ft_hl`：全时视频浓缩月套餐
- `1y_ft_hl`：全时视频浓缩年套餐
 * @method integer getChannelId() 获取通道 ID
 * @method void setChannelId(integer $ChannelId) 设置通道 ID
 * @method string getOrderId() 获取订单 ID
 * @method void setOrderId(string $OrderId) 设置订单 ID
 */
class CreateCloudStorageAIServiceRequest extends AbstractModel
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
     * @var string 云存 AI 套餐 ID。可选值：

- `1m_low_od`：低功耗目标检测月套餐
- `1y_low_od`：低功耗目标检测年套餐
- `1m_ev_od`：事件目标检测月套餐
- `1y_ev_od`：事件目标检测年套餐
- `1m_ft_od`：全时目标检测月套餐
- `1y_ft_od`：全时目标检测年套餐
- `1m_low_hl`：低功耗视频浓缩月套餐
- `1y_low_hl`：低功耗视频浓缩年套餐
- `1m_ev_hl`：事件视频浓缩月套餐
- `1y_ev_hl`：事件视频浓缩年套餐
- `1m_ft_hl`：全时视频浓缩月套餐
- `1y_ft_hl`：全时视频浓缩年套餐
     */
    public $PackageId;

    /**
     * @var integer 通道 ID
     */
    public $ChannelId;

    /**
     * @var string 订单 ID
     */
    public $OrderId;

    /**
     * @param string $ProductId 产品 ID
     * @param string $DeviceName 设备名称
     * @param string $PackageId 云存 AI 套餐 ID。可选值：

- `1m_low_od`：低功耗目标检测月套餐
- `1y_low_od`：低功耗目标检测年套餐
- `1m_ev_od`：事件目标检测月套餐
- `1y_ev_od`：事件目标检测年套餐
- `1m_ft_od`：全时目标检测月套餐
- `1y_ft_od`：全时目标检测年套餐
- `1m_low_hl`：低功耗视频浓缩月套餐
- `1y_low_hl`：低功耗视频浓缩年套餐
- `1m_ev_hl`：事件视频浓缩月套餐
- `1y_ev_hl`：事件视频浓缩年套餐
- `1m_ft_hl`：全时视频浓缩月套餐
- `1y_ft_hl`：全时视频浓缩年套餐
     * @param integer $ChannelId 通道 ID
     * @param string $OrderId 订单 ID
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

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }
    }
}
