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
 * ResetCloudStorage请求参数结构体
 *
 * @method string getProductId() 获取<p>产品ID</p>
 * @method void setProductId(string $ProductId) 设置<p>产品ID</p>
 * @method string getDeviceName() 获取<p>设备名称</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名称</p>
 * @method integer getChannelId() 获取<p>通道ID 非NVR设备则不填 NVR设备则必填 默认为无</p>
 * @method void setChannelId(integer $ChannelId) 设置<p>通道ID 非NVR设备则不填 NVR设备则必填 默认为无</p>
 * @method string getUserId() 获取<p>云存用户Id，为空则为默认云存空间。</p>
 * @method void setUserId(string $UserId) 设置<p>云存用户Id，为空则为默认云存空间。</p>
 * @method string getOrderId() 获取<p>订单id</p>
 * @method void setOrderId(string $OrderId) 设置<p>订单id</p>
 */
class ResetCloudStorageRequest extends AbstractModel
{
    /**
     * @var string <p>产品ID</p>
     */
    public $ProductId;

    /**
     * @var string <p>设备名称</p>
     */
    public $DeviceName;

    /**
     * @var integer <p>通道ID 非NVR设备则不填 NVR设备则必填 默认为无</p>
     */
    public $ChannelId;

    /**
     * @var string <p>云存用户Id，为空则为默认云存空间。</p>
     */
    public $UserId;

    /**
     * @var string <p>订单id</p>
     */
    public $OrderId;

    /**
     * @param string $ProductId <p>产品ID</p>
     * @param string $DeviceName <p>设备名称</p>
     * @param integer $ChannelId <p>通道ID 非NVR设备则不填 NVR设备则必填 默认为无</p>
     * @param string $UserId <p>云存用户Id，为空则为默认云存空间。</p>
     * @param string $OrderId <p>订单id</p>
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

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }
    }
}
