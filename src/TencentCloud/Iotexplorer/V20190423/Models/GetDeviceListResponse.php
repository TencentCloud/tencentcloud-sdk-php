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
 * GetDeviceList返回参数结构体
 *
 * @method array getDevices() 获取返回的设备列表, 注意列表设备的 DevicePsk 为空, 要获取设备的 DevicePsk 请使用 DescribeDevice
 * @method void setDevices(array $Devices) 设置返回的设备列表, 注意列表设备的 DevicePsk 为空, 要获取设备的 DevicePsk 请使用 DescribeDevice
 * @method integer getTotal() 获取产品下的设备总数
 * @method void setTotal(integer $Total) 设置产品下的设备总数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetDeviceListResponse extends AbstractModel
{
    /**
     * @var array 返回的设备列表, 注意列表设备的 DevicePsk 为空, 要获取设备的 DevicePsk 请使用 DescribeDevice
     */
    public $Devices;

    /**
     * @var integer 产品下的设备总数
     */
    public $Total;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Devices 返回的设备列表, 注意列表设备的 DevicePsk 为空, 要获取设备的 DevicePsk 请使用 DescribeDevice
     * @param integer $Total 产品下的设备总数
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
        if (array_key_exists("Devices",$param) and $param["Devices"] !== null) {
            $this->Devices = [];
            foreach ($param["Devices"] as $key => $value){
                $obj = new DeviceInfo();
                $obj->deserialize($value);
                array_push($this->Devices, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
