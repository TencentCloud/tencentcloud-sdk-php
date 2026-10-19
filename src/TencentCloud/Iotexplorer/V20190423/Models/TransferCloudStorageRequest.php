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
 * TransferCloudStorage请求参数结构体
 *
 * @method string getProductId() 获取<p>产品ID</p>
 * @method void setProductId(string $ProductId) 设置<p>产品ID</p>
 * @method string getDeviceName() 获取<p>已开通云存的设备名称</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>已开通云存的设备名称</p>
 * @method string getToDeviceName() 获取<p>未开通云存的设备名称</p>
 * @method void setToDeviceName(string $ToDeviceName) 设置<p>未开通云存的设备名称</p>
 * @method string getToProductId() 获取<p>未开通云存的设备产品ID</p>
 * @method void setToProductId(string $ToProductId) 设置<p>未开通云存的设备产品ID</p>
 * @method integer getChannelId() 获取<p>已开通云存的通道id</p>
 * @method void setChannelId(integer $ChannelId) 设置<p>已开通云存的通道id</p>
 * @method integer getToChannelId() 获取<p>未开通云存的通道id</p>
 * @method void setToChannelId(integer $ToChannelId) 设置<p>未开通云存的通道id</p>
 */
class TransferCloudStorageRequest extends AbstractModel
{
    /**
     * @var string <p>产品ID</p>
     */
    public $ProductId;

    /**
     * @var string <p>已开通云存的设备名称</p>
     */
    public $DeviceName;

    /**
     * @var string <p>未开通云存的设备名称</p>
     */
    public $ToDeviceName;

    /**
     * @var string <p>未开通云存的设备产品ID</p>
     */
    public $ToProductId;

    /**
     * @var integer <p>已开通云存的通道id</p>
     */
    public $ChannelId;

    /**
     * @var integer <p>未开通云存的通道id</p>
     */
    public $ToChannelId;

    /**
     * @param string $ProductId <p>产品ID</p>
     * @param string $DeviceName <p>已开通云存的设备名称</p>
     * @param string $ToDeviceName <p>未开通云存的设备名称</p>
     * @param string $ToProductId <p>未开通云存的设备产品ID</p>
     * @param integer $ChannelId <p>已开通云存的通道id</p>
     * @param integer $ToChannelId <p>未开通云存的通道id</p>
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

        if (array_key_exists("ToDeviceName",$param) and $param["ToDeviceName"] !== null) {
            $this->ToDeviceName = $param["ToDeviceName"];
        }

        if (array_key_exists("ToProductId",$param) and $param["ToProductId"] !== null) {
            $this->ToProductId = $param["ToProductId"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ToChannelId",$param) and $param["ToChannelId"] !== null) {
            $this->ToChannelId = $param["ToChannelId"];
        }
    }
}
