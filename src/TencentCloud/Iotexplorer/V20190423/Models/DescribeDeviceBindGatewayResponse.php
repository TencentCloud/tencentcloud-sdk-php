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
 * DescribeDeviceBindGateway返回参数结构体
 *
 * @method string getGatewayProductId() 获取网关产品ID
 * @method void setGatewayProductId(string $GatewayProductId) 设置网关产品ID
 * @method string getGatewayDeviceName() 获取网关设备名
 * @method void setGatewayDeviceName(string $GatewayDeviceName) 设置网关设备名
 * @method string getGatewayName() 获取网关产品名称
 * @method void setGatewayName(string $GatewayName) 设置网关产品名称
 * @method string getGatewayProductOwnerName() 获取设备对应产品所属的主账号名称
 * @method void setGatewayProductOwnerName(string $GatewayProductOwnerName) 设置设备对应产品所属的主账号名称
 * @method string getGatewayProductOwnerUin() 获取设备对应产品所属的主账号 UIN
 * @method void setGatewayProductOwnerUin(string $GatewayProductOwnerUin) 设置设备对应产品所属的主账号 UIN
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDeviceBindGatewayResponse extends AbstractModel
{
    /**
     * @var string 网关产品ID
     */
    public $GatewayProductId;

    /**
     * @var string 网关设备名
     */
    public $GatewayDeviceName;

    /**
     * @var string 网关产品名称
     */
    public $GatewayName;

    /**
     * @var string 设备对应产品所属的主账号名称
     */
    public $GatewayProductOwnerName;

    /**
     * @var string 设备对应产品所属的主账号 UIN
     */
    public $GatewayProductOwnerUin;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $GatewayProductId 网关产品ID
     * @param string $GatewayDeviceName 网关设备名
     * @param string $GatewayName 网关产品名称
     * @param string $GatewayProductOwnerName 设备对应产品所属的主账号名称
     * @param string $GatewayProductOwnerUin 设备对应产品所属的主账号 UIN
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("GatewayName",$param) and $param["GatewayName"] !== null) {
            $this->GatewayName = $param["GatewayName"];
        }

        if (array_key_exists("GatewayProductOwnerName",$param) and $param["GatewayProductOwnerName"] !== null) {
            $this->GatewayProductOwnerName = $param["GatewayProductOwnerName"];
        }

        if (array_key_exists("GatewayProductOwnerUin",$param) and $param["GatewayProductOwnerUin"] !== null) {
            $this->GatewayProductOwnerUin = $param["GatewayProductOwnerUin"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
