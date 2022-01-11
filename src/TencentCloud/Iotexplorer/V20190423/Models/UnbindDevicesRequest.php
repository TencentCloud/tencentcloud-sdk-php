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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UnbindDevices请求参数结构体
 *
 * @method string getGatewayProductId() 获取网关设备的产品ID
 * @method void setGatewayProductId(string $GatewayProductId) 设置网关设备的产品ID
 * @method string getGatewayDeviceName() 获取网关设备的设备名
 * @method void setGatewayDeviceName(string $GatewayDeviceName) 设置网关设备的设备名
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method array getDeviceNames() 获取设备名列表
 * @method void setDeviceNames(array $DeviceNames) 设置设备名列表
 */
class UnbindDevicesRequest extends AbstractModel
{
    /**
     * @var string 网关设备的产品ID
     */
    public $GatewayProductId;

    /**
     * @var string 网关设备的设备名
     */
    public $GatewayDeviceName;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var array 设备名列表
     */
    public $DeviceNames;

    /**
     * @param string $GatewayProductId 网关设备的产品ID
     * @param string $GatewayDeviceName 网关设备的设备名
     * @param string $ProductId 产品ID
     * @param array $DeviceNames 设备名列表
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
        if (array_key_exists("GatewayProductId",$param) and $param["GatewayProductId"] !== null) {
            $this->GatewayProductId = $param["GatewayProductId"];
        }

        if (array_key_exists("GatewayDeviceName",$param) and $param["GatewayDeviceName"] !== null) {
            $this->GatewayDeviceName = $param["GatewayDeviceName"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceNames",$param) and $param["DeviceNames"] !== null) {
            $this->DeviceNames = $param["DeviceNames"];
        }
    }
}
